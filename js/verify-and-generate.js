

$(document).ready(function ($){

    "use strict";


    $(".obscurer").addClass('close');


    function validateAndGenerate() {



              var accountField = $( "#text" );
              $.ajax({
                 type: "POST",
                 url: "php/buy-seeds-ramp",
                 data: "method=validateusername&username="+accountField.val().toLowerCase(),
                 beforeSend: function() {

                    $(".obscurer").removeClass('close');
                 },
                 success: function(response) {
                   $(".obscurer").addClass('close');
                    var obj = jQuery.parseJSON(response);

                    if( (obj.bitcoinAddress).length > 0 )
                    {

                        $('.verify').remove();
                        $('input#text').removeClass('wrong')
                        $('input#text').addClass('yess');
                        $('.yeah').addClass('show');
                        $('.nope').removeClass('show');
                        $('.please-verify').remove();


                        //HTML generation here

                        $('input#text').addClass('no-data');
                        $('.copy-link').removeClass('invs');

                        $('#qrcode').html('');
                        $('#only-qr').html('');

                        $('.stick-back').remove();
                        $('.stick-fake').remove();

                        $('.shadow-wrapper').addClass('shift');
                        $('.shadow-wrapper-wr').addClass('shift');

                        $('#pngDownloader').addClass('in');
                        $('#pngDownloaderQr').addClass('in');
                        $('.retry').addClass('in');

                        $('#printDiv').prepend('<img class="stick-back" src="img/stickers/sticker-24.png"/>');

                        var text = $('#text');
                        text.val('https://joinseeds.app.link/request-invite/' + text.val());




                        var qrcode = new QRCode("qrcode", {
                              width: 120,
                              height: 120,
                              colorLight : "#E9EDD9",
                              colorDark : "#2b4835"
                          });

                          var onlyqrcode = new QRCode("only-qr", {
                                width: 120,
                                height: 120,
                                colorLight : "#F2F5EC",
                                colorDark : "#2b4835"
                            });

                        function makeCode () {
                            var elText = document.getElementById("text");

                            /*if (!elText.value) {
                              alert("Input a text");
                              elText.focus();
                              return;
                            }*/


                            qrcode.makeCode(elText.value);
                            onlyqrcode.makeCode(elText.value);

                            console.log(elText.value);
                          }

                          makeCode();
                          return true;


                    }
                    else
                    {
                        $('input#text').addClass('wrong');

                        $('.nope').addClass('show');
                        $('#alert-box').append('<div class="please-verify">The Username is incorrect, please retry</div>');
                        return false;
                    }


                 }
              });
            }


    $('.verify').on('click',function(){
        validateAndGenerate();
    });


    $('input#text').keydown(function(e){
        if (e.keyCode === 13) {
            validateAndGenerate();
        }
    });



    $('.copy-link').on('click',function(){

        alert('link copied!');

        var copyText = document.getElementById("text");

          /* Select the text field */
          copyText.select();
          copyText.setSelectionRange(0, 99999); /* For mobile devices */

          /* Copy the text inside the text field */
          document.execCommand("copy");

    });



    // generate sticker on button click

    /* $('#pdfDownloader').click(function() {

      var w = document.getElementById("printDiv").offsetWidth;
      var h = document.getElementById("printDiv").offsetHeight;

      html2canvas(document.getElementById("printDiv"), {
        dpi:300,
        useCORS: true,
        background:undefined,
        onrendered: function(canvas) {
          var imgData = canvas.toDataURL("image/png", 1);
          var doc = new jsPDF('P', 'px', [w, h]);
          doc.addImage(imgData, 'PNG', 0, 0, w, h);
          doc.save('sticker-print.pdf');
        }
      });
    });*/


    $("#pngDownloader").click(function() {
      html2canvas($("#printDiv"), {
        dpi:300,
        background:undefined,
        useCORS: true,
        onrendered: function(canvas) {
          saveAs(canvas.toDataURL(), 'sticker.png');
        }
      });

      $('html, body').animate({
          scrollTop: $("#fake-anch").offset().top
      }, 500);
    });

    $("#pngDownloaderQr").click(function() {
      html2canvas($("#only-qr"), {
        dpi:300,
        background:undefined,
        useCORS: true,
        onrendered: function(canvas) {
          saveAs(canvas.toDataURL(), 'qr-code.png');
        }
      });

      $('html, body').animate({
          scrollTop: $("#fake-anch").offset().top
      }, 500);
    });


    function saveAs(uri, filename) {
        var link = document.createElement('a');
        if (typeof link.download === 'string') {
          link.href = uri;
          link.download = filename;

          //Firefox requires the link to be in the body
          document.body.appendChild(link);

          //simulate click
          link.click();

          //remove the link when done
          document.body.removeChild(link);
        } else {
          window.open(uri);
        }
      }


});

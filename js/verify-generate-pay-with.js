

$(document).ready(function ($){

    "use strict";


    $(".obscurer").addClass('close');


    function validateAndGeneratePay() {



              var accountField = $( "#text-pay" );
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

                        $('.pay-stick .verify-pay').remove();
                        $('.pay-stick input#text').removeClass('wrong')
                        $('.pay-stick input#text-pay').addClass('yess');
                        $('.pay-stick .yeah').addClass('show');
                        $('.pay-stick .nope').removeClass('show');
                        $('.pay-stick .please-verify').remove();


                        //HTML generation here

                        $('.pay-stick input#text-pay').addClass('no-data');
                        $('.pay-stick .copy-link').removeClass('invs');

                        $('.pay-stick #qrcode').html('');
                        $('.pay-stick #only-qr').html('');

                        $('.pay-stick .stick-back').remove();
                        $('.pay-stick .stick-fake').remove();

                        $('.pay-stick .shadow-wrapper').addClass('shift');
                        $('.pay-stick .shadow-wrapper-wr').addClass('shift');

                        $('.pay-stick #pngDownloader-pay').addClass('in');
                        $('.pay-stick #kitDownloeader-pay').addClass('in');
                        $('.pay-stick .retry').addClass('in');

                        $('.pay-stick #printDivPay').prepend('<img class="stick-back" src="img/stickers/pay-sticker.png"/>');
                        $('.pay-stick .general-stickers .fake-collage').remove();
                        $('.pay-stick .general-stickers').prepend('<img class="real-collage pay" src="img/stickers/stick-pay-collage.svg" />');



                        /* change text inside input*/
                        var textpay = $('#text-pay');
                        textpay.val('https://joinseeds.app.link/payment/' + textpay.val());


                        setTimeout(function () {
                            $('html, body').animate({
                                scrollTop: $("#stick-2").offset().top
                            }, 500);
                        }, 400);




                        var qrcode = new QRCode("qrcode-pay", {
                              width: 120,
                              height: 120,
                              colorLight : "#E9EDD9",
                              colorDark : "#2b4835"
                          });


                        function makeCode () {
                            var elTextPay = document.getElementById("text-pay");

                            /*if (!elText.value) {
                              alert("Input a text");
                              elText.focus();
                              return;
                            }*/


                            qrcode.makeCode(elTextPay.value);
                            console.log(elTextPay.value);
                          }

                          makeCode();
                          return true;


                    }
                    else
                    {
                        $('.pay-stick input#text-pay').addClass('wrong');

                        $('.pay-stick .nope').addClass('show');
                        $('.pay-stick #alert-box').append('<div class="please-verify">The Username is incorrect, please retry</div>');
                        return false;
                    }


                 }
              });
            }


    $('.verify-pay').on('click',function(){
        validateAndGeneratePay();
    });


    $('.pay-stick input#text-pay').keydown(function(e){
        if (e.keyCode === 13) {
            validateAndGeneratePay();
        }
    });



    $('.pay-stick .copy-link').on('click',function(){

        alert('link pay copied!');

        var copyTextPay = document.getElementById("text-pay");

          /* Select the text field */
          copyTextPay.select();
          copyTextPay.setSelectionRange(0, 99999); /* For mobile devices */

          /* Copy the text inside the text field */
          document.execCommand("copy");

    });



    $("#pngDownloader-pay").click(function() {
      html2canvas($("#printDivPay"), {
        dpi:300,
        background:undefined,
        useCORS: true,
        onrendered: function(canvas) {
          saveAs(canvas.toDataURL(), 'payment-seeds-sticker.png');
        }
      });

      $('html, body').animate({
          scrollTop: $("#fake-anch-2").offset().top
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

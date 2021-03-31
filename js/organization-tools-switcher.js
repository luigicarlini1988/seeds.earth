$(function(){


      //clicking on first button
      $('#opt1-btn').click(function(){



            $('#tools-switcher').addClass('open');

            if ($(window).width() < 924) {
              $.ajax({
                type: 'GET',
                url: 'incl/tool1-mobile',
                success: function(data) {
                  // alert(data);
                  $('#tools-switcher').html(data);
                }
              });
            }
            else {



              $.ajax({
                type: 'GET',
                url: 'incl/tool1',
                success: function(data) {
                  // alert(data);
                  $('#tools-switcher').html(data);

                  //code from verify-and-Generate
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

                                  var obj = jQuery.parseJSON(response);

                                  if( (obj.bitcoinAddress).length > 0 )
                                  {

                                      $('.join-stick .verify').remove();
                                      $('.join-stick input#text').removeClass('wrong')
                                      $('.join-stick input#text').addClass('yess');
                                      $('.join-stick .yeah').addClass('show');
                                      $('.join-stick .nope').removeClass('show');
                                      $('.join-stick .please-verify').remove();


                                      //HTML generation here

                                      $('.join-stick input#text').addClass('no-data');
                                      $('.join-stick .copy-link').removeClass('invs');

                                      $('.join-stick #qrcode').html('');
                                      $('.join-stick #only-qr').html('');

                                      $('.join-stick .stick-back').remove();
                                      $('.join-stick .stick-fake').remove();

                                      $('.join-stick .shadow-wrapper').addClass('shift');
                                      $('.join-stick .shadow-wrapper-qr').addClass('shift');

                                      $('.join-stick #pngDownloader').addClass('in');
                                      $('.join-stick #pngDownloaderQr').addClass('in');
                                      $('.join-stick #kitDownloeader').addClass('in');
                                      $('.join-stick .retry').addClass('in');

                                      $('.join-stick #printDiv').prepend('<img class="stick-back" src="img/stickers/invite-sticker.png"/>');

                                      $('.join-stick .general-stickers .fake-collage').remove();
                                      $('.join-stick .general-stickers').prepend('<img class="real-collage" src="img/stickers/stick-join-collage.svg" />');

                                      var text = $('#text');
                                      text.val('https://joinseeds.app.link/request-invite/' + text.val());

                                      setTimeout(function () {
                                          $('html, body').animate({
                                              scrollTop: $("#stick-1").offset().top
                                          }, 500);
                                      }, 400);

                                      $(".obscurer").addClass('close');




                                      var qrcode = new QRCode("qrcode", {
                                            width: 120,
                                            height: 120,
                                            colorLight : "#E9EDD9",
                                            colorDark : "#2b4835"
                                        });

                                        var onlyqrcode = new QRCode("only-qr", {
                                              width: 100,
                                              height: 100,
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
                                      $('.join-stick input#text').addClass('wrong');
                                      $('.join-stick .nope').addClass('show');
                                      $('.join-stick #alert-box').append('<div class="please-verify">The Username is incorrect, please retry</div>');
                                      return false;
                                  }


                               }
                            });
                          }


                  $('.verify').on('click',function(){
                      validateAndGenerate();
                  });


                  $('.join-stick input#text').keydown(function(e){
                      if (e.keyCode === 13) {
                          validateAndGenerate();
                      }
                  });



                  $('.join-stick .copy-link').on('click',function(){



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
                        saveAs(canvas.toDataURL(), 'invite-sticker.png');
                      }
                    });

                    window.location = "/img/stickers/general-stickers.zip";


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
                        saveAs(canvas.toDataURL(), 'invite-qr-code.png');
                      }
                    });


                    $('html, body').animate({
                        scrollTop: $("#fake-anch").offset().top
                    }, 500);
                  });


                 //from here sticker payments

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

                   window.location = "/img/stickers/general-stickers.zip";

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


                }

              });
            }



            $('#opt2 .opt-ins , #opt3 .opt-ins').addClass('opa');

            $('#opt1, #opt2 , #opt3').addClass('status1');

            setTimeout(function () {

                $('html, body').animate({
                    scrollTop: $("#tools-switcher").offset().top
                }, 500);

            }, 400);


            setTimeout(function () {

              $('#opt1-btn').addClass('hide');

              $('#opt1-btn-close').addClass('show');

            }, 600);


    });



    //clicking on the first REMOVE buttons

     $('#opt1-btn-close').click(function(){




      $('.tool1').remove();

      $('#opt2 .opt-ins , #opt3 .opt-ins').removeClass('opa');
      $('#opt1, #opt2 , #opt3').removeClass('status1');


      setTimeout(function () {

        $('#opt1-btn-close').removeClass('show');
        $('#opt1-btn').removeClass('hide');

      }, 600);

      setTimeout(function () {
          $('html, body').animate({
              scrollTop: $("#org-tech").offset().top
          }, 500);
      }, 400);
    });




    //clicking on second button
    $('#opt2-btn').click(function(){

          $('#tools-switcher').addClass('open');



          $.ajax({
            type: 'GET',
            url: 'incl/tool2',
            success: function(data) {
              // alert(data);
              $('#tools-switcher').html(data);

              //news carousel navigation and call

                 var owl = $('.owlCarousel1');
                  owl.owlCarousel(

                    {
                      responsiveClass:true,
                        responsive:{

                            0:{
                                items:1
                              },
                            600:{
                                items:1
                              },
                            900:{
                                items:1
                              }
                        }
                    }
                  );

                  // Go to the next item
                  $('.forward').click(function() {
                      owl.trigger('next.owl.carousel', [500]);
                  })
                  // Go to the previous item
                  $('.back').click(function() {
                      // With optional speed parameter
                      // Parameters has to be in square bracket '[]'
                      owl.trigger('prev.owl.carousel', [500]);
                  })


                  //third owlCarousel

                     var owl2 = $('.owlCarousel2');
                      owl2.owlCarousel(

                        {
                          responsiveClass:true,
                            responsive:{

                                0:{
                                    items:1
                                  },
                                600:{
                                    items:1
                                  },
                                900:{
                                    items:1
                                  }
                            }
                        }
                      );

                      // Go to the next item
                      $('.forward2').click(function() {
                          owl2.trigger('next.owl.carousel', [500]);
                      })
                      // Go to the previous item
                      $('.back2').click(function() {
                          owl2.trigger('prev.owl.carousel', [500]);
                      })


                //third owlCarousel

                   var owl3 = $('.owlCarousel3');
                    owl3.owlCarousel(

                      {
                        responsiveClass:true,
                          responsive:{

                              0:{
                                  items:1
                                },
                              600:{
                                  items:1
                                },
                              900:{
                                  items:1
                                }
                          }
                      }
                    );

                    // Go to the next item
                    $('.forward3').click(function() {
                        owl3.trigger('next.owl.carousel', [500]);
                    })
                    // Go to the previous item
                    $('.back3').click(function() {
                        owl3.trigger('prev.owl.carousel', [500]);
                    })
            }
          });





          $('#opt1 .opt-ins , #opt3 .opt-ins').addClass('opa');

          $('#opt1, #opt2 , #opt3').addClass('status2');

          setTimeout(function () {

              $('html, body').animate({
                  scrollTop: $("#tools-switcher").offset().top
              }, 500);

          }, 400);


          setTimeout(function () {

            $('#opt2-btn').addClass('hide');

            $('#opt2-btn-close').addClass('show');

          }, 600);


    });


    //clicking on the second REMOVE buttons

    $('#opt2-btn-close').click(function(){


      $('.tool2').remove();

      $('#opt1 .opt-ins , #opt3 .opt-ins').removeClass('opa');
      $('#opt1, #opt2 , #opt3').removeClass('status2');

      setTimeout(function () {

        $('#opt2-btn-close').removeClass('show');
        $('#opt2-btn').removeClass('hide');

      }, 600);

      setTimeout(function () {

          $('html, body').animate({
              scrollTop: $("#org-tech").offset().top
          }, 500);

      }, 600);


    });




    //clicking on third button
    $('#opt3-btn').click(function(){

          $('#tools-switcher').addClass('open');

          $('#opt2 .opt-ins , #opt1 .opt-ins').addClass('opa');

          $('#opt1, #opt2 , #opt3').addClass('status3');



          $.ajax({
            type: 'GET',
            url: 'incl/tool3',
            success: function(data) {
              // alert(data);
              $('#tools-switcher').html(data);

            }
          });

          setTimeout(function () {

              $('html, body').animate({
                  scrollTop: $("#tools-switcher").offset().top
              }, 500);

          }, 400);


          setTimeout(function () {

            $('#opt3-btn').addClass('hide');

            $('#opt3-btn-close').addClass('show');

          }, 600);


    });

    //clicking on the second REMOVE buttons

    $('#opt3-btn-close').click(function(){


      $('#opt2 .opt-ins , #opt1 .opt-ins').removeClass('opa');

      $('#opt1, #opt2 , #opt3').removeClass('status3');

      $('.tool3').remove();

        setTimeout(function () {

          $('#opt3-btn-close').removeClass('show');
          $('#opt3-btn').removeClass('hide');

        }, 600);


        setTimeout(function () {

            $('html, body').animate({
                scrollTop: $("#org-tech").offset().top
            }, 500);

        }, 400);


    });






  });

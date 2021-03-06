$(document).ready(function ($){

    "use strict";


    $(".obscurer").addClass('close');

    function validateAndGenerate() {



          var accountField = $( "#org-id" );
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

                    $('input#org-id').removeClass('wrong')
                    $('input#org-id').addClass('yess');
                    $('.yeah').addClass('show');
                    $('.nope').removeClass('show');
                    $('.please-verify').remove();
                    $('.wrap-shower').addClass('open');
                    $( "#verify-org-id" ).remove();
                    $('html, body').animate({
                        scrollTop: $("#scroll-after-valid").offset().top
                    }, 500);

                }

                else
                {
                    $('input#org-id').addClass('wrong');
                    $('.wrap-shower').removeClass('open');
                    $('.nope').addClass('show');
                    $('.yeah').removeClass('show');
                    $('#alert-box').append('<div class="please-verify">The Username is incorrect, please retry</div>');
                    return false;
                }


             }
          });
        }


    $('#verify-org-id').on('click',function(){
        validateAndGenerate();
    });

    $('input#org-id').keydown(function(e){
        if (e.keyCode === 13) {
            validateAndGenerate();
        }
    });


    $('#real-widget-button').on('click',function(){
        if ($('#campaign-name').val().length === 0) {
          $('#campaign-name').addClass('empty-input');
          $('#fake-alert-box').removeClass('hide');
          $('html, body').animate({
              scrollTop: $("#scroll-after-valid").offset().top
          }, 500);
        } else {
          $('.toggles').addClass('hide');
          $('#campaign-name').removeClass('empty-input');
          $('.wrap-real-widget').addClass('open');
          $('input').addClass('inactivate');
          $(this).addClass('hide');
        }
      });




      $('#real-widget-button-pay').on('click',function(){
          var dropdown = document.getElementById("currency-dropdown");

          if ( ( $('#input-amount').val().length === 0) || (dropdown.selectedIndex == 0) || ( $('#input-local').val().length === 0) || ( $('#input-email').val().length === 0) || ( $('#input-image').val().length === 0) || ( $('#input-product-name').val().length === 0) || ( $('#input-product-desc').val().length === 0)  ) {
            $('#fake-alert-box').removeClass('hide');
            $('html, body').animate({
                scrollTop: $("#scroll-after-valid").offset().top
            }, 500);
          } else {
            $('.toggles').addClass('hide');
            $('.wrap-real-widget').addClass('open');
            $('input').addClass('inactivate');
            $(this).addClass('hide');
          }
        });


        $('#real-widget-button-pay').on('click',function(){
            var dropdown = document.getElementById("currency-dropdown");
            if (dropdown.selectedIndex == 0) {
              $('#currency-dropdown').addClass('empty-input');
              $('#currency-dropdown').removeClass('correctt');
            } else {
              $('#currency-dropdown').removeClass('empty-input');
              $('#currency-dropdown').addClass('correctt');
            }
        });

        $('#real-widget-button-pay').on('click',function(){
            if ($('#input-amount').val().length === 0) {
              $('#input-amount').addClass('empty-input');
              $('#input-amount').removeClass('correctt');
            } else {
              $('#input-amount').removeClass('empty-input');
              $('#input-amount').addClass('correctt');
            }
        });

        $('#real-widget-button-pay').on('click',function(){
            if ($('#input-local').val().length === 0) {
              $('#input-local').addClass('empty-input');
              $('#input-local').removeClass('correctt');
            }  else {
              $('#input-local').removeClass('empty-input');
              $('#input-local').addClass('correctt');
            }
        });

        $('#real-widget-button-pay').on('click',function(){
            if ($('#input-email').val().length === 0) {
              $('#input-email').addClass('empty-input');
              $('#input-email').removeClass('correctt');

            }  else {
              $('#input-email').removeClass('empty-input');
              $('#input-email').addClass('correctt');
            }
        });

        $('#real-widget-button-pay').on('click',function(){
            if ($('#input-image').val().length === 0) {
              $('#input-image').addClass('empty-input');
              $('#input-image').removeClass('correctt');
            }  else {
              $('#input-image').removeClass('empty-input');
              $('#input-image').addClass('correctt');
            }
        });

        $('#real-widget-button-pay').on('click',function(){
            if ($('#input-product-name').val().length === 0) {
              $('#input-product-name').addClass('empty-input');
              $('#input-product-name').removeClass('correctt');
            }  else {
              $('#input-product-name').removeClass('empty-input');
              $('#input-product-name').addClass('correctt');
            }
        });

        $('#real-widget-button-pay').on('click',function(){
            if ($('#input-product-desc').val().length === 0) {
              $('#input-product-desc').addClass('empty-input');
              $('#input-product-desc').removeClass('correctt');
            }  else {
              $('#input-product-desc').removeClass('empty-input');
              $('#input-product-desc').addClass('correctt');
            }
        });


        $('#real-widget-copy').on('click',function(){



            var copyText = document.getElementById("code-output");

              /* Select the text field */
              copyText.select();
              copyText.setSelectionRange(0, 99999); /* For mobile devices */

              /* Copy the text inside the text field */
              document.execCommand("copy");

        });

        $('#real-widget-clear').on('click',function(){

              $('.wrap-real-widget').removeClass('open');
              $('input').removeClass('inactivate');
              $('#real-widget-button-pay').removeClass('hide');
              $('#real-widget-button').removeClass('hide');
              $('.toggles.hide').removeClass('hide');
              $('html, body').animate({
                  scrollTop: $("#scroll-after-valid").offset().top
              }, 500);

        });

        $('#close-fake').on('click',function(){
          $('#fake-alert-box').addClass('hide');
        });

        $('#campaign-name').on('click',function(){
          $('#fake-alert-box').addClass('hide');
        });



    });

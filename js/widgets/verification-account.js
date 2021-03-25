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

                }

                else
                {
                    $('input#org-id').addClass('wrong');
                    $('.wrap-shower').removeClass('open');
                    $('.nope').addClass('show');
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
          alert('Please enter a Campaign Name!');
        } else {
          $('.wrap-real-widget').addClass('open');
        }
      });


    });

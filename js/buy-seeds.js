

jQuery(document).ready(function(){

  //alert('Buy Seeds');

});








    /* BUY SEEDS - GLOBAL VARIABLES */
    //chosenCurrency = $('#crypto-select .combo-item .selected-item').text();
    var chosenCurrency = '';


    var calc_fiat_crypto = 0;
    var calc_crypto_fiat= 0;
    var cal_fiat_seeds = 0;
    var cal_seeds_fiat = 0;

    //cal_alt_fiat = 0;

    var bitcoin_address = '';

    var account_can_purchase = '';

    var account_limit = 0;
    var account_weekly_purchased = 0;
    var account_buy_remaining = 0;

    var account_status = '';
    var account_image = '';
    var account_reputation = 0;
    var account_type = '';



    var crypto_to_send = 0;
    var crypto_to_fiat = 0;

    var accountField = 0;

    var accountName = '';




/*! main.js | SEEDS | Digital Mycelium */

/* ==========================================================================
Website core JS file
========================================================================== */


$(document).ready(function ($)
{
        "use strict";

    //chosenCurrency = $('#crypto-select .combo-item .selected-item').text();
    chosenCurrency = $('#crypto-select .combo-item .selected-item').data('currency');
    //alert(chosenCurrency);

    $('.steps-action #button-previous').hide();


    $('.currency-field.crypto-field input').on("input", function(){
        $( ".currency-field.fiat-field input" ).val( ($( ".currency-field.crypto-field input" ).val() * cal_seeds_fiat).toFixed(2) );
        crypto_to_send = $( ".currency-field.fiat-field input" ).val() / calc_fiat_crypto;
        crypto_to_fiat = $( ".currency-field.crypto-field input" ).val() * cal_seeds_fiat;
    });

    $('.currency-field.fiat-field input').on("input", function() {
        $( ".currency-field.crypto-field input" ).val( ($( ".currency-field.fiat-field input" ).val() * cal_fiat_seeds).toFixed(2) );
        crypto_to_send = $( ".currency-field.fiat-field input" ).val() / calc_fiat_crypto;
        crypto_to_fiat = $( ".currency-field.crypto-field input" ).val() * cal_seeds_fiat;
    });


    initComboBox();


    /*** VALIDATE USERNAME ***/
    function validateBuySeedsStepOne()
    {
        var accountField = $( "#accountname" );
        if( accountField.val().length == 12 )
        {
            accountField.parent().removeClass('has-error').addClass('has-success');
            return true;
        }
        /*
        else
        {
            accountField.parent().addClass('has-error').removeClass('has-success');
            return false;
        }
        */
    }


    function nextStep()
    {
        var currentStep = parseInt($('#buy-seeds-steps .step-item.is-active').data('step-id'));
        if( currentStep == 3)
        {
            $('.steps-action #button-next').hide();
        }
        if(currentStep == 1)
        {
            $('.steps-action #button-previous').show();
        }
        $('#buy-seeds-steps .step-item.is-active').removeClass('is-active').addClass('is-completed').next().addClass('is-active');
        $('#buy-seeds-steps .step-content.is-active').removeClass('is-active').next().addClass('is-active');

    }

    function previousStep()
    {
        var currentStep = parseInt($('#buy-seeds-steps .step-item.is-active').data('step-id'));
        if( currentStep == 1)
        {
            return false;
        }
        else if( currentStep == 2)
        {
            $('.steps-action #button-previous').hide();
        }
        else if( currentStep == 4)
        {
            //show the next button (incase they clicked previous from step 3)
            $('.steps-action #button-next').show();
        }
        $('#buy-seeds-steps .step-item.is-active').removeClass('is-active').prev().removeClass('is-completed').addClass('is-active');
        $('#buy-seeds-steps .step-content.is-active').removeClass('is-active').prev().addClass('is-active');

        /* Scroll on button click */
          $([document.documentElement, document.body]).animate({
            scrollTop: $("#buy-seeds-steps").offset().top -60
        }, 10);
    }



    /*** VALIDATE USERNAME ***/
    $( "#accountname" ).keyup(function() {
      validateBuySeedsStepOne();
    });



    /*** Copy Text Feature ***/
    $( "#copy-crypto-amount-button" ).click(function(e) {
        copyClipboard('crypto-amount');
    });

    $( "#copy-address-button" ).click(function(e) {
        copyClipboard('crypto-address');
    });



    $( ".steps-actions #button-previous" ).on( "click", function(e)
    {

        e.preventDefault();

        previousStep();

        /*
        $('html, body').animate({
            scrollTop: 0
        }, scrollSpeed);
        return false;*/

    });



    if($( "#accountname" ).hasClass('pre-filled'))
    {
        validateBuySeedsStepOne();
    }




    /*** BUY SEEDS SETSPS ***/
    $( ".steps-actions #button-next" ).on( "click", function(e) {

        e.preventDefault();

        //var currentStep = $('#buy-seeds-steps .step-item.is-active').data('stepId');
        var currentStep = parseInt($('#buy-seeds-steps .step-item.is-active').data('step-id'));

        //console.log( "Current step: " + (currentStep) );

        switch (currentStep)
        {
           case 1:

            //console.log('Validating Username');

            accountField = $( "#accountname" );
            if( accountField.val().length < 12 )
            {
                accountField.parent().addClass('has-error').removeClass('has-success');
                return false;
            }



            if( !validateBuySeedsStepOne() )
            {
                e.stopImmediatePropagation();
            }

            $.ajax({
               type: "POST",
               url: "php/buy-seeds-ramp",
               data: "method=validateusername&username="+accountField.val().toLowerCase(),
               beforeSend: function() {
                  $('body').addClass('is-loading');
               },
               success: function(response) {




                  var obj = jQuery.parseJSON(response);

                  if( (obj.bitcoinAddress).length > 0 )
                  {
                    bitcoin_address = obj.bitcoinAddress;

                    account_can_purchase = obj['can-purchase'];

                    $( ".currency-field.crypto-field input" ).val(obj['buy-remaining']);

                    account_limit = numberWithCommas(obj.limit);
                    account_weekly_purchased = numberWithCommas(obj['weekly-purchased']);
                    account_buy_remaining = obj['buy-remaining'];

                    account_status = obj.status;

                    if( !obj.image )
                    {
                        account_image = 'assets/images/icons/crypto/seeds.png';
                    }
                    else
                    {
                        account_image = obj.image;
                    }


                    account_reputation = obj.reputation;
                    account_type = obj.type;



                    accountField.parent().removeClass('has-error').addClass('has-success');
                    $('body').removeClass('is-loading');


                    //Pre-populate Step 3 User Info
                    $( ".account-info .account-name img" ).attr("src", account_image);
                    $( ".account-info .account-name .seeds-username" ).html( accountField.val().toLowerCase() );
                    $( ".buy-seeds .data-status" ).html(account_status);
                    $( ".buy-seeds .data-weekly-limits" ).html(account_limit);
                    $( ".account-info .account-data tbody td.data-buy-remaining" ).html(numberWithCommas(account_buy_remaining));
                    $( ".account-info .custom-data .data-buy-remaining" ).html(numberWithCommas(account_buy_remaining));
                    $( ".account-info .custom-resp .data-buy-remaining" ).html(numberWithCommas(account_buy_remaining));


                    if(account_can_purchase == "no")
                    {
                        $( ".buy-seeds .can-purchase" ).hide();
                        $( ".buy-seeds .can-not-purchase" ).show();

                    }
                    else
                    {
                        $( ".buy-seeds .can-not-purchase" ).hide();
                        $( ".buy-seeds .can-purchase" ).show();
                    }


                    if(account_status == "visitor")
                    {
                        $( ".buy-seeds .upgrade-status" ).show();
                    }
                    else
                    {
                        $( ".buy-seeds .upgrade-status" ).hide();
                    }



                    /*
                    account_can_purchase
                    account_weekly_purchased
                    account_reputation
                    account_type
                    */


                    nextStep();
                  }
                  else
                  {
                    accountField.parent().addClass('has-error').removeClass('has-success');
                    console.log('finished loading');
                    $('body').removeClass('is-loading');
                    //console.log('fail username');

                  }

            return false;
               }
            });

               break;
           case 2:

                //chosenCurrency = $('#crypto-select .combo-item .selected-item').text().toLowerCase();
                chosenCurrency = $('#crypto-select .combo-item .selected-item').data('currency').toLowerCase();


                if( chosenCurrency == 'peer to peer swap' )
                {
                    window.location.href = "/seeds-swap";
                    return false;
                }

                $.ajax({
                   type: "POST",
                   url: "php/buy-seeds-ramp",
                   data: "method=getcurrency&chosencurrency="+chosenCurrency,
                   beforeSend: function() {
                      $('body').addClass('is-loading');
                   },
                   success: function(response)
                   {



                        var obj = jQuery.parseJSON(response);

                        /** Calculate Seeds to USD **/
                        cal_seeds_fiat = 1 / obj.seeds_per_usd.split(" ")[0];
                        cal_fiat_seeds = obj.seeds_per_usd.split(" ")[0];

                        var errorMessage = "";
                        $('.steps-content .step-content .moonpay-fees-disclaimer').hide();

                        switch (chosenCurrency)
                        {

                            case 'bitcoin':

                                if( ((obj.satoshiAmount) && (obj.satoshiAmount).length > 0) && (obj.usdValue).length > 0 )
                                {

                                    //console.log(obj);
                                    calc_fiat_crypto = obj.usdValue;
                                    calc_crypto_fiat = obj.satoshiAmount/100000000;

                                }
                                else
                                {
                                    errorMessage = 'There was a problem obtaining the Bitcoin price. Please try again later. ';

                                }

                            break;

                            case 'debit/credit card':


                                var seedstoUSD = obj.seeds_per_usd.split(" ")[0];


                                var rampSeedsValue = seedstoUSD -((obj.ramp_btc_vs_seeds_btc/100) * seedstoUSD);

                                cal_seeds_fiat = 1 / rampSeedsValue;
                                cal_fiat_seeds = rampSeedsValue;


                                if(  obj.seeds_btc_value  )
                                {

                                    //console.log(obj);
                                    calc_fiat_crypto = obj.ramp_btc_value;
                                    calc_crypto_fiat = 1;

                                    $('.steps-content .step-content .moonpay-fees-disclaimer').show();

                                }
                                else
                                {
                                    errorMessage = 'There was a problem obtaining the Bitcoin price from our payment processor Moonpay. Please try again later. ';

                                }

                            break;



                            case 'eos':

                                if(obj.eos.usd)
                                {
                                    calc_fiat_crypto = obj.eos.usd;
                                    calc_crypto_fiat = 1;
                                }
                                else
                                {
                                    errorMessage = 'There was a problem obtaining the EOS Price. Please try again later. '
                                }

                            break;



                            case 'tlos':

                                if(obj.tlos_per_usd)
                                {
                                    calc_fiat_crypto = obj.tlos_per_usd.split(" ")[0];
                                    calc_crypto_fiat = 1;
                                }
                                else
                                {
                                    errorMessage = 'There was a problem obtaining the EOS Price. Please try again later. '
                                }

                            break;

                        }

                        if(errorMessage == "")
                        {
                            $( ".currency-field.crypto-field input" ).trigger( "input" );
                            $('body').removeClass('is-loading');

                            nextStep();
                        }
                        else
                        {
                            alert( errorMessage )
                            e.stopImmediatePropagation();
                        }

                      //alert(response);
                      //$("#"+div_id).html(divIdHtml + msg);


                      return false;
                   }
                });




               break;

           case 3:


                //var chosenCurrency = $('#crypto-select .combo-item .selected-item').text().toLowerCase();
                var chosenCurrency = $('#crypto-select .combo-item .selected-item').data('currency').toLowerCase();

                //vmodha: VALIDATE AMOUNT FROM PREVIOUS STEP:
                var inupt_seeds_amount = $( ".currency-field.crypto-field input" ).val();
                var input_fiat_amount = $( ".currency-field.fiat-field input" ).val();

                //account_limit
                //account_weekly_purchased
                //account_buy_remaining

                var amount_validation = false;
                if( ((input_fiat_amount < 20) && (chosenCurrency == 'debit/credit card')) || (inupt_seeds_amount > account_buy_remaining) )
                {

                    if( (chosenCurrency == 'debit/credit card') && (input_fiat_amount < 20) )
                    {
                        //$( "#modal-validate-amount .validation-title" ).html( 'Oops!');
                        $( "#modal-validate-amount .validation-text" ).html( 'The minimum purchase amount with credit/debit card is:<br><strong>$20 USD</strong>.' );
                        amount_validation = true;

                    }

                    else if( (inupt_seeds_amount > account_buy_remaining) ) {

                        $( "#modal-validate-amount .validation-title" ).html( 'Weekly Purchase Limit Exceeded');
                        $( "#modal-validate-amount .validation-text" ).html( 'You can purchase up to <br><strong>' + account_buy_remaining + ' SEEDS</strong> this week.' );
                        amount_validation = true;
                    }

                    if( amount_validation == true )
                    {
                        //Please choose a value between the <br><strong>minimum $20 USD</strong> and <br><strong>maximum $275 USD for Visitors</strong> and <br><strong>maximum $2750 USD for Residents and Citizens</strong>.
                        $( "#validate-moonpay-amount" ).trigger( "click" );
                        return false;
                    }

                }




                if( chosenCurrency == 'debit/credit card' )
                {



                    crypto_to_fiat = $( ".currency-field.crypto-field input" ).val() * cal_seeds_fiat;

                    $('.steps-content .step-content .fiat-process').show();
                    $('.steps-content .step-content .blockchain-process').hide();
                    $('.steps-content .step-content #crypto-qrcode-column').hide();


                    //var accountName = $( "#accountname" ).val().toLowerCase();

                    $.ajax({

                       type: "POST",
                       url: "php/buy-seeds-ramp",
                       data: "method=fiatgateway&purchaseamount="+ crypto_to_fiat.toFixed(8) + "&btcaddress=" + bitcoin_address + '&username=' + accountField.val().toLowerCase(),
                       beforeSend: function() {
                          $('body').addClass('is-loading');
                       },
                       success: function(response)
                       {
                            $("#proceed_to_moonpay").attr("href", response);
                            //$("#fiatgateway").attr("src", response);

                            nextStep();

                            return false;
                       },
                        error: function(response) {
                            alert('There was a problem reaching our payment provider. Please try again later.');
                        }
                    });
                }
                else
                {

                    $('.steps-content .step-content .fiat-process').hide();
                    $('.steps-content .step-content .blockchain-process').show()
                    $('.steps-content .step-content #crypto-qrcode-column').show()

                    $('body').addClass('is-loading');

                    $( "#seeds-to-buy" ).html( numberWithCommas(parseFloat($( ".currency-field.crypto-field input" ).val()).toFixed(2)) );
                    $( "#crypto-to-fiat" ).html("<span class='notbold'>&asymp; </span>" + crypto_to_fiat.toFixed(2) + " USD");
                    $( "#chosen-crypto" ).html(chosenCurrency.toUpperCase());

                    switch (chosenCurrency)
                    {
                        case 'bitcoin':

                            $( "#crypto-to-send" ).html( 'BTC ' );
                            $( "#crypto-amount" ).html(crypto_to_send.toFixed(4));


                            $( "#crypto-address" ).html(bitcoin_address);
                            $( "#crypto-memo, #memo-text" ).addClass('is-hidden');
                            $( "#crypto-qrcode-column" ).show();
                            $( "#crypto-address-before" ).html( "to the BITCOIN ADDRESS below " );
                            $( "#after-address-text" ).html('Note: This is your very own Bitcoin address. You can use this to have others pay you in Bitcoin and it will be converted into Seeds and sent to you. If you wish to buy more Seeds, simply send more BTC to this address.').toggleClass("is-hidden");

                            $( "#crypto-qrcode" ).empty();

                            var qrcode = new QRCode("crypto-qrcode", {
                                text: bitcoin_address,
                                width: 200,
                                height: 200,
                                colorDark : "#2B4835",
                                colorLight : "#F2F5EC",
                                correctLevel : QRCode.CorrectLevel.H
                            });

                        break;

                        case 'eos':

                            $( "#crypto-to-send" ).html( 'EOS ' );
                            $( "#crypto-amount" ).html(crypto_to_send.toFixed(2));

                            $( "#crypto-address" ).html("thehyphabank");
                            $( "#crypto-memo" ).html($( "#accountname" ).val().toLowerCase()).removeClass('is-hidden');
                            $( "#memo-text" ).removeClass('is-hidden');
                            $( "#crypto-qrcode-column" ).hide();

                            $( "#crypto-address-before" ).html( "to the EOS ADDRESS below " );

                            $( "#after-address-text" ).html('using any EOS wallets or exchanges. <br /><br />Note: If you ever want to buy more Seeds with EOS, simply send more EOS to thehyphabank with your SEEDS account name in the memo.').toggleClass("is-hidden");
                            //"Send [xxxx] EOS to "thehyphabank" (copy) with [their account name here] in the 'memo field' and you'll get [xxxx] Seeds into your account.
                            //To the address below using any EOS wallet or exchange.
                            //Note: If you ever want to buy more Seeds with EOS - simply send more EOS to thehyphabank with your SEEDS account name in the memo at any time.

                        break;

                        case 'tlos':


                            $( "#crypto-to-send" ).html( 'TLOS ' );
                            $( "#crypto-amount" ).html(crypto_to_send.toFixed(2));

                            $( "#crypto-address" ).html("tlosto.seeds");
                            $( "#crypto-memo, #memo-text" ).addClass('is-hidden');
                            $( "#crypto-qrcode-column" ).hide();
                            $( "#crypto-address-before" ).html( "to the TLOS ADDRESS below " );

                            $( "#after-address-text" ).html( 'using any Telos or SEEDS wallets or exchanges. (You can use your SEEDS Passport or Wallet apps).<br/><br />Note: If you ever want to buy more Seeds with TLOS, simply send more TLOS to "tlosto.seeds" at any time.' ).toggleClass("is-hidden");

                            //"you'll get [xxxx] Seeds sent to your account.
                            //To the address below using any TLOS or SEEDS wallets or exchanges. (You can use your SEEDS Passport or Wallet apps).
                            //Note: If you ever want to buy more Seeds with TLOS - simply send more TLOS to "tlosto.seeds" at any time.

                        break;
                    }



                    /* COUNTDOWN TIMER */
                    var tenMinutes = 60 * 10;
                    $('#countdown-timer').remove();
                    $('#countdown-timer-prepend').append('<span id="countdown-timer"></span>');


                    var display = document.querySelector('#countdown-timer');
                    startTimer(tenMinutes, display);

                    nextStep();

                }


                $('body').removeClass('is-loading');

               break;

           default:
               //alert('Unknown');
        }


        /* Scroll on button click */
          $([document.documentElement, document.body]).animate({
            scrollTop: $("#buy-seeds-steps").offset().top -60
        }, 10);


    });




    //Video embed init
    if ($('#video-embed').length) {
        Video('#video-embed');
    }

    //Cover video
    if ($('.covervid-video').length) {
        $('.covervid-video').coverVid(1920, 1080);
    }


    //Page loader
    if ($('.pageloader').length)
    {

        $('.pageloader').toggleClass('is-active');

        $(window).on('load', function () {
            var pageloaderTimeout = setTimeout(function () {
                $('.pageloader').toggleClass('is-active');
                $('.infraloader').toggleClass('is-active');

                $('body').removeClass('is-fixed').finish();
                clearTimeout(pageloaderTimeout);

            }, 700);
        })
    }










    //Mobile menu toggle
    if ($('.custom-burger').length) {
        $('.custom-burger').on("click", function () {
            $(this).toggleClass('is-active');
            if ($('.navbar-menu').hasClass('is-active')) {
                $('.navbar-menu').removeClass('is-active');
                $('.navbar-fade.navbar-light').removeClass('is-dark-mobile');
            } else {
                $('.navbar-menu').addClass('is-active');
                $('.navbar-fade.navbar-light').addClass('is-dark-mobile');
            }
            //Revert navbar to initial color state
            if ($('.navbar-faded').hasClass('is-dark-mobile')) {
                $('.navbar-faded').removeClass('is-dark-mobile');
            }
            $('.navbar.is-static').toggleClass('is-dark-mobile');
        });
    }




    //Navbar fade
    if ($('.navbar-wrapper.navbar-fade.navbar-light').length)
    {
        $(".navbar-wrapper.navbar-fade").wrap('<div class="navbar-placeholder"></div>');
        $(".navbar-placeholder").height(jQuery(".navbar-wrapper.navbar-fade").outerHeight());
        $(window).on('scroll', function () {    // this will work when your window scrolled.
            var height = $(window).scrollTop();  //getting the scrolling height of window
            if (height > 65) {
                $(".navbar-wrapper.navbar-fade.is-transparent").removeClass('is-transparent navbar-light').addClass('navbar-faded');
            } else {
                $(".navbar-wrapper").removeClass('navbar-faded').addClass('is-transparent navbar-light');
            }
        });
    }



})




/********* COMBO BOX ********/
function initComboBox() {
  $('.is-combo .combo-box').on('click', function () {
    $(this).toggleClass('is-active');
  });
  $('.combo-box .box-dropdown li').on('click', function (e) {
    var target = e.target; //Get selected item data

    var itemIconClass = $(this).find('.item-icon i').attr('class');
    var itemIcon = $(this).find('.item-icon i');
    var itemIconClass = $(this).find('.item-icon i').attr('class');
    var itemSvgIcon = $(this).find('.item-icon').html();
    var itemName = $(this).find('.item-name').text();
    var itemFees = $(this).find('.currency-fees').text();
    var itemData = $(this).find('.item-name').data('currency');
    var iconTemplate = '<i class="' + itemIconClass + '"></i>';
    var template = '';


    if (!$(target).is('.box-dropdown li, body') && !$(target).parents().is('.box-dropdown')) {
      $('.box-dropdown').removeClass('is-active');
    }

    if ($(target).is('body')) {
      $('.box-dropdown').removeClass('is-active');
    } //Handle dropdown item active state toggle


    $(this).siblings('li.is-active').removeClass('is-active');
    $(this).addClass('is-active'); //Update combo box selected value

    if (itemIcon.length) {
      $(this).closest('.combo-box').find('.combo-item img').remove();
      $(this).closest('.combo-box').find('.combo-item svg').remove();
      $(this).closest('.combo-box').find('.combo-item').prepend(iconTemplate);
      $(this).closest('.combo-box').find('.combo-item .selected-item').text(itemName);
      $(this).closest('.combo-box').find('.combo-item .currency-fees').text(itemFees);
      $(this).closest('.combo-box').find('.combo-item .selected-item').data("currency", itemData);

    } else {
      $(this).closest('.combo-box').find('.combo-item img').remove();
      $(this).closest('.combo-box').find('.combo-item').prepend(itemSvgIcon);
      $(this).closest('.combo-box').find('.combo-item .selected-item').text(itemName);
      $(this).closest('.combo-box').find('.combo-item .currency-fees').text(itemFees);
      $(this).closest('.combo-box').find('.combo-item .selected-item').data("currency", itemData);
    }
  });
} //Image combo box




//Function to add commas to numbers.
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}





//Countdown Timer Function
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = 0;
            /* Reset times when it reaches 0;
            timer = duration;
            */
        }
    }, 1000);
}


/* Copy to Clipboard Functionality */
function copyClipboard(elementID) {
  var elm = document.getElementById(elementID);
  // for Internet Explorer

  if(document.body.createTextRange) {
    var range = document.body.createTextRange();
    range.moveToElementText(elm);
    range.select();
    document.execCommand("Copy");
  }
  else if(window.getSelection) {
    // other browsers
    var selection = window.getSelection();
    var range = document.createRange();
    range.selectNodeContents(elm);
    selection.removeAllRanges();
    selection.addRange(range);
    document.execCommand("Copy");
  }
}

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS :: Buy Seeds</title>
    <meta name="description" content="Buy Seeds, Get Real Change. Say YES to a new economic model that benefits people, planet and prosperity.">
    <meta name="og:image" content="https://joinseeds.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="SEEDS :: Buy Seeds">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#E9EDD9">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#E9EDD9">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#E9EDD9">


    <!--  Facebook -->

    <!--  Twitter -->

    <!--  Google Analytics -->


    <!-- CSS -->
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/buy-seeds.css">
    <link rel="stylesheet" href="css/loader-buy.css">
    <link rel="stylesheet" href="css/resp.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/apparallax-generic.js" type="text/javascript"></script>
    <script src="js/lax.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <script src="js/owl.navigation.js" type="text/javascript"></script>



    <!--luigi's global custom animations-->
    <script src="js/animations-buy.js" type="text/javascript"></script>

    <!--luigi's custom top scrollbar-->
    <script src="js/custom-scrollbar.js" type="text/javascript"></script>

    <script src="js/bulma-steps.min.js" type="text/javascript"></script>
    <script src="js/qrcode.min.js" type="text/javascript"></script>
    <script src="js/buy-seeds.js" type="text/javascript"></script>

    <!-- pop up animation -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('.pop-up-trigger').click(function(){
            $('.pop-up').addClass('open');
            $('body').addClass('lock');
          });

          $('#close').click(function(){
            $('.pop-up').removeClass('open');
            $('body').removeClass('lock');
          });
        });
    </script>



    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

  </head>
  <body class="buy-seeds">

    <div class="pop-up">

      <div class="centered">
        <div id="close"><img src="img/x-close.svg"/></div>
        <h3>More About <br><span class="spring">SEEDS Accounts</span></h3>
        <p><br>SEEDS accounts are built on the Telos blockchain, and each SEEDS account has a matching Telos account. Both use the same user account name. If you already have a SEEDS or Telos account, enter your individual or organisation account names.
        <br><br>
          If you don’t have a SEEDS account, you can request an invitation to join SEEDS and create an account by following the <a href="get-started.php"> instructions on the ‘Get started’ page.</a>
        </p>
      </div>
    </div>

    <div class="pages-logo-resp">
        <a href="index.php">
          <img src="img/logo-full-color.svg" alt="seeds"/>
        </a>
    </div>


    <?php
        include 'incl/menu.php';
     ?>

    <!--page loader very basic(not activtated, it's just a place holder here) Maybe you can use it for the transaction loading-->
    <div class="obscurer">
      <div id="loader-temp">
        <img src="img/logo-graph.svg" />
      </div>
    </div>


    <div id="seeds-loader-container">
        <div id="seeds-loader">
          <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
              <div class="loader-line"></div>
            </div>
            <img src="https://seedslibrary.com/seeds-microsite/img/logo-graph.svg" height="60" width="60" />
          </div>
        </div>
    </div>



    <!--fake progress bar top screen-->
    <div class="progress-container">
      <div class="progress-bar" id="bar"></div>
    </div>

    <header class="h-home">
      <div class="centered">
        <div class="logo close">

            <a href="index.php">
              <img src="img/logo-full-color.svg" alt="seeds"/>
            </a>

        </div>

        <div class="percent close">

        </div>

      </div>
    </header>


    <main>
      <section class="buy-header parallax" data-image-src="img/buy-header.jpg">
        <div class="centered">
          <div class="buy-intro close">
            <h1>Buy Seeds</h1>
            <p class="buy-claim">Get Real Change</p>
            <p>Be an active part of the change you want to see in our planet. <span class="hide-mob"><br/>Use a regenerative currency designed to benefit all who use it. <br/>You must have a SEEDS Account in order to buy Seeds.</span></p>
            <img class="arrow-down" src="img/arrow-green-down.svg"/>
          </div>

        </div>
      </section>

      <section class="multistep close">
        <div class="centered">

          <div id="buyseeds-wizard">
              <!-- space to insert the multistep -->

            <div class="columns mt-20" id="buy-seeds-steps-container">
                <div class="column is-8 is-offset-2">
                    <!-- Wrapper -->
                    <div class="steps-wrapper" id="buy-seeds-steps">
                        <!-- Steps Indicators -->
                        <div class="steps">

                          <div class="indicators-wrapper">
                                <!-- Indicator -->
                                <div class="step-item is-active" data-step-id="1">
                                    <div class="step-marker">1</div>

                                </div>
                                <!-- Indicator -->
                                <div class="step-item" data-step-id="2">
                                    <div class="step-marker">2</div>

                                </div>
                                <!-- Indicator -->
                                <div class="step-item" data-step-id="3">
                                    <div class="step-marker">3</div>

                                </div>
                                <!-- Indicator -->
                                <div class="step-item" data-step-id="4">
                                    <div class="step-marker">4</div>

                                </div>

                          </div><!--wrapper-->

                            <!-- Steps content wrapper -->
                            <div class="steps-content">
                                <!-- STEP CONTENT 1 - VERIFY USERNAME -->
                                <div data-step-id="1" id="step-1" class="step-content has-text-centered is-active animated preFadeInUp fadeInUp">

                                    <div class="centered-title">
                                        <h2>Account <span class="spring">Name</span></h2>
                                    </div>

                                    <div class="text-content">
                                        <div class=" has-text-centered">
                                            <p>NOTE: User account names must containt exactly 12 characters, using a-z, 1-5, starting with a letter.</p>
                                            <p class="pop-up-trigger">Discover more about SEEDS Account Name</p>
                                        </div>
                                    </div>


                                    <div class="actual-field">
                                    <!-- Field -->

                                        <div class="field field-container">
                                            <?php
                                            /*
                                            <div class="field-label is-normal">
                                                <label class="label">SEEDS account name</label>
                                            </div>
                                            */
                                            ?>
                                            <div class="field-body">
                                                <div class="field">
                                                    <div class="control required">

                                                        <?php

                                                        $additional_classes = '';
                                                        $account_name = '';

                                                        if( isset($_GET['acc']) && !empty($_GET['acc']) )
                                                        {
                                                            $account_name = $_GET['acc'];
                                                            $additional_classes = ' pre-filled';
                                                        }



                                                        ?>

                                                        <input class="input is-large<?php echo $additional_classes;?>" name="accountname" id="accountname" type="text" placeholder="Enter SEEDS account name" value="<?php echo $account_name;?>" data-validate="require">

                                                        <span class="error">
                                                            <i class="fa fa-times"></i>
                                                        </span>
                                                        <span class="success">
                                                            <i class="fa fa-check"></i>
                                                        </span>
                                                        <small class="validation-info is-error">This is not a valid Username, please try again.</small>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <!-- STEP CONTENT 2 - CHOOSE CURRENCY -->
                                <div data-step-id="2" id="step-2" class="step-content has-text-centered animated preFadeInUp fadeInUp">



                                    <div class="centered-title"><h2>Payment <span class="spring">Method</span></h2>

                                        <p>
                                            Select how you would like to buy Seeds:</p>


                                    </div>

                                    <div class="actual-field">

                                        <div class="component-block">
                                            <div class="field">
                                                <div class="control is-combo">
                                                    <div class="combo-box" id="crypto-select">
                                                        <div class="box-inner">
                                                            <div class="combo-item">
                                                                <img src="assets/images/icons/crypto/btc.png" alt="BTC - Bitcoin">
                                                                <span data-currency="bitcoin" class="selected-item">Bitcoin</span><span class="currency-fees">(Preferred)</span>
                                                            </div>
                                                        </div>
                                                        <div class="box-chevron">
                                                            <i class="material-icons"><img src="assets/images/icons/arrow-down-dark.svg" alt="Click to Open"></i>
                                                        </div>
                                                        <div class="box-dropdown">
                                                            <div class="dropdown-inner has-slimscroll">
                                                                <ul>
                                                                    <li class="is-active">
                                                                        <span class="item-icon">
                                                                                <img src="assets/images/icons/crypto/btc.png" alt="BTC - Bitcoin">
                                                                            </span>
                                                                        <span data-currency="bitcoin" class="item-name">Bitcoin</span><span class="currency-fees">(Preferred)</span>
                                                                        <span class="checkmark">
                                                                                <i class="fa fa-check"></i>
                                                                            </span>
                                                                    </li>

                                                                    <li>
                                                                        <span class="item-icon">
                                                                                <img src="assets/images/icons/crypto/usd.png" alt="Debit/Credit Card">
                                                                            </span>
                                                                        <span data-currency="debit/credit card" class="item-name">Debit/Credit Card</span><span class="currency-fees">(Processing Fees)</span>
                                                                        <span class="checkmark">
                                                                                <i class="fa fa-check"></i>
                                                                            </span>
                                                                    </li>

                                                                    <li>
                                                                        <span class="item-icon">
                                                                                <img src="assets/images/icons/crypto/usd.png" alt="Peer to Peer Swap">
                                                                            </span>
                                                                        <span data-currency="peer to peer swap" class="item-name">Peer to Peer Swap</span><span class="currency-fees">(No Fees)</span>
                                                                        <span class="checkmark">
                                                                                <i class="fa fa-check"></i>
                                                                            </span>
                                                                    </li>


                                                                    <li>
                                                                        <span class="item-icon">
                                                                                <img src="assets/images/icons/crypto/eos.png" alt="EOS">
                                                                            </span>
                                                                        <span data-currency="eos" class="item-name">EOS</span>
                                                                        <span class="currency-fees">(No Fees)</span>
                                                                        <span class="checkmark">
                                                                                <i class="fa fa-check"></i>
                                                                            </span>
                                                                    </li>

                                                                    <li>
                                                                        <span class="item-icon">
                                                                                <img src="assets/images/icons/crypto/tlos.png" alt="TLOS - Telos">
                                                                            </span>
                                                                        <span data-currency="tlos" class="item-name">TLOS</span>
                                                                        <span class="currency-fees">(No Fees)</span>
                                                                        <span class="checkmark">
                                                                                <i class="fa fa-check"></i>
                                                                            </span>
                                                                    </li>

                                                                    <li class="is-disabled">
                                                                        <span class="item-icon">
                                                                                <img src="assets/images/icons/crypto/eth.png" alt="ETH - Ethereum">
                                                                            </span>
                                                                        <span data-currency="ethereum" class="item-name">Ethereum - Coming Soon</span><span class="currency-fees"></span>
                                                                        <span class="checkmark">
                                                                                <i class="fa fa-check"></i>
                                                                            </span>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- Step content -->




                                <!-- STEP CONTENT 3 - CONFIRM AMOUNT -->
                                <div data-step-id="3" id="step-3" class="step-content has-text-centered animated preFadeInUp fadeInUp">

                                    <div class="can-purchase">



                                        <div class="centered-title"><h2>Choose <span class="spring">Amount</span></h2></div>

                                        <div class="subheading">
                                          <p>
                                            There is a weekly purchase limit to ensure a fairer distribution of Seeds at each price.
                                            <br/>
                                            <!--You are a <span class="data-status"></span> and can buy <span class="data-weekly-limits"></span> weekly.-->
                                          </p>

                                        </div>



                                        <div class="account-info columns is-vcentered">
                                            <!-- Demo section -->

                                            <div class="account-name">

                                              <div class="custom-data left-one">
                                                <p class="c-data-h">You can buy</p>
                                                <div class="data-buy-remaining"></div>
                                              </div>

                                                <div class="user-avatar-infos">
                                                  <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="User Avatar">
                                                  <p class="seeds-username"></p>
                                                  <p class="data-status"></p>
                                                </div>

                                                <div class="custom-data right-two">
                                                  <p class="c-data-h">Weekly limit</p>
                                                  <div class="data-weekly-limits"></div>
                                                </div>

                                                <div class="custom-resp">
                                                  <div>
                                                    <p class="c-data-h">You can buy</p>
                                                    <div class="data-buy-remaining"></div>
                                                  </div>

                                                  <div>
                                                    <p class="c-data-h">Weekly limit</p>
                                                    <div class="data-weekly-limits"></div>
                                                  </div>
                                                </div>
                                            </div>

                                            <!--<div class="account-data column">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Status</th>
                                                            <th>Weekly Limit</th>
                                                            <th>You Can Buy</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="data-status"></td>
                                                            <td class="data-weekly-limits"></td>
                                                            <td class="data-buy-remaining"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>-->

                                        </div>

                                        <?php

                                            $upgrade_status_message = "Learn about how you can upgrade your weekly purchase limit of Seeds to 250,000 by becoming a resident or citizen<br/><br/>";
                                        ?>



                                        <div class="subheading">
                                            <div class="upgrade-status subheading"><?php echo $upgrade_status_message; ?></div>

                                            <div class="moonpay-fees-disclaimer subheading"><strong>Note:</strong> We don't take any fees. However, our payment provider does. If you want a better rate, you can <a href="https://www.buybitcoinworldwide.com" target="_blank">buy BTC directly "here"</a> and make your Seeds purchase with Bitcoin.</div>
                                        </div>

                                        <div class="currencies-inputs">

                                        <div class="is-5">
                                            <p>
                                            Please type in either the value in Seeds or USD to choose how many Seeds you would like to purchase.
                                            <p>
                                        </div>

                                        <div class="field-wrapper">

                                            <div class="field">
                                                <div class="control has-icons-left has-icons-right currency-field crypto-field">
                                                    <input value="25000" class="input rounded is-large" type="text" placeholder="Seeds">
                                                    <span class="crypt is-left">
                                                        <img src="assets/images/icons/crypto/seeds.png" alt="Seeds">
                                                    </span>
                                                    <span class="crypt is-right">
                                                        Seeds
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="field">
                                                <div class="control has-icons-left has-icons-right currency-field fiat-field">
                                                    <input class="input rounded is-large" type="text" placeholder="USD">
                                                    <span class="crypt is-left">
                                                        <img src="assets/images/icons/crypto/usd.png" alt="USD">
                                                    </span>
                                                    <span class="crypt is-right">
                                                        USD
                                                    </span>
                                                </div>
                                            </div>



                                            <!--div class="subheading">
                                                There is a weekly purchase limit to ensure <br>a fairer distribution of Seeds at each price.
                                                <br /><br />
                                                <span class="is-pulled-leftttt"><strong>Visitors:</strong> 25,000 Seeds a week.</span>
                                                <br />
                                                <span class="is-pulled-leftttt"><strong>Residents and Citizens:</strong> 250,000 Seeds a week.</span>
                                            </div-->

                                        </div>

                                      </div><!--currencies input-->
                                    </div>
                                    <div class="can-not-purchase">


                                        <div class="centered-title"><h2>Quota <span class="spring">Exceeded</h2></div>

                                          <div class="subheading">
                                            <p>
                                              There is a weekly purchase limit to ensure a fairer distribution of Seeds at each price.
                                              <br/>
                                              <!--You are a <span class="data-status"></span> and can buy <span class="data-weekly-limits"></span> weekly.-->
                                            </p>

                                          </div>



                                          <div class="account-info columns is-vcentered">
                                              <!-- Demo section -->

                                              <div class="account-name">

                                                <div class="custom-data left-one">
                                                  <p class="c-data-h">You can buy</p>
                                                  <div class="data-buy-remaining"></div>
                                                </div>

                                                  <div class="user-avatar-infos">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="User Avatar">
                                                    <p class="seeds-username"></p>
                                                    <p class="data-status"></p>
                                                  </div>

                                                  <div class="custom-data right-two">
                                                    <p class="c-data-h">Weekly limit</p>
                                                    <div class="data-weekly-limits"></div>
                                                  </div>

                                                  <div class="custom-resp">
                                                    <div>
                                                      <p class="c-data-h">You can buy</p>
                                                      <div class="data-buy-remaining"></div>
                                                    </div>

                                                    <div>
                                                      <p class="c-data-h">Weekly limit</p>
                                                      <div class="data-weekly-limits"></div>
                                                    </div>
                                                  </div>
                                              </div>

                                              <!--<div class="account-data column">
                                                  <table class="table">
                                                      <thead>
                                                          <tr>
                                                              <th>Status</th>
                                                              <th>Weekly Limit</th>
                                                              <th>You Can Buy</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td class="data-status"></td>
                                                              <td class="data-weekly-limits"></td>
                                                              <td class="data-buy-remaining"></td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </div>-->

                                          </div>

                                    </div>





                                </div>


                                <!-- STEP 4 - PURCHASE -->
                                <div data-step-id="4" id="step-4" class="step-content has-text-centered animated preFadeInUp fadeInUp">


                                    <div class="columns">
                                        <div class="column fiat-process">

                                                <div class="centered-title"><h2>Note</h2>

                                        <div class="subheading">
                                            You're buying Bitcoin which will be automatically converted to Seeds and sent to your SEEDS account. It takes 20-60 minutes on average for Bitcoin to transfer and receive your Seeds.


                                        </div>
                                        <p>
                                            Due to Bitcoin's price fluctuations and slow transaction speed <br>you may receive a different number of Seeds than you were quoted.
                                        </p>
                                        <br />
                                        <br />

                                        <a href="#" id="proceed_to_moonpay" class="button is-large primary-btn  is-bold btn-align rounded raised">
                                            Proceed to Payment
                                        </a>

                                    </div>

                                             <!--iframe
                                              allow="accelerometer; autoplay; camera; gyroscope; payment" frameborder="0" id="fiatgateway">
                                              <p>Your browser does not support iframes.</p>
                                            </iframe-->
                                        </div>


                                      <div class="column blockchain-process">




                                        <div class="centered-title"><h2>Finalize <span class="spring">Purchase</span></h2>

                                            <div class="subheading">
                                                To buy <span id="seeds-to-buy"></span> <strong>Seeds</strong><br/> please transfer the exact amount of <span id="chosen-crypto"></span>:
                                                <div id="crypto-to-send-container"><span id="crypto-to-send"></span><span id="crypto-amount"></span></div>
                                                <span id="crypto-to-fiat"></span>
                                                <button id="copy-crypto-amount-button" class="button button-cta btn-align primary-btn is-fullwidth raised no-lh">Copy Amount</button>



                                                <div id="crypto-address-wrapper">

                                                    <span id="memo-text" class="is-hidden">
                                                        with the MEMO
                                                    </span>

                                                    <span id="crypto-memo" class="is-hidden"></span>



                                                    <span id="crypto-address-before"></span>
                                                    <span id="crypto-address"></span>

                                                    <button id="copy-address-button" class="button button-cta btn-align primary-btn is-fullwidth raised no-lh">Copy Address</button>

                                                </div>

                                                <div id="after-address-text" class="is-hidden">Something goes here</div>
                                                <div class="crypto-purchase-countdown">Please purchase within the next <span id="countdown-timer-prepend"></span> minutes for a better chance of securing this rate.</div>
                                            </div>

                                        </div>
                                      </div>
                                      <div id="crypto-qrcode-column" class="column">
                                        <div id="crypto-qrcode"></div>
                                      </div>
                                    </div>



                                </div>


                            </div>
                            <!-- Steps Navigation -->
                            <div class="steps-actions">
                                <div class="steps-action">
                                    <a href="#" data-nav="previous" id="button-previous" class="button button-cta is-bold is-light btn-align">Back</a>
                                    <a href="#" data-nav="next" id="button-next" class="button secondary-btn button-cta is-bold raised btn-align">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- unnecessary
              <div class="c-cont">
                <div class="c-tit">
                  <h3>Making currency more than money</h3>
                </div>
                <div class="c-text">
                <p>We use our own currency and financial ecosystem to reward regenerative behaviours and finance the regeneration of our earth.</p>
                </div>
              </div>
              <div class="c-cont">
                <div class="wrp">
                  <div class="c-tit">
                    <h3>Join the economic<br/><span class="spring">Renaissance</span></h3>
                  </div>
                  <div class="c-text">
                    <ul>
                      <li>Heal our planet with every purchase</li>
                    </ul>
                  </div>
                  <div id="anch-cta-1" class="buttons-ct">
                    <a class="ju spri" href="#"><img src="img/plus-green.svg" />Get Started</a>
                  </div>
                </div>
              </div> -->

          </div>  <!-- #multistep-->
        </div> <!-- centered-->

      </section>
    </main>

    <?php
      include 'incl/footer.php';
    ?>


  </body>
</html>

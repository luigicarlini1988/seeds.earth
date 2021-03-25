<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS :: Pay With SEEDS widget</title>
    <meta name="description" content="Join SEEDS widget">
    <meta name="image" content="img/seeds-social-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="SEEDS :: Pay With SEEDS widget">

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
    <link rel="stylesheet" href="css/loader-style.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/resp.css">

    <!-- join widget CSS -->

    <link rel="stylesheet" href="css/buy-seeds.css">
    <link rel="stylesheet" href="css/widgets/pay-with-seeds.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/apparallax-generic.js" type="text/javascript"></script>
    <script src="js/lax.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <script src="js/owl.navigation.js" type="text/javascript"></script>

    <!--luigi's verification account -->
    <script src="js/widgets/verification-account.js" type="text/javascript"></script>


    <!--luigi's global custom animations-->
    <script src="js/animations-buy.js" type="text/javascript"></script>

    <!--luigi's custom top scrollbar-->
    <script src="js/custom-scrollbar.js" type="text/javascript"></script>



    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

  </head>
  <body class="join-seeds">


    <?php
        include 'incl/menu.php';
     ?>

    <!--page loader very basic(not activtated, it's just a place holder here) Maybe you can use it for the transaction loading-->
    <div class="obscurer">
      <div class="vertical-centered-box">
        <div class="contentt">
          <div class="loader-circle"></div>
          <div class="loader-line-mask">
            <div class="loader-line"></div>
          </div>
          <img src="img/logo-graph.svg" height="60" width="60" />
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

            <a href="https://joinseeds.earth">
              <img src="img/logo-full-color.svg" alt="seeds"/>
            </a>

        </div>

      </div>
    </header>


    <main>
      <section class="buy-header parallax" data-image-src="img/buy-header.jpg">
        <div class="centered">
          <div class="buy-intro close">
            <h1>Pay With <span class="spring">SEEDS</span></h1>
            <p class="buy-claim widget">WIDGET</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
            <img class="arrow-down" src="img/arrow-green-down.svg"/>
          </div>

        </div>
      </section>


      <section class="multistep close">
        <div class="centered">

          <div id="join-widget">

            <div class="columns mt-20" >
                <div class="column is-8 is-offset-2">
                    <!-- Wrapper -->
                    <div class="steps-wrapper">
                        <!-- Steps Indicators -->
                        <div class="steps">

                            <!-- Steps content wrapper -->
                            <div class="steps-content">
                                <!-- STEP CONTENT 1 -->
                                <div data-step-id="1" id="step-1" class="step-content has-text-centered is-active animated preFadeInUp fadeInUp">

                                    <div class="centered-title">
                                        <h2>Your <span class="spring">Configuration</span></h2>
                                    </div>

                                    <div class="text-content">
                                        <div class=" has-text-centered">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                                        </div>
                                    </div>

                                    <form id="pay-with-seeds-form">

                                      <!-- organization id -->
                                      <div class="actual-field">
                                          <div class="field field-container">
                                              <div class="field-body">
                                                  <div class="field">
                                                      <div class="control required">
                                                          <label for="org_name" class="label">Organization name</label>
                                                          <input id="org-id" class="input is-large" name="org_name" type="text" placeholder="Lorem Ipsum" value="" data-validate="require">
                                                          <p class="helper">Enter the 12-character SEEDS account name you have created for your organisation.</p>
                                                          <div class="verification-icons">
                                                            <img src="img/nope.svg" class="nope"/>
                                                            <img src="img/yeah.svg" class="yeah"/>
                                                          </div>
                                                          <div id="alert-box"></div>
                                                      </div>
                                                      <p id="verify-org-id">Verify</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="wrap-shower">


                                        <div id="scroll-after-valid" class="two-line-field"><!--from here -->


                                                <!-- button key -->
                                                <div class="actual-field">
                                                    <div class="field field-container">
                                                        <div class="field-body">
                                                            <div class="field">
                                                                <div class="control required">
                                                                  <label for="campaign_name" class="label">Amount ($)</label>
                                                                  <input id="input-amount" class="input is-large" name="amount"  ype="number" min="0" value="1" data-validate="require">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- email -->
                                                <div class="actual-field">
                                                  <div class="field field-container">
                                                      <div class="field-body">
                                                          <div class="field">
                                                              <div class="control required">
                                                                  <label for="email" class="label">Email</label>
                                                                  <input id="input-email" class="input is-large" name="email" type="text" placeholder="Lorem Ipsum" value="" data-validate="require">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>

                                                <!-- email -->
                                                <div class="actual-field">
                                                  <div class="field field-container">
                                                      <div class="field-body">
                                                          <div class="field">
                                                              <div class="control required">
                                                                  <label for="product_image" class="label">Product image URL</label>
                                                                  <input id="input-image" class="input is-large" name="product_image" type="text" placeholder="Lorem Ipsum" value="" data-validate="require">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>

                                                <!-- email -->
                                                <div class="actual-field">
                                                  <div class="field field-container">
                                                      <div class="field-body">
                                                          <div class="field">
                                                              <div class="control required">
                                                                  <label for="product_name" class="label">Product Name</label>
                                                                  <input id="input-product-name" class="input is-large" name="product_name" type="text" placeholder="Lorem Ipsum" value="" data-validate="require">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>

                                                <!-- email -->
                                                <div class="actual-field">
                                                  <div class="field field-container">
                                                      <div class="field-body">
                                                          <div class="field">
                                                              <div class="control required">
                                                                  <label for="product_description" class="label">Product Description</label>
                                                                  <input id="input-product-desc" class="input is-large" name="product_description" type="text" placeholder="Lorem Ipsum" value="" data-validate="require">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>

                                                <!-- callback -->
                                                <div class="actual-field">
                                                  <div class="field field-container">
                                                      <div class="field-body">
                                                          <div class="field">
                                                              <div class="control required">
                                                                  <label for="callback" class="label">Callback</label>
                                                                  <input id="input-callback" class="input is-large" name="callback" type="text" placeholder="Lorem Ipsum" value="" data-validate="require">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>


                                    </div><!--to here-->

                                      <!-- button key -->
                                      <div class="actual-field">
                                          <div class="field field-container">
                                              <div class="field-body">
                                                  <div class="field">
                                                      <div class="control required">
                                                        <label for="button_theme" class="label">Button Style</label>
                                                        <div class="radios">
                                                        <div class="radios-button-style">
                                                         <button type="button" class="pay-with-seeds-white"></button>
                                                          <input class="input is-large"
                                                          name="button_theme"
                                                          type="radio"
                                                          value="white"
                                                          checked
                                                          data-validate="require">
                                                        </div>
                                                        <div class="radios-button-style">
                                                        <button type="button"  class="pay-with-seeds-light"></button>
                                                          <input class="input is-large"
                                                          name="button_theme"
                                                          type="radio"
                                                          value="light"
                                                          data-validate="require">
                                                        </div>
                                                        <div class="radios-button-style">
                                                        <button type="button" class="pay-with-seeds-dark"></button>
                                                          <input class="input is-large"
                                                          name="button_theme"
                                                          type="radio"
                                                          value="dark"
                                                          data-validate="require">
                                                          </div>
                                                          </div>
                                                        </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <!-- button key -->
                                      <div class="actual-field">
                                          <div class="field field-container">
                                              <div class="field-body">
                                                  <div class="field">
                                                      <div class="control required">
                                                        <label class="label"  for="multistep_theme">Multistep Style</label>
                                                        <div class="radios">
                                                          <div class="radios-button-style">
                                                          <div  class="pay-with-seeds-theme-dark"></div>
                                                            <input class="input is-large"
                                                            name="multistep_theme"
                                                            value="dark"
                                                            checked
                                                            type="radio"  data-validate="require">
                                                          </div>
                                                          <div class="radios-button-style">
                                                          <div  class="pay-with-seeds-theme-light"></div>
                                                            <input class="input is-large"
                                                            name="multistep_theme"
                                                            value="light"
                                                            type="radio"  data-validate="require">
                                                                                    </div>
                                                        </div>
                                                        </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="actual-field sand-back">
                                          <p id="real-widget-button-pay">Generate Widget</p>
                                      </div>

                                      <div class="wrap-real-widget">

                                          <!-- button key -->
                                          <div class="actual-field">
                                              <div class="field field-container">
                                                  <div class="field-body">
                                                      <div class="field">
                                                          <div class="control required">
                                                            <label class="label">Your widget</label>
                                                            <textarea class="input is-large"
                                                            name="code"
                                                            rows="10"
                                                            placeholder="Lorem Ipsum" data-validate="require"></textarea>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                        </div>

                                      </div>  <!--  <div class="wrap-real-widget"> -->

                                  </div> <!--<div class="wrap-shower">-->

                              </form>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>  <!-- #multistep-->
        </div> <!-- centered-->

      </section>

    </main>

    <?php
      include 'incl/footer.php';
    ?>

    <script src="js/widgets/config-pay-with-seeds.js" type="text/javascript"></script>


  </body>
</html>

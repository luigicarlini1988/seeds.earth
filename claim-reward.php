<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS :: Claim Reward Widget</title>
    <meta name="description" content="Allow your community to instantly claim rewards by using this widget">
    <meta name="image" content="img/seeds-social-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="SEEDS :: Claim Reward Widget">


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
    <link rel="stylesheet" href="css/resp.css">

    <!-- join widget CSS -->

    <link rel="stylesheet" href="css/buy-seeds.css">
    <link rel="stylesheet" href="css/widgets/claim-reward.css">

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



    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

  </head>
  <body class="claim-reward">

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

      </div>
    </header>


    <main>
      <section class="buy-header parallax" data-image-src="img/buy-header.jpg">
        <div class="centered">
          <div class="buy-intro close">
            <h1>Claim <span class="spring">REWARD</span></h1>
            <p class="buy-claim widget">WIDGET</p>
            <p>The SEEDS ecosystem is designed to assign and distribute value in a whole new way. A key part of that is rewarding community members through campaigns. This incentivises and reinforces regenerative behaviours.</p>
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
                                          <p>Reward your community on your website by using this widget. It links directly to the campaign you’ve already created in the Global Passport and makes it accessible on your platform so your community can get immediate benefits from the SEEDS ecosystem.</p>
                                        </div>
                                    </div>

                                    <form id="claim-reward-form">

                                      <!-- organization id -->
                                      <div class="actual-field">
                                          <div class="field field-container">
                                              <div class="field-body">
                                                  <div class="field">
                                                      <div class="control required">
                                                          <label for="org_id" class="label">Organization Account Name</label>
                                                          <input class="input is-large" name="org_id" type="text" placeholder="Insert here..." value="" data-validate="require">
                                                          <p class="helper">Enter the 12-character SEEDS account name you have created for your organisation.</p>
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
                                                        <label for="campaign_name" class="label">Invite Campaign Name</label>
                                                        <input class="input is-large" name="campaign_name"  value="" type="text" placeholder="Insert here..." data-validate="require">
                                                          <p class="helper">Enter the name of the Invite Campaign you created with your organisation account in the Global Passport.</p>
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
                                                        <label for="button_theme" class="label">Button Style</label>
                                                        <div class="radios">
                                                        <div class="radios-button-style">
                                                         <button type="button" class="claim-reward-white"></button>
                                                          <input class="input is-large"
                                                          name="button_theme"
                                                          type="radio"
                                                          value="white"
                                                          checked
                                                          data-validate="require">
                                                        </div>
                                                        <div class="radios-button-style">
                                                        <button type="button"  class="claim-reward-light"></button>
                                                          <input class="input is-large"
                                                          name="button_theme"
                                                          type="radio"
                                                          value="light"
                                                          data-validate="require">
                                                        </div>
                                                        <div class="radios-button-style">
                                                        <button type="button" class="claim-reward-dark"></button>
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
                                                          <div  class="claimreward-theme-dark"></div>
                                                            <input class="input is-large"
                                                            name="multistep_theme"
                                                            value="dark"
                                                            checked
                                                            type="radio"  data-validate="require">
                                                          </div>
                                                          <div class="radios-button-style">
                                                          <div  class="claimreward-theme-light"></div>
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

    <script src="js/widgets/config-claim-reward.js" type="text/javascript"></script>


  </body>
</html>

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
            <h1>Test <span class="spring">Widget</span></h1>
            <p class="buy-claim widget">Pay With seeds</p>
            <p>Button shoyìuld appear in the next (white) section</p>
            <img class="arrow-down" src="img/arrow-green-down.svg"/>
          </div>

        </div>
      </section>

      <div style="width:800px;margin:auto;height:500px;">
        <div id="pay-with-seeds-testos"></div>
        <script src="https://seeds-cdn.s3.amazonaws.com/js/paywithseeds.js"></script>
        <script>
        new PayWithSeeds("pay-with-seeds-testos", {"account_name":"luigicarlini","button_theme":"white","multistep_theme":"dark","amount":"12","amount_in_seeds":"1212","amount_currency":"EUR","email":"luigicarlini88@gmail.com","product_image":"https://seedslibrary.com/wp-content/uploads/2021/07/hannah-busing-NE43E_tfTvA-unsplash-420x420.jpg","product_name":"testos","product_description":"ldkflsdjflksdjfljs lksdjf lksdjf lsdj flsdjf lksdjf "} );
        </script>



      </div>




    </main>

    <?php
      include 'incl/footer.php';
    ?>




  </body>
</html>

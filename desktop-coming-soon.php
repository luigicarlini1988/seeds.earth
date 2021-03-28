<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS :: Desktop Version</title>
    <meta name="description" content="The Desktop version of the Global Passport is coming very soon">
    <meta name="og:image" content="https://joinseeds.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="SEEDS :: Economic Renaissance">

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
    <link rel="stylesheet" href="css/get-started.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/resp.css">
    <link rel="stylesheet" href="css/get-started-resp.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/lax.min.js" type="text/javascript"></script>

    <!--luigi's global custom animations-->
    <script src="js/animation-global.js" type="text/javascript"></script>


    <!--luigi's animation get started mobile-->
    <script src="js/get-started-mobile.js" type="text/javascript"></script>


    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

  </head>
  <body class="get-started-page">
    <div class="pages-logo-resp">
        <a href="index.php">
          <img src="img/logo-full-color.svg" alt="seeds"/>
        </a>
    </div>

    <?php
        include 'incl/menu.php';
     ?>

    <!--page loader very basic, waits the load of the header background image and disappears-->
    <div class="obscurer"></div>



    <header class="h-home">
      <div class="centered">
        <div class="logo close">

            <a href="index.php">
              <img src="img/logo-full-color.svg" alt="seeds"/>
            </a>

        </div>

        <div class="percent close">
          <!--here inside <span> </span> Seed percentage. Plus general link to (?) where user can see where this data come from-->
          <a href="#"><img src="img/up.svg"><span class="spring"> +17.3%</span>this week</a>
        </div>

      </div>
    </header>

    <main>


        <div class="gs">

            <div class="slide-gs desktop-cs">

              <div class="content">
                <div class="text-content">
                  <p class="cs-subtit">Desktop Version</p>
                  <h2>Global<span class="spring">Passport</h2>
                  <p>The Desktop Version is <span class="spring">Coming Very Soon</span>, in the meanwhile, you can open the same link using your mobile App. </p>

                </div>
              </div>

              <div class="slide-cont">
                <div class="p-desk">
                  <img src="img/passport/p-desc.jpg"/>
                </div>
              </div>

              <div class="numerone">
                Pc
              </div>

              <div class="other-numb">
                <p class="on">#0</p>
              </div>

              <div class="down-arrow-pc"><img src="img/arrow-green-down.svg"/></div>
            </div>



        </div>


    </main>

    <script type="text/javascript">
      $(".desktop-cs").addClass('enter');
    </script>

  </body>
</html>

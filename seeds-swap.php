<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS :: Seeds Swap</title>
    <meta name="description" content="Exchange Seeds for you local currency using the peer-to-peer network and the onboard & offboard tools.">
    <meta name="og:image" content="https://joinseeds.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="SEEDS : Seeds Swap">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#E9EDD9">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#E9EDD9">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#E9EDD9">


    <!--  Facebook -->

    <!--  Twitter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L2XGY9YP0R"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-L2XGY9YP0R');
    </script>


    <!-- CSS -->
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/buy-seeds.css">
    <link rel="stylesheet" href="css/resp.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/apparallax-generic.js" type="text/javascript"></script>



    <!--luigi's global custom animations-->
    <script src="js/animations-buy.js" type="text/javascript"></script>

    <!--luigi's custom top scrollbar-->
    <script src="js/custom-scrollbar.js" type="text/javascript"></script>




    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

  </head>
  <body class="buy-seeds swap">
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
            <h1>Swap <span class="spring">Seeds</h1>
            <p>If you don’t know how to use other cryptocurrencies yet and you don’t want to learn (we understand), then we can work together as a community to help you!<br/>
            If you already have Telegram you can skip the steps and <a href="https://t.me/joinchat/Nw9xwRtz41RqgvJ2cux2NA" target="_blank"> Click Here</a></p>
            <img class="arrow-down" src="img/arrow-green-down.svg"/>
          </div>

        </div>
      </section>

      <section class="multistep close swap">
        <div class="centered">

          <div id="buyseeds-wizard" class="swap-page">

            <div class="upper-white">
              <h2>How to <span class="spring"> Swap</h2>
              <p>At the Seeds Swap Telegram group you can find some members of SEEDS who are willing to help others buy some Seeds and do the cryptocurrency exchange themselves.
                <br/><br/>You could send them some money (via paypal, bank transfer, etc, your choice) and they can send you Seeds.</p>
            </div>

            <div class="lower-sand">
              <a class="bott" href="https://web.telegram.org/" target="_blank">Download Telegram</a>
              <a class="bott" href="https://t.me/joinchat/Nw9xwRtz41RqgvJ2cux2NA" target="_blank" target="_blank">Join the swap group</a>
            </div>

          </div>  <!-- #multistep-->

          <div class="note-text-wr">
            <p class="note-text">Note: This can only be used for small amounts (less than $250 USD) for safety and legal compliance.</p>
          </div>

        </div> <!-- centered-->



      </section>
    </main>

    <?php
      include 'incl/footer.php';
    ?>


  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS :: Dashboard</title>
    <meta name="description" content="A new economy that rewards regenerative behaviours, finances the regeneration of our Earth and encourages collaboration and community building">
    <meta name="og:image" content="https://joinseeds.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->

    <meta property="og:site_name" content="SEEDS :: Dashboard">


    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2B4835">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2B4835">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2B4835">


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
    <link rel="stylesheet" href="css/loader-style.css">
    <link rel="stylesheet" href="css/general.css?version=1.1">
    <link rel="stylesheet" href="css/in-loco-dashboard-page.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/resp.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>


    <!--luigi's home custom animations-->
    <script src="js/dashboard-anim.js" type="text/javascript"></script>


    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">



  </head>

  <body class="body-dashboard">



        <?php
            include 'incl/menu.php';
         ?>

        <!--page loader very basic, waits the load of the header background image and disappears-->
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


        <header class="h-home">
          <div class="centered">

            <div class="logo close">
              <h1>
                <a href="index.php">
                  <img src="img/logo-full-color.svg" alt="seeds"/>
                </a>
              </h1>
            </div>

          </div>
        </header>


      <main class="dashboard-page">

          <div class="centered">

              <div class="logo-resp">
                <h1>
                  <a href="https://joinseeds.earth">
                    <img src="img/logo-full-color.svg" alt="seeds"/>
                  </a>
                </h1>
              </div>

            </div>

            <div id="dash-framer">
               <iframe id="dash-grafana" style="height: 100%;width: 100%;position: absolute;" src="https://dashboard.hypha.earth/dashboard/snapshot/76xxWau0CUhTGlHpnjAnBfGmBIXOm7m9?orgId=0" width="100%" height="auto" frameborder="0"></iframe>
            </div>

      </main>


  </body>
</html>

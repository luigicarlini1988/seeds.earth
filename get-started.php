<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS :: Get Started</title>
    <meta name="description" content="We’re here to help you get started wherever you are to join the SEEDS Universe.">
    <meta name="og:image" content="https://joinseeds.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="SEEDS :: Get Started">

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
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/get-started.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/resp.css">
    <link rel="stylesheet" href="css/get-started-resp.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/lax.min.js" type="text/javascript"></script>

    <!--luigi's global custom animations-->
    <script src="js/animation-global-get-started.js" type="text/javascript"></script>


    <!--luigi's animation get started mobile-->
    <script src="js/get-started-mobile.js" type="text/javascript"></script>



    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

  </head>
  <body class="get-started-page">

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


        <div class="ui-slide">
          <ul>
            <li data-slide-link="0" class="active"><p>0</p></li>
            <li data-slide-link="1" class="list-2"><p>1</p></li>
            <li data-slide-link="2" class="list-3"><p>2</p></li>
            <li data-slide-link="3" class="list-4"><p>3</p></li>
          </ul>
        </div>

        <div class="gs snap-container">

            <div class="slide-gs" id="slide-gs-1">


              <div class="content">
                <div class="text-content">
                  <div class="go-back">
                    <a class="backlink" href="javascript:history.back()">Go back</a>
                  </div>

                  <h1>Get <span class="spring">Started</h1>
                  <p>Wherever you are, it’s the perfect place to begin. <br>Luckily, it only takes 3 steps to begin this journey and start co-creating this new world with us. </p>
                  <p class="spring">Scroll down to begin</p>
                  <div class="down-arrow"><img src="img/arrow-green-down.svg"/></div>
                </div>
              </div>

              <div class="slide-cont persp">
                <img class="flower1" src="img/slide1.png"/>
              </div>

              <div class="numerone">
                #0
              </div>

              <div class="other-numb">
                <p class="on">#0</p>
              </div>

              <div class="down-arrow-pc"><img src="img/arrow-green-down.svg"/></div>
            </div>


            <div class="slide-gs" id="slide-gs-2">
              <div class="content">
                <div class="text-content">
                  <h2>Download the<br/><span class="spring">Global Passport</h2>
                  <p>The SEEDS Passport app is your point of access into the SEEDS financial ecosystem.</p>
                  <ul class="bp">
                    <li><span class="spring">connect</span> with renaissance makers</li>
                    <li><span class="spring">engage</span>  with the greater community</li>
                    <li><span class="spring">vote</span>  on proposals for projects</li>
                  </ul>
                  <div class="buttons-store end">
                        <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-global-passport/id1478774948" target="_blank"><img src="img/apple-dark.svg">Apple Store</a></div>
                        <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.app" target="_blank"><img src="img/android-dark.svg">Play Store</a></div>
                  </div>
                </div>
              </div>

              <div class="slide-cont">
                <div class="slide-passport-1">
                  <img class="passport-sc-1" src="img/passport/p2.jpg"/>
                </div>
                <div class="slide-passport-2">
                  <img class="passport-sc-2" src="img/passport/p3.jpg"/>
                </div>
              </div>

              <div class="numerone">
                01
              </div>

              <div class="other-numb">
                <p class="on">01</p>
                <p class="vertical">SEEDS Global <span class="spring">Passport</span></p>
              </div>
            </div>


            <div class="slide-gs" id="slide-gs-3">
              <div class="content">
                <div class="text-content">
                  <h2>Request<br/><span class="spring">An invitation</h2>
                  <p>While everyone is invited to the party, we just want to make sure you’re a sentient creature and not a robot. That’s why we implemented the Web of Trust by asking people to request an invitation.<span class="spring"> You can do this directly in the Passport.</span></p>

                </div>
              </div>

              <div class="slide-cont">
                <div class="slide-passport-3">
                  <img class="passport-sc-3" src="img/passport/p1.jpg"/>
                </div>

              </div>
              <div class="numerone">
                02
              </div>
              <div class="other-numb">
                <p class="on">02</p>
                <p class="vertical">Web of <span class="spring">Trust</span></p>
              </div>
            </div>



            <div class="slide-gs" id="slide-gs-4">
              <!-- particles.js container -->
              <div id="particles-js"></div>

              <!-- scripts -->
              <script src="js/particles/particles.js"></script>
              <script src="js/particles/app.js"></script>


              <div class="content">
                <div class="text-content">
                  <h2>Get Ready<br/><span class="spring">To regenerate</h2>
                  <p>That’s it! You’re in! Get ready to play! There’s a whole community here to help you on this journey.</p>
                  <div class="buttons-store end">
                        <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-global-passport/id1478774948" target="_blank"><img src="img/apple-dark.svg">Apple Store</a></div>
                        <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.app" target="_blank"><img src="img/android-dark.svg">Play Store</a></div>
                  </div>
                </div>
              </div>

              <div class="slide-cont vid">
                <div class="video-cutter">
                    <!--  <video src="videos/seeds-orb.webm" type="video/webm" playsinline autoplay muted loop></video>-->
                  <video playsinline autoplay muted loop data-setup="{}">
                      <source src="videos/seeds-orb.webm" type="video/webm" />
                      <source src="videos/seeds-orb.mp4" type="video/mp4" />
                  </video>
                </div>
              </div>

              <div class="numerone">
                03
              </div>
              <div class="other-numb">
                <p class="on">03</p>
                <p class="vertical">Game of <span class="spring">SEEDS</span></p>
              </div>
            </div>
            <div class="slide-gs" id="slide-gs-5">
              <?php
                include 'incl/footer.php';
              ?>
            </div>
        </div>


    </main>




    <script src="js/scrollsnap.js" type="text/javascript"></script>


  </body>
</html>

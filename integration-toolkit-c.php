<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <!-- Meta Tags Generic-->
    <title>SEEDS | Integration Toolkit</title>
    <meta name="description" content="All the tools you need to bring your community, your business, your movement into the SEEDS Universe.">
    <meta name="og:image" content="https://joinseeds.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="SEEDS :: Integration Toolkit">


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
    <link rel="stylesheet" href="css/organization-tools.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/resp.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <script src="js/owl.navigation.js" type="text/javascript"></script>
    <script src="js/qrcode.min.js" type="text/javascript"></script>
    <script src="js/jspdf.js"></script>
    <script src="js/html2canvas-dpi.min.js"></script>

    <!-- Luigi's Verify account + static link, QR code and sticker generator
    <script src="js/verify-and-generate.js" type="text/javascript"></script>
    -->


    <!--luigi's global custom animations-->
    <script src="js/animation-org.js" type="text/javascript"></script>

    <!--luigi's Ajax org tools switcher + all the verification and sticker creation process-->
    <script src="js/organization-tools-switcher.js" type="text/javascript"></script>



    <!--luigi's custom top scrollbar-->
    <script src="js/custom-scrollbar.js" type="text/javascript"></script>



    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

  </head>
  <body class="org-tools org-mobile">

    <div class="pages-logo-resp">
        <a href="index.php">
          <img src="img/logo-forest-full.svg" alt="seeds"/>
        </a>
    </div>

    <?php
        include 'incl/menu.php';
     ?>


    <!--page loader very basic-->
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

            <a href="index.php">
              <img src="img/logo-forest-full.svg" alt="seeds"/>
            </a>

        </div>
      </div>
    </header>

    <main>
      <section class="org-header">
        <div class="org-liner">
          <img src="img/ot-liner.svg">
        </div>
        <div class="centered">
          <div class="org-h-left">
            <div class="ohl-wrap">
              <h1>Integration <span class="spring">Toolkit</h1>
              <p class="org-fake-tit">For Partners<br/><span class="text-font spring">&Collaborators</p>
              <p>Find all the tools you need to <strong>invite</strong> your members to join, send them <strong>rewards</strong> and <strong>accept payments</strong> in Seeds on your website, or at your phisical store.</p>
              <a class="backlink" href="javascript:history.back()">Go back</a>
            </div>
          </div>

          <div class="org-h-right">
            <img src="img/web-exemple.svg"/>
          </div>
        </div>
      </section>



      <section id="org-tech" class="org-tech mobile">

        <div class="org-liner-rev">
          <img src="img/org-liner-rev.svg">
        </div>

        <div class="centered">

          <div class="section-title">
              <h2>Take your tools</h2>
            </div>

          <div id="opt1" class="option">

            <div class="opt-ins">
              <div class="opt-ico"><img src="img/ico-qr.svg"/></div>
              <h2>QR-codes & stickers</h2>
              <p class="fake-tit-small">Using Just Your<br><span class="spring">Global Passport</span></p>
              <p>Invite your community into SEEDS, reward them and accept payments in Seeds with this nifty tool. All you need is a SEEDS Organisation account.
                <br/><br/>Generate your organisation <strong>QR code</strong> and <strong>URL link</strong> to share or print <strong>biodegradable stickers</strong> for your store or point of sale.
              </p>
              <div class="buttons-magic">
                <p id="opt1-btn" href="#" class="discover">Discover</p>
                <p id="opt1-btn-close" href="#" class="discover">Close</p>
              </div>
            </div>
          </div>

          <div id="opt2" class="option">

            <div class="opt-ins">
              <div class="opt-ico"><img src="img/ico-plug.svg"/></div>
              <h2>Plug-ins & Widgets</h2>
              <p class="fake-tit-small">All the Magic Directly<br><span class="spring">on Your Website</span></p>
              <p>For everyone who has a <strong>website</strong>, these tools help you <strong>invite</strong> your community, <strong>reward</strong> them and <strong>accept payments in Seeds</strong> all directly on your own website.
                <br><br>You'll find a series of <strong>plug-ins</strong> for the major web platforms in order to make your life easy!
              </p>
              <div class="buttons-magic">
                <p id="opt2-btn"  href="#" class="discover">Discover</p>
                <p id="opt2-btn-close" href="#" class="discover">Close</p>
              </div>

            </div>
          </div>


          <div id="opt3" class="option">

            <div class="opt-ins">
              <div class="opt-ico"><img src="img/ico-code.svg"/></div>
              <h2>Smart Contracts</h2>
              <p class="fake-tit-small">Create Your Own<br><span class="spring">Integrated App</span></p>
              <p>For those wizards out there who have full stack <strong>developing knowledge</strong> who want to create their own <strong>SEEDS dApp</strong>.
                <br><br>Here you’ll find all the smart contracts and documentation necessary for you to create <strong>your own SEEDS dApp</strong> or integrate it into your own systems.
               </p>
              <div class="buttons-magic">
                <p id="opt3-btn" href="#" class="discover">Discover</p>
                <p id="opt3-btn-close" href="#" class="discover">Close</p>
              </div>
            </div>
          </div>

        </div>

      </section>

      <section id="tools-switcher">


      </section>


    </main>


    <?php
      include 'incl/footer.php';
    ?>



  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">


    <!-- Meta Tags Generic-->
    <title>SEEDS :: Economic Renaissance</title>
    <meta name="description" content="A new economy that rewards regenerative behaviours, finances the regeneration of our Earth and encourages collaboration and community building">
    <meta name="og:image" content="https://joinseeds.earth/img/og-image.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png" />


    <!--  Non-Essential, But Recommended -->

    <meta property="og:site_name" content="SEEDS :: Economic Renaissance">


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
    <link rel="stylesheet" href="css/loader-style.css?version=1.8">
    <link rel="stylesheet" href="css/general.css?version=1.8">
    <link rel="stylesheet" href="css/menu.css?version=1.8">
    <link rel="stylesheet" href="css/resp.css?version=1.8">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/apparalax-nu-home.js" type="text/javascript"></script>
    <script src="js/lax.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <script src="js/owl.navigation.js" type="text/javascript"></script>


    <!-- Luigi's include passport section based on device size -->
    <script type="text/javascript">

    $(function() {
          $.ajax({
            type: 'GET',
            url: 'incl/passport-switcher.html',
            data: {ScreenWidth: $(window).width()},
            success: function(data) {
              // alert(data);
              $('.passport').html(data);
            }
          });
        });
    </script>

    <!-- Luigi's include light wallet section based on device size -->
    <script type="text/javascript">
    $(function() {
          $.ajax({
            type: 'GET',
            url: 'incl/wallet-switcher.html',
            data: {ScreenWidth: $(window).width()},
            success: function(data) {
              // alert(data);
              $('.light-wallet').html(data);
            }
          });
        });
    </script>


    <!--Luigi's GET data from API (resident,citize,visitors number)-->

    <script type="text/javascript">
      $(document).ready(function(){

        const Url='https://app.joinseeds.com/api/passport/v2/user-metrices';

        $.ajax({
            url: Url,
            type: "GET",
            success: function(result){


              var citizen = result.filter(function(r){ return r._id === 'citizen'; })[0].total;
              $("#append0").append(citizen);

              var resident = result.filter(function(r){ return r._id === 'resident'; })[0].total;
              $("#append1").append(resident);

              var visitor = result.filter(function(r){ return r._id === 'visitor'; })[0].total;
              $("#append2").append(visitor);

              var totalusers = citizen + resident + visitor;
              $(" #append-tot").append(totalusers);


              console.log(citizen);
              console.log(resident);
              console.log(visitor);
              console.log(totalusers);


            }
        });

      });

    </script>


    <!--Luigi's GET data from API (Seeds lunar cycle price chart)-->

    <script type="text/javascript">
      $(document).ready(function(){

        const Url='https://app.joinseeds.com/api/passport/v2/fetch-blockchain?actions=tlosto.seeds-price';

        $.ajax({
            url: Url,
            type: "GET",
            success: function(result){
              console.log(result);


              cleanArray = result['tlosto.seeds-price'].data;

              Last = cleanArray[cleanArray.length - 1].seeds_usd.replace(/[^\d.-]/g, '');
              beforeLast = cleanArray[cleanArray.length - 3].seeds_usd.replace(/[^\d.-]/g, '');

            //  cleanSeeds29 = result['tlosto.seeds-price'].data[29].seeds_usd.replace(/[^\d.-]/g, '');
            //  cleanSeeds30 = result['tlosto.seeds-price'].data[30].seeds_usd.replace(/[^\d.-]/g, '');


              math = ((beforeLast - Last) / Last ) *100 ;

              console.log(cleanArray);
              console.log(Last);
              console.log(beforeLast);
              console.log((math).toFixed(2) + '%');


              var seedsGrowth = (math).toFixed(2);

              if (seedsGrowth > 0) {
                    console.log("The number is positive");
                    $("#sgrwth").append('<span class="spring">+' + seedsGrowth + '%</span>');
                    $("#math-seeds").prepend('<img src="img/up.svg">');


                }

                else {
                     console.log("The number is negative");
                     $("#sgrwth").append('<span class="neg">' + seedsGrowth + '%</span>');
                     $("#math-seeds").prepend('<img src="img/down.svg">');
                }




            }

        });

      });

    </script>


    <!--luigi's custom animation when elements appear on screen -->
    <script src="js/onscreen.js" type="text/javascript"></script>

    <!--luigi's home custom animations-->
    <script src="js/animation-home-nu.js?version=1.6" type="text/javascript"></script>

    <!--luigi's custom top scrollbar-->
    <script src="js/custom-scrollbar.js" type="text/javascript"></script>

    <!-- Work Sans Open Source Font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">


    <!--mautic form-->
    <script type="text/javascript">
      /** This section is only needed once per page if manually copying **/
      if (typeof MauticSDKLoaded == 'undefined') {
          var MauticSDKLoaded = true;
          var head            = document.getElementsByTagName('head')[0];
          var script          = document.createElement('script');
          script.type         = 'text/javascript';
          script.src          = 'https://newsletters.hypha.earth/media/js/mautic-form.js';
          script.onload       = function() {
              MauticSDK.onLoad();
          };
          head.appendChild(script);
          var MauticDomain = 'https://newsletters.hypha.earth';
          var MauticLang   = {
              'submittingMessage': "Please wait..."
          }
      }else if (typeof MauticSDK != 'undefined') {
          MauticSDK.onLoad();
      }
    </script>


  </head>
  <body class="home-nu">

    <div class="pop-up">

      <div class="centered">
        <div id="close"><img src="img/x-close.svg"/></div>
        <div class="title-nl-form">
        <h3>Subscribe to <br><span class="spring">SEEDS Newsletter</span></h3>
        </div>

        <div id="mauticform_wrapper_subscribeformjoinseedsearth" class="mauticform_wrapper">
            <form autocomplete="false" role="form" method="post" action="https://newsletters.hypha.earth/form/submit?formId=1" id="mauticform_subscribeformjoinseedsearth" data-mautic-form="subscribeformjoinseedsearth" enctype="multipart/form-data">
                <div class="mauticform-error" id="mauticform_subscribeformjoinseedsearth_error"></div>
                <div class="mauticform-message" id="mauticform_subscribeformjoinseedsearth_message"></div>
                <div class="mauticform-innerform">


                  <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                    <div id="mauticform_subscribeformjoinseedsearth_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">
                        <label id="mauticform_label_subscribeformjoinseedsearth_email" for="mauticform_input_subscribeformjoinseedsearth_email" class="mauticform-label">Email</label>
                        <input id="mauticform_input_subscribeformjoinseedsearth_email" name="mauticform[email]" value="" class="mauticform-input" type="email">
                        <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                    </div>

                    <div id="mauticform_subscribeformjoinseedsearth_first_name" data-validate="first_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-2 mauticform-required">
                        <label id="mauticform_label_subscribeformjoinseedsearth_first_name" for="mauticform_input_subscribeformjoinseedsearth_first_name" class="mauticform-label">First Name</label>
                        <input id="mauticform_input_subscribeformjoinseedsearth_first_name" name="mauticform[first_name]" value="" class="mauticform-input" type="text">
                        <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                    </div>

                    <div id="mauticform_subscribeformjoinseedsearth_last_name" data-validate="last_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-3 mauticform-required">
                        <label id="mauticform_label_subscribeformjoinseedsearth_last_name" for="mauticform_input_subscribeformjoinseedsearth_last_name" class="mauticform-label">Last Name</label>
                        <input id="mauticform_input_subscribeformjoinseedsearth_last_name" name="mauticform[last_name]" value="" class="mauticform-input" type="text">
                        <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                    </div>

                    <div id="mauticform_subscribeformjoinseedsearth_country" data-validate="country" data-validation-type="country" class="mauticform-row mauticform-select mauticform-field-4 mauticform-required">
                        <label id="mauticform_label_subscribeformjoinseedsearth_country" for="mauticform_input_subscribeformjoinseedsearth_country" class="mauticform-label">Country</label>
                        <select id="mauticform_input_subscribeformjoinseedsearth_country" name="mauticform[country]" value="" class="mauticform-selectbox">
                            <option value=""></option>                    <option value="Afghanistan">Afghanistan</option>                    <option value="Åland Islands">Åland Islands</option>                    <option value="Albania">Albania</option>                    <option value="Algeria">Algeria</option>                    <option value="Andorra">Andorra</option>                    <option value="Angola">Angola</option>                    <option value="Anguilla">Anguilla</option>                    <option value="Antarctica">Antarctica</option>                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>                    <option value="Argentina">Argentina</option>                    <option value="Armenia">Armenia</option>                    <option value="Aruba">Aruba</option>                    <option value="Australia">Australia</option>                    <option value="Austria">Austria</option>                    <option value="Azerbaijan">Azerbaijan</option>                    <option value="Bahamas">Bahamas</option>                    <option value="Bahrain">Bahrain</option>                    <option value="Bangladesh">Bangladesh</option>                    <option value="Barbados">Barbados</option>                    <option value="Belarus">Belarus</option>                    <option value="Belgium">Belgium</option>                    <option value="Belize">Belize</option>                    <option value="Benin">Benin</option>                    <option value="Bermuda">Bermuda</option>                    <option value="Bhutan">Bhutan</option>                    <option value="Bolivia">Bolivia</option>                    <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>                    <option value="Botswana">Botswana</option>                    <option value="Bouvet Island">Bouvet Island</option>                    <option value="Brazil">Brazil</option>                    <option value="Brunei">Brunei</option>                    <option value="Bulgaria">Bulgaria</option>                    <option value="Burkina Faso">Burkina Faso</option>                    <option value="Burundi">Burundi</option>                    <option value="Cape Verde">Cape Verde</option>                    <option value="Cambodia">Cambodia</option>                    <option value="Cameroon">Cameroon</option>                    <option value="Canada">Canada</option>                    <option value="Cayman Islands">Cayman Islands</option>                    <option value="Central African Republic">Central African Republic</option>                    <option value="Chad">Chad</option>                    <option value="Chile">Chile</option>                    <option value="China">China</option>                    <option value="Colombia">Colombia</option>                    <option value="Comoros">Comoros</option>                    <option value="Cook Islands">Cook Islands</option>                    <option value="Costa Rica">Costa Rica</option>                    <option value="Croatia">Croatia</option>                    <option value="Cuba">Cuba</option>                    <option value="Cyprus">Cyprus</option>                    <option value="Czech Republic">Czech Republic</option>                    <option value="Denmark">Denmark</option>                    <option value="Djibouti">Djibouti</option>                    <option value="Dominica">Dominica</option>                    <option value="Dominican Republic">Dominican Republic</option>                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>                    <option value="East Timor">East Timor</option>                    <option value="Ecuador">Ecuador</option>                    <option value="Egypt">Egypt</option>                    <option value="El Salvador">El Salvador</option>                    <option value="Equatorial Guinea">Equatorial Guinea</option>                    <option value="Eritrea">Eritrea</option>                    <option value="Estonia">Estonia</option>                    <option value="Ethiopia">Ethiopia</option>                    <option value="Falkland Islands">Falkland Islands</option>                    <option value="Fiji">Fiji</option>                    <option value="Finland">Finland</option>                    <option value="France">France</option>                    <option value="French Guiana">French Guiana</option>                    <option value="French Polynesia">French Polynesia</option>                    <option value="Gabon">Gabon</option>                    <option value="Gambia">Gambia</option>                    <option value="Georgia">Georgia</option>                    <option value="Germany">Germany</option>                    <option value="Ghana">Ghana</option>                    <option value="Gibraltar">Gibraltar</option>                    <option value="Greece">Greece</option>                    <option value="Greenland">Greenland</option>                    <option value="Grenada">Grenada</option>                    <option value="Guadeloupe">Guadeloupe</option>                    <option value="Guam">Guam</option>                    <option value="Guatemala">Guatemala</option>                    <option value="Guernsey">Guernsey</option>                    <option value="Guinea">Guinea</option>                    <option value="Guinea Bissau">Guinea Bissau</option>                    <option value="Guyana">Guyana</option>                    <option value="Haiti">Haiti</option>                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>                    <option value="Holy See">Holy See</option>                    <option value="Honduras">Honduras</option>                    <option value="Hong Kong">Hong Kong</option>                    <option value="Hungary">Hungary</option>                    <option value="Iceland">Iceland</option>                    <option value="India">India</option>                    <option value="Indonesia">Indonesia</option>                    <option value="Iran">Iran</option>                    <option value="Iraq">Iraq</option>                    <option value="Ireland">Ireland</option>                    <option value="Israel">Israel</option>                    <option value="Italy">Italy</option>                    <option value="Ivory Coast">Ivory Coast</option>                    <option value="Jamaica">Jamaica</option>                    <option value="Japan">Japan</option>                    <option value="Jersey">Jersey</option>                    <option value="Jordan">Jordan</option>                    <option value="Kazakhstan">Kazakhstan</option>                    <option value="Kenya">Kenya</option>                    <option value="Kiribati">Kiribati</option>                    <option value="Kosovo">Kosovo</option>                    <option value="Kuwait">Kuwait</option>                    <option value="Kyrgyzstan">Kyrgyzstan</option>                    <option value="Laos">Laos</option>                    <option value="Latvia">Latvia</option>                    <option value="Lebanon">Lebanon</option>                    <option value="Lesotho">Lesotho</option>                    <option value="Liberia">Liberia</option>                    <option value="Libya">Libya</option>                    <option value="Liechtenstein">Liechtenstein</option>                    <option value="Lithuania">Lithuania</option>                    <option value="Luxembourg">Luxembourg</option>                    <option value="Macao">Macao</option>                    <option value="Macedonia">Macedonia</option>                    <option value="Madagascar">Madagascar</option>                    <option value="Malawi">Malawi</option>                    <option value="Malaysia">Malaysia</option>                    <option value="Maldives">Maldives</option>                    <option value="Mali">Mali</option>                    <option value="Malta">Malta</option>                    <option value="Marshall Islands">Marshall Islands</option>                    <option value="Martinique">Martinique</option>                    <option value="Mauritania">Mauritania</option>                    <option value="Mauritius">Mauritius</option>                    <option value="Mayotte">Mayotte</option>                    <option value="Mexico">Mexico</option>                    <option value="Micronesia">Micronesia</option>                    <option value="Moldova">Moldova</option>                    <option value="Monaco">Monaco</option>                    <option value="Mongolia">Mongolia</option>                    <option value="Montenegro">Montenegro</option>                    <option value="Montserrat">Montserrat</option>                    <option value="Morocco">Morocco</option>                    <option value="Mozambique">Mozambique</option>                    <option value="Myanmar">Myanmar</option>                    <option value="Namibia">Namibia</option>                    <option value="Nauru">Nauru</option>                    <option value="Nepal">Nepal</option>                    <option value="Netherlands">Netherlands</option>                    <option value="New Caledonia">New Caledonia</option>                    <option value="New Zealand">New Zealand</option>                    <option value="Nicaragua">Nicaragua</option>                    <option value="Niger">Niger</option>                    <option value="Nigeria">Nigeria</option>                    <option value="Niue">Niue</option>                    <option value="North Korea">North Korea</option>                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>                    <option value="Norway">Norway</option>                    <option value="Oman">Oman</option>                    <option value="Pakistan">Pakistan</option>                    <option value="Palau">Palau</option>                    <option value="Palestine">Palestine</option>                    <option value="Panama">Panama</option>                    <option value="Papua New Guinea">Papua New Guinea</option>                    <option value="Paraguay">Paraguay</option>                    <option value="Peru">Peru</option>                    <option value="Philippines">Philippines</option>                    <option value="Pitcairn">Pitcairn</option>                    <option value="Poland">Poland</option>                    <option value="Portugal">Portugal</option>                    <option value="Puerto Rico">Puerto Rico</option>                    <option value="Qatar">Qatar</option>                    <option value="Republic of the Congo">Republic of the Congo</option>                    <option value="Réunion">Réunion</option>                    <option value="Romania">Romania</option>                    <option value="Russia">Russia</option>                    <option value="Rwanda">Rwanda</option>                    <option value="Saint Barthelemy">Saint Barthelemy</option>                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>                    <option value="Saint Lucia">Saint Lucia</option>                    <option value="Saint Martin">Saint Martin</option>                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>                    <option value="Samoa">Samoa</option>                    <option value="San Marino">San Marino</option>                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>                    <option value="Saudi Arabia">Saudi Arabia</option>                    <option value="Senegal">Senegal</option>                    <option value="Serbia">Serbia</option>                    <option value="Seychelles">Seychelles</option>                    <option value="Sierra Leone">Sierra Leone</option>                    <option value="Singapore">Singapore</option>                    <option value="Slovakia">Slovakia</option>                    <option value="Slovenia">Slovenia</option>                    <option value="Solomon Islands">Solomon Islands</option>                    <option value="Somalia">Somalia</option>                    <option value="South Africa">South Africa</option>                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>                    <option value="South Korea">South Korea</option>                    <option value="South Sudan">South Sudan</option>                    <option value="Spain">Spain</option>                    <option value="Sri Lanka">Sri Lanka</option>                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>                    <option value="Sudan">Sudan</option>                    <option value="Suriname">Suriname</option>                    <option value="Swaziland">Swaziland</option>                    <option value="Sweden">Sweden</option>                    <option value="Switzerland">Switzerland</option>                    <option value="Syria">Syria</option>                    <option value="Tahiti">Tahiti</option>                    <option value="Taiwan">Taiwan</option>                    <option value="Tajikistan">Tajikistan</option>                    <option value="Tanzania">Tanzania</option>                    <option value="Thailand">Thailand</option>                    <option value="Togo">Togo</option>                    <option value="Tokelau">Tokelau</option>                    <option value="Tonga">Tonga</option>                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>                    <option value="Tunisia">Tunisia</option>                    <option value="Turkey">Turkey</option>                    <option value="Turkmenistan">Turkmenistan</option>                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>                    <option value="Tuvalu">Tuvalu</option>                    <option value="United Kingdom">United Kingdom</option>                    <option value="United States">United States</option>                    <option value="Unknown">Unknown</option>                    <option value="Uganda">Uganda</option>                    <option value="Ukraine">Ukraine</option>                    <option value="United Arab Emirates">United Arab Emirates</option>                    <option value="Uruguay">Uruguay</option>                    <option value="Uzbekistan">Uzbekistan</option>                    <option value="Vanuatu">Vanuatu</option>                    <option value="Venezuela">Venezuela</option>                    <option value="Vietnam">Vietnam</option>                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>                    <option value="Wallis and Futuna">Wallis and Futuna</option>                    <option value="Western Sahara">Western Sahara</option>                    <option value="Yemen">Yemen</option>                    <option value="Yugoslavia">Yugoslavia</option>                    <option value="Zambia">Zambia</option>                    <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                    </div>

                    <div id="mauticform_subscribeformjoinseedsearth_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-5">
                        <button type="submit" name="mauticform[submit]" id="mauticform_input_subscribeformjoinseedsearth_submit" value="" class="mauticform-button btn btn-default">Submit</button>
                    </div>
                    </div>
                </div>

                <input type="hidden" name="mauticform[formId]" id="mauticform_subscribeformjoinseedsearth_id" value="1">
                <input type="hidden" name="mauticform[return]" id="mauticform_subscribeformjoinseedsearth_return" value="">
                <input type="hidden" name="mauticform[formName]" id="mauticform_subscribeformjoinseedsearth_name" value="subscribeformjoinseedsearth">

                </form>
        </div>

      </div>
    </div>



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

          <div class="buy close">
            <a href="buy-seeds.php">Buy Seeds</a>
          </div>


          <div class="percent close">
            <!--here inside <span> </span> Seed percentage. Plus general link to (?) where user can see where this data come from-->
            <a id="math-seeds" href="buy-seeds.php"><span id="sgrwth"></span>this week</a>
          </div>
        </div>
      </header>

      <main>
        <div id="back-head-120" class="parallax" data-image-src="img/header-3.jpg"></div>
        <section class="header-home nu-header">
          <div class="centered">
            <div class="hh-left">
              <div class="logo-resp">
                <h1>
                  <a href="https://joinseeds.earth">
                    <img src="img/logo-full-color.svg" alt="seeds"/>
                  </a>
                </h1>
              </div>

              <div class="text-anim">
                <div class="ta-top">
                  <p class="hh-ta-1 close">Regenerate</p>
                </div>

                <div class="ta-bottom">
                  <div class="ta-b-cont">
                    <p class="scroller-1 sentence">our economies</p>
                    <p class="scroller-2 sentence">our communities</p>
                    <p class="scroller-3 sentence">our environment</p>
                  </div>
                  <div class="ta-b-text close">
                    <p class="d-only">Seeds is a currency that aligns money with value. <br> We value people, planet and prosperity for all.</p>
                      <p class="r-only">Seeds is a currency that aligns money with value. We value people, planet and prosperity for all.</p>
                  </div>
                </div>

              </div>

              <div class="cta-header">
                <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-global-passport/id1478774948" target="_blank"><img src="img/apple.svg">Apple Store</a></div>
                <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.app" target="_blank"><img src="img/google.svg">Play Store</a></div>
                <div class="get-cta-h">
                  <a class="ju spri" href="get-started.php"><img src="img/plus-green.svg" />Get Started</a>
                </div>

                <div id="nl-sign-up-resp">
                  <p class="nl-s spri" href="get-started.php"><img src="img/nl-icon.svg" />Newsletter Sign-up</p>
                </div>
              </div>


            </div>

            <div class="hh-right close">
              <ul>
                <li><a href="#anch-what"><i class="arrow down"></i>More Than Money</a></li>
                <li><a href="#anch-ecosystem"><i class="arrow down"></i>The Ecosystem</a></li>
                <li><a href="#anch-cta"><i class="arrow down"></i>Get Started</a></li>
                <li><a href="#anch-tools"><i class="arrow down"></i>The Tools We Offer</a></li>
                <li><a href="#anch-case"><i class="arrow down"></i>Regenerative Case Studies</a></li>
                <li><a href="#anch-tech"><i class="arrow down"></i>About Seeds Currency</a></li>
              </ul>



              <div id="nl-sign-up">
                <p class="nl-s spri" href="get-started.php"><img src="img/nl-icon.svg" />Newsletter Sign-up</p>
              </div>

            </div>
          </div>

          <!-- here we print the chat tool -->
          <div class="speak">
            <div class="sup-icons-cont">
              <a href="https://discord.gg/rRtbasPCgB" target="_blank"/>
                <div class="sup-icon"><img src="img/discord-support.svg"/></div>
              </a>

              <a href="https://t.me/seedstroubleshootinggroup" target="_blank"/>
                <div class="sup-icon"><img src="img/telegram-support.svg"/></div>
              </a>
            </div>

            <!--<img src="img/speak.svg"/>
            <video src="videos/seeds-orb.webm" type="video/webm" playsinline autoplay muted loop>-->
              <div class="sup-rota">
                <img src="img/support-words.svg"/>
              </div>
              <div class="video-cutter">
                  <video playsinline autoplay muted loop data-setup="{}">

                      <source src="videos/seeds-orb.webm" type="video/webm" />
                      <source src="videos/seeds-orb.mp4" type="video/mp4" />
                  </video>
              </div>


          </div>

          <div class="img-credit">
            <p>Picture from Qingbao Meng</p>
          </div>

        </section>


        <section id="anch-what" class="what nu">
          <div class="centered">
             <div class="section-title close">
               <h2>More Than Money</h2>
             </div>
             <div class="c-tit">
               <h3>Making currency<br/><span class="spring">more than money</span></h3>
             </div>
           </div>

          <div class="centered">

            <div class="what-left">
                <div class="video-what-is-seeds" >
                  <iframe width="100%" height="auto" src="https://www.youtube.com/embed/WXWBSffxT88" frameborder="0" allow="gyroscope; picture-in-picture;" allowfullscreen></iframe>
                  <!--<video  preload="none" controls poster="/videos/what-is-seeds-poster.jpg">
                    <source src="videos/what-is-seeds.mp4" type="video/mp4">
                  </video>-->
                </div>
            </div>

            <div class="what-right close">
              <div class="c-text lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
                <p class="special">We came together to<br><span class="spring">co-create a new economic system.</span></p>
                <p>SEEDS offers tools to help you, your business and your movement regenerate our planet and encourage collaboration, cooperation and community building. We are changing the way we <span class="spring">assign and distribute value.</span></p>
              </div>
            </div>

            <div class="what-right resp close">
              <div class="c-text">
                <p class="special">We came together to<br><span class="spring">co-create a new economic system.</span></p>
                <p>SEEDS offers tools to help you, your business and your movement regenerate our planet and encourage collaboration, cooperation and community building. We are changing the way we <span class="spring">assign and distribute value.</span></p>
              </div>
            </div>
          </div>
        </section>



        <section id="anch-ecosystem" class="eco-data">
          <div class="centered between">
             <div class="section-title close">
               <h2>The Ecosystem</h2>
             </div>
             <div class="sub-tit-50">
               <p class="special-28">Instead of being more profitable to exploit the natural world, we reward the <span class="spring">regeneration of our planet. </span></p>
             </div>

              <div class="sub-tit-50">
                <p style="margin-top:0;">Using algorithms within the SEEDS platforms, we incentivise collaborative and regenerative behaviours and activities for the wellbeing of the whole. </p>
              </div>
           </div>

          <div class="centered lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">

            <div class="col">
              <div class="rounder">
                <div>
                  <p class="special plus">88</p>
                </div>
                <div>
                  <p class="special-small">Countries</p>
                </div>
              </div>
              <p class="special">Co-create the<br/><span class="spring">New World</span></p>
              <p>We have regenerators in 88 countries on 6 continents with people who speak over 50 languages.</p>
              <div class="line"></div>
            </div>


            <div class="col">
              <div class="rounder">
                <div>
                  <p id="append-tot" class="special plus"></p>
                </div>
                <div>
                  <p class="special-small">Regenerators</p>
                </div>
              </div>
              <p class="special">Regenerators &<br/><span class="spring">Change Agents</span></p>
              <p>Using the Global Passport app, we have <span id="append0"></span> Citizens, <span id="append1"></span> Residents and <span id="append2"></span> total regenerators.</p>
              <div class="line"></div>
            </div>


            <div class="col">
              <div class="rounder">
                <div>
                  <p class="special plus">450</p>
                </div>
                <div>
                  <p class="special-small">Organisations</p>
                </div>
              </div>
              <p class="special">Partners  &<br/><span class="spring">Collaborators</span></p>
              <p>Over 450 partner organisations signed up and over 55 projects (campaigns and alliances) have been funded.</p>
              <div class="line"></div>
            </div>

          </div>
        </section>


        <section id="anch-cta" class="cta">

                <div class="centered">
                  <div class="section-title close">
                    <h2>Get Started</h2>
                  </div>
                </div>

                <div class="centered minus">


                  <div class="cta-l close">

                    <div class="c-cont resp">
                      <div class="wrp">
                        <div class="c-tit">
                          <h3>Join the economic<br/><span class="spring">Renaissance</span></h3>
                        </div>
                        <div class="c-text">
                          <ul>
                            <li>Pay no transaction fees</li>
                            <li>Heal our planet with every purchase/sale</li>
                            <li>Have a direct voice in governance</li>
                            <li>Earn grants for regenerative initiatives</li>
                            <li>Earn an income/revenue for participating</li>
                          </ul>
                        </div>
                        <div class="buttons-cta">
                          <a class="ju" href="get-started.php"><img src="img/plus.svg" />Get Started</a>
                        </div>
                      </div>
                    </div>


                    <div class="c-cont">
                      <div class="wrp">
                        <div class="c-tit">
                          <h3>Join the economic<br/><span class="spring">Renaissance</span></h3>
                        </div>
                        <div class="c-text">
                          <ul>
                            <li>Pay no transaction fees</li>
                            <li>Heal our planet with every purchase/sale</li>
                            <li>Have a direct voice in governance</li>
                            <li>Earn grants for regenerative initiatives</li>
                            <li>Earn an income/revenue for participating</li>
                          </ul>
                        </div>
                        <div class="buttons-cta">
                          <a class="ju" href="get-started.php"><img src="img/plus.svg" />Get Started</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="cta-r">
                    <div class="cuut">
                    <div class="rag-0 lax" data-lax-rotate="(vh) 0, (-vh) 600 | speed=.2"  data-lax-anchor="self"><img class="rag" src="img/raggera.svg"/></div>
                    <div class="rag-1 lax" data-lax-rotate="(vh) 0, (-vh) 500 | speed=.2" data-lax-anchor="self"><img class="rag" src="img/raggera.svg"/></div>
                    <div class="rag-2 lax" data-lax-rotate="(vh) 0, (-vh) 400 | speed=.2" data-lax-anchor="self"><img class="rag" src="img/raggera.svg"/></div>
                    <div class="rag-3 lax" data-lax-rotate="(vh) 0, (-vh) 300 | speed=.2" data-lax-anchor="self"><img class="rag" src="img/raggera.svg"/></div>
                    <div class="rag-4 lax" data-lax-rotate="(vh) 0, (-vh) 200 | speed=.2" data-lax-anchor="self"><img class="rag" src="img/raggera.svg"/></div>
                    <div class="cta-logo"><img src="img/logo-graph.svg"/></div>

                  </div>
                  </div>
                </div>


              </section>

        <section id="anch-tools" class="tools-offered">
          <div class="centered">
            <div class="section-title close">
              <h2>The Tools We Offer</h2>
            </div>
            <div class="c-tit">
              <div class="sub-tit-50">
                <p class="special-42">Tools for the people, <br/><span class="spring"> planet and prosperity to thrive</spring></p>
              </div>
            </div>

            <div class="sub-tit-50">
              <!--<p>SEEDS offers you the tools to help you and your movement <span class="spring">regenerate our planet</span> and encourage <span class="spring">collaboration, cooperation and community building.</span></p>-->
                <p>SEEDS offers you <span class="spring">several apps</span> and <span class="spring"> plug-ins</span> to help you through this new economic system in your life. And, the entire SEEDS community is here to guide you through this journey.</p>
            </div>

            <div class="sub-tit-50">

              <p>On these platforms we use <span class="spring"><img class="small-cur" src="img/seeds-currency.png"/> Seeds, a currency with a conscience.</span> This currency is designed for your everyday use, all while changing the world through shared purpose and incentives.</p>

            </div>
          </div>
          <div class="tools-down">
            <img src="img/down-tools.svg"/>
          </div>
        </section>

        <section id="anch-passport" class="passport nu">

        </section>


        <section id="org-toolkit" class="org-toolkit">
          <div class="org-liner">
            <img src="img/ot-liner.svg"/>
          </div>
          <div class="centered">
            <div class="org-h-left">
              <div class="ohl-wrap">
                <div class="c-cont close">
                  <p><strong>Integration <span class="spring">Toolkit</strong></p>
                  <p class="org-fake-tit">For Partners<br/><span class="text-font spring">& Collaborators</p>
                  <p>Find all the tools you need to <strong>invite</strong> your members to join, send them <strong>rewards</strong> and <strong>accept payments</strong> in Seeds on your website.</p>
                  <div class="normal-button">
                    <a class="ju" href="integration-toolkit.php"><img src="img/plus.svg">Take Your Tools</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="org-h-right">
              <img class="only-pc" src="img/web-exemple-short.svg"/>
              <img class="only-mobile" src="img/web-exemple-resp.svg"/>
            </div>
          </div>
        </section>


        <section class="light-wallet">

        </section>


        <section id="anch-case" class="case-studies nu">
          <div class="centered">
            <div class="section-title close">
              <h2>Regenerative Case Studies</h2>
            </div>
          </div>

          <div class="centered">
            <div class="cs-left">
              <div class="c-cont close">
                <div class="c-tit">
                  <h3>Real Life Stories of SEEDS in Action </h3>
                </div>
                <div class="c-text">
                <p>Find out how people and organisations are utilising the SEEDS tools for their own regenerative efforts to make the world better for all of us.</p>
                </div>
                <div class="col-read">
                  <a class="ju" href="https://docs.google.com/forms/d/e/1FAIpQLSd35uWAOA-00B6QvucIhj_ft3dTSIaHJyjgLLisXNbgMJeMUw/viewform?usp=sf_link" target="blank"><img src="img/plus.svg" />Became an Alliance Partner</a>
                </div>
              </div>
            </div>

            <div class="cs-right">

              <div class="col-half">

                <article>
                  <div class="cat">
                    <p>Alliances</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/money-that-grows-trees/" target="_blank">
                      <img src="img/articles/money_grow_trees.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/money-that-grows-trees/" target="_blank">Money that grows trees</a> </h3>
                  </div>
                  </article>

                </div>


              <div class="col-half">
                <article>
                  <div class="cat">
                    <p>Alliances</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/seeds-help-to-complete-finca-sagrada-dream/" target="_blank">
                      <img src="img/articles/finca-sagrada-garden.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/seeds-help-to-complete-finca-sagrada-dream/" target="_blank">SEEDS Help to Complete Finca-Sagrada Dream</a> </h3>
                  </div>

                </article>
              </div>

              <div class="col-half">
                <article>
                  <div class="cat">
                    <p>Economics</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/telos-blockchain-for-farmers-explained/" target="_blank">
                      <img src="img/articles/blockchain-for-farmers.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/telos-blockchain-for-farmers-explained/" target="_blank">Telos Blockchain for Farmers Explained</a> </h3>
                  </div>

                </article>
              </div>

              <div class="col-half">
                <article>
                  <div class="cat">
                    <p>Alliances</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/moct-a-movement-for-uplifting-communities/" target="_blank">
                      <img src="img/articles/save-families.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/moct-a-movement-for-uplifting-communities/" target="_blank">A Movement to Save Families</a> </h3>
                  </div>

                </article>
              </div>

              <div class="col-half">
                <article>
                  <div class="cat">
                    <p>Alliances</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/better-than-free-school-for-regen-practices/" target="_blank">
                      <img src="img/articles/school-for-regen-practice.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/better-than-free-school-for-regen-practices/" target="_blank">Better-Than-Free School for Regen Practices</a> </h3>
                  </div>

                </article>
              </div>

              <div class="col-half">
                <article>
                  <div class="cat">
                    <p>Community</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/growing-a-growers-movement-in-india/" target="_blank">
                      <img src="img/articles/growers-movement-india.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/growing-a-growers-movement-in-india/" target="_blank">Growing a Growers Movement in India</a> </h3>
                  </div>

                </article>
              </div>

              <div class="col-half">
                <article>
                  <div class="cat">
                    <p>Community</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/seeding-bioregional-well-being-economies/" target="_blank">
                      <img src="img/articles/seeding-bioregional-economies.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/seeding-bioregional-well-being-economies/" target="_blank">Seeding Bioregional Well-Being Economies</a> </h3>
                  </div>

                </article>
              </div>

              <div class="col-half">
                <article>
                  <div class="cat">
                    <p>Lifestyle</p>
                  </div>
                  <div class="thumb">
                    <a href="https://seedslibrary.com/embracing-the-many-voices-of-seeds/" target="_blank">
                      <img src="img/articles/many-voices-of-seeds.jpg"/>
                    </a>
                  </div>
                  <div class="art-tit">
                    <h3> <a href="https://seedslibrary.com/embracing-the-many-voices-of-seeds/" target="_blank">Embracing the Many Voices of SEEDS</a> </h3>
                  </div>

                </article>
              </div>


            </div>
          </div>
        </section>





        <section id="anch-tech" class="library nu">
          <div class="centered">
            <div class="section-title close">
              <h2>About Seeds Currency</h2>
            </div>
          </div>

          <div class="centered only-resp">
            <div class="cs-left">
              <div class="c-cont close">
                <div class="c-tit">
                  <h3>Learn What Makes SEEDS Possible</h3>
                </div>
                <div class="c-text">
                <p>Everything from blockchain technology to application software, SEEDS takes advantage of all the most innovative technologies to make this new world possible.</p>
                </div>
                <div class="col-read">
                  <a class="ju" href="#"><img src="img/plus.svg" /> Read More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="centered">

            <div class="navigator">
              <div class="inputs">
                <div class="back inactive"><img src="img/arrow-right.svg"/></div>
                <div class="forward"><img src="img/arrow-right.svg"/></div>
              </div>
            </div>



            <div class="owl-carousel">
                <div class="card">
                  <div class="c-cont close">
                    <div class="c-tit">
                      <h3>Discover What Makes SEEDS Work</h3>
                    </div>
                      <div class="c-text">
                      <p>Everything from blockchain technology to application software, SEEDS takes advantage of all the most innovative technologies to make this new world possible.</p>
                      </div>
                      <div class="col-read">
                        <a class="ju" href="https://seedslibrary.com/" target="_blank"><img src="img/plus.svg" />Discover the SEEDS library</a>
                        <a class="ju" href="#" target="_blank"><img src="img/plus.svg" />Co-create the Living Constitution</a>
                        <a class="ju" href="#" target="_blank"><img src="img/plus.svg" />Play with SEEDS Game Guide</a>
                      </div>

                  </div>
                </div>


                <div class="card">
                  <article>
                    <div class="cat">
                      <p>Technology</p>
                    </div>
                    <div class="thumb">
                      <a href="https://seedslibrary.com/blockchain-as-a-single-source-of-truth/" target="blank">
                        <img src="img/articles/blockchain-single-truth.jpg"/>
                      </a>
                    </div>
                    <div class="art-tit">
                      <h3> <a href="https://seedslibrary.com/blockchain-as-a-single-source-of-truth/" target="blank">Blockchain as a Single Source of Truth</a> </h3>
                    </div>

                  </article>
                </div>


                <div class="card">
                  <article>
                    <div class="cat">
                      <p>Technology</p>
                    </div>
                    <div class="thumb">
                      <a href="https://seedslibrary.com/seeds-cryptocurrency-explained/" target="blank">
                        <img src="img/articles/seeds-cryptocurrency-explained.jpg"/>
                      </a>
                    </div>
                    <div class="art-tit">
                      <h3> <a href="https://seedslibrary.com/seeds-cryptocurrency-explained/" target="blank">Seeds Cryptocurrency Explained</a> </h3>
                    </div>

                  </article>
                </div>


                <div class="card">
                  <article>
                    <div class="cat">
                      <p>Technology</p>
                    </div>
                    <div class="thumb">
                      <a href="https://seedslibrary.com/cryptocurrency-a-solution-to-our-environmental-crisis/" target="blank">
                        <img src="img/articles/environmental-crisis-solution.jpg"/>
                      </a>
                    </div>
                    <div class="art-tit">
                      <h3> <a href="https://seedslibrary.com/cryptocurrency-a-solution-to-our-environmental-crisis/" target="blank">Cryptocurrency: Our Environmental Crisis Solution</a> </h3>
                    </div>

                  </article>
                </div>



                <div class="card">
                  <article>
                    <div class="cat">
                      <p>Economics</p>
                    </div>
                    <div class="thumb">
                      <a href="https://seedslibrary.com/why-you-want-to-accept-seeds/" target="_blank">
                        <img src="img/articles/accept.jpg"/>
                      </a>
                    </div>
                    <div class="art-tit">
                      <h3> <a href="https://seedslibrary.com/why-you-want-to-accept-seeds/" target="_blank">Why You Want to Accept Seeds</a> </h3>
                    </div>
                  </article>
                </div>


                <div class="card">
                  <article>
                    <div class="cat">
                      <p>Economics</p>
                    </div>
                    <div class="thumb">
                      <a href="https://seedslibrary.com/seeds-harvest-in-action/" target="_blank">
                        <img src="img/articles/seeds-harvest.jpg"/>
                      </a>
                    </div>
                    <div class="art-tit">
                      <h3> <a href="https://seedslibrary.com/seeds-harvest-in-action/" target="_blank">Seeds Harvest in Action</a> </h3>
                    </div>
                  </article>
                </div>






            </div>
          </div>

        </section>



        <section id="anch-mile" class="history">
          <div class="centered">
            <div class="section-title close">
              <h2>The Journey</h2>
            </div>
          </div>

          <div class="centered">
            <div class="cs-left">
              <div class="c-cont close">
                <div class="c-tit">
                  <h3>Where we have been & where we are going</h3>
                </div>
                <div class="c-text">
                <p>Get an idea of the major milestones we’ve identified to earmark the development of our economy.</p>
                </div>
              </div>
            </div>

            <div class="cs-right">

              <div class="col-half">
                <div class="time-card close">
                  <p class="data">August 2017</p>
                  <p class="tc-title">Seeds is born</p>
                  <p class="tc-cont">The journey begins, idea seeds are planted and full-time R&D.</p>
                </div>
              </div>

              <div class="col-half">
                <div class="time-card close">
                  <p class="data">July 2019</p>
                  <p class="tc-title">Telos (Blockchain) mainnet</p>
                  <p class="tc-cont">Two years later and the core blockchain functionality is live.</p>
                </div>
              </div>

              <div class="col-half">
                <div class="time-card close">
                  <p class="data">September 2019</p>
                  <p class="tc-title">Pre release of Passport</p>
                  <p class="tc-cont">The mobile app, the "Passport" pre-released for testing.</p>
                </div>
              </div>

              <div class="col-half">
                <div class="time-card close">
                  <p class="data">November 2019</p>
                  <p class="tc-title">Alpha release of Passport</p>
                  <p class="tc-cont">The foundations for the “Minimum Viable Society” are released to the world.</p>
                </div>
              </div>

              <div class="col-half">
                <div class="time-card close">
                  <p class="data">January 2020</p>
                  <p class="tc-title">Seeds Token Live</p>
                  <p class="tc-cont">Seeds are listed on decentralised exchanges to bought and sold.</p>
                </div>
              </div>

              <div class="col-half">
                <div class="time-card close">
                  <p class="data">February 2020</p>
                  <p class="tc-title">Campaigns begin</p>
                  <p class="tc-cont">The Citizens begin voting on a wide diversity of campaigns to finance the regenerative renaissance. From planting trees to doing good deeds and anything in between.</p>
                </div>
              </div>

              <!--<div class="col-half">
                <div class="time-card close">
                  <p class="data">February 2020</p>
                  <p class="tc-title">Beta and public release of passport</p>
                  <p class="tc-cont">Public release and update of the SEEDS Global Passport on app stores.</p>
                </div>
              </div>-->

              <div class="col-half">
                <div class="time-card close">
                  <p class="data">February 2020</p>
                  <p class="tc-title">SEEDS Alliances</p>
                  <p class="tc-cont">The Citizens begin voting on a wide diversity of Alliances from organisations to be gifted Seeds based on their dedication to creating a regenerative civilization and supporting this Regenerative Renaissance!</p>
                </div>
              </div>

              <!--<div class="col-half">
                <div class="time-card close">
                  <p class="data">November 2020</p>
                  <p class="tc-title">SEEDS Global Birthday Celebration</p>
                  <p class="tc-cont">The SEEDS community celebrates its one year birthday with a global live online event.</p>
                </div>
              </div>-->




              <div class="col-half">
                <div class="time-card close">
                  <p class="data">May 2021</p>
                  <p class="tc-title">New Global Passport Released</p>
                  <p class="tc-cont">Major release and update of the SEEDS Passport! SEEDS has a new look and a much easier interface to engage with its tools.</p>
                </div>
              </div>


              <div class="col-half">
                <div class="time-card close">
                  <p class="data">-</p>
                  <p class="tc-title">SEEDS Game Audited</p>
                  <p class="tc-cont">All major features the Citizens need to govern, evolve, model, exchange and grow their own financial system are deployed. Final economic and security tests running.</p>
                </div>
              </div>


              <div class="col-half">
                <div class="time-card close">
                  <p class="data">-</p>
                  <p class="tc-title">Go Live / Go Stable</p>
                  <p class="tc-cont">Go Live" occurs when Citizens vote on whether or not they believe the SEEDS economy is robust enough to start stabilising the value of the Seeds currency and start the "Harvest". We want this point to occur when our economy is large enough that we can start meeting our needs using Seeds. This event won't occur until the price of Seeds is at least $0.80 USD.</p>
                </div>
              </div>


              <!--<div class="col-half">
                <div class="time-card close">
                  <p class="data">-</p>
                  <p class="tc-title">Go live fully active</p>
                  <p class="tc-cont">3 lunar cycles after “Go Live” passes a vote, the Harvest protocols begin. Residents, Citizens and organisations begin earning a Harvest for their contributions. Seeds become increasingly stable as the algorithms take effect.</p>
                </div>
              </div>-->



            </div>
          </div>
        </section>

      </main>

      <?php
        include 'incl/footer.php';
      ?>

  </body>
</html>

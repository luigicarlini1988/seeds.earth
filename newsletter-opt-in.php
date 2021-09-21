<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">


    <!-- Meta Tags Generic-->
    <title>SEEDS :: Newsletter Sign-up</title>
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
    <link rel="stylesheet" href="css/loader-style.css?version=1.9">
    <link rel="stylesheet" href="css/general.css?version=1.9">
    <link rel="stylesheet" href="css/optin-page.css?version=1.9">
    <link rel="stylesheet" href="css/menu.css?version=1.9">
    <link rel="stylesheet" href="css/resp.css?version=1.9">


    <!-- Javascript / jQuery libraries -->
    <script src="js/jquery-3-10-1-min.js" type="text/javascript"></script>
    <script src="js/animation-global.js" type="text/javascript"></script>


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

  <body>

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


    <main id="main-opt-in">
      <div id="opt-in-header">
        <div class="cent-header">
          <img class="top-logo-roung" src="https://newsletters.hypha.earth/asset/9:seedsasset3-png?stream=1" />
          <img class="top-logo-white" src="https://newsletters.hypha.earth/asset/20:seeds-logo-whitepng?stream=1" />
          <p>Preference <span class="accent-color">Center</span></p>
          <img class="tri-spring" src="https://newsletters.hypha.earth/asset/21:triangolino-springpng?stream=1" />
        </div>
      </div>

      <div id="pref-center-mautic">

            <div id="mauticform_wrapper_multisubscribeseeds" class="mauticform_wrapper">

              <div class="title-nl-form">
              <h3>Subscribe to the <br><span class="spring">SEEDS Newsletter</span></h3>
              </div>

              <div class="the-price">
                <p>By Subscribing to the SEEDS newsletter you will receive <b>important announcements</b> and a <b>monthly update</b> on all SEEDS ecosystem. In this page you can also decide to opt-in to more specific channels. <b>This part is optional and entirely up to you.</b></p>
              </div>

              <div class="form-wrap">
                <form autocomplete="false" role="form" method="post" action="https://newsletters.hypha.earth/form/submit?formId=5" id="mauticform_multisubscribeseeds" data-mautic-form="multisubscribeseeds" enctype="multipart/form-data" name="Multi-SubscribeSeeds">
                  <div class="mauticform-error" id="mauticform_multisubscribeseeds_error"></div>
                  <div class="mauticform-message" id="mauticform_multisubscribeseeds_message"></div>
                  <div class="mauticform-innerform">
                    <div class="top-data">
                      <h4>Your Data</h4>
                    </div>
                    <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                      <div id="mauticform_multisubscribeseeds_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">
                          <label id="mauticform_label_multisubscribeseeds_email" for="mauticform_input_multisubscribeseeds_email" class="mauticform-label">Email</label>
                          <input id="mauticform_input_multisubscribeseeds_email" name="mauticform[email]" value="" class="mauticform-input" type="email">
                          <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                      </div>

                      <div id="mauticform_multisubscribeseeds_first_name" data-validate="first_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-2 mauticform-required">
                          <label id="mauticform_label_multisubscribeseeds_first_name" for="mauticform_input_multisubscribeseeds_first_name" class="mauticform-label">First Name</label>
                          <input id="mauticform_input_multisubscribeseeds_first_name" name="mauticform[first_name]" value="" class="mauticform-input" type="text">
                          <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                      </div>

                      <div id="mauticform_multisubscribeseeds_last_name" data-validate="last_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-3 mauticform-required">
                          <label id="mauticform_label_multisubscribeseeds_last_name" for="mauticform_input_multisubscribeseeds_last_name" class="mauticform-label">Last Name</label>
                          <input id="mauticform_input_multisubscribeseeds_last_name" name="mauticform[last_name]" value="" class="mauticform-input" type="text">
                          <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                      </div>

                      <div id="mauticform_multisubscribeseeds_country" data-validate="country" data-validation-type="country" class="mauticform-row mauticform-select mauticform-field-4 mauticform-required">
                          <label id="mauticform_label_multisubscribeseeds_country" for="mauticform_input_multisubscribeseeds_country" class="mauticform-label">Country</label>
                          <select id="mauticform_input_multisubscribeseeds_country" name="mauticform[country]" value="United States" placeholder="Unknown" class="mauticform-selectbox">
                              <option value="">Unknown</option>                    <option value="Afghanistan">Afghanistan</option>                    <option value="Åland Islands">Åland Islands</option>                    <option value="Albania">Albania</option>                    <option value="Algeria">Algeria</option>                    <option value="Andorra">Andorra</option>                    <option value="Angola">Angola</option>                    <option value="Anguilla">Anguilla</option>                    <option value="Antarctica">Antarctica</option>                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>                    <option value="Argentina">Argentina</option>                    <option value="Armenia">Armenia</option>                    <option value="Aruba">Aruba</option>                    <option value="Australia">Australia</option>                    <option value="Austria">Austria</option>                    <option value="Azerbaijan">Azerbaijan</option>                    <option value="Bahamas">Bahamas</option>                    <option value="Bahrain">Bahrain</option>                    <option value="Bangladesh">Bangladesh</option>                    <option value="Barbados">Barbados</option>                    <option value="Belarus">Belarus</option>                    <option value="Belgium">Belgium</option>                    <option value="Belize">Belize</option>                    <option value="Benin">Benin</option>                    <option value="Bermuda">Bermuda</option>                    <option value="Bhutan">Bhutan</option>                    <option value="Bolivia">Bolivia</option>                    <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>                    <option value="Botswana">Botswana</option>                    <option value="Bouvet Island">Bouvet Island</option>                    <option value="Brazil">Brazil</option>                    <option value="Brunei">Brunei</option>                    <option value="Bulgaria">Bulgaria</option>                    <option value="Burkina Faso">Burkina Faso</option>                    <option value="Burundi">Burundi</option>                    <option value="Cape Verde">Cape Verde</option>                    <option value="Cambodia">Cambodia</option>                    <option value="Cameroon">Cameroon</option>                    <option value="Canada">Canada</option>                    <option value="Cayman Islands">Cayman Islands</option>                    <option value="Central African Republic">Central African Republic</option>                    <option value="Chad">Chad</option>                    <option value="Chile">Chile</option>                    <option value="China">China</option>                    <option value="Colombia">Colombia</option>                    <option value="Comoros">Comoros</option>                    <option value="Cook Islands">Cook Islands</option>                    <option value="Costa Rica">Costa Rica</option>                    <option value="Croatia">Croatia</option>                    <option value="Cuba">Cuba</option>                    <option value="Cyprus">Cyprus</option>                    <option value="Czech Republic">Czech Republic</option>                    <option value="Denmark">Denmark</option>                    <option value="Djibouti">Djibouti</option>                    <option value="Dominica">Dominica</option>                    <option value="Dominican Republic">Dominican Republic</option>                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>                    <option value="East Timor">East Timor</option>                    <option value="Ecuador">Ecuador</option>                    <option value="Egypt">Egypt</option>                    <option value="El Salvador">El Salvador</option>                    <option value="Equatorial Guinea">Equatorial Guinea</option>                    <option value="Eritrea">Eritrea</option>                    <option value="Estonia">Estonia</option>                    <option value="Ethiopia">Ethiopia</option>                    <option value="Falkland Islands">Falkland Islands</option>                    <option value="Fiji">Fiji</option>                    <option value="Finland">Finland</option>                    <option value="France">France</option>                    <option value="French Guiana">French Guiana</option>                    <option value="French Polynesia">French Polynesia</option>                    <option value="Gabon">Gabon</option>                    <option value="Gambia">Gambia</option>                    <option value="Georgia">Georgia</option>                    <option value="Germany">Germany</option>                    <option value="Ghana">Ghana</option>                    <option value="Gibraltar">Gibraltar</option>                    <option value="Greece">Greece</option>                    <option value="Greenland">Greenland</option>                    <option value="Grenada">Grenada</option>                    <option value="Guadeloupe">Guadeloupe</option>                    <option value="Guam">Guam</option>                    <option value="Guatemala">Guatemala</option>                    <option value="Guernsey">Guernsey</option>                    <option value="Guinea">Guinea</option>                    <option value="Guinea Bissau">Guinea Bissau</option>                    <option value="Guyana">Guyana</option>                    <option value="Haiti">Haiti</option>                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>                    <option value="Holy See">Holy See</option>                    <option value="Honduras">Honduras</option>                    <option value="Hong Kong">Hong Kong</option>                    <option value="Hungary">Hungary</option>                    <option value="Iceland">Iceland</option>                    <option value="India">India</option>                    <option value="Indonesia">Indonesia</option>                    <option value="Iran">Iran</option>                    <option value="Iraq">Iraq</option>                    <option value="Ireland">Ireland</option>                    <option value="Israel">Israel</option>                    <option value="Italy">Italy</option>                    <option value="Ivory Coast">Ivory Coast</option>                    <option value="Jamaica">Jamaica</option>                    <option value="Japan">Japan</option>                    <option value="Jersey">Jersey</option>                    <option value="Jordan">Jordan</option>                    <option value="Kazakhstan">Kazakhstan</option>                    <option value="Kenya">Kenya</option>                    <option value="Kiribati">Kiribati</option>                    <option value="Kosovo">Kosovo</option>                    <option value="Kuwait">Kuwait</option>                    <option value="Kyrgyzstan">Kyrgyzstan</option>                    <option value="Laos">Laos</option>                    <option value="Latvia">Latvia</option>                    <option value="Lebanon">Lebanon</option>                    <option value="Lesotho">Lesotho</option>                    <option value="Liberia">Liberia</option>                    <option value="Libya">Libya</option>                    <option value="Liechtenstein">Liechtenstein</option>                    <option value="Lithuania">Lithuania</option>                    <option value="Luxembourg">Luxembourg</option>                    <option value="Macao">Macao</option>                    <option value="Macedonia">Macedonia</option>                    <option value="Madagascar">Madagascar</option>                    <option value="Malawi">Malawi</option>                    <option value="Malaysia">Malaysia</option>                    <option value="Maldives">Maldives</option>                    <option value="Mali">Mali</option>                    <option value="Malta">Malta</option>                    <option value="Marshall Islands">Marshall Islands</option>                    <option value="Martinique">Martinique</option>                    <option value="Mauritania">Mauritania</option>                    <option value="Mauritius">Mauritius</option>                    <option value="Mayotte">Mayotte</option>                    <option value="Mexico">Mexico</option>                    <option value="Micronesia">Micronesia</option>                    <option value="Moldova">Moldova</option>                    <option value="Monaco">Monaco</option>                    <option value="Mongolia">Mongolia</option>                    <option value="Montenegro">Montenegro</option>                    <option value="Montserrat">Montserrat</option>                    <option value="Morocco">Morocco</option>                    <option value="Mozambique">Mozambique</option>                    <option value="Myanmar">Myanmar</option>                    <option value="Namibia">Namibia</option>                    <option value="Nauru">Nauru</option>                    <option value="Nepal">Nepal</option>                    <option value="Netherlands">Netherlands</option>                    <option value="New Caledonia">New Caledonia</option>                    <option value="New Zealand">New Zealand</option>                    <option value="Nicaragua">Nicaragua</option>                    <option value="Niger">Niger</option>                    <option value="Nigeria">Nigeria</option>                    <option value="Niue">Niue</option>                    <option value="North Korea">North Korea</option>                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>                    <option value="Norway">Norway</option>                    <option value="Oman">Oman</option>                    <option value="Pakistan">Pakistan</option>                    <option value="Palau">Palau</option>                    <option value="Palestine">Palestine</option>                    <option value="Panama">Panama</option>                    <option value="Papua New Guinea">Papua New Guinea</option>                    <option value="Paraguay">Paraguay</option>                    <option value="Peru">Peru</option>                    <option value="Philippines">Philippines</option>                    <option value="Pitcairn">Pitcairn</option>                    <option value="Poland">Poland</option>                    <option value="Portugal">Portugal</option>                    <option value="Puerto Rico">Puerto Rico</option>                    <option value="Qatar">Qatar</option>                    <option value="Republic of the Congo">Republic of the Congo</option>                    <option value="Réunion">Réunion</option>                    <option value="Romania">Romania</option>                    <option value="Russia">Russia</option>                    <option value="Rwanda">Rwanda</option>                    <option value="Saint Barthelemy">Saint Barthelemy</option>                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>                    <option value="Saint Lucia">Saint Lucia</option>                    <option value="Saint Martin">Saint Martin</option>                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>                    <option value="Samoa">Samoa</option>                    <option value="San Marino">San Marino</option>                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>                    <option value="Saudi Arabia">Saudi Arabia</option>                    <option value="Senegal">Senegal</option>                    <option value="Serbia">Serbia</option>                    <option value="Seychelles">Seychelles</option>                    <option value="Sierra Leone">Sierra Leone</option>                    <option value="Singapore">Singapore</option>                    <option value="Slovakia">Slovakia</option>                    <option value="Slovenia">Slovenia</option>                    <option value="Solomon Islands">Solomon Islands</option>                    <option value="Somalia">Somalia</option>                    <option value="South Africa">South Africa</option>                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>                    <option value="South Korea">South Korea</option>                    <option value="South Sudan">South Sudan</option>                    <option value="Spain">Spain</option>                    <option value="Sri Lanka">Sri Lanka</option>                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>                    <option value="Sudan">Sudan</option>                    <option value="Suriname">Suriname</option>                    <option value="Swaziland">Swaziland</option>                    <option value="Sweden">Sweden</option>                    <option value="Switzerland">Switzerland</option>                    <option value="Syria">Syria</option>                    <option value="Tahiti">Tahiti</option>                    <option value="Taiwan">Taiwan</option>                    <option value="Tajikistan">Tajikistan</option>                    <option value="Tanzania">Tanzania</option>                    <option value="Thailand">Thailand</option>                    <option value="Togo">Togo</option>                    <option value="Tokelau">Tokelau</option>                    <option value="Tonga">Tonga</option>                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>                    <option value="Tunisia">Tunisia</option>                    <option value="Turkey">Turkey</option>                    <option value="Turkmenistan">Turkmenistan</option>                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>                    <option value="Tuvalu">Tuvalu</option>                    <option value="United Kingdom">United Kingdom</option>                    <option value="United States" selected>United States</option>                    <option value="Unknown">Unknown</option>                    <option value="Uganda">Uganda</option>                    <option value="Ukraine">Ukraine</option>                    <option value="United Arab Emirates">United Arab Emirates</option>                    <option value="Uruguay">Uruguay</option>                    <option value="Uzbekistan">Uzbekistan</option>                    <option value="Vanuatu">Vanuatu</option>                    <option value="Venezuela">Venezuela</option>                    <option value="Vietnam">Vietnam</option>                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>                    <option value="Wallis and Futuna">Wallis and Futuna</option>                    <option value="Western Sahara">Western Sahara</option>                    <option value="Yemen">Yemen</option>                    <option value="Yugoslavia">Yugoslavia</option>                    <option value="Zambia">Zambia</option>                    <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                          <span class="mauticform-errormsg" style="display: none;">this field is mandatory</span>
                      </div>

                      <div id="mauticform_multisubscribeseeds_captcha" data-validate="captcha" data-validation-type="captcha" class="mauticform-row mauticform-text mauticform-field-5 mauticform-required">
                          <label id="mauticform_label_multisubscribeseeds_captcha" for="mauticform_input_multisubscribeseeds_captcha" class="mauticform-label">prove you are real: 18 - 5 ?</label>
                          <input id="mauticform_input_multisubscribeseeds_captcha" name="mauticform[captcha]" value="" class="mauticform-input" type="text">
                          <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                      </div>

                      <div class="multi">
                        <div class="full-w">
                          <h4><span style="font-size:14px;font-weight:600;font-family:var(--font-body);">Optional</span><br/>Additional Email Channels</h4>
                          <p>Here you can choose one or more specific channels you are interested in. <b>This part is optional and entirely up to you.</b> You can find more information about each channel at the bottom of this page.</p>
                        </div>
                        <div id="mauticform_multisubscribeseeds_multi_segment" class="mauticform-row mauticform-checkboxgrp mauticform-field-6">

                            <div class="mauticform-checkboxgrp-row">                    <input class="mauticform-checkboxgrp-checkbox" name="mauticform[multi_segment][]" id="mauticform_checkboxgrp_checkbox_multi_segment_00" type="checkbox" value="0">
                                <label id="mauticform_checkboxgrp_label_multi_segment_00" for="mauticform_checkboxgrp_checkbox_multi_segment_00" class="mauticform-checkboxgrp-label">Samara</label>
                            </div>
                            <div class="mauticform-checkboxgrp-row">                    <input class="mauticform-checkboxgrp-checkbox" name="mauticform[multi_segment][]" id="mauticform_checkboxgrp_checkbox_multi_segment_11" type="checkbox" value="1">
                                <label id="mauticform_checkboxgrp_label_multi_segment_11" for="mauticform_checkboxgrp_checkbox_multi_segment_11" class="mauticform-checkboxgrp-label">Movement Building</label>
                            </div>
                            <div class="mauticform-checkboxgrp-row">                    <input class="mauticform-checkboxgrp-checkbox" name="mauticform[multi_segment][]" id="mauticform_checkboxgrp_checkbox_multi_segment_22" type="checkbox" value="2">
                                <label id="mauticform_checkboxgrp_label_multi_segment_22" for="mauticform_checkboxgrp_checkbox_multi_segment_22" class="mauticform-checkboxgrp-label">Renaissance Explorers</label>
                            </div>
                            <div class="mauticform-checkboxgrp-row">                    <input class="mauticform-checkboxgrp-checkbox" name="mauticform[multi_segment][]" id="mauticform_checkboxgrp_checkbox_multi_segment_33" type="checkbox" value="3">
                                <label id="mauticform_checkboxgrp_label_multi_segment_33" for="mauticform_checkboxgrp_checkbox_multi_segment_33" class="mauticform-checkboxgrp-label">Hypha</label>
                            </div>

                            <span class="mauticform-errormsg" style="display: none;"></span>
                        </div>
                    </div>

                      <div id="mauticform_multisubscribeseeds_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-7">
                          <button type="submit" name="mauticform[submit]" id="mauticform_input_multisubscribeseeds_submit" value="" class="mauticform-button btn btn-default">Submit</button>
                      </div>
                      </div>
                  </div>

                  <input type="hidden" name="mauticform[formId]" id="mauticform_multisubscribeseeds_id" value="5">
                  <input type="hidden" name="mauticform[return]" id="mauticform_multisubscribeseeds_return" value="">
                  <input type="hidden" name="mauticform[formName]" id="mauticform_multisubscribeseeds_name" value="multisubscribeseeds">

                  </form>
                </div>
              </div>
        </div>


        <div id="channel-info">
          <div class="ci-tit"><h4>Channels Info</h4></div>
          <div class="channel-grid">

            <div class="channel-item">
              <div class="ci-image-wrap">
                <img src="img/hypha-nl.jpg"/>
              </div>
              <div class="text-content">
                <h4>Hypha</h4>
                <p>Has spent 4+ years building, testing and iterating decentralised and  foundational tools, each a potent product in their own right. The SEEDS ecosystem was one of Hypha’s first decentralised tools</p>
                <div class="linker">
                  <a href="https://hypha.earth" target="_blank">hypha.earth</a>
                </div>
              </div>
            </div>

            <div class="channel-item">
              <div class="ci-image-wrap">
                <img src="img/seeds-mbc-nl.jpg"/>
              </div>
              <div class="text-content">
                <h4>Movement Building</h4>
                <p>Movement Building Circle (MBC) weaves together people and organizations on local, regional, and global level rooted in the spirit of the Regenerative Renaissance.</p>
                <div class="linker">
                  <a href="https://mbc.joinseeds.earth" target="_blank">mbc.joinseeds.earth</a>
                </div>
              </div>
            </div>

            <div class="channel-item">
              <div class="ci-image-wrap">
                <img src="img/samara-nl.jpg"/>
              </div>
              <div class="text-content">
                <h4>Samara</h4>
                <p>Samara aims to help SEEDS spread further through outreach and engagement to grow the abundant, regenerative potential of SEEDS.</p>
                <div class="linker">
                  <a href="https://guide.hypha.earth/books/the-chronicles-of-samara" target="_blank">Chronicles of Samara</a>
                </div>
              </div>
            </div>

            <div class="channel-item">
              <div class="ci-image-wrap">
                <img src="img/renaissance-nl.jpg"/>
              </div>
              <div class="text-content">
                <h4>Renaissance Explorers</h4>
                <p>RE aims to bring cohesion to SEEDS by making it more accessible for every willing player through decentralizing wisdom and knowledge.</p>
                <div class="linker">
                  <a href="https://explorers.joinseeds.earth" target="_blank">explorers.joinseeds.earth</a>
                </div>
              </div>
            </div>




          </div>
        </div>

      </main>

          <?php
            include 'incl/footer.php';
          ?>

  </body>


</div>

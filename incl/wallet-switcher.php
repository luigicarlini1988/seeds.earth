<?php
 $jq_ajax_screen_width = $_GET['ScreenWidth'];
 if ($jq_ajax_screen_width > 375) {
   echo '
   <div class="light-wallet-normal">
   <div class="liner">
      <img src="img/lw-liner.svg" />
   </div>

                 <div class="centered">
                   <div class="wallet-l">
                     <div class="c-cont">
                       <div class="c-tit">
                         <p><span class="spring">Mobile version</span></p>
                         <h3>Light<span class="spring">Wallet</span></h3>
                       </div>
                       <div class="c-text">
                         <p class="bold">Regenerate money, simply</p><p>Seeds Light Wallet: for those who want to step into a better world of regeneration in the simplest way.</p>
                       </div>
                       <div class="buttons-store">
                         <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-light-wallet/id1507143650" target="_blank"><img src="img/apple.svg">Apple Store</a></div>
                         <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.seedswallet&hl=en_US&gl=US" target="_blank"><img src="img/google.svg">Play Store</a></div>
                       </div>
                     </div>

                   </div>

                   <div class="wallet-r close">
                     <div class="p-sec">
                       <div class="col p1">
                         <div class="wrapper">
                            <img src="img/light-wallet/light-1.jpg"/>
                         </div>
                       </div>
                       <div class="col p2">
                         <div class="wrapper">
                            <img src="img/light-wallet/light-2.jpg"/>
                         </div>
                       </div>
                       <div class="col p3">
                         <div class="wrapper">
                            <img src="img/light-wallet/light-3.jpg"/>
                         </div>
                       </div>
                   </div>
                 </div>
               </div>
             </div>
   ';
    } else
    {    echo '

      <div class="light-wallet-resp">
                  <div class="centered">

                    <div class="c-cont">
                      <div class="c-tit">
                        <p>Mobile version</p>
                        <h3>Light<span class="spring">Wallet</span></h3>
                      </div>
                      <div class="c-text">
                        <p class="bold">Regenerate money, simply</p><p>Seeds Light Wallet: for those who want to step into a better world of regeneration in the simplest way.</p>
                      </div>
                    </div>

                    <div class="pr-wrap-im">
                          <img src="img/light-wallet/light-1.jpg"/>
                    </div>

                    <div class="buttons-store end">
                      <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-light-wallet/id1507143650" target="_blank"><img src="img/apple.svg">Apple Store</a></div>
                      <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.seedswallet&hl=en_US&gl=US" target="_blank"><img src="img/google.svg">Play Store</a></div>
                    </div>


                  </div>
                </div>
              ';

  }

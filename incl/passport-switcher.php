<?php
 $jq_ajax_screen_width = $_GET['ScreenWidth'];
 if ($jq_ajax_screen_width > 375) {
   echo '

 <div class="passport-normal">
   <div class="centered">
     <div class="passport-l">
       <div class="c-cont">
         <div class="c-tit">
           <p>Mobile version</p>
           <h3>Global<span class="spring">Passport</span></h3>
         </div>
         <div class="c-text">
           <div class="text-slider">
             <div class="txt-s">
               <p class="bold">Your passport to the SEEDS Universe</p><p>Send and receive money instantly without fees or boundaries on how and where you spend. You have full control over your assets and you even get rewarded for using it.</p>
             </div>

             <div class="txt-s">
               <p class="bold">Your Place to Share & Co-create</p><p>Engage in the conversation, share your ideas and follow up on the activities of your bioregion. SEEDS rewards you for your wisdom, your contribution and your co-creation.</p>
             </div>

             <div class="txt-s">
               <p class="bold">Your Direct & Empowered Voice</p><p>Vote on proposals for projects, campaigns and referendums. The SEEDS Universe is a place for direct, participatory governance to give you a voice. You even get rewarded for participating.</p>
             </div>

             <div class="txt-s">
               <p class="bold">Your Regenereative Market Place</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim consecut</p>
             </div>
           </div>
         </div>
         <div class="buttons-store">
           <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-global-passport/id1478774948" target="_blank"><img src="img/apple.svg">Apple Store</a></div>
           <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.app" target="_blank"><img src="img/google.svg">Play Store</a></div>
         </div>
       </div>
     </div>

     <div class="passport-r">
       <div class="p-sec">
         <div class="col p1">
           <div class="wrapper lax" data-lax-translate-y="(vh) 1, (-vh) -400" data-lax-anchor="self">
             <img src="img/passport/p1.jpg"/>
           </div>
         </div>
         <div class="col p2">
           <div class="wrapper lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
             <img src="img/passport/p2.jpg"/>
           </div>
         </div>
         <div class="col p3">
           <div class="wrapper">
             <img src="img/passport/p3.jpg"/>
           </div>
         </div>

         <div class="anch-1"></div>
       </div>

       <div class="p-sec">
         <div class="col p1">
           <div class="wrapper lax" data-lax-translate-y="(vh) 1, (-vh) -400" data-lax-anchor="self">
             <img src="img/passport/p4.jpg"/>
           </div>
         </div>
         <div class="col p2">
           <div class="wrapper lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
             <img src="img/passport/p5.jpg"/>
           </div>
         </div>
         <div class="col p3">
           <div class="wrapper">
             <img src="img/passport/p6.jpg"/>
           </div>
         </div>
         <div class="anch-2"></div>
       </div>

       <div class="p-sec">
         <div class="col p1">
           <div class="wrapper lax" data-lax-translate-y="(vh) 1, (-vh) -400" data-lax-anchor="self">
             <img src="img/passport/p7.jpg"/>
           </div>
         </div>
         <div class="col p2">
           <div class="wrapper lax" data-lax-translate-y="(vh) 1, (-vh) -200" data-lax-anchor="self">
             <img src="img/passport/p8.jpg"/>
           </div>
         </div>
         <div class="col p3">
           <div class="wrapper">
             <img src="img/passport/p9.jpg"/>
           </div>
         </div>
         <div class="anch-3"></div>
       </div>


       <!--<div class="p-sec">
         <div class="col p1">
           <div class="wrapper">
             <img src="img/passport/p1.jpg"/>
           </div>
         </div>
         <div class="col p2">
           <div class="wrapper">
             <img src="img/passport/p1.jpg"/>
           </div>
         </div>
         <div class="col p3">
           <div class="wrapper">
             <img src="img/passport/p1.jpg"/>
           </div>
         </div>
         <div class="anch-4"></div>
       </div>-->

     </div>


   </div>

   <div class="centered">
     <div class="section-title desktop">
       <h2>Desktop Version (coming very soon)</h2>
     </div>
   </div>

     <div class="desktop">
       <div class="desk-cont">
         <div class="anch-d"></div>
         <div class="col">
           <div class="wrapp">
             <img src="img/passport/p-desc.jpg"/>
           </div>
         </div>

         <div class="col">
           <div class="wrapp">
             <img src="img/passport/p-desc.jpg"/>
           </div>
         </div>

         <div class="col">
           <div class="wrapp">
             <img src="img/passport/p-desc.jpg"/>
           </div>
         </div>
       </div>
     </div>

     <div class="centered">
       <div class="solo-link">
         <div class="c-cont">
            <p class="coming-soon-gp">Coming Very Soon</p>
           <!--<div class="buttons-store desk-soon">
             <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-global-passport/id1478774948" target="_blank"><img src="img/apple.svg">Apple Store</a></div>
             <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.app" target="_blank"><img src="img/google.svg">Play Store</a></div>
           </div>-->
         </div>
       </div>

     </div>
   </div>

   ';
    } else
    {    echo '
            <div class="passport-resp">


                  <div class="centered">

                      <div class="c-cont">
                        <div class="c-tit">
                          <p>Mobile/Tablet/Pc</p>
                          <h3>Global<span class="spring">Passport</span></h3>
                        </div>
                        <div class="c-text">

                            <div class="txt-s">
                              <p class="bold">Your Passport to SEEDS Universe</p><p>Send and receive money instantly without fees or boundaries on how and where you spend. You have full control over your assets and you even get rewarded for using it.</p>
                            </div>

                        </div>
                        <div class="buttons-store">
                          <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-global-passport/id1478774948" target="_blank"><img src="img/apple.svg">Apple Store</a></div>
                          <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.app" target="_blank"><img src="img/google.svg">Play Store</a></div>
                        </div>
                      </div>

                      <div class="pr-wrap-im greener">
                        <img src="img/passport/p1.jpg"/>
                      </div>

                      <div class="c-cont sander">
                        <div class="txt-s">
                          <p class="bold">Your Place to Share & Co-create</p><p>Engage in the conversation, share your ideas and follow up on the activities of your bioregion. SEEDS rewards you for your wisdom, your contribution and your co-creation.</p>
                        </div>
                      </div>

                      <div class="pr-wrap-im">
                        <img src="img/passport/p4.jpg"/>
                      </div>

                      <div class="c-cont">
                        <div class="txt-s">
                          <p class="bold">Your Direct & Empowered Voice</p><p>Vote on proposals for projects, campaigns and referendums. SEEDS offers direct, participatory governance to give you a voice. You even get rewarded for participating.</p>
                        </div>
                      </div>

                      <div class="pr-wrap-im sander">
                          <img src="img/passport/p8.jpg"/>
                      </div>

                      <div class="c-cont greener">
                        <div class="txt-s">
                          <p class="bold">Join the Regenerative Renaissance</p><p>Be the change you want to Seed in the world by joining the movement that puts people and planet first.<br/><br/></p>
                        </div>
                      </div>



                      <div class="buttons-store end">
                        <div class="apple"><a class="ju spri" href="https://apps.apple.com/us/app/seeds-global-passport/id1478774948" target="_blank"><img src="img/apple-dark.svg">Apple Store</a></div>
                        <div class="android"><a class="ju spri" href="https://play.google.com/store/apps/details?id=com.joinseeds.app" target="_blank"><img src="img/android-dark.svg">Play Store</a></div>
                      </div>

                  </div>

                </div>

              '


      ;

  }

// Thanks to Alex Fox for this awesome: lax v1.2.3 used here for parallax aniamtions


window.onload = function() {

  if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

  } else {

    lax.setup() // init

    const updateLax = () => {
      lax.update(window.scrollY)
      window.requestAnimationFrame(updateLax)
    }

        window.requestAnimationFrame(updateLax)
  }
}

$(function() {

    var $body = $(document);
    $body.bind('scroll', function() {
        // "Disable" the horizontal scroll.
        if ($body.scrollLeft() !== 0) {
            $body.scrollLeft(0);
        }
    });

});



$(document).ready(function(){



  var img = new Image('img/header-3.jpg');
   img.onload = function() {
     //header animations

     $(".obscurer").addClass('close');

       $(".logo").removeClass('close');

       setTimeout(function(){
         $(".hh-ta-1").removeClass('close');
       },200);


       setTimeout(function(){
         $(".ta-b-text").removeClass('close');
       },1300);

       setTimeout(function(){
         $(".hh-right").removeClass('close');
       },1800);

       setTimeout(function(){
         $(".buy").removeClass('close');
       },2000);

       setTimeout(function(){
         $(".percent").removeClass('close');
       },2300);



       // Go through a sentence, wrap its characters with spans
       function setUpCharacters() {
         var $sentences = $('.sentence');

         // Run for each sentence
         $sentences.each(function() {
           var $sentence = $(this);
           var newContent = '';

           // Go through all characters of the sentence
           for (i = 0; i < $sentence.text().length; i++) {
             var substring = $sentence.text().substr(i, 1);

             // If we have a character, wrap it
             if (substring != " ") {
               newContent += '<span>' + substring + '</span>';
             } else {
               newContent += substring;
             }
           }

           // Replace content
           $sentence.html(newContent);
         });
       }

       setUpCharacters();

       //first paragraph

       function triggerCharactersIn() {
       var sentenceCounter = 0;
       var sentenceDelay = 600;

       $('.scroller-1').each(function() {
         var $sentence = $(this);

         // Trigger for each sentence
         setTimeout(function() {
           var $spans = $sentence.find('span');
           var spanCounter = 0;
           var spanDelay = 75;

           // Loop through all spans and activate
           $spans.each(function() {
             var $span = $(this);

             // Trigger a timeout so each span is offset
             setTimeout(function() {
               $span.addClass('active');
             }, (spanCounter * spanDelay));

             spanCounter++;
           });
         }, (sentenceCounter * sentenceDelay));

         sentenceCounter++;
       });
     }


     function triggerCharactersOut() {
     var sentenceCounter = 0;
     var sentenceDelay = 600;

     $('.scroller-1').each(function() {
       var $sentence = $(this);

       // Trigger for each sentence
       setTimeout(function() {
         var $spans = $sentence.find('span');
         var spanCounter = 0;
         var spanDelay = 75;

         // Loop through all spans and activate
         $spans.each(function() {
           var $span = $(this);

           // Trigger a timeout so each span is offset
           setTimeout(function() {
             $span.removeClass('active');
           }, (spanCounter * spanDelay));

           spanCounter++;
         });
       }, (sentenceCounter * sentenceDelay));

       sentenceCounter++;
     });
     }


     //second paragraph

     function triggerCharactersIn2() {
     var sentenceCounter = 0;
     var sentenceDelay = 600;

     $('.scroller-2').each(function() {
       var $sentence = $(this);

       // Trigger for each sentence
       setTimeout(function() {
         var $spans = $sentence.find('span');
         var spanCounter = 0;
         var spanDelay = 75;

         // Loop through all spans and activate
         $spans.each(function() {
           var $span = $(this);

           // Trigger a timeout so each span is offset
           setTimeout(function() {
             $span.addClass('active');
           }, (spanCounter * spanDelay));

           spanCounter++;
         });
       }, (sentenceCounter * sentenceDelay));

       sentenceCounter++;
     });
     }


     function triggerCharactersOut2() {
     var sentenceCounter = 0;
     var sentenceDelay = 600;

     $('.scroller-2').each(function() {
     var $sentence = $(this);

     // Trigger for each sentence
     setTimeout(function() {
       var $spans = $sentence.find('span');
       var spanCounter = 0;
       var spanDelay = 75;

       // Loop through all spans and activate
       $spans.each(function() {
         var $span = $(this);

         // Trigger a timeout so each span is offset
         setTimeout(function() {
           $span.removeClass('active');
         }, (spanCounter * spanDelay));

         spanCounter++;
       });
     }, (sentenceCounter * sentenceDelay));

     sentenceCounter++;
     });
     }


     //third paragraph

     function triggerCharactersIn3() {
     var sentenceCounter = 0;
     var sentenceDelay = 600;

     $('.scroller-3').each(function() {
       var $sentence = $(this);

       // Trigger for each sentence
       setTimeout(function() {
         var $spans = $sentence.find('span');
         var spanCounter = 0;
         var spanDelay = 75;

         // Loop through all spans and activate
         $spans.each(function() {
           var $span = $(this);

           // Trigger a timeout so each span is offset
           setTimeout(function() {
             $span.addClass('active');
           }, (spanCounter * spanDelay));

           spanCounter++;
         });
       }, (sentenceCounter * sentenceDelay));

       sentenceCounter++;
     });
     }


     function triggerCharactersOut3() {
     var sentenceCounter = 0;
     var sentenceDelay = 600;

     $('.scroller-3').each(function() {
     var $sentence = $(this);

     // Trigger for each sentence
     setTimeout(function() {
       var $spans = $sentence.find('span');
       var spanCounter = 0;
       var spanDelay = 75;

       // Loop through all spans and activate
       $spans.each(function() {
         var $span = $(this);

         // Trigger a timeout so each span is offset
         setTimeout(function() {
           $span.removeClass('active');
         }, (spanCounter * spanDelay));

         spanCounter++;
       });
     }, (sentenceCounter * sentenceDelay));

     sentenceCounter++;
     });
     }



     setTimeout(function(){

       triggerCharactersIn();

     },500);


     setTimeout(function(){

       triggerCharactersOut();

     },4000);


     setTimeout(function(){

       triggerCharactersIn2();

     },4500);

     setTimeout(function(){

       triggerCharactersOut2();

     },8000);


     setTimeout(function(){

       triggerCharactersIn3();

     },8500);

     setTimeout(function(){

       triggerCharactersOut3();

     },12000);



     setInterval(function(){

         triggerCharactersIn();

       setTimeout(function(){

         triggerCharactersOut();

       },3500);

       setTimeout(function(){

         triggerCharactersIn2();

       },4000);

       setTimeout(function(){

         triggerCharactersOut2();

       },7500);

       setTimeout(function(){

         triggerCharactersIn3();

       },8000);

       setTimeout(function(){

         triggerCharactersOut3();

       },12000);

     },12500);


     // end header animations

     }
  img.src = "img/header-3.jpg";



$('.triangle').click(function(){

  $('.real-video').addClass('open');
  $('body').addClass('lock');

    setTimeout(function(){
      $('.video-container').addClass('open');
      $('.vid-close').addClass('open');
    }, 1000);

});

$('.vid-close').click(function(){

  $('.video-container').removeClass('open');
  $('body').removeClass('lock');
  $('.vid-close').removeClass('open');

  setTimeout(function(){
    $('.real-video').removeClass('open');
  }, 1000);

});

//menu animations

$("#menu-button").click(function(){
        $("#background-menu").toggleClass("ins");
        $(this).toggleClass('mob-mover');
        $("#mbl1, #mbl2, #mbl3").toggleClass("x");
        $("#real-menu").toggleClass("events");
        $('body').toggleClass('lock');
  });



//news carousel navigation and call

   var owl = $('.owl-carousel');
    owl.owlCarousel(

      {
        responsiveClass:true,
          responsive:{

              0:{
                  items:1
                },
              600:{
                  items:2
                },
              900:{
                  items:3
                }
          }
      }
    );
    // Go to the next item
    $('.forward').click(function() {
        owl.trigger('next.owl.carousel', [500]);
    })
    // Go to the previous item
    $('.back').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [500]);
    })


  $(window).on('scroll', function() {
        scrollPosition = $(this).scrollTop();
        if (scrollPosition >= 80) {

            $('.h-home').addClass('close');

        } else {
          $('.h-home').removeClass('close');
        }
  });

  //newsletter animations

  $('#nl-sign-up').click(function(){
    $('.pop-up').addClass('open');
    $('body').addClass('lock');
  });

  $('#nl-sign-up-resp').click(function(){
    $('.pop-up').addClass('open');
    $('body').addClass('lock');
  });


  $('#close').click(function(){
    $('.pop-up').removeClass('open');
    $('body').removeClass('lock');
  });

});

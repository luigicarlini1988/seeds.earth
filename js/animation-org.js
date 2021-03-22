

$(document).ready(function(){

  var img = new Image('img/web-exemple.svg');
   img.onload = function() {

  $(".obscurer").addClass('close');
  $(".logo").removeClass('close');

  }

  img.src = "img/web-exemple.svg";


  $(window).on('scroll', function() {
        scrollPosition = $(this).scrollTop();
        if (scrollPosition >= 80) {

            $('.h-home').addClass('close');

        } else {
          $('.h-home').removeClass('close');
        }
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

           var owl = $('.owlCarousel1');
            owl.owlCarousel(

              {
                responsiveClass:true,
                  responsive:{

                      0:{
                          items:1
                        },
                      600:{
                          items:1
                        },
                      900:{
                          items:1
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


            //third owlCarousel

               var owl2 = $('.owlCarousel2');
                owl2.owlCarousel(

                  {
                    responsiveClass:true,
                      responsive:{

                          0:{
                              items:1
                            },
                          600:{
                              items:1
                            },
                          900:{
                              items:1
                            }
                      }
                  }
                );

                // Go to the next item
                $('.forward2').click(function() {
                    owl2.trigger('next.owl.carousel', [500]);
                })
                // Go to the previous item
                $('.back2').click(function() {
                    owl2.trigger('prev.owl.carousel', [500]);
                })


          //third owlCarousel

             var owl3 = $('.owlCarousel3');
              owl3.owlCarousel(

                {
                  responsiveClass:true,
                    responsive:{

                        0:{
                            items:1
                          },
                        600:{
                            items:1
                          },
                        900:{
                            items:1
                          }
                    }
                }
              );

              // Go to the next item
              $('.forward3').click(function() {
                  owl3.trigger('next.owl.carousel', [500]);
              })
              // Go to the previous item
              $('.back3').click(function() {
                  owl3.trigger('prev.owl.carousel', [500]);
              })

});

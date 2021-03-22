// Thanks to Alex Fox for this awesome: lax v1.2.3 used here for parallax aniamtions

window.onload = function() {

}



$(document).ready(function(){

  var img = new Image('img/slide1.png');
   img.onload = function() {

  $(".obscurer").addClass('close');
  $(".logo").removeClass('close');

  lax.setup() // init

  const updateLax = () => {
    lax.update(window.scrollY)
    window.requestAnimationFrame(updateLax)
  }

      window.requestAnimationFrame(updateLax)

  }

  img.src = "img/slide1.png";



  //menu animations

  $("#menu-button").click(function(){
          $("#background-menu").toggleClass("ins");
          $(this).toggleClass('mob-mover');
          $("#mbl1, #mbl2, #mbl3").toggleClass("x");
          $("#real-menu").toggleClass("events");
          $('body').toggleClass('lock');
    });


  $(window).on('scroll', function() {
        scrollPosition = $(this).scrollTop();
        if (scrollPosition >= 80) {

            $('.h-home').addClass('close');

        } else {
          $('.h-home').removeClass('close');
        }
  });

});

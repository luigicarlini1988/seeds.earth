// Thanks to Alex Fox for this awesome: lax v1.2.3 used here for parallax aniamtions


$(document).ready(function(){
  $(".obscurer").addClass('close');
  $(".logo").removeClass('close');

  setTimeout(function(){
    $(".buy-intro").removeClass('close');
  },300);

  setTimeout(function(){
    $(".percent").removeClass('close');
  },1200);

  setTimeout(function(){
    $(".multistep").removeClass('close');
  },1200);


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
});

$(document).ready(function(){

  $("#dash-grafana").on("load", function () {
      setTimeout(function(){
        $(".obscurer").addClass('close');
        $(".logo").removeClass('close');
      },2200);      
  });



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

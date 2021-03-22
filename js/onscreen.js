jQuery.fn.is_on_screen = function(){
    var win = jQuery(window);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};



jQuery(window).scroll(function(){

  $('.anch-1').each(function() {
        if ($(this).is_on_screen()) {
            $('.text-slider').addClass('step1');
            $('.text-slider').removeClass('step2');
            $('.passport').removeClass('sand');
        }
    });

  $('.anch-2').each(function() {
        if ($(this).is_on_screen()) {
          $('.text-slider').removeClass('step1');
          $('.text-slider').removeClass('step3');
          $('.text-slider').addClass('step2');
          $('.passport').addClass('sand');
        }
    });


  $('.anch-3').each(function() {
        if ($(this).is_on_screen()) {
          $('.text-slider').removeClass('step2');
          $('.text-slider').removeClass('step4');
          $('.text-slider').addClass('step3');

          if($('.passport').hasClass('sand')) {

          } else {
            $('.passport').addClass('sand');

          }

        }
    });

  $('.anch-4').each(function() {
        if ($(this).is_on_screen()) {
          $('.text-slider').removeClass('step3');
            $('.text-slider').addClass('step4');

        }
    });

  $('.anch-d').each(function() {
        if ($(this).is_on_screen()) {
            $('.passport').removeClass('sand');
        }
  });


  $('.section-title').each(function() {
        if ($(this).is_on_screen()) {
            $(this).removeClass('close');
        }
  });

  $('.what-right').each(function() {
        if ($(this).is_on_screen()) {
            $(this).removeClass('close');
        }
  });

  $('.col').each(function() {
        if ($(this).is_on_screen()) {
            $(this).removeClass('close');
        }
  });

  $('.cta-l').each(function() {
        if ($(this).is_on_screen()) {
            $(this).removeClass('close');
        }
  });

  $('.c-cont').each(function() {
        if ($(this).is_on_screen()) {
            $(this).removeClass('close');
        }
  });

  $('.wallet-r').each(function() {
        if ($(this).is_on_screen()) {
            $(this).removeClass('close');
        }
  });

  $('.time-card').each(function() {
        if ($(this).is_on_screen()) {
            $(this).removeClass('close');
        }
  });

  $('#anch-cta-1').each(function() {
        if ($(this).is_on_screen()) {
            $('.cta-logo').removeClass('out');
            $('.cta-org').addClass('out');
            $('.cta-org').addClass('out');
        }
  });


  $('#anch-cta-2').each(function() {
        if ($(this).is_on_screen()) {
            $('.cta-org').removeClass('out');
            $('.cta-logo').addClass('out');
            $('.cta-com').addClass('out');
        }
  });

  $('#anch-cta-3').each(function() {
        if ($(this).is_on_screen()) {
            $('.cta-com').removeClass('out');
            $('.cta-logo').addClass('out');
            $('.cta-org').addClass('out');
        }
  });

  $('.sander').each(function() {
        if ($(this).is_on_screen()) {
            $('.passport').addClass('sand');

        }
  });

  $('.greener').each(function() {
        if ($(this).is_on_screen()) {
            $('.passport').removeClass('sand');

        }
  });





});

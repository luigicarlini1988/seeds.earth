
if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {


 // some code..
} else {


var nunumR;
$(document).ready(function () {
    $(".slide-gs:nth-child(1)").addClass("active"), $("li:nth-child(1)").addClass("active");
}),
    $(".snap-container").scroll(function () {
        $(".text").html("ScrollTop: " + $(".snap-container").scrollTop()),
            (nunum = $(".snap-container").scrollTop() /  $(".snap-container").height()  + 1),
            (nunumR = nunum.toString().split(".")),
            $(".slide-gs").removeClass("active"),
            $(".slide-gs:nth-child(" + nunumR[0] + ")").addClass("active"),

            clearTimeout($.data(this, "scrollTimer")),
            $.data(
                this,
                "scrollTimer",
                setTimeout(function () {
                    $("li").removeClass("active"), $("li:nth-child(" + nunumR[0] + ")").addClass("active");
                }, 10)
            );
    }),
    $(window).resize(function () {
        clearTimeout($.data(this, "resizelTimer")),
            $.data(
                this,
                "resizelTimer",
                setTimeout(function () {
                    $(".snap-container").animate({ scrollTop: 0 }, 500);
                }, 150)
            );
    }),
    $(".count").html("Slides: " + $(".snap-container .slide-gs").length),
    $("li").click(function () {
        console.log($(this).attr("data-slide-link") * $(".slide-gs").height()), $(".snap-container").animate({ scrollTop: $(this).attr("data-slide-link") * $(".slide-gs").height() + 120 }, 600);
    });

  }

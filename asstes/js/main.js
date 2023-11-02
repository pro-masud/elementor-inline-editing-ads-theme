(function($){

/**
 * preloader 
 * 
 * 
    */
    $(window).ready(function () {
        $("#preloader").delay(100).fadeOut("fade");
    });




    // header nav affix class add and remove 

    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
    
        if (scroll < 2) {
          $("nav.sticky-header").removeClass("affix");
        } else {
          $("nav.sticky-header").addClass("affix");
        }
    });


    //integration bootstrap tooltip 

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    

    // home testimonial 

    $(".testimonials").owlCarousel({
        // pagination: true,
        navigation : true,
        slideSpeed : 2500,
        stopOnHover: true,
        autoPlay: 3000,
        items: 3,
        //singleItem:true,
        transitionStyle : "fade",
        navigationText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });


    // aos animation 
    AOS.init();



})(jQuery)
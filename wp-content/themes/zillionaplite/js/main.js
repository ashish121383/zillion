(function ($) {
"use strict";

   //* Navbar Fixed  
    function navbarFixed(){
        if ( $('.MainHeader').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll){
                    $(".MainHeader").addClass("navbar-fixed");
                } else {
                    $(".MainHeader").removeClass("navbar-fixed");
                }
            });
        };
    };
    navbarFixed();

 $(document).ready(function() {
            $('#nav-icon1').click(function() {
                $(this).toggleClass('open');
            });

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true
              });

            $('.textwidget').contents().unwrap();  
   });
     
})(jQuery);
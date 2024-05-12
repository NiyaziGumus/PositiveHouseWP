jQuery(function($) {
    function adjustNavbar() {
        var scrollPosition = $(window).scrollTop();
        var navbar = $('#mainNavbar');
        
        if (scrollPosition > 50) {
            navbar.addClass('navbar-mobile');
        } else {
            navbar.removeClass('navbar-mobile');
        }
    }

    $(window).scroll(adjustNavbar);
    adjustNavbar(); 
});

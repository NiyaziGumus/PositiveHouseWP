jQuery(function($) {
    console.log("jQuery is working!");

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

    $('.faq-card-header').on('click', function() {
        // Close all other panels
        $('.faq-panel-body').not($(this).next('.faq-panel-collapse').find('.faq-panel-body')).removeClass('show');
        $('.faq-iconfont').not($(this).find('.faq-iconfont')).removeClass('rotate');

        // Toggle current panel
        $(this).find('.faq-iconfont').toggleClass('rotate');
        $(this).next('.faq-panel-collapse').find('.faq-panel-body').toggleClass('show');
    });
});

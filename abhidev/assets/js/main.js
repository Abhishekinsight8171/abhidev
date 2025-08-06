jQuery(document).ready(function($) {
    // Mobile menu toggle
    $('.menu-toggle').on('click', function() {
        $('#primary-menu').toggleClass('active');
    });
    
    // Smooth scrolling for anchor links
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate(
            { scrollTop: $($(this).attr('href')).offset().top },
            500
        );
    });
});
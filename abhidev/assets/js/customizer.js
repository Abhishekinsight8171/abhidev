(function($) {
    wp.customize.bind('ready', function() {
        // Live preview for header style
        wp.customize('header_style', function(value) {
            value.bind(function(newval) {
                // Preview logic here
            });
        });
        
        // Live preview for colors
        wp.customize('primary_color', function(value) {
            value.bind(function(newval) {
                $('a').css('color', newval);
            });
        });
    });
})(jQuery);
window.$ = window.jQuery = require('jquery');
require('waypoints/lib/jquery.waypoints.js');

(function() {
    "use strict";
    $.getJSON('https://api.instagram.com/v1/users/1532025072/media/recent/?access_token=1532025072.d9be861.695ee38866a0488da03ffec00d998ee4&count=10&callback=?', function(response) {
        if (response.data) {
            $.each(response.data, function(key, val) {
                $('#instagram').append('<div class="feed"><a target="_blank" href="' + val.link + '"><img src="' + val.images.standard_resolution.url + '"></a></div>');
            });
        }
    });

    $('.fadeInLeft, .fadeInRight, .fadeInUp').css('opacity', 0).waypoint(function() {
        var $el = $(this.element);
        $el.addClass('animated');
    }, {
        offset: '100%'
    });

    /**
     * Track outbound links in Google Analytics
     * Adapted from: https://www.sitepoint.com/track-outbound-links-google-analytics/
     */
    $('a').on('click', function(e) {
        var link = $(this);

        // Link already aborted?
        if (e.isDefaultPrevented() || typeof ga !== "function") return;
        if (link.length != 1 || window.location.host == link[0].host) return;

        // Record outbound link
        e.preventDefault();
        var href = link[0].href;
        ga('send', 'event', 'outbound', 'link', href, {
            'hitCallback': loadPage
        });

        // Redirect after one millisecond
        setTimeout(loadPage, 100);

        // Redirect to outbound page
        function loadPage() {
            document.location = href;
        }

    });
})(jQuery);

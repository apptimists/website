window.$ = window.jQuery = require('jquery');

(function() {
    "use strict";

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

    /**
     * Pretty simple scroll indicator
     */
    $(window).scroll(function() {
        var d = $(document).height(), w = $(this).height(), s = Math.round( $(this).scrollTop() / ( d - w ) * 100 );

        $('#scroll-indicator').css({width: s + '%'});
    });

    /**
     * Replace base url for images from Markdown content
     */
    $('img').each(function() {
        var a = $(this).attr('src');
        $(this).attr('src', a.replace('#BASEURL', window.baseUrl));
    });

    /**
     * This is needed for all non-Safari browsers to show drop caps
     */
    $('#article .post-text p').first().addClass('first');
})(jQuery);

window.$ = window.jQuery = require('jquery')
require('waypoints/lib/jquery.waypoints.js')

$(document).ready(function() {
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
});

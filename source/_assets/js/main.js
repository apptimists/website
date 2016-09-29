window.$ = window.jQuery = require('jquery')
require('waypoints/lib/jquery.waypoints.js')

$(document).ready(function() {
    $('.fadeInLeft, .fadeInRight, .fadeInUp').css('opacity', 0).waypoint(function() {
        var $el = $(this.element);
        $el.addClass('animated');
    }, {
        offset: '100%'
    });
});

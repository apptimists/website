<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ie7lte ie8lte"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="ie7 ie7lte ie8lte"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8 ie8lte"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if !(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>{{ isset($page['title']) ? $page['title'] . ' @apptimists' : 'We are the apptimists' }}</title>

    <link rel="canonical" href="https://www.apptimists.com">
    <link rel="stylesheet" href="{{ $page->pageUrl('/css/main.css') }}">

    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:type" content="{{ isset($page['opengraph']) ? 'article' : 'website' }}" />
    <meta property="og:title" content="{{ isset($page['title']) ? $page['title'] . ' @apptimists' : 'We are the apptimists' }}" />
    <meta property="og:image" content="{{ $page->pageUrl(isset($page['opengraph']) ? $page['opengraph'] : '/img/opengraph.jpg') }}" />

    <script>
        // Google Analytics
        var gaProperty = '{{ $page->googleAnalytics }}';
        if (gaProperty) {
            (function(w, d, l, h, s) {
                if (d.cookie.indexOf(s + '=true') > -1) {
                    w[s] = true;
                }
                w.onhashchange = function() {
                    if (l.href.indexOf("#google_optout") > -1) {
                        d.cookie = s + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                        w[s] = true;
                        if (h.pushState) {
                            h.pushState(null, null, '#');
                        } else {
                            l.hash = '#';
                        }
                    }
                }
            })(window, document, location, history, 'ga-disable-' + gaProperty);
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', gaProperty, 'auto');
            ga('set', 'anonymizeIp', true);
            ga('send', 'pageview');
        }
    </script>
</head>

<body class="{{ isset($page['body_class']) ? $page['body_class'] : 'bg-grey' }}">
    <a name="top"></a>
    @yield('body')
    <footer class="bg-grey pt-0 pb-30 text-center">
        <div class="container">

            <hr class="mt-30 mb-30">

            <div class="row hidden-xs">
                <div class="col-md-4 text-left">
                    <ul class="list-inline">
                        <li><a href="{{ $page->pageUrl('/imprint') }}">Imprint</a></li>
                        <li><a href="{{ $page->pageUrl('/privacy') }}">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <p><span class="flag-icon flag-icon-de flag-icon-squared"></span> Made with <i class="fa fa-coffee"></i> in Germany.</p>
                </div>
                <div class="col-md-4 text-right">
                    <p><a href="#top" class="btn btn-xs btn-border-grey">To the top</a></p>
                </div>
            </div>
            <div class="row visible-xs">
                <div class="col-xs-12 text-center">
                    <ul class="list-inline">
                        <li><a href="{{ $page->pageUrl('/imprint') }}">Imprint</a></li>
                        <li><a href="{{ $page->pageUrl('/privacy') }}">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 text-center">
                    <p><span class="flag-icon flag-icon-de flag-icon-squared"></span> Made with <i class="fa fa-coffee"></i> in Germany.</p>
                </div>
                <div class="col-xs-12 text-center">
                    <p><a href="#top" class="btn btn-xs btn-border-grey">To the top</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
    window.baseUrl = '{{ $page->baseUrl }}';
    </script>
    <script type="text/javascript" src="{{ $page->pageUrl('/js/main.js') }}"></script>
</body>

</html>

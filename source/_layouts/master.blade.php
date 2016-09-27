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
    <title>{{ isset($title) ? $title : 'We are the apptimists' }}</title>

    <link rel="canonical" href="http://www.apptimists.com">
    <link rel="stylesheet" href="{{ $asset_prefix }}/css/main.css">
</head>

<body>
    <a name="top"></a>
    @yield('body')
    <footer class="bg-white pt-0 pb-30 text-center">
        <div class="container">

            <hr class="mt-30 mb-30">

            <div class="row">
                <div class="col-md-8 text-left">
                    <ul class="list-inline">
                        <li><a href="{{ $asset_prefix }}/imprint">Imprint</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                    <p><a href="#top" class="btn btn-xs btn-border-grey">To the top</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <p><span class="flag-icon flag-icon-de flag-icon-squared"></span> Made with <i class="fa fa-coffee"></i> in Germany.</p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ $asset_prefix }}/js/main.js"></script>
</body>

</html>

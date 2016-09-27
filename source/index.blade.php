@extends('_layouts.master') @section('body')
<div id="news" class="bg-grey pt-30 pb-30">
    <div class="container text-center">
        <p class="text-light mb-0">
            <span class="label mr-8">News</span>
            <span class="news-title">Lorem ipsum:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            <a href="{{ $asset_prefix }}/blog/lorem-ipsum">Read more <i class="fa fa-chevron-right"></i></a>
        </p>
    </div>
</div>

<section id="hero" class="bg-team">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-1 pt-100 pb-100">
                    <h1 class="mb-20">We are the <span class="text-highlight">apptimists</span>.</h1>
                    <p class="lead">A small team of makers, thinkers, explorers and the creators of <span class="text-bold">StauMobil</span>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <h1 class="mb-20">We <span class="text-highlight">build</span> mobile applications that make life easier.</h1>
                <p class="lead">Growing up in the mobile generation, we see a gap in location-aware applications.</p>
                <p>We set out to solve the problem of getting the <span class="text-bold">right information</span> at the <span class="text-bold">right time</span> at the <span class="text-bold">right location</span>.</p>
            </div>
        </div>
    </div>
</section>

<section id="staumobil" class="bg-dark pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-5">
                <h2 class="mb-20">Get rid of <span class="text-highlight">traffic</span> jams.</h2>
                <p class="lead">StauMobil is an easy-to-use application for iOS and Android showing traffic incidents around your area.</p>
                <p>We built StauMobil because we hate it been stuck in traffic without knowning whats happening in front of us. Is there an accident or just too much cars on the highway? Follow <span class="text-bold">7 million</span> others and download
                    traffic updates around you.</p>
                <a href="https://www.staumobilapp.com" class="btn btn-border-light">Visit staumobilapp.com</a>
            </div>
        </div>
    </div>
</section>

<section id="opensource" class="bg-love pt-50 pb-50 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="mb-20">We love <span class="text-highlight">open source</span> projects.</h2>
                <p class="lead">Open source projects are highly valuable because most often they are the starting point for business opportunities and incubating new ideas.</p>
                <p>Open source software means creativity, collaboration and communication and we enjoy contributing to existing open source projects as well as open-sourcing our own projects like this website.</p>
                <a href="https://github.com/apptimists/website" class="btn btn-border-light">Check the source code</a>
            </div>
        </div>
    </div>
</section>

<section id="social" class="bg-grey pt-50 pb-50 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="mb-20">Follow us <span class="text-highlight">@apptimists</span>.</h2>
                <p>Get the latest news right in your pocket</p>
                <ul class="list-inline">
                    <li><a href="https://twitter.com/apptimists"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/apptimists"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://github.com/apptimists"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://linkedin.com/apptimists"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="bg-white pt-30 pb-0 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-20">We would love to <span class="highlight">hear</span> from you.</h2>
            </div>
            <div class="col-sm-4 col-sm-offset-2 col-xs-12">
                <p><span class="fa fa-map-marker"></span><br> Starterzentrum 1<br> Universität des Saarlandes<br> 66123 Saarbrücken<br> Germany
                </p>
            </div>

            <div class="col-sm-4 col-xs-12">
                <p><span class="fa fa-phone"></span><br> +49 (0) 681 302 649 61
                </p>
                <p>
                    <span class="fa fa-envelope"></span><br>
                    <a href="mailto: hello@apptimists.com">Guten Tag!</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

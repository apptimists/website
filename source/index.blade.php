@extends('_layouts.master') @section('body')
@php $first = $posts->first() @endphp
<section id="news" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-50 pb-50 text-center">
                <h3 class="post-read">Read our latest article</h3>
                <p><a href="{{ $page->pageUrl($first->getPath()) }}" class="post-title">{{ $first->title }}</a></p>
                <p class="post-meta">by <img class="post-author" src="{{ $first->gravatar }}"/> {{ $first->author }} at {{ date('F j, Y', $first->date) }}</p>
            </div>
        </div>
    </div>
</section>
<section id="hero" class="bg-team">
    <div class="overlay pt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-200">
                    <h1 class="mb-20 pb-10 bb-white">We are the <span class="text-highlight">apptimists</span>.</h1>
                    <p>A small team of makers, <br class="visible-xs"/>thinkers, explorers <br class="hidden-xs"/>and the <br class="visible-xs"/>creators of <span class="text-bold">StauMobil</span>.</p>
                </div>
                <div class="col-md-12 pt-100 pb-20 text-center">
                  <a id="whatwedo-scroller" href="#whatwedo">What we do<br/><i class="fa fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="whatwedo" class="bg-light pt-80 pb-100 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 class="mb-20">We <span class="text-highlight">build</span> mobile applications<br/>that make life easier.</h1>
                <p>Growing up in the mobile generation, we see a gap in location-aware applications.</p>
                <p>We set out to solve the problem of <br class="visible-xs"/>getting the <span class="text-bold">right information</span><br/>at the <span class="text-bold">right location</span> at <br class="visible-xs"/>the <span class="text-bold">right time</span>.</p>
            </div>
          </div>
    </div>
</section>

<section id="staumobil" class="bg-dark pt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 mb-50">
                <h1 class="mb-20">Get rid of <span class="text-highlight">traffic</span> jams.</h1>
                <p>We built <span class="text-bold">StauMobil</span> because we hate it been stuck in traffic without knowning whats happening in front of us. Is there an accident or just too much cars on the highway?<br/>Follow <span class="text-bold">7 million</span> others and download
                    traffic updates around you.</p>
                <p class="mb-30">StauMobil is an easy-to-use application for iOS and Android showing traffic incidents around your area.</p>
                <a href="https://www.staumobil.com" class="btn btn-border-light">Visit staumobil.com</a>
            </div>
            <div class="col-md-4">
              <div class="img-holder">
                <img class="img-responsive" src="{{ $page->pageUrl('/img/staumobil.png') }}">
              </div>
            </div>
        </div>
    </div>
</section>

<section id="opensource" class="bg-white pt-70 pb-100 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="mb-20">We &lt;3 <span class="text-highlight">open source</span> projects.</h2>
                <p>Open source projects are highly valuable because <br class="visible-xs"/>most often they are <br class="hidden-xs"/>the starting point for<br class="visible-xs"/>business opportunities and <br class="hidden-xs"/>incubating new ideas.</p>
                <p class="mb-30">Open source software means creativity, collaboration and communication <br class="hidden-xs"/>and we enjoy contributing to existing open source projects <br class="hidden-xs"/>as well as open-sourcing <br class="visible-xs"/>our own projects, <br class="hidden-xs"/>like this website.</p>
                <a href="{{ $page->pageUrl('/opensource') }}" class="btn btn-border">Check out some projects</a>
            </div>
        </div>
    </div>
</section>

<section id="social" class="bg-orange pt-80 pb-100 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="mb-20">Follow us <span class="text-highlight">@apptimists</span>.</h2>
                <p>Get the latest news right in your pocket</p>
                <ul class="list-inline">
                    <li><a href="https://instagram.com/apptimists/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://github.com/apptimists/"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://linkedin.com/company/apptimists/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://xing.com/companies/apptimists/"><i class="fa fa-xing"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="bg-grey pt-60 pb-0 text-center">
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
                    <a href="mailto:hello@apptimists.com">Guten Tag!</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

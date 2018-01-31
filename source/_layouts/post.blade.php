@extends('_layouts.master') @section('body') @include('_layouts.navbar')
 <div id="article" class="bg-white pt-30 pb-30">
   <div class="container">
       <div class="row">
           <div class="col-md-10 col-md-offset-1">
             <div class="post-head text-center pt-80 pb-80">
               <p class="post-category mb-30">{{ $page->category }}</p>
               <h1 class="post-title mt-40 mb-40">{{ $page->title }}</h1>
               <p class="post-meta mt-30">by <img class="post-author" src="{{ $page->gravatar }}"/> {{ $page->author }} at {{ date('F j, Y', $page->date) }}</p>
             </div>
             <div class="post-content">
              <div class="post-text">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            @if ($page->getNext())
              <p>Read my next post:
                <a href="{{ $page->getNext()->path }}">{{ $page->getNext()->title }}</a>
              </p>
            @endif
          </div>
        </div>
      </div>
    </div>
@endsection

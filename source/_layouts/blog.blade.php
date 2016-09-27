@extends('_layouts.master') @section('body')
@include('_layouts.navbar')
<section id="blog" class="bg-white pt-50 pb-10">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="mb-50 text-center">{{ $title }}</h1> @yield('blog_content')
            </div>
        </div>
    </div>
</section>
@endsection

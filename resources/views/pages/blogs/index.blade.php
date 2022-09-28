@extends('layouts.app')

@section('title-meta')
    <title>Home | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{ route('index') }}" />
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <section class="page-title page-title-layout16 bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/12.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading mb-10">Our Blog</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="blog-grid">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                    <!-- Blog Item #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post-item__img">
                                <a href="{{ route('blogs.show',  $blog->slug) }}">
                                    <img src="{{ asset('assets/website') }}/images/blog/grid/1.jpg" alt="blog image">
                                </a>
                            </div><!-- /.blog-img -->
                            <div class="post-item__content">
                                <div class="post-item__meta d-flex flex-wrap">
                                    <div class="post-item__meta__cat">
                                        <a href="#">Consulting</a><a href="#">Sales</a>
                                    </div><!-- /.blog-meta-cat -->
                                    <span class="post-item__meta__date">{{date('M d, Y', strtotime($blog->publish_date))}}</span>
                                </div>
                                <h4 class="post-item__title"><a href="{{ route('blogs.show',  $blog->slug) }}">{{$blog->title}}</a>
                                </h4>
                                <p class="post-item__desc">
                                    {{$blog->summary}}
                                </p>
                                <a href="{{ route('blogs.show',  $blog->slug) }}" class="btn btn__secondary btn__link">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.blog-content -->
                        </div><!-- /.post-item -->
                    </div><!-- /.col-lg-4 -->
                @empty
                @endforelse
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">

                    {{ $blogs->links('vendor.pagination.default') }}

                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection

@section('custom-script')
@endsection

@extends('layouts.app')

@section('title-meta')
    <title>Home | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{ route('index') }}" />
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <!-- ========================
               page title
            =========================== -->
    <section class="page-title page-title-layout15 text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Five Ways to Develop a World Sales
                                Operations
                                Function</li>
                        </ol>
                    </nav>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
                Blog Single
              ========================= -->
    <section class="blog blog-single pt-0 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="post-item mb-0">
                        <div class="position-relative">
                            <div class="post-item__img">
                                <a href="#">
                                    <img src="{{ asset('assets/website') }}/images/blog/single/1.jpg" alt="blog image">
                                </a>
                            </div><!-- /.post-img -->
                            <div class="post-item__meta d-inline-flex align-items-center mb-0">
                                <span class="post-item__meta__date">Jan 20, 2020</span>
                                <div class="post-item__meta__cat">
                                    <a href="#">Consulting</a><a href="#">Sales</a>
                                </div><!-- /.blog-meta-cat -->
                                <span class="post-item__meta__author">By: <a href="#">Mike Dooley</a></span>
                            </div><!-- /.blog-meta -->
                        </div>
                        <h1 class="post-item__title mt-50 mb-40">
                            Five Ways to Develop a World Sales Operations Function
                        </h1>
                        <div class="post-item__desc">
                            <p>The key to the success of any logistics contract is good logistics management. The key to
                                good
                                management is the ability to identify the needs of the client and the countries in which the
                                work
                                will take place, as well as being in a position to advise the best way forward. In today’s
                                international and remote locations, experience and understanding of logistics operations and
                                local
                                networks is vital. With the many years of experience in our team, we have a detailed
                                understanding
                                of the criticality or every aspect of the logistics world.</p>
                            <p> Focus can provide logistics personnel to meet the needs of your company or portfolio. From
                                logistics
                                managers to warehousemen, logistics controllers to transport coordinators, we can assist
                                you. We
                                provide personnel for one-off portfolio as well as long or short-term agency personnel,
                                assist in
                                the
                                recruitment of permanent staff, or we can manage your logistics department for you.</p>
                            <p>When travelling to a foreign country, most people are nervous of the obstacles that will be
                                there
                                for them to overcome. When a full marine crew travels en-mass to a vessel mobilisation, it
                                is
                                imperative that they arrive on time and safely, especially in a remote location.</p>
                            <p>Focus provides meet-and-greet facilities through our network of specialist companies. From
                                hotel
                                reservations and taxi arrangements to a full pick-up facility, with or without armed guards,
                                this
                                can be arranged.</p>
                            <p>Ever had a last minute requirement for items to be in a country where you do not have a visa
                                to
                                enter? Are you frustrated at having to hand-carry important documents to your client, which
                                takes
                                you out of the office for days? Let Focus help you. Our personnel are available
                                24-hours-a-day for
                                these important deliveries. This leaves you free to concentrate on your business.</p>
                        </div><!-- /.blog-desc -->
                    </div><!-- /.post-item -->
                    <div class="blog-share d-flex flex-wrap justify-content-between mb-30 mt-20">
                        <a href="#" class="btn btn__secondary btn__xl d-flex align-items-center">
                            <i class="fab fa-facebook-f mr-20"></i><span>Share on Facebook</span>
                        </a>
                        <a href="#" class="btn btn__secondary btn__xl d-flex align-items-center">
                            <i class="fab fa-twitter mr-20"></i><span>Share on Twitter</span>
                        </a>
                        <a href="#" class="btn btn__secondary btn__xl d-flex align-items-center">
                            <i class="fab fa-google mr-20"></i><span>Share on Google</span>
                        </a>
                    </div><!-- /.blog-share -->
                    <div class="blog-tags d-flex flex-wrap">
                        <strong class="mr-20 color-heading">Tags:</strong>
                        <ul class="list-unstyled d-flex flex-wrap mb-40">
                            <li><a href="#">Tiling</a></li>
                            <li><a href="#">Painting</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Renovations</a></li>
                        </ul>
                    </div><!-- /.blog-tags -->
                    <div class="blog-widget blog-nav mb-0">
                        <div class="blog__prev">
                            <a href="#">
                                <div class="blog-nav__img">
                                    <img src="{{ asset('assets/website') }}/images/blog/grid/4.jpg" alt="blog thumb">
                                </div>
                                <div class="blog-nav__content">
                                    <span>Previous Post</span>
                                    <h4>Succession Risks Threaten Leadership Strategy</h4>
                                </div>
                            </a>
                        </div><!-- /.blog-prev  -->
                        <div class="blog__next">
                            <a href="#">
                                <div class="blog-nav__content">
                                    <span>Next Post</span>
                                    <h4>Employee Engagement Surveys Tell About Employee?</h4>
                                </div>
                                <div class="blog-nav__img">
                                    <img src="{{ asset('assets/website') }}/images/blog/grid/6.jpg" alt="blog thumb">
                                </div>
                            </a>
                        </div><!-- /.blog-next  -->
                    </div><!-- /.blog-nav  -->
                    <div class="blog-widget">
                        <div class="blog-author">
                            <div class="blog-author__avatar">
                                <img src="{{ asset('assets/website') }}/images/blog/author/1.jpg" alt="avatar">
                            </div><!-- /.author-avatar  -->
                            <div class="blog-author__content">
                                <h6 class="blog-author__name">Mahmoud Baghagho</h6>
                                <p class="blog-author__bio">Founded by Begha over many cups of tea at her kitchen table in
                                    2009, our
                                    brand promise is simple: to
                                    provide powerful digital marketing solutions to small and medium businesses.</p>
                                <ul class="social-icons list-unstyled mb-0">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a> </li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a> </li>
                                </ul>
                            </div><!-- /.author-content  -->
                        </div><!-- /.blog-widget  -->
                    </div><!-- /.blog-author  -->
                    <div class="blog-comments">
                        <h5 class="blog-widget__title">2 comments</h5>
                        <ul class="comments-list list-unstyled">
                            <li class="comment__item">
                                <div class="comment__avatar">
                                    <img src="{{ asset('assets/website') }}/images/blog/author/2.jpg" alt="avatar">
                                </div>
                                <div class="comment__content">
                                    <h5 class="comment__author">Richard Muldoone</h5>
                                    <span class="comment__date">Feb 28, 2017 - 08:07 pm</span>
                                    <p class="comment__desc">The example about the mattress sizing page you mentioned in the
                                        last WBF
                                        can be a perfect example
                                        of new keywords and content, and broadening the funnel as well. I can only imagine
                                        the sale
                                        numbers if that was the site of a mattress selling company.</p>
                                    <a class="comment__reply" href="#">reply</a>
                                </div>
                                <ul class="nested__comment list-unstyled">
                                    <li class="comment__item">
                                        <div class="comment__avatar">
                                            <img src="{{ asset('assets/website') }}/images/blog/author/3.jpg"
                                                alt="avatar">
                                        </div>
                                        <div class="comment__content">
                                            <h5 class="comment__author">Mike Dooley</h5>
                                            <span class="comment__date">Feb 28, 2017 - 08:22 pm</span>
                                            <p class="comment__desc">The example about the mattress sizing page you
                                                mentioned in the last
                                                WBF can be a perfect
                                                example of new keywords and content, and broadening the funnel as well. I
                                                can only imagine the
                                                sale numbers if that was the site of a mattress selling company.</p>
                                            <a class="comment__reply" href="#">reply</a>
                                        </div>
                                    </li><!-- /.comment -->
                                </ul><!-- /.nested-comment -->
                            </li><!-- /.comment -->
                        </ul><!-- /.comments-list -->
                    </div><!-- /.blog-comments -->
                    <div class="blog-widget blog-comments-form mb-30">
                        <h5 class="blog-widget__title">Leave A Reply</h5>
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name:">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email:">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website:">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-lg-12 -->
                                <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                                    <button type="submit"
                                        class="btn btn__primary btn__icon justify-content-between btn__xxl">
                                        <span>Submit Comment</span><i class="icon-arrow-right"></i>
                                    </button>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.blog-comments-form -->
                </div><!-- /.col-lg-8 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar">
                        <div class="widget widget-search">
                            <h5 class="widget__title">Search</h5>
                            <div class="widget__content">
                                <form class="widget__form-search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                                </form>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-search -->
                        <div class="widget widget-posts">
                            <h5 class="widget__title">Recent Posts</h5>
                            <div class="widget__content">
                                <!-- post item #1 -->
                                <div class="widget-post-item d-flex align-items-center">
                                    <div class="widget-post__img">
                                        <a href="#"><img src="{{ asset('assets/website') }}/images/blog/grid/2.jpg"
                                                alt="thumb"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget-post__content">
                                        <span class="widget-post__date">Sep 19, 2020</span>
                                        <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten
                                                Your Leadership</a>
                                        </h4>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                                <!-- post item #2 -->
                                <div class="widget-post-item d-flex align-items-center">
                                    <div class="widget-post__img">
                                        <a href="#"><img src="{{ asset('assets/website') }}/images/blog/grid/3.jpg"
                                                alt="thumb"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget-post__content">
                                        <span class="widget-post__date">July 7, 2020</span>
                                        <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About
                                                Employee?</a>
                                        </h4>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                                <!-- post item #3 -->
                                <div class="widget-post-item d-flex align-items-center">
                                    <div class="widget-post__img">
                                        <a href="#"><img src="{{ asset('assets/website') }}/images/blog/grid/6.jpg"
                                                alt="thumb"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget-post__content">
                                        <span class="widget-post__date">March 13, 2020</span>
                                        <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten
                                                Your Leadership</a>
                                        </h4>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-posts -->
                        <div class="widget widget-categories">
                            <h5 class="widget__title">Services</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('services.show') }}"><span>IT Management</span><span
                                                class="cat-count">9</span></a>
                                    </li>
                                    <li><a href="{{ route('services.show') }}"><span>Cyber Security</span><span
                                                class="cat-count">2</span></a>
                                    </li>
                                    <li><a href="{{ route('services.show') }}"><span>Cloud Computing</span><span
                                                class="cat-count">5</span></a>
                                    </li>
                                    <li><a href="{{ route('services.show') }}"><span>IT Consulting</span><span
                                                class="cat-count">1</span></a>
                                    </li>
                                    <li><a href="{{ route('services.show') }}"><span>Software Dev</span><span
                                                class="cat-count">7</span></a>
                                    </li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-categories -->
                        <div class="widget widget-tags">
                            <h5 class="widget__title">Tags</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('blogs.show') }}">Insights</a></li>
                                    <li><a href="{{ route('blogs.show') }}">Industry</a></li>
                                    <li><a href="{{ route('blogs.show') }}">Modern</a></li>
                                    <li><a href="{{ route('blogs.show') }}">Corporate</a></li>
                                    <li><a href="{{ route('blogs.show') }}">Business</a></li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-tags -->
                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Single -->
@endsection

@section('custom-script')
@endsection

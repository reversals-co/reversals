@extends('layouts.app')

@section('title-meta')
    <title>Home | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{ route('index') }}" />
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <section class="page-title page-title-layout6 bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <span class="pagetitle__subheading">1900 Resourses & 870 Satisfied Users Over The Globe!</span>
                    <h1 class="pagetitle__heading">Frequently Asked Questions </h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('about-us') }}">Company</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faqs</li>
                        </ol>
                    </nav>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
                Secondary Nav
              =========================== -->
    <section class="secondary-nav sticky-top py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="nav nav-tabs justify-content-center">
                        <a href="{{ route('about-us') }}" class="nav__link">About Us</a>
                        <a href="why-us.html" class="nav__link">Why Choose Us</a>
                        <a href="leadership-team.html" class="nav__link">Leadership Team</a>
                        <a href="awards.html" class="nav__link">Awards & Recognition</a>
                        <a href="pricing.html" class="nav__link">Pricing & Plans</a>
                        <a href="faqs.html" class="nav__link active">Help & FAQs</a>
                        <a href="careers.html" class="nav__link">Careers</a>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ======================
                 FAQ
              ========================= -->
    <section class="faq pt-130 pb-100">
        <div class="container">
            <div class="row" id="accordion">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse1">
                            <a class="accordion-item__title" href="#">Which Plan Is Right For Me?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse1" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                            <a class="accordion-item__title" href="#">Do I have to commit to a contract?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse2" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item opened">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                            <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse3" class="collapse show" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse4">
                            <a class="accordion-item__title" href="#">What if I pick the wrong plan?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse4" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse5">
                            <a class="accordion-item__title" href="#">Any contracts or commitments?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse5" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse6">
                            <a class="accordion-item__title" href="#">What are my payment options?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse6" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse7">
                            <a class="accordion-item__title" href="#">How does the free trial work?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse7" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse8">
                            <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse8" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse9">
                            <a class="accordion-item__title" href="#">How does the free trial work?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse9" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item opened">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse10">
                            <a class="accordion-item__title" href="#">If I have questions, where can I find answers?
                            </a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse10" class="collapse show" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.FAQ -->

    <!-- ======================
              Features Layout 2
              ========================= -->
    <section class="features-layout2 pt-130 pb-0 mb-130">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/7.jpg" alt="background"></div>
        <div class="container">
            <div class="row heading heading-layout2 mb-50">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="heading__subtitle">Ensure High Availability of Your Services</h2>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="heading__title color-white">Easy solutions for all difficult IT problems, keep business safe
                        &
                        ensure high availability.</h3>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row features-wrapper mt-40">
                <!-- Feature item #1-->
                <div class="col-sm-6 col-md-6 col-lg-3 feature-item">
                    <div class="feature-item__icon">
                        <i class="icon-statistic"></i>
                    </div>
                    <h4 class="feature-item__title mb-0">Software Asset Management</h4>
                </div><!-- /.feature-item -->
                <!-- Feature item #2-->
                <div class="col-sm-6 col-md-6 col-lg-3 feature-item">
                    <div class="feature-item__icon">
                        <i class="icon-management"></i>
                    </div>
                    <h4 class="feature-item__title mb-0">Privileged Access Management</h4>
                </div><!-- /.feature-item -->
                <!-- Feature item #3-->
                <div class="col-sm-6 col-md-6 col-lg-3 feature-item">
                    <div class="feature-item__icon">
                        <i class="icon-software"></i>
                    </div>
                    <h4 class="feature-item__title mb-0">Software License Management</h4>
                </div><!-- /.feature-item -->
                <!-- Feature item #4-->
                <div class="col-sm-6 col-md-6 col-lg-3 feature-item">
                    <div class="feature-item__icon">
                        <i class="icon-relational"></i>
                    </div>
                    <h4 class="feature-item__title mb-0">Enterprise Service Management</h4>
                </div><!-- /.feature-item -->
                <!-- Feature item #5-->
                <div class="col-sm-6 col-md-6 col-lg-3 feature-item">
                    <div class="feature-item__icon">
                        <i class="icon-website"></i>
                    </div>
                    <h4 class="feature-item__title mb-0">Knowledge Base & Live Chat</h4>
                </div><!-- /.feature-item -->
                <!-- Feature item #6-->
                <div class="col-sm-6 col-md-6 col-lg-3 feature-item">
                    <div class="feature-item__icon">
                        <i class="icon-Primary"></i>
                    </div>
                    <h4 class="feature-item__title mb-0">Custom Request Templates</h4>
                </div><!-- /.feature-item -->
                <div class="col-sm-12 col-md-12 col-lg-6 cta-banner-wrapper px-0">
                    <div class="cta-banner bg-overlay bg-overlay-primary mb-0">
                        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/4.jpg"
                                alt="background"></div>
                        <h4 class="cta-banner__title">Perfect Solutions That Your Business Demands!</h4>
                        <p class="cta-banner__desc">From network and device management to security, we're bringing IT
                            together
                            for
                            an integrated, overarching approach.</p>
                        <div class="d-flex flex-wrap">
                            <a href="#" class="btn btn__secondary btn__secondary-style2 btn__xl mr-20">Request A
                                Demo</a>
                            <a href="#" class="btn btn__white btn__bordered btn__xl btn__icon">
                                <span>Get Started</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.cta-banner -->
                </div><!-- /.col-lg-6-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->

    <!-- =========================
                Awards
                =========================== -->
    <section class="awards pt-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-50">Our awards and recognitions</h3>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row awards-wrapper">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #1 -->
                    <div class="fancybox-item">
                        <div class="fancybox-item__icon__img">
                            <img src="{{ asset('assets/website') }}/images/awards/icons/1.png" alt="icon">
                        </div><!-- /.fancybox-item__icon__img -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">CSS Design Award</h4>
                            <p class="fancybox-item__desc">A web design & development award platform for digital folk,
                                UI/UX peeps
                                and inspiring leaders of the web.
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #2 -->
                    <div class="fancybox-item">
                        <span class="pinned-ribbon"></span>
                        <div class="fancybox-item__icon__img">
                            <img src="{{ asset('assets/website') }}/images/awards/icons/2.png" alt="icon">
                        </div><!-- /.fancybox-item__icon__img -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">W3 Design Award</h4>
                            <p class="fancybox-item__desc">Awards celebrates digital by honoring outstanding Websites, Web
                                Marketing, Video, Sites, Apps & Social content.
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #3 -->
                    <div class="fancybox-item">
                        <div class="fancybox-item__icon__img">
                            <img src="{{ asset('assets/website') }}/images/awards/icons/3.png" alt="icon">
                        </div><!-- /.fancybox-item__icon__img -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">The FWA Award</h4>
                            <p class="fancybox-item__desc">Showcasing innovation every day since 2000, our mission is to
                                showcase
                                cutting edge creativity, regardless
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- fancybox item #4 -->
                    <div class="fancybox-item">
                        <div class="fancybox-item__icon__img">
                            <img src="{{ asset('assets/website') }}/images/awards/icons/4.png" alt="icon">
                        </div><!-- /.fancybox-item__icon__img -->
                        <div class="fancybox-item__content">
                            <h4 class="fancybox-item__title">WWW Awards</h4>
                            <p class="fancybox-item__desc">The awards that recognize the talent and effort of the best web
                                designers, developers and agencies in the world.
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <p class="fz-16 my-4">Trusted by the world's best organizations, for 15 years and running, it has been
                        delivering
                        smiles to hundreds of IT advisors, developers, users, and business owners.
                    </p>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7 d-flex justify-content-end">
                    <a href="#" class="btn btn__primary btn__link">
                        <span>Explore All Awards</span><i class="icon-arrow-right icon-outlined"></i>
                    </a>
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Awards -->
@endsection

@section('custom-script')
@endsection

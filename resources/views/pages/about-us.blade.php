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
    <section class="page-title page-title-layout1 bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 class="pagetitle__heading">About Us</h1>
                    <p class="pagetitle__desc">We are experienced professionals who understand that It services is changing,
                        and
                        are true partners who care about your success. Our team provides a consultative approach on emerging
                        technology.
                    </p>
                    <a href="projects-grid.html" class="btn btn__primary mr-30">Our Services</a>
                    <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                        <div class="video__player">
                            <span class="video__player-animation"></span>
                            <span class="video__player-animation video__player-animation-2"></span>
                            <i class="fa fa-play"></i>
                        </div>
                        <span class="video__btn-title color-white">Play Video!</span>
                    </a>
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
                        <a href="{{ route('about-us') }}" class="nav__link active">About Us</a>
                        <a href="why-us.html" class="nav__link">Why Choose Us</a>
                        <a href="leadership-team.html" class="nav__link">Leadership Team</a>
                        <a href="awards.html" class="nav__link">Awards & Recognition</a>
                        <a href="pricing.html" class="nav__link">Pricing & Plans</a>
                        <a href="faqs.html" class="nav__link">Help & FAQs</a>
                        <a href="careers.html" class="nav__link">Careers</a>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ========================
                About Layout 1
              =========================== -->
    <section class="about-layout1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2 mb-30">
                        <h2 class="heading__subtitle">Trusted By The World's Best Organizations</h2>
                        <h3 class="heading__title mb-30">Our technology allows you to offer latest software to your possible
                            customers!
                        </h3>
                        <p class="heading__desc mb-25">Mintech has been helping organizations throughout the World to manage
                            their
                            IT with our unique approach to technology management and consultancy solutions. As one of the
                            world's
                            largest ITService Providers, our deep pool of over 130 certified engineers and IT support staff
                            are
                            ready to help.</p>
                    </div><!-- /heading -->
                    <a href="{{ route('about-us') }}" class="btn btn__primary btn__xl btn__icon mb-30">
                        <span>More About Us</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <img src="{{ asset('assets/website') }}/images/about/singnture.png" alt="singnture" class="d-block">
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about__img">
                        <img src="{{ asset('assets/website') }}/images/about/1.jpg" alt="about">
                        <div class="cta-banner">
                            <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                                <div class="cta-banner__item">
                                    <div class="cta-banner__icon"><i class="icon-technician"></i></div>
                                    <h4 class="cta-banner__title mb-0">Utilising latest timelineing solutions, and decades
                                        of work
                                        experience.
                                    </h4>
                                </div><!-- /.cta-banner__item -->
                                <div class="cta-banner__item">
                                    <div class="cta-banner__icon"><i class="icon-funnel"></i></div>
                                    <h4 class="cta-banner__title mb-0">Thinking insights, verified driven research, metrics
                                        make right
                                        decisions!
                                    </h4>
                                </div><!-- /.cta-banner__item -->
                            </div><!-- /.slick-carousel -->
                        </div><!-- /.cta-banner -->
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <!-- ======================
              History Timeline
              ========================= -->
    <section class="history-timeline pb-0">
        <div class="history-timeline-bg">
            <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/7.jpg" alt="background"></div>
        </div>
        <div class="container">
            <div class="row heading heading-layout2 mb-90">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="heading__subtitle">Explore Our Great History!!</h2>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="heading__title color-white">One of the world's largest IT Providers since 2005.</h3>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="timeline-bar"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="timeline-carousel-wrapper">
                        <div class="slick-carousel carousel-arrows-light"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 2}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                            <!-- timeline Item #1 -->
                            <div class="timeline-item">
                                <h4 class="timeline-item__year">2005</h4>
                                <p class="timeline-item__desc">We partner with you to enable your technology so you focus on
                                    your
                                    organization’s mission leverage our talent, and creativity to help your business succeed
                                    above all.
                                </p>
                            </div><!-- /.timeline-item -->
                            <!-- timeline Item #2 -->
                            <div class="timeline-item">
                                <h4 class="timeline-item__year">2010</h4>
                                <p class="timeline-item__desc">Our support works around the clock to ensure your work is
                                    secure and
                                    monitored safely. You access to over 99 IT professionals working to provide you with the
                                    most
                                    efficient
                                    solutions.</p>
                                <p class="timeline-item__desc">To focus on your mission leverage our talent, and creativity
                                    to succeed
                                    above all.</p>
                            </div><!-- /.timeline-item -->
                            <!-- timeline Item #3 -->
                            <div class="timeline-item">
                                <h4 class="timeline-item__year">2015</h4>
                                <p class="timeline-item__desc">Our people are held to the highest level accountability to
                                    ensure you
                                    are
                                    always satisfied with your results. We believe that honesty, integrity, and a commitment
                                    to ethical
                                    business practices.</p>
                                <p class="timeline-item__desc">We cross industries and provide services to almost every
                                    business
                                    either
                                    as
                                    a co-managed or supplemental asset.</p>
                            </div><!-- /.timeline-item -->
                            <!-- timeline Item #4 -->
                            <div class="timeline-item">
                                <h4 class="timeline-item__year">2017</h4>
                                <p class="timeline-item__desc">Our people are held to the highest level accountability to
                                    ensure you
                                    are
                                    always satisfied with your results. We believe that honesty, integrity, and a commitment
                                    to ethical
                                    business practices.</p>
                                <p class="timeline-item__desc">We cross industries and provide services to almost every
                                    business
                                    either
                                    as
                                    a co-managed or supplemental asset.</p>
                            </div><!-- /.timeline-item -->
                            <!-- timeline Item #4 -->
                            <div class="timeline-item">
                                <h4 class="timeline-item__year">2020</h4>
                                <p class="timeline-item__desc">Whether providing consulting expertise on a specific vendor
                                    technology,
                                    strategizing on IT budget, providing a security assessment, or managing IT
                                    infrastructure, we can
                                    provide it all.</p>
                                <p class="timeline-item__desc">Our people are held to the highest level accountability to
                                    ensure you
                                    are
                                    always satisfied with your results. We believe that honesty, integrity, and a commitment
                                    to ethical
                                    business practices.</p>
                            </div><!-- /.timeline-item -->
                        </div><!-- /.carousel -->
                    </div>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="download-area">
                        <p class="download-area__text">Provide users with appropriate view and access permissions to
                            requests,
                            problems, changes, contracts, assets, solutions, and reports with our experienced professionals.
                        </p>
                        <a href="#" class="btn btn__white btn__bordered btn__xl btn__icon mb-30">
                            <span>Download Brochure</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="cta-banner bg-overlay bg-overlay-primary">
                        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/4.jpg"
                                alt="background"></div>
                        <h4 class="cta-banner__title">Perfect Solutions That Your Business Demands!</h4>
                        <p class="cta-banner__desc">From network and device management to security, we're bringing IT
                            together for
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
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.History Timeline -->

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

    <!-- =========================
                Testimonials layout 1
                =========================  -->
    <section class="testimonials testimonials-layout1 testimonials-has-top-img text-center">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/4.jpg" alt="backgrounds"></div>
        <img src="{{ asset('assets/website') }}/images/testimonials/testimonials-group.png" alt="testimonials"
            class="testimonials-top-img">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="heading">
                        <h3 class="heading__title mb-0">1500 Satisfied Users Over The Globe</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="testimonials-wrapper">
                        <div class="slider-with-navs">
                            <!-- Testimonial #1 -->
                            <div class="testimonial-item">
                                <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance
                                    to make an
                                    impact, you’ve come to the right place. We will transform your business through our
                                    techniques!
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">John Peter</h4>
                                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div><!-- /. testimonial-item -->
                            <!-- Testimonial #2 -->
                            <div class="testimonial-item">
                                <p class="testimonial-item__desc">My project was a simple & small task, but the persistence
                                    and
                                    determination turned it into an awesome and great project which make me happy.
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">Ahmed Abdallah</h4>
                                    <p class="testimonial-item__meta__desc">Web Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div><!-- /. testimonial-item -->
                            <!-- Testimonial #3 -->
                            <div class="testimonial-item">
                                <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance
                                    to make an
                                    impact, you’ve come to the right place. We will transform your business through our
                                    techniques!
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">Ayman</h4>
                                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div><!-- /. testimonial-item -->
                            <!-- Testimonial #2 -->
                            <div class="testimonial-item">
                                <p class="testimonial-item__desc">My project was a simple & small task, but the persistence
                                    and
                                    determination turned it into an awesome and great project which make me happy.
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">John Peter</h4>
                                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div><!-- /. testimonial-item -->
                            <!-- Testimonial #3 -->
                            <div class="testimonial-item">
                                <p class="testimonial-item__desc">My project was a simple & small task, but the persistence
                                    and
                                    determination turned it into an awesome and great project which make me happy .
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">John Peter</h4>
                                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div><!-- /. testimonial-item -->
                        </div>
                        <div class="slider-nav">
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/1.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/2.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/3.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/2.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/3.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                        </div><!-- /.slcik-nav -->
                    </div>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonials 1 -->

    <!-- =====================
                     Clients
              ======================== -->
    <section class="clients border-top pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        <div class="client">
                            <img src="{{ asset('assets/website') }}/images/clients/1.png" alt="client">
                            <img src="{{ asset('assets/website') }}/images/clients/1.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{ asset('assets/website') }}/images/clients/2.png" alt="client">
                            <img src="{{ asset('assets/website') }}/images/clients/2.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{ asset('assets/website') }}/images/clients/3.png" alt="client">
                            <img src="{{ asset('assets/website') }}/images/clients/3.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{ asset('assets/website') }}/images/clients/4.png" alt="client">
                            <img src="{{ asset('assets/website') }}/images/clients/4.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{ asset('assets/website') }}/images/clients/5.png" alt="client">
                            <img src="{{ asset('assets/website') }}/images/clients/5.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{ asset('assets/website') }}/images/clients/6.png" alt="client">
                            <img src="{{ asset('assets/website') }}/images/clients/6.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{ asset('assets/website') }}/images/clients/7.png" alt="client">
                            <img src="{{ asset('assets/website') }}/images/clients/7.png" alt="client">
                        </div><!-- /.client -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- =========================
                 Banner layout 2
                =========================== -->
    <section class="banner-layout2 pt-0 pb-100">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/8.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <div class="banner-text">
                        <div class="heading-layout2 heading-light mb-40">
                            <h3 class="heading__title mb-30">Timely service delivery & incident resolutions!!</h3>
                            <p class="heading__desc">Provide users with appropriate view and access permissions to
                                requests,
                                problems, changes, contracts, assets, solutions, and reports with our experienced
                                professionals.
                            </p>
                        </div><!-- /.heading -->
                        <a href="pricing.html" class="btn btn__white btn__bordered btn__hi mb-30">Pricing & Plans</a>
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="banner-img">
                        <img src="{{ asset('assets/website') }}/images/banners/5.jpg" alt="banner">
                        <a class="video__btn video__btn-white popup-video"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <span class="video__player-animation"></span>
                                <span class="video__player-animation video__player-animation-2"></span>
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
            <div class="row counters-wrapper counters-light mt-70">
                <!-- counter item #1 -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <h4 class="counter">6,154</h4>
                        <p class="counter-item__desc">Projects And Software Developed in 2021</p>
                    </div><!-- /.counter-item -->
                </div><!-- /.col-lg-3 -->
                <!-- counter item #2 -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <h4 class="counter">2,512</h4>
                        <p class="counter-item__desc">Qualified Employees And Developers With Us</p>
                    </div><!-- /.counter-item -->
                </div><!-- /.col-lg-3 -->
                <!-- counter item #3 -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <h4 class="counter">1,784</h4>
                        <p class="counter-item__desc">Satisfied Clients We Have Served Globally</p>
                    </div><!-- /.counter-item -->
                </div><!-- /.col-lg-3 -->
                <!-- counter item #4 -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <h4 class="counter">0,25</h4>
                        <p class="counter-item__desc">Years Of Experience In The IT & Software Industry</p>
                    </div><!-- /.counter-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->

    <!-- ======================
                Blog Grid
              ========================= -->
    <section class="blog-grid pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h2 class="heading__subtitle">Recent Articles</h2>
                        <h3 class="heading__title">Resource Library</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- Blog Item #1 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="post-item">
                        <div class="post-item__img">
                            <a href="{{ route('blogs.show') }}">
                                <img src="{{ asset('assets/website') }}/images/blog/grid/1.jpg" alt="blog image">
                            </a>
                        </div><!-- /.blog-img -->
                        <div class="post-item__content">
                            <div class="post-item__meta d-flex flex-wrap">
                                <div class="post-item__meta__cat">
                                    <a href="#">Consulting</a><a href="#">Sales</a>
                                </div><!-- /.blog-meta-cat -->
                                <span class="post-item__meta__date">May 13, 2020</span>
                            </div>
                            <h4 class="post-item__title"><a href="#">Five Ways to Develop a World Class Sales
                                    Operations
                                    Function</a>
                            </h4>
                            <p class="post-item__desc">Outsourcing IT infrastructure is a concept that has been around for
                                a while.
                                Characterized in terms of technicians and engineers, workstations and servers, the idea of
                                outsourcing
                                your basic IT needs...
                            </p>
                            <a href="{{ route('blogs.show') }}" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.blog-content -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #2 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="post-item">
                        <div class="post-item__img">
                            <a href="{{ route('blogs.show') }}">
                                <img src="{{ asset('assets/website') }}/images/blog/grid/2.jpg" alt="blog image">
                            </a>
                        </div><!-- /.blog-img -->
                        <div class="post-item__content">
                            <div class="post-item__meta d-flex flex-wrap">
                                <div class="post-item__meta__cat">
                                    <a href="#">Tech</a><a href="#">Communications</a>
                                </div><!-- /.blog-meta-cat -->
                                <span class="post-item__meta__date">April 17, 2020</span>
                            </div>
                            <h4 class="post-item__title"><a href="#">Succession Risks That Threaten Your Leadership
                                    Strategy</a>
                            </h4>
                            <p class="post-item__desc">Today’s organizations need a quality bench of leaders to drive
                                business
                                outcomes and satisfy employees, customers and investors who now demand more transparency and
                                accountability...
                            </p>
                            <a href="{{ route('blogs.show') }}" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.blog-content -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #3 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="post-item">
                        <div class="post-item__img">
                            <a href="{{ route('blogs.show') }}">
                                <img src="{{ asset('assets/website') }}/images/blog/grid/3.jpg" alt="blog image">
                            </a>
                        </div><!-- /.blog-img -->
                        <div class="post-item__content">
                            <div class="post-item__meta d-flex flex-wrap">
                                <div class="post-item__meta__cat">
                                    <a href="#">Digital Business</a><a href="#">Cloud</a>
                                </div><!-- /.blog-meta-cat -->
                                <span class="post-item__meta__date">March 20, 2020</span>
                            </div>
                            <h4 class="post-item__title"><a href="#">What Do Employee Engagement Surveys Tell You
                                    About
                                    Employee?</a>
                            </h4>
                            <p class="post-item__desc">Outsourcing IT infrastructure is a concept that has been around for
                                a while.
                                Characterized in terms of technicians and engineers, workstations and servers, the idea of
                                outsourcing
                                your basic IT needs...
                            </p>
                            <a href="{{ route('blogs.show') }}" class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.blog-content -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection

@section('custom-script')
@endsection

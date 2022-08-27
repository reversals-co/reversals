@extends('layouts.app')

@section('title-meta')
    <title>Home | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{ route('index') }}" />
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/sliders/5.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide-item__content">
                                <h2 class="slide-item__title">Easy Solutions <br> For IT problems!</h2>
                                <p class="slide-item__desc">We are experienced professionals who understand that It services
                                    is
                                    changing, and are true partners who care about your success. Our team provides a
                                    consultative
                                    approach on emerging technology.
                                </p>
                                <a href="{{ route('services.index') }}" class="btn btn__primary btn__hi mr-30">Our
                                    Services</a>
                                <a href="request-quote.html" class="btn btn__white btn__hi">
                                    <span>Get Started</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/sliders/6.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide-item__content">
                                <h2 class="slide-item__title">Timely Service <br> And Resolutions</h2>
                                <p class="slide-item__desc">We are experienced professionals who understand that It services
                                    is
                                    changing, and are true partners who care about your success.</p>
                                <a href="{{ route('services.index') }}" class="btn btn__primary btn__hi mr-30">Our
                                    Services</a>
                                <a href="request-quote.html" class="btn btn__white btn__hi">
                                    <span>Get Started</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

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

    <!-- ========================
                Services Layout 2
            =========================== -->
    <section class="services-layout2 services-carousel bg-gray pt-130 pb-90">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/7.png" alt="background"></div>
        <div class="container">
            <div class="row services-wrapper">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="service-item service-item-custom bg-overlay bg-overlay-primary">
                        <div class="bg-img">
                            <img src="{{ asset('assets/website') }}/images/services/6.jpg" alt="background">
                        </div>
                        <div>
                            <h4 class="service-item__title">Help Your Business Win!</h4>
                            <p class="service-item__desc">Mintech is a trusted advisor and an objective resource for more
                                than 17000
                                organizations in 90+ countries.</p>
                        </div>
                        <a href="services-it-solutions-single.html" class="btn btn__white btn__bordered btn__icon btn__xl">
                            <span>Find Your Solution</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 1200, "settings": {"slidesToShow": 2}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}]}'>
                        <!-- service item #1 -->
                        <div class="service-item">
                            <div class="service-item__content">
                                <div class="service-item__icon">
                                    <i class="icon-server"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">IT Management <br> Services</h4>
                                <p class="service-item__desc">IT management service that manages and oversees the IT
                                    infrastructure of
                                    organization responsible for network and operations which includes data communication.
                                </p>
                                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service-content -->
                            <div class="service-item__overlay bg-overlay bg-overlay-primary">
                                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/services/1.jpg"
                                        alt="background"></div>
                            </div><!-- /.service-item__overlay -->
                        </div><!-- /.service-item -->
                        <!-- service item #2 -->
                        <div class="service-item">
                            <div class="service-item__content">
                                <div class="service-item__icon">
                                    <i class="icon-cloud"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Cyber Security<br> Services</h4>
                                <p class="service-item__desc">Drive your business and manage risk with a global industry
                                    leader in
                                    cybersecurity, cloud, and managed security services and extend your team with leading
                                    experts.</p>
                                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service-content -->
                            <div class="service-item__overlay bg-overlay bg-overlay-primary">
                                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/services/2.jpg"
                                        alt="background"></div>
                            </div><!-- /.service-item__overlay -->
                        </div><!-- /.service-item -->
                        <!-- service item #3 -->
                        <div class="service-item">
                            <div class="service-item__content">
                                <div class="service-item__icon">
                                    <i class="icon-hosting"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Cloud Computing<br> Services</h4>
                                <p class="service-item__desc">Cloud computing is the on-demand availability of computer
                                    system
                                    resources, especially data storage and computing power, without direct active management
                                    by the
                                    user.
                                </p>
                                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service-content -->
                            <div class="service-item__overlay bg-overlay bg-overlay-primary">
                                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/services/3.jpg"
                                        alt="background"></div>
                            </div><!-- /.service-item__overlay -->
                        </div><!-- /.service-item -->
                        <!-- service item #4 -->
                        <div class="service-item">
                            <div class="service-item__content">
                                <div class="service-item__icon">
                                    <i class="icon-technician"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">IT Consulting <br> Services</h4>
                                <p class="service-item__desc">Trying to solve all your IT challenges internally can become
                                    costly and
                                    a
                                    major distraction, Leveraging knowledgeable IT consulting firms like ushelps your
                                    business remain
                                    secure.</p>
                                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service-content -->
                            <div class="service-item__overlay bg-overlay bg-overlay-primary">
                                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/services/4.jpg"
                                        alt="background"></div>
                            </div><!-- /.service-item__overlay -->
                        </div><!-- /.service-item -->
                        <!-- service item #5 -->
                        <div class="service-item">
                            <div class="service-item__content">
                                <div class="service-item__icon">
                                    <i class="icon-programming"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Software Dev<br> Services</h4>
                                <p class="service-item__desc">With shorter product cycles, rapid innovation, and mergers
                                    contributing
                                    to
                                    constant change, you are faced with making business decisions every day to advance your
                                    mission.</p>
                                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service-content -->
                            <div class="service-item__overlay bg-overlay bg-overlay-primary">
                                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/services/5.jpg"
                                        alt="background"></div>
                            </div><!-- /.service-item__overlay -->
                        </div><!-- /.service-item -->
                        <!-- service item #6 -->
                        <div class="service-item">
                            <div class="service-item__content">
                                <div class="service-item__icon">
                                    <i class="icon-file"></i>
                                </div><!-- /.service-item__icon -->
                                <h4 class="service-item__title">Backup & Recovery<br> Services</h4>
                                <p class="service-item__desc">While you can’t predict unexpected events, we’ll ensure the
                                    right
                                    precautions are in place to minimize downtime and keep you moving in the right
                                    direction.</p>
                                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service-content -->
                            <div class="service-item__overlay bg-overlay bg-overlay-primary">
                                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/services/6.jpg"
                                        alt="background"></div>
                            </div><!-- /.service-item__overlay -->
                        </div><!-- /.service-item -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end align-items-center btn-wrapper">
                    <a href="it-solutions.html" class="btn btn__primary btn__link">
                        <span>Explore All Services</span><i class="icon-arrow-right icon-outlined"></i>
                    </a>
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ===========================
              portfolio layout 3
            ============================= -->
    <section class="portfolio-layout3 pt-130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h2 class="heading__subtitle color-body">Latest Case Studies</h2>
                        <h3 class="heading__title">Succetss Stories</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- portfolio item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/1.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <h4 class="portfolio-item__title"><a href="#">Financial’s Need For
                                    Strategic Advisor</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="#">Building</a><a href="#">Interior</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/2.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <h4 class="portfolio-item__title"><a href="#">24x7 System Monitoring and
                                    Alert Response</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="#">Software</a><a href="#">Support</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #3 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/3.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <h4 class="portfolio-item__title"><a href="#">Nonprofit Organization
                                    Utilized Security</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="#">Management</a><a href="#">Cloud</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/4.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <h4 class="portfolio-item__title"><a href="#">Powerful IT Upgrade Aligns
                                    With Your Objectives</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="#">Digital</a><a href="#">HR</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #5 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/5.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <h4 class="portfolio-item__title"><a href="#">The Best IT Practices in Cloud
                                    and Security</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="#">Consulting</a><a href="#">Management</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #6 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/6.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <h4 class="portfolio-item__title"><a href="#">Helping Companies With
                                    Healthcare Inustry</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="#">Software</a><a href="#">Security</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="case-studies-grid.html" class="btn btn__primary btn__hi">Explore All Cases</a>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio layout 3  -->

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
                   Banner layout 3
            =========================== -->
    <section class="banner-layout3 pt-100 pb-0">
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
        </div><!-- /.container -->
    </section><!-- /.Banner layout 3 -->

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
              Testimonials layout 2
              =========================  -->
    <section class="testimonials testimonials-layout2 pt-130 pb-130">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/13.jpg" alt="backgrounds"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading__subtitle color-body">Ensure High Availability of Your Services</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <h3 class="heading__title color-white mb-40">Easy solutions for all difficult IT problems, keep
                        business
                        safe &
                        ensure high availability.</h3>
                    <a href="request-quote.html"
                        class="btn btn__white btn__bordered btn__icon btn__xl minwidth-170 mb-40">
                        <span>Get Started</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 1200, "settings": {"slidesToShow": 2}}, {"breakpoint": 992, "settings": {"slidesToShow": 1}}]}'>
                        <!-- Testimonial #1 -->
                        <div class="testimonial-item d-flex">
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/1.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__body">
                                <div class="testimonial-item__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance
                                    to make an
                                    impact, you’ve come to the right place. We will transform your business through our
                                    techniques!
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">John Peter</h4>
                                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div>
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item d-flex">
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/2.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__body">
                                <div class="testimonial-item__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance
                                    to make an
                                    impact, you’ve come to the right place. We will transform your business through our
                                    techniques!
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">Ahmed Abdallah</h4>
                                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div>
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class="testimonial-item d-flex">
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/3.png"
                                    alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__body">
                                <div class="testimonial-item__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance
                                    to make an
                                    impact, you’ve come to the right place. We will transform your business through our
                                    techniques!
                                </p>
                                <div class="testimonial-item__meta">
                                    <h4 class="testimonial-item__meta__title">Begha</h4>
                                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                </div><!-- /.testimonial-meta -->
                            </div>
                        </div><!-- /. testimonial-item -->
                    </div>
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonials 2 -->

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
                            <a href="blog-single-post.html">
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
                            <a href="blog-single-post.html" class="btn btn__secondary btn__link">
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
                            <a href="blog-single-post.html">
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
                            <a href="blog-single-post.html" class="btn btn__secondary btn__link">
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
                            <a href="blog-single-post.html">
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
                            <a href="blog-single-post.html" class="btn btn__secondary btn__link">
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

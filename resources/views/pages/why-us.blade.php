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
    <section class="page-title page-title-layout2 bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/2.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <span class="pagetitle__subheading">Nationwide Service, Local Expertise</span>
                    <h1 class="pagetitle__heading">Our technology allows you to offer the <span
                            class="text-underlined">latest
                            software</span> to your possible customers!
                    </h1>
                    <a href="{{ route('about-us') }}" class="btn btn__primary btn__icon btn__xl mt-20">
                        <span>More About Us</span><i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
            Secondary Nav
          =========================== -->
    <section class="secondary-nav secondary-nav-layout2 sticky-top py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="nav nav-tabs justify-content-center">
                        <a href="{{ route('about-us') }}" class="nav__link">About Us</a>
                        <a href="why-us.html" class="nav__link active">Why Choose Us</a>
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
            About Layout 2
          =========================== -->
    <section class="about-layout2 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <div class="about__img">
                        <img src="{{ asset('assets/website') }}/images/about/2.jpg" alt="about">
                        <div class="cta-banner">
                            <h4 class="cta-banner__title mb-30">Thinking insights, verified driven research, and metrics
                                data help
                                you make the right decisions!
                            </h4>
                            <a href="case-studies-modern.html" class="btn btn__primary btn__link">
                                <span>Read Case Studies</span><i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div><!-- /.cta-banner -->
                    </div><!-- /.about-img -->
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="heading-layout2 mb-30">
                        <h2 class="heading__subtitle">Trusted By The World's Best Organizations</h2>
                        <h3 class="heading__title mb-30">Manages service delivery across various business like, HR, Legal
                            and
                            other IT departments!!
                        </h3>
                    </div><!-- /heading -->
                    <div class="about__Text">
                        <p>Mintech has been helping organizations throughout the World to manage their IT with our unique
                            approach
                            to technology management and consultancy solutions. </p>
                        <p>As one of the world's largest ITService Providers, our deep pool of over 130 certified engineers
                            and IT
                            support staff are ready to help.</p>
                        <ul class="list-items list-unstyled mb-0">
                            <li>Delivered in more than 450,000 client’s interactions </li>
                            <li>Provided by experts to help challenge critical activities</li>
                            <li>Complemented with peer perspectives and advice</li>
                        </ul>
                    </div>
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ======================
          Features Layout 1
          ========================= -->
    <section class="features-layout1 pt-130">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/10.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="heading heading-layout2 mb-40">
                        <h2 class="heading__subtitle color-body">Ensure High Availability of Your Services</h2>
                        <h3 class="heading__title color-white">Easy solutions for all difficult IT problems, keep business
                            safe &
                            ensure high availability.</h3>
                    </div>
                    <a href="{{ route('contact-us') }}" class="btn btn__white btn__bordered btn__xl btn__icon minwidth-170">
                        <span>Get Started</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row features-wrapper mt-40">
                        <!-- Feature item #1 -->
                        <div class="col-sm-6 feature-item">
                            <div class="feature-item__icon">
                                <i class="icon-statistic"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="feature-item__title mb-0">Software Asset Management</h4>
                                <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                            </div>
                        </div><!-- /.feature-item -->
                        <!-- Feature item #2 -->
                        <div class="col-sm-6 feature-item">
                            <div class="feature-item__icon">
                                <i class="icon-management"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="feature-item__title mb-0">Privileged Access Management</h4>
                                <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                            </div>
                        </div><!-- /.feature-item -->
                        <!-- Feature item #3 -->
                        <div class="col-sm-6 feature-item">
                            <div class="feature-item__icon">
                                <i class="icon-software"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="feature-item__title mb-0">Software License Management</h4>
                                <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                            </div>
                        </div><!-- /.feature-item -->
                        <!-- Feature item #4 -->
                        <div class="col-sm-6 feature-item">
                            <div class="feature-item__icon">
                                <i class="icon-relational"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="feature-item__title mb-0">Enterprise Service Management</h4>
                                <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                            </div>
                        </div><!-- /.feature-item -->
                    </div><!-- /.row -->
                    <div class="row mt-50 contact-text">
                        <div class="col-sm-9 px-0">
                            <strong class="color-white">If you have any questions or need help, feel free to contact with
                                our team,
                                or call
                                <a href="#">(002) 01061245741</a></strong>
                        </div><!-- /.col-sm-9 -->
                        <div class="col-sm-3 px-0 d-flex justify-content-end">
                            <a href="{{ route('contact-us') }}" class="btn btn__primary btn__primary-style2 minwidth-120">Contact
                                Us</a>
                        </div><!-- /.col-sm-3 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->

    <!-- ===========================
            portfolio layout 2
          ============================= -->
    <section class="portfolio-layout2 portfolio-layout2-carousel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="heading mb-50">
                        <h2 class="heading__subtitle color-body">Latest Case Studies</h2>
                        <h3 class="heading__title">Success Stories</h3>
                    </div><!-- /heading -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <!-- portfolio item #1 -->
                        <div class="portfolio-item">
                            <div class="portfolio-item__icon">
                                <img src="{{ asset('assets/website') }}/images/icons/1.png" alt="icon">
                            </div><!-- /.portfolio-item__icon -->
                            <div class="portfolio-item__content">
                                <h4 class="portfolio-item__title"><a href="#">Financial’s Need For
                                        Strategic Advisor</a></h4>
                                <p class="portfolio-item__desc">We delivered solutions at every step, and moved seamlessly
                                    into a more
                                    proactive role as a strategic advisor, providing support and guidance across all IT
                                    topics.</p>
                                <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.portfolio-content -->
                            <div class="portfolio-item__img">
                                <a href="case-studies-single.html"><img src="{{ asset('assets/website') }}/images/portfolio/modern/1.jpg"
                                        alt="portfolio img"></a>
                            </div><!-- /.portfolio-img -->
                        </div><!-- /.portfolio-item -->
                        <!-- portfolio item #2 -->
                        <div class="portfolio-item">
                            <div class="portfolio-item__icon">
                                <img src="{{ asset('assets/website') }}/images/icons/2.png" alt="icon">
                            </div><!-- /.portfolio-item__icon -->
                            <div class="portfolio-item__content">
                                <h4 class="portfolio-item__title"><a href="#">24x7 System Monitoring
                                        and Alert Response</a></h4>
                                <p class="portfolio-item__desc">This single, unified platform integrates all operational
                                    phases of
                                    selling and activation of their wireless services and devices, and serves as the
                                    backbone .</p>
                                <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.portfolio-content -->
                            <div class="portfolio-item__img">
                                <a href="case-studies-single.html"><img src="{{ asset('assets/website') }}/images/portfolio/modern/2.jpg"
                                        alt="portfolio img"></a>
                            </div><!-- /.portfolio-img -->
                        </div><!-- /.portfolio-item -->
                        <!-- portfolio item #3 -->
                        <div class="portfolio-item">
                            <div class="portfolio-item__icon">
                                <img src="{{ asset('assets/website') }}/images/icons/3.png" alt="icon">
                            </div><!-- /.portfolio-item__icon -->
                            <div class="portfolio-item__content">
                                <h4 class="portfolio-item__title"><a href="#">Nonprofit Organization
                                        Utilized Security</a></h4>
                                <p class="portfolio-item__desc">Servers going down on a weekly basis had become the
                                    organization’s
                                    “normal.” We came on board with the objective of stabilizing the environment,</p>
                                <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.portfolio-content -->
                            <div class="portfolio-item__img">
                                <a href="case-studies-single.html"><img src="{{ asset('assets/website') }}/images/portfolio/modern/3.jpg"
                                        alt="portfolio img"></a>
                            </div><!-- /.portfolio-img -->
                        </div><!-- /.portfolio-item -->
                        <!-- portfolio item #4 -->
                        <div class="portfolio-item">
                            <div class="portfolio-item__icon">
                                <img src="{{ asset('assets/website') }}/images/icons/4.png" alt="icon">
                            </div><!-- /.portfolio-item__icon -->
                            <div class="portfolio-item__content">
                                <h4 class="portfolio-item__title"><a href="#">Powerful IT Upgrade Aligns
                                        With Your Objectives</a></h4>
                                <p class="portfolio-item__desc">They needed a robust management solution to organize
                                    archive critical
                                    documents for client cases, and wanted to determine solutions at every step.</p>
                                <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.portfolio-content -->
                            <div class="portfolio-item__img">
                                <a href="case-studies-single.html"><img src="{{ asset('assets/website') }}/images/portfolio/modern/4.jpg"
                                        alt="portfolio img"></a>
                            </div><!-- /.portfolio-img -->
                        </div><!-- /.portfolio-item -->
                        <!-- portfolio item #5 -->
                        <div class="portfolio-item">
                            <div class="portfolio-item__icon">
                                <img src="{{ asset('assets/website') }}/images/icons/5.png" alt="icon">
                            </div><!-- /.portfolio-item__icon -->
                            <div class="portfolio-item__content">
                                <h4 class="portfolio-item__title"><a href="#">The Best IT Practices in
                                        Cloud and Security</a></h4>
                                <p class="portfolio-item__desc">A standardized set of practices, we produce an extensive
                                    report
                                    recommendations, and health ratings for each technolog phases of selling .</p>
                                <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.portfolio-content -->
                            <div class="portfolio-item__img">
                                <a href="case-studies-single.html"><img src="{{ asset('assets/website') }}/images/portfolio/modern/5.jpg"
                                        alt="portfolio img"></a>
                            </div><!-- /.portfolio-img -->
                        </div><!-- /.portfolio-item -->
                        <!-- portfolio item #6 -->
                        <div class="portfolio-item">
                            <div class="portfolio-item__icon">
                                <img src="{{ asset('assets/website') }}/images/icons/6.png" alt="icon">
                            </div><!-- /.portfolio-item__icon -->
                            <div class="portfolio-item__content">
                                <h4 class="portfolio-item__title"><a href="#">Helping Companies With
                                        Healthcare Inustry</a></h4>
                                <p class="portfolio-item__desc">The client was not satisfied with the level of
                                    responsiveness and the
                                    lack of support provided by their previous service with the objective of stabilizing.
                                </p>
                                <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.portfolio-content -->
                            <div class="portfolio-item__img">
                                <a href="case-studies-single.html"><img src="{{ asset('assets/website') }}/images/portfolio/modern/6.jpg"
                                        alt="portfolio img"></a>
                            </div><!-- /.portfolio-img -->
                        </div><!-- /.portfolio-item -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row stats-text">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-2">
                    <div class="row">
                        <div class="stats-text__item col d-flex align-items-center">
                            <span class="divider divider-sm divider-secondary"></span>
                            <span class="color-secondary">20,000</span>
                            <span>Objective Resource</span>
                        </div><!-- /.stats-text__item -->
                        <div class="stats-text__item col d-flex align-items-center">
                            <span class="divider divider-sm divider-secondary"></span>
                            <span class="color-secondary">99.9%</span>
                            <span>Customer Satisfaction</span>
                        </div><!-- /.stats-text__item -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio layout 2 -->

    <!-- =========================
            Testimonials layout 1
            =========================  -->
    <section class="testimonials testimonials-layout1 testimonials-has-top-img text-center">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/4.jpg" alt="backgrounds"></div>
        <img src="{{ asset('assets/website') }}/images/testimonials/testimonials-group.png" alt="testimonials" class="testimonials-top-img">
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
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/1.png" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/2.png" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/3.png" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/2.png" alt="author thumb">
                            </div><!-- /.testimonial-thumb -->
                            <div class="testimonial-item__thumb">
                                <img src="{{ asset('assets/website') }}/images/testimonials/thumbs/3.png" alt="author thumb">
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
@endsection

@section('custom-script')
@endsection

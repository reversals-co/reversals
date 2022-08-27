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
    <section class="page-title page-title-layout11 bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/11.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                    <span class="pagetitle__subheading">Legal Stuff & Law Firms</span>
                    <h1 class="pagetitle__heading mb-30">While you can’t predict unexpected events, we’ll ensure right
                        precautions!</h1>
                    <a href="request-quote.html" class="btn btn__white btn__xl">Request A Demo</a>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
                Secondary Nav
              =========================== -->
    <section class="secondary-nav secondary-nav-internal-navigation sticky-top py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="nav nav-tabs justify-content-center">
                        <a href="#" data-scroll="about" class="nav__link">Overview</a>
                        <a href="#" data-scroll="history" class="nav__link">History</a>
                        <a href="#" data-scroll="awards" class="nav__link">Awards & Recognition</a>
                        <a href="#" data-scroll="features" class="nav__link">Features</a>
                        <a href="#" data-scroll="contact" class="nav__link">Request A Quote </a>
                        <a href="#" data-scroll="testimonials" class="nav__link">Testimonials</a>
                        <a href="#" data-scroll="case-studies" class="nav__link">Case Studies</a>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Secondary Nav -->

    <!-- ========================
                About Layout 3
              =========================== -->
    <section id="about" class="about-layout3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2 mb-40">
                        <h2 class="heading__subtitle">Trusted By The World's Best Organizations</h2>
                        <h3 class="heading__title mb-30">Our technology allows you to offer latest software to your possible
                            customers!
                        </h3>
                        <p class="heading__desc">Mintech has been helping organizations throughout the World to manage their
                            IT with our unique approach to technology management and consultancy solutions. As one of the
                            world's
                            largest ITService Providers, our deep pool of over 130 certified engineers and IT support staff
                            are
                            ready to help.</p>
                        <p class="heading__desc">Change manifests in many ways: economic swings, enormous security breaches,
                            political drama, new competition, and viral social media. It’s critical not to take a
                            “wait-and-see”
                            approach or defensive cost-cutting measure. High performers face change head-on: They have the
                            confidence to act boldly and the discipline to maintain intense strategic focus.
                        </p>
                        <p class="heading__desc">You need information security services to proactively prevent and protect
                            confidential data, as well as detect internal and external threats. Protect your business by
                            choosing
                            managed security service provider. Our security services can help ensure your business Trusted
                            by the
                            world's best organizations.</p>
                        <p class="heading__desc">for 15 years and running, it has been delivering smiles to hundreds of IT
                            advisors, developers, users, and business owners. Easy solutions for all difficult IT problems
                            to ensure
                            high availability.</p>
                        <p class="heading__desc">Provide users with appropriate view and access permissions to requests,
                            problems,
                            changes, contracts, assets, solutions, and reports with our experienced professionals. </p>
                    </div><!-- /heading -->
                    <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mb-40">
                        <li>Eliminate Repeat Entry</li>
                        <li>Simpliy Communication</li>
                        <li>Drive Business Process</li>
                        <li>Speed Up Transactions</li>
                        <li>Structure Data & Docs</li>
                        <li>Automate Workflows</li>
                    </ul>
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="case-studies-modern.html" class="btn btn__secondary btn__hi mr-30">Find Your Solution</a>
                        <a href="{{ route('services.index') }}" class="btn btn__primary btn__link">
                            <span>Explore All Services</span><i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.col-12 -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="sticky-top">
                        <div class="about__img">
                            <img src="{{ asset('assets/website') }}/images/about/3.jpg" alt="about">
                            <div class="cta-banner">
                                <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                                    <div class="cta-banner__item">
                                        <div class="cta-banner__icon"><i class="icon-technician"></i></div>
                                        <h4 class="cta-banner__title mb-0">Utilising latest timelineing solutions, and
                                            decades of work
                                            experience.
                                        </h4>
                                    </div><!-- /.cta-banner__item -->
                                    <div class="cta-banner__item">
                                        <div class="cta-banner__icon"><i class="icon-funnel"></i></div>
                                        <h4 class="cta-banner__title mb-0">Thinking insights, verified driven research,
                                            metrics make right
                                            decisions!
                                        </h4>
                                    </div><!-- /.cta-banner__item -->
                                </div><!-- /.slick-carousel -->
                            </div><!-- /.cta-banner -->
                        </div><!-- /.about-img -->
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 3 -->

    <!-- ======================
              History Timeline
              ========================= -->
    <section id="history" class="history-timeline pb-0">
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
    <section id="awards" class="awards pt-20">
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

    <!-- ======================
              Features Layout 1
              ========================= -->
    <section id="features" class="features-layout1 pt-130 pb-220">
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
                    <a href="{{ route('contact-us') }}"
                        class="btn btn__white btn__bordered btn__xl btn__icon minwidth-170">
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
                            <a href="{{ route('contact-us') }}"
                                class="btn btn__primary btn__primary-style2 minwidth-120">Contact Us</a>
                        </div><!-- /.col-sm-3 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->

    <div class="bg-no-repeat bg-top">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/11.jpg" alt="backgrounds"></div>
        <!-- =========================
                  Contact layout 2
                =========================== -->
        <section id="contact" class="contact-layout2 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="contact-panel d-flex flex-wrap mt--170">
                            <div
                                class="contact-panel__banner bg-overlay bg-overlay-primary d-flex flex-column justify-content-between">
                                <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/6.jpg"
                                        alt="background"></div>
                                <div class="heading heading-layout2 heading-light">
                                    <h3 class="heading__title mb-30">Perfect Solutions For Your Business!</h3>
                                    <p class="heading__desc mb-30">Mintech has been helping organizations throughout the
                                        World to manage
                                        their
                                        IT with our unique approach to technology management and consultancy solutions. </p>
                                    <ul class="list-items list-items-light list-unstyled mb-40">
                                        <li>Provided by experts to help challenge activities</li>
                                        <li>Complemented with peer perspectives and advice</li>
                                        <li>More than 450,000 client’s interactions </li>
                                    </ul>
                                </div><!-- /.heading -->
                                <div class="d-flex flex-wrap">
                                    <a href="request-quote.html" class="btn btn__secondary btn__secondary-style2 mr-30">
                                        Request A Demo</a>
                                    <a href="{{ route('services.index') }}"
                                        class="btn btn__white btn__bordered btn__icon">
                                        <span>Get Started</span><i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /.contact-panel__banner -->
                            <form class="contact-panel__form" method="post" action="assets/php/contact.php"
                                id="contactForm">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Name (required)</label>
                                            <input type="text" class="form-control" placeholder="Name"
                                                id="contact-name" name="contact-name" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-email">Email (required)</label>
                                            <input type="email" class="form-control" placeholder="Email"
                                                id="contact-email" name="contact-email" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-Phone">Inquiry (required)</label>
                                            <select class="form-control">
                                                <option value="0">IT Management Services</option>
                                                <option value="1">IT Management Services 2</option>
                                                <option value="2">IT Management Services 3</option>
                                            </select>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-Phone">Phone (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Phone"
                                                id="contact-Phone" name="contact-phone">
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Additional Details (optional)</label>
                                            <textarea class="form-control" placeholder="Describe your inquirey!" id="contact-message" name="contact-message"></textarea>
                                        </div>
                                        <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                                            <input type="checkbox" class="custom-control-input" id="terms">
                                            <label class="custom-control-label" for="terms">I accept the privacy and
                                                terms.</label>
                                        </div>
                                        <button type="submit" class="btn btn__secondary btn__xl btn__block">Submit
                                            Request </button>
                                        <div class="contact-result"></div>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form><!-- /.contact-panel__form -->
                        </div><!-- /.contact-panel -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Contact layout 2 -->

        <!-- =========================
                Testimonials layout 1
                =========================  -->
        <section id="testimonials" class="testimonials testimonials-layout1 text-center pt-0">
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
                                    <p class="testimonial-item__desc">If you’re looking for a rewarding career and the
                                        chance to make an
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
                                    <p class="testimonial-item__desc">My project was a simple & small task, but the
                                        persistence and
                                        determination turned it into an awesome and great project which make me happy.
                                    </p>
                                    <div class="testimonial-item__meta">
                                        <h4 class="testimonial-item__meta__title">Ahmed Abdallah</h4>
                                        <p class="testimonial-item__meta__desc">Web Inc</p>
                                    </div><!-- /.testimonial-meta -->
                                </div><!-- /. testimonial-item -->
                                <!-- Testimonial #3 -->
                                <div class="testimonial-item">
                                    <p class="testimonial-item__desc">If you’re looking for a rewarding career and the
                                        chance to make an
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
                                    <p class="testimonial-item__desc">My project was a simple & small task, but the
                                        persistence and
                                        determination turned it into an awesome and great project which make me happy.
                                    </p>
                                    <div class="testimonial-item__meta">
                                        <h4 class="testimonial-item__meta__title">John Peter</h4>
                                        <p class="testimonial-item__meta__desc">7oroof Inc</p>
                                    </div><!-- /.testimonial-meta -->
                                </div><!-- /. testimonial-item -->
                                <!-- Testimonial #3 -->
                                <div class="testimonial-item">
                                    <p class="testimonial-item__desc">My project was a simple & small task, but the
                                        persistence and
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

    </div>

    <!-- ===========================
                portfolio grid
              ============================= -->
    <section id="case-studies" class="portfolio-grid pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <h2 class="heading__subtitle color-body">Latest Case Studies</h2>
                        <h3 class="heading__title">Success Stories</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- portfolio item #1 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/1.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <div class="portfolio-item__cat">
                                <a href="#">Building</a><a href="#">Interior</a>
                            </div><!-- /.portfolio-cat -->
                            <h4 class="portfolio-item__title"><a href="#">Financial’s Need For
                                    Strategic Advisor</a></h4>
                            <p class="portfolio-item__desc">We delivered solutions at every step, and moved seamlessly into
                                a more
                                proactive role as a strategic advisor, providing support and guidance across all IT topics.
                            </p>
                            <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #2 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/2.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <div class="portfolio-item__cat">
                                <a href="#">Software</a><a href="#">Support</a>
                            </div><!-- /.portfolio-cat -->
                            <h4 class="portfolio-item__title"><a href="#">24x7 System Monitoring and
                                    Alert Response</a></h4>
                            <p class="portfolio-item__desc">This single, unified platform integrates all operational phases
                                of
                                selling and activation of their wireless services and devices, and serves as the backbone of
                                the
                                operations.</p>
                            <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #3 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="{{ asset('assets/website') }}/images/portfolio/grid/3.jpg" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio-item__content">
                            <div class="portfolio-item__cat">
                                <a href="#">Management</a><a href="#">Cloud</a>
                            </div><!-- /.portfolio-cat -->
                            <h4 class="portfolio-item__title"><a href="#">Nonprofit Organization
                                    Utilized Security</a></h4>
                            <p class="portfolio-item__desc">Servers going down on a weekly basis had become the
                                organization’s
                                “normal.” We came on board with the objective of stabilizing the environment, assisting
                                complete.</p>
                            <a href="case-studies-single.html" class="btn btn__secondary btn__bordered">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio grid -->
@endsection

@section('custom-script')
@endsection

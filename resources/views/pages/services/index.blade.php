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
    <section class="page-title page-title-layout10 bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/10.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                    <span class="pagetitle__subheading">Ensure High Availability of Your Services</span>
                    <h1 class="pagetitle__heading mb-30">Easy solutions for all difficult IT problems, keep business safe &
                        ensure high availability.</h1>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{ route('contact-us') }}" class="btn btn__white btn__icon btn__xl mx-3">
                            <span>Get Started</span><i class="icon-arrow-right"></i>
                        </a>
                        <a class="video__btn video__btn-white popup-video mx-3"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <span class="video__player-animation"></span>
                                <span class="video__player-animation video__player-animation-2"></span>
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div>
                    <nav>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Industries</li>
                        </ol>
                    </nav>
                </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
              Services Layout 1
          =========================== -->
    <section class="services-layout1 bg-no-repeat bg-size-auto bg-top-right pt-130 pb-90">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/6.png" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading heading-layout2 text-center mb-50">
                        <h2 class="heading__subtitle">Nationwide Service, Local Expertise</h2>
                        <h3 class="heading__title">View & access permissions to requests, solutions, and reports with our
                            experienced Staff!</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('assets/website') }}/images/services/1.jpg" alt="service" class="w-100">
                        </div><!-- /.service-item__img -->
                        <h4 class="service-item__title">Education And <br> Non-Profit</h4>
                        <p class="service-item__desc">Drive your business and manage risk with a global industry leader in
                            cybersecurity, cloud, and managed security services and extend your team with leading experts.
                        </p>
                        <a href="{{ route('services.show') }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('assets/website') }}/images/services/2.jpg" alt="service" class="w-100">
                        </div><!-- /.service-item__img -->
                        <h4 class="service-item__title">Accounting And <br> Finance</h4>
                        <p class="service-item__desc">Cloud computing is the on-demand availability of computer system
                            resources,
                            especially data storage and computing power, without direct active management </p>
                        <a href="{{ route('services.show') }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('assets/website') }}/images/services/3.jpg" alt="service" class="w-100">
                        </div><!-- /.service-item__img -->
                        <h4 class="service-item__title">Government And <br> Public</h4>
                        <p class="service-item__desc">Trying to solve all your IT challenges internally can become costly
                            and a
                            major distraction, Leveraging knowledgeable IT consulting firms like ushelps</p>
                        <a href="{{ route('services.show') }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('assets/website') }}/images/services/4.jpg" alt="service" class="w-100">
                        </div><!-- /.service-item__img -->
                        <h4 class="service-item__title">Energy And<br> Utilities</h4>
                        <p class="service-item__desc">With shorter product cycles, rapid innovation, and mergers
                            contributing to
                            constant change, you are faced with making business decisions every day</p>
                        <a href="{{ route('services.show') }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('assets/website') }}/images/services/5.jpg" alt="service" class="w-100">
                        </div><!-- /.service-item__img -->
                        <h4 class="service-item__title">Legal Stuff And <br> Law Firms</h4>
                        <p class="service-item__desc">While you can’t predict unexpected events, we’ll ensure the right
                            precautions are in place to minimize downtime and keep you moving in the right direction.</p>
                        <a href="{{ route('services.show') }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
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
                        <a href="{{ route('services.show') }}"
                            class="btn btn__white btn__bordered btn__icon btn__xl">
                            <span>Find Your Solution</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

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
                <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                    <div class="client">
                        <img src="{{ asset('assets/website') }}/images/clients/1.png" alt="client">
                        <img src="{{ asset('assets/website') }}/images/clients/1.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.col-lg-2 -->
                <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                    <div class="client">
                        <img src="{{ asset('assets/website') }}/images/clients/2.png" alt="client">
                        <img src="{{ asset('assets/website') }}/images/clients/2.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.col-lg-2 -->
                <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                    <div class="client">
                        <img src="{{ asset('assets/website') }}/images/clients/3.png" alt="client">
                        <img src="{{ asset('assets/website') }}/images/clients/3.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.col-lg-2 -->
                <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                    <div class="client">
                        <img src="{{ asset('assets/website') }}/images/clients/4.png" alt="client">
                        <img src="{{ asset('assets/website') }}/images/clients/4.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.col-lg-2 -->
                <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                    <div class="client">
                        <img src="{{ asset('assets/website') }}/images/clients/5.png" alt="client">
                        <img src="{{ asset('assets/website') }}/images/clients/5.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.col-lg-2 -->
                <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                    <div class="client">
                        <img src="{{ asset('assets/website') }}/images/clients/6.png" alt="client">
                        <img src="{{ asset('assets/website') }}/images/clients/6.png" alt="client">
                    </div><!-- /.client -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- =========================
             Banner layout 1
            =========================== -->
    <section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/3.jpg" alt="background"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="col-inner">
                        <div class="heading-layout2 heading-light mb-40">
                            <h3 class="heading__title mb-30">Timely service delivery & incident resolutions!!</h3>
                            <p class="heading__desc">Provide users with appropriate view and access permissions to
                                requests,
                                problems,
                                changes, contracts, assets, solutions, and reports with our experienced professionals.
                            </p>
                            <p class="heading__desc">As one of the world's largest ITService Providers, our deep pool of
                                certified
                                engineers and IT staff are ready to help.
                            </p>
                        </div><!-- /.heading -->
                        <div class="d-flex align-items-center">
                            <a href="pricing.html" class="btn btn__white btn__bordered btn__hi mr-30">Pricing & Plans</a>
                            <a class="video__btn video__btn-white popup-video"
                                href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                <div class="video__player">
                                    <span class="video__player-animation"></span>
                                    <span class="video__player-animation video__player-animation-2"></span>
                                    <i class="fa fa-play"></i>
                                </div>
                                <span class="video__btn-title color-white">Play Video</span>
                            </a>
                        </div>
                        <div class="client-story mt-150">
                            <img src="{{ asset('assets/website') }}/images/clients/6.png" alt="signature"
                                class="client__logo mb-30">
                            <p class="client__quote">“We never knew the importance of IT help desk ticketing software until
                                we got
                                one, and got the
                                right one. We chose Mintech Service Desk Plus and it has never disappointed us.”
                            </p>
                            <div>
                                <span class="client__signature">Martin Qube,</span>
                                <span class="client__signature__title">Digital Media Manager</span>
                            </div>
                        </div><!-- /.client-story -->
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="contact-panel">
                        <form class="contact-panel__form" method="post" action="assets/php/contact.php"
                            id="contactForm">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h4 class="contact-panel__title">Request A Quote</h4>
                                </div> <!-- /.col-lg-12 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Name (required)</label>
                                        <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                            name="contact-name" required>
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
                                    <button type="submit" class="btn btn__secondary btn__xl btn__block">Submit Request
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner layout 1 -->

    <!-- ===========================
            portfolio grid
          ============================= -->
    <section class="portfolio-grid pb-60">
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

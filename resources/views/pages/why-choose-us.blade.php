<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="robots" content="noindex, nofollow">
  <meta name="description" content="Mintech  IT Solutions &  Services Template">
  <link href="{{asset('assets/website')}}/images/favicon/favicon.png" rel="icon">
  <title>Mintech IT Solutions & Services Template</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{{asset('assets/website')}}/css/libraries.css">
  <link rel="stylesheet" href="{{asset('assets/website')}}/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
      </div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-light header-layout2">
      <div class="topbar d-none d-lg-block">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="topbar__contact d-flex flex-wrap list-unstyled mb-0">
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">+55 654 541 17</a>
                  </li>
                  <li>
                    <i class="icon-envelope"></i><a href="mailto:Eteon@7oroof.com">Eteon@7oroof.com</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Hours: Mon-Fri: 8am – 7pm</a>
                  </li>
                </ul>
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <div class="dropdown dropdown__lang">
                    <button class="dropdown-toggle" id="langDrobdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('assets/website')}}/images/flags/en.png" alt="en"><span>English</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDrobdown">
                      <a class="dropdown-item" href="#">
                        <img src="{{asset('assets/website')}}/images/flags/fr.png" alt="fr"><span>France</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="{{asset('assets/website')}}/images/flags/gr.png" alt="gr"><span>germany</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('assets/website')}}/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="{{asset('assets/website')}}/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav mr-auto ml-auto">
              <li class="nav__item  has-dropdown">
                <a href="index.html" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Home</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="index.html" class="nav__item-link">Home Main</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-modern.html" class="nav__item-link">Home Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="why-us.html" class="nav__item-link">Why Choose Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="leadership-team.html" class="nav__item-link">Leadership Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="awards.html" class="nav__item-link">Award & Recognition</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="careers.html" class="nav__item-link">Careers</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="it-solutions.html" class="nav__item-link dropdown-menu-title">IT Solutions</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT
                              Management</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Cyber
                              Security</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Cloud
                              Computing</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT
                              Consulting</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Software
                              Dev</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT Support</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="industries.html" class="nav__item-link dropdown-menu-title">Industries</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Education,
                              Non-Profit</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Accounting,
                              Finance</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Government &
                              Public</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">Energy
                              &
                              Utilities</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">Legal,
                              Law
                              Firms</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Manufacturing</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">News&Media</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">Our Blog</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-grid.html" class="nav__item-link">Case Studies Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-modern.html" class="nav__item-link">Case Studies Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-classic.html" class="nav__item-link">Case Studies Classic</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-single.html" class="nav__item-link">Single Case Study</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="coming-soon.html" class="nav__item-link">Coming Soon</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="404.html" class="nav__item-link">404 Page</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link  open-register-popup">Register</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link  open-login-popup">Login</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
            <li class="d-none d-xl-block">
              <a href="request-quote.html" class="btn btn__secondary action__btn-contact">Request A Quote</a>
            </li>
            <li>
              <button class="action__btn action__btn-search">
                <i class="icon-search"></i>
              </button>
            </li>
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{asset('assets/website')}}/images/sliders/5.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide-item__content">
                  <h2 class="slide-item__title">Easy Solutions <br> For IT problems!</h2>
                  <p class="slide-item__desc">We are experienced professionals who understand that It services is
                    changing, and are true partners who care about your success. Our team provides a consultative
                    approach on emerging technology.
                  </p>
                  <a href="industries.html" class="btn btn__primary btn__hi mr-30">Our Services</a>
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
          <div class="bg-img"><img src="{{asset('assets/website')}}/images/sliders/6.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide-item__content">
                  <h2 class="slide-item__title">Timely Service <br> And Resolutions</h2>
                  <p class="slide-item__desc">We are experienced professionals who understand that It services is
                    changing, and are true partners who care about your success.</p>
                  <a href="industries.html" class="btn btn__primary btn__hi mr-30">Our Services</a>
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
              <p class="heading__desc mb-25">Mintech has been helping organizations throughout the World to manage their
                IT with our unique approach to technology management and consultancy solutions. As one of the world's
                largest ITService Providers, our deep pool of over 130 certified engineers and IT support staff are
                ready to help.</p>
            </div><!-- /heading -->
            <a href="about-us.html" class="btn btn__primary btn__xl btn__icon mb-30">
              <span>More About Us</span>
              <i class="icon-arrow-right"></i>
            </a>
            <img src="{{asset('assets/website')}}/images/about/singnture.png" alt="singnture" class="d-block">
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__img">
              <img src="{{asset('assets/website')}}/images/about/1.jpg" alt="about">
              <div class="cta-banner">
                <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                  <div class="cta-banner__item">
                    <div class="cta-banner__icon"><i class="icon-technician"></i></div>
                    <h4 class="cta-banner__title mb-0">Utilising latest timelineing solutions, and decades of work
                      experience.
                    </h4>
                  </div><!-- /.cta-banner__item -->
                  <div class="cta-banner__item">
                    <div class="cta-banner__icon"><i class="icon-funnel"></i></div>
                    <h4 class="cta-banner__title mb-0">Thinking insights, verified driven research, metrics make right
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
      <div class="bg-img"><img src="{{asset('assets/website')}}/images/banners/7.png" alt="background"></div>
      <div class="container">
        <div class="row services-wrapper">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="service-item service-item-custom bg-overlay bg-overlay-primary">
              <div class="bg-img">
                <img src="{{asset('assets/website')}}/images/services/6.jpg" alt="background">
              </div>
              <div>
                <h4 class="service-item__title">Help Your Business Win!</h4>
                <p class="service-item__desc">Mintech is a trusted advisor and an objective resource for more than 17000
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
                  <p class="service-item__desc">IT management service that manages and oversees the IT infrastructure of
                    organization responsible for network and operations which includes data communication.</p>
                  <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
                <div class="service-item__overlay bg-overlay bg-overlay-primary">
                  <div class="bg-img"><img src="{{asset('assets/website')}}/images/services/1.jpg" alt="background"></div>
                </div><!-- /.service-item__overlay -->
              </div><!-- /.service-item -->
              <!-- service item #2 -->
              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-cloud"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Cyber Security<br> Services</h4>
                  <p class="service-item__desc">Drive your business and manage risk with a global industry leader in
                    cybersecurity, cloud, and managed security services and extend your team with leading experts.</p>
                  <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
                <div class="service-item__overlay bg-overlay bg-overlay-primary">
                  <div class="bg-img"><img src="{{asset('assets/website')}}/images/services/2.jpg" alt="background"></div>
                </div><!-- /.service-item__overlay -->
              </div><!-- /.service-item -->
              <!-- service item #3 -->
              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-hosting"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Cloud Computing<br> Services</h4>
                  <p class="service-item__desc">Cloud computing is the on-demand availability of computer system
                    resources, especially data storage and computing power, without direct active management by the
                    user.
                  </p>
                  <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
                <div class="service-item__overlay bg-overlay bg-overlay-primary">
                  <div class="bg-img"><img src="{{asset('assets/website')}}/images/services/3.jpg" alt="background"></div>
                </div><!-- /.service-item__overlay -->
              </div><!-- /.service-item -->
              <!-- service item #4 -->
              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-technician"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">IT Consulting <br> Services</h4>
                  <p class="service-item__desc">Trying to solve all your IT challenges internally can become costly and
                    a
                    major distraction, Leveraging knowledgeable IT consulting firms like ushelps your business remain
                    secure.</p>
                  <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
                <div class="service-item__overlay bg-overlay bg-overlay-primary">
                  <div class="bg-img"><img src="{{asset('assets/website')}}/images/services/4.jpg" alt="background"></div>
                </div><!-- /.service-item__overlay -->
              </div><!-- /.service-item -->
              <!-- service item #5 -->
              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-programming"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Software Dev<br> Services</h4>
                  <p class="service-item__desc">With shorter product cycles, rapid innovation, and mergers contributing
                    to
                    constant change, you are faced with making business decisions every day to advance your mission.</p>
                  <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
                <div class="service-item__overlay bg-overlay bg-overlay-primary">
                  <div class="bg-img"><img src="{{asset('assets/website')}}/images/services/5.jpg" alt="background"></div>
                </div><!-- /.service-item__overlay -->
              </div><!-- /.service-item -->
              <!-- service item #6 -->
              <div class="service-item">
                <div class="service-item__content">
                  <div class="service-item__icon">
                    <i class="icon-file"></i>
                  </div><!-- /.service-item__icon -->
                  <h4 class="service-item__title">Backup & Recovery<br> Services</h4>
                  <p class="service-item__desc">While you can’t predict unexpected events, we’ll ensure the right
                    precautions are in place to minimize downtime and keep you moving in the right direction.</p>
                  <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service-content -->
                <div class="service-item__overlay bg-overlay bg-overlay-primary">
                  <div class="bg-img"><img src="{{asset('assets/website')}}/images/services/6.jpg" alt="background"></div>
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
                <img src="{{asset('assets/website')}}/images/portfolio/grid/1.jpg" alt="portfolio img">
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
                <img src="{{asset('assets/website')}}/images/portfolio/grid/2.jpg" alt="portfolio img">
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
                <img src="{{asset('assets/website')}}/images/portfolio/grid/3.jpg" alt="portfolio img">
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
                <img src="{{asset('assets/website')}}/images/portfolio/grid/4.jpg" alt="portfolio img">
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
                <img src="{{asset('assets/website')}}/images/portfolio/grid/5.jpg" alt="portfolio img">
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
                <img src="{{asset('assets/website')}}/images/portfolio/grid/6.jpg" alt="portfolio img">
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
                <img src="{{asset('assets/website')}}/images/clients/1.png" alt="client">
                <img src="{{asset('assets/website')}}/images/clients/1.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('assets/website')}}/images/clients/2.png" alt="client">
                <img src="{{asset('assets/website')}}/images/clients/2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('assets/website')}}/images/clients/3.png" alt="client">
                <img src="{{asset('assets/website')}}/images/clients/3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('assets/website')}}/images/clients/4.png" alt="client">
                <img src="{{asset('assets/website')}}/images/clients/4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('assets/website')}}/images/clients/5.png" alt="client">
                <img src="{{asset('assets/website')}}/images/clients/5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('assets/website')}}/images/clients/6.png" alt="client">
                <img src="{{asset('assets/website')}}/images/clients/6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('assets/website')}}/images/clients/7.png" alt="client">
                <img src="{{asset('assets/website')}}/images/clients/7.png" alt="client">
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
      <div class="bg-img"><img src="{{asset('assets/website')}}/images/backgrounds/8.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <div class="banner-text">
              <div class="heading-layout2 heading-light mb-40">
                <h3 class="heading__title mb-30">Timely service delivery & incident resolutions!!</h3>
                <p class="heading__desc">Provide users with appropriate view and access permissions to requests,
                  problems, changes, contracts, assets, solutions, and reports with our experienced professionals.
                </p>
              </div><!-- /.heading -->
              <a href="pricing.html" class="btn btn__white btn__bordered btn__hi mb-30">Pricing & Plans</a>
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="banner-img">
              <img src="{{asset('assets/website')}}/images/banners/5.jpg" alt="banner">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
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
                <img src="{{asset('assets/website')}}/images/awards/icons/1.png" alt="icon">
              </div><!-- /.fancybox-item__icon__img -->
              <div class="fancybox-item__content">
                <h4 class="fancybox-item__title">CSS Design Award</h4>
                <p class="fancybox-item__desc">A web design & development award platform for digital folk, UI/UX peeps
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
                <img src="{{asset('assets/website')}}/images/awards/icons/2.png" alt="icon">
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
                <img src="{{asset('assets/website')}}/images/awards/icons/3.png" alt="icon">
              </div><!-- /.fancybox-item__icon__img -->
              <div class="fancybox-item__content">
                <h4 class="fancybox-item__title">The FWA Award</h4>
                <p class="fancybox-item__desc">Showcasing innovation every day since 2000, our mission is to showcase
                  cutting edge creativity, regardless
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #4 -->
            <div class="fancybox-item">
              <div class="fancybox-item__icon__img">
                <img src="{{asset('assets/website')}}/images/awards/icons/4.png" alt="icon">
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
      <div class="bg-img"><img src="{{asset('assets/website')}}/images/backgrounds/13.jpg" alt="backgrounds"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="heading__subtitle color-body">Ensure High Availability of Your Services</h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <h3 class="heading__title color-white mb-40">Easy solutions for all difficult IT problems, keep business
              safe &
              ensure high availability.</h3>
            <a href="request-quote.html" class="btn btn__white btn__bordered btn__icon btn__xl minwidth-170 mb-40">
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
                  <img src="{{asset('assets/website')}}/images/testimonials/thumbs/1.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial-item__body">
                  <div class="testimonial-item__rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
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
                  <img src="{{asset('assets/website')}}/images/testimonials/thumbs/2.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial-item__body">
                  <div class="testimonial-item__rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
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
                  <img src="{{asset('assets/website')}}/images/testimonials/thumbs/3.png" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial-item__body">
                  <div class="testimonial-item__rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
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
                  <img src="{{asset('assets/website')}}/images/blog/grid/1.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">May 13, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="#">Five Ways to Develop a World Class Sales Operations
                    Function</a>
                </h4>
                <p class="post-item__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                  Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
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
                  <img src="{{asset('assets/website')}}/images/blog/grid/2.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="#">Tech</a><a href="#">Communications</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">April 17, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="#">Succession Risks That Threaten Your Leadership Strategy</a>
                </h4>
                <p class="post-item__desc">Today’s organizations need a quality bench of leaders to drive business
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
                  <img src="{{asset('assets/website')}}/images/blog/grid/3.jpg" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="#">Digital Business</a><a href="#">Cloud</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">March 20, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="#">What Do Employee Engagement Surveys Tell You About
                    Employee?</a>
                </h4>
                <p class="post-item__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                  Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
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

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer bg-heading">
      <div class="bg-img"><img src="{{asset('assets/website')}}/images/backgrounds/2.png" alt="backgrounds"></div>
      <div class="footer-contact pt-50 pb-50">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-2">
              <div class="contact-info">
                <h6 class="footer-widget__title">Quick Contact</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li><a href="tel:00123968574">+ (002) 0106-1245-741</a></li>
                  <li><a href="mailto:Mintech@7oroof.com">Mintech@7oroof.com</a></li>
                </ul>
              </div><!-- /.contact-info -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-4 col-md-4 col-lg-2">
              <div class="contact-info">
                <h6 class="footer-widget__title">Our Address</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li>2307 Beverley Rd , New York 11226 U.S.</li>
                </ul>
              </div><!-- /.contact-info -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-4 col-md-4 col-lg-2">
              <div class="contact-info">
                <h6 class="footer-widget__title">Opening Hours</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li>Mon - Fri: 8am - 7pm</li>
                  <li>Sat - Sun: 9 am - 8pm</li>
                </ul>
              </div><!-- /.contact-info -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-8 col-lg-6">
              <h6 class="footer-widget__title">Newsletter</h6>
              <form class="footer-form d-flex mb-0">
                <input type="text" class="form-control mr-20" placeholder="Your Email Address">
                <button type="submit" class="btn btn__primary btn__primary-style2">Subscribe</button>
              </form>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-contact -->
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 footer-widget footer-widget-about">
              <div class="footer-widget__content">
                <img src="{{asset('assets/website')}}/images/logo/logo-light.png" alt="logo" class="mb-30">
                <p class="color-gray mb-40">We are experienced professionals who understand that It services is
                  changing, and are
                  true partners who care about your future business success.</p>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul><!-- /.social-icons -->
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Company</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="leadership-team.html">Meet Our Team</a></li>
                    <li><a href="blog.html">News & Media</a></li>
                    <li><a href="projects-grid.html">Case Studies</a></li>
                    <li><a href="contacs.html">Contacts</a></li>
                    <li><a href="#">Investors</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Solutions</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">IT Management</a></li>
                    <li><a href="#">Cyber Security</a></li>
                    <li><a href="#">Cloud Computing</a></li>
                    <li><a href="#">IT Consulting</a></li>
                    <li><a href="#">Software Dev</a></li>
                    <li><a href="#">IT Support</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Resources</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="pricing.html">Pricing and plans</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="faqs.html">Help & FAQ</a></li>
                    <li><a href="contacs.html">Contact Us</a></li>
                    <li><a href="#">Site map</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">We're Hiring</h6>
              <div class="footer-widget__content">
                <p class="fz-14 color-white">Interested in joining the Mintech team?</p>
                <a href="careers.html" class="btn btn__primary btn__primary-style2 btn__link">
                  <span>Our Careers</span><i class="icon-arrow-right icon-outlined"></i>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <span class="fz-14">&copy; 2020 Mintech, All Rights Reserved. With Love by</span>
              <a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

    <div class="burger-menu">
      <div class="burger-menu__content">
        <button type="button" class="burger-menu__close"><i class="fas fa-times"></i></button>
        <div class="burger-menu__header">
          <img src="{{asset('assets/website')}}/images/logo/logo-light.png" alt="logo" class="mb-30">
          <p class="color-white">We are experienced professionals who understand that It services is changing, and are
            true partners who care about your future business success.</p>
        </div><!-- /.burger-menu__header -->
        <div class="contact-blocks-wrapper">
          <div class="contact-block contact-block-light">
            <h5 class="contact-block__title">Our Location</h5>
            <ul class="contact-block__list list-unstyled">
              <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
            </ul>
          </div><!-- /.contact-panel__info__block -->
          <div class="contact-block contact-block-light">
            <h5 class="contact-block__title">Quick Contact</h5>
            <ul class="contact-block__list list-unstyled">
              <li><a href="mailto:Mintech@7oroof.com"></a>Email: Mintech@7oroof.com</li>
              <li><a href="mailto:Mintech@7oroof.com"></a>Support: Mintech@7oroof.com</li>
            </ul>
          </div><!-- /.contact-panel__info__block -->
          <div class="contact-block contact-block-light">
            <h5 class="contact-block__title">Opening Hours</h5>
            <ul class="contact-block__list list-unstyled">
              <li>Monday - Friday</li>
              <li>8 am to 7 pm</li>
            </ul>
          </div><!-- /.contact-panel__info__block -->
          <ul class="social-icons list-unstyled mb-0 mt-20">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul><!-- /.social-icons -->
        </div><!-- /.contact-blocks-wrapper -->
      </div><!-- /.burger-menu__content -->
    </div><!-- /.burger-menu -->

    <div class="login-popup" id="login-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form">
          <h3 class="login-popup__title">Login!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-30">
            <label>Email (required)</label>
            <input type="text" class="form-control" placeholder="username">
          </div>
          <div class="form-group mb-20">
            <label>Password (required)</label>
            <input type="password" class="form-control" placeholder="password">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="custom-control custom-checkbox d-flex align-items-center">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember Me!</label>
            </div>
            <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
          </div>
          <button type="submit" class="btn btn__secondary btn__block">Login</button>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Don’t Have An Account?</span>
          <button id="go-register" class="go-register fz-14 font-weight-bold">
            <span>Register Here</span><i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>
    </div><!-- /.login-popup -->

    <div class="login-popup" id="register-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form">
          <h3 class="login-popup__title">Register!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-30">
            <label>Email (required)</label>
            <input type="text" class="form-control" placeholder="username">
          </div>
          <div class="form-group mb-20">
            <label>Password (required)</label>
            <input type="password" class="form-control" placeholder="password">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="custom-control custom-checkbox d-flex align-items-center">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">I read & agree to <a href="#">Terms &
                  Conditions</a></label>
            </div>
          </div>
          <button type="submit" class="btn btn__secondary btn__block">Register</button>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Have An Account?</span>
          <button id="go-login" class="go-login fz-14 font-weight-bold">
            <span>Login Here</span><i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>
    </div><!-- /.login-popup -->

    <div class="search-popup">
      <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
      <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="icon-search"></i></button>
      </form>
    </div><!-- /. search-popup -->

  </div><!-- /.wrapper -->

  <script src="{{asset('assets/website')}}/js/jquery-3.5.1.min.js"></script>
  <script src="{{asset('assets/website')}}/js/plugins.js"></script>
  <script src="{{asset('assets/website')}}/js/main.js"></script>
</body>

</html>

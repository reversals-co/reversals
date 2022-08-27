@extends('layouts.app')

@section('title-meta')
    <title>Home | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{ route('index') }}" />
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <section class="page-404 mt--100 py-0">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex align-items-center vh-100 error-wrapper">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h1 class="error-code">404</h1>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h2 class="error-title">Oops! That page can’t be found.</h2>
                            <p class="error-desc">The page requested couldn't be found. This could be a spelling error in
                                the
                                URL or a removed page.
                            </p>
                            <a href="index.html" class="btn btn__primary btn__icon btn__xl">
                                <span>Back To Home</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-404 -->
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
            <button type="button" class="action__btn action__btn-burgerMenu mr-30 d-none d-lg-block">
                <i class="icon-nav"></i>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/website') }}/images/logo/logo-light.png" class="logo-light" alt="logo">
                <img src="{{ asset('assets/website') }}/images/logo/logo-dark.png" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav__item has-dropdown">
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
                    <li class="nav__item has-dropdown">
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
                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
                        <ul class="dropdown-menu wide-dropdown-menu">
                            <li class="nav__item">
                                <div class="row mx-0">
                                    <div class="col-sm-6 dropdown-menu-col">
                                        <a href="it-solutions.html" class="nav__item-link dropdown-menu-title">IT
                                            Solutions</a>
                                        <ul class="nav flex-column">
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="it-solutions-single.html">IT
                                                    Management</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="it-solutions-single.html">Cyber
                                                    Security</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="it-solutions-single.html">Cloud
                                                    Computing</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="it-solutions-single.html">IT
                                                    Consulting</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="it-solutions-single.html">Software
                                                    Dev</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="it-solutions-single.html">IT Support</a>
                                            </li>
                                            <!-- /.nav-item -->
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6 dropdown-menu-col">
                                        <a href="industries.html"
                                            class="nav__item-link dropdown-menu-title">Industries</a>
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
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="industries-single-industry.html">Energy
                                                    &
                                                    Utilities</a></li> <!-- /.nav-item -->
                                            <li class="nav__item"><a class="nav__item-link"
                                                    href="industries-single-industry.html">Legal,
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
                    <li class="nav__item has-dropdown">
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
                    <li class="nav__item has-dropdown">
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
                <li>
                    <button class="action__btn action__btn-login open-login-popup">
                        <i class="icon-user"></i><span>Login</span>
                    </button>
                </li>
                <li class="d-none d-xl-block">
                    <a href="request-quote.html"
                        class="btn btn__primary btn__primary-style2 btn_ action__btn-contact">Request
                        A Quote</a>
                </li>
            </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ==========================
              404
          =========================== -->
    <section class="page-404 mt--100 py-0">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex align-items-center vh-100 error-wrapper">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h1 class="error-code">404</h1>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h2 class="error-title">Oops! That page can’t be found.</h2>
                            <p class="error-desc">The page requested couldn't be found. This could be a spelling error in
                                the
                                URL or a removed page.
                            </p>
                            <a href="index.html" class="btn btn__primary btn__icon btn__xl">
                                <span>Back To Home</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-404 -->
@endsection

@section('custom-script')
@endsection

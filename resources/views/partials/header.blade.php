<header class="header header-light header-layout2">
    <div class="topbar d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="topbar__contact d-flex flex-wrap list-unstyled mb-0">
                            <li>
                                <i class="icon-phone"></i><a href="tel:00923364634620">+92 336 4634620</a>
                            </li>
                            <li>
                                <i class="icon-envelope"></i><a href="mailto:info@reversals.co">info@reversals.co</a>
                            </li>
                            {{-- <li>
                                <i class="icon-clock"></i><a href="contact-us.html">Hours: Mon-Fri: 8am – 7pm</a>
                            </li> --}}
                        </ul>
                        <div class="d-flex">
                            <ul class="social-icons list-unstyled mb-0 mr-30">
                                <li><a href="https://www.facebook.com/reversals.co"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/reversals.co"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/reversals_co"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                            {{-- <div class="dropdown dropdown__lang">
                                <button class="dropdown-toggle" id="langDrobdown" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('assets/website') }}/images/flags/en.png"
                                        alt="en"><span>English</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="langDrobdown">
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('assets/website') }}/images/flags/fr.png"
                                            alt="fr"><span>France</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('assets/website') }}/images/flags/gr.png"
                                            alt="gr"><span>germany</span>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('assets/website') }}/images/logo/logo-light.png" class="logo-light" alt="logo">
                <img src="{{ asset('assets/website') }}/images/logo/logo-dark.png" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav__item  has-dropdown">
                        <a href="{{ route('index') }}"
                            class="nav__item-link active">Home</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item  has-dropdown">
                        <a href="{{ route('about-us') }}"
                            class="nav__item-link">About Us</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item  has-dropdown">
                        <a href="{{ route('services.index') }}" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services</a>
                        <ul class="dropdown-menu">

                            <li class="nav__item">
                                <a href="{{ route('services.show') }}" class="nav__item-link">Web Development</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="{{ route('services.show') }}" class="nav__item-link">Content Writing</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="{{ route('services.show') }}" class="nav__item-link">Graphic Designing</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="{{ route('services.show') }}" class="nav__item-link">Socual Media Management</a>
                            </li><!-- /.nav-item -->

                            <li class="nav__item">
                                <a href="{{ route('services.show') }}" class="nav__item-link">UI/UX Designing</a>
                            </li><!-- /.nav-item -->

                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->

                    {{-- <li class="nav__item  has-dropdown">
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
                    </li><!-- /.nav-item --> --}}

                    <li class="nav__item">
                        <a href="{{ route('pricing') }}" class="nav__item-link">Price & Plans</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item">
                        <a href="{{ route('blogs.index') }}" class="nav__item-link">Blogs</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item">
                        <a href="{{ route('contact-us') }}" class="nav__item-link">Contact Us</a>
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

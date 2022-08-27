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
    <section class="page-title page-title-layout12 bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/4.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
              <span class="pagetitle__subheading">Trusted By The World's Best Organizations</span>
              <h1 class="pagetitle__heading">Solutions to keep your business safe & ensure high availability.</h1>
              <a href="{{ route('contact-us') }}" class="btn btn__primary btn__icon btn__xl mx-3">
                <span>More About Us</span><i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.col-xl-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ========================
        About Layout 5
      =========================== -->
      <section class="about-layout5 pt-130 pb-130">
        <div class="container">
          <div class="row heading-layout2">
            <div class="col-12">
              <h2 class="heading__subtitle color-body">Nationwide Service, Local Expertise</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <h3 class="heading__title mb-30">Our technology allows you to offer the <span class="underlined-text">latest
                  software</span> to your possible customers!
              </h3>
            </div><!-- /.col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 offset-xl-1">
              <div class="about__Text">
                <p>Improve efficiency, leverage tech, and provide better customer experiences with the modern technology
                  services available allover the world. Our skilled personnel, utilising the latest processing software,
                  combined with decades of experience.</p>
              </div>
              <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40 mb-30">
                <li>Eliminate Repeat Entry</li>
                <li>Simpliy Communication</li>
                <li>Drive Business Process</li>
                <li>Speed Up Transactions</li>
                <li>Structure Data & Docs</li>
                <li>Automate Workflows</li>
              </ul>
              <img src="{{ asset('assets/website') }}/images/about/singnture.png" alt="singnture">
            </div><!-- /.col-xl-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About Layout 5 -->

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
                  <p class="heading__desc">Provide users with appropriate view and access permissions to requests,
                    problems,
                    changes, contracts, assets, solutions, and reports with our experienced professionals.
                  </p>
                  <p class="heading__desc">As one of the world's largest ITService Providers, our deep pool of certified
                    engineers and IT staff are ready to help.
                  </p>
                </div><!-- /.heading -->
                <div class="d-flex align-items-center">
                  <a href="{{ route('pricing') }}" class="btn btn__white btn__bordered btn__hi mr-30">Pricing & Plans</a>
                  <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <span class="video__player-animation"></span>
                      <span class="video__player-animation video__player-animation-2"></span>
                      <i class="fa fa-play"></i>
                    </div>
                    <span class="video__btn-title color-white">Play Video</span>
                  </a>
                </div>
                <div class="client-story mt-150">
                  <img src="{{ asset('assets/website') }}/images/clients/6.png" alt="signature" class="client__logo mb-30">
                  <p class="client__quote">“We never knew the importance of IT help desk ticketing software until we got
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
                <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <h4 class="contact-panel__title">Request A Quote</h4>
                    </div> <!-- /.col-lg-12 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="contact-name">Name (required)</label>
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="contact-email">Email (required)</label>
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
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
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone">
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <label for="contact-message">Additional Details (optional)</label>
                        <textarea class="form-control" placeholder="Describe your inquirey!" id="contact-message"
                          name="contact-message"></textarea>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                        <input type="checkbox" class="custom-control-input" id="terms">
                        <label class="custom-control-label" for="terms">I accept the privacy and terms.</label>
                      </div>
                      <button type="submit" class="btn btn__secondary btn__xl btn__block">Submit Request </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
              </div>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout 1 -->

      <!-- =========================
        Awards
        =========================== -->
      <section id="awards" class="awards">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
              <div class="heading-layout2">
                <h3 class="heading__title mb-50">Our awards and<br> recognitions</h3>
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
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <a href="{{ route('contact-us') }}" class="btn btn__primary btn__link">
                <span>Get Started</span><i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Awards -->

@endsection

@section('custom-script')
@endsection

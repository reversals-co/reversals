@extends('layouts.app')

@section('title-meta')
    <title>Home | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{ route('index') }}" />
@endsection

@section('custom-css')
@endsection

@section('page-content')

    {{-- Google Map --}}
    <section class="google-map py-0">
        <div id="map" style="height: 500px;"></div>
        <script src="{{ asset('assets/website') }}/js/google-map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{config('services.google_map.api_key')}}&callback=initMap" async defer></script>
        <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    {{-- contact us form --}}
    <section class="contact-layout1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <form class="contact-panel__form" method="post" action="{{ route('contact-us.store') }}" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">Get In Touch</h4>
                            </div>
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
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                        name="contact-email" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="contact-Phone">Phone (required)</label>
                                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                        name="contact-phone" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="contact-website">Website (optional)</label>
                                    <input type="text" class="form-control" placeholder="Website (optional)"
                                        id="contact-website" name="contact-website">
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <label for="contact-message">Additional Details (optional)</label>
                                    <textarea class="form-control" placeholder="Describe your inquirey!" id="contact-message" name="contact-message"></textarea>
                                </div>
                                <div class="custom-control custom-checkbox d-flex align-items-center  mb-20">
                                    <input type="checkbox" class="custom-control-input" id="terms" name="contact-terms">
                                    <label class="custom-control-label" for="terms">I accept the privacy and
                                        terms.</label>
                                </div>
                                <button type="submit" class="btn btn__secondary btn__block ">Submit Request</button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.col-lg-6 -->

                <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                    <div class="contact-panel__info bg-overlay bg-overlay-primary">
                        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/contact/1.jpg" alt="banner">
                        </div>
                        <div class="contact-block">
                            <h5 class="contact-block__title">Our Location</h5>
                            <ul class="contact-block__list list-unstyled">
                                <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                            </ul>
                        </div><!-- /.contact-panel__info__block -->
                        <div class="contact-block">
                            <h5 class="contact-block__title">Quick Contact</h5>
                            <ul class="contact-block__list list-unstyled">
                                <li><a href="mailto:Mintech@7oroof.com"></a>Email: Mintech@7oroof.com</li>
                                <li><a href="mailto:Mintech@7oroof.com"></a>Support: Mintech@7oroof.com</li>
                            </ul>
                        </div><!-- /.contact-panel__info__block -->
                        <div class="contact-block">
                            <h5 class="contact-block__title">Opening Hours</h5>
                            <ul class="contact-block__list list-unstyled">
                                <li>Monday - Friday</li>
                                <li>09:00 AM - 06:00 PM</li>
                            </ul>
                        </div><!-- /.contact-panel__info__block -->
                        <a href="{{ route('contact-us') }}" class="btn btn__white btn__bordered btn__icon btn__xl">
                            <span>Find Your Solution</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

    {{-- Office Adresses --}}
    {{-- <section class="contact-info pt-0 pb-70">
        <div class="container">
            <div class="row">
                <!-- Contact panel #1 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="contact-info-box">
                        <h4 class="contact__info-box-title">London Office</h4>
                        <ul class="contact__info-list list-unstyled">
                            <li>Email: <a href="mailto:Mintech@7oroof.com">Mintech@7oroof.com</a></li>
                            <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                            <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                        </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                </div><!-- /.col-lg-4 -->
                <!-- Contact panel #2 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="contact-info-box">
                        <h4 class="contact__info-box-title">Berlin Office</h4>
                        <ul class="contact__info-list list-unstyled">
                            <li>Email: <a href="mailto:Mintech@7oroof.com">Mintech@7oroof.com</a></li>
                            <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                            <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                        </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                </div><!-- /.col-lg-4 -->
                <!-- Contact panel #3 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="contact-info-box">
                        <h4 class="contact__info-box-title">Manchester Office</h4>
                        <ul class="contact__info-list list-unstyled">
                            <li>Email: <a href="mailto:Mintech@7oroof.com">Mintech@7oroof.com</a></li>
                            <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                            <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                        </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Contact Info --> --}}
@endsection

@section('custom-script')
    <script src="{{ asset('assets/website') }}/js/google-map.js"></script>
@endsection

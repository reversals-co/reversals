@extends('layouts.app')

@section('title-meta')
    <title>Home | {{ config('app.name') }} </title>
    <meta name="description" content="this is description">
    <link rel="canonical" href="{{ route('index') }}" />
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <section class="page-title page-title-layout5 bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/website') }}/images/page-titles/5.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                    <span class="pagetitle__subheading">Suitable For Small To Midsize Businesses</span>
                    <h1 class="pagetitle__heading mb-0">Effective & Flexible Pricing That Adapts Your Needs</h1>
                </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="pricing pt-0 bg-gray">
        <div class="container">
            <div class="row row-no-gutter pricing-wrapper">
                <!-- pricing item #1-->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="pricing-item">
                        <div>
                            <div class="pricing-item__header">
                                <div class="pricing-item__price">
                                    <span class="pricing-item__currency">$</span><span>50</span><span
                                        class="pricing-item__time">/Monthly</span>
                                </div>
                                <h5 class="pricing-item__title mb-0">Starter Plan</h5>
                            </div><!-- /.pricing-item__header  -->
                            <div class="pricing-item__content">
                                <p class="pricing-item__desc">Fast project turnaround time, substantial cost savings &
                                    quality
                                    standards.
                                </p>
                                <ul class="pricing-item__list list-items list-items-layout2 list-unstyled">
                                    <li>Five Brand Monitors</li>
                                    <li>Five Keyword Monitors</li>
                                    <li>Full Social Profiles</li>
                                </ul>
                            </div><!-- /.pricing-item__content  -->
                        </div>
                        <div class="pricing-item__footer">
                            <a href="#" class="btn btn__secondary btn__block btn__icon">
                                <span>Purchase Now</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.pricing-item__footer  -->
                    </div><!-- /.pricing-item -->
                </div><!-- /.col-lg-4 -->
                <!-- pricing item #2-->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="pricing-item">
                        <div>
                            <div class="pricing-item__header">
                                <div class="pricing-item__price">
                                    <span class="pricing-item__currency">$</span><span>70</span><span
                                        class="pricing-item__time">/Monthly</span>
                                </div>
                                <h5 class="pricing-item__title mb-0">Basic Plan</h5>
                            </div><!-- /.pricing-item__header  -->
                            <div class="pricing-item__content">
                                <p class="pricing-item__desc">Fast project turnaround time, substantial cost savings &
                                    quality
                                    standards.
                                </p>
                                <ul class="pricing-item__list list-items list-items-layout2 list-unstyled">
                                    <li>Five Brand Monitors</li>
                                    <li>Five Keyword Monitors</li>
                                    <li>Full Social Profiles</li>
                                    <li>500 Search Results </li>
                                </ul>
                            </div><!-- /.pricing-item__content  -->
                        </div>
                        <div class="pricing-item__footer">
                            <a href="#" class="btn btn__primary btn__block btn__icon">
                                <span>Purchase Now</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.pricing-item__footer  -->
                    </div><!-- /.pricing-item -->
                </div><!-- /.col-lg-4 -->
                <!-- pricing item #3-->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="pricing-item">
                        <div>
                            <div class="pricing-item__header">
                                <div class="pricing-item__price">
                                    <span class="pricing-item__currency">$</span><span>90</span><span
                                        class="pricing-item__time">/Monthly</span>
                                </div>
                                <h5 class="pricing-item__title mb-01">Advanced Plan</h5>
                            </div><!-- /.pricing-item__header  -->
                            <div class="pricing-item__content">
                                <p class="pricing-item__desc">Fast project turnaround time, substantial cost savings &
                                    quality
                                    standards.
                                </p>
                                <ul class="pricing-item__list list-items list-items-layout2 list-unstyled">
                                    <li>Five Brand Monitors</li>
                                    <li>Five Keyword Monitors</li>
                                    <li>Basic Quota </li>
                                    <li>PDF reports</li>
                                    <li>Full Social Profiles</li>
                                    <li>500 Search Results </li>
                                </ul>
                            </div><!-- /.pricing-item__content  -->
                        </div>
                        <div class="pricing-item__footer">
                            <a href="#" class="btn btn__secondary btn__block btn__icon">
                                <span>Purchase Now</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.pricing-item__footer  -->
                    </div><!-- /.pricing-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center align-items-center mt-10">
                    <a href="{{ route('contact-us') }}" class="btn btn__secondary btn__bordered mx-3">Find Your Solution</a>
                    <a href="{{ route('services.index') }}" class="btn btn__primary btn__link mx-3">
                        <span>Explore All Services</span><i class="icon-arrow-right icon-outlined"></i>
                    </a>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.pricing  -->

    <section class="faq pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <h2 class="heading__subtitle color-body">Pricing Features</h2>
                        <h3 class="heading__title">Frequently asked questions</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row" id="accordion">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse1">
                            <a class="accordion-item__title" href="#">Which Plan Is Right For Me?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse1" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                            <a class="accordion-item__title" href="#">Do I have to commit to a contract?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse2" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item opened">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                            <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse3" class="collapse show" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse4">
                            <a class="accordion-item__title" href="#">What if I pick the wrong plan?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse4" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse5">
                            <a class="accordion-item__title" href="#">Any contracts or commitments?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse5" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse6">
                            <a class="accordion-item__title" href="#">What are my payment options?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse6" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse7">
                            <a class="accordion-item__title" href="#">How does the free trial work?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse7" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse8">
                            <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse8" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse9">
                            <a class="accordion-item__title" href="#">How does the free trial work?</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse9" class="collapse" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                    <div class="accordion-item opened">
                        <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse10">
                            <a class="accordion-item__title" href="#">If I have questions, where can I find answers?
                            </a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse10" class="collapse show" data-parent="#accordion">
                            <div class="accordion-item__body">
                                <p>With any financial product that you buy, it is important that you know you are getting
                                    the best
                                    advice from a reputable company as often</p>
                            </div><!-- /.accordion-item-body -->
                        </div>
                    </div><!-- /.accordion-item -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.FAQ -->
@endsection

@section('custom-script')
@endsection

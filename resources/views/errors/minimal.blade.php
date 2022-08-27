<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <div class="wrapper">
        <section class="page-404 py-0">
            <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/1.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 d-flex align-items-center vh-100 error-wrapper">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h1 class="error-code">@yield('code')</h1>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h2 class="error-title">@yield('title')</h2>
                                <p class="error-desc">@yield('message')
                                </p>
                                <a href="{{ route('index') }}" class="btn btn__primary btn__icon btn__xl">
                                    <span>Back To Home</span> <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-404 -->

    </div><!-- /.wrapper -->

    @include('partials.script')
</body>

</html>

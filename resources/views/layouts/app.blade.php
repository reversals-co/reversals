<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
        </div><!-- /.preloader -->

        @include('partials.header')

        @yield('page-content')

        @include('partials.footer')

        @include('partials.sidebar')

        <div class="search-popup">
            <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
            <form class="search-popup__form">
                <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
                <button class="search-popup__btn"><i class="icon-search"></i></button>
            </form>
        </div><!-- /. search-popup -->

        @include('partials.script')

        @yield('custom-script')

    </div>
</body>

</html>

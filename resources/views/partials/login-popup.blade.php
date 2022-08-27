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

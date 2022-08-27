<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Mintech  IT Solutions &  Services Template">
    <link href="{{ asset('assets/website') }}/images/favicon/favicon.png" rel="icon">
    <title>Mintech IT Solutions & Services Template</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/libraries.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/style.css">
</head>

<body>
    <div class="wrapper">

        <!-- ==========================
        coming soon
    =========================== -->
        <section class="coming-soon py-0">
            <div class="bg-img"><img src="{{ asset('assets/website') }}/images/banners/2.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 d-flex align-items-center vh-100 error-wrapper">
                        <div>
                            <h2 class="error-title">Easy Solutions
                                For IT problems!</h2>
                            <p class="error-desc mb-50">We are experienced professionals who understand that It services
                                is changing,
                                and
                                are true partners who care about your success. Our team provides a consultative approach
                                on emerging
                                technology.
                            </p>
                            <form class="subscribe-form d-flex" id="contactForm" method="post"
                                action="assets/php/contact.php">
                                <input type="email" class="form-control mr-20" placeholder="Your Email Address"
                                    id="contact-email" name="contact-email" required>
                                <button type="submit" class="btn btn__primary">Subscribe</button>
                            </form>
                            <div class="contact-result"></div>
                        </div>
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.coming-soon -->


    </div><!-- /.wrapper -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

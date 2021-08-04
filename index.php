<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Papaska">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta property="og:url" content="agency.site" />
    <meta property="og:type" content="" /> <!-- article... -->
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/Fonts.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Media.css">

    <title>Agency</title>
</head>

<body>
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>

    <header class="navbar navbar-expand-lg navbar-light">
        <div class="container-header">
            <div>
                <a class="navbar-brand" href="/"><img src="images/Logo.svg" alt="logo"></a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse w-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section class="intro container-main">

        <div class="intro__main">
            <h1 class="h1">Go digital with us</h1>
            <p class="desc">We have designed hundreds of websites and helped improve their online performance through
                SEO, <br>SEM and Social Media Marketing</p>
            <a href="/" class="button-teks btn">See Portofolio</a>
        </div>

        <div class="intro__card position-relative d-none d-sm-block">
            <div class="intro__card__overlay position-absolute"></div>

            <div>
                <h2 class="h2">We are experienced</h2>
                <p class="desc">We have been around for a long time since 2010, thousands of products have been created, we are <br> always here to provide new innovations for you</p>
                <a href="/" class="position-absolute"><img src="/images/Arrow.svg" alt="arrow"></a>
            </div>
        </div>
    </section>

    <section class="client container-main text-center">
        <h2 class="h2">Client</h2>
        <p class="desc">Using Our Experience To Make Your Digital Experience Brighter</p>
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <img src="/images/client/microsoft.png" alt="microsoft">
            <img src="/images/client/google.png" alt="google">
            <img src="/images/client/amazon.png" alt="amazon">
        </div>
    </section>

    <section class="services position-relative container-main">
        <div class="position-absolute services__overlay"></div>
        <div class="float-right w-50">
            <p class="desc">Who We Help</p>
            <h2 class="h2">Specific challenges require specific solutions</h2>
            <p class="desc">Some of the industries our digital agency specialises in</p>
            <div class="d-flex flex-wrap">
                <?php
                    $name = ['Web & Mobile Apps', 'Design Services', 'SEO', 'Security Tester'];
                    for($i = 0; $i < 4; $i++):
                ?>
                    <div>
                        <div class="d-flex align-items-center">
                            <img src="/images/services/<?php echo $i; ?>.svg" alt="icon">
                            <p class="my-auto"><?php echo $name[$i]; ?></p>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>


    <noscript>You have JavaScript disabled, please enable it</noscript>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="js/script.js" async></script>
</body>

</html>
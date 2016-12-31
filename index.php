<!DOCTYPE html>

<html lang="en">
<head>
    <?php
    include_once('scripts/lang.php');
    $base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
    $lang = translate();
    if (!isset($_COOKIE['language'])) {
        $language = 'en';
    } else {
        $language = $_COOKIE['language'];
    }


    ?>
    <!-- Html Page Specific -->
    <meta charset="utf-8">
    <title><?php echo $lang[$language]['title'] ?></title>
    <meta name="description" content="Nursify - Act fast, save lives">
    <meta name="author" content="Nursify">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/simple-line-icons.css"/>
    <link rel="stylesheet" href="css/icomoon-soc-icons.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/settings.css"/>

    <!-- Favicons -->
    <link rel='icon' type='image/x-icon' href="images/favicon.ico"/>
    <link rel="apple-touch-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body data-spy="scroll" data-target=".navMenuCollapse">

<div id="wrap">

    <!-- NAVIGATION BEGIN -->
    <nav class="navbar navbar-fixed-top navbar-slide">
        <div class="container_fluid">
            <a class="navbar-brand goto" href="index.php#wrap">
                <img src="./images/logo_nav.png" alt="Nursify logo" height="40" width="40"/> </a>
            <select class="language">
                <option value="en"><?php echo $lang[$language]['select_language'] ?></option>
                <option value="en">English</option>
                <option value="el">Ελληνικά</option>
            </select>
            <a class="contact-btn icon-envelope" data-toggle="modal" data-target="#modalContact"></a>
            <button class="navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse"
                    data-target=".navMenuCollapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span></button>
            <div class="collapse navbar-collapse navMenuCollapse">
                <ul class="nav">
                    <li><a href="#benefits1"><?php echo $lang[$language]['about_nursify'] ?></a></li>
                    <li><a href="#screenshots"><?php echo $lang[$language]['the_app'] ?></a></li>
                    <li><a href="#testimonials"><?php echo $lang[$language]['said_about_us'] ?></a></li>
                    <li><a href="#social"><?php echo $lang[$language]['stay_tuned'] ?></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVIGAION END -->

    <!-- INTRO BEGIN -->
    <header id="full-intro" class="intro-block bg-color-main">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12"><img class="logo" src="./images/logo.png" alt="Nursify Logo"
                                                     height="144"
                                                     width="144"/>
                    <h1 class="slogan"><?php echo $lang[$language]['title'] ?></h1>
                    <a class="download-btn-alt android-btn" target="_blank"
                       href="https://play.google.com/store/apps/details?id=co.figata.nursify"> <i
                                class="icon soc-icon-android"></i><?php echo $lang[$language]['download_for'] ?> <b>Android</b>
                    </a></div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <img class="intro-screen" src="images/intro_screen.png" width="400" alt=""/>
                </div>
            </div>
        </div>
        <div class="block-bg" data-stellar-ratio="0.4"></div>
    </header>
    <!-- INTRO END -->

    <!-- BENEFITS1 BEGIN -->
    <section id="benefits1" class="img-block-2col">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="title">
                        <h2><?php echo $lang[$language]['about_nursify_uppercase'] ?></h2>
                    </div>
                    <ul class="item-list-left">
                        <li><i class="icon icon-info color"></i>
                            <h4 class="color"><?php echo $lang[$language]['what_is_nursify'] ?></h4>
                            <p>
                                <?php echo $lang[$language]['what_is_nursify_message'] ?>
                            </p>
                        </li>
                        <li><i class="icon icon-like color"></i>
                            <h4 class="color"><?php echo $lang[$language]['how_it_works'] ?></h4>
                            <p><?php echo $lang[$language]['how_it_works_message'] ?></p>
                        </li>
                        <li><i class="icon icon-hourglass color"></i>
                            <h4 class="color"><?php echo $lang[$language]['what_next'] ?></h4>
                            <p><?php echo $lang[$language]['what_next_message'] ?></p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <div class="screen-couple-right wow fadeInRightBig">
                        <div class="flare"><img class="base wow" src="images/flare_base.png" alt=""/> <img
                                    class="shapes wow" src="images/flare_shapes.png" alt=""/></div>
                        <img class="screen above" src="images/screen_couple_above.png" alt="" width="250"/> <img
                                class="screen beyond wow fadeInRight" data-wow-delay="0.5s"
                                src="images/screen_couple_beyond.png" alt="" width="210"/></div>
                </div>
            </div>
        </div>
    </section>
    <!-- BENEFITS1 END -->

    <!-- VIDEO BEGIN -->
    <section id="video">
        <div class="container">
            <div class="title">
                <h2><?php echo $lang[$language]['how_to'] ?></h2>
                <p><?php echo $lang[$language]['demo'] ?></p>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/uZ8iLs0K7AI" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- VIDEO END -->

    <!-- SCREENSHOTS BEGIN -->
    <section id="screenshots" class="bg-color2">
        <div class="container-fluid">
            <h2><?php echo $lang[$language]['the_app_uppercase'] ?></h2>
            <div id="screenshots-slider" class="owl-carousel">

                <a class="item" href="./images/screen1.png"
                   title="Nursify - <?php echo $lang[$language]['main_screen'] ?>"><img src="images/screen1.png"
                                                                                        alt="screen1" width="250"
                                                                                        height="444"/></a>

                <a class="item" href="./images/screen2.png" title="Nursify - <?php echo $lang[$language]['history'] ?>"><img
                            src="images/screen2.png"
                            alt="screen1" width="250"
                            height="444"/></a>

                <a class="item" href="./images/screen3.png"
                   title="Nursify - <?php echo $lang[$language]['settings'] ?>"><img src="images/screen3.png"
                                                                                     alt="screen1" width="250"
                                                                                     height="444"/></a>

                <a class="item" href="./images/screen4.png"
                   title="Nursify - <?php echo $lang[$language]['volunteer_notification'] ?>"><img
                            src="images/screen4.png" alt="screen1" width="250" height="444"/></a>
            </div>
        </div>
    </section>
    <!-- SCREENSHOTS END -->

    <!-- TESTIMONIALS BEGIN -->
    <section id="testimonials" class="bg-color3">
        <div class="container-fluid">
            <h2><?php echo $lang[$language]['said_about_us_uppercase'] ?></h2>
            <div id="testimonials-slider" class="owl-carousel">
                <div class="item container">
                    <div class="talk"><?php echo $lang[$language]['maxmag_title'] ?>
                    </div>
                    <a href="http://www.maxmag.gr/synenteukseis/nursify/" target="_blank"><img class="photo"
                                                                                               src="images/maxmag.jpg"
                                                                                               alt="maxmag"/></a>
                    <div class="name">maxmag.gr</div>
                </div>
                <div class="item container">
                    <div class="talk"><?php echo $lang[$language]['ipop_title'] ?>
                    </div>
                    <a href="http://ipop.gr/themata/eimai/nursify-app-pou-sozi-zoes-m-ena-klik-lamvanis-protes-voithies-se-chrono-dt/"
                       target="_blank"><img class="photo" src="images/ipop.jpg" alt="ipop"/></a>
                    <div class="name">ipop.gr</div>
                </div>
                <div class="item container">
                    <div class="talk"><?php echo $lang[$language]['ka-bussiness_title'] ?>
                    </div>
                    <a href="http://www.ka-business.gr/pages/innovation/13618/mia-prwtoporiakh-efarmogh-poy-parexei-prwtes-bohtheies"
                       target="_blank"><img class="photo" src="images/ka-bussiness.jpg" alt="ka-business"/></a>
                    <div class="name">ka-business.gr</div>
                </div>
            </div>
        </div>
        <div class="block-bg"></div>
    </section>
    <!-- TESTIMONIALS END -->

    <!-- SOCIAL BEGIN -->
    <section id="social" class="bg-color2">
        <div class="container-fluid">
            <div class="title">
                <h2><?php echo $lang[$language]['stay_tuned_uppercase'] ?></h2>
                <p><?php echo $lang[$language]['social_networks'] ?></p>
            </div>
            <ul class="soc-list wow flipInX">
                <li><a href="https://twitter.com/nursify_health" target="_blank"><i
                                class="icon soc-icon-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/nursify/" target="_blank"><i
                                class="icon soc-icon-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/company/nursify" target="_blank"><i
                                class="icon soc-icon-linkedin"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- SOCIAL END -->

    <!-- DOWNLOAD BEGIN -->
    <section id="download" class="bg-color-main">
        <div class="container-fluid wow fadeInDown"><a href="#wrap" class="goto">
                <h2><i class="icon soc-icon-android"></i><?php echo $lang[$language]['download_app'] ?></h2>
            </a></div>
        <div class="block-bg" data-stellar-ratio="0.5"></div>
    </section>
    <!-- DOWNLOAD END -->

    <!-- FOOTER BEGIN -->
    <footer id="footer">
        <div class="container"><a href="index.php#wrap" class="logo goto"> <img src="./images/logo_small.png"
                                                                                alt="Your Logo" height="72"
                                                                                width="72"/> </a>
            <p class="copyright">&copy; 2017 Nursify</p>
        </div>
    </footer>
    <!-- FOOTER END -->

</div>

<!-- contact modal-->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title"><?php echo $lang[$language]['contact'] ?></h3>
            <form action="scripts/contact.php" role="form" id="contact_form">
                <div class="form-group">
                    <input type="text" class="form-control" id="contact_name"
                           placeholder="<?php echo $lang[$language]['full_name'] ?>" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="contact_email"
                           placeholder="<?php echo $lang[$language]['email_address'] ?>"
                           name="email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="<?php echo $lang[$language]['message'] ?>"
                              id="contact_message"
                              name="message"></textarea>
                </div>
                <button type="submit" id="contact_submit" data-loading-text="&bull;&bull;&bull;"><i
                            class="icon icon-paper-plane"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- MODALS END-->

<!-- JavaScript -->
<script src="scripts/jquery-1.8.2.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/owl.carousel.min.js"></script>
<script src="scripts/jquery.validate.min.js"></script>
<script src="scripts/wow.min.js"></script>
<script src="scripts/smoothscroll.js"></script>
<script src="scripts/jquery.smooth-scroll.min.js"></script>
<script src="scripts/jquery.superslides.min.js"></script>
<script src="scripts/placeholders.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/jquery.stellar.min.js"></script>
<script src="scripts/custom.js"></script>

<script src="scripts/retina.min.js"></script>

<link rel="stylesheet" type="text/css"
      href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function () {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#000"
                },
                "button": {
                    "background": "#f1d600"
                }
            }
        })
    });

    $('.language').on('change', function () {
        var lang = $(this).val();

        $.ajax({
            url: '<?php echo $base_url ?>scripts/cookie.php',
            data: {'language': lang},
            type: 'post',
            ContentType: 'application/json',
            dataType: 'json',
            success: function (output) {
                console.log(output);
                location.reload();
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });
    });
</script>

</body>
</html>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Hampstead - The King William IV Pub & Rooms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <base href="/">
</head>

<body>
    <div class="loader"><img src="images/loader.png" alt=""></div>
    <!--================= main start ================-->
    <div id="main">
        <!--=============== header ===============-->
        <header>
            <div class="header-inner">
                <div class="container">
                    <!--navigation social links-->
                    <div class="nav-social">
                        <ul>
                            <?php include 'includes/socials.html'; ?>
                        </ul>
                    </div>
                    <!--logo-->
                    <!--         
                        <div class="logo-holder">
                            <a href="index.html">
                            <img src="images/logo.png" class="respimg logo-vis" alt="">
                            <img src="images/logo2.png" class="respimg logo-notvis" alt="">
                            </a>
                        </div>
                        -->
                    <!--Navigation -->
                    <div class="nav-holder">
                        <nav class="scroll-nav">
                            <ul>
                                <li><a href="#sec1" class="act-link">Home</a></li>
                                <li><a href="#sec2">About</a></li>
                                <li><a href="#sec3">Events</a></li>
                                <li><a href="#sec4">Menu</a></li>
                                <li><a href="#sec5">Gallery</a></li>
                                <li><a href="#sec6">Visit Us</a></li>
                                <li><a href="hotel.php" class="external">Hotel</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->
        <!--=============== wrapper ===============-->
        <div id="wrapper">
            <!--=============== Hero content ===============-->
            <div class="content full-height hero-content" id="sec1">
                <div class="slideshow-container">
                    <!-- parallax image -->
                    <div class="media-container" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                        <div class="bg" style="background-image: url(images/bg/bg_hotel_3.jpg)"></div>
                    </div>
                    <div class="hero-title-holder">
                        <div class="overlay"></div>
                        <div class="hero-title">
                            <div class="hero-decor b-dec">
                                <div class="half-circle"></div>
                            </div>
                            <div class="separator color-separator"></div>
                            <h3>The King William IV<br/>Pub & Rooms</h3>
                            <h4>Hampstead's Favourite Pub</h4>
                        </div>
                    </div>
                    <div class="hero-link">
                        <a class="custom-scroll-link" href="#sec2"><i class="fa fa-angle-double-down"></i></a>
                    </div>
                </div>
            </div>
            <!--hero end-->
            <div class="content">
                <!--=============== About ===============-->
                <section class="about-section" id="sec2">
                    <div class="container">
                        <div class="row about-row">
                            <!--about text-->
                            <div class="col-md-6">
                                <div class="section-title">
                                    <h3>Our story</h3>
                                    <h4 class="decor-title">The King William IV Pub</h4>
                                </div>
                                <p>The King William IV is a historic grade II listed coaching inn from 1767. Previously known as the King’s Head, the coronation of King William IV led to the pub being renamed in 1830. King William IV liked to frequent the area and we can understand why. </p>
                                <p>The walls of the pub are adorned with pictures of the many famous artists, singers, actors, and writers who have chosen to make Hampstead their home.</p>
                                <p>Legendary Irish publican, Jimmy McGrath, who has been running pubs in London since the 1960s, is the current landlord.</p>
                                <p>Jimmy took over the pub in 2015 (it was previously a famous gay pub).</p>
                                <p>With the help of his family, they welcome everyone.</p>
                                <p></p>
                            </div>
                            <!-- about images-->
                            <div class="col-md-6">
                                <div class="single-slider-holder">
                                    <div class="customNavigation">
                                        <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                        <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    </div>
                                    <?php include 'includes/pub_gallery.html'; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row about-row bottom-align">
                            <!--about text row 2-->
                            <div class="col-md-6">
                                <p></p>
                                <div class="section-title">
                                    <h4 class="decor-title">Crêpes & Cats</h4>
                                </div>
                                <p>Two lively black cats (Willy and Lily) live on the premises.</p>
                                <p>The crêpe stall outside is run by a man called Tom Jones –<br/>as Jimmy will tell you, that’s not unusual.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="section-title">
                                    <h4 class="decor-title">Kitchen</h4>
                                </div>
                                <p>Traditional pub fare and a fine roast on Sunday,<br/>cooked by Slawek.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--=============== parallax section  ===============-->
                <section class="parallax-section" id="sec3">
                    <div class="bg bg-parallax" style="background-image:url(images/bg/bg_hotel_4.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <h2>What's Happening</h2>
                        <h3>Live Music and Events</h3>
                    </div>
                </section>
                <!--section end-->
                <!--=============== what's happening ===============-->
                <section>
                    <div class="triangle-decor"></div>
                    <div class="container">
                        <div class="row happening-row">
                            <div class="col-md-6">
                                <?php include 'includes/whats_on.html'; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="section-title">
                                    <img src="images/quiz_ad.jpg" class="quiz-image" alt="" />
                                </div>
                            </div>
                        </div>
                </section>
                <!--section end-->
                <!--=============== menu ===============-->
                <section class="parallax-section" id="sec4">
                    <div class="bg bg-parallax" style="background-image:url(images/food/bg_food_1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <h2>Our menu</h2>
                        <a class="custom-scroll-link link" target="_blank" rel="noopener noreferrer" href="pub_menu/menu.pdf">full menu</a>
                    </div>
                </section>
                <!--section end-->
                <section>
                    <div class="triangle-decor"></div>
                    <div class="container">
                        <?php include 'pub_menu/mains_split.html'; ?>
                        <div class="bold-separator">
                            <span></span>
                        </div>
                        <!-- choice here, either use desserts.html or others.html -->
                        <?php /* include 'pub_menu/others.html'; */ ?>
                        <!--<div class="bold-separator">
                                <span></span>
                            </div>-->
                        <div class="menu-link">
                            <a class="custom-scroll-link link" target="_blank" rel="noopener noreferrer" href="pub_menu/menu.pdf">See our full menu</a>
                        </div>
                    </div>
                </section>
                <section class="parallax-section" id="sec5">
                    <div class="bg bg-parallax" style="background-image:url(images/bg/bg_hotel_1.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <h2>Gallery</h2>
                        <h3></h3>
                    </div>
                </section>
                <!-- NH original gallery went here, now moved out to optional_gallery.html -->
                <!-- NEW INSTAGRAM SECTION -->
                <section class="instagram-section">
                    <div class="triangle-decor"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="insta-link">
                                    <a href="https://www.instagram.com/thekingwillie_/" target="_blank">
                                        <img src="images/instagram_icon.png" alt="Google" class="instagram-icon"> Follow us on Instagram
                                    </a>
                                </p>
                                <div class="instagram-wrapper">
                                    <!-- LightWidget WIDGET -->
                                    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/9708b7478a8f5ca884369888a363fe4d.html?v=5" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--=============== contacts ===============-->
                <section class="parallax-section" id="sec6">
                    <div class="bg bg-parallax" style="background-image:url(images/bg/bg_hotel_6.jpg)" data-top-bottom="transform: translateY(220px);" data-bottom-top="transform: translateY(-220px);"></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <h2>Visit Us</h2>
                        <div class="bold-separator">
                            <span></span>
                        </div>
                        <div class="work-time">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Mon to Thurs</h3>
                                    <div class="hours">
                                        11:00 - 23:00
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3>Friday & Saturday</h3>
                                    <div class="hours">
                                        11:00 - 24:00
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3>Sunday</h3>
                                    <div class="hours">
                                        12:00 - 23:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="triangle-decor"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h3>Our location</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-details">
                                    <h4 style="float:none; text-align:center;">King William IV Pub</h4>
                                    <ul>
                                        <li>
                                            <p style="float:none; text-align:center;">77 Hampstead High St, London NW3 1RE</p>
                                        </li>
                                        <li>
                                            <p style="float:none; text-align:center;">0207 435 5153</p>
                                        </li>
                                        <li>
                                            <p style="float:none; text-align:center;">pub@kingwilliamhampstead.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="no-padding">
                    <div class="map-box">
                        <div class="map-holder">
                            <div id="map-canvas"></div>
                        </div>
                    </div>
                </section>
                <!--=============== testimonials ===============-->
                <section class="parallax-section">
                    <div class="bg bg-parallax" style="background-image:url(images/bg/bg_hotel_2.jpg)" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <h2>Testimonials</h2>
                        <h3>What they said about us</h3>
                        <div class="bold-separator">
                            <span></span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonials-holder">
                                    <div class="customNavigation">
                                        <a class="prev-slide transition"><i class="fa fa-long-arrow-left"></i></a>
                                        <a class="next-slide transition"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                    <div class="testimonials-slider owl-carousel" id="testimonials-slider"></div>
                                </div>
                            </div>
                        </div>
                        <p class="reviews-link">
                            <a href="https://maps.app.goo.gl/H5wRJcvgrt4ACtNVA" target="_blank">
                                <img src="images/google_icon.png" alt="Google" class="google-icon"> Read more reviews on Google
                            </a>
                        </p>
                        <div class="section-icon"><i class="fa fa-quote-left"></i></div>
                    </div>
                </section>
                <!--section end-->
            </div>
            <!--content end-->
            <!--=============== footer ===============-->
            <?php $footer_home = "pub"; include 'includes/footer.php'; ?>
            <!--footer end -->
        </div>
        <!-- wrapper end -->
    </div>
    <!-- Main end -->
    <!--=============== google map ===============-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5mh5BxxFn1BHHm4jMKbMqkyYAZnj5PWQ"></script>
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>
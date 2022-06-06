<?php define('TITLE', 'Contact Us');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Main Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?php echo TITLE ?> | House of Quasar</title>
    <meta name="title" content="Home | House of Quasar">
    <meta name="description" content="We are your number one fashion plug. We are into all your fashion desires. We create traditional and classical wear. Let us be your personal fashion plug. ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Home | House of Quasar">
    <meta property="og:description" content="We are your number one fashion plug. We are into all your fashion desires. We create traditional and classical wear. Let us be your personal fashion plug. ">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Home | House of Quasar">
    <meta property="twitter:description" content="We are your number one fashion plug. We are into all your fashion desires. We create traditional and classical wear. Let us be your personal fashion plug. ">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Links -->
    <link rel="shortcut icon" href="HQ_logo_white.png" type="image/x-icon">
    <link rel="stylesheet" href="client/css/style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/bdc4baf551.js" crossorigin="anonymous"></script>
</head>

<body onload="preLoad()">
    <!--Preload start here-->
    <!-- <div class="loader">
        <div class="loading">
            <img src="client/images/HQ_logo_white.png" alt="" />
        </div>
    </div> -->
    <!--Preload End-->
    <!-- wrapper -->
    <div class="wrapper">
        <!-- header cart -->
        <?php if (TITLE == "Male" || TITLE == "Female") : ?>
            <header class="header">
                <a class="cart">
                    <img src="client/images/store/hoq-bag.png" alt="">
                    <span class="cart-value">0</span>
                </a>
            </header>
        <?php endif; ?>
        <!-- nav -->
        <nav class="nav">
            <div class="nav-logo">
                <a href="/" class="nav-logo-link">
                    <img src="client/images/HQ_Logo_wbr.png" alt="logo">
                </a>
            </div>

            <div class="nav-menu">
                <div class="nav-menu-theme">
                    <a class="theme-link" id="darkBtn" onclick="setDarkMode(true)">
                        &#x263E;
                    </a>

                    <a class="theme-link" id="lightBtn" onclick="setDarkMode(false)">
                        &#x2600;
                    </a>
                </div>
                <?php if (TITLE == "Home") : ?>
                    <div class="nav-menu-home">
                        <a class="home-link" href="contact.php">
                            Contact Us
                        </a>
                    </div>
                <?php else : ?>
                    <input type="checkbox" class="nav-menu-btn" id="menu-btn" />
                    <label for="menu-btn" class="nav-menu-icon" id="menu-icon">
                        <span class="icon-line"> </span>
                    </label>
                    <div class="nav-menu-items">
                        <a class="item-link" href="male.php">
                            Male
                        </a>
                        <a class="item-link" href="female.php">
                            female
                        </a>
                        <a class="item-link" href="tutorial.php">
                            tutorials
                        </a>
                        <a class="item-link" href="contact.php">
                            Contact Us
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
        <!-- nav end -->

        <!-- hero -->
        <section class="content">
            <main class="contact">
                <section class="heading">
                    <h1 class="inter l-font ">
                        <?php echo TITLE; ?>
                    </h1>

                </section>
                <hr>
                <section class="contact-items">
                    <div class="form">
                        <form action="" method="post">
                            <div class="form-heading">
                                <h3>Enquiry Form</h3>
                            </div>
                            <div class="form-item">
                                <label for="fullname">Full Name: </label><br>
                                <input type="text" name="fullname" id="fullname">
                            </div>
                            <div class="form-item">
                                <label for="email">Email:</label><br>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="form-item">
                                <label for="subject">Subject:</label><br>
                                <select name="subject" id="subject">
                                    <option value="enquiry">
                                        Enquiry
                                    </option>
                                    <option value="complaint">
                                        Complaint
                                    </option>
                                    <option value="book_stylist">
                                        Book Stylist
                                    </option>
                                    <option value="bulk_order">
                                        Bulk Order
                                    </option>
                                    <option value="other">
                                        Others
                                    </option>
                                </select>
                            </div>
                            <div class="form-item">
                                <label for="message">Message: </label><br>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-btn">
                                <button type="submit" name="send" id="send" class="btn btn__green">send</button>
                            </div>

                        </form>
                    </div>
                    <div class="map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Lagos,%20Nigeria&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                            </div>
                        </div>

                    </div>
                </section>
            </main>
        </section>
        <!-- hero end -->

        <!-- footer -->
        <footer class="footer">
            <div class="footer-links">
                <div class="useful-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li class="useful-link">
                            <a href="" class="link">
                                Customer services
                            </a>
                        </li>
                        <li class="useful-link">
                            <a href="" class="link">
                                About us
                            </a>
                        </li>
                        <li class="useful-link">
                            <a href="" class="link">
                                Shop on House of Quasar
                            </a>
                        </li>
                        <li class="useful-link">
                            <a href="" class="link">
                                Return & Privacy Policy
                            </a>
                        </li>
                        <li class="useful-link">
                            <a href="" class="link">
                                Terms and Conditions
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="services-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li class="services-link">
                            <a href="" class="link">Branding & Production</a>
                        </li>
                        <li class="services-link">
                            <a href="" class="link">Become an Affiliate</a>
                        </li>
                        <li class="services-link">
                            <a href="" class="link">Request Personal Stylist</a>
                        </li>
                        <li class="services-link">
                            <a href="" class="link">Earn with us</a>
                        </li>
                        <li class="services-link">
                            <a href="" class="link">Bulk Purchase & Order</a>
                        </li>
                    </ul>
                </div>
                <div class="contact-links">
                    <h4>Contact us</h4>
                    <ul>
                        <li class="contact-link">
                            <a href="tel:+2348083179930" class="link">08083179930</a>
                        </li>
                        <li class="contact-link">
                            <a href="mailto:House of Quasar@outlook.com" class="link">
                                House of Quasar@outlook.com</a>
                        </li>
                        <li class="contact-link">
                            <a>Lagos,Nigeria</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-icons">
                <div class="social-icons">
                    <a href="#" class="link">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="link">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="#" class="link">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="link">
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                </div>
                <div class="payment-icons">
                    <a href="#">
                        <img src="client/images/icons8-visa-64.png" alt="" style="width: 100%" />
                    </a>
                    <a href="#">
                        <img src="client/images/icons8-mastercard-64.png" alt="" style="width: 100%" />
                    </a>

                    <a href="#">
                        <img src="client/images/positivessl_trust_seal_sm_124x32.png" alt="" style="width: 100%" />
                    </a>
                </div>
            </div>
            <div class="footer-logo">
                <img src="client/images/HQ_Logo_wbr.png" alt="" class="image" id="darkImg-f" />
            </div>
            <hr />
            <div class="footer-copyright">
                <p>
                    &copy; House of Quasar <?php echo date("Y"); ?>.
                    Powered by <a href="">FOIVUE</a>
                </p>
            </div>
        </footer>
        <!-- footer End -->
    </div>
    <!-- wrapper end -->

    <!-- scripts -->
    <?php if (TITLE == "Home") : ?>
        <!-- <script src="client/js/preload.js"></script> -->
        <script src="/client/js/slide.js"></script>
        <script src="/client/js/script.js"></script>
    <?php else : ?>
        <!-- <script src="client/js/preload.js"></script> -->
        <script src="/client/js/script.js"></script>
    <?php endif; ?>
    <!-- End of scripts  -->
</body>

</html>
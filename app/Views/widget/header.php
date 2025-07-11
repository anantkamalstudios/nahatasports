<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/images/logo.jpg" />
    <title>Nahata Sport</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/fontello/css/fontello.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/js/vendor/revslider/css/settings.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/woocommerce/woocommerce-layout.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/woocommerce/woocommerce-smallscreen.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/woocommerce/woocommerce.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/wp-cloudy/wpcloudy.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/wp-cloudy/wpcloudy-anim.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/style.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/core.animation.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/shortcodes.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/plugin.woocommerce.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/skin.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/responsive.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/js/core.messages/core.messages.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/js/magnific/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/css/core.portfolio.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/js/swiper/swiper.min.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif !important;
        }

        .menu_main_nav_area,
        .menu_main_nav_area * {
            font-size: 1.1em;
        }
    </style>
</head>

<?php
$userLoggedIn = session()->get('user_logged_in');
$userName     = session()->get('user_fullname');
?>

<body class="home page tennisclub_body body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_hide">
    <div class="body_wrap">
        <div class="page_wrap">
            <header class="top_panel_wrap top_panel_style_3 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
                    <div class="top_panel_top">
                        <div class="content_wrap clearfix">
                            <div class="top_panel_top_contact_area icon-smartphone">+44 (0) 1234 56789</div>
                            <div class="top_panel_top_open_hours icon-mail-2">info@sitename.com</div>
                            <div class="top_panel_top_user_area">
                                <ul id="menu_user" class="menu_user_nav">
                                    <?php if ($userLoggedIn): ?>
                                        <li class="menu_user_name">
                                            <a href="javascript:void(0)" class="icon-user"><?= esc($userName) ?></a>
                                        </li>
                                        <li class="menu_user_logout">
                                            <a href="<?= base_url('logout') ?>" class="icon-logout">Logout</a>
                                        </li>
                                    <?php else: ?>
                                        <li class="menu_user_register">
                                            <a href="#popup_registration_form" class="popup_link popup_register_link icon-pencil">Register</a>
                                        </li>
                                        <li class="menu_user_login">
                                            <a href="#popup_login_form" class="popup_link popup_login_link icon-user">Login</a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="top_panel_top_search">
                                        <div class="search_wrap search_style_regular search_state_fixed">
                                            <div class="search_form_wrap">
                                                <form role="search" method="get" class="search_form" action="#">
                                                    <button type="submit" class="search_submit icon-magnifier" title="Start search"></button>
                                                    <input type="text" class="search_field" placeholder="Search" name="s" />
                                                </form>
                                            </div>
                                            <div class="search_results widget_area scheme_original">
                                                <a class="search_results_close icon-cancel"></a>
                                                <div class="search_results_content"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu_user_cart">
                                        <a href="#" class="top_panel_cart_button">
                                            <span class="contact_icon icon-shopping-cart-2"></span>
                                            <span class="contact_label contact_cart_label">cart:</span>
                                            <span class="contact_cart_totals">
                                                <span class="cart_items">2 Items</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="top_panel_link">
                                        <a href="<?= base_url('court') ?>">Reserve a court</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="contact_logo">
                                <div class="logo">
                                    <a href="<?= base_url() ?>">
                                        <img src="<?= base_url() ?>assets/theme/images/nahata_logo.webp" class="logo_main" alt="" style="width: 150px;">
                                    </a>
                                </div>
                            </div>
                            <div class="menu_main_social_wrap">
                                <div class="top_panel_top_socials">
                                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                        <div class="sc_socials_item"><a href="#" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                        <div class="sc_socials_item"><a href="#" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                                        <div class="sc_socials_item"><a href="#" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
                                    </div>
                                </div>
                                <div class="menu_main_wrap">
                                    <a href="#" class="menu_main_responsive_button icon-menu"></a>
                                    <nav class="menu_main_nav_area">
                                        <ul id="menu_main" class="menu_main_nav">
                                            <li class="menu-item"><a href="<?= base_url() ?>">Home</a></li>
                                            <li class="menu-item"><a href="<?= base_url('membership') ?>">Membership</a></li>
                                            <li class="menu-item"><a href="<?= base_url('tenis') ?>">Coaching</a></li>
                                            <li class="menu-item"><a href="<?= base_url('contact') ?>">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Mobile Header -->
            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url() ?>assets/theme/images/nahata_logo.webp" class="logo_main" alt="" style="width: 150px; margin: 0;">
                        </a>
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <div class="login">
                            <?php if ($userLoggedIn): ?>
                                <span class="d-block icon-user text-white mb-1">Logged in as <?= esc($userName) ?></span>
                                <a href="<?= base_url('logout') ?>" class="icon-logout">Logout</a>
                            <?php else: ?>
                                <a href="#popup_login_form" class="popup_link popup_login_link icon-user">Login</a>
                                <a href="#popup_registration_form" class="popup_link popup_register_link icon-pencil">Register</a>
                            <?php endif; ?>
                        </div>
                        <nav class="menu_main_nav_area">
                            <ul id="menu_main_mobile" class="menu_main_nav">
                                <li class="menu-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="menu-item"><a href="<?= base_url('membership') ?>">Membership</a></li>
                                <li class="menu-item"><a href="<?= base_url('tenis') ?>">Coaching</a></li>
                                <li class="menu-item"><a href="<?= base_url('contact') ?>">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="panel_bottom">
                        <div class="contact_socials">
                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                <div class="sc_socials_item"><a href="#" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                <div class="sc_socials_item"><a href="#" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                                <div class="sc_socials_item"><a href="#" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
                            </div>
                        </div>
                        <div class="top_panel_link">
                            <a href="<?= base_url('court') ?>">Reserve a court</a>
                        </div>
                    </div>
                    <div class="mask"></div>
                </div>
            </div>
=======
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?= base_url() ?>assets/images/logo.jpg" type="image/x-icon" />
    <title>Nahata Sport</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .btn-reserve-court {
        margin-top: 20px;
        background: #322d77;
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        color: #fff;
        transition: background 0.3s ease, transform 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-reserve-court:hover {
        background: #221c5c;
        transform: translateY(-2px);
    }


    body {
        font-family: 'Segoe UI', sans-serif;
    }

    .hero-slide {
        height: 70vh;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: flex-end;
        /* text at bottom */
        padding: 80px 0;
        color: #fff;
    }

    .hero-slide h1 {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .hero-slide p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .hero-slide .btn {
        border-radius: 50px;
        font-weight: 600;
    }

    .hero-content {
        max-width: 600px;
    }

    .carousel-indicators {
        bottom: 40px;
        /* move up a bit */
    }

    .carousel-indicators [data-bs-target] {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: white;
        opacity: 0.5;
    }

    .carousel-indicators .active {
        opacity: 1;
    }

    /* Card Grid Horizontal Scroll (optional, if needed) */
    .card-grid {
        display: flex;
        gap: 1rem;
        overflow-x: auto;
        padding-bottom: 1rem;
    }

    /* Custom Card */
    .custom-card {
        min-width: 220px;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s;
        text-align: center;
        flex: 0 0 auto;
    }

    .custom-card:hover {
        transform: translateY(-5px);
    }

    .custom-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        margin-top: 1rem;
        border-radius: 50%;
    }

    .custom-card-body {
        padding: 1rem;
    }

    .custom-card-title {
        font-size: 1.2rem;
        font-weight: 700;
    }

    /* Tabs */
    .nav-tabs .nav-link {
        border-radius: 50px;
        border: 2px solid #322d77;
        color: #322d77;
        font-weight: 600;
        text-transform: uppercase;
    }

    .nav-tabs .nav-link.active {
        background: #322d77;
        color: #fff;
    }

    /* faq */

    .accordion-item {
        transition: background-color 0.3s ease;
    }

    .accordion-collapse.collapse.show {
        background-color: #342C77;
        color: white;
    }

    .accordion-collapse.collapse.show .accordion-body,
    .accordion-collapse.collapse.show .accordion-header .accordion-button {
        color: white;
    }

    .accordion-button:not(.collapsed) {
        background-color: transparent;
        color: black;
        box-shadow: none;
    }

    /* call to action */

    .cta-section {
        background: linear-gradient(135deg, #1e3a8a, #2dd4bf);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.15), transparent);
        z-index: 1;
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    .cta-title {
        font-size: 2.75rem;
        font-weight: 700;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
        margin-bottom: 40px;
        color: #ffffff;
    }

    .cta-btn {
        padding: 12px 35px;
        font-size: 1.15rem;
        font-weight: 600;
        border-radius: 50px;
        border: none;
        background-color: #ffffff;
        color: #1e3a8a;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        background-color: #f0f9ff;
        color: #2dd4bf;
    }

    @media (max-width: 576px) {
        .cta-title {
            font-size: 2rem;
        }

        .cta-btn {
            padding: 10px 25px;
            font-size: 1rem;
            width: 100%;
            margin-bottom: 10px;
        }

        .d-flex {
            flex-direction: column;
            gap: 10px !important;
        }
    }
    </style>


</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>assets/theme/images/nahata_logo.webp" alt="Nahata Sport Logo"
                        style="width: 150px;">
                </a>

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto align-items-lg-center mb-2 mb-lg-0 gap-lg-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('membership') ?>">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('tenis') ?>">Coaching</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('contact') ?>">Contacts</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#popup_registration_form">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#popup_login_form">Login</a>
                        </li>


                        <li class="nav-item">
                            <a href="<?= base_url('court') ?>" class="btn-reserve-court ms-lg-3">Reserve a Court</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
>>>>>>> a00c1d0 (05/07/2025)

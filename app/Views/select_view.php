<!DOCTYPE html>
<html lang="en-US">

<<<<<<< HEAD
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/images/logo.jpg" />
        <title>Nahata Sport</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"  type="text/css">
        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/fontello/css/fontello.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/woocommerce/woocommerce-layout.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/woocommerce/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/woocommerce/woocommerce.css" type="text/css" media="all" />

        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/core.animation.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/shortcodes.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/plugin.woocommerce.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/skin.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/responsive.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="<?=base_url()?>assets/theme/js/core.messages/core.messages.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?=base_url()?>assets/theme/js/magnific/magnific-popup.min.css" type="text/css" media="all" />

        <style>
  .compact-card {
    width: 90%;
    border-radius: 0.75rem;
    overflow: hidden;
    font-size: 0.85rem;
  }

  .card-img-top {
    height: 140px;
    object-fit: cover;
    border-radius: 0.75rem 0.75rem 0 0;
  }

  .compact-footer {
    background-color: #20306c;
    border-radius: 0 0 0.75rem 0.75rem;
  }

  .icon-circle-sm {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card.active {
    border: 2px solid #2f2a7e;
    box-shadow: 0 0 15px rgba(47, 42, 126, 0.4);
    transform: scale(1.02);
    transition: 0.2s ease-in-out;
  }

  .sport-card.selected {
  background-color: #4CAF50;
  color: white;
  border: 2px solid #2f2a7e;
}

#bookBtn.active {
  background-color: #4CAF50;
}

.selected-card {
    border: 2px solid #2f2a7e;
    box-shadow: 0 0 10px rgba(47, 42, 126, 0.5);
    transform: scale(1.02);
    transition: 0.3s ease;
  }
</style>

    </head>
    <body class="page tennisclub_body body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_hide">
        <!-- Body Wrap -->
        <div class="body_wrap">
            <div class="page_wrap">
                <!-- Header -->
                <header class="top_panel_wrap top_panel_style_3 scheme_original">
                    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
                        <!-- User panel -->
                        <div class="top_panel_top">
                            <div class="content_wrap clearfix">
                                <div class="top_panel_top_contact_area icon-smartphone">+44 (0) 1234 56789</div>
                                <div class="top_panel_top_open_hours icon-mail-2">info@sitename.com</div>
                                <div class="top_panel_top_user_area">
                                    <ul id="menu_user" class="menu_user_nav">
                                        <li class="menu_user_register">
                                            <a href="#popup_registration_form" class="popup_link popup_register_link icon-pencil">Register</a>
                                        </li>
                                        <li class="menu_user_login">
                                            <a href="#popup_login_form" class="popup_link popup_login_link icon-user">Login</a>
                                        </li>
                                        <li class="top_panel_top_search">
                                            <div class="search_wrap search_style_regular search_state_fixed">
                                                <div class="search_form_wrap">
                                                    <form role="search" method="get" class="search_form" action="#">
                                                        <button type="submit" class="search_submit icon-magnifier" title="Start search"></button>
                                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
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
                                            <ul class="widget_area sidebar_cart sidebar">
                                                <li>
                                                    <div class="widget woocommerce widget_shopping_cart">
                                                        <div class="hide_cart_widget_if_empty">
                                                            <div class="widget_shopping_cart_content">
                                                                <ul class="cart_list product_list_widget ">
                                                                    <li class="mini_cart_item">
                                                                        <a class="remove" title="Remove this item" href="#">×</a>
                                                                        <a href="shop-product-page.html">
                                                                            <img class="attachment-shop_thumbnail size-shop_thumbnail" alt="product" src="http://placehold.it/75x75">
                                                                            HEAD Instinct Junior 25 Prestrung Tennis Racquet
                                                                        </a>
                                                                        <span class="quantity">
                                                                            1 ×
                                                                            <span class="amount">£148.00</span>
                                                                        </span>
                                                                    </li>
                                                                    <li class="mini_cart_item">
                                                                        <a class="remove" title="Remove this item" href="#">×</a>
                                                                        <a href="shop-product-page.html">
                                                                            <img class="attachment-shop_thumbnail size-shop_thumbnail" alt="product" src="http://placehold.it/75x75">
                                                                            Penn Championship Extra Tennis Duty Balls
                                                                        </a>
                                                                        <span class="quantity">
                                                                            1 ×
                                                                            <span class="amount">£87.00</span>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <p class="total">
                                                                    <strong>Subtotal:</strong>
                                                                    <span class="amount">£235.00</span>
                                                                </p>
                                                                <p class="buttons">
                                                                    <a class="button wc-forward" href="cart.html">View Cart</a>
                                                                    <a class="button checkout wc-forward" href="checkout.html">Checkout</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="top_panel_link">
                                            <a href="<?= base_url() ?>court">Reserve a court</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- /User panel -->
                        <!-- Top Menu -->
                        <div class="top_panel_middle">
                            <div class="content_wrap">
                                <div class="contact_logo">
                                    <div class="logo">
                                    <a href="<?=base_url()?>">
                                        <img src="<?=base_url()?>assets/theme/images/nahata_logo.webp" class="logo_main" alt="" style="width: 150px;">
                                    </a>
                                </div>
                                </div>
                                <div class="menu_main_social_wrap">
                                    <div class="top_panel_top_socials">
                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                            <div class="sc_socials_item">
                                                <a href="#" target="_blank" class="social_icons social_twitter">
                                                    <span class="icon-twitter"></span>
                                                </a>
                                            </div><div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_facebook">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </div><div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_gplus">
                                                <span class="icon-gplus"></span>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="menu_main_wrap">
                                        <a href="#" class="menu_main_responsive_button icon-menu"></a>
                                        <nav class="menu_main_nav_area">
                                            <ul id="menu_main" class="menu_main_nav">
                                                <li class="menu-item">
                                                    <a href="<?= base_url() ?>">Home</a>
                                                </li>
                                                
                                                <li class="menu-item">
                                                    <a href="<?= base_url() ?>membership">Membership</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="<?= base_url() ?>tenis">Coaching</a>
                                                </li>
                                                
                                                <li class="menu-item">
                                                    <a href="<?= base_url() ?>contact">Contacts</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Top Menu -->
                    </div>
                </header>
                <!-- /Header -->
                <!-- Header Mobile -->
                <div class="header_mobile">
                    <div class="content_wrap">
                        <div class="menu_button icon-menu"></div>
                        <div class="logo">
                                    <a href="<?=base_url()?>">
                                        <img src="<?=base_url()?>assets/theme/images/nahata_logo.webp" class="logo_main" alt="" style="width: 150px;">
                                    </a>
                                </div>
                    </div>
                    <div class="side_wrap">
                        <div class="close">Close</div>
                        <div class="panel_top">
                            <nav class="menu_main_nav_area">
                                <ul id="menu_main_mobile" class="menu_main_nav">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="<?= base_url() ?>">Home</a>
                                       
                                    <li class="menu-item">
                                        <a href="<?= base_url() ?>membership">Membership</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?= base_url() ?>tenis">Coaching</a>
                                    </li>
                                   
                                    <li class="menu-item">
                                        <a href="<?= base_url() ?>contact">Contacts</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="search_wrap search_style_regular search_state_fixed">
                                <div class="search_form_wrap">
                                    <form method="get" class="search_form" action="#">
                                        <button type="submit" class="search_submit icon-magnifier" title="Start search"></button>
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                    </form>
                                </div>
                                <div class="search_results widget_area scheme_original">
                                    <a class="search_results_close icon-cancel"></a>
                                    <div class="search_results_content"></div>
                                </div>
                            </div>
                            <div class="login">
                                <a href="#popup_login" class="popup_link popup_login_link">Login</a>
                            </div>
                        </div>
                        <div class="panel_bottom">
                            <div class="contact_socials">
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                    <div class="sc_socials_item">
                                        <a href="#" target="_blank" class="social_icons social_twitter">
                                            <span class="icon-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a href="#" target="_blank" class="social_icons social_facebook">
                                            <span class="icon-facebook"></span>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="top_panel_link">
                            <a href="<?= base_url() ?>court">Reserve a court</a>
                        </div>
                    </div>
                    <div class="mask"></div>
                </div>
                <!-- /Header Mobile -->
                <!-- Top Panel -->
                <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner">
                        <div class="content_wrap">
                            <h1 class="page_title">Reserve a Court</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="index.html">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Reserve a Court</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Top Panel -->
                                    </div>
                                    <div class="sc_socials_item">
                                        <a href="#" target="_blank" class="social_icons social_gplus">
                                            <span class="icon-gplus"></span>
                                        </a>
                                    </div>
                <!-- Page Content Wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <div class="post_item post_item_single post_format_standard page">
                                <section class="post_content">
                                    <div class="position-relative"><br>
  <img src="<?=base_url()?>assets/theme/images/img(2).webp" class="w-100" style="max-height: 400px; object-fit: cover;" alt="Nahata Sports Complex">
  <!-- <button class="btn btn-light position-absolute top-0 start-0 m-3">
    ☰
  </button> -->
</div>

<!-- Venue Info -->
<div class="container my-4">
  <h2 class="fw-bold">Nahata Sports Complex</h2>
  <p class="text-muted">Sinhgad Rd</p>

  <!-- CricPRO Card -->
<!-- CricPRO Card Starts -->
<div class="container my-4">
  <a href="javascript:void(0)" class="text-decoration-none">
    <div class="row g-3">

      <?php foreach ($sports_list as $sports) { ?>
        <div class="col-md-4">
          <div class="card compact-card shadow-sm mx-auto">
            
            <!-- Image -->
            <img width="80" height="80" src="<?= base_url('assets/uploads/' . $sports['sports_image']); ?>" class="card-img-top" alt="<?= $sports['sports_title']; ?>">

            <div class="card-body p-2">
              <span class="badge text-dark bg-warning mb-1" style="font-size: 0.6rem;">Exclusive</span>

              <h6 class="fw-bold text-primary mb-1" style="font-size: 1rem;">
                <?= $sports['sports_title']; ?>
              </h6>

              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <small class="d-block mb-1">Ratings</small>
                  <div style="color: #ffc107; font-size: 0.8rem;">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                  </div>
                </div>
                <div class="text-end">
                  <div class="fw-bold text-primary" style="font-size: 0.9rem;">₹500</div>
                  <small class="text-muted">onwards</small>
                </div>
              </div>
            </div>

            <div class="compact-footer d-flex justify-content-between align-items-center px-2 py-1">
              <div class="icon-circle-sm bg-white border border-primary">
                <div class="sport-icon">🏀</div>
              </div>
              <div class="icon-circle-sm bg-dark text-white">
                <i class="bi bi-arrow-right-short" style="font-size: 1.2rem;"></i>
              </div>
            </div>

          </div>
        </div>
      <?php } ?>

    </div>
  </a>
</div>


   
  </div>
</div>
<div class="text-center text-white fw-bold py-2" id="proceedBtn" style="background-color: #2f2a7e; cursor: pointer;">
  SELECT A SPORTS TO PROCEED
</div>

<!-- CricPRO Card Ends -->



  <!-- Amenities -->
 <div class="mb-4">
  <h5 class="fw-semibold">Amenities</h5>
  <ul class="list-unstyled p-0">
    <?php foreach ($amenity_list as $amenity) { ?>
      <li class="d-flex align-items-center mb-2">
        <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
          <i class="bi bi-check-lg" style="font-size: 1rem;"></i>
        </div>
        <span><?php echo $amenity['amenity_name']; ?></span>
      </li>
    <?php } ?>
  </ul>
</div>




  <!-- Venue Rules -->
  <div>
    <h5 class="fw-semibold">Venue Rules</h5>
    <p>Nahata Sports Complex on Sinhagad Road stands as the flagship center of Nahata Sports...</p>
    <p>Spanning a comprehensive array of sports and activities...</p>
    <p>For the younger members of the community, Nahata Sports Complex provides specialized programs...</p>
    <p>Beyond sports, the center embraces cultural and artistic pursuits with offerings like Zumba, Bollywood Dance, Kathak, and drawing classes...</p>
    <p>The Sinhagad Road center goes even further by incorporating educational services, including a pre-school and daycare facility...</p>
    <p>To facilitate easy communication and inquiries, the center can be reached at 7098777797...</p>
    <p>In essence, Nahata Sports Complex on Sinhagad Road stands as a multifaceted destination...</p>
  </div>
</div>

<div class="container my-5">
  <h5 class="fw-bold">Location</h5>
  <p>
    Nahata Sports Complex, Next to Vidya Sahakari Bank, Near Wadgaon Highway Bridge, Next to Vidya Sahakari Bank, Wadgaon Bk. , Pune 411041
  </p>

  <!-- Embedded Google Map -->
  <div class="ratio ratio-16x9 rounded border">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15137.50098117683!2d73.8178451!3d18.4666544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc29573c75d803d%3A0xa7126b51a92da4ae!2sNahata%20Sports%20Complex!5e0!3m2!1sen!2sin!4v1687002252094!5m2!1sen!2sin"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>


                                </section>
                            </div>
                        </div>
                        <!-- /Content -->
                    </div>
                </div>
                <!-- /Page Content Wrap -->
                <!-- Footer -->
                <footer class="footer_wrap widget_area scheme_original">
                    <div class="footer_wrap_inner widget_area_inner">
                        <div class="content_wrap">
                            <div class="columns_wrap">
                                <!-- Widget: Socials -->
                                <aside class="column-1_3 widget widget_socials">
                                    <div class="widget_inner">
                                        <div class="logo">
                                    <a href="<?=base_url()?>">
                                        <img src="<?=base_url()?>assets/theme/images/nahata_logo.webp" class="logo_main" alt="" style="width: 150px;">
                                    </a>
                                </div>
                                        <div class="logo_descr">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incidt dolore magna aliqua.</div>
                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                            <div class="sc_socials_item">
                                                <a href="#" target="_blank" class="social_icons social_twitter">
                                                    <span class="icon-twitter"></span>
                                                </a>
                                            </div>
                                            <div class="sc_socials_item">
                                                <a href="#" target="_blank" class="social_icons social_facebook">
                                                    <span class="icon-facebook"></span>
                                                </a>
                                            </div>
                                            <div class="sc_socials_item">
                                                <a href="#" target="_blank" class="social_icons social_gplus">
                                                    <span class="icon-gplus"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </aside><!-- /Widget: Socials --><!-- Widget: Recent Entries --><!-- /Widget: Recent Entries --><!-- Widget: Text --><aside class="column-1_3 widget widget_text">
                                <h5 class="widget_title">Contact us</h5>
                                <div class="textwidget">
                                    <strong>Address</strong>
                                    <p> 8500 Lorem Street, Chicago, IL, 55030</p>
                                    <strong>Call Us</strong>
                                    <p>(123) 456-78-90</p>
                                    <strong>Email</strong>
                                    <p>sales@yoursite.com</p>
                                </div>
                            </aside><!-- /Widget: Text --><!-- Widget: RecentPosts --><aside class="column-1_3 widget widget_recent_posts">
                                <h5 class="widget_title">Latest Posts</h5>
                                <article class="post_item with_thumb first">
                                    <div class="post_thumb">
                                        <img alt="Improve Your Strokes Using The Wall" src="<?=base_url()?>assets/theme/images/image-10-75x75.jpg">
                                    </div>
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="post-single.html">Improve Your Strokes Using The Wall</a>
                                        </h6>
                                        <div class="post_info">
                                                <span class="post_info_item post_info_posted">
                                                    <a href="#" class="post_info_date">February 6, 2016</a>
                                                </span>
                                                <span class="post_info_item post_info_posted_by">by
                                                    <a href="#" class="post_info_author">John Doe</a>
                                                </span>
                                                <span class="post_info_item post_info_counters">
                                                    <a href="#" class="post_counters_item post_counters_views icon-eye">
                                                        <span class="post_counters_number">4</span>
                                                    </a>
                                                </span>
                                        </div>
                                    </div>
                                </article>
                                <article class="post_item with_thumb">
                                    <div class="post_thumb">
                                        <img alt="The Bad Guy Who Has Done Nothing Wrong" src="<?=base_url()?>assets/theme/images/image-6-75x75.jpg">
                                    </div>
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="post-single.html">The Bad Guy Who Has Done Nothing Wrong</a>
                                        </h6>
                                        <div class="post_info">
                                                <span class="post_info_item post_info_posted">
                                                    <a href="#" class="post_info_date">December 4, 2015</a>
                                                </span>
                                                <span class="post_info_item post_info_posted_by">by
                                                    <a href="#" class="post_info_author">John Doe</a>
                                                </span>
                                                <span class="post_info_item post_info_counters">
                                                    <a href="#" class="post_counters_item post_counters_views icon-eye">
                                                        <span class="post_counters_number">4</span>
                                                    </a>
                                                </span>
                                        </div>
                                    </div>
                                </article>
                            </aside>
                                <!-- /Widget: RecentPosts -->
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
                <!-- Copyright -->
                <div class="copyright_wrap copyright_style_menu">
                    <div class="copyright_wrap_inner">
                        <div class="content_wrap">
                           <div class="copyright_text">
                                Copyright © 2025 <a href="https://anantkamalstudios.com/" target="_blank">AnantkamalStudios</a>. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
            <!-- /.page_wrap -->

        </div>
        <!-- /Body Wrap -->
        <div id="popup_registration_form" class="popup_wrap popup_registration_form bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <form name="registration_form" method="post" action="<?= base_url('user_registration') ?>" class="popup_form registration_form" id="registration_form">
            <div class="form_left">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input type="text" id="full_name" name="full_name" placeholder="Full name">
                </div>
                <div class="popup_form_field email_field iconed_field icon-mail">
                    <input type="text" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="popup_form_field email_field iconed_field icon-mail">
                    <input type="text" id="username" name="username" placeholder="Username">
                </div>
                <div class="popup_form_field agree_field">
                    <input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
                    <label for="registration_agree">I agree with</label> <a href="#">Terms &amp; Conditions</a>
                </div>
                <div class="popup_form_field submit_field">
                    <button class="btn btn-lg" name="sign_up_button" id="sign_up_button">Sign Up</button>
                </div>
            </div>
            <div class="form_right">
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="newpassword" name="newpassword" placeholder="Confirm Password">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="text" id="phone" name="phone" placeholder="Phone">
                </div>
                <div class="popup_form_field description_field">Minimum 6 characters</div>
            </div>
        </form>
        <div class="result message_block"></div>
    </div>
</div>

<div id="popup_login_form" class="popup_wrap popup_login bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <div class="form_left">
            <form class="w-100 mt-4 pt-2 login_form" id="login_form" action="javascript:void(0)" method="post">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input type="text" id="email" name="email" placeholder="Login or Email">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="popup_form_field remember_field">
                    <a href="#" class="forgot_password">Forgot password?</a>
                    <input type="checkbox" id="rememberme" name="rememberme">
                    <label for="rememberme">Remember me</label>
                </div>
                <div class="popup_form_field submit_field">
                    <button class="btn btn-lg btn-primary w-100" name="login_save" id="login_save">Login</button>
                </div>
            </form>
        </div>
        <div class="form_right">
            <div class="login_socials_title">You can login using your social profile</div>
            <div class="login_socials_list">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_facebook">
                            <span class="icon-facebook"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_twitter">
                            <span class="icon-twitter"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_gplus">
                            <span class="icon-gplus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="login_socials_problem">
                <a href="#">Problem with login?</a>
            </div>
            <div class="result message_block"></div>
        </div>
    </div>
</div>
        <!-- Side block with weather plugin -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/log.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/sign_up.js"></script>


        
        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/jquery/jquery.js"></script>

        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/_packed.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/global.min.js"></script>

        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/vendor/woocommerce/woocommerce.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/vendor/woocommerce/cart-fragments.min.js"></script>

        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/core.utils.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/core.init.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/theme.init.min.js"></script>

        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/shortcodes.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/theme/js/core.messages/core.messages.min.js"></script>

        <script>
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".compact-card");
    const proceedBtn = document.getElementById("proceedBtn");
    let selectedCard = null;

    cards.forEach(card => {
      card.addEventListener("click", function () {
        // Remove active/selected class from all cards
        cards.forEach(c => c.classList.remove("active", "selected-card"));

        // Add class to current
        this.classList.add("active", "selected-card");
        selectedCard = this;

        // Get selected sport title
        const sportTitle = this.querySelector("h6").innerText;

        // Update proceed button text
        proceedBtn.innerText = `BOOK ${sportTitle.toUpperCase()} SLOT`;

        // Add clickable style (if needed)
        proceedBtn.classList.add("active");
      });
    });

    proceedBtn.addEventListener("click", function () {
      if (!selectedCard) {
        alert("Please select a card..");
      } else {
        // Optional: You can get sport id or other data from selected card
        // Example redirect:
        window.location.href = "<?= base_url('user_sports') ?>";
      }
    });
  });
</script>



    </body>
=======
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/images/logo.jpg" />
    <title>Nahata Sport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic"
        type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/fontello/css/fontello.min.css" type="text/css"
        media="all" />

    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/woocommerce/woocommerce-layout.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/woocommerce/woocommerce-smallscreen.css"
        type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/woocommerce/woocommerce.css" type="text/css"
        media="all" />

    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/style.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/core.animation.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/shortcodes.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/plugin.woocommerce.min.css" type="text/css"
        media="all" />

    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/skin.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=base_url()?>assets/theme/css/responsive.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=base_url()?>assets/theme/js/core.messages/core.messages.min.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="<?=base_url()?>assets/theme/js/magnific/magnific-popup.min.css" type="text/css"
        media="all" />

    <style>
    .compact-card {
        width: 90%;
        border-radius: 0.75rem;
        overflow: hidden;
        font-size: 0.85rem;
    }

    .card-img-top {
        height: 140px;
        object-fit: cover;
        border-radius: 0.75rem 0.75rem 0 0;
    }

    .compact-footer {
        background-color: #20306c;
        border-radius: 0 0 0.75rem 0.75rem;
    }

    .icon-circle-sm {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card.active {
        border: 2px solid #2f2a7e;
        box-shadow: 0 0 15px rgba(47, 42, 126, 0.4);
        transform: scale(1.02);
        transition: 0.2s ease-in-out;
    }

    .sport-card.selected {
        background-color: #4CAF50;
        color: white;
        border: 2px solid #2f2a7e;
    }

    #bookBtn.active {
        background-color: #4CAF50;
    }

    .selected-card {
        border: 2px solid #2f2a7e;
        box-shadow: 0 0 10px rgba(47, 42, 126, 0.5);
        transform: scale(1.02);
        transition: 0.3s ease;
    }
    </style>

</head>

<body
    class="page tennisclub_body body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_hide">
    <!-- Body Wrap -->
    <div class="body_wrap">
        <div class="page_wrap">
            <!-- Header -->
            <?= $this->include("widget/header.php") ?>
            <!-- /Header -->
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_gplus">
                    <span class="icon-gplus"></span>
                </a>
            </div>
            <!-- Page Content Wrap -->
            <div class="page_content_wrap page_paddings_no">
                <div class="content_wrap">
                    <!-- Content -->
                    <div class="content">
                        <div class="post_item post_item_single post_format_standard page">
                            <section class="post_content">
                                <div class="position-relative"><br>
                                    <img src="<?=base_url()?>assets/theme/images/img(2).webp" class="w-100"
                                        style="max-height: 400px; object-fit: cover;" alt="Nahata Sports Complex">
                                    <!-- <button class="btn btn-light position-absolute top-0 start-0 m-3">
    ☰
  </button> -->
                                </div>

                                <!-- Venue Info -->
                                <div class="container my-4">
                                    <h2 class="fw-bold">Nahata Sports Complex</h2>
                                    <p class="text-muted">Sinhgad Rd</p>

                                    <!-- CricPRO Card -->
                                    <!-- CricPRO Card Starts -->
                                    <div class="container my-4">
                                        <a href="javascript:void(0)" class="text-decoration-none">
                                            <div class="row g-3">

                                                <?php foreach ($sports_list as $sports) { ?>
                                                <div class="col-md-4">
                                                    <div class="card compact-card shadow-sm mx-auto">

                                                        <!-- Image -->
                                                        <img width="80" height="80"
                                                            src="<?= base_url('assets/uploads/' . $sports['sports_image']); ?>"
                                                            class="card-img-top" alt="<?= $sports['sports_title']; ?>">

                                                        <div class="card-body p-2">
                                                            <span class="badge text-dark bg-warning mb-1"
                                                                style="font-size: 0.6rem;">Exclusive</span>

                                                            <h6 class="fw-bold text-primary mb-1"
                                                                style="font-size: 1rem;">
                                                                <?= $sports['sports_title']; ?>
                                                            </h6>

                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <small class="d-block mb-1">Ratings</small>
                                                                    <div style="color: #ffc107; font-size: 0.8rem;">
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star-fill"></i>
                                                                        <i class="bi bi-star-half"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end">
                                                                    <div class="fw-bold text-primary"
                                                                        style="font-size: 0.9rem;">₹500</div>
                                                                    <small class="text-muted">onwards</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="compact-footer d-flex justify-content-between align-items-center px-2 py-1">
                                                            <div class="icon-circle-sm bg-white border border-primary">
                                                                <div class="sport-icon">🏀</div>
                                                            </div>
                                                            <div class="icon-circle-sm bg-dark text-white">
                                                                <i class="bi bi-arrow-right-short"
                                                                    style="font-size: 1.2rem;"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php } ?>

                                            </div>
                                        </a>
                                    </div>



                                </div>
                        </div>
                        <div class="text-center text-white fw-bold py-2" id="proceedBtn"
                            style="background-color: #2f2a7e; cursor: pointer;">
                            SELECT A SPORTS TO PROCEED
                        </div>

                        <!-- CricPRO Card Ends -->



                        <!-- Amenities -->
                        <div class="mb-4">
                            <h5 class="fw-semibold">Amenities</h5>
                            <ul class="list-unstyled p-0">
                                <?php foreach ($amenity_list as $amenity) { ?>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-2"
                                        style="width: 30px; height: 30px;">
                                        <i class="bi bi-check-lg" style="font-size: 1rem;"></i>
                                    </div>
                                    <span><?php echo $amenity['amenity_name']; ?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>




                        <!-- Venue Rules -->
                        <div>
                            <h5 class="fw-semibold">Venue Rules</h5>
                            <p>Nahata Sports Complex on Sinhagad Road stands as the flagship center of Nahata Sports...
                            </p>
                            <p>Spanning a comprehensive array of sports and activities...</p>
                            <p>For the younger members of the community, Nahata Sports Complex provides specialized
                                programs...</p>
                            <p>Beyond sports, the center embraces cultural and artistic pursuits with offerings like
                                Zumba, Bollywood Dance, Kathak, and drawing classes...</p>
                            <p>The Sinhagad Road center goes even further by incorporating educational services,
                                including a pre-school and daycare facility...</p>
                            <p>To facilitate easy communication and inquiries, the center can be reached at
                                7098777797...</p>
                            <p>In essence, Nahata Sports Complex on Sinhagad Road stands as a multifaceted
                                destination...</p>
                        </div>
                    </div>

                    <div class="container my-5">
                        <h5 class="fw-bold">Location</h5>
                        <p>
                            Nahata Sports Complex, Next to Vidya Sahakari Bank, Near Wadgaon Highway Bridge, Next to
                            Vidya Sahakari Bank, Wadgaon Bk. , Pune 411041
                        </p>

                        <!-- Embedded Google Map -->
                        <div class="ratio ratio-16x9 rounded border">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15137.50098117683!2d73.8178451!3d18.4666544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc29573c75d803d%3A0xa7126b51a92da4ae!2sNahata%20Sports%20Complex!5e0!3m2!1sen!2sin!4v1687002252094!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>


                    </section>
                </div>
            </div>
            <!-- /Content -->
        </div>
    </div>
    <!-- /Page Content Wrap -->
    <!-- Footer -->
    <footer class="footer_wrap widget_area scheme_original">
        <div class="footer_wrap_inner widget_area_inner">
            <div class="content_wrap">
                <div class="columns_wrap">
                    <!-- Widget: Socials -->
                    <aside class="column-1_3 widget widget_socials">
                        <div class="widget_inner">
                            <div class="logo">
                                <a href="<?=base_url()?>">
                                    <img src="<?=base_url()?>assets/theme/images/nahata_logo.webp" class="logo_main"
                                        alt="" style="width: 150px;">
                                </a>
                            </div>
                            <div class="logo_descr">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do
                                eiusmod tempor incidt dolore magna aliqua.</div>
                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                        <span class="icon-facebook"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_gplus">
                                        <span class="icon-gplus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside><!-- /Widget: Socials -->
                    <!-- Widget: Recent Entries -->
                    <!-- /Widget: Recent Entries -->
                    <!-- Widget: Text -->
                    <aside class="column-1_3 widget widget_text">
                        <h5 class="widget_title">Contact us</h5>
                        <div class="textwidget">
                            <strong>Address</strong>
                            <p> 8500 Lorem Street, Chicago, IL, 55030</p>
                            <strong>Call Us</strong>
                            <p>(123) 456-78-90</p>
                            <strong>Email</strong>
                            <p>sales@yoursite.com</p>
                        </div>
                    </aside><!-- /Widget: Text -->
                    <!-- Widget: RecentPosts -->
                    <aside class="column-1_3 widget widget_recent_posts">
                        <h5 class="widget_title">Latest Posts</h5>
                        <article class="post_item with_thumb first">
                            <div class="post_thumb">
                                <img alt="Improve Your Strokes Using The Wall"
                                    src="<?=base_url()?>assets/theme/images/image-10-75x75.jpg">
                            </div>
                            <div class="post_content">
                                <h6 class="post_title">
                                    <a href="post-single.html">Improve Your Strokes Using The Wall</a>
                                </h6>
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted">
                                        <a href="#" class="post_info_date">February 6, 2016</a>
                                    </span>
                                    <span class="post_info_item post_info_posted_by">by
                                        <a href="#" class="post_info_author">John Doe</a>
                                    </span>
                                    <span class="post_info_item post_info_counters">
                                        <a href="#" class="post_counters_item post_counters_views icon-eye">
                                            <span class="post_counters_number">4</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </article>
                        <article class="post_item with_thumb">
                            <div class="post_thumb">
                                <img alt="The Bad Guy Who Has Done Nothing Wrong"
                                    src="<?=base_url()?>assets/theme/images/image-6-75x75.jpg">
                            </div>
                            <div class="post_content">
                                <h6 class="post_title">
                                    <a href="post-single.html">The Bad Guy Who Has Done Nothing Wrong</a>
                                </h6>
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted">
                                        <a href="#" class="post_info_date">December 4, 2015</a>
                                    </span>
                                    <span class="post_info_item post_info_posted_by">by
                                        <a href="#" class="post_info_author">John Doe</a>
                                    </span>
                                    <span class="post_info_item post_info_counters">
                                        <a href="#" class="post_counters_item post_counters_views icon-eye">
                                            <span class="post_counters_number">4</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </aside>
                    <!-- /Widget: RecentPosts -->
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <!-- Copyright -->
    <div class="copyright_wrap copyright_style_menu">
        <div class="copyright_wrap_inner">
            <div class="content_wrap">
                <div class="copyright_text">
                    Copyright © 2025 <a href="https://anantkamalstudios.com/" target="_blank">AnantkamalStudios</a>. All
                    Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- /Copyright -->

    </div>
    <!-- /.page_wrap -->

    </div>
    <!-- /Body Wrap -->
    <div id="popup_registration_form" class="popup_wrap popup_registration_form bg_tint_light">
        <a href="#" class="popup_close"></a>
        <div class="form_wrap">
            <form name="registration_form" method="post" action="<?= base_url('user_registration') ?>"
                class="popup_form registration_form" id="registration_form">
                <div class="form_left">
                    <div class="popup_form_field login_field iconed_field icon-user">
                        <input type="text" id="full_name" name="full_name" placeholder="Full name">
                    </div>
                    <div class="popup_form_field email_field iconed_field icon-mail">
                        <input type="text" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="popup_form_field email_field iconed_field icon-mail">
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="popup_form_field agree_field">
                        <input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
                        <label for="registration_agree">I agree with</label> <a href="#">Terms &amp; Conditions</a>
                    </div>
                    <div class="popup_form_field submit_field">
                        <button class="btn btn-lg" name="sign_up_button" id="sign_up_button">Sign Up</button>
                    </div>
                </div>
                <div class="form_right">
                    <div class="popup_form_field password_field iconed_field icon-lock">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="popup_form_field password_field iconed_field icon-lock">
                        <input type="password" id="newpassword" name="newpassword" placeholder="Confirm Password">
                    </div>
                    <div class="popup_form_field password_field iconed_field icon-lock">
                        <input type="text" id="phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="popup_form_field description_field">Minimum 6 characters</div>
                </div>
            </form>
            <div class="result message_block"></div>
        </div>
    </div>

    <div id="popup_login_form" class="popup_wrap popup_login bg_tint_light">
        <a href="#" class="popup_close"></a>
        <div class="form_wrap">
            <div class="form_left">
                <form class="w-100 mt-4 pt-2 login_form" id="login_form" action="javascript:void(0)" method="post">
                    <div class="popup_form_field login_field iconed_field icon-user">
                        <input type="text" id="email" name="email" placeholder="Login or Email">
                    </div>
                    <div class="popup_form_field password_field iconed_field icon-lock">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="popup_form_field remember_field">
                        <a href="#" class="forgot_password">Forgot password?</a>
                        <input type="checkbox" id="rememberme" name="rememberme">
                        <label for="rememberme">Remember me</label>
                    </div>
                    <div class="popup_form_field submit_field">
                        <button class="btn btn-lg btn-primary w-100" name="login_save" id="login_save">Login</button>
                    </div>
                </form>
            </div>
            <div class="form_right">
                <div class="login_socials_title">You can login using your social profile</div>
                <div class="login_socials_list">
                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_facebook">
                                <span class="icon-facebook"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_twitter">
                                <span class="icon-twitter"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_gplus">
                                <span class="icon-gplus"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="login_socials_problem">
                    <a href="#">Problem with login?</a>
                </div>
                <div class="result message_block"></div>
            </div>
        </div>
    </div>
    <!-- Side block with weather plugin -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    var baseUrl = '<?php echo base_url();?>';
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/script/log.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    var baseUrl = '<?php echo base_url();?>';
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/script/sign_up.js"></script>



    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/jquery/jquery.js"></script>

    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/_packed.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/global.min.js"></script>

    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/vendor/woocommerce/woocommerce.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/vendor/woocommerce/cart-fragments.min.js">
    </script>

    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/core.utils.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/core.init.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/theme.init.min.js"></script>

    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/shortcodes.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/theme/js/core.messages/core.messages.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll(".compact-card");
        const proceedBtn = document.getElementById("proceedBtn");
        let selectedCard = null;

        cards.forEach(card => {
            card.addEventListener("click", function() {
                // Remove active/selected class from all cards
                cards.forEach(c => c.classList.remove("active", "selected-card"));

                // Add class to current
                this.classList.add("active", "selected-card");
                selectedCard = this;

                // Get selected sport title
                const sportTitle = this.querySelector("h6").innerText;

                // Update proceed button text
                proceedBtn.innerText = `BOOK ${sportTitle.toUpperCase()} SLOT`;

                // Add clickable style (if needed)
                proceedBtn.classList.add("active");
            });
        });

        proceedBtn.addEventListener("click", function() {
            if (!selectedCard) {
                alert("Please select a card..");
            } else {
                // Optional: You can get sport id or other data from selected card
                // Example redirect:
                window.location.href = "<?= base_url('user_sports') ?>";
            }
        });
    });
    </script>



</body>
>>>>>>> a00c1d0 (05/07/2025)

</html>
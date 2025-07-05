<?php include('widget/header.php') ?>

<style>
.card-grid {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    gap: 1rem;
    padding-bottom: 1rem;
    scrollbar-width: thin;
}

.custom-card {
    flex: 0 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: start;
    min-width: 200px;
    max-width: 220px;
    border: none;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    background: #fff;
    transition: transform 0.3s;
    text-align: center;
    padding-top: 1rem;
    /* ✅ add space on top for visual centering */
}


.custom-card:hover {
    transform: translateY(-5px);
}


.custom-card img {
    width: 120px;
    /* Make image smaller so it's visually centered */
    height: 120px;
    object-fit: cover;

    /* Optional: make it round like a profile badge */
    margin-bottom: 0.75rem;
    /* Space between image and title */
}

.custom-card-body {
    padding: 0.75rem;
    font-family: 'Segoe UI', sans-serif;
    width: 100%;
}

.card-title {
    font-size: 1.6rem;
    font-weight: 700;
    margin: 0;
    color: #222;
}

/* Optional: Hide scrollbar on WebKit browsers */
.card-grid::-webkit-scrollbar {
    height: 6px;
}

.card-grid::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 4px;
}



/* tabs */
/* Tab Container */
.tab-slider--tabs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 0;
    margin: 20px 0;
    list-style: none;
}

/* Tab Buttons */
.tab-slider--trigger {
    display: inline-block;
    padding: 10px 24px;
    cursor: pointer;
    background: #ffffff;
    color: #333;
    border: 2px solid #322d77;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.tab-slider--trigger:hover {
    background: #322d77;
    color: #fff;
}

.tab-slider--trigger.active {
    background: #322d77;
    color: #fff;
}

/* Tab Content */
.tab-slider--body {
    margin-top: 30px;
}

/* Card Styling */
.card {
    border-radius: 16px;
    border: none;
    box-shadow: 0 10px 30px rgba(50, 45, 119, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(50, 45, 119, 0.25);
}

.card-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #322d77;
    margin-bottom: 20px;
}

.list-unstyled li {
    margin-bottom: 8px;
    color: #555;
}

.btn-reserve-court {
    margin-top: 20px;
    background: #322d77;
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    transition: background 0.3s ease, transform 0.3s ease;
}

.btn-reserve-court:hover {
    background: #1f1b5e;
    transform: translateY(-2px);
}


/* Tab Container */
.tab-slider--tabs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 0;
    margin: 20px 0;
    list-style: none;
}

/* Tab Buttons */
.tab-slider--trigger {
    display: inline-block;
    padding: 10px 24px;
    cursor: pointer;
    background: #ffffff;
    color: #333;
    border: 2px solid #322d77;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.tab-slider--trigger:hover {
    background: #322d77;
    color: #fff;
}

.tab-slider--trigger.active {
    background: #322d77;
    color: #fff;
}

/* Tab Content */
.tab-slider--body {
    margin-top: 30px;
}

/* Card Styling */
.card {
    border-radius: 16px;
    border: none;
    box-shadow: 0 10px 30px rgba(50, 45, 119, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(50, 45, 119, 0.25);
}

.card-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #322d77;
    margin-bottom: 20px;
}

.list-unstyled li {
    margin-bottom: 8px;
    color: #555;
}

.btn-reserve-court {
    margin-top: 20px;
    background: #322d77;
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    transition: background 0.3s ease, transform 0.3s ease;
}

.btn-reserve-court:hover {
    background: #1f1b5e;
    transform: translateY(-2px);
    text-align: left;
}

.tab-slider--body .card {
    max-width: 850px;
    margin: 0 auto;
}

td,
th {
    /* border: 1px solid #e4e7e8; */
    padding: 4px;
}


/* table */
.badminton-card {
    width: 100%;
}

.badminton-grid {
    display: grid;
    grid-template-columns: 60% 40%;
    align-items: center;
    gap: 20px;
}

.badminton-content li {
    font-size: 20px;
    margin-bottom: 5px;
}

.badminton-content .label {
    font-weight: bolder;
    color: black !important;
}

.badminton-content ul {
    text-align: left;
    padding-left: 0;
    list-style: none;
}

.badminton-content .card-title {
    text-align: left;
}



.badminton-image img {
    max-width: 90%;
    height: auto;
}

.Cricket-image img {
    max-width: 90%;
    height: auto;
}

.karate-image img {
    max-width: 90%;
    height: auto;
}

.dancer-image img {
    max-width: 90%;
    height: auto;
}

.zumba-image img {
    max-width: 90%;
    height: auto;
}


.arrow-icon {
    font-size: 24px;
    margin-top: 10px;
    /* space above arrow if stacked */
}


/* tabs */
</style>


<!-- Revolution Slider section -->
<div class="slider_wrap slider_fullwide slider_engine_revo slider_alias_TC-Slider1">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <!-- START REVOLUTION SLIDER 5.1 fullwidth mode -->
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default"
                    data-easeout="default" data-masterspeed="300" data-thumb="http://placehold.it/100x50"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="<?= base_url() ?>assets/theme/images/slide1_bg.jpg" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    <!-- HEADING -->
                    <div class="tp-caption tp-resizeme" id="slide-1-layer-heading" data-x="left" data-hoffset="50"
                        data-y="300" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1000;e:Power2.easeInOut;"
                        data-transform_out="opacity:0;s:300;e:Power2.easeInOut;" data-start="1200" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on"
                        style="z-index: 10; line-height: 36px; color: #ffffff; text-align: left;">
                        <span style="font-size: 28px;">Transforming Future Champions, One Game at a Time</span><br>
                        <span style="font-size: 20px;">Enroll in professional coaching or book sports facilities across
                            our multi-center locations</span>
                    </div>

                    <!-- BUTTON 1 -->
                    <div class="tp-caption rev-btn" id="slide-1-layer-9" data-x="left" data-hoffset="50" data-y="400"
                        data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                        data-transform_hover="o:1;" data-style_hover="c:#ffffff;bg:#000000;cursor:pointer;"
                        data-transform_in="opacity:0;s:600;e:Power2.easeInOut;"
                        data-transform_out="opacity:0;s:300;e:Power2.easeInOut;" data-start="1700" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" style="
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        height: 50px;
                        padding: 0 30px;
                        background: #322D77;
                        color: #ffffff;
                        font-weight: 600;
                        font-size: 16px;
                        border-radius: 20px;
                        cursor: pointer;">
                        Book Your Slot
                    </div>


                    <!-- BUTTON 2 -->
                    <div class="tp-caption rev-btn" id="slide-1-layer-10" data-x="left" data-hoffset="250" data-y="400"
                        data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;"
                        data-transform_hover="o:1;" data-style_hover="c:#ffffff;bg:#000000;cursor:pointer;"
                        data-transform_in="opacity:0;s:600;e:Power2.easeInOut;"
                        data-transform_out="opacity:0;s:300;e:Power2.easeInOut;" data-start="1900" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" style="
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        height: 50px;
                        padding: 0 30px;
                        background: #322D77;
                        color: #fff;
                        font-weight: 600;
                        font-size: 16px;
                        border-radius: 20px;">
                        View Coaching Programs
                    </div>

                </li>

            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>

<!-- coching Programm offer new -->
<div class="page_content_wrap theme_background_1">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <div class="post_item post_item_single post_format_standard page">
                <section class="post_content">
                    <div class="sc_content content_wrap reservation margin_top_70_imp margin_bottom_90_imp">
                        <h3
                            class="sc_title sc_title_underline sc_align_center margin_top_null text_align_center add_color_2 font_weight_600 font_size_3_571em">
                            Coaching Programs Offered
                        </h3>
                        <div class="columns_wrap sc_columns" style="gap: 0rem; padding: 1rem 0;">
                            <!-- Card 1 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/badminton.png"
                                                alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Badminton</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Card 2 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/karate.png" alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Karate</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 3 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/cricket.png" alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Cricket</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 4 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/zumba.png" alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Zumba</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="columns_wrap sc_columns" style="gap: 0rem; padding: 1rem 0;">
                            <!-- Card 1 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/badminton.png"
                                                alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Badminton</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 2 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/badminton.png"
                                                alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Badminton</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 3 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/badminton.png"
                                                alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Badminton</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 4 -->
                            <div class="w-100">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="card shadow rounded-4 overflow-hidden position-relative"
                                        style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem;">

                                        <!-- Image -->
                                        <div>
                                            <img src="<?= base_url() ?>assets/theme/images/dancer.png" alt="Badminton"
                                                style="height: 150px; width: auto; object-fit: contain; margin: 0 auto; display: block;">
                                        </div>

                                        <!-- Details -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <h4>Dancer</h4>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road /
                                                Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18
                                                yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00
                                                AM – 9:00 PM</p>
                                        </div>

                                        <!-- Button -->
                                        <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    <!-- /Content -->
</div>
<!-- coching Programm offer new -->
<!--  -->

<!-- Coching Programm Offer -->
<div class="page_content_wrap theme_background_1">
    <div class="content_wrap">
        <div class="container">
            <h2 class="sc_matches_title sc_item_title">Book a Court or Ground in Minutes</h2>
            <div class="text-center d-flex align-items-center justify-content-center">
                <ul class="tab-slider--tabs">
                    <li class="tab-slider--trigger active" rel="tab1">Badminton</li>
                    <li class="tab-slider--trigger" rel="tab2">Cricket</li>
                    <li class="tab-slider--trigger" rel="tab3">Basketball</li>
                    <li class="tab-slider--trigger" rel="tab4">Karate</li>
                    <li class="tab-slider--trigger" rel="tab5">Dance</li>
                    <li class="tab-slider--trigger" rel="tab6">Zumba</li>
                    <li class="tab-slider--trigger" rel="tab7">Skating</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-slider--container">
                        <!-- Tab 1 -->
                        <div id="tab1" class="tab-slider--body">
                            <div class="card shadow p-4 w-100 badminton-card">
                                <div class="badminton-grid">
                                    <div class="badminton-content">
                                        <h4 class="card-title">Badminton</h4>
                                        <ul class="list-unstyled">
                                            <li> Badminton</li>
                                            <li> Real-time availability </li>
                                            <li>Book for hourly slots</li>
                                            <li>QR code payments</li>
                                        </ul>
                                        <a href="#" class="btn-reserve-court btn btn-primary">Book a Slot Now </a>
                                    </div>
                                    <div class="badminton-image">
                                        <img src="<?= base_url() ?>assets/theme/images/badminton.png"
                                            alt="Badminton Icon">
                                        <i class="fas fa-arrow-right arrow-icon"></i>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <!-- Tab 2 -->
                        <div id="tab2" class="tab-slider--body" style="display: none;">

                            <div class="card shadow p-4 w-100 badminton-card">
                                <div class="badminton-grid">
                                    <div class="badminton-content">
                                        <h4 class="card-title">Cricket</h4>
                                        <ul class="list-unstyled">
                                            <li> Cricket</li>
                                            <li> Real-time availability </li>
                                            <li>Book for hourly slots</li>
                                            <li>QR code payments</li>
                                        </ul>
                                        <a href="#" class="btn-reserve-court btn btn-primary">Book a Slot Now </a>
                                    </div>
                                    <div class="cricket-image">
                                        <img src="<?= base_url() ?>assets/theme/images/cricket.png"
                                            alt="Badminton Icon">
                                        <i class="fas fa-arrow-right arrow-icon"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="tab3" class="tab-slider--body" style="display: none;">
                            <div class="card shadow p-4 w-100 badminton-card">
                                <div class="badminton-grid">
                                    <div class="badminton-content">
                                        <h4 class="card-title">Basketball</h4>
                                        <ul class="list-unstyled">
                                            <li> Basketball</li>
                                            <li> Real-time availability </li>
                                            <li>Book for hourly slots</li>
                                            <li>QR code payments</li>
                                        </ul>
                                        <a href="#" class="btn-reserve-court btn btn-primary">Book a Slot Now </a>
                                    </div>
                                    <div class="badminton-image">
                                        <img src="<?= base_url() ?>assets/theme/images/badminton.png"
                                            alt="Badminton Icon">
                                        <i class="fas fa-arrow-right arrow-icon"></i>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- Tab 4 -->
                        <div id="tab4" class="tab-slider--body" style="display: none;">
                            <div class="card shadow p-4 w-100 badminton-card">
                                <div class="badminton-grid">
                                    <div class="badminton-content">
                                        <h4 class="card-title">Karate</h4>
                                        <ul class="list-unstyled">
                                            <li> Karate</li>
                                            <li> Real-time availability </li>
                                            <li>Book for hourly slots</li>
                                            <li>QR code payments</li>
                                        </ul>
                                        <a href="#" class="btn-reserve-court btn btn-primary">Book a Slot Now </a>
                                    </div>
                                    <div class="badminton-image">
                                        <img src="<?= base_url() ?>assets/theme/images/karate.png" alt="Badminton Icon">
                                        <i class="fas fa-arrow-right arrow-icon"></i>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- Tab 5 -->
                        <div id="tab5" class="tab-slider--body" style="display: none;">
                            <div class="card shadow p-4 w-100 badminton-card">
                                <div class="badminton-grid">
                                    <div class="badminton-content">
                                        <h4 class="card-title">Dance</h4>
                                        <ul class="list-unstyled">
                                            <li> Dance</li>
                                            <li> Real-time availability </li>
                                            <li>Book for hourly slots</li>
                                            <li>QR code payments</li>
                                        </ul>
                                        <a href="#" class="btn-reserve-court btn btn-primary">Book a Slot Now </a>
                                    </div>
                                    <div class="dancer-image">
                                        <img src="<?= base_url() ?>assets/theme/images/dancer.png" alt="Badminton Icon">
                                        <i class="fas fa-arrow-right arrow-icon"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab 6 -->
                        <div id="tab6" class="tab-slider--body" style="display: none;">
                            <div class="card shadow p-4 w-100 badminton-card">
                                <div class="badminton-grid">
                                    <div class="badminton-content">
                                        <h4 class="card-title">Zumba</h4>
                                        <ul class="list-unstyled">
                                            <li> Zumba</li>
                                            <li> Real-time availability </li>
                                            <li>Book for hourly slots</li>
                                            <li>QR code payments</li>
                                        </ul>
                                        <a href="#" class="btn-reserve-court btn btn-primary">Book a Slot Now </a>
                                    </div>
                                    <div class="zumba-image">
                                        <img src="<?= base_url() ?>assets/theme/images/zumba.png" alt="Badminton Icon">
                                        <i class="fas fa-arrow-right arrow-icon"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Tab 8 -->
                        <div id="tab7" class="tab-slider--body" style="display: none;">
                            <div class="card shadow p-4 w-100 badminton-card">
                                <div class="badminton-grid">
                                    <div class="badminton-content">
                                        <h4 class="card-title">Skating</h4>
                                        <ul class="list-unstyled">
                                            <li> Skating</li>
                                            <li> Real-time availability </li>
                                            <li>Book for hourly slots</li>
                                            <li>QR code payments</li>
                                        </ul>
                                        <a href="#" class="btn-reserve-court btn btn-primary">Book a Slot Now </a>
                                    </div>
                                    <div class="badminton-image">
                                        <img src="<?= base_url() ?>assets/theme/images/Badminton.jpeg"
                                            alt="Badminton Icon">
                                        <i class="fas fa-arrow-right arrow-icon"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Coching Programm Offer -->

<!-- Multi-Center Overview -->
<!-- Multi-Center Overview -->


<div class="page_content_wrap page_paddings_no">
    <!-- gavit -->
    <!-- Content -->
    <div class="content">
        <div class="post_item post_item_single post_format_standard page">
            <section class="post_content">
                <div class="sc_content content_wrap reservation margin_top_70_imp margin_bottom_90_imp">
                    <h3
                        class="sc_title sc_title_underline sc_align_center margin_top_null text_align_center add_color_2 font_weight_600 font_size_3_571em">
                        Address
                    </h3>
                    <div class="columns_wrap sc_columns" style="gap: 0rem; padding: 1rem 0;">
                        <!-- Card 1 -->
                        <div class="w-100">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="card shadow rounded-4 overflow-hidden position-relative"
                                    style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem; width: 500px; ">

                                    <!-- Image -->
                                    <div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.338711270437!2d73.8419!3d18.5064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf3a803f53c5%3A0x2a4b7056f4a07c0e!2sSinhgad%20Road%2C%20Pune!5e0!3m2!1sen!2sin!4v1654523412345"
                                            width="100%" height="150" style="border:0; display: block; margin: 0 auto;"
                                            allowfullscreen="" loading="lazy">
                                        </iframe>

                                    </div>

                                    <!-- Details -->
                                    <div style="flex-grow: 1; margin-top: -1rem;">
                                        <h4>Sinhagad Road</h4>
                                        <!-- <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road / Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18 yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00 AM – 9:00 PM</p> -->
                                    </div>

                                    <!-- Button -->
                                    <!-- <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div> -->
                                </div>
                            </a>
                        </div>

                        <!-- Card 2 -->
                        <div class="w-100">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="card shadow rounded-4 overflow-hidden position-relative"
                                    style="height: 400px; display: flex; flex-direction: column; justify-content: space-between; text-align: center; padding: 1rem; width: 500px;">

                                    <!-- Image -->
                                    <div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.338711270437!2d73.8419!3d18.5064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf3a803f53c5%3A0x2a4b7056f4a07c0e!2sSinhgad%20Road%2C%20Pune!5e0!3m2!1sen!2sin!4v1654523412345"
                                            width="100%" height="150" style="border:0; display: block; margin: 0 auto;"
                                            allowfullscreen="" loading="lazy">
                                        </iframe>

                                    </div>

                                    <!-- Details -->
                                    <div style="flex-grow: 1; margin-top: -1rem;">
                                        <h4>Gangadham Chowk</h4>
                                        <!-- <p style="margin: 0.4rem 0; text-align: left; color: black;">Sinhagad Road / Gangadham Chowk</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Age group: 6–18 yrs</p>
                                            <p style="margin: 0.4rem 0; text-align: left; color: black;">Timings: 6:00 AM – 9:00 PM</p> -->
                                    </div>

                                    <!-- Button -->
                                    <!-- <div style="flex-grow: 1; margin-top: -1rem;">
                                            <a href="#" class="btn-reserve-court"> Book & Play </a>
                                        </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    <!-- address -->
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <div class="post_item post_item_single page type-page">
                <div class="post_content">
                    <!-- The Latest Photo section -->
                    <div class="margin_bottom_50_imp padding_top_84_imp">
                        <div class="sc_content content_wrap">
                            <h3
                                class="sc_title sc_title_regular sc_align_center margin_top_null margin_bottom_tiny text_align_center font_weight_600 font_size_3_929em">
                                The Latest Photo</h3>
                            <h5
                                class="sc_title sc_title_regular sc_align_center text_uppercase ltr-spc margin_top_null margin_bottom_medium text_align_center accent1 font_weight_400 font_size_0_857em">
                                amazing photoreportage</h5>
                            <p class="text_uppercase text_align_center add_color_3 margin_bottom_4_286em_imp">
                                Our Club is proud of its successful members and wants to share the best moments of the
                                tournament
                            </p>
                            <div
                                class="sc_blogger layout_portfolio_4 template_portfolio sc_blogger_horizontal no_description">
                                <div class="isotope_wrap" data-columns="4">
                                    <!-- Isotope item -->
                                    <div
                                        class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4">
                                        <!-- Post item -->
                                        <div
                                            class="post_item post_item_portfolio post_item_portfolio_4 post_format_standard odd">
                                            <div
                                                class="post_content isotope_item_content ih-item colored square effect6 left_to_right">
                                                <div class="post_featured img ">
                                                    <a href="post-single.html">
                                                        <img alt="Improve Your Strokes Using The Wall"
                                                            src="<?= base_url() ?>assets/theme/images/image-10-370x370.jpg">
                                                    </a>
                                                </div>
                                                <div class="post_info_wrap info">
                                                    <div class="info-back">
                                                        <div class="info-box">
                                                            <h4 class="post_title">
                                                                <a href="post-single.html">Improve Your Strokes Using
                                                                    The Wall</a>
                                                            </h4>
                                                            <div class="post_descr">
                                                                <p class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="#" class="post_info_date">February 6,
                                                                            2016</a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4">
                                        <div
                                            class="post_item post_item_portfolio post_item_portfolio_4 post_format_standard even">
                                            <div
                                                class="post_content isotope_item_content ih-item colored square effect6 left_to_right">
                                                <div class="post_featured img ">
                                                    <a href="post-single.html">
                                                        <img alt="The Bad Guy Who Has Done Nothing Wrong"
                                                            src="<?= base_url() ?>assets/theme/images/image-6-370x370.jpg">
                                                    </a>
                                                </div>
                                                <div class="post_info_wrap info">
                                                    <div class="info-back">
                                                        <div class="info-box">
                                                            <h4 class="post_title">
                                                                <a href="post-single.html">The Bad Guy Who Has Done
                                                                    Nothing Wrong</a>
                                                            </h4>
                                                            <div class="post_descr">
                                                                <p class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="#" class="post_info_date">December 4,
                                                                            2015</a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Post item -->
                                    </div>
                                    <!-- /Isotope item -->
                                    <!-- Isotope item -->
                                    <div
                                        class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4">
                                        <!-- Post item -->
                                        <div
                                            class="post_item post_item_portfolio post_item_portfolio_4 post_format_standard odd">
                                            <div
                                                class="post_content isotope_item_content ih-item colored square effect6 left_to_right">
                                                <div class="post_featured img ">
                                                    <a href="post-single.html">
                                                        <img alt="From Dreads to Fed: Wimbledon A-Z"
                                                            src="<?= base_url() ?>assets/theme/images/lesson-3-370x370.jpg">
                                                    </a>
                                                </div>
                                                <div class="post_info_wrap info">
                                                    <div class="info-back">
                                                        <div class="info-box">
                                                            <h4 class="post_title">
                                                                <a href="post-single.html">From Dreads to Fed: Wimbledon
                                                                    A-Z</a>
                                                            </h4>
                                                            <div class="post_descr">
                                                                <p class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="#" class="post_info_date">December 4,
                                                                            2015</a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Post item -->
                                    </div>
                                    <!-- /Isotope item -->
                                    <!-- Isotope item -->
                                    <div
                                        class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4">
                                        <!-- Post item -->
                                        <div
                                            class="post_item post_item_portfolio post_item_portfolio_4 post_format_standard even last">
                                            <div
                                                class="post_content isotope_item_content ih-item colored square effect6 left_to_right">
                                                <div class="post_featured img ">
                                                    <a href="post-single.html">
                                                        <img alt="The Wimbledon Time Machine"
                                                            src="<?= base_url() ?>assets/theme/images/lesson-2-370x370.jpg">
                                                    </a>
                                                </div>
                                                <div class="post_info_wrap info">
                                                    <div class="info-back">
                                                        <div class="info-box">
                                                            <h4 class="post_title">
                                                                <a href="post-single.html">The Wimbledon Time
                                                                    Machine</a>
                                                            </h4>
                                                            <div class="post_descr">
                                                                <p class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="#" class="post_info_date">December 4,
                                                                            2015</a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Post item -->
                                    </div>
                                    <!-- /Isotope item -->
                                </div>
                            </div>
                            <div class="sc_section margin_top_small margin_bottom_null aligncenter">
                                <div class="sc_section_inner">
                                    <a href="#"
                                        class="sc_button sc_button_square sc_button_style_filled sc_button_size_large sc_button_style_1 margin_bottom_null text_align_center">
                                        <span class="cube flip-to-top">
                                            <span class="default-state">
                                                <span>View All</span>
                                            </span>
                                            <span class="active-state">
                                                <span>View All</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /The Latest Photo section -->
                </div>
            </div>
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
                                <a href="<?= base_url() ?>">
                                    <img src="<?= base_url() ?>assets/theme/images/nahata_logo.webp" class="logo_main"
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
                                    src="<?= base_url() ?>assets/theme/images/image-10-75x75.jpg">
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
                                    src="<?= base_url() ?>assets/theme/images/image-6-75x75.jpg">
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
</div>
<!-- Side block with weather plugin -->

<!-- Side block with weather plugin -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".tab-slider--trigger").click(function() {
        var activeTab = $(this).attr("rel");
        $(".tab-slider--body").hide();
        $("#" + activeTab).fadeIn();

        $(".tab-slider--trigger").removeClass("active");
        $(this).addClass("active");
    });
});
</script>


<!-- Bootstrap JS -->
<!-- shankar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var baseUrl = '<?php echo base_url(); ?>';
</script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/script/log.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var baseUrl = '<?php echo base_url(); ?>';
</script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/script/sign_up.js"></script>

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/jquery/jquery.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/_packed.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/global.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/vendor/revslider/jquery.themepunch.tools.min.js">
</script>
<script type="text/javascript"
    src="<?= base_url() ?>assets/theme/js/vendor/revslider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript"
    src="<?= base_url() ?>assets/theme/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
    src="<?= base_url() ?>assets/theme/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js">
</script>
<script type="text/javascript"
    src="<?= base_url() ?>assets/theme/js/vendor/revslider/extensions/revolution.extension.navigation.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/vendor/woocommerce/woocommerce.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/vendor/woocommerce/cart-fragments.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/core.utils.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/core.init.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/theme.init.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/shortcodes.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/theme/js/core.messages/core.messages.min.js"></script>

<scripttype="text /javascript" src="<?= base_url() ?>assets/theme/js/swiper/swiper.min.js">
    </scripttype=>

    <script type="text/javascript" src="<?= base_url() ?>http://maps.google.com/maps/api/js?key="></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/theme/js/core.googlemap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/script/login.js"></script>
    </body>

    </html>
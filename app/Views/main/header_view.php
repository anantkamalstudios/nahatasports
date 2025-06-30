<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="WRAPCODERS" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Nahata Sport</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/logo.jpg" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/daterangepicker.min.css" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/theme.min.css" />
</head>
<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Left !-->
        <div class="header-left d-flex align-items-center gap-4">
            <!--! [Start] nxl-head-mobile-toggler !-->
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!--! [Start] nxl-head-mobile-toggler !-->
            <!--! [Start] nxl-navigation-toggle !-->
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>
            <!--! [End] nxl-navigation-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu-toggle !-->
            <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                    <i class="feather-align-left"></i>
                </a>
            </div>
            <!--! [End] nxl-lavel-mega-menu-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu !-->
            <div class="nxl-drp-link nxl-lavel-mega-menu">
                <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                    <a href="javascript:void(0)" id="nxl-lavel-mega-menu-hide">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <!--! [Start] nxl-lavel-mega-menu-wrapper !-->
                <div class="nxl-lavel-mega-menu-wrapper d-flex gap-3">

                    <div class="dropdown nxl-h-item nxl-mega-menu">
                        <!-- <a href="javascript:void(0);" class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-auto-close="outside"> Mega Menu </a> -->
                        <div class="dropdown-menu nxl-h-dropdown" id="mega-menu-dropdown">
                            <div class="d-lg-flex align-items-start">

                                <div class="tab-content nxl-mega-menu-tabs-content">
                                    <!--! [Start] v-pills-general !-->
                                    <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel">
                                        <div class="mb-4 rounded-3 border">
                                            <img src="<?= base_url() ?>assets/images/banner/mockup.png" alt="" class="img-fluid rounded-3" />
                                        </div>
                                        <h6 class="fw-bolder">Duralux - Admin Dashboard UiKit</h6>
                                        <p class="fs-12 fw-normal text-muted text-truncate-3-line">Get started Duralux with Duralux up and running. Duralux bootstrap template docs helps you to get started with simple html codes.</p>
                                        <a href="javascript:void(0);" class="fs-13 fw-bold text-primary">Get Started &rarr;</a>
                                    </div>
                                    <!--! [End] v-pills-general !-->
                                    <!--! [Start] v-pills-applications !-->
                                    <div class="tab-pane fade" id="v-pills-applications" role="tabpanel">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <h6 class="dropdown-item-title">Applications</h6>
                                                <a href="apps-chat.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Chat</span>
                                                </a>
                                                <a href="apps-email.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Email</span>
                                                </a>
                                                <a href="apps-tasks.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Tasks</span>
                                                </a>
                                                <a href="apps-notes.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Notes</span>
                                                </a>
                                                <a href="apps-storage.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Storage</span>
                                                </a>
                                                <a href="apps-calendar.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Calendar</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="nxl-mega-menu-image">
                                                    <img src="<?= base_url() ?>assets/images/general/full-avatar.png" alt="" class="img-fluid full-user-avtar" />
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="border-top-dashed" />
                                        <div class="d-lg-flex align-items-center justify-content-between">
                                            <div>
                                                <h6 class="menu-item-heading text-truncate-1-line">Need more application?</h6>
                                                <p class="fs-12 text-muted mb-0 text-truncate-3-line">We are ready to build custom applications.</p>
                                            </div>
                                            <div class="mt-2 mt-lg-0">
                                                <a href="mailto:wrapcoders@gmail.com" class="fs-13 fw-bold text-primary">Contact Us &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! [End] v-pills-applications !-->
                                    <!--! [Start] v-pills-integrations !-->
                                    <div class="tab-pane fade" id="v-pills-integrations" role="tabpanel">
                                        <div class="row g-lg-4 nxl-mega-menu-integrations">
                                            <div class="col-lg-12 d-lg-flex align-items-center justify-content-between mb-4 mb-lg-0">
                                                <div>
                                                    <h6 class="fw-bolder text-dark">Integrations</h6>
                                                    <p class="fs-12 text-muted mb-0">Connect amazing apps on your bucket.</p>
                                                </div>
                                                <div class="mt-2 mt-lg-0">
                                                    <a href="javascript:void(0);" class="fs-13 text-primary">Add New &rarr;</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/app-store.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">App Store</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/spotify.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Spotify</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/figma.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Figma</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/shopify.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Shopify</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/paypal.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Paypal</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/gmail.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Gmail</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/dropbox.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Dropbox</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/google-drive.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Google Drive</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/github.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Github</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/gitlab.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Gitlab</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/facebook.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Facebook</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/pinterest.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Pinterest</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/instagram.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Instagram</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/twitter.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Twitter</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <div class="menu-item-icon">
                                                        <img src="<?= base_url() ?>assets/images/brand/youtube.png" alt="" class="img-fluid" />
                                                    </div>
                                                    <div class="menu-item-title">Youtube</div>
                                                    <div class="menu-item-arrow">
                                                        <i class="feather-arrow-right"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <hr class="border-top-dashed" />
                                        <p class="fs-13 text-muted mb-0">Need help? Contact our <a href="javascript:void(0);" class="fst-italic">support center</a></p>
                                    </div>
                                    <!--! [End] v-pills-integrations !-->
                                    <!--! [Start] v-pills-components !-->
                                    <div class="tab-pane fade" id="v-pills-components" role="tabpanel">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-8">
                                                <div class="row g-4">
                                                    <div class="col-lg-4">
                                                        <h6 class="dropdown-item-title">Navigation</h6>
                                                        <a href="javascript:void(0);" class="dropdown-item">CRM</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Analytics</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Sales</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Leads</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Projects</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Timesheets</a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h6 class="dropdown-item-title">Pages</h6>
                                                        <a href="javascript:void(0);" class="dropdown-item">Leads </a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Payments</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Projects</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Proposals</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Customers</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Documentations</a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h6 class="dropdown-item-title">Authentication</h6>
                                                        <a href="javascript:void(0);" class="dropdown-item">Login</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Regiser</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Error-404</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Reset Pass</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Verify OTP</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Maintenance</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="nxl-mega-menu-image">
                                                    <img src="<?= base_url() ?>assets/images/banner/1.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="mt-4">
                                                    <a href="mailto:wrapcoders@gmail.com" class="fs-13 fw-bold">View all resources on Duralux &rarr;</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! [End] v-pills-components !-->
                                    <!--! [Start] v-pills-authentication !-->
                                    <div class="tab-pane fade" id="v-pills-authentication" role="tabpanel">
                                        <div class="row g-4 align-items-center nxl-mega-menu-authentication">
                                            <div class="col-xl-8">
                                                <div class="row g-4">
                                                    <div class="col-lg-4">
                                                        <h6 class="dropdown-item-title">Cover</h6>
                                                        <a href="./auth-login-cover.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Login</span>
                                                        </a>
                                                        <a href="./auth-register-cover.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Register</span>
                                                        </a>
                                                        <a href="./auth-404-cover.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Error-404</span>
                                                        </a>
                                                        <a href="./auth-reset-cover.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Reset Pass</span>
                                                        </a>
                                                        <a href="./auth-verify-cover.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Verify OTP</span>
                                                        </a>
                                                        <a href="./auth-maintenance-cover.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Maintenance</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h6 class="dropdown-item-title">Minimal</h6>
                                                        <a href="./auth-login-minimal.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Login</span>
                                                        </a>
                                                        <a href="./auth-register-minimal.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Register</span>
                                                        </a>
                                                        <a href="./auth-404-minimal.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Error-404</span>
                                                        </a>
                                                        <a href="./auth-reset-minimal.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Reset Pass</span>
                                                        </a>
                                                        <a href="./auth-verify-minimal.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Verify OTP</span>
                                                        </a>
                                                        <a href="./auth-maintenance-minimal.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Maintenance</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h6 class="dropdown-item-title">Creative</h6>
                                                        <a href="./auth-login-creative.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Login</span>
                                                        </a>
                                                        <a href="./auth-register-creative.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Register</span>
                                                        </a>
                                                        <a href="./auth-404-creative.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Error-404</span>
                                                        </a>
                                                        <a href="./auth-reset-creative.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Reset Pass</span>
                                                        </a>
                                                        <a href="./auth-verify-creative.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Verify OTP</span>
                                                        </a>
                                                        <a href="./auth-maintenance-creative.html" class="dropdown-item">
                                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                            <span>Maintenance</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div id="carouselResourcesCaptions" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                                        <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="1"></button>
                                                        <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="2"></button>
                                                        <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="3"></button>
                                                        <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="4"></button>
                                                        <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="5"></button>
                                                    </div>
                                                    <div class="carousel-inner rounded-3">
                                                        <div class="carousel-item active">
                                                            <div class="nxl-mega-menu-image">
                                                                <img src="<?= base_url() ?>assets/images/banner/6.jpg" alt="" class="img-fluid d-block w-100" />
                                                            </div>
                                                            <div class="carousel-caption">
                                                                <h5 class="carousel-caption-title text-truncate-1-line">Shopify eCommerce Store</h5>
                                                                <p class="carousel-caption-desc">Some representative placeholder content for the first slide.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="nxl-mega-menu-image">
                                                                <img src="<?= base_url() ?>assets/images/banner/5.jpg" alt="" class="img-fluid d-block w-100" />
                                                            </div>
                                                            <div class="carousel-caption">
                                                                <h5 class="carousel-caption-title text-truncate-1-line">iOS Apps Development</h5>
                                                                <p class="carousel-caption-desc">Some representative placeholder content for the second slide.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="nxl-mega-menu-image">
                                                                <img src="<?= base_url() ?>assets/images/banner/4.jpg" alt="" class="img-fluid d-block w-100" />
                                                            </div>
                                                            <div class="carousel-caption">
                                                                <h5 class="carousel-caption-title text-truncate-1-line">Figma Dashboard Design</h5>
                                                                <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="nxl-mega-menu-image">
                                                                <img src="<?= base_url() ?>assets/images/banner/3.jpg" alt="" class="img-fluid d-block w-100" />
                                                            </div>
                                                            <div class="carousel-caption">
                                                                <h5 class="carousel-caption-title text-truncate-1-line">React Dashboard Design</h5>
                                                                <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="nxl-mega-menu-image">
                                                                <img src="<?= base_url() ?>assets/images/banner/2.jpg" alt="" class="img-fluid d-block w-100" />
                                                            </div>
                                                            <div class="carousel-caption">
                                                                <h5 class="carousel-caption-title text-truncate-1-line">Standup Team Meeting</h5>
                                                                <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="nxl-mega-menu-image">
                                                                <img src="<?= base_url() ?>assets/images/banner/1.jpg" alt="" class="img-fluid d-block w-100" />
                                                            </div>
                                                            <div class="carousel-caption">
                                                                <h5 class="carousel-caption-title text-truncate-1-line">Zoom Team Meeting</h5>
                                                                <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! [End] v-pills-authentication !-->
                                    <!--! [Start] v-pills-miscellaneous !-->
                                    <div class="tab-pane fade nxl-mega-menu-miscellaneous" id="v-pills-miscellaneous" role="tabpanel">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs flex-column flex-lg-row nxl-mega-menu-miscellaneous-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#v-pills-projects" type="button" role="tab">
                                                    <span class="menu-icon">
                                                        <i class="feather-cast"></i>
                                                    </span>
                                                    <span class="menu-title">Projects</span>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#v-pills-services" type="button" role="tab">
                                                    <span class="menu-icon">
                                                        <i class="feather-check-square"></i>
                                                    </span>
                                                    <span class="menu-title">Services</span>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#v-pills-features" type="button" role="tab">
                                                    <span class="menu-icon">
                                                        <i class="feather-airplay"></i>
                                                    </span>
                                                    <span class="menu-title">Features</span>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#v-pills-blogs" type="button" role="tab">
                                                    <span class="menu-icon">
                                                        <i class="feather-bold"></i>
                                                    </span>
                                                    <span class="menu-title">Blogs</span>
                                                </button>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content nxl-mega-menu-miscellaneous-content">
                                            <div class="tab-pane fade active show" id="v-pills-projects" role="tabpanel">
                                                <div class="row g-4">
                                                    <div class="col-xxl-2 d-lg-none d-xxl-block">
                                                        <h6 class="dropdown-item-title">Categories</h6>
                                                        <a href="javascript:void(0);" class="dropdown-item">Support</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Services</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Applicatios</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">eCommerce</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Development</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Miscellaneous</a>
                                                    </div>
                                                    <div class="col-xxl-10">
                                                        <div class="row g-4">
                                                            <div class="col-xl-6">
                                                                <div class="d-lg-flex align-items-center gap-3">
                                                                    <div class="wd-150 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/1.jpg" alt="" class="img-fluid rounded-3" />
                                                                    </div>
                                                                    <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Shopify eCommerce Store</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                        <div class="hstack gap-2 mt-3">
                                                                            <div class="avatar-image avatar-sm">
                                                                                <img src="<?= base_url() ?>assets/images/avatar/1.png" alt="" class="img-fluid" />
                                                                            </div>
                                                                            <a href="javascript:void(0);" class="fs-12">Alexandra Della</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="d-lg-flex align-items-center gap-3">
                                                                    <div class="wd-150 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/2.jpg" alt="" class="img-fluid rounded-3" />
                                                                    </div>
                                                                    <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">iOS Apps Development</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                        <div class="hstack gap-2 mt-3">
                                                                            <div class="avatar-image avatar-sm">
                                                                                <img src="<?= base_url() ?>assets/images/avatar/2.png" alt="" class="img-fluid" />
                                                                            </div>
                                                                            <a href="javascript:void(0);" class="fs-12">Green Cute</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="d-lg-flex align-items-center gap-3">
                                                                    <div class="wd-150 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/3.jpg" alt="" class="img-fluid rounded-3" />
                                                                    </div>
                                                                    <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Figma Dashboard Design</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                        <div class="hstack gap-2 mt-3">
                                                                            <div class="avatar-image avatar-sm">
                                                                                <img src="<?= base_url() ?>assets/images/avatar/3.png" alt="" class="img-fluid" />
                                                                            </div>
                                                                            <a href="javascript:void(0);" class="fs-12">Malanie Hanvey</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="d-lg-flex align-items-center gap-3">
                                                                    <div class="wd-150 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/4.jpg" alt="" class="img-fluid rounded-3" />
                                                                    </div>
                                                                    <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">React Dashboard Design</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                        <div class="hstack gap-2 mt-3">
                                                                            <div class="avatar-image avatar-sm">
                                                                                <img src="<?= base_url() ?>assets/images/avatar/4.png" alt="" class="img-fluid" />
                                                                            </div>
                                                                            <a href="javascript:void(0);" class="fs-12">Kenneth Hune</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-services" role="tabpanel">
                                                <div class="row g-4 nxl-mega-menu-miscellaneous-services">
                                                    <div class="col-xl-8">
                                                        <div class="row g-4">
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg rounded bg-primary text-white">
                                                                        <i class="feather-bar-chart-2 mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Analytics Services</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg rounded bg-danger text-white">
                                                                        <i class="feather-feather mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Content Writing</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg rounded bg-warning text-white">
                                                                        <i class="feather-bell mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">SEO (Search Engine Optimization)</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg rounded bg-success text-white">
                                                                        <i class="feather-shield mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Security Services</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg rounded bg-teal text-white">
                                                                        <i class="feather-shopping-cart mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">eCommerce Services</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg rounded bg-dark text-white">
                                                                        <i class="feather-life-buoy mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Support Services</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="p-3 bg-soft-dark text-dark rounded d-lg-flex align-items-center justify-content-between">
                                                                    <div class="fs-13">
                                                                        <i class="feather-star me-2"></i>
                                                                        <span>View all services on Duralux.</span>
                                                                    </div>
                                                                    <div class="mt-2 mt-lg-0">
                                                                        <a href="javascript:void(0);" class="fs-13 text-primary">Learn More &rarr;</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div id="carouselServicesCaptions" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-indicators">
                                                                <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                                                <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="1"></button>
                                                                <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="2"></button>
                                                                <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="3"></button>
                                                                <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="4"></button>
                                                                <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="5"></button>
                                                            </div>
                                                            <div class="carousel-inner rounded-3">
                                                                <div class="carousel-item active">
                                                                    <div class="nxl-mega-menu-image">
                                                                        <img src="<?= base_url() ?>assets/images/banner/6.jpg" alt="" class="img-fluid d-block w-100" />
                                                                    </div>
                                                                    <div class="carousel-caption">
                                                                        <h5 class="carousel-caption-title text-truncate-1-line">Shopify eCommerce Store</h5>
                                                                        <p class="carousel-caption-desc">Some representative placeholder content for the first slide.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="nxl-mega-menu-image">
                                                                        <img src="<?= base_url() ?>assets/images/banner/5.jpg" alt="" class="img-fluid d-block w-100" />
                                                                    </div>
                                                                    <div class="carousel-caption">
                                                                        <h5 class="carousel-caption-title text-truncate-1-line">iOS Apps Development</h5>
                                                                        <p class="carousel-caption-desc">Some representative placeholder content for the second slide.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="nxl-mega-menu-image">
                                                                        <img src="<?= base_url() ?>assets/images/banner/4.jpg" alt="" class="img-fluid d-block w-100" />
                                                                    </div>
                                                                    <div class="carousel-caption">
                                                                        <h5 class="carousel-caption-title text-truncate-1-line">Figma Dashboard Design</h5>
                                                                        <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="nxl-mega-menu-image">
                                                                        <img src="<?= base_url() ?>assets/images/banner/3.jpg" alt="" class="img-fluid d-block w-100" />
                                                                    </div>
                                                                    <div class="carousel-caption">
                                                                        <h5 class="carousel-caption-title text-truncate-1-line">React Dashboard Design</h5>
                                                                        <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="nxl-mega-menu-image">
                                                                        <img src="<?= base_url() ?>assets/images/banner/2.jpg" alt="" class="img-fluid d-block w-100" />
                                                                    </div>
                                                                    <div class="carousel-caption">
                                                                        <h5 class="carousel-caption-title text-truncate-1-line">Standup Team Meeting</h5>
                                                                        <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="nxl-mega-menu-image">
                                                                        <img src="<?= base_url() ?>assets/images/banner/1.jpg" alt="" class="img-fluid d-block w-100" />
                                                                    </div>
                                                                    <div class="carousel-caption">
                                                                        <h5 class="carousel-caption-title text-truncate-1-line">Zoom Team Meeting</h5>
                                                                        <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-features" role="tabpanel">
                                                <div class="row g-4 nxl-mega-menu-miscellaneous-features">
                                                    <div class="col-xl-8">
                                                        <div class="row g-4">
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg bg-soft-primary text-primary border-soft-primary rounded">
                                                                        <i class="feather-bell mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Notifications</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg bg-soft-danger text-danger border-soft-danger rounded">
                                                                        <i class="feather-bar-chart-2 mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Analytics</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg bg-soft-success text-success border-soft-success rounded">
                                                                        <i class="feather-link-2 mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Ingetrations</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg bg-soft-indigo text-indigo border-soft-indigo rounded">
                                                                        <i class="feather-book mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Documentations</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg bg-soft-warning text-warning border-soft-warning rounded">
                                                                        <i class="feather-shield mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Security</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="avatar-text avatar-lg bg-soft-teal text-teal border-soft-teal rounded">
                                                                        <i class="feather-life-buoy mx-auto"></i>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Support</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 offset-xxl-1 col-xl-4">
                                                        <div class="nxl-mega-menu-image">
                                                            <img src="<?= base_url() ?>assets/images/banner/1.jpg" alt="" class="img-fluid" />
                                                        </div>
                                                        <div class="mt-4">
                                                            <a href="mailto:wrapcoders@gmail.com" class="fs-13 fw-bold">View all features on Duralux &rarr;</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-blogs" role="tabpanel">
                                                <div class="row g-4">
                                                    <div class="col-xxl-2 d-lg-none d-xxl-block">
                                                        <h6 class="dropdown-item-title">Categories</h6>
                                                        <a href="javascript:void(0);" class="dropdown-item">Support</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Services</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Applicatios</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">eCommerce</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Development</a>
                                                        <a href="javascript:void(0);" class="dropdown-item">Miscellaneous</a>
                                                    </div>
                                                    <div class="col-xxl-10">
                                                        <div class="row g-4">
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <div class="wd-100 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/1.jpg" alt="" class="img-fluid rounded-3 border border-3" />
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                        <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <div class="wd-100 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/2.jpg" alt="" class="img-fluid rounded-3 border border-3" />
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                        <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <div class="wd-100 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/3.jpg" alt="" class="img-fluid rounded-3 border border-3" />
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                        <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <div class="wd-100 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/4.jpg" alt="" class="img-fluid rounded-3 border border-3" />
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                        <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <div class="wd-100 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/5.jpg" alt="" class="img-fluid rounded-3 border border-3" />
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                        <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-lg-6">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <div class="wd-100 rounded-3">
                                                                        <img src="<?= base_url() ?>assets/images/banner/6.jpg" alt="" class="img-fluid rounded-3 border border-3" />
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                        </a>
                                                                        <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                        <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="p-3 bg-soft-dark text-dark rounded d-flex align-items-center justify-content-between gap-4">
                                                                    <div class="fs-13 text-truncate-1-line">
                                                                        <i class="feather-star me-2"></i>
                                                                        <strong>Version 2.3.2 is out!</strong>
                                                                        <span>Learn more about our news and schedule reporting.</span>
                                                                    </div>
                                                                    <div class="wd-100 text-end">
                                                                        <a href="javascript:void(0);" class="fs-13 text-primary">Learn More &rarr;</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! [End] v-pills-miscellaneous !-->
                                </div>
                                <!--! [End] nxl-mega-menu-tabs-content !-->
                            </div>
                        </div>
                    </div>
                    <!--! [End] nxl-h-item nxl-mega-menu !-->
                </div>
                <!--! [End] nxl-lavel-mega-menu-wrapper !-->
            </div>
            <!--! [End] nxl-lavel-mega-menu !-->
        </div>
        <!--! [End] Header Left !-->
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">

                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                        <img src="<?= base_url() ?>assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar me-0" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url() ?>assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar" />
                                <div>
                                    <h6 class="text-dark mb-0"><span class="fs-12 fw-medium text-muted"><strong><?php echo $full_name; ?></strong></span></h6>
                                    <span class="fs-12 fw-medium text-muted"><strong><?php echo $email; ?></strong></span>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown">

                            <div class="dropdown-menu">

                            </div>
                        </div>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a href="<?php echo base_url() ?>profile" class="dropdown-item">
                            <i class="feather-user"></i>
                            <span>Profile Details</span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="<?php echo base_url('logout') ?>" class="dropdown-item">
                            <i class="feather-log-out"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>
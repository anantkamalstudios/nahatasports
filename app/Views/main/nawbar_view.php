<style>
<<<<<<< HEAD
    .logo-lg {
  display: block; /* Ensure it’s visible */
  width: 150px; /* Adjust the size of the large logo */
}

.logo-sm {
  display: none; /* Hide the small logo by default */
}

@media (max-width: 767px) {
  .logo-lg {
    display: none; /* Hide the large logo on smaller screens */
  }
  
  .logo-sm {
    display: block; /* Show the small logo on smaller screens */
    width: 100px; /* Adjust the size of the small logo */
  }
}

</style>
<nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.html" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="<?=base_url()?>assets/images/logo.jpg" alt="" class="logo logo-lg" />
                    <img src="<?=base_url()?>assets/images/logo.jpg" alt="" class="logo logo-sm" />
                </a>
            </div>

            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="<?= base_url() ?>dashboard" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboard</span>
                        </a>
                
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="<?= base_url() ?>venues_book" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-cast"></i></span>
                            <span class="nxl-mtext">Venue Bookings</span>
                        </a>
                        
                    </li>
                     <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-cast"></i></span>
                            <span class="nxl-mtext">Sports</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>sports">Add Sports</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>sport_banners">Add Sports Bannar</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-send"></i></span>
                            <span class="nxl-mtext">Course Bookings</span>
                        </a>
                       
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                            <span class="nxl-mtext">Venues</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                         <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>venues">All Venues</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>amenities">Amenities</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>nahata_court">Courts</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>banners">Banners</a></li>
                        </ul> 
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Coachings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                         <ul class="nxl-submenu">
                            <!-- <li class="nxl-item"><a class="nxl-link" href="#">Coachings Sports</a></li> -->
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>coach_sport">Add Coachings Sports</a></li>
                            <!-- <li class="nxl-item"><a class="nxl-link" href="#">Sports Banners</a></li> -->
                              
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>coaching">Add Coaching</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>batch">Batches</a></li>
                        </ul> 
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Coaching Reports</span>
                        </a>
                        
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="<?= base_url() ?>post_category" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Post Category</span>
                        </a>
                        
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
=======
.logo-lg {
    display: block;
    /* Ensure it’s visible */
    width: 150px;
    /* Adjust the size of the large logo */
}

.logo-sm {
    display: none;
    /* Hide the small logo by default */
}

@media (max-width: 767px) {
    .logo-lg {
        display: none;
        /* Hide the large logo on smaller screens */
    }

    .logo-sm {
        display: block;
        /* Show the small logo on smaller screens */
        width: 100px;
        /* Adjust the size of the small logo */
    }
}
</style>
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="<?=base_url()?>assets/images/logo.jpg" alt="" class="logo logo-lg" />
                <img src="<?=base_url()?>assets/images/logo.jpg" alt="" class="logo logo-sm" />
            </a>
        </div>

        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="<?= base_url() ?>dashboard" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboard</span>
                    </a>

                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="<?= base_url() ?>venues_book" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Venue Bookings</span>
                    </a>

                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Sports</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>sports">Add Sports</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>sport_banners">Add Sports
                                Bannar</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Course Bookings</span>
                    </a>

                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                        <span class="nxl-mtext">Venues</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>venues">All Venues</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>amenities">Amenities</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>nahata_court">Courts</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>banners">Banners</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                        <span class="nxl-mtext">Coachings</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <!-- <li class="nxl-item"><a class="nxl-link" href="#">Coachings Sports</a></li> -->
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>coach_sport">Add Coachings
                                Sports</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="#">Sports Banners</a></li> -->

                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>coaching">Add Coaching</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>batch">Batches</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Coaching Reports</span>
                    </a>

                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="<?= base_url() ?>post_category" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Post Category</span>
                    </a>

                </li>
                <!-- shankar -->
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">CMS</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>hero">Hero</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>program">Program</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>courtorground">Court Or
                                Ground</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>multicenter">Our Multi
                                Center</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>studentparents">Student
                                Parents Section</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>events">Events</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>testimonials">Testimonial</a>
                        </li>
                        <li class="nxl-item"><a class="nxl-link" href="<?= base_url() ?>faq">FAQ</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
>>>>>>> a00c1d0 (05/07/2025)

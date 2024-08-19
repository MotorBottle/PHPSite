<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/favicon.ico" type="image/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/lightcase.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- header start -->
<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-4 my-auto">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/picture/logo.png" alt="LOGO">
                </a>
            </div>
            <div class="col-lg-9 col-8">
                <div class="menu-area">
                    <div class="main-menu">
                        <nav id="main-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary', // Ensure this is registered in functions.php
                                'container' => false,
                                'menu_class' => '', // Add class if needed
                                'items_wrap' => '<ul>%3$s</ul>',
                            ));
                            ?>
                        </nav>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="site-btn d-inline d-lg-none d-xl-inline">Let's Talk</a>
                </div>
            </div>
            <div class="col-xl-12 text-right">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

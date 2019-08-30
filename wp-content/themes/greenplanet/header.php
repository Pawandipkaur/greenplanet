<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.slim.min.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
            <div class="top-strip-wrap">
                <div class="container">
                    <div class="top-strip-inner d-flex align-items-center justify-content-between flex-wrap flex-xs-column">
                        <ul class="list-unstyled info-ul">
                            <li class="d-inline-block">
                                <i class="far fa-envelope"></i>
                                <a href="mailto:info@planetgreen.com" class="title">info@planetgreen.com</a>
                            </li>
                            <li class="d-inline-block">
                                <i class="fas fa-phone-alt"></i>
                                <a href="telto:+8803478397805" class="title">+88 0347 8397805</a>
                            </li>
                            <li class="d-inline-block">
                                <i class="far fa-clock"></i>
                                <span class="title">Monday-Friday: 8:00 am to 5:00 pm</span>
                            </li>
                        </ul>
                        <ul class="list-unstyled social-ul">
                            <li class="d-inline-block">
                                <a href="javascript:;">
                                <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;">
                                <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;">
                                <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;">
                                <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="javascript:;">
                                <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-strip-wrap">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="Comapny-logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo home_url('/'); ?>">
                                    <i class="fas fa-home"></i>
                                    <span class="nav-title">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url('/'); ?>our-mission/">
                                    <i class="fas fa-rocket"></i>
                                    <span class="nav-title">Our Mission</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:;">
                                    <i class="fas fa-calendar-check"></i>
                                    <span class="nav-title">The Plan</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url('/'); ?>graphs/">
                                    <i class="fas fa-chart-line"></i>
                                    <span class="nav-title">Graphs</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url('/'); ?>donate/">
                                    <i class="fas fa-hand-holding-usd"></i>
                                    <span class="nav-title">Donate</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url('/'); ?>volunteer/">
                                    <i class="fas fa-hand-paper"></i>
                                    <span class="nav-title">Volunteer</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url('/'); ?>sponsor/">
                                    <i class="fas fa-users"></i>
                                    <span class="nav-title">Sponsor</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url('/'); ?>pledge/">
                                    <i class="fas fa-handshake"></i>
                                    <span class="nav-title">Pledge</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
		</header>
		<section class="banner-section">
            <div class="banner-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner-3.png');">
                <p>A healthy planet is a green planet</p>
                <div class="dvdr"></div>
                <h2>Carbon Capture Solutions</h2>
                <h5>Together we can make a big difference 1 tree at a time</h5>
                <div class="btn-div">
                    <button class="btn btn-custom green-bg round-look color-white" attr-href="<?php echo home_url('/'); ?>donate/">Donate</button>
                    <button class="btn btn-custom white-bg round-look color-black" attr-href="<?php echo home_url('/'); ?>volunteer/">Volunteer</button>
                    <button class="btn btn-custom green-bg round-look color-white" attr-href="<?php echo home_url('/'); ?>sponsor/">Sponsor</button>
                    <button class="btn btn-custom white-bg round-look color-black" attr-href="<?php echo home_url('/'); ?>pledge/">Pledge</button>
                </div>
            </div>
        </section>

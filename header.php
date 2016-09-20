<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--<link rel="stylesheet" href="wp-content/themes/codekracken/assets/css/main.css">-->
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
									<span class="symbol">
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
									<!--<img src="images/logo.svg" alt="" />-->
									</span>
									<span class="title"><?php bloginfo( 'name' ); ?></span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<?php 
                            wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => false ) );
                        ?>
					</nav>
<!-- Main -->
					<div id="main">
						<div class="inner">
						
					
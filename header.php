<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">1
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900,300' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12">

				<nav class="site-navigation">
	
					<div class="navbar">
						<div class="navbar-header">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
	
						<!-- Your site title as branding in the menu -->
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/jqluv-hand-coded.png" alt="JQluv - hand coded with love">
						</a>
					</div>
	
					<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => '',
						'menu_id' => 'main-menu',
						'walker' => new wp_bootstrap_navwalker()
					)
				); ?>
	
					</div><!-- .navbar -->
	
				</nav><!-- .site-navigation -->				

			</div>
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->



<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">



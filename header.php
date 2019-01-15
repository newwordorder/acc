<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:400,700|Libre+Franklin:400,700" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php if( is_front_page() ): ?>

	<!-- ******************* The Navbar Area ******************* -->
<div id="header" class="header" >

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

			<div class="" >
				<div class="header__inner container-fluid">

				<a href="<?php echo get_home_url(); ?>" id="site-logo" class="header__logo">

					<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/acc_logo.svg" alt="New Life">

				</a>

				<a id="toggleMenu" class="toggle-menu">
						<span class="line"></span>
						<span class="line"></span>
				</a>


				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'header__navigation',
						'container_id'    => 'headerNavDropdown',
						'menu_class'      => 'header-nav navigation',
						'fallback_cb'     => '',
						'menu_id'         => 'home-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</div>
			</div><!-- .container -->

	</div><!-- #header -->

			<?php else: ?>


	<div id="header" class="header" style="background-color:#fff" >

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<div class="container-fluid" >
			<div class="header__inner">

			<a href="<?php echo get_home_url(); ?>" id="site-logo" class="header__logo">

				<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/acc_logo--2.svg" alt="New Life">

			</a>

			<a id="toggleMenu" class="toggle-menu">
					<span class="line"></span>
					<span class="line"></span>
			</a>


			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'header__navigation',
					'container_id'    => 'headerNavDropdown',
					'menu_class'      => 'header-nav navigation',
					'fallback_cb'     => '',
					'menu_id'         => 'page-menu',
					'walker'          => new understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
			</div>
		</div><!-- .container -->

		<div class="container-fluid" style="position:relative;">
			<div class="header__inner header__inner--sub">
					<!-- The WordPress Menu goes here -->
			<?php if(is_sub_page( 'Our Business' )): ?>
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'business-menu',
					'container_class' => 'header__navigation container',
					'container_id'    => 'business-menu-container ',
					'menu_class'      => 'header-nav navigation',
					'fallback_cb'     => '',
					'menu_id'         => 'sub-menu',
					'walker'          => new understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
			<?php endif; ?>
			<?php if(is_sub_page( 'Our Capability' )): ?>
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'capability-menu',
					'container_class' => 'header__navigation container',
					'container_id'    => 'business-menu-container ',
					'menu_class'      => 'header-nav navigation',
					'fallback_cb'     => '',
					'menu_id'         => 'sub-menu--2',
					'walker'          => new understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
			<?php endif; ?>
			<?php if(is_sub_page( 'Our People' )): ?>
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'people-menu',
					'container_class' => 'header__navigation container',
					'container_id'    => 'business-menu-container ',
					'menu_class'      => 'header-nav navigation',
					'fallback_cb'     => '',
					'menu_id'         => 'sub-menu--3',
					'walker'          => new understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
			<?php endif; ?>
			</div>
		</div>
	</div><!-- #header -->
			<?php endif; ?>

<script>

(function($) {
		$(".toggle-menu").click(function () {
			$(".toggle-menu,.header-nav").toggleClass("is-active");
	});
})( jQuery );
</script>


<div class="stripe">
		<div class="line line--1"></div>
		<div class="line line--2"></div>
		<div class="line line--3"></div>
	</div>
<div class="page">

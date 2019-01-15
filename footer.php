<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

<footer id="footer">
<div class="footer-stripe stripe">
		<div class="line line--1"></div>
		<div class="line line--2"></div>
		<div class="line line--3"></div>
	</div>
		<div class="container">

				<div class="row">
						<div class="col-sm-2">
							<a href="<?php echo get_home_url(); ?>" id="" class="footer__logo">
								<img class="footer__logo" src="<?php bloginfo('template_directory'); ?>/img/acc_logo.svg" alt="Logo">
							</a>
						</div>
						<div class="col-sm-10">
						<div class="row">
							<div class="col-md-3">
								<a><h6>Our Business</h6></a>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'business-menu',
										'container_class' => 'footer-menu',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'fallback_cb'     => '',
										'menu_id'         => 'footer__corporate',
									)
								); ?>
							</div>
							<div class="col-md-3">
							<a><h6>Our Capability</h6></a>

								<?php wp_nav_menu(
									array(
										'theme_location'  => 'capability-menu',
										'container_class' => 'footer-menu',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'fallback_cb'     => '',
										'menu_id'         => 'footer__corporate',
									)
								); ?>
							</div>
							<div class="col-md-3">
							<a><h6>Our people</h6></a>

								<?php wp_nav_menu(
									array(
										'theme_location'  => 'people-menu',
										'container_class' => 'footer-menu',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'fallback_cb'     => '',
										'menu_id'         => 'footer__corporate',
									)
								); ?>
								</div>
								<div class="col-md-3">
								<a><h6>Contacts</h6></a>

								<?php wp_nav_menu(
									array(
										'theme_location'  => 'contacts-menu',
										'container_class' => 'footer-social',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'fallback_cb'     => '',
										'menu_id'         => 'footer__social',
									)
								); ?>
							</div>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="col-sm-3">
							<p class="footer-text">© Copyright 2018 All Rights Reserved</p>
						</div>
						<div class="col-sm-4" >
							<p class="footer-text">Disclaimer | <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a> </p>

						</div>
						<div class="col-sm-4">

						</div>

				</div>

</footer>





<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ytplayer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<script>
	AOS.init();
</script>

</body>

</html>

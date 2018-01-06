<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="mini-header">
	<div class="container">
		<ul class="contact-items">
			<li class="map"><a href="#" data-reveal-id="modal-map"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/map-icon.png" /><span>Find Us</span></a></li>
			<li class="address"><a href="#" data-reveal-id="modal-map"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/address-icon.png" /><span>1/80-82 Sixth Avenue Maroochydore QLD 4558</span></a></li>
			<li class="email"><a href="/contact/#contact-form-wrapper"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/email-icon.png" /><span>info@hardyba.com.au</span></a></li>
			<li class="phone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/phone-icon.png" /><span>07 5451 1001</span></li>
		</ul>
	</div>
</div>
<div class="header-panel">
	<div class="container">
		<a class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-toggle menu-icon mobile-menu" href="#"><i class="fa fa-bars"></i></a>
		<div class="logo-wrapper">
			<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hardy-ba-logo.png" alt="Hardy Business Accountants" /></a>
		</div>
		<nav class="main-navigation">
			<div class="menu-wrapper">
				<?php foundationpress_top_bar_l(); ?>
				<?php foundationpress_top_bar_r(); ?>
			</div>
		</nav>
	  <div class="clear"></div>
	</div>
</div>

<div id="modal-map" class="reveal-modal" data-reveal aria-labelledby="modal-map" aria-hidden="true" role="dialog">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.6782983764974!2d153.1001130151544!3d-26.658780789082225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93767bf7c1116b%3A0x41a56dc12713d1df!2s80%2F82+Sixth+Ave%2C+Maroochydore+QLD+4558!5e0!3m2!1sen!2sau!4v1509419058582" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

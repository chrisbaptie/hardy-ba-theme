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
			<li class="address"><a href="#" data-reveal-id="modal-map"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/address-icon.png" /><span>Suite 14, 76 Wises Road Maroochydore, Qld 4558</span></a></li>
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
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7130.51999312011!2d153.087568!3d-26.672166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93761532b03365%3A0xa3b1b211ef6bbbd5!2s14%2F66-76+Wises+Rd%2C+Buderim+QLD+4556%2C+Australia!5e0!3m2!1sen!2sau!4v1447754559041" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

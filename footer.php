<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>

<div id="footer-container" class="footer">
	<footer id="footer">

		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php do_action( 'foundationpress_after_footer' ); ?>

		<div class="container">
			<div class="pillar four-fifths-width">
				<div class="footer-contact">
					<div class="pillar one-third-width">
						<div class="pillar-row phone"><span class="contact-label">Phone</span>07 5451 1001</div>
						<div class="pillar-row email"><span class="contact-label">Email</span>info@hardyba.com.au</div>
					</div>
					<div class="pillar two-thirds-width">
						<div class="pillar-row"><span class="contact-label address">Address</span>Suite 14, 76 Wises Road PO Box 5924</div>
						<div class="pillar-row"><span class="address-line">Headland Business Park Maroochydore, Qld 4558</span></div>
					</div>
				</div>
			</div>
			<div class="pillar one-fifth-width">
				<div class="footer-links">
					<a href="/contact/">Contact Us</a>
				</div>
			</div>
		</div>
	</footer>
</div>

<div class="lower-footer">
	<div class="container">
		<div class="pillar half-width">
			<div class="copyright-line">&copy; Hardy Business Accountants</div>
		</div>
		<div class="pillar half-width">
			<div class="industry-logos">
				<img id="xero-silver-partner-logo" width="150" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/xero-silver-partner-logo.png" alt="Xero Silver Partner">
				<img id="ipa-logo" width="80" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ipa-logo.png" alt="Institute of Public Accountants">
				<img id="ntaa-logo" width="150" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ntaa-logo.png" alt="National Tax &amp; Accountants Association">
			</div>
		</div>
	</div>
</div>

<div class="magical-back-to-top-button" style="display:none;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/back-to-top.png"></div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18614988-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>

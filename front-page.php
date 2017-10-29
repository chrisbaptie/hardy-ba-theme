<?php
/*
Template Name: Front Page
*/
get_header(); ?>

<div class="home">

	<div class="hero-wrapper">
		<div class="hero-slider">
				<a href="/services/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banners/hero-banner-business-accountants.jpg" /></a>
				<a href="/services/#xero"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banners/hero-banner-xero.jpg" /></a>
				<a href="/services/#business-advisory"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banners/hero-banner-business-advisory.jpg" /></a>
		</div>
	</div>

	<div class="service-box-wrapper">
		<div class="container">
			<div class="service-boxes-panel">
				<div class="row">
					<div class="small-12 medium-6 large-3 columns">
						<a href="/services/#accounting-and-taxation">
							<img class="service-icon" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service-icons/accounting-and-taxation.png" />
							<h3>Accounting &amp; Taxation</h3>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<a href="/services/#reporting">
							<img class="service-icon" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service-icons/reporting-light.png" />
							<h3>Reporting</h3>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<a href="/services/#business-advisory">
							<img class="service-icon" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service-icons/business-advisory.png" />
							<h3>Business Advisory</h3>
						</a>
					</div>
					<div class="small-12 medium-6 large-3 columns">
						<a href="/services/#xero">
							<img class="service-icon" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service-icons/xero-logo-light.png" />
							<h3>Xero &amp; Cloud Accounting</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="home-blurb full-width-content">
			<h1>A note from us</h1>
			<p>At Hardy Business Accountants, we get a kick out of seeing business owners achieve great things. In fact, our whole purpose is to help small business owners set themselves up for life.</p>
			<p>We're tax and accounting experts, working exclusively with business owners like these. We provide them with the very best in accounting, taxation and business advice. Our advice is based on years of practical, hands on experience and we tell it like it is.</p>
			<p>We're also big on using technology to make business life easier and to give business owners more time. We love using software like <a href="/services/">Xero</a> and the applications that can plug into it.</p>
			<p>Our fees are fixed - we don't charge for the small stuff. We also tailor our services to each business, helping them as little or as much as they like. <a href="/services/">Find out more.</a></p>
			<p>If you think you could benefit from our help, please get in <a href="/contact/">touch</a>.</p>
		</div>
	</div>

	<div class="container">
		<h2>You’re in good company...</h2>
		<?php get_template_part( 'parts/client-logos' ); ?>
	</div>

</div>

<?php get_footer(); ?>

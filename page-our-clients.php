<?php
/*
Template Name: Clients
*/
get_header(); ?>

		<div class="our-clients">

			<div class="container">
				<div class="full-width-content">
					<h1><?php the_title(); ?></h1>
					<p>We have been servicing businesses on the Sunshine Coast and surrounds for 15 years. With cloud accounting, screen sharing and video conferencing, we now provide our services to business all across Australia. </p>

					<p>Our clients operate in various areas of the SME economy, including building and construction, property, manufacturing, retail, training, and the legal, engineering and finance professions. They also include franchisees from many popular franchises.</p>

					<p>We help these businesses from start-up to sale and everything in between!</p>
				</div>
			</div>
			<div class="full-width-container style-c">
				<div class="container">
					<div class="full-width-content light">
							<h2>Our clients appreciate:</h2>
							<div class="row info-boxes-wrapper">
								<div class="small-12 medium-6 large-4 columns">
									<div class="info-box">
										<span class="fa fa-graduation-cap fa-2x"></span>
										<h3>Experience</h3>
										<p>Our extensive experience in providing advice to businesses in a wide variety of industries and operating through many different structures.</p>
									</div>
								</div>
								<div class="small-12 medium-6 large-4 columns">
									<div class="info-box">
										<span class="fa fa-user fa-2x"></span>
										<h3>Accessibility</h3>
										<p>Always having one of the team on hand who has detailed knowledge of your structures and dealings. We don’t charge for the small stuff like brief phone calls and emails.</p>
									</div>
								</div>
								<div class="small-12 medium-6 large-4 columns">
									<div class="info-box">
										<span class="fa fa-lock fa-2x"></span>
										<h3>Fixed Fees</h3>
										<p>No fee surprises – pay monthly or yearly.</p>
									</div>
								</div>
								<div class="small-12 medium-6 large-4 columns">
									<div class="info-box">
										<span class="fa fa-cloud fa-2x"></span>
										<h3>Latest Tech Tools</h3>
										<p>We’re always looking to use the best technologies to enhance your business.</p>
									</div>
								</div>
								<div class="small-12 medium-6 large-4 columns">
									<div class="info-box">
										<span class="fa fa-star fa-2x"></span>
										<h3>Stand Out Team</h3>
										<p>We have a great mix of staff with extensive experience and knowledge and younger staff who love working with the latest technologies.</p>
									</div>
								</div>
								<div class="small-12 medium-6 large-4 columns">
									<div class="info-box">
										<span class="fa fa-bullseye fa-2x"></span>
										<h3>Straight Shooting Approach</h3>
										<p>We deliver easy to understand advice without the jargon. We tell it like it is.</p>
									</div>
								</div>
							</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<div class="container">
				<h2>We love helping businesses like these:</h2>
				<?php get_template_part( 'parts/client-logos' ); ?>
			</div>

		</div>

<?php get_footer(); ?>

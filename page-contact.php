<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="contact-us">

	<div class="container">
    <div class="full-width-content">
      <h1><?php the_title(); ?></h1>
      <p>Please feel free to contact us – our contact details are:</p>
      <div class="contact-details-wrapper">
        <ul>
          <li><span>Phone</span> 07 5451 1001</li>
          <li><span>Fax</span> 07 5443 5461</li>
          <li><span>Email</span> info@hardyba.com.au</li>
          <li class="address"><span>Address</span> Suite 14, 76 Wises Road Maroochydore, Qld 4558 - <a class="text-link" ref="#" data-reveal-id="modal-map">Find Us</a></li>
          <li><span>Postal Address</span> PO Box 5924, Maroochydore, Qld 4558</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="full-width-container style-c">
    <div class="container">
      <div class="form-outer-wrapper">
        <div id="contact-form-wrapper">
					<h2>Send us a message</h2>
					<?php echo do_shortcode('[contact-form-7 id="45" title="Contact Form"]'); ?>
        </div>
      </div>
    </div>
     <div class="clear"></div>
  </div>

</div>

<?php get_footer(); ?>

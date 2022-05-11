<!-- Sort inline styling BELOW -->
<div class="small-12 medium-1 large-1 columns show-for-large">
	<?php get_template_part('svg/ip-booking') ?>
</div>
<div class="small-12 medium-11 large-8 columns">
	<!-- TO STYLE + Update content per section -->
	<p style="margin-bottom:0; margin-top:10px;"><strong>To book one of our treatments in Cannes, call +44 (0)20 3713 9365, or complete our booking form.</strong><br>
	<i>Booking line available: Monday-Friday, 9am-6pm</i></p>
</div>
<div class="small-12 medium-12 large-3 columns">
	<a class="button--svg booking" data-open="bookingForm">
		<span class="button--icon hide-for-large">
			<?php get_template_part('svg/ip-booking') ?>
		</span>
		<span class="button--text">
			Launch Booking Form</a>
		</span>
	</a>
	<!-- show icon in button on small only -->
</div>

<!-- Add as a template -->
<div class="small reveal" id="bookingForm" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
	<h1>Booking Form</h1>
	<p>Test - form</p>
	<p>Test - responsiveness</p>
	<p>Test</p>
	<p>Test</p>
	<p>Test</p>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
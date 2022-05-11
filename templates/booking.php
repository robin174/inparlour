<!-- Sort inline styling BELOW -->
<div class="small-12 medium-1 large-1 columns show-for-large">
	<?php get_template_part('svg/ip-booking') ?>
</div>
<div class="small-12 medium-11 large-8 columns">
	<p class="intro--booking"><?php the_field('section_booking_title');?></p>
	<p class="intro--booking-em"><?php the_field('section_booking_subtitle');?></p>
</div>

<?php if (get_field('section_booking_typeform')) { ?>
	<div class="small-12 medium-12 large-3 columns">
		<!-- show icon in button on small only -->
		<a class="button--svg button--booking" target="_blank" href="https://robin174.typeform.com/to/<?php the_field('section_booking_typeform_linkid'); ?>">
			<span class="button--icon hide-for-large">
				<?php get_template_part('svg/ip-booking') ?>
			</span>
			<span class="button--text">
				<?php the_field('section_booking_button');?>
			</span>
		</a>

		<?php /* New code
		<div class="small-12 medium-12 large-3 columns">
			<button class="button--svg button--booking" data-tf-popup="<?php the_field('section_booking_typeform_linkid'); ?>" data-tf-size="50" data-tf-iframe-props="title=InParlour - Booking Form">
				<span class="button--icon hide-for-large">
					<?php get_template_part('svg/ip-booking') ?>
				</span>
				<span class="button--text">
					<?php the_field('section_booking_button');?>
				</span>
			</button>
			<script src="//embed.typeform.com/next/embed.js"></script>
		</div>
		<-- pop up plugin? https://www.typeform.com/help/a/what-to-do-if-your-typeform-isnt-working-360029576531/ -->
		*/ ?>
	</div>
<?php } else { ?>
	<div class="small-12 medium-12 large-3 columns">
		<a href="<?php the_field('section_booking_link'); ?>" title="Email InParlour" class="button--svg button--booking">
			<!-- show icon in button on small only -->
			<span class="button--icon hide-for-large">
				<?php get_template_part('svg/ip-booking') ?>
			</span>
			<span class="button--text">
				<?php the_field('section_booking_button');?>
			</span>
		</a>
	</div>
<?php } ?>
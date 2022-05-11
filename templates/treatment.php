<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<h3 class="treatment--head"><?php the_sub_field('treatment_title'); ?></h3>
		<p class="treatment--descr"><?php the_sub_field('treatment_description'); ?></p>
	</div>
</div><!-- end .row -->
<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<span class="temp--time"><?php the_sub_field('treatment_time'); ?></span>
		<span class="temp--price">&nbsp;<?php the_sub_field('treatment_price'); ?></span>
	</div>
</div><!-- end .row -->
<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<?php if( get_sub_field('treatment_extra') ): ?>
			<p class="treatment--extra"><?php the_sub_field('treatment_extra'); ?></p>
		<?php endif; ?>
		<hr class="dotted">
	</div>
</div><!-- end .row -->

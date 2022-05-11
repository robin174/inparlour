<?php while(has_sub_field("page_template")): ?>

	<?php if(get_row_layout() == 'pt_key_intro'): // Key Introduction ?>
	    <section>
	        <h2 class="title--key"><?php the_sub_field('key_intro'); ?></h2>
	    </section>
	<?php endif; ?>

	<?php if(get_row_layout() == 'pt_subheading_h2'): // Subheading: h2 ?>
	    <h2 class="subheading"><?php the_sub_field('subheading_h2'); ?></h2>
	<?php endif; ?>

	<?php if(get_row_layout() == 'pt_subheading_h3'): // Subheading: h3 ?>
	    <h3 class="subheading"><?php the_sub_field('subheading_h3'); ?></h3>
	<?php endif; ?>

	<?php if(get_row_layout() == 'pt_paragraph_intro'): // Paragraph: Introduction ?>
	    <p class="intro"><?php the_sub_field('paragraph_intro'); ?></p>
	<?php endif; ?>

	<?php if(get_row_layout() == 'pt_paragraph'): // Paragraph: Full Width ?>
	    <?php the_sub_field('paragraph'); ?>
	<?php endif; ?>

	<?php if(get_row_layout() == 'pt_product'): // Product (Gift Vouchers) ?>
		<section class="product" style="margin-bottom:35px;">
			<div class="row">
				<div class="small-12 medium-3 large-3 columns">
					 <img src="<?php the_sub_field('product_image'); ?>" />
				</div>
				<div class="small-12 medium-9 large-9 columns">
					<h3><?php the_sub_field('product_title'); ?></h3>
	    			<?php the_sub_field('product_description'); ?>
	    			<p><strong>Time:</strong>&nbsp;<?php the_sub_field('product_duration'); ?><br>
	    			<strong>Price:</strong>&nbsp;<?php the_sub_field('product_price'); ?></p>
	    		</div>
	    	</div>
		</section>
	<?php endif; ?>

	<?php if(get_row_layout() == 'image_full_width'): // Image / Caption - Full Width ?>
	    <div>
	        <figure class="general">
	            <img src="<?php the_sub_field('image'); ?>" />
	            <figcaption><?php the_sub_field('image_caption'); ?></figcaption>
	        </figure>
	    </div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'pt_bullet_points'): // Bullet List ?>
		<section>
			 <?php if( get_sub_field('bullet_introduction') ): ?>
				<p class="bullet-intro"><?php the_sub_field('bullet_introduction'); ?></p>
			<?php endif; ?>
	        <?php 
	        $values = get_sub_field('bullet_points');
	        if ($values){ 
	        echo '<ul class="bullet">';
	        foreach($values as $value){
	            echo '<li class="blue">'.$value['bullet_point'].'</li>'; 
	        }
	        echo '</ul>';
	        } ?>
		</section>
	<?php endif; ?>

	<?php if(get_row_layout() == 'pt_number_points'): // Number List ?>
		<section>
	        <?php 
	        $values = get_sub_field('number_points');
	        if ($values){ 
	        echo '<ol class="number">';
	        foreach($values as $value){
	            echo '<li>'.$value['number_point'].'</li>'; 
	        }
	        echo '</ol>';
	        } ?>
		</section>
	<?php endif; ?>

<?php endwhile; ?>
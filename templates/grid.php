<div id="masonryContainer">
	<?php if (is_page( array('corporate-events','press'))) { ?>
		
		<!-- Large grid = 3 -->
		<?php while(has_sub_field("section_grid")): ?>
			<?php if(get_row_layout() == 'grid_image'): // Image / Caption ?>
			    <div class="small-12 medium-4 large-4 columns masonry-brick">
			    	<section class="unit--grid-image">
				        <figure class="grid--photo">
				            <img src="<?php the_sub_field('image_file'); ?>" />
				            <?php if( get_sub_field('image_caption') ): ?>
				            	<figcaption><?php the_sub_field('image_caption'); ?></figcaption>
				        	<?php endif; ?>
				        </figure>
			        </section>
			    </div>
			<?php endif; ?>

			<?php if(get_row_layout() == 'grid_block'): // Image / Caption ?>
			    <div class="small-12 medium-4 large-4 columns masonry-brick">
			    	<section class="unit--grid-text">
					   	<p><?php the_sub_field('block_content'); ?></p>
					</section>
			    </div>
			<?php endif; ?>
		<?php endwhile; ?>

	<?php } else { ?>

		<!-- Large grid = 4 -->
		<?php while(has_sub_field("section_grid")): ?>
			<?php if(get_row_layout() == 'grid_image'): // Image / Caption ?>
			    <div class="small-12 medium-4 large-4 columns masonry-brick">
			    	<section class="unit--grid-image">
				        <figure class="grid--photo">
				            <img src="<?php the_sub_field('image_file'); ?>" />
				            <?php if( get_sub_field('image_caption') ): ?>
				            	<figcaption><?php the_sub_field('image_caption'); ?></figcaption>
				        	<?php endif; ?>
				        </figure>
			        </section>
			    </div>
			<?php endif; ?>

			<?php if(get_row_layout() == 'grid_block'): // Text ?>
			    <div class="small-12 medium-4 large-4 columns masonry-brick">
			    	<section class="unit--grid-text">
					   	<p><?php the_sub_field('block_content'); ?></p>
					</section>
			    </div>
			<?php endif; ?>
			 
			<?php if(get_row_layout() == 'grid_pdf'): // PDF file ?>
			    <div class="small-12 medium-4 large-3 columns masonry-brick">
			    <?php 
                $pdf_attachment_id = get_sub_field('pdf_file');
                $pdf_url = wp_get_attachment_url( $pdf_attachment_id );
                $pdf_title = get_the_title( $pdf_attachment_id );
                $pdf_filesize = filesize( get_attached_file( $pdf_attachment_id ) );
                $pdf_filesize = size_format($pdf_filesize, 0); ?>
			    	<section class="unit--grid-text">
					   	<p><?php the_sub_field('pdf_content'); ?></p>
					   	<p><a href="<?php echo $pdf_url; ?>" title="PDF doc">View PDF here.<br>
					   	(<?php echo $pdf_filesize; ?>)</a></p>
					</section>
			    </div>
			<?php endif; ?>
		<?php endwhile; ?>

	<?php } ?>
</div>
					<footer class="footer" role="contentinfo">
						<div id="inner-footer">
							<div class="row">
								<div class="small-12 medium-12 large-12 columns">
									<h3><a href="mailto:bookings@inparlour.co.uk" title="Email InParlour">bookings@inparlour.co.uk</a> &bull; +44(0)203 7139 365 &bull; <a href="https://www.twitter.com/@inparlour" target="_blank" title="InParlour on Twitter">@inparlour</a></h3>
								</div>
							</div><!-- end .row -->
							<div class="row">
								<div class="small-12 medium-5 medium-push-7 large-5 columns">
									<p class="source-org copyright">
										<a href="https://www.inparlour.co.uk/wp-content/uploads/2020/07/InParlour-COVID-19-Safe-Working-Document.v2-10.07.20.pdf" title="COVID-19">COVID-19</a>&nbsp;&nbsp;<span class="white">|</span>&nbsp;&nbsp;
										<a href="<?php echo get_page_link(43); ?>" title="Privacy Policy">Privacy Policy</a>&nbsp;&nbsp;<span class="white">|</span>&nbsp;&nbsp;
										<a href="<?php echo get_page_link(45); ?>" title="Terms &amp; Conditions">Terms &amp; Conditions</a>
									</p>
								</div>
								<div class="small-12 medium-7 medium-pull-5 large-7 columns">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. <?php bloginfo('version'); ?></p>
								</div>
							</div><!-- end .row -->
						</div><!-- end #inner-footer -->
					</footer>
				</div><!-- end .main-content -->
			</div><!-- end .off-canvas-wrapper-inner -->
		</div><!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

		<script>
		    $(window).load(function(){
		        $('#masonryContainer').masonry({  
		        itemSelector: '.masonry-brick'
		        });
		    });
		</script>

		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			var pageTracker = _gat._getTracker("UA-3521785-1");
			pageTracker._initData();
			pageTracker._trackPageview();
		</script>

	</body>
</html>
</div>
                </div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<!--<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
									</ul>
								</form>
							</section>-->
							<div class="4u">
							    <?php if ( is_active_sidebar ( 'footer-widget-1' ) ): dynamic_sidebar('footer-widget-1'); endif; ?>
							    
							</div>
                            <div class="4u">
                               
                                <?php if ( is_active_sidebar ( 'footer-widget-2' ) ): dynamic_sidebar('footer-widget-2'); endif; ?>
                                
                            </div>
                            <div class="4u"><?php if ( is_active_sidebar ( 'footer-widget-3' ) ): dynamic_sidebar('footer-widget-3'); endif; ?></div>
									
							
							<ul class="copyright">
								<li>All rights reserved &copy; CodeKracken.com.</li>
							</ul>
						</div>
					</footer>
			</div>
		<?php wp_footer(); ?>	
	</body>
</html>
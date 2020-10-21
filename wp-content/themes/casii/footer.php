				</div>
			</div>

			<a href="#0" class="btn-top"></a>

			<footer class="footer">
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
							<div class="logo">
								<a href="/">
									<a href="/"><img class="logo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.png" alt="Лого"></a>
								</a>
							</div>
						</div>

						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
							<nav class="fmenu">
								<?php wp_nav_menu( array(
									'theme_location' => 'bottom',
									'walker' => new Nav_Walker_Nav_Menu() )
									);
								?>
							</nav>

							<div class="divider"></div>

							<div class="footer-text"><?php the_field('copy_text', 'options'); ?></div>
						</div>

					</div>
				</div>
			</footer>


		</div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>
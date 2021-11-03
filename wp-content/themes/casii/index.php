<?php get_header(); ?>
					<div class="content col-lg-9 col-md-9 ">

						<div class="content-descr">Подборка лучших азартных слотов от Slot4money</div>
						<h1 class="h1 content-title-bg">Игровые автоматы на деньги</h1>

						<div class="casino-items">
							<div class="row">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="col-lg-4 col-sm-6 col-xs-12 casino-item-wr">
									<div class="casino-item">
										<div class="casino-icon">
											<a href="<?php the_permalink(); ?>"><img src="<?php echo kama_thumb_src("w=217 &h=151") ?>" title="Игровой автомат <?php the_title(); ?> с выводом"></a>
										</div>
										<div class="casino-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
										<div class="casino-rate">
											<div class="stars clearfix">
												<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings(); endif; ?>
											</div>
										</div>
										<div class="casino-btns">
											<a href="<?php the_permalink(); ?>" class="casino-btn-1" title="<?php the_title(); ?> беасплатно">Демо-игра</a>
											<a href="<?php the_field('home_link') ?>" class="casino-btn-2" title="<?php the_title(); ?> на реальные деньги">На деньги</a>
										</div>
									</div>
								</div>

								<?php endwhile;
								else: echo '<div class="col-xs-12"><div class="h2">Нет записей.</div></div>'; endif; ?>

							</div>
						</div>

						<div class="pagination">
							<?php pagination(); ?>
						</div>

						<div class="bg-block block">
							<?php the_field('main_text', 'option') ?>
						</div>

					</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
					<div class="content col-lg-9 col-md-9 ">

						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php if(function_exists('bcn_display'))
							{
								bcn_display();
							}?>
						</div>

						<h1 class="mb20"><?php echo single_term_title(); ?></h1>

						<div class="casino-items">
							<div class="row">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="col-lg-4 col-sm-6 col-xs-12 casino-item-wr">
									<div class="casino-item">
										<div class="casino-icon">
											<a href="<?php the_permalink(); ?>"><img src="<?php echo kama_thumb_src("w=217 &h=151") ?>" title="Игровой автомат <?php the_title(); ?> онлайн"></a>
										</div>
										<div class="casino-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
										<div class="casino-rate">
											<div class="stars clearfix">
												<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings(); endif; ?>
											</div>
										</div>
										<div class="casino-btns">
											<a href="<?php the_permalink(); ?>" class="casino-btn-1" title="Играть в <?php the_title(); ?> бесплатно">Бесплатно</a>
											<a href="<?php the_field('home_link') ?>" class="casino-btn-2" title="Играть в <?php the_title(); ?> на деньги">На деньги</a>
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

						<?php $description = category_description(); ?>

						<?php if (!$description == null && !is_paged()) { echo '<div class="bg-block block">'. $description. '</div>'; } ?>


					</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
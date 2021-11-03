					<div class="sidebar col-lg-3 col-md-3">

						<div class="widget widget-bg">
							<div class="widget-header">
								<div class="widget-title">Топ слотов</div>
							</div>
							<div class="widget-content">
								<div class="widget-slots">
									<ul>
										<?php $args = array( 'posts_per_page' => 10, 'orderby' => 'rand' );
										$rand_posts = get_posts( $args );
										foreach( $rand_posts as $post ) : ?>
										<li>
											<div class="widget-slot-icon">
												<a href="<?php the_permalink(); ?>"><img src="<?php echo kama_thumb_src("w=213 &h=148") ?>"></a>
											</div>
											<div class="widget-slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
										</li>
									<?php endforeach; ?>
									<?php wp_reset_postdata() ?>
									</ul>
								</div>
							</div>
						</div>

						<div class="widget widget-bg">
							<div class="widget-header">
								<div class="widget-title">Лучшее казино</div>
							</div>
							<div class="widget-content">
								<div class="widget-pops">
									<ol>
										<?php $counter = 1; if( have_rows('casino_rating', 1832) ): while( have_rows('casino_rating', 1832) ): the_row();  $pid = get_sub_field('casino')->ID; ?>
										<?php if($counter <= 5): ?>
										<li>
											<div class="widget-pops-icon">
												<a href="<?php echo get_permalink($pid); ?>"><img src="<?php echo kama_thumb_src("w=82 &h=57", get_the_post_thumbnail_url($pid)) ?>"></a>
											</div>
											<div class="widget-pops-title">
												<div><a href="<?php echo get_permalink($pid); ?>"><?php echo get_sub_field('casino')->post_title; ?></a></div>
												<div class="casino-rate">
													<div class="stars clearfix">
														<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
													</div>
												</div>
											</div>
										</li>
										<?php endif; ?>
										<?php $counter++; endwhile; endif; ?>
									</ol>
								</div>
							</div>
						</div>

						<div class="widget widget-bg">
							<div class="widget-header">
								<div class="widget-title">Новости</div>
							</div>
							<div class="widget-content">
								<div class="widget-news">
									<ul>
										<?php $args = array( 'post_type' => 'game_news', 'posts_per_page' => 5 );
										$news_posts = get_posts( $args );
										foreach( $news_posts as $post ) : ?>
										<li>
											<div class="widget-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
											<div class="widget-news-date"><?php echo get_the_date('d.m.Y'); ?></div>
										</li>
									<?php endforeach; ?>
									<?php wp_reset_postdata() ?>
									</ul>
								</div>
							</div>
						</div>

					</div>
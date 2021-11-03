<?php /* Template Name: рейтинг казино */ get_header();  ?>
<div class="content col-lg-9 col-md-9 ">
	<div class="bg-block block" style="padding:40px 25px 50px 25px;">

		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')) { bcn_display();}?>
		</div>
		<?php if( have_posts() ):?>
			<?php while( have_posts() ):  the_post(); ?>
				<h1><?php the_title(); ?></h1>

				<div class="news-content">

					<div class="casino-rating-responsive">
						<table class="casino-rating" cellspacing="0">
							<tbody>
								<tr class="thead">                                                  
									<td width="33"><span class="masha_index masha_index2" rel="2"></span>№</td>
									<td width="130"><span class="masha_index masha_index3" rel="3"></span>Интернет-казино</td>
									<td width="100"><span class="masha_index masha_index4" rel="4"></span>Бонусы</td>
									<td width="145"><span class="masha_index masha_index5" rel="5"></span>Кол-во игр</td>
									<td width=""><span class="masha_index masha_index6" rel="6"></span>Софт слотов</td>
									<td width="65"><span class="masha_index masha_index7" rel="7"></span>Клиент</td>
									<td width="70"><span class="masha_index masha_index8" rel="8"></span>Обзор</td>
									<td width="70"><span class="masha_index masha_index9" rel="9"></span>Сайт</td>
								</tr>

								<?php $counter = 1; if( have_rows('casino_rating') ): while( have_rows('casino_rating') ): the_row();  $pid = get_sub_field('casino')->ID; ?>
									<tr>
										<td><?php echo $counter; ?></td>
										<td><a href="<?php echo get_permalink($pid); ?>"><img src="<?php echo kama_thumb_src("w=120 &h=65", get_the_post_thumbnail_url($pid)); ?>" alt="Онлайн-казино <?php echo get_the_title($pid); ?>" title="Онлайн-казино <?php echo get_the_title($pid); ?>"></a></td>
										<td><?php echo get_sub_field('bonuses'); ?></td>
										<td><?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?></td>
										<td><?php echo get_sub_field('platform'); ?></td>
										<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo get_sub_field('is_client'); ?>.png"></td>
										<td><a href="<?php echo get_permalink($pid); ?>" class="table-views casino-btn-1" title="Обзор казино и честные отзывы">ОБЗОР</a></td>
										<td><a href="<?php the_field('link', $pid); ?>" class="casino-play casino-btn-2" title="Играть онлайн в казино" target="_blank">ИГРАТЬ</a></td>
									</tr>
								<?php $counter++; endwhile; endif; ?>

							</tbody>
						</table>
					</div>
				<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>

		</div>
	</div>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
<?php get_header(); ?>

<div class="content col-lg-9 col-md-9 ">
	<div class="bg-block block">

		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>
		<?php if( have_posts() ):?>
			<?php while( have_posts() ):  the_post(); ?>
				<h1>Все об онлайн казино <?php the_title(); ?> на деньги</h1>

				<div class="row single-casino-info">
					<div class="col-md-7">
						<table>
							<tr>
								<td class="key">Адрес казино</td>
								<td class="value"><a href="<?php the_field('link'); ?>" target="_blank">Перейти в Казино</a></td>
							</tr>
							<tr>
								<td class="key">Язык(и):</td>
								<td class="value"><?php the_field('languages'); ?></td>
							</tr>
							<tr>
								<td class="key">Год открытия:</td>
								<td class="value"><?php the_field('year'); ?></td>
							</tr>
							<tr>
								<td class="key">Мин. депозит:</td>
								<td class="value"><?php the_field('mindep'); ?></td>
							</tr>
							<tr>
								<td class="key">Софт слотов:</td>
								<td class="value"><?php the_field('soft'); ?></td>
							</tr>
							<tr>
								<td class="key">Платежи:</td>
								<td class="value"><?php the_field('pays'); ?></td>
							</tr>

						</table>
					</div>
					<div class="col-md-5 casimage">
						<div class="cas-rating">
							<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings(); endif; ?>
						</div>
					<img src="<?php echo kama_thumb_src("w=300 &h=200") ?>" alt="Онлайн-казино <?php echo get_the_title($pid); ?>" title="Онлайн-казино <?php echo get_the_title($pid); ?>">
					</div>
				</div>
				<a href="<?php the_field('link'); ?>" class="btn btn-green btn-fullwidth gocasino" target="_blank"><img src="/wp-content/themes/casii/images/dices.png"> Перейти в казино </a>
		
				<div class="clear"></div>
				<div class="news-content"><?php the_content(); ?></div>
								<a href="<?php the_field('link'); ?>" class="btn btn-green btn-fullwidth gocasino" target="_blank"><img src="/wp-content/themes/casii/images/dices.png"> Перейти в казино </a>

			<?php endwhile; endif; ?>

		</div>
	</div>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
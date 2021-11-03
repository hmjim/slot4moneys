<?php get_header(); ?>
<div class="content col-lg-9 col-md-9 ">


	<div class="bg-block block">
		<h1 class="mb20">Новости</h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
			<div class="row archive-news-item">
				<div class="col-md-4 col-sm-6 col-xs-12 news-img">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo kama_thumb_src("w=500 &h=250") ?>" title=""></a>
				</div>
				<div class="col-md-8 col-sm-6 col-xs-12">
				<a class="archive-news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php the_excerpt(); ?>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
	<?php endif; ?>


	</div>

	<div class="pagination">
		<?php pagination(); ?>
	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
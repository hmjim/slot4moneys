<?php get_header(); ?>

<div class="content col-lg-9 col-md-9 ">

	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}?>
	</div>

	<h1 class="main-game-title">Игровой автомат <?php the_title(); ?> на деньги</h1>

	<div class="content-block content-block-bg">
		<div class="row">

			<div class="col-lg-10 col-lg-offset-1">
				<div class="main-game">
					<div class="main-game-frame">
						<iframe src="<?php the_field('iframe') ?>" width="100%" height="477"></iframe>
					</div>
					<div class="main-casino-footer">

						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="main-casino-rate">
									<!-- <span class="text-descr">Рейтинг </span> -->
									<div class="stars clearfix">
										<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings(); endif; ?>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-6 col-xs-12">
								<a href="<?php the_field('home_link') ?>" class="btn btn-red btn-fullwidth" title="Играть в <?php the_title(); ?> на реальные деньги"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-pay.png" title="Играть на деньги"> Играть на деньги</a>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>

	</div>
		<?php if( have_posts() ):?>
			<?php while( have_posts() ):  the_post(); ?>

	<div class="bg-block block">
		<?php the_content(); ?>
		     <script type="text/javascript">(function() {
              if (window.pluso)if (typeof window.pluso.start == "function") return;
              if (window.ifpluso==undefined) { window.ifpluso = 1;
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                var h=d[g]('body')[0];
                h.appendChild(s);
              }})();</script>
            <div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,google,twitter"></div>
	</div>
			<?php endwhile; endif; ?>
</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>

<!DOCTYPE html>
<html lang="ru" class="only">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo wp_get_document_title(); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="bg-wr">
		<div class="cnt-wr">

			<div class="nav-line">
				<div class="container">
					<a href="#menu" id="toggle"><span></span></a>
					<nav id="menu" class="mmenu">
						<?php wp_nav_menu( array(
							'theme_location' => 'top',
							'walker' => new Nav_Walker_Nav_Menu() )
							);
						?>
					</nav>
				</div>
			</div>

			<header class="header">

				<div class="false-nav-line"></div>

				<div class="hero-block">
					<div class="container">
						<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-main.png" alt="Игровые автоматы на реальные деньги" title="Перейти на Slot4Money"></a>
					</div>
				</div>

				<div class="banner">
					<div class="container">
						<div class="banner-title">Игровые клубы <a href="#">Проверенные казино</a></div>
						<div class="row">

							<?php if( have_rows('game_homes', 'option') ): ?>

								<?php while( have_rows('game_homes', 'option') ): the_row(); 
									// Переменные
									$image = get_sub_field('image');
									$link = get_sub_field('link');
									$image_data = get_post($image);
									?>

									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 banner-item-more">
										<div class="banner-item">
											<a href="<?php echo $link; ?>" target="_blank">
												<div class="banner-item-img"><img src="<?php echo kama_thumb_src("w=270 &h=148", $image); ?>" title="<?php echo $image_data->post_title; ?>" alt="<?php echo get_post_meta($image, '_wp_attachment_image_alt', true); ?>"></div>
											</a>
										</div>
									</div>

								<?php endwhile; ?>
							<?php endif; ?>
							<?php 
							if(!is_home()) { ?>
								<div class="col-xs-12">
									<div class="btn-wr">
										<a href="#" class="btn-more" id="banner-more">показать все интернет-казино</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</header>

			<div class="wrapper container">
				<div class="row">
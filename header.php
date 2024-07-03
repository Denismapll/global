<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (!get_option('site_icon')) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body <?php body_class(); ?> style="overflow: hidden;">

	<header id="header" role="banner">
		<div class="d-flex justify-content-center align-items-center" id="preloader">
			<img style="width: 200px;" data-aos="fade-zoom-in" data-aos-duration="2000" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>abelha-cgg.png" alt="" srcset="">
		</div>
		<script>
			window.onload = () => {
				const preloader = document.getElementById('preloader');
				const page = document.querySelector('.page');

				const load = setTimeout(() => {
					preloader.classList.add('animate__animated', 'animate__fadeOut')
					page.style.overflow = 'auto';
					setTimeout(() => {
						document.querySelector("#preloader").remove();
					}, 700);
				}, 2000)
			}
		</script>

		<style>
			.menu {
				position: absolute;
				left: 24px;
				top: 2px;
				font-size: 12px;
				transform: translate(-50%, 50%);
				font-weight: 500;
			}
			.fav-roll-close {
				transition: 2s all;
				z-index: 2;
				position: relative;
			}
			.fav-roll-open {
				transition: 2s all;
				z-index: 2;
				position: relative;
				transform: rotate(180deg) !important;
			}
			.preloader {
				z-index: 10;
			}
		</style>

		<nav class="navbar navbar-expand-lg">
			<div class="container-md">
				<a class="navbar-brand" href="<?= home_url();?>">
					<img style="width: 250px;" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>logo-cgg-marcacao.png" alt="" srcset="">
				</a>
				<?php if (!is_front_page()):?>
				<div class="abrir bg-comb position-relative">
					<img class="fav-roll-close" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
					<span class="menu" style="z-index: 1;">Menu</span>
				</div>
				<?php endif;?>
			</div>
		</nav>
	</header><!-- #header -->
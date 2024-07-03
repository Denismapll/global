<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<!-- <div data-aos="zoom-out-right">teste</div> -->
		<style>
			/* .dropdown {
				overflow: hidden;
			} */
			.favo {
				width: 32px;
				z-index: 99;
				transition: 1s all;
			}

			.favo-anim:hover {
				transform: rotate(180deg) scale(1.15) !important;
			}

			.favo-anim {
				transform: rotate(180deg) scale(1.15) !important;
			}

			.favo-text {
				color: #d0810b !important;
				font-weight: 800;
				padding: 0 15px;
				overflow: hidden;
			}

			.hid-cont {
				display: none;
			}

			.bg-sblue {
				background-color: var(--bg-sblue);
			}
		</style>

		<section>
			<div class="container">
				<div class="row" style="height: 20vh;">
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo hid-cont" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
						<div class="dropdown">
							<button class="bg-transparent btn btn-secondary dropdown-toggle favo-text hid-cont" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								<?= wp_get_nav_menu_items('idiomas')[0]->post_title ?>
							</button>
							<ul class="dropdown-menu bg-sblue" style="border: none;">

								<li><?php echo do_shortcode('[gt-link lang="pt" label="PORTUGUÊS" widget_look="lang_names"]') ?></li>
								<li><?php echo do_shortcode('[gt-link lang="en" label="INGLÊS" widget_look="lang_names"]') ?></li>
								<li><?php echo do_shortcode('[gt-link lang="fr" label="FRANCÊS" widget_look="lang_names"]') ?></li>
								<li><?php echo do_shortcode('[gt-link lang="es" label="ESPANHOL" widget_look="lang_names"]') ?></li>

							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
				</div>
				<div class="row" style="height: 20vh;">
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo hid-cont" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
						<div class="dropdown">
							<button class="btn bg-transparent btn-secondary dropdown-toggle favo-text hid-cont" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								<?= wp_get_nav_menu_items('BLOG')[0]->post_title ?>
							</button>
							<ul class="dropdown-menu bg-sblue" style="border: none;">
								<?php
								// LISTAR MENUS BLOG
								$menus = wp_get_nav_menu_items('BLOG');

								for ($i = 1; $i < count($menus); $i++) :
								?>
									<li><a class="dropdown-item text-white bg-transparent" href="<?= $menus[$i]->url ?>"><?= $menus[$i]->post_title; ?></a></li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-1"></div>
					<div class="col-md-4 col-4 d-flex align-items-center"><img class="favo hid-cont" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
						<div class="dropdown">
							<button class="btn bg-transparent btn-secondary dropdown-toggle favo-text hid-cont" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								<?= wp_get_nav_menu_items('UNIDADES')[0]->post_title ?>
							</button>
							<ul class="dropdown-menu bg-sblue" style="border: none;">
								<?php
								// LISTAR MENUS UNIDADES
								$menus = wp_get_nav_menu_items('UNIDADES');

								for ($i = 1; $i < count($menus); $i++) :
								?>
									<li><a class="dropdown-item text-white bg-transparent" href="<?= $menus[$i]->url ?>"><?= $menus[$i]->post_title; ?></a></li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
					<div class="col-md-1 col-4"></div>
					<div class="col-md-1 col-1"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo hid-cont" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
						<div class="dropdown">
							<button class="btn bg-transparent btn-secondary dropdown-toggle favo-text hid-cont" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								<?= wp_get_nav_menu_items('QUEM-SOMOS')[0]->post_title ?>
							</button>
							<ul class="dropdown-menu bg-sblue" style="border: none;">
								<?php
								// LISTAR MENUS QUEM SOMOS
								$menus = wp_get_nav_menu_items('QUEM-SOMOS');

								for ($i = 1; $i < count($menus); $i++) :
								?>
									<li><a class="dropdown-item text-white bg-transparent" href="<?= $menus[$i]->url ?>"><?= $menus[$i]->post_title; ?></a></li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="row" style="height: 20vh;">
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo hid-cont" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
						<div class="dropdown">
							<button class="btn bg-transparent btn-secondary dropdown-toggle favo-text hid-cont" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								<?= wp_get_nav_menu_items('CONTATO')[0]->post_title ?>
							</button>
							<ul class="dropdown-menu bg-sblue" style="border: none;">
								<?php
								// LISTAR MENUS CONTATO
								$menus = wp_get_nav_menu_items('CONTATO');

								for ($i = 1; $i < count($menus); $i++) :
								?>
									<li><a class="dropdown-item text-white bg-transparent" href="<?= $menus[$i]->url ?>"><?= $menus[$i]->post_title; ?></a></li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo hid-cont" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
						<div class="dropdown">
							<button class="btn bg-transparent btn-secondary dropdown-toggle favo-text hid-cont" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								<?= wp_get_nav_menu_items('PRODUTOS')[0]->post_title ?>
							</button>
							<ul class="dropdown-menu bg-sblue" style="border: none;">
								<?php
								// LISTAR MENUS PRODUTOS
								$menus = wp_get_nav_menu_items('PRODUTOS');

								for ($i = 1; $i < count($menus); $i++) :
								?>
									<li><a class="dropdown-item text-white bg-transparent" href="<?= $menus[$i]->url ?>"><?= $menus[$i]->post_title; ?></a></li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
				</div>
				<div class="row" style="height: 20vh;">
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-1 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo hid-cont" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="">
						<div class="dropdown">
							<button class="btn bg-transparent btn-secondary dropdown-toggle favo-text hid-cont" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								<?= wp_get_nav_menu_items('REDES-SOCIAIS')[0]->post_title ?>
							</button>
							<ul class="dropdown-menu bg-sblue" style="border: none;">
								<?php
								// LISTAR MENUS REDES SOCIAIS
								$menus = wp_get_nav_menu_items('REDES-SOCIAIS');

								for ($i = 1; $i < count($menus); $i++) :
								?>
									<li><a class="dropdown-item text-white bg-transparent" href="<?= $menus[$i]->url ?>"><?= $menus[$i]->post_title; ?></a></li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
				</div>
			</div>
			<pre>
			<?php
			$nomeMenu = wp_get_nav_menu_name('idiomas');
			// print_r(wp_get_nav_menu_items('idiomas')[0]->post_title);



			// for ($i=1; $i < count($menus); $i++) { 
			// 	echo $menus[$i]->post_title.'<br>';
			// }
			// 
			?>
			</pre>
		</section>

		<script>
			const favos = document.querySelectorAll('.favo');
			const favosText = document.querySelectorAll('.favo-text');
			const spacing = document.querySelectorAll('.dropdown');

			// APARECER TEXTO AO LADO DOS FAVOS
			favos.forEach((x, y) => {
				x.addEventListener('mouseover', () => {
					favosText[y].classList.remove('hid-cont');
					favosText[y].classList.add('animate__fadeInRight', 'animate__animated')
					x.classList.remove('animate__fadeInDown', 'animate__animated', 'animate__delay-' + i + 's');
					setTimeout(() => {
						x.classList.add('favo-anim');
					}, 100)
				})
			})

			// APARECER FAVOS
			setTimeout(() => {
				i = 1;
				favos.forEach((x, y) => {
					x.classList.remove('hid-cont');
					x.classList.add('animate__fadeInDown', 'animate__animated', 'animate__delay-' + i + 's');
					i++;
				})

			}, 2200)

			// setTimeout(()=>{
			// 	i = 1;
			// 	favos.forEach((x,y) => {
			// 	// x.classList.remove('hid-cont');
			// 	x.classList.remove('animate__fadeInDown', 'animate__animated','animate__delay-'+i+'s');
			// 	i++;
			// })

			// }, 4800)


			spacing.forEach((x) => {
				// margem nas listas dos favos
				let fix = 20;
				let mv = fix;
				el = x.children[1].children.length;
				for (let i = 0; i < el; i++) {
					x.children[1].children[i].style.marginLeft = mv + 'px';
					mv = mv + fix;
				}
			})
		</script>
	</div><!-- .row -->
</div><!-- #wrapper -->

<?php do_shortcode('[gt-link lang="pt" label="English" widget_look="lang_names"]') ?>

<?php
get_footer();

<?php

/**
 * Template name: Empresas do Grupo
 *
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
				transition: 1s all;
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

			.expand-menu {
				animation-name: Expand1;
				/* animation-duration: 2s; */
				transition: 1s all;
				animation-fill-mode: forwards;
			}

			.close-menu {
				animation-name: fechar;
				/* animation-duration: 2s; */
				transition: 2s all;
				animation-fill-mode: forwards;
			}

			@keyframes Expand1 {
				0% {
					height: 0;
				}

				100% {
					height: 100vh;
				}
			}

			@keyframes fechar {
				0% {
					height: 100vh;
				}

				100% {
					height: 0;
				}
			}

			@keyframes movingL {
				0% {
					left: -200px;
					top: 0;
				}

				50% {
					left: -220px;
					top: 15px;

				}

				100% {
					left: -200px;
					top: 0;

				}
			}

			.o-hidden {
				overflow: hidden;
			}

			.bg-bee-grey-left {
				position: absolute;
				height: 0;
				left: -200px;
				top: 0;
				opacity: 0.1;
			}

			.bg-bee-grey-right {
				position: absolute;
				height: 0;
				right: -100px;
				bottom: 350px;
				opacity: 0.1;
				-moz-transform: scaleX(-1);
				-o-transform: scaleX(-1);
				-webkit-transform: scaleX(-1);
				transform: scaleX(-1);
			}

			@media screen and (max-width: 768px) {

				.bg-bee-grey-right,
				.bg-bee-grey-left {
					display: none;
				}
				.map {
					width: 100%;
				}
				.mh {
					min-height: auto;
				}
			}

			.content {
				position: inherit;
				z-index: 2;
			}

			.hidden-empresa {
				width: 0;
				overflow: hidden;
				margin: 0;
				padding: 0;
				height: 0;
			}
			.mh {
				margin: auto;
				min-height: 600px;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}
		</style>

		<!-- Image Map Generated by http://www.image-map.net/ -->

		<map name="image-map">
			<area target="" alt="Norphel" title="Norphel" href="#norphel" coords="310,317,273,249,311,181,388,184,426,250,389,314" shape="poly">
			<area target="" alt="Area" title="Area" href="#area" coords="148,324,186,260,264,257,301,325,263,390,185,394" shape="poly">
			<area target="" alt="Integra" title="Integra" href="#integra" coords="60,467,21,397,59,329,138,334,174,398,140,464" shape="poly">
			<area target="" alt="Conduspar" title="Conduspar" href="#conduspar" coords="309,171,270,105,309,35,387,37,426,105,388,172" shape="poly">
			<area target="" alt="Cobreflex" title="Cobreflex" href="#cobreflex" coords="146,178,184,109,264,111,300,178,263,242,186,246" shape="poly">
			<area target="" alt="Dipro" title="Dipro" href="#dipro" coords="57,322,19,253,57,186,138,185,177,253,137,321" shape="poly">
		</map>

		<?php get_template_part('content', 'menu'); ?>

		<section class="animate__animated animate__fadeInDown animate__delay-7s" style="animation-duration: 0.5s !important">
			<div class="container position-relative">
				<div class="row mt-4 justify-content-center align-items-center content">
					<div class="col-12">
						<h5 class="laranja-global text-center">QUEM SOMOS</h5>
						<h3 class="text-center text-uppercase"><?= get_the_title() ?></h3>
					</div>
					<div class="col-12 col-md-6 text-center mt-3">
						<img usemap="#image-map" class="map" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>colmeia.png" alt="" srcset="">
					</div>

					<?php
					// Define os argumentos para a consulta
					$args = array(
						'post_type' => 'empresas', // Nome do Custom Post Type
						'posts_per_page' => 6,
						'order_by' => 'desc'    // Número de posts a serem exibidos (-1 exibe todos)
					);

					// Cria a consulta
					$empresas_query = new WP_Query($args);

					// Loop de repetição
					if ($empresas_query->have_posts()) :
						while ($empresas_query->have_posts()) : $empresas_query->the_post(); ?>
							<div class="hidden-empresa col-12 col-md-6 text-center mh" style="overflow: hidden;transition: 1s">

								<h3 class="laranja-global mb-4"><?= the_title() ?></h3>
								<img class="w-75 rounded-5" src="<?php the_post_thumbnail_url() ?>" alt="" srcset="">
								<p class="mt-3" data-aos="fade-down"><?= the_excerpt() ?></p>
								<a href="<?php echo get_post_meta( $post->ID,'site_url', true ); ?>"><button type="button" class="btn btn-warning fw-bold text-gray">Veja o Site</button></a>
							</div>
						<?php endwhile;
					else : ?>
						<p><?php esc_html_e('Nenhuma empresa encontrada.'); ?></p>
					<?php endif;

					// Restaura os dados originais da consulta
					wp_reset_postdata(); ?>

				</div>
				<div class="bg-bee-grey-left">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>bg-bee-removebg-preview.png" alt="" srcset="">
				</div>
				<div class="bg-bee-grey-right">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>bg-bee-removebg-preview.png" alt="" srcset="">
				</div>
			</div>
		</section>

		<script>
			/*! Image Map Resizer (imageMapResizer.min.js ) - v1.0.10 - 2019-04-10
			 *  Desc: Resize HTML imageMap to scaled image.
			 *  Copyright: (c) 2019 David J. Bradshaw - dave@bradshaw.net
			 *  License: MIT
			 */

			! function() {
				"use strict";

				function r() {
					function e() {
						var r = {
								width: u.width / u.naturalWidth,
								height: u.height / u.naturalHeight
							},
							a = {
								width: parseInt(window.getComputedStyle(u, null).getPropertyValue("padding-left"), 10),
								height: parseInt(window.getComputedStyle(u, null).getPropertyValue("padding-top"), 10)
							};
						i.forEach(function(e, t) {
							var n = 0;
							o[t].coords = e.split(",").map(function(e) {
								var t = 1 == (n = 1 - n) ? "width" : "height";
								return a[t] + Math.floor(Number(e) * r[t])
							}).join(",")
						})
					}

					function t(e) {
						return e.coords.replace(/ *, */g, ",").replace(/ +/g, ",")
					}

					function n() {
						clearTimeout(d), d = setTimeout(e, 250)
					}

					function r(e) {
						return document.querySelector('img[usemap="' + e + '"]')
					}
					var a = this,
						o = null,
						i = null,
						u = null,
						d = null;
					"function" != typeof a._resize ? (o = a.getElementsByTagName("area"), i = Array.prototype.map.call(o, t), u = r("#" + a.name) || r(a.name), a._resize = e, u.addEventListener("load", e, !1), window.addEventListener("focus", e, !1), window.addEventListener("resize", n, !1), window.addEventListener("readystatechange", e, !1), document.addEventListener("fullscreenchange", e, !1), u.width === u.naturalWidth && u.height === u.naturalHeight || e()) : a._resize()
				}

				function e() {
					function t(e) {
						e && (! function(e) {
							if (!e.tagName) throw new TypeError("Object is not a valid DOM element");
							if ("MAP" !== e.tagName.toUpperCase()) throw new TypeError("Expected <MAP> tag, found <" + e.tagName + ">.")
						}(e), r.call(e), n.push(e))
					}
					var n;
					return function(e) {
						switch (n = [], typeof e) {
							case "undefined":
							case "string":
								Array.prototype.forEach.call(document.querySelectorAll(e || "map"), t);
								break;
							case "object":
								t(e);
								break;
							default:
								throw new TypeError("Unexpected data type (" + typeof e + ").")
						}
						return n
					}
				}
				"function" == typeof define && define.amd ? define([], e) : "object" == typeof module && "object" == typeof module.exports ? module.exports = e() : window.imageMapResize = e(), "jQuery" in window && (window.jQuery.fn.imageMapResize = function() {
					return this.filter("map").each(r).end()
				})
			}();
			//# sourceMappingURL=imageMapResizer.map
		</script>
		<script>
			imageMapResize();
			// document.querySelector('#image-map').imageMapResize();
			// AREAS CLICAVEIS TROCAR EMPRESAS E ANIMAÇÃO
			areas = document.querySelectorAll('area');
			empresas = document.querySelectorAll('.hidden-empresa');

			areas.forEach((x, y) => {
				x.addEventListener('click', () => {
					empresas.forEach((empresa) => {
						empresa.classList.add('hidden-empresa');
						empresa.classList.add('d-none');

					})
					empresas[y].classList.remove('hidden-empresa');
					empresas[y].classList.remove('d-none');
					empresas[y].classList.add('animate__animated', 'animate__fadeInLeft');
				})
			})
			areas[5].click();
		</script>

		<script>
			const favos = document.querySelectorAll('.favo');
			const favosText = document.querySelectorAll('.favo-text');
			const spacing = document.querySelectorAll('.dropdown');
			const menu = document.querySelector('.hid-menu');
			const menuAnim = document.querySelector('.fav-roll-close')

			// MOSTRAR MENU
			document.querySelector('.abrir').addEventListener('click', () => {
				menu.classList.toggle('expand-menu');
				menu.classList.toggle('close-menu');
			})

			menuAnim.addEventListener('click', () => {
				menuAnim.classList.toggle('fav-roll-close');
				menuAnim.classList.toggle('fav-roll-open')
				favos.forEach((x) => {
					x.click()
				})
				document.querySelector('body').classList.toggle('o-hidden')
				window.scrollTo(0, 0);

			})

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
				x.addEventListener('click', () => {
					favosText[y].classList.remove('hid-cont');
					favosText[y].classList.toggle('animate__fadeInRight')
					favosText[y].classList.toggle('animate__animated')
					// x.classList.toggle('animate__fadeInDown', 'animate__animated', 'animate__delay-' + i + 's');
					// setTimeout(() => {
					// 	x.classList.add('favo-anim');
					// }, 100)
				})
			})

			// APARECER FAVOS
			setTimeout(() => {
				i = 1;
				favos.forEach((x, y) => {
					x.classList.remove('hid-cont');
					x.classList.add('animate__fadeInDown', 'animate__animated', 'animate__delay-' + 1 + 's');
					i++;
				})

			}, 0)

			// setTimeout(()=>{
			// 	i = 1;
			// 	favos.forEach((x,y) => {
			// 	// x.classList.remove('hid-cont');
			// 	x.classList.remove('animate__fadeInDown', 'animate__animated','animate__delay-'+i+'s');
			// 	i++;
			// })

			// }, 4800)




			spacing.forEach((x) => {
				// margem noas listas dos favos
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

<?php
get_footer();

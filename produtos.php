<?php

/**
 * Template name: Produtos
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
				left: -100px;
				bottom: 350px;
				opacity: 0.1;
				-moz-transform: scaleX(-1);
				-o-transform: scaleX(-1);
				-webkit-transform: scaleX(-1);
				transform: scaleX(-1);
			}

			.bg-bee-grey-right {
				position: absolute;
				height: 0;
				right: -100px;
				bottom: 350px;
				opacity: 0.1;
			}

			@media screen and (max-width: 768px) {

				.bg-bee-grey-right,
				.bg-bee-grey-left {
					display: none;
				}
			}

			.content {
				position: inherit;
				z-index: 2;
			}

			/* contato */

			.contato-b {
				background-color: rgba(5, 5, 43, 1);
			}
		</style>

		<?php get_template_part('content', 'menu'); ?>

		<section class="animate__animated animate__fadeInDown animate__delay-7s" style="animation-duration: 0.5s !important">
			<h1 class="text-center laranja-global mb-5"><?= get_the_title() ?></h1>
			<div class="container position-relative mb-5">
				<div class="row">
					<div class="col-12 contato-b text-center rounded-5 p-3 m-0">
						<h3 class="m-0">CABOS DE REDE</h3>
					</div>
					<div class="col-12 row justify-content-center gap-4 align-items-center">
						<div class="col-12 col-md-4">
							<img class="w-100" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>empresas/cobreflex.png" alt="" srcset="">
						</div>
						<div class="col-12 col-md-4">
							<img class="w-100" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>empresas/conduspar.png" alt="" srcset="">
						</div>
						<div class="col-12 col-md-4">
							<img class="w-100" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>empresas/dipro.png" alt="" srcset="">
						</div>
					</div>
					<div class="text-cont mb-5">
						<div class="row justify-content-center">
							<div class="col-md-10 col-12 mb-5">
								<p class="m-3 text-center">A Cobreflex é uma empresa brasileira com mais de 10 anos de experiência na fabricação de fios e cabos elétricos de alta qualidade, atendendo diretamente aos principais setores. produtos utilizados na geração e transmissão de energia, garantindo segurança e eficiência. </p>
							</div>
						</div>
					</div>
					<div class="prod-cont mb-5">
						<div class="row">
							<div class="col-md-4 col-12">
								<div class="bg-white h-100 d-flex flex-column text-center p-2 rounded-3">
									<div class="img-prod">
										<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>prod1.png" alt="" srcset="">
									</div>
									<p class="mb-3"><b class="text-black">CABO COBREFLEX HEPRATOX 90°C-0,6-1KV</b></p>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="bg-white h-100 d-flex flex-column text-center p-2 rounded-3">
									<div class="img-prod">
										<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>prod1.png" alt="" srcset="">
									</div>
									<p class="mb-3"><b class="text-black">CABO COBREFLEX HEPRATOX 90°C-0,6-1KV</b></p>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="bg-white h-100 d-flex flex-column text-center p-2 rounded-3">
									<div class="img-prod">
										<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>prod1.png" alt="" srcset="">
									</div>
									<p class="mb-3"><b class="text-black">CABO COBREFLEX HEPRATOX 90°C-0,6-1KV</b></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-bee-grey-left">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>bg-bee-removebg-preview.png" alt="" srcset="">
				</div>
				<div class="bg-bee-grey-right">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>bg-bee-removebg-preview.png" alt="" srcset="">
				</div>
		</section>

		<style>
			.img-prod {
				height: 220px;
				display: flex;
				align-items: center;
			}
			.img-prod > img {
				width: 100%;
				/* object-fit: contain; */
			}
		</style>
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

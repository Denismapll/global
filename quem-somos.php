<?php

/**
 * Template name: Quem somos
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
					height: 80vh;
				}
			}

			@keyframes fechar {
				0% {
					height: 80vh;
				}

				100% {
					height: 0;
				}
			}

			.o-hidden {
				overflow: hidden;
			}
		</style>

		<?php get_template_part('content', 'menu'); ?>

		<section>
			<h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus aperiam dolores reiciendis necessitatibus aspernatur facilis, officiis illum neque ad, blanditiis sunt illo est accusantium alias laborum, perferendis praesentium amet nobis.
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus aperiam dolores reiciendis necessitatibus aspernatur facilis, officiis illum neque ad, blanditiis sunt illo est accusantium alias laborum, perferendis praesentium amet nobis.
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus aperiam dolores reiciendis necessitatibus aspernatur facilis, officiis illum neque ad, blanditiis sunt illo est accusantium alias laborum, perferendis praesentium amet nobis.
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus aperiam dolores reiciendis necessitatibus aspernatur facilis, officiis illum neque ad, blanditiis sunt illo est accusantium alias laborum, perferendis praesentium amet nobis.</h1>
		</section>

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

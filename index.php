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
			.favo {
				width: 32px;
			}
			.favo-text {
				color: #d0810b !important;
				font-weight: 800;
			}
			.hid-cont {
				display: none;
			}
		</style>

		<section>
			<div class="container">
				<div class="row" style="height: 20vh;">
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo"
							src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png"
							alt="" srcset="">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle favo-text hid-cont" type="button"
								data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								IDIOMAS
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
				</div>
				<div class="row" style="height: 20vh;">
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo"
							src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png"
							alt="" srcset="">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle favo-text hid-cont" type="button"
								data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								IDIOMAS
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo"
							src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png"
							alt="" srcset="">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle favo-text hid-cont" type="button"
								data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								IDIOMAS
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo"
							src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png"
							alt="" srcset="">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle favo-text hid-cont" type="button"
								data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								IDIOMAS
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row" style="height: 20vh;">
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo"
							src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png"
							alt="" srcset="">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle favo-text hid-cont" type="button"
								data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								IDIOMAS
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4"></div>
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo"
							src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png"
							alt="" srcset="">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle favo-text hid-cont" type="button"
								data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								IDIOMAS
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
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
					<div class="col-md-2 col-4 d-flex align-items-center"><img class="favo"
							src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png"
							alt="" srcset="">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle favo-text hid-cont" type="button"
								data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
								IDIOMAS
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-4"></div>
				</div>
			</div>
		</section>

		<script>
			const favos = document.querySelectorAll('.favo');
			const favosText = document.querySelectorAll('.favo-text');

			favos.forEach((x, y) => {
				x.addEventListener('click', () => {
					favosText[y].classList.remove('hid-cont');
					favosText[y].classList.add('animate__fadeIn', 'animate__animated')

				})
			})
		</script>
	</div><!-- .row -->
</div><!-- #wrapper -->
<?php
get_footer();

		<!-- MENU CUSTOMIZADO -->

		<section class="hid-menu close-menu" style="animation-duration: 2s ;height: 0; overflow: hidden; position: absolute; z-index: 5; background-color: var(--bg-sblue); left: 0; right: 0; padding: 0 10vw;">
			<div class="container m-0">
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
								<?php
								// LISTAR MENUS IDIOMAS
								$menus = wp_get_nav_menu_items('idiomas');

								for ($i = 1; $i < count($menus); $i++) :
								?>
									<li><a class="dropdown-item text-white bg-transparent" href="<?= $menus[$i]->url ?>"><?= $menus[$i]->post_title; ?></a></li>
								<?php endfor; ?>
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
			</pre>
		</section>
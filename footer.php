<?php

/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<footer class="mt-5" role="contentinfo">
	<section style="position: relative; z-index: 2; background-color: var(--bg-sblue)">

		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-4 col-12 mt-5 text-center">
					<img class="w-100" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>sm-bg-logo.png" alt="" srcset="">
				</div>
				<div class="col-md-3 col-12 mt-5 d-flex flex-column gap-4">
					<h6 class="laranja-global">ENTRE EM CONTATO CONOSCO !</h6>
					<div>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>mail.png" alt="" srcset="" width="24px">
						<span><a href="mailto:CONTATO@COGLOBAL.COM.BR" style="text-decoration: none;">CONTATO@COGLOBAL.COM.BR</a></span>
					</div>
					<div>
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/' ?>losango-menu-cgg.png" alt="" srcset="" width="24px">
						<span> CADASTRE SEU E-MAIL</span>
					</div>
				</div>
				<div class="col-md-3 col-12 mt-5 d-flex flex-column">
					<p class="m-0 p-1"><a href="#" style="text-decoration: none;">QUEM SOMOS</a></p>
					<p class="m-0 p-1"><a href="#" style="text-decoration: none;">PRODUTOS</a></p>
					<p class="m-0 p-1"><a href="#" style="text-decoration: none;">BLOG</a></p>
					<p class="m-0 p-1"><a href="#" style="text-decoration: none;">UNIDADES</a></p>
					<p class="m-0 p-1"><a href="#" style="text-decoration: none;">CONTATO</a></p>
					<p class="m-0 p-1"><a href="#" style="text-decoration: none;">IDIOMAS</a></p>
					<p class="m-0 p-1"><a href="#" style="text-decoration: none;">REDES SOCIAIS</a></p>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</footer><!-- #footer -->

<?php wp_footer(); ?>
</body>

</html>
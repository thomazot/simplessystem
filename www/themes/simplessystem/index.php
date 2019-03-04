<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simplessystem
 */

get_header();
?>


	<main id="main" class="main">

	<?php
		zotWidget('solutions');
		zotWidget('products');
	?>

	<section class="product-list product-list--codificadores-industriais">
		<div class="product-list__container">
			<h1 class="product-list__title">Codificadores Industriais</h1>
			<?php 
				$tax = array(
					array(
						'taxonomy' => 'product_categories',
						'field'    => 'slug',
						'terms'    => 'codificadores-industriais',
					),
				);
				zotProducts(8, 'desc', $tax ); ?>
			<div class="product-list__footer">
				<a class="button" href="/product_categories/codificadores-industriais">Veja Mais Codificadores Industriais</a>
			</div>
		</div>
	</section>

	<section class="product-list product-list--suprimentos">
		<div class="product-list__container">
			<h1 class="product-list__title">Suprimentos</h1>
			<?php 
				$tax = array(
					array(
						'taxonomy' => 'product_categories',
						'field'    => 'slug',
						'terms'    => 'suprimentos',
					),
				);
				zotProducts(8, 'desc', $tax ); ?>
				<div class="product-list__footer">
					<a class="button" href="/product_categories/suprimentos">Veja Mais Suprimentos</a>
				</div>
		</div>
	</section>

	<section class="contact">
		<div class="contact__container">
			<h1 class="contact__title"><i class="fas fa-envelope"></i> Solicite o contato de um de nossos representante de vendas</h1>
			<?php echo do_shortcode('[contact-form-7 id="82" title="Contato"]')?>
		</div>
	</section>

	<section class="post-list post-list--suprimentos">
		<div class="post-list__container">
			<h1 class="post-list__title"><i class="fas fa-rss"></i> Blog - Simples System</h1>
			<?php 
				zotPosts(4, 'desc', false ); ?>
				<div class="post-list__footer">
					<a class="button" href="/product_categories/suprimentos">Veja Mais Notícias</a>
				</div>
		</div>
	</section>

	

	</main>


<?php
get_sidebar();
get_footer();

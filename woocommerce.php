<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?> class="no-js">

<head>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="container">

		<?php tamatebako_skip_to_content(); ?>

		<div class="header-nav">

			<?php get_header(); ?>

			<?php get_template_part( 'menu/primary' ); ?>

		</div><!-- .header-nav -->

		<div class="wrap">

			<div id="main">

				<div class="wrap">

					<main id="content" class="content" role="main">

						<div class="wrap">

							<?php /* Start Content */ ?>
							<?php woocommerce_content(); ?>
							<?php /* End Content */ ?>

						</div><!-- #content > .wrap -->

					</main><!-- #content -->

					<?php tamatebako_get_sidebar( 'primary' ); ?>

				</div><!-- #main > .wrap -->

			</div><!-- #main -->

		</div><!-- #container > .wrap -->

		<?php get_footer(); ?>

	</div><!-- #container -->

	<?php wp_footer();?>

</body>
</html>
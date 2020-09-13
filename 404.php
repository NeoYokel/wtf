<?php
/**

 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Four Oh Four', 'twentytwenty' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'It looks like you are lost, but there is always hope!'' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();

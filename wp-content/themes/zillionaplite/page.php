<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zillionAplite
 */

get_header();
?>

	<section class="second-section <?php if('' == get_post()->post_content) echo 'space'; ?>">
		<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	 </div><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();

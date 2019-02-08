<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header('internal');


?>

<section id="sub-header" class="page-header page-header--sub-page bg---light">



<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-10">
	<h1 class="">
		<?php printf(
		/* translators:*/
			esc_html__( 'Search Results for: %s', 'understrap' ),
			'<span>' . get_search_query() . '</span>' ); ?></h1>
    </div>
  </div>
</div>

<div class="wrapper" id="search-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row justify-content-center">


			<main class="col-md-10">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			

		</div><!-- #primary -->
		<!-- The pagination component -->
		<?php understrap_pagination(); ?>


	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

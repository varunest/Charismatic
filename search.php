<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Coller
 */
get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2 class="top_heading">Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<div class="post_info"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></div>

				<div class="entry excerpt">
					<?php the_excerpt(); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
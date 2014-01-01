<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Charismatic
 */
get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<div class="title"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>

			<div class="post_info"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></div>

			<div class="excerpt">
			
				<?php	if ( has_post_thumbnail() ) {
							?><a href="<?php the_permalink() ?>"><?php the_post_thumbnail();?></a>
				<?php } ?>
				
				<?php the_excerpt(); ?>
				<div class="read_more"><a href="<?php echo get_permalink(); ?>"> Read More</a></div>
			</div>
		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?> 

<?php get_footer(); ?>
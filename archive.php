<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Charismatic
 */
get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="top_heading">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="top_heading">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="top_heading">Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="top_heading">Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="top_heading">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="top_heading">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="top_heading">Blog Archives</h2>
			
			<?php } ?>

			<?php get_template_part('inc/nav'); ?>
			
			<?php while (have_posts()) : the_post(); ?>
			
				<div class="post" <?php post_class() ?>>
				
					<h2 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
					<div class="post_info"><?php get_template_part('inc/meta'); ?></div>

					<div class="excerpt">
			
				<?php	if ( has_post_thumbnail() ) {
							?><a href="<?php the_permalink() ?>"><?php the_post_thumbnail();?></a>
				<?php } ?>
				
				<?php the_excerpt(); ?>
				<div class="read_more"><a href="<?php echo get_permalink(); ?>"> Read More</a></div>
					</div>
					
				</div>
			
			<?php endwhile; ?>

			<?php get_template_part('inc/nav'); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
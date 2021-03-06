<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Charismatic
 */
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="title"><h2><?php the_title(); ?></h2></div>

		<div class="post_info"><?php get_template_part('inc/meta'); ?></div>

			<div class="entry excerpt">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			

			<div class="tags"><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></div>
			</div>
		</div>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
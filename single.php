<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Coller
 */
get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div  id="post-<?php the_ID(); ?>"  <?php post_class()?> >
			
			<div class="title"><h2><?php the_title(); ?></h2></div>
			
			<div class="post_info"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></div>

			<div class="entry excerpt">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php
					if( has_tag() ) {
						 ?>
						 		<div class="tags">
							 			<?php the_tags( 'Tags: ', ', ', ''); ?>
							 	</div>
						<?php }
						else {
							// IF NO TAGS
							}
					?>
				
				<div class="edit"><?php edit_post_link('Edit this entry','','.'); ?></div>
				
			</div>

		</div>
	

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
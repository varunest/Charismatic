<div class="meta">
	Posted on  <?php the_time('F jS, Y') ?>
	<em>by</em> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author() ?></a>
	&nbsp; &nbsp; &nbsp; &nbsp;
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</div>
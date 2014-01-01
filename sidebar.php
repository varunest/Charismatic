<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Charismatic
 */
?>		
</div><!--------------->
<!--! </page-wrap ends here>  -->
<!--------------->
		
<aside>
	
	
	
	
	
    <?php if ( is_active_sidebar( 'Sidebar Widgets' ) ) : ?>
    <div class="widget-contain">
    <div id="secondary" class="widget-area" role="complementary">
    
    <?php dynamic_sidebar( 'Sidebar Widgets' ); ?>
    
    </div>
    </div>

    	 

     <?php else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

          
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
    
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
        <h2>Categories</h2>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	
	<?php endif; ?>

</aside>
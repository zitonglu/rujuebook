<?php get_header(); ?>
<div class="book-body">
    <div class="body-inner">
		<div class="book-header" role="navigation">
		    <h1><a href="<?php global $wp; $current_url = home_url(add_query_arg(array(),$wp->request));echo $current_url;?>"><?php single_cat_title(); ?></a></h1>
		</div> 
		<div class="page-wrapper" tabindex="-1" role="main">
			<div class="page-inner container">
				<div id="masonry">
				<?php
                    if (have_posts()){
                        while ( have_posts()){
                            the_post();
                            get_template_part('content/content-category',get_post_format());
                        }
                    }?>
                </div>
                <nav id="nav-below">
				  <ul class="pager">
				    <li><?php previous_posts_link(__('上一页','rujuebook')) ?></li>
				    <li id="older_posts"><?php next_posts_link(__('下一页','rujuebook')) ?></li>
				  </ul>
				</nav><!-- nav-below end -->
				<hr>
				<p class="text-center"><?php _e('自动加载完成，这是底线','rujuebook')?></p>
			</div>
		</div>
    </div>
</div>
</div>
<?php get_footer(); ?>
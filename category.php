<?php get_header(); ?>
<div class="book-body">
    <div class="body-inner">
		<div class="book-header" role="navigation">
		    <h1><a href="<?php global $wp; $current_url = home_url(add_query_arg(array(),$wp->request));echo $current_url;?>"><?php single_cat_title(); ?></a></h1>
		</div> 
		<div class="page-wrapper" tabindex="-1" role="main">
			<div class="container">
				<div id="masonry">
				<?php
                    if (have_posts()){
                        while ( have_posts()){
                            the_post();
                            get_template_part('content/content-category',get_post_format());
                        }
                    }?>
                </div>
                <p class="text-center"><?php _e('自动加载完成，这是底线','rujuebook')?></p><hr>
                <?php get_template_part('footer-nav');?><!-- 获取底部footer -->
			</div>
		</div>
    </div>
    <nav id="nav-below">
	    <?php $prev_post = get_the_previous_posts_link(); if (!empty($prev_post)): ?>
	        <a href="<?php echo $prev_post; ?>" class="navigation navigation-prev" id="shangyige">
	            <i class="fa fa-angle-left"></i>
	        </a>
	    <?php endif; ?>
	    <?php $next_post = get_the_next_posts_link(); if (!empty($next_post)): ?>
	        <a href="<?php echo $next_post; ?>" class="navigation navigation-next" id="xiayige">
	            <i class="fa fa-angle-right"></i>
	        </a>
	    <?php endif; ?>
	</nav>
</div><!-- end book-body -->
<?php get_footer(); ?>
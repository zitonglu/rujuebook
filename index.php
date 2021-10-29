<?php get_header(); ?>
<div class="book-body">
    <div class="body-inner">
		<div class="book-header" role="navigation">
		    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>     
        <div class="page-wrapper" tabindex="-1" role="main">
            <div class="page-inner">
                <h1><?php echo'搜索词：'.get_query_var('s'); ?></h1>
                <div id="masonry">
                <?php if (have_posts()){
                        while (have_posts()){
                            the_post();
                            get_template_part('content/content',get_post_format());
                        }
                    }?>
                </div><!-- end masonry -->
             </div><!-- end page-inner -->
        </div><!-- end page-wrapper -->
        <?php get_template_part('footer-nav');?><!-- 获取底部footer -->
    </div><!-- end body-inner -->
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
<?php get_header();
/*
Template Name:普通单页面模板
*/
?>
<div class="book-body">
    <div class="body-inner">
		<div class="book-header" role="navigation">
		    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>     
        <div class="page-wrapper" tabindex="-1" role="main">
            <div class="page-inner">
                <?php
                    if (have_posts()){
                        while ( have_posts()){
                            the_post();
                            get_template_part('content/content-single',get_post_format());
                        }
                    }?>
             </div>
        </div>
        <?php get_template_part('footer-nav');?><!-- 获取底部footer -->
    </div>
</div>
</div>
<?php get_footer(); ?>
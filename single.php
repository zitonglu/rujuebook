<?php get_header();
/*
Template Name:普通文章模板
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
    <?php $prev_post = get_previous_post(true); if (!empty( $prev_post )): ?>
        <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="navigation navigation-prev" id="shangyige">
            <i class="fa fa-angle-left"></i>
        </a>
    <?php endif; ?>
    <?php $next_post = get_next_post(true); if (!empty( $next_post )): ?>
        <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="navigation navigation-next" id="xiayige">
        <i class="fa fa-angle-right"></i>
    </a>
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
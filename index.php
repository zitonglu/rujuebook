<?php get_header(); ?>
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
                            get_template_part('content/content',get_post_format());
                        }
                    }?>
             </div>
        </div>
<!--         <div class="banquan">
            sgjsjfgs
        </div>  -->
    </div>
    <!-- <a href="" rel="nofollow" class="navigation navigation-prev" id="shangyige">
        <i class="fa fa-angle-left"></i>
    </a>
    <a href="" rel="nofollow" class="navigation navigation-next" id="xiayige">
        <i class="fa fa-angle-right"></i>
    </a> -->
</div>
</div>
<?php get_footer(); ?>
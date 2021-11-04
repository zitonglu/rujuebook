<?php get_header(); ?>
<div class="book-body">
    <div class="body-inner">
		<div class="book-header" role="navigation">
		    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div><!-- end book-header -->
        <div class="page-wrapper" tabindex="-1" role="main">
            <div class="page-inner">
                <form action="<?php bloginfo('url');?>" method="get">
                    <div class="input-group">
                      <input type="text" class="form-control" name="s" placeholder="<?php _e('搜索您的户型','rujuebook')?>">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><?php _e('搜索','rujuebook')?></button>
                      </span>
                    </div><!-- end input-group -->
                </form>
                <hr>
                <?php 
                wp_nav_menu(array(
                  'theme_location'=>'homelink',
                  'container_class' => 'nav nav-pills',
                  'menu_class'=>'nav nav-pills',
                  'depth' => 10,
                  // 'link_before'  => '<div class="btn btn-default">',
                  // 'link_after'  => '</div>',
                ));?>
          </div><!-- end page-inner -->
        </div><!-- end page-wrapper -->
        <?php get_template_part('footer-nav');?><!-- 获取底部footer -->
    </div><!-- end body-inner -->
</div><!-- end book-body -->
<?php get_footer(); ?>
<section class="col-sm-6 col-md-4 masonrybox" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink();?>"><h2 id="<?php the_title(); ?>"><?php the_title(); ?><a class="anchorjs-link" href="<?php the_permalink();?>" data-anchorjs-icon=""></a></h2></a>
    <p><span class="sa-last-update-time"><?php _e('最后更新于：','rujuebook'); the_modified_time('Y-m-d H:i:s'); ?></span></p>
    <?php the_excerpt(); ?>
</section><!-- 文章分类页面 End -->
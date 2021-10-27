<section class="normal markdown-section" id="post-<?php the_ID(); ?>">
    <h1 id="<?php the_title(); ?>"><?php the_title(); ?><a class="anchorjs-link " href="#<?php the_title(); ?>" data-anchorjs-icon=""></a></h1>
    <p><span class="sa-last-update-time"><?php _e('最后更新于：','rujuebook'); the_modified_time('Y-m-d H:i:s'); ?></span></p>
    <?php the_content(); ?>
</section><!-- 文章<?php the_ID(); ?> End -->
<section class="col-lg-4 col-md-6 masonrybox" id="post-<?php the_ID(); ?>">
    <?php if(has_post_thumbnail()){?>
    <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail('large',['class'=>'img-thumbnail']);?>
    </a>
    <?php }else{?>
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="<?php bloginfo('template_url'); ?>/favicon.ico" alt="ico" height="36px">
          </a>
        </div>
        <div class="media-body">
          <a href="<?php the_permalink();?>"><h4><?php the_title_attribute(); ?></h4></a>
          <?php the_excerpt();?>
        </div>
      </div>
    <?php } ?>
</section><!-- post-<?php the_ID(); ?> End -->
<div class="col-md-6">
  <div class="probootstrap-service-2 probootstrap-animate">
    <div class="image">
      <div class="image-bg">
        <?php the_post_thumbnail( 'custom-thumb-sq-400-crop' ); ?>
      </div>
    </div>
    <div class="text">
      <!-- <span class="probootstrap-meta">
        <i class="icon-calendar2"></i>
         <?php //echo get_the_date(); ?>
      </span> -->
      <h3><?php the_title(); ?></h3>
      <p><?php the_excerpt(); ?></p>
      <p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'set_classes-buttontext', customizer_get_theme_default( 'set_classes-buttontext' ) ); ?></a>
        <!-- <span class="enrolled-count">2,928 students enrolled</span> -->
      </p>
    </div>
  </div>
</div>

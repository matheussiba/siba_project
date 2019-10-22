<section class="flexslider">
  <ul class="slides">

    <?php
    $i = 1;
    while ($i <= 5):
      $var_img_setting = 'set_slider-image' . $i;
      $var_text_setting = 'set_slider-text' . $i;
      $var_link_setting = 'set_slider-link' . $i;
      if(get_theme_mod( $var_img_setting )!=''):
    ?>
        <li style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod( $var_img_setting ) ); ?>" class="overlay parallax">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center ">
                  <?php if(get_theme_mod( $var_link_setting )!=''): ?>
                        <a href="<?php echo get_theme_mod( $var_link_setting, customizer_get_theme_default( $var_link_setting ) ); ?>">
                  <?php endif; ?>
                    <h1 class="probootstrap-heading probootstrap-animate">
                      <?php echo get_theme_mod( $var_text_setting, customizer_get_theme_default( $var_text_setting ) ); ?>
                    </h1>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>
    <?php
      endif;
      $i++;
    endwhile;
    ?>




  </ul>
</section>

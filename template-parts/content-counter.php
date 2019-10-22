<section class="probootstrap-section" id="probootstrap-counter">
  <div class="container">
    <div class="row">

      <?php
        $i = 1;
        while ($i <= 4):
          $var_icon_setting = 'set_counter-icon' . $i;
          $var_number_setting = 'set_counter-number' . $i;
          $var_afternumber_setting = 'set_counter-afternumber' . $i;
          $var_text_setting = 'set_counter-text' . $i;
          if(get_theme_mod( $var_icon_setting, customizer_get_theme_default( $var_icon_setting ) )!=''):
      ?>
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="<?php echo get_theme_mod( $var_icon_setting , customizer_get_theme_default( $var_icon_setting )); ?>"></i>
          </div>
          <div class="probootstrap-text">
            <span class="probootstrap-counter">
              <span class="js-counter" data-from="1" data-to="<?php echo get_theme_mod( $var_number_setting, customizer_get_theme_default( $var_number_setting ) ); ?>" data-speed="1500" data-refresh-interval="50">1</span><?php echo get_theme_mod( $var_afternumber_setting, customizer_get_theme_default( $var_afternumber_setting ) ); ?>
            </span>
            <span class="probootstrap-counter-label"><?php echo get_theme_mod( $var_text_setting, customizer_get_theme_default( $var_text_setting ) ); ?></span>
          </div>
        </div>
      </div>
        <?php if( $i == 2 ): ?>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
        <?php endif; ?>
      <?php
            endif;
          $i++;
        endwhile;
      ?>

    </div>
  </div>
</section>

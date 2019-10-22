<?php
$i = 1;
// $num_elem represents the number of boxes registered in this sections
// MUST be an EVEN number
$num_elem = 6;
while ($i <= $num_elem):
  $var_title_setting = 'set_extra-title' . strval($i);
  $var_text_setting = 'set_extra-text' . strval($i);
  $var_icon_setting = 'set_extra-icon' . strval($i);

  if(
    (( get_theme_mod($var_title_setting ,customizer_get_theme_default($var_title_setting)) ) !='') ||
    (( get_theme_mod($var_text_setting, customizer_get_theme_default($var_text_setting)) ) !='') ||
    (( get_theme_mod($var_icon_setting, customizer_get_theme_default($var_icon_setting)) ) !='')
    ):
?>
    <?php if($i % 2 != 0): //Odd Number ?>
      <div class="row">
    <?php endif; ?>
        <div class="col-md-6">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <i class="<?php echo get_theme_mod( $var_icon_setting, customizer_get_theme_default( $var_icon_setting) ); ?>"></i>
            </div>
            <div class="text">
              <h3>
                <?php //echo $i // debugger ?>
                <?php echo get_theme_mod( $var_title_setting, customizer_get_theme_default( $var_title_setting ) ); ?>
              </h3>
              <p>
                <?php echo get_theme_mod( $var_text_setting, customizer_get_theme_default( $var_text_setting ) ); ?>
              </p>
            </div>
          </div>
        </div>
    <?php

    // Checking if next of the row is empty.
    // If YES: Close "row" div.
    // Otherwise add another box in the same row, before closing it.
    if( (($i+1) % 2 == 0) && (
      (( get_theme_mod('set_extra-title' . strval($i+1),customizer_get_theme_default('set_extra-title' . strval($i+1))) ) =='') &&
      (( get_theme_mod('set_extra-text' . strval($i+1),customizer_get_theme_default('set_extra-text' . strval($i+1))) ) =='') &&
      (( get_theme_mod('set_extra-icon' . strval($i),customizer_get_theme_default('set_extra-icon' . strval($i+1))) ) =='')
      ) ):
     ?>
      </div>
    <?php
    // Next box is an odd number meaning it's place in the next row
    elseif( ($i+1) % 2 != 0 ):
     ?>
     </div>
    <?php endif; ?>

<?php
  endif;
  $i++;
endwhile;
?>

<?php if(get_theme_mod( 'set_map-checkbox_showmap', customizer_get_theme_default( 'set_map-checkbox_showmap' ) )): ?>
  <section class="probootstrap-section pb0 pt0 mb0 mt0 ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate pb0 pt0 mb0 mt0" style="">
          <h2><?php echo get_theme_mod( 'set_map-title', customizer_get_theme_default( 'set_map-title' ) ); ?></h2>
          <p class="lead pb0 pt0 mb0 mt0"><?php echo get_theme_mod( 'set_map-text', customizer_get_theme_default( 'set_map-text' ) ); ?></p>
        </div>
      </div>
    </div>
    <?php
      $key = get_theme_mod( 'set_map-apikey', customizer_get_theme_default( 'set_map-apikey' ) );
      // $address = urlencode( get_theme_mod( 'set_map_address' ) );
      $address = urlencode( get_theme_mod( 'set_info-address' ) );
    ?>
      <iframe
        width="100%"
        height="350"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $address; ?>&zoom=15" allowfullscreen>
      </iframe>
  </section>
<?php endif; ?>

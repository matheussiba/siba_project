<?php if(get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) )!= ''):
  $str = get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) );
  // Extract only the numbers of the string
  preg_match_all('!\d+!', $str, $matches);
  $whatsappnumber = implode('', $matches[0]);

  $whatsappmsglink = "https://api.whatsapp.com/send?phone=" . strval($whatsappnumber);
  ?>
  <li><a href="<?php echo $whatsappmsglink ?>" target="_blank"><i class="icon-whatsapp"></i></a></li>
<?php endif; ?>
<?php if(get_theme_mod( 'set_info-twitterlink', customizer_get_theme_default( 'set_info-twitterlink' ) )!= ''): ?>
  <li><a href="<?php echo get_theme_mod( 'set_info-twitterlink', customizer_get_theme_default( 'set_info-twitterlink' ) ); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
<?php endif; ?>
<?php if(get_theme_mod( 'set_info-facebooklink', customizer_get_theme_default( 'set_info-facebooklink' ) )!= ''): ?>
  <li><a href="<?php echo get_theme_mod( 'set_info-facebooklink', customizer_get_theme_default( 'set_info-facebooklink' ) ); ?>" target="_blank"><i class="icon-facebook2"></i></a></li>
<?php endif; ?>
<?php if(get_theme_mod( 'set_info-instagramlink', customizer_get_theme_default( 'set_info-instagramlink' ) )!= ''): ?>
  <li><a href="<?php echo get_theme_mod( 'set_info-instagramlink', customizer_get_theme_default( 'set_info-instagramlink' ) ); ?>" target="_blank"><i class="icon-instagram2"></i></a></li>
<?php endif; ?>
<?php if(get_theme_mod( 'set_info-pinterestlink', customizer_get_theme_default( 'set_info-pinterestlink' ) )!= ''): ?>
  <li><a href="<?php echo get_theme_mod( 'set_info-pinterestlink', customizer_get_theme_default( 'set_info-pinterestlink' ) ); ?>" target="_blank"><i class="icon-pinterest2"></i></a></li>
<?php endif; ?>
<?php if(get_theme_mod( 'set_info-linkedinlink', customizer_get_theme_default( 'set_info-linkedinlink' ) )!= ''): ?>
  <li><a href="<?php echo get_theme_mod( 'set_info-linkedinlink', customizer_get_theme_default( 'set_info-linkedinlink' ) ); ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
<?php endif; ?>
<?php if(get_theme_mod( 'set_info-youtubelink', customizer_get_theme_default( 'set_info-youtubelink' ) )!= ''): ?>
  <li><a href="<?php echo get_theme_mod( 'set_info-youtubelink', customizer_get_theme_default( 'set_info-youtubelink' ) ); ?>" target="_blank"><i class="icon-youtube"></i></a></li>
<?php endif; ?>

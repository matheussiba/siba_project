<div class="col-md-3 col-sm-6">
  <div class="probootstrap-teacher text-center probootstrap-animate">
    <figure class="media">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'custom-thumb-sq-200-crop', array( 'class' => 'img-responsive' ) ); ?></a>
    </figure>
    <div class="text">
      <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

      <a class="no_hyperlink" href="<?php the_permalink(); ?>"><p><?php the_excerpt(); ?></p></a>

      <ul class="probootstrap-footer-social">
        <?php if (rwmb_meta( 'sibaproject-twitter_link' ) != ''): ?><li class="twitter"><a href="<?php echo rwmb_meta( 'sibaproject-twitter_link' )  ?>" target="_blank"><i class="icon-twitter"></i></a></li>
        <?php endif ?>
        <?php if (rwmb_meta( 'sibaproject-facebook_link' ) != ''): ?><li class="facebook"><a href="<?php echo rwmb_meta( 'sibaproject-facebook_link' ) ?>" target="_blank"><i class="icon-facebook2"></i></a></li>
        <?php endif ?>
        <?php if (rwmb_meta( 'sibaproject-whatsapp_number' ) != ''):
          // Extract only the numbers of the string
          preg_match_all('!\d+!', rwmb_meta( 'sibaproject-whatsapp_number' ) , $matches);
          $whatsappnumber = implode('', $matches[0]);

          $whatsappmsglink = "https://api.whatsapp.com/send?phone=" . strval($whatsappnumber);
        ?>
          <li class="whatsapp"><a href="<?php echo $whatsappmsglink; ?>" target="_blank"><i class="icon-whatsapp"></i></a></li>
        <?php endif ?>
        <?php if (rwmb_meta( 'sibaproject-instagram_link' ) != ''): ?><li class="instagram"><a href="<?php echo rwmb_meta( 'sibaproject-instagram_link' ) ?>" target="_blank"><i class="icon-instagram2"></i></a></li>
        <?php endif ?>
        <?php if (rwmb_meta( 'sibaproject-youtube_link' ) != ''): ?><li class="youtube"><a href="<?php echo rwmb_meta( 'sibaproject-youtube_link' ) ?>" target="_blank"><i class="icon-youtube"></i></a></li>
        <?php endif ?>
        <?php if (rwmb_meta( 'sibaproject-linkedin_link' ) != ''): ?><li class="linkedin"><a href="<?php echo rwmb_meta( 'sibaproject-linkedin_link' ) ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
        <?php endif ?>
        <?php if (rwmb_meta( 'sibaproject-pinterest_link' ) != ''): ?><li class="pinterest"><a href="<?php echo rwmb_meta( 'sibaproject-pinterest_link' ) ?>" target="_blank"><i class="icon-pinterest2"></i></a></li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</div>

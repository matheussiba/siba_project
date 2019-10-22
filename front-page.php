<!-- ADDING header.php -->
<?php get_header(); ?>

<!-- ADDING SLIDER-->
<?php get_template_part( 'template-parts/content', 'slider' ); ?>

<!-- SECTION INTRO & ABOUT US -->
<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-9 text-left section-heading probootstrap-animate">
        <h2><?php echo get_theme_mod( 'set_welcome-heading', customizer_get_theme_default( 'set_welcome-heading' ) ); ?></h2>
      </div>
      <div class="col-md-3 text-center section-heading probootstrap-image probootstrap-animate">
        <img src= <?php echo get_template_directory_uri() . '/img/miniature.png'; ?> alt="Type alternative text here" width="100" height="auto">
      </div>
    </div>
  </div>
</section>
<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="probootstrap-flex-block">
          <div class="probootstrap-text probootstrap-animate">
            <h3><?php echo get_theme_mod( 'set_welcome-title', customizer_get_theme_default( 'set_welcome-title' ) ); ?></h3>
            <p><?php echo get_theme_mod( 'set_welcome-paragraph', customizer_get_theme_default( 'set_welcome-paragraph' ) ); ?></p>
            <p><a href="<?php echo get_theme_mod( 'set_welcome-buttonlink', customizer_get_theme_default( 'set_welcome-buttonlink' ) ); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'set_welcome-buttontext', customizer_get_theme_default( 'set_welcome-buttontext' ) ); ?></a></p>
          </div>
          <div class="probootstrap-image probootstrap-animate" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod( 'set_welcome-imagebg' )); ?>)">
            <?php if(get_theme_mod( 'set_welcome-videolink', customizer_get_theme_default( 'set_welcome-videolink' ) ) != ''): ?>
              <a href="<?php echo get_theme_mod( 'set_welcome-videolink', customizer_get_theme_default( 'set_welcome-videolink' ) ); ?>" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END INTRO & ABOUT US -->

<!-- SECTION COUNTER -->
<?php get_template_part( 'template-parts/content', 'counter' ); ?>
<!-- END SECTION COUNTER -->

<!-- SECTION BLOG -->
<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(<?php echo get_theme_mod( 'set_blog-imagebg' ); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center section-heading probootstrap-animate">
        <h2 class="mb0"><?php echo get_theme_mod( 'set_blog-heading', customizer_get_theme_default( 'set_blog-heading' ) ); ?></h2>
      </div>
    </div>
  </div>
  <div class="probootstrap-tab-style-1">
    <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
      <li class="active"><a data-toggle="tab" href="#featured-news"><?php echo get_theme_mod( 'set_blog-tabtitle1', customizer_get_theme_default( 'set_blog-tabtitle1' ) ); ?></a></li>
      <?php if(get_theme_mod( 'set_blog-checkbox_showtab2', customizer_get_theme_default( 'set_blog-checkbox_showtab2' ) )): ?>
        <li><a data-toggle="tab" href="#upcoming-events"><?php echo get_theme_mod( 'set_blog-tabtitle2', customizer_get_theme_default( 'set_blog-tabtitle2' ) ); ?></a></li>
      <?php endif; ?>
    </ul>
  </div>
</section>
<section class="probootstrap-section probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tab-content">
          <!-- News -->
          <div id="featured-news" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-12">
                <div class="owl-carousel" id="owl1">
                  <?php
  									$args = array(
  										'post_type'				=> 'post',
  										// 'posts_per_page'		=> 1,
  										// 'ignore_sticky_posts'	=> true
  									);

  								$query = new WP_Query($args);

  								if ( $query->have_posts() ) :

  									while ( $query->have_posts() ) : $query->the_post();

  										$thispost = $post->ID;
  										get_template_part( 'template-parts/content', 'blog' );

  									endwhile;

  									wp_reset_postdata();

  								// If no content, include the "No posts found" template.
  								else :
  									// get_template_part( 'template-parts/content', 'none' );
                    echo __( 'Nothing found', 'siba-project' );

  								endif;
  								?>
                </div>
              </div>
            </div>
            <!-- END row -->
            <div class="row">
              <div class="col-md-12 text-center">
                <p><a href="<?php echo get_theme_mod( 'set_blog-buttonlink1', customizer_get_theme_default( 'set_blog-buttonlink1' ) ); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod( 'set_blog-buttontext1', customizer_get_theme_default( 'set_blog-buttontext1' ) ); ?></a></p>
              </div>
            </div>
          </div>
          <!-- END News -->
          <?php if(get_theme_mod( 'set_blog-checkbox_showtab2', customizer_get_theme_default( 'set_blog-checkbox_showtab2' ) )): ?>
            <!-- Events -->
            <div id="upcoming-events" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-12">
                <div class="owl-carousel" id="owl2">
                  <?php
  									$args = array(
  										'post_type'	=> 'post',
  									);

  								$query = new WP_Query($args);

  								if ( $query->have_posts() ) :

  									while ( $query->have_posts() ) : $query->the_post();

  										$thispost = $post->ID;
  										get_template_part( 'template-parts/content', 'events' );

  									endwhile;

  									wp_reset_postdata();

  								// If no content, include the "No posts found" template.
  								else :
  									// get_template_part( 'template-parts/content', 'none' );
                    echo __( 'Nothing found', 'siba-project' );

  								endif;
  								?>
                </div>
              </div>
            </div>
            <!-- END row -->
            <div class="row">
              <div class="col-md-12 text-center">
                <p><a href="<?php echo get_theme_mod( 'set_blog-buttonlink2', customizer_get_theme_default( 'set_blog-buttonlink2' ) ); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod( 'set_blog-buttontext2', customizer_get_theme_default( 'set_blog-buttontext2' ) ); ?></a></p>
              </div>
            </div>
          </div>
            <!-- END Events -->
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END SECTION BLOG -->

<!-- SECTION CLASSES -->
<section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate">
        <h2><?php echo get_theme_mod( 'set_classes-title', customizer_get_theme_default( 'set_classes-title' ) ); ?></h2>
        <p class="lead"><?php echo get_theme_mod( 'set_classes-text', customizer_get_theme_default( 'set_classes-text' ) ); ?></p>
      </div>
    </div>
    <!-- END row -->
    <div class="row">
      <?php

      $args = array(
        'post_type' => 'classes',
        // 'posts_per_page' => 4 ,
        'orderby' => 'menu_order title',
        'order'   => 'ASC',
      );

      $loop = new WP_Query( $args );

      if( $loop->have_posts() ):
        while( $loop->have_posts() ):
          $loop->the_post();

          get_template_part( 'template-parts/content', 'classes' );

      endwhile;
      wp_reset_postdata();

      else:
        echo __('Nothing found', 'siba-project' );
      endif;

      ?>
    </div>
  </div>
</section>
<!-- END SECTION CLASSES -->

<!-- SECTION TEAM -->
<section class="probootstrap-section probootstrap-border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate">
        <h2><?php echo get_theme_mod( 'set_team-title', customizer_get_theme_default( 'set_team-title' ) ); ?></h2>
        <p class="lead"><?php echo get_theme_mod( 'set_team-text', customizer_get_theme_default( 'set_team-text' ) ); ?></p>
      </div>
    </div>
    <div class="row">
      <?php

      if(get_theme_mod( 'set_team-checkbox_showbutton', customizer_get_theme_default( 'set_team-checkbox_showbutton' ) )){
        $number_of_posts = 4;
      } else{
        $number_of_posts = -1;
      }

      $args = array(
        'post_type' => 'team',
        'posts_per_page' => $number_of_posts ,
        'orderby' => 'menu_order title',
        'order'   => 'ASC',

      );

      $loop = new WP_Query( $args );

      if( $loop->have_posts() ):
        while( $loop->have_posts() ):
          $loop->the_post();

          get_template_part( 'template-parts/content', 'team' );

      endwhile;
      wp_reset_postdata();

      else:
        echo __('Nothing found', 'siba-project' );
      endif;

      ?>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
    </div>
    <?php if(get_theme_mod( 'set_team-checkbox_showbutton', customizer_get_theme_default( 'set_team-checkbox_showbutton' ) )): ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <p><a href="<?php echo get_theme_mod( 'set_team-buttonlink', customizer_get_theme_default( 'set_team-buttonlink' ) ); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod( 'set_team-buttontext', customizer_get_theme_default( 'set_team-buttontext' ) ); ?></a></p>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- END SECTION TEAM -->

<!-- SECTION TESTIMONIALS -->
<section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(<?php echo get_theme_mod( 'set_testimonials-imagebg' ); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate">
        <h2><?php echo get_theme_mod( 'set_testimonials-title', customizer_get_theme_default( 'set_testimonials-title' ) ); ?></h2>
        <p class="lead"><?php echo get_theme_mod( 'set_testimonials-text', customizer_get_theme_default( 'set_testimonials-text' ) ); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 probootstrap-animate">
        <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
          <?php
          $args = array(
            'post_type' => 'testimonials',
            // 'posts_per_page' => 4 ,
            'orderby' => 'menu_order title',
            'order'   => 'ASC',
          );

          $loop = new WP_Query( $args );

          if( $loop->have_posts() ):
            while( $loop->have_posts() ):
              $loop->the_post();

              get_template_part( 'template-parts/content', 'testimonials' );

          endwhile;
          wp_reset_postdata();

          else:
            echo __('Nothing found', 'siba-project' );
          endif;
          ?>
        </div>
      </div>
    </div>
    <!-- END row -->
  </div>
  </section>
<!-- SECTION TESTIMONIALS -->

<!-- SECTION WHY STUDY HERE -->
<section class="probootstrap-section pb0">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate">
        <h2><?php echo get_theme_mod( 'set_extra-title', customizer_get_theme_default( 'set_extra-title' ) ); ?></h2>
        <p class="lead"><?php echo get_theme_mod( 'set_extra-text', customizer_get_theme_default( 'set_extra-text' ) ); ?></p>
      </div>
    </div>

      <?php get_template_part( 'template-parts/content', 'whystudyhere' ); ?>

  </div>
</section>
<!-- END SECTION WHY STUDY HERE -->

<!-- SECTION GOOGLE MAPS -->
<?php get_template_part( 'template-parts/content', 'gmaps' ); ?>
<!-- END SECTION GOOGLE MAPS -->

<!-- ADDING footer.php -->
<?php get_footer(); ?>

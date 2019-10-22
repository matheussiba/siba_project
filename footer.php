<?php
 global $post; $post_slug=$post->post_name;
 if ($post_slug!='contato'):
 ?>
<section class="probootstrap-cta">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <h2 class="probootstrap-animate" data-animate-effect="fadeInRight"><?php echo get_theme_mod( 'set_banner-text', customizer_get_theme_default( 'set_banner-text' ) ); ?></h2>
        <a href="<?php echo get_theme_mod( 'set_banner-buttonlink', customizer_get_theme_default( 'set_banner-buttonlink' ) ); ?>" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">
          <?php echo get_theme_mod( 'set_banner-buttontext', customizer_get_theme_default( 'set_banner-buttontext' ) ); ?>
        </a>
      </div>
    </div>
  </div>
</section>
<?php
 endif;
 ?>

<footer class="probootstrap-footer probootstrap-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="probootstrap-footer-widget">
          <h3><?php echo get_theme_mod( 'set_welcome-title', customizer_get_theme_default( 'set_welcome-title' ) ); ?></h3>
          <p><?php echo get_theme_mod( 'set_welcome-paragraph', customizer_get_theme_default( 'set_welcome-paragraph' ) ); ?></p>
          <h3><?php _e( 'Social', 'siba-project' ); ?></h3>
          <ul class="probootstrap-footer-social">
            <?php get_template_part( 'template-parts/content', 'socialmedia' ); ?>
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-md-push-1">
        <div class="probootstrap-footer-widget">
          <h3><?php _e( 'Links', 'siba-project' ); ?></h3>
          <!-- STATIC MENU -->
          <!-- <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="#">Professores</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->

          <!-- DYNAMIC MENU -->
          <?php
            wp_nav_menu(
              array(
                  // 'menu'            => '',
                  // 'container'       => 'div',
                  // 'container_class' => 'probootstrap-footer-widget',
                  // 'container_id'    => 'navbar-collapse',
                  // 'menu_class'      => 'nav navbar-nav navbar-right',
                  // 'menu_id'         => '',
                  // 'echo'            => true,
                  // 'fallback_cb'     => 'wp_page_menu',
                  // 'before'          => '',
                  // 'after'           => '',
                  // 'link_before'     => '',
                  // 'link_after'      => '',
                  // 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  // 'item_spacing'    => 'preserve',
                  // 'depth'           => 0,
                  // 'walker'          => '',
                  'theme_location'  => 'footer_menu',
              )
            );
          ?>
        </div>
      </div>

      <div class="col-md-4">
        <div class="probootstrap-footer-widget">
          <h3><?php _e( 'Contact Information', 'siba-project' ); ?></h3>
          <ul class="probootstrap-contact-info">
            <li><i class="icon-location2"></i> <span><?php echo get_theme_mod( 'set_info-address', customizer_get_theme_default( 'set_info-address' ) ); ?></span></li>
            <?php if(get_theme_mod( 'set_info-phone', customizer_get_theme_default( 'set_info-phone' ) )!=''): ?>
              <li><i class="icon-phone2"></i><span><?php echo get_theme_mod( 'set_info-phone', customizer_get_theme_default( 'set_info-phone' ) ); ?></span></li>
            <?php endif; ?>
            <?php if(get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) )!=''): ?>
              <li><i class="icon-whatsapp"></i><span><?php echo get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) ); ?></span></li>
            <?php endif; ?>
            <li><i class="icon-mail"></i><span><?php echo get_theme_mod( 'set_info-email', customizer_get_theme_default( 'set_info-email' ) ); ?></span></li>
          </ul>
        </div>
      </div>

    </div>
    <!-- END row -->
  </div>

  <div class="probootstrap-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-left">
          <p><a href="http://www.mmsinstitute.com.br/politica-de-privacidade/"><?php _e( 'Privacy Policy', 'siba-project' ); ?></a></p>
          <p>&copy; <script>document.write( new Date().getFullYear() );</script>
            <?php _e( 'All rights reserved.', 'siba-project' ); ?> <?php _e( 'Developed with', 'siba-project' ); ?> <i class="icon icon-heart"></i> <?php _e( 'by', 'siba-project' ); ?> <a href="https://www.facebook.com/aiurusiba" target="_blank">Matheus S. Barros</a></p>
        </div>
        <div class="col-md-4 probootstrap-back-to-top">
          <p><a href="#" class="js-backtotop"><?php _e( 'Go to top', 'siba-project' ); ?><i class="icon-arrow-long-up"></i></a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>
<!-- END wrapper -->

<!-- JS FILES -->
<?php wp_footer(); ?>

</body>
</html>

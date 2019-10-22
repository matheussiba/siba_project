<!DOCTYPE html>

<!--
  Theme Name: MMS Institute
  Author: ProBootstrap.com
  Author URL: https://
  License: Creative Commons Attribution 3.0 license
-->
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="www.mmsinstitute.com.br">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- <meta name="description" content="Aprenda Inglês e Espanhol em um quarto (1/4) do tempo"> -->
    <meta name="keywords" content="english school, escola de inglês, itajubá, minas gerais, sul de minas, brasil">

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>

  <body <?php body_class(); ?>>
    <!-- <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div> -->

    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->

      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="align d-flex align-items-center">
              <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
                <div class="row center-block text-center">
                    <span><i class="icon-location2"></i><?php echo get_theme_mod( 'set_info-address', customizer_get_theme_default( 'set_info-address' ) ); ?></span>
                  <?php if(get_theme_mod( 'set_info-phone', customizer_get_theme_default( 'set_info-phone' ) )!=''): ?>
                    <span><i class="icon-phone2"></i><?php echo get_theme_mod( 'set_info-phone', customizer_get_theme_default( 'set_info-phone' ) ); ?></span>
                  <?php endif; ?>
                  <?php if(get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) )!=''): ?>
                    <span><i class="icon-whatsapp"></i><?php echo get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) ); ?></span>
                  <?php endif; ?>
                    <span><i class="icon-mail"></i><?php echo get_theme_mod( 'set_info-email', customizer_get_theme_default( 'set_info-email' ) ); ?></span>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
                <ul class="center-block text-center">
                  <?php get_template_part( 'template-parts/content', 'socialmedia' ); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-info-with-circle"></i></a>
              <!-- <a href="#"><i class="icon-info"></i></a> -->
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only"><?php _e( 'Menu', 'siba-project' ); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home" title="<?php echo get_bloginfo( 'name' ); ?>"><?php the_custom_logo(); ?></a>
          </div>

          <!-- STATIC MENU -->
          <!-- <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="courses.html">Cursos</a></li>
              <li><a href="teachers.html">Professores</a></li>
              <li><a href="events.html">Eventos</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="courses.html">Cursos</a></li>
                  <li><a href="course-single.html">Course Single</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                    </ul>
                  </li>
                  <li><a href="news.html">News</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div> -->

          <!-- DYNAMIC MENU -->
          <?php
            wp_nav_menu(
              array(
                  // 'menu'            => '',
                  'container'       => 'div',
                  'container_class' => 'navbar-collapse collapse main-menu',
                  'container_id'    => 'navbar-collapse',
                  'menu_class'      => 'nav navbar-nav navbar-right',
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
                  'theme_location'  => 'my_main_menu',
              )
            );
          ?>

        </div>
      </nav>

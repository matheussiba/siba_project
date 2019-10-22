<?php get_header(); ?>

  <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(<?php if( get_theme_mod( 'set_page-contact-imagebg' ) != ''){ echo get_theme_mod( 'set_page-contact-imagebg' ); }else{ header_image(); } ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
          <h1 class="mb0">
            <?php
    					if( get_theme_mod( 'set_page-contact-heading' ) != ''){
    						echo get_theme_mod( 'set_page-contact-heading' );
    					}else{ the_title();}
    				?>
          </h1>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-section-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row probootstrap-gutter0">
            <div class="col-md-4" id="probootstrap-sidebar">
              <div class="probootstrap-sidebar-inner  probootstrap-animate">
                <h3><?php echo get_theme_mod( 'set_page-title_info_panel', customizer_get_theme_default( 'set_page-title_info_panel' ) ); ?></h3>
                <ul class="probootstrap-side-menu">
                  <hr>
                  <li><i class="icon-location2"></i> <?php echo get_theme_mod( 'set_info-address', customizer_get_theme_default( 'set_info-address' ) ); ?></li>
                <?php if(get_theme_mod( 'set_info-phone', customizer_get_theme_default( 'set_info-phone' ) )!=''): ?>
                  <li><i class="icon-phone2"></i> <?php echo get_theme_mod( 'set_info-phone', customizer_get_theme_default( 'set_info-phone' ) ); ?></li>
                <?php endif; ?>
                <?php if(get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) )!=''): ?>
                  <li><i class="icon-whatsapp"></i> <?php echo get_theme_mod( 'set_info-whatsapp', customizer_get_theme_default( 'set_info-whatsapp' ) ); ?></li>
                <?php endif; ?>
                  <li><i class="icon-mail"></i> <?php echo get_theme_mod( 'set_info-email', customizer_get_theme_default( 'set_info-email' ) ); ?></li>
                  <hr>
                </ul>
              </div>

              <!-- SECTION GOOGLE MAPS -->
              <?php get_template_part( 'template-parts/content', 'gmaps' ); ?>
              <!-- END SECTION GOOGLE MAPS -->

            </div>

            <!-- To make the contact form to be exactly the way it was in the template I did:
              1) Create in the form on WP admin the section how the contact was structured
                      <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
              2) Than I went to the CSS code and change everything it was .probootstrap-form to .wpcf7-form
              3) Add the shortcode in the area starting and finishing by 'form' tag (<form> ... </form>)
              4) And it worked like a treat...
          -->
            <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
              <h2><?php echo get_theme_mod( 'set_page-title_form', customizer_get_theme_default( 'set_page-title_form' ) ); ?></h2>
              <p><?php echo get_theme_mod( 'set_page-description_form', customizer_get_theme_default( 'set_page-description_form' ) ); ?></p>
              <?php
                echo do_shortcode( get_theme_mod( 'set_page-contact_form_shortcode') );
              ?>
            </div>


            <!-- STATIC WAY: for comparison -->
            <!-- <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
              <h2>Title</h2>
              <p>Paragraph</p>

              <form action="#" method="post" class="probootstrap-form">
                <div class="form-group">
                  <label for="name">Nome Completo</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="subject">Assunto</label>
                  <input type="text" class="form-control" id="subject" name="subject">
                </div>
                <div class="form-group">
                  <label for="message">Mensagem</label>
                  <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                </div>
              </form>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

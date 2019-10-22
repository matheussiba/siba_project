<?php get_header(); ?>

<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(<?php if( get_theme_mod( 'set_page-blog-imagebg' ) != ''){ echo get_theme_mod( 'set_page-blog-imagebg' ); }else{ header_image(); } ?>)">

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left section-heading probootstrap-animate">
				<h1>
					<?php
						if( get_theme_mod( 'set_page-blog-heading' ) != ''){
							echo get_theme_mod( 'set_page-blog-heading' );
						}else{ the_title();}
					?>
				</h1>
			</div>
		</div>
	</div>
</section>

      <section class="probootstrap-section">
        <div class="container">

          <div class="row">
            <?php
              // https://codex.wordpress.org/Function_Reference/next_posts_link#Usage_when_querying_the_loop_with_WP_Query
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              // Loop para os posts de Noticias e Eventos (categoria: 2 e 3)
              $args_blog = array(
                'post_type' => 'post',
                'posts_per_page' => 9,
                // 'ignore_sticky_posts'	=> true
                'paged' => $paged
              );
              $query_blog = new WP_Query( $args_blog );
              if( $query_blog->have_posts() ):
                while( $query_blog->have_posts() ): $query_blog->the_post();
            ?>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <?php get_template_part( 'template-parts/content', 'blog' ); ?>
            </div>
            <?php
                endwhile;
            ?>
            <?php
              // clean up after the query and pagination
              wp_reset_postdata();
            ?>

          <?php
          else :
            // get_template_part( 'template-parts/content', 'none' );
            echo __( 'Nothing found', 'siba-project' );

          endif;
          ?>
          </div>

          <!-- Pagination -->
          <div class="row">
            <div class="pages text-left col-6">
              <?php previous_posts_link( "<< Posts mais recentes" ); ?>
            </div>
            <div class="pages text-right col-6">
               <?php next_posts_link( "Posts mais antigos >>", $query_blog->max_num_pages ); ?>
            </div>
          </div>

          <!-- END row -->
        </div>
      </section>

<?php get_footer(); ?>

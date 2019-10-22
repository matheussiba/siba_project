<!-- ADDING header.php -->
<?php get_header(); ?>

<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(<?php if( get_theme_mod( 'set_page-about-imagebg' ) != ''){ echo get_theme_mod( 'set_page-about-imagebg' ); }else{ header_image(); } ?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left section-heading probootstrap-animate">
				<h1>
				<?php
					if( get_theme_mod( 'set_page-about-heading' ) != ''){
						echo get_theme_mod( 'set_page-about-heading' );
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
					<div class="col-md-8 col-md-offset-2 text-justify probootstrap-animate" id="probootstrap-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION WHY STUDY HERE -->
<section class="probootstrap-section probootstrap-border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center section-heading probootstrap-animate">
        <h2><?php echo get_theme_mod( 'set_extra-title', customizer_get_theme_default( 'set_extra-title' ) ); ?></h2>
        <p class="lead"><?php echo get_theme_mod( 'set_extra-text', customizer_get_theme_default( 'set_extra-text' ) ); ?></p>
      </div>
    </div>
    <div class="row">
      <?php get_template_part( 'template-parts/content', 'whystudyhere' ); ?>
    </div>
  </div>
</section>
<!-- END SECTION WHY STUDY HERE -->

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

			$number_of_posts = -1;

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
	</div>
</section>
<!-- END SECTION TEAM -->

<!-- SECTION GOOGLE MAPS -->
<?php get_template_part( 'template-parts/content', 'gmaps' ); ?>
<!-- END SECTION GOOGLE MAPS -->

<?php get_footer(); ?>

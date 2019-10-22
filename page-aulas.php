<!-- ADDING header.php -->
<?php get_header(); ?>

<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(<?php if( get_theme_mod( 'set_page-classes-imagebg' ) != ''){ echo get_theme_mod( 'set_page-classes-imagebg' ); }else{ header_image(); } ?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left section-heading probootstrap-animate">
				<h1>
				<?php
					if( get_theme_mod( 'set_page-classes-heading' ) != ''){
						echo get_theme_mod( 'set_page-classes-heading' );
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

<!-- SECTION CLASSES -->
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
<!-- END SECTION CLASSES -->


<?php get_footer(); ?>

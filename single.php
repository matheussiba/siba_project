<!-- ADDING header.php -->
<?php get_header(); ?>

<?php
	while( have_posts() ): the_post();
		$show_date = true;
		$show_thumbnail = false;
		$title = "";
		foreach (get_post_class()  as $category){
			if ( ($category == 'type-post') ) {
				// 'post' settings
				$title = "";
				break;
			} elseif ( ($category == 'type-classes') ) {
				// CPT 'classes' settings
				$show_date = false;
				$title = "";
				break;
			} elseif ( ($category == 'type-team') ) {
				// CPT 'team' settings
				$show_date = false;
				$show_thumbnail = true;
				$title = "";
				break;
			}
		}
    ?>

    <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(<?php header_image(); ?>)">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 text-left section-heading probootstrap-animate">
    				<h1><?php echo $title; ?></h1>
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
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <h1><?php the_title(); ?></h1>
                  <div class="meta-info">
                    <p>
                      <div class="row">
                        <div class="col-md-4">
													<?php if( $show_date ): ?>
                          	<i class="icon-calendar"></i> <?php echo get_the_date(); ?>
													<?php endif; ?>
                        </div>
	                        <div class="col-md-8">
														<?php if( has_tag() ): ?>
	                          <span class="no_hyperlink"><?php the_tags('<i class="icon-price-tags"></i> ', ', ' ); ?></span>
													<?php endif; ?>
	                        </div>
                      </div>
                    </p>
                  </div>

									<?php
										if( $show_thumbnail ){
											the_post_thumbnail( array( 250, 250 ) );
										}
									?>

                  <?php the_content(); ?>
                </article>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <?php
    	endwhile;
    ?>

<!-- ADDING footer.php -->
<?php get_footer(); ?>

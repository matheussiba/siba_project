<?php get_header(); ?>

<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(<?php header_image(); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
        <?php
				    the_archive_title( '<h1 class="archive-title">', '</h1>' );
				?>
      </div>
    </div>
  </div>
</section>

<div class="content-area">
	<main>
		<section class="middle-area">
			<div class="container">
				<div class="row">
          <br><h4><?php the_archive_description(); ?></h4><hr>
          <div class="archive col-md-8">
            <div class="row">
						<?php
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();
							 		get_template_part( 'template-parts/content', 'archive' );
						?>
						<?php endwhile;?>

            <div class="row">
              <div class="pages text-left col-6">
                <?php previous_posts_link( '<span style="font-size:20px;"><< Posts recentes</span>' ); ?>
              </div>
              <div class="pages text-right col-6">
                 <?php next_posts_link( '<span style="font-size:20px;">Posts antigos >></span>' ); ?>
              </div>
              <br>
            </div>

							<?php else: ?>
						 <p>There&rsquo;s nothing yet to be displayed...</p>
						<?php endif; ?>
            </div>
					</div>

					<?php get_sidebar( 'arquive' ); ?>
				</div>
			</div>
		</section>
	</main>
</div>

<?php get_footer(); ?>

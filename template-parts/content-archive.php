
<article <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="row article-box">
		<div class="meta-info">
			<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array(275,275) ); ?></a>
			<p>
				<i class="icon-calendar"></i>  <?php echo get_the_date(); ?><br>
				<i class="icon-folder"></i>  <?php the_category( ' ' ); ?><br>
				<span class="no_hyperlink"><?php the_tags('<i class="icon-price-tags"></i>  ', ', ' ); ?></span>
			</p>
		</div>
		<div class="content-arquive text-justify">
			<?php
				//strip_tags removes all HTML tags
				$strContent = strip_tags(get_the_content());
				$theExcerpt = substr($strContent, 0, 200);
			 ?>
			<?php echo $theExcerpt; ?> <a href="<?php the_permalink(); ?>"> [Saiba mais...]</a>
		</div>
	</div>
</article>
<hr>

<div class="item">
  <div class="probootstrap-testimony-wrap text-center">
    <figure>
      <?php the_post_thumbnail( 'custom-thumb-sq-200-crop' ); ?>
    </figure>
    <blockquote class="quote">
      <?php the_content(); ?>
      <cite class="author"> &mdash; <span><?php
        $title = strip_tags(get_the_title());
        $excerpt = strip_tags(get_the_excerpt());
        echo ($title . ', ' . $excerpt); ?></span></cite>
    </blockquote>
  </div>
</div>

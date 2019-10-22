<div class="item">
`<a href="<?php the_permalink(); ?>" class="probootstrap-featured-news-box">
  <figure class="probootstrap-media">
    <?php the_post_thumbnail( 'custom-thumb-sq-400-crop', array( 'class' => 'img-responsive' ) ); ?>
  </figure>
  <div class="probootstrap-text blog_posts no_hyperlink">
    <h3><?php the_title(); ?></h3>
    <span class="probootstrap-postsicons"><i class="icon-calendar"></i><?php the_time( get_option( 'date_format' ) );?></span>

    <!-- Categories -->
    <?php
    $the_categories = array();
    $the_post_categories = get_the_category();
    if ($the_post_categories) {
        foreach($the_post_categories as $the_category) {
            $the_categories[$the_category->slug] = strip_tags($the_category->name);
        }
    }
    // print_r( $the_categories );
    $categories = implode(', ',$the_categories);
    ?>
      <span class="probootstrap-postsicons"><i class="icon-documents2"></i><?php echo $categories; ?></span>

      <!-- <span class="probootstrap-postsicons"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span> -->

    <!-- Summary -->
    <p><?php the_excerpt(); ?></p>

    <!-- Tags -->
    <?php if(has_tag()):
      $the_tags = array();
      $the_post_tags = get_the_tags();
      if ($the_post_tags) {
          foreach($the_post_tags as $the_tag) {
              $the_tags[$the_tag->slug] = strip_tags($the_tag->name);
          }
      }
      // print_r( $the_tags );
      $tags = implode(', ',$the_tags);
      ?>
        <span class="probootstrap-postsicons"><i class="icon-pricetags"></i><?php echo $tags; ?></span>
    <?php endif; ?>

  </div>
</a>`
</div>

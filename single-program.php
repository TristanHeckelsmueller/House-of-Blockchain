<?php get_header(); ?>
<div class="main-content">

  <?php
    while (have_posts()) {
      the_post(); ?>
      <h1><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h1>
      <?php the_content(); ?>
  <?php } ?>

    <div class="">
      <h2>Kurse mit diesem Inhalt:</h2>
      <?php
      $relatedProduct = get_field('related_products');
        foreach($relatedProduct as $productrel) {
          ?> <h3> <a href=" <?php echo get_the_permalink($productrel); ?> "> <?php echo get_the_title($productrel); ?></a> </h3>
            <?php
          $homepageProduct = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'product'
          ));
          ?>
          <?php
        }  wp_reset_postdata();
      ?>
    </div>
    <div class="">
      <h2>Tutoren die das unterrichten:</h2>
      <?php
      $relatedTutor = get_field('related_tutor');
        foreach($relatedTutor as $tutorrel) {
          ?> <li> <a href=" <?php echo get_the_permalink($tutorrel); ?> "> <?php echo get_the_title($tutorrel); ?></a> </li> <?php
        }  wp_reset_postdata();
      ?>
    </div>
    <div class="">
      <h2>News über dieses Thema:</h2>
      <?php
      $relatedNews = get_field('related_posts');
        foreach($relatedNews as $newsrel) {
          ?> <li> <a href=" <?php echo get_the_permalink($newsrel); ?> "> <?php echo get_the_title($newsrel); ?></a> </li> <?php
        }  wp_reset_postdata();
      ?>
    </div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>

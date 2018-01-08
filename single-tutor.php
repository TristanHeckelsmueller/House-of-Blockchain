<?php get_header(); ?>
<div class="main-content">

<?php
  while (have_posts()) {
    the_post(); ?>
    <h1><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h1>
    <div class="col-third-left">
      <div class="product__tutor__img">

      <?php
      $image = get_field('profile_img');
      if( !empty($image) ): ?>
      	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>

    </div>
    </div>
    <div class="col-2third-left">
    <?php the_content(); ?>
  <p>
    <?php the_title(); ?> ist am <?php $birthDate = new DateTime(get_field('birth_date'));
    echo $birthDate->format('d');
    ?>.<?php
    echo $birthDate->format('m');
    ?>.<?php
    echo $birthDate->format('y');
    ?>
    geboren.
  </p>
  </div>
    <div class="clearfix">

    </div>
<?php } ?>


<div class="">
  <h2>Kurse von diesem Dozenten:</h2>
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
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>

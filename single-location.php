<?php get_header(); ?>
<div class="main-content">
<?php
  while (have_posts()) {
    the_post(); ?>
    <h1><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h1>
    <?php the_content(); ?>



<?php } ?>

<?php
  while (have_posts()) {
    the_post();
    $mapLocation = get_field('map_location');
    ?>
    <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']  ?>">
      <h3><?php the_title(); ?></h3>
      <p><?php echo $mapLocation[address]; ?></p>
      <h4>Ansprechpartner: </h4>
      <p> <a href="#"><?php the_field('contact_person') ?></a> </p>
    </div>

    <div class="clearfix">
    </div>
<?php } ?>
<div class="">
  <h2>Kurse die hier unterrichtet werden:</h2>
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
  <h2>Tutoren die hier unterrichten:</h2>
  <?php
  $relatedTutor = get_field('related_tutor');
    foreach($relatedTutor as $tutorrel) {
      ?> <li> <a href=" <?php echo get_the_permalink($tutorrel); ?> "> <?php echo get_the_title($tutorrel); ?></a> </li> <?php
    }  wp_reset_postdata();
  ?>
</div>








</div>
<?php get_footer(); ?>

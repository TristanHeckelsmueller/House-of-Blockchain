<?php get_header(); ?>
<div class="main-content">
  <h1>Locations:<h1>

<div class="acf-map col-half-left">

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
</div>
<?php
$homepageLoc = new WP_Query(array(
  'posts_per_page' => 6,
  'post_type' => 'location',
));
while ($homepageLoc->have_posts()) {
  $homepageLoc->the_post();
  ?>
  <div class="maps__location-text">
    <a href="<?php the_permalink(); ?>"><h3> <?php the_title(); ?></h3></a>
    <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
    <h4>Ansprechpartner:</h4>
    <p> <a href="#"><?php the_field('contact_person') ?></a> </p>
  </div>
<?php } ?>



  <div class="clearfix">
  </div>
</div>
<?php get_footer(); ?>

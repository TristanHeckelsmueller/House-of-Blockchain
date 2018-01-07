<?php get_header(); ?>
<div class="main-content">
<?php
  while (have_posts()) {
    the_post(); ?>
    <h1><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h1>
    <?php the_content(); ?>
<?php } ?>


<div class="">

<?php
$relatedProgram = get_field('related_program');
  foreach ($relatedProgram as $program) {
    ?> <li> <a href=" <?php echo get_the_permalink($program); ?> "> <?php echo get_the_content($program); ?></a> </li> <?php
  }
?>

</div>
<div class="">

<?php
$relatedTutor = get_field('related_tutor');
  foreach ($relatedTutor as $tutor) {
    ?> <li> <a href=" <?php echo get_the_permalink($tutor); ?> "> <?php echo get_the_content($tutor); ?></a> </li> <?php
  }
?>

</div>
<div class="">

<?php
$relatedLocation = get_field('related_location');
  foreach ($relatedLocation as $location) {
    ?> <div class="acf-map col-half-left">

    <?php
      while (have_posts()) {
        the_post();
        $mapLocation = get_field('related_location');
        ?>
        <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']  ?>">
          <h3><?php the_title(); ?></h3>
          <p><?php echo $mapLocation[address]; ?></p>
          <h4>Ansprechpartner:</h4>
          <p> <a href="#">Johannes Rauch</a> </p>
        </div>

    <?php } ?>
  </div>
<?php
  }
?>
    <div class="clearfix">
    </div>
  </div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>

<?php get_header(); ?>
<div class="main-content">

<?php
  while (have_posts()) {
    the_post(); ?>
    <h1><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h1>
    <?php the_content(); ?>
    <?php

    $image = get_field('profile_img');

    if( !empty($image) ): ?>
    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endif; ?>
<?php } ?>
<a href="<?php the_permalink(); ?>">

<?php $birthDate = new DateTime(get_field('birth_date'));

      echo $birthDate->format('d');
      ?>.<?php
      echo $birthDate->format('m');
      ?>.<?php
      echo $birthDate->format('y');

?>
</a>

<?php
  $TutorRelations = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'program'
  ));
  while ($TutorRelations->have_posts()) { ?>
<div class="">
      <?php
    $TutorRelations->the_post(); ?>
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>
    <?php
  } wp_reset_postdata();
 ?>

</div>
<div class="clearfix"></div>
<?php get_footer(); ?>

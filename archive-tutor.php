<?php get_header(); ?>
<div class="main-content">
  <h1>Unsere Dozenten:</h1>
  <?php
    while (have_posts()) {
      the_post(); ?>
      <h2><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h2>
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
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>

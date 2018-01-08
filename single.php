<?php get_header(); ?>
<div class="main-content">


<?php
  while (have_posts()) {
    the_post(); ?>
    <h1 class="news__single_h1"><?php the_title();?></h1>
    <div class="col-2third-left news__single__content">
      <p><?php the_content(); ?></p>
    </div>
    <div class="col-third-right author__col">
      <div class="clearfix"></div>
      <h3 class="author_post news__single__author"> Der Autor: <a href="#"><?php the_author(); ?></a></h3>
      <span class="site-header__avatar"><?php echo get_avatar(wp_get_current_user_id, 100); ?></span>
      <p><?php the_author_meta(); ?></p>
    </div>
    <div class="col-third-right news__single__img">
    <?php if ( has_post_thumbnail()) : ?>
       <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
       <?php the_post_thumbnail(); ?>
       </a>
     <?php endif; ?>
   </div>
   <div class="clearfix"></div>
<?php } ?>

<div class="product__program">
  <div class="">
    <h2>Verwandte Programme:</h2>

  <?php
  $relatedProgram = get_field('related_program(s)');
    foreach ($relatedProgram as $programrel) {
      ?> <h3> <a href=" <?php echo get_the_permalink($programrel); ?> "> <?php echo get_the_title($programrel); ?></a> </h3>
        <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
      <?php
    }
  ?>
  </div>
</div>
</div>
<?php get_footer(); ?>

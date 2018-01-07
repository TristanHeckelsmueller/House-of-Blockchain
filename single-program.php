<?php get_header(); ?>
<div class="main-content">





  <a href="<?php the_author_link(); ?>">hihi<?php the_author(); ?></a>

  <a href="<?php echo get_post_type_archive_link( $course ); ?>">Hello World</a>


<?php
  while (have_posts()) {
    the_post(); ?>
    <h1><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h1>
    <?php the_content(); ?>
<?php } ?>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>

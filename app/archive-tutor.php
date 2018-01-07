<?php get_header(); ?>
<div class="main-content">

<?php
  while (have_posts()) {
    the_post(); ?>
    <h1><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h1>
	     <img src="<?php the_field('image'); ?>" />
    <?php the_content(); ?>
<?php } ?>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>


<?php get_header(); ?>
<div class="main-content">
<?php
  while (have_posts()) {
    the_post(); ?>
    <li><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></li>
<?php } ?>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>

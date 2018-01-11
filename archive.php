<?php get_header(); ?>
<div class="main-content">
  <h1>Articles and Videos</h1>
  <div class="col-half-left news__archive__list">
    <h2>News:</h2>

    <?php
      while (have_posts()) {
        the_post(); ?>
        <h3><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h3>
        <p class="meta-info">Posted in: <?php
          $categories = get_the_category();
          $seperator = "";
          $output = '';
          if ($categories) {
            foreach ($categories as $category) {
              $output .= $category->cat_name . $seperator;

            }
            echo $output;
          }
          ?>
          | Posted by:
          <?php the_author(); ?>
        </p>
        <p><?php echo wp_trim_words(get_the_content(), 40);  ?></p>
    <?php } ?>
    <div class="clearfix"></div>
  </div>

  <div class="col-half-right">
    <h2>Videos:</h2>
      <?php
        $homepageVideos = new WP_Query(array(
          'posts_per_page' => 2,
          'post_type' => 'video'
        ));
        while ($homepageVideos->have_posts()) { ?>
    <div class="news__embedv">
            <?php
          $homepageVideos->the_post(); ?>
        <h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p>
    </div>
          <?php
        } wp_reset_postdata();
       ?>
  </div>
  <div class="clearfix"></div>
</div>
<?php get_footer(); ?>

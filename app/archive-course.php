<?php get_header(); ?>
<div class="main-content">
  <div class="col-2third-left event-col__content">
  <h1>Upcoming Courses:<h1>
<?php
  $homepageProducts = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'product'
  ));
  while ($homepageProducts->have_posts()) { ?>

      <?php
    $homepageProducts->the_post(); ?>

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words(get_the_content(), 40); ?></p>

    <?php
  } wp_reset_postdata();
 ?>
</div>


<div class="col-third-right event-col__calender">
  <div class="events-content__logo">
    <img src="/wp-content/uploads/2017/12/HoB-Logo__main-content.svg" alt="House of Blockchain Logo">
  </div>
    <div class="clearfix"></div>
  <div class="event-calendar">
    <div class="calendar-header">
      <span class="calendar__month"></span>
      <span class="calendar__year">2017</span>
      <div class="clearfix">
      </div>
    </div>
    <table class="calendar-content">
      <div class="days">

        </div>
      </table>
    </div>
  </div>
  <div class="clearfix"></div>
</div>

<div class="clearfix"></div>

<?php get_footer(); ?>

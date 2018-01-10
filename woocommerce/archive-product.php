<?php get_header(); ?>
<div class="main-content">
  <div class="col-2third-left event-col__content">
    <h1>Upcoming Courses:</h1>
      <h2>Starter Guides:</h2>

  <?php
    $homepageProducts = new WP_Query(array(
      'posts_per_page' => 20,
      'post_type' => 'product'
    ));
      while ($homepageProducts->have_posts()) {
        if (in_category('starter')) {
        $homepageProducts->the_post(); ?>
        <div class="">
        <div class="col-third-left news__single__img product__archive__img">
        <?php if ( has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
        <?php the_post_thumbnail(); ?>
        </a>
        <div class="clearfix"></div>
        <?php endif; ?>
        </div>
        <div class="col-2third-right product__tutor__content">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words(get_the_content(), 60); ?></p>

        </div>
        </div>
        <div class="clearfix">

        </div>

      <?php
    }
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

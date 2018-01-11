<?php get_header(); ?>
  <div class="main-content">
    <div class="col-2third-left event-col__content">
      <h1>Upcoming Courses:</h1>
        <h2>Starter Guides:</h2>

    <?php
      $homepageProducts = new WP_Query(array(
        'posts_per_page' => 5,
        'post_type' => 'product'
      ));
        while ($homepageProducts->have_posts()) {

          $homepageProducts->the_post(); ?>
          <div class="product-archive__column" style="border: 1px solid #d2d2d2;">
            <div class="col-third-left product__archive__img">
              <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
              <?php the_post_thumbnail(); ?>
              </a>
              <div class="clearfix"></div>
              <?php endif; ?>
            </div>
            <div class="col-2third-right product__tutor__content">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p>Date: <strong><?php
                  $eventDate = new DateTime(get_field('event_date'));
                  echo $eventDate->format('d');
                  ?>.<?php
                  echo $eventDate->format('m');
                  ?>.<?php
                  echo $eventDate->format('Y');
                ?> </strong></p>
                <?php
                global $woocommerce;
                $currency = get_woocommerce_currency_symbol();
                $price = get_post_meta( get_the_ID(), '_regular_price', true);
                $sale = get_post_meta( get_the_ID(), '_sale_price', true);
                ?>
                <p>Preis:
                  <strong>
                    <?php echo $price; echo $currency;?>
                  </strong>
                </p>
              <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
              <a class="btn-main" style="margin: .2em; float: right; width: fit-content; font-weight: 900;" href="<?php the_permalink();?>">PRODUCT DETAILS</a>
            </div>
          <div class="clearfix">
          </div>
        </div>
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
  <div class="clearfix"></div>
</div>
<?php get_footer(); ?>

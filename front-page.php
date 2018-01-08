<?php get_header(); ?>

<div class="large-header__container">
  <div class="timer"></div>
    <div class="large-header-wrapper">
      <div style="text-align: center;" class="large-header large-header__slide slide-01 slider-animation">
        <div class="large-header__text-content">
          <h2>Transformation for a <span class="large-header__italic">prosperous</span> world</h2>
          <div class="large-header__sub-title">Don't fear the Blockchain</div>
        </div>
      </div>
      <div style="" class="large-header large-header__slide slide-02 slider-animation">
        <div class="large-header__text-content">
          <h2>"The <span class="large-header__italic">Blockchain</span> Technoloy is a perspective"</h2>
          <div class="large-header__sub-title">Steve Bannon</div>
        </div>
      </div>
      <div style="" class="large-header large-header__slide slide-03 slider-animation">
        <div class="large-header__text-content">
          <h2>Learning is the <span class="large-header__italic">beginnng</span> to win</h2>
          <div class="large-header__sub-title">Steve Jobs</div>
        </div>
      </div>
      <div style="" class="large-header large-header__slide slide-04 slider-animation">
        <div class="large-header__text-content">
          <h2>Offering all <span class="large-header__italic">products</span> you need to understand</h2>
          <div class="large-header__sub-title">taught by experts</div>
        </div>
      </div>
  </div>
</div>

<div class="clearfix">
</div>

<div class="main-content">
  <div class="col-main">
    <div class="main-content__column">
      <div class="main-content__column__inner main-content__column__inner-left">
        <h3>We teach you everything</h3>
        <p>About Bitcoin & Co.</p>
      </div>
      <div class="main-content__column__inner main-content__column__inner-right">
        <div class="main-content__column-img main-content__column-img-top">
          <img src="/wp-content/uploads/2017/12/HoB_Icon_Idea.svg" alt="Logo House of Blockchain SVG">
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="main-content__column">
      <div class="main-content__column__inner main-content__column__inner-left">
        <div class="main-content__column-img main-content__column-img-middle">
        <img src="/wp-content/uploads/2017/12/Human_Icon_teach.svg" alt="Human Symbol circle">
      </div>
      </div>
      <div class="main-content__column__inner main-content__column__inner-right main-content__column__inner-middle-right">
          <h3>Highly specified experts</h3>
          <p>show you a new world</p>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="main-content__column">
      <div class="main-content__column__inner main-content__column__inner-bottom-right">
        <h3>Working all around the globe</h3>
        <p>to deliver the best experience</p>
      </div>
      <div class="main-content__column__inner main-content__column__inner-right">
        <div class="main-content__column-img main-content__column-img-bottom">
          <img src="/wp-content/uploads/2017/12/Globe_Icon_connect.svg" alt="Logo House of Blockchain SVG">
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>
  </div>
</div>


<div class="event-box">
  <div class="event-box__inner event-box__left ">
    <h2 class="event-box__title">Upcoming Courses:</h2>
    <?php
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'product'
      ));
      while ($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
        <div class="info-box">
          <div class="event-box__inner-left">
            <a href="<?php the_permalink(); ?>">
              <div class="event-box__icon event-box__icon__events">
                <p class="event-box__month"><?php
                  $eventDate = new DateTime(get_field('event_date'));
                  echo $eventDate->format('M');
                ?>
              </p>
                <p class="event-box__day"><?php echo $eventDate->format('d') ?></p>
            </a>
          </div>
        </div>

        <div class="event-box__inner-right ">
          <div class="event-box__event-det">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>

        <?php
      }
     ?>
    <div class="clearfix"></div>
  </div>
  <div class="event-box__inner event-box__right ">
    <h2 class="event-box__title">Recent News:</h2>
      <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 2,

        ));
        while ($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); ?>
          <div class="info-box">
            <div class="event-box__inner-left">
              <a href="<?php the_permalink(); ?>">
                <div class="event-box__icon event-box__icon__news">
                  <p class="event-box__month"><?php the_time('M') ?>
                </p>
                  <p class="event-box__day"><?php the_time('d') ?></p>
              </a>
            </div>
          </div>

          <div class="event-box__inner-right ">
            <div class="event-box__event-det">
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>

          <?php
        } wp_reset_postdata();
       ?>
    <div class="clearfix">
    </div>
  </div>
</div>
  <div class="clearfix">
  </div>


  <div class="frontpage__tutor-box">
    <div class="">
      <h2 class="frontpage__tutor-box__title">Das sagen unsere Dozenten:</h2>
    </div>
      <?php
        $homepageTutor = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'tutor'
        ));
        while ($homepageTutor->have_posts()) { ?>
    <div class="frontpage__tutor-box__tutor">
      <div class="frontpage__tutor-box__img">
            <?php
          $homepageTutor->the_post(); ?>
        <?php
        $image = get_field('profile_img');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </div>
      <div class="frontpage__tutor-box__content">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_content(); ?></p>
    </div>
  </div>
          <?php
        } wp_reset_postdata();
       ?>
  </div>
  <div class="clearfix"></div>

  <div class="event-box">
    <div class="wellness-box box">
      <div class="wellness-box__text box__text">
        <h2>Interested in our Wellness section?</h2>
      </div>
        <div class="btn-main front-page__button">
          <a href="#" class="btn-link">
          <div class="btn-icon">
            <i class="fa fa-play" aria-hidden="true"></i>
          </div>
          <div class="btn-text">
            <span>LEARN MORE</span>
          </div>
        </a>
      </div>
      <div class="clearfix">
      </div>
    </div>
  </div>

  <div class="event-box">
    <div class="newsletter-box box">
      <div class="wellness-box__text box__text">
        <h2>Keep track by subscribing our Newsletter</h2>
      </div>
      <div class="newsletter__sub">
        <form class="newsletter__form" action="/newsletter" method="post">
          <input class="newsletter__text" type="email" name="e-mail" value="example@email.de">
          <button type="submit" name="newsletter">SUBMIT</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

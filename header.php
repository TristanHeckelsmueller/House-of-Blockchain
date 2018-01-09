<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php wp_head(); ?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title><?php the_title() ?></title>
    <style media="screen">

    </style>
  </head>
  <div class="secondary-nav__display">
    <ul>
      <li><a href="/articles/news" id="features-link">NEWS</a></li>
      <li><a href="/courses" id="testimonials-link">COURSES</a></li>
      <li><a href="/tutors" id="testimonials-link">TUTORS</a></li>
      <li><a href="/locations" id="testimonials-link">LOCATIONS</a></li>
      <?php
      if(is_user_logged_in()) { ?>
        <li><a href="/my-account" id="testimonials-link" class="btn btn__log"><span class="btn__text">MY ACCOUNT</span><span class="site-header__avatar"><?php echo get_avatar(wp_get_current_user_id, 16); ?></span></a></li>
        <?php
      }else{
        ?>

        <?php
      }
      ?>
      <?php
      if(is_user_logged_in()) { ?>
        <li><a href=" <?php echo wp_logout_url(); ?>" id="testimonials-link" class="btn btn__log"><span class="btn__text">LOGOUT</span><span class="site-header__avatar"><?php echo get_avatar(wp_get_current_user_id, 16); ?></span></a></li>
        <?php
      }else{
        ?>
        <li><a href=" <?php echo esc_url(site_url('/wp-login.php')); ?>" id="testimonials-link">LOGIN</a></li>
        <?php
      }
      ?>
      <li><a href="/login" id="testimonials-link">LOGIN</a></li>

    </ul>
  </div>
    <header class="site-header">
      <div class="wrapper">
        <div class="site-header__logo">
          <div class="site-header__logo__graphic icon icon--clear-view-escapes">
            <a href="/">
            <img class="site-header__logo__graphic__svg" src="/wp-content/uploads/2017/12/Hob-Logo__header.svg" alt="House of Blockchain Logo">
            </a>
          </div>
        </div>

        <div class="site-header__menu-icon">
          <div class="site-header__menu-icon__middle"></div>
        </div>

        <div class="site-header__menu-content">
          <nav class="primary-nav primary-nav--pull-right">
            <ul>
              <li><a <?php if (get_post_type() == 'post') echo 'class="current-menu-item"';?> href="/articles/news" id="news-link">NEWS</a></li>
              <li><a <?php if (get_post_type() == 'course') echo 'class="current-menu-item"';?> href="<?php echo get_post_type_archive_link('course') ?>" id="course-link">COURSES</a></li>
              <li><a <?php if (get_post_type() == 'tutor') echo 'class="current-menu-item"';?> href="<?php echo get_post_type_archive_link('tutor') ?>" id="tutors-link">TUTORS</a></li>
              <li><a <?php if (get_post_type() == 'location') echo 'class="current-menu-item"';?> href="/locations" id="locations-link">LOCATIONS</a></li>
              <?php
              if(is_user_logged_in()) { ?>
                <li><a href="/my-account" id="testimonials-link" class="btn btn__log"><span class="btn__text">MY ACCOUNT</span><span class="site-header__avatar"><?php echo get_avatar(wp_get_current_user_id, 16); ?></span></a></li>
                <?php
              }else{
                ?>

                <?php
              }
              ?>
              <?php
                if(is_user_logged_in()) { ?>
                  <li><a href=" <?php echo wp_logout_url(); ?>" id="testimonials-link" class="btn btn__log"><span class="btn__text">LOGOUT</span><span class="site-header__avatar"><?php echo get_avatar(wp_get_current_user_id, 16); ?></span></a></li>
                  <?php
                }else{
                  ?>
                  <li><a href=" <?php echo esc_url(site_url('/wp-login.php')); ?>" id="testimonials-link">LOGIN</a></li>
                  <?php
                }
               ?>
            </ul>
          </nav>
          <nav class="secondary-nav">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </nav>
          <nav class="secondary-nav_x">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </nav>
        </div>
      </div>
    </header>
    <body>

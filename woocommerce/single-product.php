<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' ); ?>
<div class="main-content">
  <div class="">

		<?php while ( have_posts() ) : the_post(); ?>


			<?php wc_get_template_part( 'content', 'single-product' ); ?>
			<div class="clearfix"></div>

<div class="product__relations">
      <div class="product__location product__relations-col">
				<h3>Findet statt in:</h3>
				<?php
					$homepageLocation = new WP_Query(array(
						'posts_per_page' => 2,
						'post_type' => 'location'
					));
					while ($homepageLocation->have_posts()) { ?>
			<div class="">
							<?php
						$homepageLocation->the_post(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p>Ansprechpartner: <?php the_field('contact_person'); ?></p>
			</div>
						<?php
					} wp_reset_postdata();
				 ?>
      </div>
			<div class="product__tutor product__relations-col">
				<h3>Dozent:</h3>
				<?php
					$homepageTutor = new WP_Query(array(
						'posts_per_page' => 2,
						'post_type' => 'tutor'
					));
					while ($homepageTutor->have_posts()) { ?>
					<div class="product__tutor__col">
						<div class="product__tutor__img">
										<?php
									$homepageTutor->the_post(); ?>
								<?php
						    $image = get_field('profile_img');
						    if( !empty($image) ): ?>
						    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						    <?php endif; ?>
							</div>
							<div class="product__tutor__content">
								<strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
								<p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
						</div>
					</div>
			<div class="clearfix"></div>
						<?php
					} wp_reset_postdata();
				 ?>
			</div>
			<div class="product__program product__relations-col">
				<h3>Kategorien:</h3>
				<?php
					$homepagePrograms = new WP_Query(array(
						'posts_per_page' => 2,
						'post_type' => 'program'
					));
					while ($homepagePrograms->have_posts()) { ?>
			<div class="">
							<?php
						$homepagePrograms->the_post(); ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</div>
						<?php
					} wp_reset_postdata();
				 ?>
			</div>
			<div class="clearfix"></div>
	</div>
		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
  </div>
    <div class="clearfix"></div>
</div>

<?php get_footer( 'shop' );
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

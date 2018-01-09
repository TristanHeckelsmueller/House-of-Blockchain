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
				$relatedLocation = get_field('related_location');
					foreach ($relatedLocation as $locationel) {
						?> <h3> <a href=" <?php echo get_the_permalink($locationel); ?> "> <?php echo get_the_title($locationel); ?></a> </h3>
							<p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
						<?php
					}
				?>
      </div>
			<div class="product__tutor product__relations-col">
				<h3>Dozent:</h3>
					<div class="product__tutor__col">
						<div class="product__tutor__img">
							<?php

							$RelTutor = get_field('related_tutor');
							$tutorimg = get_field('profile_img');
							foreach ($RelTutor as $relationTutorproduct) {
								foreach ($tutorimg as $tutorimgrel) {
									# code...
								 if (has_post_thumbnail($tutorimgrel)) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
										<?php the_post_thumbnail(); ?>

									</a>
									<div class="clearfix"></div>
								<?php endif;
								}
								?>
<!-- FUNKTIONIERT NOCH NICHT -->
							</div>
							<div class="product__tutor__content">
										<h3> <a href=" <?php echo get_the_permalink($relationTutorproduct); ?> "> <?php echo get_the_title($relationTutorproduct); ?></a> </h3>
										  <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
							      <?php
							    }

							  ?>
						</div>
						<div class="clearfix"></div>
					</div>
			<div class="clearfix"></div>

			</div>
			<div class="product__program product__relations-col">
				<h3>Kategorien:</h3>
				<?php
			  $relatedProgram = get_field('related_program(s)');
			    foreach ($relatedProgram as $programrel) {
			      ?> <h3> <a href=" <?php echo get_the_permalink($programrel); ?> "> <?php echo get_the_title($programrel); ?></a> </h3>
			        <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
			      <?php
			    }
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

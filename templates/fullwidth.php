<?php
/**
 * Template Name: FullWidth
 *
 * This is full width template
 *
 * @package BoomRang
 */

get_header(); ?>


<?php 
	 // Gets the uploaded featured image
  	$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  	// Checks and returns the featured image
  	$bg = (!empty( $featured_img ) ? "background-image: url('". $featured_img[0] ."');" : '');
?>

    <section class="spotlight parallax bg-cover bg-size--cover"  style="<?php echo $bg; ?>">
        <span class="mask bg-tertiary alpha-7"></span>
        <div class="spotlight-holder py-lg pt-lg-xl">
          <div class="container d-flex align-items-center no-padding">
            <div class="col">
              <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                <div class="col-lg-7">
                  <div class="text-center mt-5">
                    <h1 class="heading h1 text-white">
                      Hi, nice to meet you!
                    </h1>
                    <p class="lead lh-180 text-white mt-3">
                      We put all the experience and know-how in Boomerang so we can offer you the best product we have ever built.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


	<div class="container">
		<div class="row">
			<div id="primary" class="content-area-full-width">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--  .row -->
	</div><!--  .container -->

<?php
get_footer();

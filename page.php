<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BoomRang
 */

get_header('transparent'); ?>


<?php 
	 // Gets the uploaded featured image
  	$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  	// Checks and returns the featured image
  	$bg = (!empty( $featured_img ) ? "background-image: url('". $featured_img[0] ."');" : '');
?>

  <?php
    // Grab the metadata from the database
    $herotitle = get_post_meta( get_the_ID(), '_boomrang_hero_title', true );
    $herosubtitle = get_post_meta( get_the_ID(), '_boomrang_hero_subtitle', true );
  ?>


    <section class="spotlight parallax bg-cover bg-size--cover"  style="<?php echo $bg; ?>">
        <span class="mask bg-tertiary alpha-7"></span>
        <div class="spotlight-holder py-lg pt-lg-xl">
          <div class="container d-flex align-items-center no-padding">
            <div class="col">
              <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                <div class="col-lg-7">
                  <div class="text-center mt-5">
                 
              <?php if (($herotitle) != '') {
                    echo '<h1 class="entry-title heading h1 text-white">';
                    echo wp_kses_post( $herotitle );
                    echo '</h1>';
                } else { ?>
              <?php the_title( '<h1 class="entry-title heading h1 text-white">', '</h1>' ); ?>
              <?php } ?>                    
                   <p class="lead lh-180 text-white mt-3">
                      <?php echo wp_kses_post( $herosubtitle ); ?>
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
			<div id="primary" class="content-area">
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

<?php
get_sidebar();
get_footer();



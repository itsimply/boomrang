<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BoomRang
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4'); ?>>

              <?php if ( has_post_thumbnail() ) : ?>
						<div class="card border-0">
					    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					      <?php the_post_thumbnail('medium', array('class' => 'img-fluid img-center rounded box-shadow-5')); ?>
					    </a>
					</div><!--  .card -->
				<?php endif; ?>
				

              <div class="pt-4">

                <span class="text-muted"><?php echo get_the_date(); ?></span>
                 <a href="<?php the_permalink(); ?>" class="heading h4 d-block mt-1"><?php the_title_attribute(); ?></a>
                <p class="mt-3">
                 <?php the_excerpt(); ?>
                </p>
              </div>
          
</article><!-- #post-## -->



				







 
           
     
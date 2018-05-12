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
 <div class="card border-0">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-1-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
              <div class="pt-4">

                <span class="text-muted"><?php echo get_the_date(); ?></span>
                 <a href="<?php the_permalink(); ?>" class="heading h4 d-block mt-1"><?php the_title_attribute(); ?></a>
                <p class="mt-3">
                 <?php the_excerpt(); ?>
                </p>
              </div>
            </div>
</article><!-- #post-## -->







 
           
     
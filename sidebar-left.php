<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BoomRang
 */

if ( ! is_active_sidebar( 'sidebar-left' ) ) { ?>
		</div><!--  .row -->
	</div><!--  .container -->
<?php } ?>

		<aside id="secondary" class="widget-area-left" role="complementary">
			<?php dynamic_sidebar( 'sidebar-left' ); ?>
		</aside><!-- #secondary -->

	</div><!--  .row -->
</div><!--  .container -->




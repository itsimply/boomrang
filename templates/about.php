<?php
/**
 * Template Name: About
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
                    <div class="mt-5">
                      <a href="#" class="btn btn-primary mr-3">Our services</a>
                      <a href="#" class="btn btn-secondary">Meet the team</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="slice-lg">
        <div class="container">
          <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-6 order-lg-2 ml-lg-auto">
              <div class="block block-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/device-1.png" class="img-fluid img-center">
              </div>
            </div>
            <div class="col-lg-5 order-lg-1">
              <div class="row-wrapper">
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start">
                      <div class="icon icon-lg">
                        <i class="fab fa-twitter"></i>
                      </div>
                      <div class="icon-text">
                        <h3 class="heading h4">Latest Bootstrap framework</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start">
                      <div class="icon icon-lg">
                        <i class="fab fa-sass"></i>
                      </div>
                      <div class="icon-text">
                        <h3 class="heading h4">Built with Sass <small>(included)</small></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start">
                      <div class="icon icon-lg">
                        <i class="fas fa-tint"></i>
                      </div>
                      <div class="icon-text">
                        <h3 class="heading h4">Extended color palette</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

					
   
      <section>
        <div class="container-fluid px-0">
          <div class="card-group flex-column flex-md-row">
            <div class="card bg-primary text-white px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
              <div class="card-body">
                <h1 class="heading h2 text-white">Theme as framework</h1>
                <p class="mt-4">
                  Boomerang was designed as its own extended version of Bootstrap, built for offering a complete solution for various industries — business, real estate, travel and much more.
                </p>
                <a href="#" class="btn btn-secondary mt-4">Learn more</a>
              </div>
            </div>
            <div class="card bg-secondary px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
              <div class="card-body">
                <h1 class="heading h2">Even more components</h1>
                <p class="mt-4">
                  We know how much you love Bootstrap components. That's why we've customized, and also, introduced dozens of completely new utilities, components and plugins.
                </p>
                <a href="#" class="btn btn-primary mt-4">Learn more</a>
              </div>
            </div>
            <div class="card bg-tertiary text-white px-4 px-lg-5 py-5 rounded-0 border-0 mb-0">
              <div class="card-body">
                <h1 class="heading h2 text-white">Tons of variables</h1>
                <p class="mt-4">
                  Theme components inherit much of their style from variables, exactly like Bootstrap. Change a few values and the theme adapts. Customization has never been easier.
                </p>
                <a href="#" class="btn btn-secondary mt-4">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="slice slice-lg">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class="heading h2">Explore more features by selecting a plan</h3>
          <div class="fluid-paragraph text-center">
            <p class="lead mb-0">Choose the best solution for your business.</p>
          </div>
        </div>
        <div class="text-center mb-5">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary active">Monthly billing</button>
            <button type="button" class="btn btn-secondary">Yearly billing</button>
          </div>
        </div>
        <div class="card-deck mb-3">
          <div class="card card-pricing text-center px-3 mb-4">
            <div class="card-header py-4">
              <h4 class="mb-4">Free</h4>
              <h1 class="display-4 text-primary text-center">$0</h1>
              <span class="h6 text-muted">per month</span>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-4">
                <li>Up to 5 users</li>
                <li>Basic support on Github</li>
                <li>Monthly updates</li>
                <li>Free cancelation</li>
              </ul>
              <button type="button" class="btn btn-primary mb-3">Start free trial</button>
            </div>
          </div>
          <div class="card card-pricing popular text-center px-3 mb-4 z-depth-3">
            <div class="card-header py-4">
              <h4 class="mb-4">Multiple Use</h4>
              <h1 class="display-4 text-primary text-center">$49</h1>
              <span class="h6 text-muted">per month</span>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-4">
                <li>Up to 15 users</li>
                <li>Premium email support</li>
                <li>Weekly updates</li>
                <li>Free cancelation</li>
              </ul>
              <button type="button" class="btn btn-primary mb-3">Start free trial</button>
            </div>
          </div>
          <div class="card card-pricing text-center px-3 mb-4">
            <div class="card-header py-4">
              <h4 class="mb-4">Extended Use</h4>
              <h1 class="display-4 text-primary text-center">$199</h1>
              <span class="h6 text-muted">per month</span>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-4">
                <li>Unlimited users</li>
                <li>One on one support</li>
                <li>Weekly updates</li>
                <li>Free cancelation</li>
              </ul>
              <button type="button" class="btn btn-primary mb-3">Start free trial</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice sct-color-1">
      <div class="container">
        <div class="row cols-xs-space cols-sm-space align-items-center">
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-1-1000x900.jpg" class="img-center img-fluid rounded z-depth-3">
          </div>
          <div class="col-md-6 col-lg-5 ml-lg-auto">
            <div class="pr-md-4">
              <h3 class="heading heading-3 strong-500">
                Start building now a beautiful website.
              </h3>
              <p class="lead text-gray mt-4">Take up one idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice bg-primary">
      <div class="container">
        <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space text-center text-lg-left">
          <div class="col-lg-7">
            <h1 class="heading h2 text-white strong-500">
              Need more information about Boomerang UI Kit?
            </h1>
            <p class="lead text-white mb-0">Take up one idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone.</p>
          </div>
          <div class="col-lg-3 ml-lg-auto">
            <div class="text-center text-md-right">
              <a href="#" class="btn bg-secondary">
                Contact us
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice slice-lg">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class="heading h2">Stay tuned with our company news</h3>
          <div class="fluid-paragraph text-center">
            <p class="lead mb-0">Daily insights from our company</p>
          </div>
        </div>
        <div class="row cols-md-space cols-sm-space cols-xs-space">
          <div class="col-lg-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-1-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
              <div class="pt-4">
                <span class="text-muted">Oct 15, 2018</span>
                <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                <p class="mt-3">
                  When we strive to become better than we are, everything around us becomes better, too.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-2-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
              <div class="pt-4">
                <span class="text-muted">Oct 15, 2018</span>
                <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                <p class="mt-3">
                  When we strive to become better than we are, everything around us becomes better, too.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-3-800x600.jpg" class="img-fluid img-center rounded z-depth-2">
              <div class="pt-4">
                <span class="text-muted">Oct 15, 2018</span>
                <a href="#" class="heading h4 d-block mt-1">Listen to the nature</a>
                <p class="mt-3">
                  When we strive to become better than we are, everything around us becomes better, too.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <a href="#" class="text-uppercase">
            All posts
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>

<?php
get_footer();

<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays a contact form.
 *
 * @package BoomRang
 */
 
if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = true;
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
 
    if(trim($_POST['email']) === '')  {
        $emailError = true;
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = true;
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
 
    if(trim($_POST['comments']) === '') {
        $commentError = true;
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
 
 
    if(!isset($hasError)) {
        $emailTo = get_option('admin_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = __('From ','stanleywp').$name;
        $body = __('Name: ','stanleywp').$name."\n".__('Email: ','stanleywp').$email."\n".__('Comments: ','stanleywp').$comments;
        $headers = __('From: ','stanleywp') .$name. ' <'.$emailTo.'>' . "\r\n" . __('Reply-To:','stanleywp') .$name. '<'.$email.'>';
 
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
 
}
 
get_header('transparentlight'); ?>
 
<?php
 ?>

   
        
 
  
        <main id="main" class="site-main" role="main">
 
            <?php while ( have_posts() ) : the_post(); ?>
 
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <section class="slice slice-xl">
                    <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-7">
                            <header class="entry-header pt-lg-md">
                                <?php the_title( '<h2 class="heading h1 mb-4">', '</h2>' ); ?>
                            </header><!-- .entry-header -->
         
                            <div class="entry-content lead lh-180">

                                <?php the_content(); ?>
                            </div><!-- .entry-content -->
                        </div><!--  .col-md-6 -->
                    </div><!--  .row -->
                     </div>
                        </section>


             <section class="slice bg-tertiary bg-cover bg-size--cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/backgrounds/img-1.jpg')">
                    <span class="mask bg-tertiary alpha-9"></span>
                    <div class="container">
                      <div class="row cols-xs-space cols-sm-space cols-md-space">
                        <div class="col-lg-6">
                          <div class="card bg-dark alpha-container text-white border-0 overflow-hidden">
                            <a href="#" target="_blank">
                              <div class="card-img-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/prv/city-1.jpg');"></div>
                              <span class="mask bg-dark alpha-5 alpha-4--hover"></span>
                              <div class="card-body px-5 py-5">
                                <div style="min-height: 300px;">
                                  <h3 class="heading h1 text-white mb-3">New York Office</h3>
                                  <p class="mt-4 mb-1 h5 text-white lh-180">
                                    E: newyork@company.com
                                  </p>
                                  <p class="mb-1 h5 text-white lh-180">
                                    T: 0755.222.333
                                  </p>
                                </div>
                                <span href="#" class="text-white text-uppercase font-weight-500">
                                  See on map
                                  <i class="fas fa-arrow-right ml-2"></i>
                                </span>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="card bg-dark alpha-container text-white border-0 overflow-hidden">
                            <a href="#" target="_blank">
                              <div class="card-img-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/prv/city-2.jpg');"></div>
                              <span class="mask bg-dark alpha-5 alpha-4--hover"></span>
                              <div class="card-body px-5 py-5">
                                <div style="min-height: 300px;">
                                  <h3 class="heading h1 text-white mb-3">New York Office</h3>
                                  <p class="mt-4 mb-1 h5 text-white lh-180">
                                    E: newyork@company.com
                                  </p>
                                  <p class="mb-1 h5 text-white lh-180">
                                    T: 0755.222.333
                                  </p>
                                </div>
                                <span href="#" class="text-white text-uppercase font-weight-500">
                                  See on map
                                  <i class="fas fa-arrow-right ml-2"></i>
                                </span>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                </section>

                <section class="slice slice-lg">
                    <div class="container">
                    <div class="row align-items-center cols-xs-space cols-sm-space cols-md-space">
                        <div class="col-lg-6">
                            <h3 class="heading h3 mb-4">Send us a message</h3>
 
                            <?php if(isset($emailSent) && $emailSent == true) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php _e('Thanks, your email was sent successfully.', 'stanleywp'); ?>
                                    </div>
                                <?php } else { ?>
     
                                    <?php if(isset($hasError) || isset($captchaError)) { ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          <strong><?php _e('Error!', 'stanleywp'); ?></strong> <?php _e('Please try again.', 'stanleywp'); ?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                    <?php } ?>
     
                                    <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                                        <div class="form-group">
                                                <label class="control-label" for="contactName"><?php _e('Name', 'stanleywp'); ?></label>
                                                <input class="form-control <?php if(isset($nameError)) { echo "is-invalid"; }?>" type="text" name="contactName" id="contactName" value="<?php echo isset($_POST["contactName"]) ? $_POST["contactName"] : ''; ?>" />
                                                <?php if(isset($nameError)) { ?>
                                                    <div class="invalid-feedback">
                                                        <?php _e('Please provide a valid name.', 'stanleywp'); ?>
                                                      </div>
                                                <?php } ?>
                                          
                                           </div>
                                           <div class="form-group">
                                                <label class="control-label" for="email"><?php _e('Email', 'stanleywp'); ?></label>
                                                <input class="form-control <?php if(isset($emailError)) { echo "is-invalid"; }?>" type="text" name="email" id="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" />
                                                <?php if(isset($emailError)) { ?>
                                                    <div class="invalid-feedback">
                                                        <?php _e('Please provide a valid email.', 'stanleywp'); ?>
                                                      </div>
                                                <?php } ?>
                                           
                                           </div>
                                            <div class="form-group">
                                                <label class="control-label" for="commentsText"><?php _e('Message', 'stanleywp'); ?></label>
                                           
                                                <textarea class="form-control <?php if(isset($commentError)) { echo "is-invalid"; }?>" name="comments" id="commentsText" rows="10" cols="20"><?php echo isset($_POST["comments"]) ? $_POST["comments"] : ''; ?></textarea>
                                                 <?php if(isset($commentError)) { ?>
                                                    <div class="invalid-feedback">
                                                        <?php _e('Please provide comments.', 'stanleywp'); ?>
                                                      </div>
                                                <?php } ?>
                                            
                                           </div>
                                           <div class="form-actions">
                                                <button type="submit" class="btn btn-primary"><?php _e('Send Email', 'stanleywp'); ?></button>
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                           </div>
                                    </form>
     
                            <?php } ?>


                           </div><!--  .col-lg-6 -->   


                             <div class="col-lg-5 ml-lg-auto">
              <h3 class="heading heading-3 strong-300">
                150 Southeast Pidgeon Meadow
                <br>
                Claflin Terrace, 305458
              </h3>
              <p class="lead mt-4 mb-4">
                E: <a href="#">support@webpixels.io</a>
                <br>
                T: 0755.222.333
              </p>
              <p class="">
                Probably the most complete UI kit out there. Multiple functionalities and controls added,  extended color palette and beautiful typography, designed as its own extended version of Bootstrap at  the highest level of quality.                             
              </p>
            </div> <!--  .col-lg-5 -->  



                       </div><!--  .row -->
                       </div><!-- /.container -->
                    </section>
                  
                </article><!-- #post-## -->
 
 
            <?php endwhile; // end of the loop. ?>
 
        </main><!-- #main -->

 

<?php get_footer(); ?>
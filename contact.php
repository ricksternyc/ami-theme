<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


   <!-- Page Content-->
      <main class="page-content">
        <section class="section-sm-40">
          <!--GAP-->
        </section>
        
        <section class="section-40 section-md-139">
              <div class="shell">
                        <h3 class="text-center"><span class="text-bold">Contact form</span><span class="divider"></span></h3>

                     <form data-form-output="form-output-global" data-form-type="contact" method="post" action="/contacts" class="rd-mailform offset-top-41 offset-lg-top-72">
              <h6>Please complete the form below to contact Natan Schleider Gallery, L.L.C.</h6>
                  
            <?php echo do_shortcode(' [contact-form-7 id="1232" title="Contact form 1"]'); ?>
            
            
            
        
              
              
              
<!--
         
              <div class="range">
                <div class="cell-sm-4">
                  <div class="form-group">
                    <label for="contact-name" class="form-label">Name:</label>
                    
                      <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                      
                      
                  </div>
                </div>

                <div class="cell-sm-4 offset-top-20 offset-sm-top-0">
                  <div class="form-group">
                    <label for="contact-email" class="form-label">E-mail:</label>
                    <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-4 offset-top-20 offset-sm-top-0">
                  <div class="form-group">
                    <label for="contact-phone" class="form-label">Phone:</label>
                    <input id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-12 offset-top-30">
                  <div class="form-group">
                    <label for="contact-message" class="form-label">Message:</label>
                    <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                  </div>
                </div>
                <div class="cell-sm-12 offset-top-30 offset-lg-top-60 text-center">
                  <button type="submit" class="btn btn-primary btn-md">Send</button>
                </div>
              </div>
            </form>
                  
-->
                  
          </div>
        </section>
        
       <?php get_template_part( 'part', 'directory' ); ?>
        
      </main>        
      
<?php get_footer(); ?>

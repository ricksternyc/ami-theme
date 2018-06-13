<?php
/**
 * Template Name: Buy Sell Trade
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
            <h4 class="text-center"><span class="text-bold"><?php the_field('heading'); ?></span><span class="divider"></span></h4>
            
            <?php the_field('content'); ?>
            <!-- CONTENT FIELD -->
            
          </div>
        </section>
       <?php get_template_part( 'part', 'directory' ); ?> 
      </main>

<?php get_footer(); ?>

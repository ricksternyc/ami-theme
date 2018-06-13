<?php
/**
 * Template Name: About
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
            <h3 class="text-center"><span class="text-bold"><?php the_field('header'); ?></span><span class="divider"></span></h3>
            
            <!-- CONTENT FIELD CMS -->
            <?php the_field('content'); ?>
            <!-- CONTENT FIELD CMS -->
            
            <h3 class="text-center"><span class="text-bold"><?php the_field('header_2'); ?></span><span class="divider"></span></h3>
            
            <!-- CONTENT FIELD CMS -->
            <?php the_field('content_2'); ?>
            <!-- CONTENT FIELD CMS -->
            
            
          </div>
        </section>
        <?php get_template_part( 'part', 'directory' ); ?> 
      </main>
       

<?php get_footer(); ?>

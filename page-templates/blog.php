<?php
/**
 * Template Name: Blog Posts
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<main class="page-content blog-header">

    <section class="bg-image-1 mask-1 vertical-limiter-1 flex-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-1.jpg;) ">
        <div class="shell">
            <div class="jumbotron text-center">
                <h1 style="margin-bottom:5px;">
                    NATAN SCHLEIDER GALLERY, L.L.C.
                </h1>
                <h4>BLOG</h4>
            </div>
        </div>
    </section>

    <div class="container">
        <div class='col-md-8'>
            <section class="blog-archive">

                <?php query_posts('post_type=post&post_status=publish&paged='. get_query_var('paged')); ?>

                <?php if( have_posts() ): ?>

                <?php while( have_posts() ): the_post(); ?>

                <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

                    <!--        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>-->

                    <h2 class="blog-titles"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



                    <p><?php the_content(); ?></p>

                </div><!-- /#post-<?php get_the_ID(); ?> --> 



                <?php endwhile; ?>

                <div class="navigation">
                    <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span>


                    <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                </div>

                <!-- /.navigation -->

                <?php else: ?>

                <div id="post-404" class="noposts">

                    <p><?php _e('None found.','example'); ?></p>

                </div><!-- /#post-404 -->

                <?php endif; wp_reset_query(); ?>




            </section>
        </div>
   

    <div class='col-md-2 rsidebar-blog'>
        <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
    </div>
 </div>
    
  

    <?php get_template_part( 'part', 'directory' ); ?>   



    <?php get_footer(); ?>

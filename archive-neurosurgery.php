<?php
/* 
Template Name: neurosurgery / cat archive
*/


get_header();
?>

<main class="page-content">
    <section class="bg-gray-lighter section-sm-40">
        <!--GAP-->
    </section>
    <section class="bg-gray-lighter section-40 section-md-139" id="container_collection">
        <h3 class="text-center inset-15">
            <span class="text-bold">COLLECTION</span><br>
            <span id="subtitle-category"><?php wp_title(''); ?></span>
            <span class="divider"></span>
            <br>
        </h3>

        <?php $args = array('post_type' => 'neurosurgery_items'); ?>
        <?php $loop = new WP_Query($args); ?>
        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
        $first_img = true; 
        while($first_img && has_sub_field('collection_thumbnails')): ?>


        <div class="container">
            <div class="row">

                <a href="<?php the_permalink(); ?>">
                    <div class="col-md-3 the-post-container">


                        <img src="<?php echo the_sub_field('item_image'); ?>" alt="" width="642" height="400">
                        <?php $first_img = false; ?>

                        <?php endwhile; ?>


                        <h5 class="heading collection-titles">


                            <?php echo get_the_title(); ?>
                        </h5></a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div><!-- container -->


        <?php else: ?>

        <div data-category="" style="display: block;" class="category-intro-text shell section-40">
            <article class="news-post range">
                <?php the_field('default_message'); ?>
            </article>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>



    </section>     
</main>

<?php get_template_part( 'part', 'directory' ); ?>   
<?php get_footer(); ?>

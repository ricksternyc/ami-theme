<?php
/**
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	<!-- Page Content-->
	<main class="page-content">
		<section class="section-sm-40">
			<!--GAP-->
		</section>
		<section class="section-40 section-md-139">
			<div class="shell">
				<article class="news-post range rk-range">
					
					
					<div class="cell-md-5">
						<h3 class="heading"> <span data-field="title"><?php the_title(); ?></span></h3>
						<div class="post-meta text-primary">
							<div class="meta-block"><span class="icon fa-tag"></span><span data-field="category">

								<?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?>
								</span>
							</div>
						</div>

						<p data-field="description">
							<?php the_field('item_content'); ?>

						</p>
					</div>
					
					<?php if( have_rows('collection_thumbnails') ): ?>
					<div class="cell-md-6">

						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<?php
								$active = 'active';
								$num = 0;
								while ( have_rows('collection_thumbnails') ) : the_row();
								?>


								<img src="<?php the_sub_field('item_image'); ?>"  data-target="#carousel-example-generic" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?> cpt-thumb" />


								<?php
	$active = '';
										 $num += 1;
										 endwhile; ?>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<?php
								$active = 'active';
								while ( have_rows('collection_thumbnails') ) : the_row();
								?>
								<div class="item <?php echo $active ?> screen08">

									<img src="<?php the_sub_field('item_image'); ?>" />

								</div><!-- /item -->
								<?php $active = '';
								endwhile;
								?>
							</div>
						</div>
					</div>
					<!--    </div>-->
					<?php endif; ?>

<!--
					<div class="cell-md-1 visible-md visible-lg" id="container_additional">

					</div>
-->
				</article>
			</div>
		</section>
		<!--			{{>nav}}-->
	</main>
</div><!-- Wrapper end -->
<?php get_template_part( 'part', 'directory' ); ?>   
<?php get_footer(); ?>

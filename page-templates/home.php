<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

 <main class="page-content">

<section class="bg-image-1 mask-1 vertical-limiter-1 flex-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-1.jpg;) ">
  <div class="shell">
    <div class="jumbotron text-center">
      <h1 style="margin-bottom:5px;">
        NATAN SCHLEIDER GALLERY, L.L.C.
      </h1>
      <h4>Purveyor, Restorer and Collector of Fine Medical Antiques</h4>
    </div>
  </div>
</section>

<section class="section-40 section-lg-139">
          <div class="shell">
            <!--<h3 class="text-center"><span class="text-bold">WE PRESERVE MEDICAL HISTORY</span><br><span>WE ARE NOT DEALERS</span><span class="divider"></span></h3>-->
            <h3 class="text-center"><span class="text-bold">ABOUT NATAN SCHLEIDER GALLERY, LLC</span><span class="divider"></span></h3>
            <div class="range">
              <div class="cell-md-6">
                <p>Natan Schleider Gallery, L.L.C. was formed in 2011 as Dr. Schleider began to collect, buy, sell, trade, and restore other medical and scientific antiques: apothecary, antiquarian books, medical, surgical, and other antiquities related to medicine, anatomy, pharmacy, surgery, science...really anything related to medicine.</p>
              </div>
              <div class="cell-md-6">
                <p>Please enjoy the website and if you have anything you have any questions, comments, or concerns, please email: <a href="mailto:nschleider@yahoo.com">nschleider@yahoo.com</a></p>
              </div>
            </div>
          </div>
        </section>
        
        
        <section class="bg-gray-lighter section-40 section-lg-139">
          <h3 class="text-center inset-15"><span class="text-bold">COLLECTIONS</span><span class="divider"></span></h3>
          <div class="range range-sm-center inset-xs-30">
            <div class="cell-sm-6 cell-lg-3">
              <div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/featured/apothecary.png'); background-size: cover; overflow: hidden;">
                <h4 class="heading"><a href="<?php echo get_site_url(); ?>/apothecary"><span class="text-bold">APOTHECARY</span></a></h4>
                <p class="content"></p>
                <h4 class="fake-heading"><span>APOTHECARY</span></h4>
              </div>
            </div>
            <div class="cell-sm-6 cell-lg-3">
              <div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/featured/books.png'); background-size: cover; overflow: hidden;">
                <h4 class="heading"><a href="<?php echo get_site_url(); ?>/antiquarian-medical-books"><span class="text-bold">BOOKS</span></a></h4>
                <p class="content"></p>
                <h4 class="fake-heading"><span>BOOKS</span></h4>
              </div>
            </div>
            <div class="offset-top-30 cell-sm-6 cell-lg-3 offset-mac-top-0">
              <div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/featured/surgical.png'); background-size: cover; overflow: hidden;">
                <h4 class="heading"><a href="<?php echo get_site_url(); ?>/surgical"><span class="text-bold">SURGICAL</span></a></h4>
                <p class="content"></p>
                <h4 class="fake-heading"><span>SURGICAL</span></h4>
              </div>
            </div>
            <div class="offset-top-30 cell-sm-6 cell-lg-3 offset-mac-top-0">
              <div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/featured/misc.png;); background-size: cover; overflow: hidden">
                <h4 class="heading"><a href="<?php echo get_site_url(); ?>/misc"><span class="text-bold">MISC</span></a></h4>
                <p class="content"></p>
                <h4 class="fake-heading"><span>MISC</span></h4>
              </div>
            </div>
          </div>
          <div class="text-center offset-top-30 offset-lg-top-60"><a href="<?php echo get_site_url(); ?>/collections" class="btn btn-primary btn-md">SEE ALL COLLECTIONS</a></div>
        </section>

<?php get_template_part( 'part', 'directory' ); ?>   
   
<?php get_footer(); ?>

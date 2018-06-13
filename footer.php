<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>




           
        <!-- Page Footer-->
      <footer class="page-foot">
        <div class="rd-navbar-outer">
          <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-cell rd-navbar-panel text-center">
              <!-- RD Navbar Toggle-->
              <button data-rd-navbar-toggle=".rd-navbar-nav" class="rd-navbar-toggle"><span class="toggle-icon"></span></button>
          
              
              
              <p class="offset-top-6">&#169; <span id="copyright-year">2016</span> Natan Schleider Gallery, L.L.C.. <br/>All Rights Reserved.
              </p>
            </div>
            <!-- RD Navbar Nav-->
            <div class="rd-navbar-cell rd-navbar-nav-wrap">
              <ul class="rd-navbar-nav">
                <li><a href="<?php echo get_site_url(); ?>">HOME</a></li>
                <li><a href="<?php echo get_site_url(); ?>/about">ABOUT THE GALLERY</a></li>
                <li><a href="<?php echo get_site_url(); ?>/collections">COLLECTION</a></li>
                <li><a href="<?php echo get_site_url(); ?>/buy-sell-trade">BUY/SELL/TRADE</a></li>
                <li><a href="<?php echo get_site_url(); ?>/blog">BLOG</a></li>
                
                  </li>
              </ul>
            </div>
            <!-- RD Navbar Info-->
            <!--
            <div class="rd-navbar-cell rd-navbar-info">
                <address>
                NATAN SCHLEIDER GALLERY, LLC.<br/>
                35 E. 35TH ST., NEW YORK, NY, 10016<br/>
                <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;212.481.2980<br/>
                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;info@antiquemedicalinstruments.com
                </address>
            </div>
            -->
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
              
                 
</body>

</html>


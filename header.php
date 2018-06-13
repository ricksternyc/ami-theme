<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>

  <body>

    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-default rd-navbar-absolute" style="height: 244px;">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" class="rd-navbar rd-navbar-original rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-static">
            <div class="rd-navbar-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-cell rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button data-rd-navbar-toggle=".rd-navbar-nav" class="rd-navbar-toggle toggle-original"><span class="toggle-icon"></span></button>
                  <!-- RD Navbar Brand--><a href="<?php echo get_site_url(); ?>/" class="rd-navbar-brand">
                  <div class="brand-name">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-3.png" class="logo-desktop">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile.png" class="logo-mobile">
                  </div></a>
                  <!-- RD Navbar Toggle-->
                  <button data-rd-navbar-toggle=".rd-navbar-info" class="info-toggle toggle-original"><span class="toggle-icon"></span></button>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-cell rd-navbar-nav-wrap" style="margin:0 auto;">
                  <ul class="rd-navbar-nav toggle-original-elements" id="container_topNav">
                    <li class="active"><a href="<?php echo get_site_url(); ?>/">HOME</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/about">ABOUT THE GALLERY</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/collections">COLLECTION</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/buy-sell-trade">BUY/SELL/TRADE</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/blog">BLOG</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/contact">CONTACT</a></li>
                  </ul>
                </div>  
                <!-- RD Navbar Info-->
                <!--
<div class="rd-navbar-cell rd-navbar-info">
<a href="mailto:info@historyofmedicalantiques.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;info@antiquemedicalinstructments.com</a>
<a href="callto:212.481.2980"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;212.481.2980</a>
<address>
NATAN SCHLEIDER GALLERY, LLC.<br/>
35 E. 35TH ST., NEW YORK, NY, 10016
</address>
</div>
-->
              </div>
            </div>
          </nav>
        </div>
      </header>      <!-- Page Content-->





<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php wp_title( 'Brown Club of Miami |', true, 'left' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico" type="image/x-icon" />
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <div class="page-wrap">
        <nav class="navbar navbar-inverse main-menu" role="navigation">
          <header class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-center">            
              <a class="navbar-brand" href="<?php echo home_url(); ?>">
                  <?php bloginfo('name'); ?>
              </a>
            </div>
            <section class="collapse navbar-collapse" id="navigationbar">
              <?php

                wp_nav_menu( array(
                  'menu'              => 'left-menu',
                  'theme_location'    => 'left-menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => '',
                  'container_id'      => 'bs-left-menu',
                  'menu_class'        => 'nav navbar-nav navbar-left',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
                );

                wp_nav_menu( array(
                  'menu'              => 'right-menu',
                  'theme_location'    => 'right-menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => '',
                  'container_id'      => 'bs-right-menu',
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
                );
              ?>
            </section>
          </header>
        </nav>
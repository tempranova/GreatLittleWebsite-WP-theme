
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PNG favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/../glwparent-child/images/favicon.png' ?>">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo('name') ?>
    </title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header>

      <!-- To customize, insert your header area styles from Bootstrap template -->
      <!-- Make sure you keep the dynamic menu below -->

      <!-- Logo -->
      <div id="logo">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo get_template_directory_uri() . '/../glwparent-child/images/logo.jpg' ?>" alt="<?php bloginfo('name') ?> logo">
          <!-- <?php // bloginfo('name'); ?> to get the name of the site instead of logo -->
        </a>
      </div>

      <!-- Menu -->
      <div class="navbar navbar-center" role="navigation">
        <div class="navbar-inner navbar-center-inner">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> -->
            </div>

              <!-- Menu styles -->
                <?php
                  $args = array(
                    'menu'              => 'header-menu',
                    'theme_location'    => 'header-menu',
                    'menu_class'        => 'nav navbar-nav nav-center',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                  );

                  wp_nav_menu($args);
                ?>
            
              <!-- If you want a search in the bar, here is code -->
              <?php // get_search_form(); ?>

          </div>
        </div>
      </div>

      <!-- End insertion from Bootstrap template -->

    </header>

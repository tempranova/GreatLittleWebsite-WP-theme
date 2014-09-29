
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
       <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-7 col-sm-6 col-md-5 col-lg-4">
              <a href="<?php bloginfo('url'); ?>">
                <img class="img-responsive logo" src="<?php echo get_template_directory_uri() . '/../glwparent-child/images/logo.jpg' ?>" alt="<?php bloginfo('name') ?> logo">
              </a>
          <!-- <?php bloginfo('name'); ?> to get the name of the site instead of logo -->
            </div>
             <div class="text-right col-xs-5 col-sm-6 col-md-7 col-lg-8" style="display:block;">
              <p class="location-text">Address<br>Vancouver, B.C., Canada</p>
              <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                  <input type="text" placeholder="Search..." class="input-lg form-control">
                </div>
              </form>
             </div>
           </div>
        </div>
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <!-- Menu styles -->
                <?php
                  $args = array(
                    'menu'              => 'header-menu',
                    'theme_location'    => 'header-menu',
                    'menu_class'        => 'nav nav-justified',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                  );

                  wp_nav_menu($args);
                ?>

            </div><!--/.navbar-collapse -->
          </div>
        </div>
      </div>

      <!-- End insertion from Bootstrap template -->

    </header>

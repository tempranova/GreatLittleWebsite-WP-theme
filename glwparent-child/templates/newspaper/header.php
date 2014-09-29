
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
      <div class="container custom-top-bar-container">

      <div class="navbar navbar-inverse navbar-fixed-top custom-top-bar" role="navigation">
      <div class="container">
        <div>
          <div id="social-icons" class="pull-right social">
          <img src="<?php echo get_template_directory_uri() . '/../glwparent-child/images/social-media/facebook.png' ?>" alt="facebook">
          <img src="<?php echo get_template_directory_uri() . '/../glwparent-child/images/social-media/twitter.png' ?>" alt="twitter">
          </div>
          <p class="top-bar-text"><?php echo date('jS \of F Y'); ?></p>

        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <div class="header center">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="logo-center">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo get_template_directory_uri() . '/../glwparent-child/images/jurisdiction-main-logo.png' ?>" alt="<?php bloginfo('name') ?> logo">
          <!-- <?php bloginfo('name'); ?> to get the name of the site instead of logo -->
        </a>
      </div>
      <div class="navbar-header ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
              <!-- <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> -->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                  $args = array(
                    'menu' => 'header-menu',
                    'menu_class' => 'nav nav-tabs nav-justified border-bottom',
                    'container' => 'false'
                  );

                  wp_nav_menu($args);
                ?>
            </div><!--/.navbar-collapse -->
          </div>
        </div>
      </div>

    </header>

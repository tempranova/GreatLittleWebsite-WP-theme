<?php get_header(); ?>

  <!-- Simple, basic page template -->

      <div class="container">
        <div class="row">
          <div class="col-sm-8">

            <article>
            <?php woocommerce_content(); ?>
          </article>
        </div>
        <div class="col-sm-4">
          <?php get_sidebar(); ?>
        </div>
      </div>

  <?php get_footer(); ?>

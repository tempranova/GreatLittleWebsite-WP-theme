<?php get_header(); ?>

  <!-- Simple, basic page template -->

      <div class="container">
        <div class="row">
          <div class="col-sm-8">

            <article>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
                <!-- Featured Image -->
                <?php $thumbnail_id = get_post_thumbnail_id();
                      $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
                      $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); ?>
                <?php if ($thumbnail_meta != '' ) { ?><img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"><?php } ?>
              </div>
              <?php the_content(); ?>

            <?php endwhile; else: ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>
              <hr>
              <p>No content exists for this page.</p>

          <?php endif; ?>
          </article>
        </div>
        <div class="col-sm-4">
          <?php get_sidebar(); ?>
        </div>
      </div>

  <?php get_footer(); ?>

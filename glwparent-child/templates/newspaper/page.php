<?php get_header(); ?>

      <div class="container">
        <div class="col-sm-8 blog-main">

          <div class="blog-header">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <h1 class="blog-title"><?php the_title(); ?></h1>
            <p class="blog-post-meta"><em><?php echo the_time('F jS, Y'); ?>, by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><em><?php the_author(); ?></em></a> | <a href="<?php comments_link(); ?>"> <?php comments_number(); ?></a></em></p>
            <img class="img-responsive" src="http://placehold.it/900x300">
          </div>
          <div class="blog-post">
            <hr>
            <?php the_content(); ?>
          </div>

            <?php endwhile; else: ?>

              <h1><?php the_title(); ?></h1>
              <p>No content exists for this page.</p>
          </div>
            <?php endif; ?>
          
        </div>
        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>
      </div>

  <?php get_footer(); ?>
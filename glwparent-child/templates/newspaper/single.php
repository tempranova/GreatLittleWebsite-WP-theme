<?php get_header(); ?>

      <div class="container">

        <div class="blog-header">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <h1 class="blog-title"><?php the_title(); ?></h1>
            <p class="blog-post-meta"><em><?php echo the_time('F jS, Y'); ?>, by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><em><?php the_author(); ?></em></a> | <a href="<?php comments_link(); ?>"> <?php comments_number(); ?></a></em></p>
            <p class="blog-description"><?php the_excerpt(); ?></p>
        </div>
        <div class="row">
          <div class="blog-main">
            <div class="blog-post">
              <img class="img-responsive" src="http://placehold.it/900x300">
              <hr>
              <div class="row">
                <div class="col-sm-8">
                  <?php the_content(); ?>
                </div>

         <?php endwhile; else: ?>
            
            <h1 class="blog-title"><?php the_title(); ?></h1>
            <p>No content exists for this page.</p>

         <?php endif; ?>
                <div class="col-sm-4">
                  <?php get_sidebar(); ?>
                </div>
            </div>
      </div>

  <?php get_footer(); ?>


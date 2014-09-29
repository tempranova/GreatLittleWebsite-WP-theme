<?php get_header(); ?>

      <div class="container">
        <div class="row">
          <div class="col-sm-8 blog-main">
            <section class="blog-description">
              <h2><?php wp_title( '' ); ?></h2>
              <img class="img-responsive" src="http://placehold.it/600x200">

              <!-- Top section story -->

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

              <article>
                <div class="blog-post">
                  <h3 class="blog-post-title"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" ><?php the_title(); ?></a></h3>
                  <p class="blog-post-meta"><em><?php echo the_time('F jS, Y'); ?>, by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><em><?php the_author(); ?></em></a> | <a href="<?php comments_link(); ?>"> <?php comments_number(); ?></a></em></p>
                  <?php the_excerpt(); ?>
                  <h4 style="text-align:right;">Read More...</h4>
              </article>
              <hr>

            <?php endwhile; else: ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>
              <p>No content exists for this page.</p>

            <?php endif; ?>

            <!-- Next posts -->
            <div class="blog-post">
              <h3 class="blog-post-title">Another blog post</h3>
              <p class="blog-post-meta"><em>December 23, 2013 by <a href="#">Jacob</a></em></p>

              <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
              <h4 style="text-align:right;">Read More...</h4>
            </div><!-- /.blog-post -->

            <!-- Pagination -->
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>

          </div>
        </section>
        <div class="col-md-4 sidebar">
        <!-- Dynamically get the right sidebar -->
        <?php
          if (is_category( )) {
            $cat = get_query_var('cat');
            $thisCat = get_category($cat)->slug;
            $thisCat .= "-sidebar";
           }
        ?>
          <?php if (! dynamic_sidebar( $thisCat ) ) : ?>
            <h3>Sidebar</h3>
            <p>Please add widgets to your sidebar.</p>
          <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->

  <?php get_footer(); ?>

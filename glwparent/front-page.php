<?php get_header(); ?>

    <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <!-- Carousel -->
        <div id="carousel-front-page" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php
              // Args & query (GIVE THE CORRECT CATEGORY HERE)
                $args = array(
                  'post_type' => 'post',
                  'cat' => '8'
                );
                $the_query = new WP_Query( $args );
              // The Loop
                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
            <li data-target="#carousel-front-page" data-slide-to="<?php echo $the_query->current_post; ?>" <?php if( $the_query->current_post === 0 ) : ?>class="active"<?php endif; ?>></li>
            <?php endwhile; endif; ?>
          </ol>

            <?php rewind_posts(); ?>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            
              <div class="item <?php if( $the_query->current_post === 0 ) : ?>active<?php endif; ?>">
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
                  $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
                ?>
                <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>">
                <div class="carousel-caption">
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_excerpt(); ?></p>
                  <a class="carousel-read-more btn btn-default" href="<?php the_permalink(); ?>">Read more...</a>
                </div>
              </div>
            <?php 
                  endwhile; endif;
              wp_reset_postdata(); 
            ?>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-front-page" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-front-page" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>  

      <div class="col-sm-4">
        <div class="jumbotron">
          <div class="container">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; else : ?>
              <p>You should add a slider here!</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <?php if (dynamic_sidebar( 'front-page-left')); ?>
      </div>
      <div class="col-md-4">
        <?php if (dynamic_sidebar( 'front-page-middle')); ?>
     </div>
      <div class="col-md-4">
        <?php if (dynamic_sidebar( 'front-page-right')); ?>
      </div>
    </div>

<?php get_footer(); ?>

<?php get_header(); ?>

  <div class="container main">
    <div class="row">

      <main class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php
              if (is_post_type_archive()) {
              
                get_template_part('archive-view');
              
              } else if (is_singular('event')) {

                get_template_part('event-view');

              } else {

                get_template_part('main-view');

              };
            ?>

        <?php endwhile;?>

            <hr>
            <div class="text-center">
              <nav class="btn-group blog-pagination">       
                <?php previous_posts_link( 'Newer posts' ); ?>
                <?php next_posts_link( 'Older posts' ); ?>
              </nav>
            </div>
        <?php else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <!-- End WordPress Loop -->

        <?php do_action('after_loop');?>

      </main>

      <aside class="col-md-3">
        <?php get_sidebar(); ?>
      </aside>

    </div>


<?php get_footer(); ?>
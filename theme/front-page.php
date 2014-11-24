<?php get_header();?>

<section class="container-fluid event-feed">
  <div class="row">
    <?php

    $events = new WP_Query(array(
      'post_type' => 'event'
    ));

    if ( $events->have_posts() ){

      function event_sorter($a, $b) {
        $customA = get_post_custom($a->ID);
        $customB = get_post_custom($b->ID);
        if($customA['wpcf-event-start-date'][0] < $customB['wpcf-event-start-date'][0]) {
          return 1;
        }
        if($customA['wpcf-event-start-date'][0] > $customB['wpcf-event-start-date'][0]) {
          return -1;
        }
        return 0;
      }

      usort($events->posts, "event_sorter");

      while ( $events->have_posts() ) {
        $events->the_post(); 
        get_template_part('event-view');
      }
    }
    else {
      echo "No posts found";
    }
    ?>
  </div>  
</section>

<?php get_footer();?>
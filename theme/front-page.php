<?php get_header();?>

<section class="container-fluid event-feed">
  <div class="row">
    <?php

    $events = new WP_Query(array(
      'post_type' => 'event'
    ));

    if ( $events->have_posts() ):

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


      while ( $events->have_posts() ):
        $events->the_post(); 
    ?>

          <?php 
            $date = types_render_field("event-start-date", array(
              "style" => "text",
              "output" => "raw"
            )); 
            $date = Date('D, M jS h:ia',$date);
          ?>

      <article class="event">
        <h3>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title();?>
          </a>
        </h3>
        <small class="event-location">@ <?php echo types_render_field('event-location-title', array()); ?></small>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('large', array("class"=>"img-responsive"));?>
        </a>
        <small class="event-date"><?php echo $date;?></small>
        <div class="event-excerpt">
          <p><?php the_excerpt();?></p>
        </div>
      </article>

    <?php
      endwhile;
    else:?>
      No posts found
    <?php
      endif;
    ?>
  </div>  
</section>

<script>
  jQuery(document).ready(function($){
    var $events = $('.event-feed')
    $events.imagesLoaded(function(){
      $events.masonry({itemSelector: '.event'})
    })

  })
</script>

<?php get_footer();?>
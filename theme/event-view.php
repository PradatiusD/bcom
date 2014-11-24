<?php 
  $date = types_render_field("event-start-date", array(
    "style" => "text",
    "output" => "raw"
  ));

  // If it already happened then just show date and year
  if ($date > getdate()[0]) {
    $date = Date('D, M jS h:ia',$date);    
  } else {
    $date = Date('M jS, Y',$date);
  }
?>

<article class="event">
  <h3>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_title();?>
    </a>
  </h3>


  <small class="event-location">
    @ <?php echo types_render_field('event-location-title', array()); ?>

    <?php
    if (is_singular('event')) {
      echo "( ".types_render_field('address', array())." )";
    }
    ?> 
  </small>

  <figure class="event-image-holder">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('large', array("class"=>"img-responsive"));?>
    </a>
    
    <small class="event-date">
      <?php echo $date;?>
    </small>
  </figure>


  <div class="event-excerpt">
    <p><?php is_front_page() ? the_excerpt() : the_content();?></p>
  </div>
</article>
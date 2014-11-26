<article class="row">

  <div class="col-md-12">
    <h1><?php the_title();?></h1>

    <?php if (has_post_thumbnail()): ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('thumbnail', array('class'=>'img-responsive')); ?>
      </a>  
    <?php endif; ?>

    <section class="post-content">
      <?php the_content(); ?>    
    </section>    
  </div>

</article>
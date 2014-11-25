<?php

  require_once('lib/autoload.php');
  include('config.php');

  $facebook = new Facebook($config['facebook']);

  function fb_feed () {
    global $config, $facebook;

    $request = array(
      'feed'  => $facebook->api('/278202245587537/feed')
    );

    $feed = array_slice($request['feed']['data'], 0, 6);
    ob_start();

    ?>

      <h3>From Facebook</h3>
  
      <?php foreach ($feed as $f): ?>

        <?php if (isset($f['message'])): ?>

          <p style="word-wrap: break-word;">
            <?php
              if (strlen($f['message'])>200) {
                 $f['message'] = substr($f['message'], 0, 200) . '...';
              } 
              echo $f['message'];
            ?>
          </p>
          <small class="text-muted">
            Posted <a href="http://facebook.com/<?php echo $f['id'];?>" target="_blank"><span class="text-primary"><?php echo Date('D, M jS h:ia',strtotime($f['updated_time']));?></span></a>
            <br>by <a href="http://facebook.com/<?php echo $f['id'];?>" target="_blank"><?php echo $f['from']['name'];?></a>
          </small>
          <hr>

        <?php endif; ?>


      <?php endforeach; ?>

    <?php

    $output = ob_get_clean();
    echo $output;

  }


  add_action('right_sidebar','fb_feed');
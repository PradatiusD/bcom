jQuery(document).ready(function($){
  var $events = $('.event-feed');

  $events.imagesLoaded(function(){
    
    $events.masonry({itemSelector: '.event'});
    $events.find('.event').each(function(index){

      var $this = $(this);

      setTimeout(function(){
        $this.addClass('fade-up-in animated');

        setTimeout(function(){
          $this.removeClass('fade-up-in animated');
          $this.addClass('ready');
        }, (index+1)*750);

      }, index*250);
    });
  });
});
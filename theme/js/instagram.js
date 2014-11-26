var userFeed = new Instafeed({
  get: 'user',
  userId: 201918634,
  accessToken: '447873232.30b9a4c.babf6d87d69145e5bd8067e66a5a93eb',
  resolution: 'standard_resolution',
  template: '<article class="col-md-4 col-sm-6 col-xs-12 instaItem">'+
              '<figure class="thumbnail">'+
                '<a href="{{link}}" target="_blank">' +
                  '<img src="{{image}}" class="img-responsive"/>'+
                '</a>'+
                '<figcaption class="small">'+
                '{{caption}}'+
                '</figcaption>'+
              '</figure>'+
            '</article>',
  after: function () {

    (function($){
      var $instafeed = $('#instafeed');
      $instafeed.imagesLoaded(function(){
        $instafeed.masonry({itemSelector: '.instaItem'});
      });
    })(jQuery);
    
  }
});

userFeed.run();
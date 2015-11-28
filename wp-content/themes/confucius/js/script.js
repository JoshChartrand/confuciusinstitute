
 
 jQuery (function($) {
      
      var documentElem = $(document),
          nav = $('nav'),
          list = $('#list');
          menu = $('#menu');
          lastScrollTop = 0;
      
      documentElem.on('scroll', function() {
          var currentScrollTop = document.body.scrollTop;
          
          //scroll down
          if ( currentScrollTop > lastScrollTop ) {
                
                nav.addClass('hiddens');
                list.addClass('hiddens');
                menu.addClass('hiddens');
                
                nav.removeClass('showing');
                list.removeClass('showing');
                menu.removeClass('showing');
                console.log('test');
                
              }
          //scroll up

          else
          {
              nav.addClass('showing');
              list.addClass('showing');
              menu.addClass('showing');
              
              nav.removeClass('hiddens');
                list.removeClass('hiddens');
                menu.removeClass('hiddens');
          }
          
          lastScrollTop = currentScrollTop;

      });
  
  //https://css-tricks.com/snippets/jquery/smooth-scrolling/

  $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
  
      
      
      
  });


 
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
  
$(window).scroll(function() 
{ 
    if ($(this).scrollTop()> $(window).height() * 0.7 && $(this).scrollTop() < $(window).height() * 4.3) 
    { 
    $('#bg').fadeIn(); 
    } 
    
    else
    { 
        $('#bg').fadeOut(); 
    } 
});

$(window).scroll(function() 
{ 
    if ($(this).scrollTop()> $(window).height() * 0.7 && $(this).scrollTop() < $(window).height() * 1.3  ) 
    { 
    $('#buddha2').fadeIn(); 
    } 
    
    else
    { 
        $('#buddha2').fadeOut(); 
    } 
});

$(window).scroll(function() 
{ 
    if ($(this).scrollTop()> $(window).height() * 1.7 && $(this).scrollTop() < $(window).height() * 2.3 ) 
    { 
    $('#tao2').fadeIn(); 
    } 
    
    else
    { 
        $('#tao2').fadeOut(); 
    } 
});

$(window).scroll(function() 
{ 
    if ($(this).scrollTop()> $(window).height() * 2.7 && $(this).scrollTop() < $(window).height() * 3.3 ) 
    { 
    $('#con2').fadeIn(); 
    } 
    
    else
    { 
        $('#con2').fadeOut(); 
    } 
});


$(window).scroll(function() 
{ 
    if ($(this).scrollTop()> $(window).height() * 3.7 && $(this).scrollTop() < $(window).height() * 4.3 ) 
    { 
    $('#leg2').fadeIn(); 
    } 
    
    else
    { 
        $('#leg2').fadeOut(); 
    } 
});
      
      
      
  });

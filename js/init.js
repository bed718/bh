
$( document ).ready(function() {
    
// ==============================================================
// Scroll To...
// ==============================================================
    $('.back-to-top').click(function(){
       backToTop();
    });

    function backToTop(){
        $('html,body').animate({scrollTop:0},'fast');
        return false;
    }

    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 75
          }, 1000);
          return false;
        }
      }
    });


// ==============================================================
// Menu Tweaks
// ==============================================================
    $('.menu-toggle').click(function(){
        $('body').toggleClass('nav-open');
    });

// ==============================================================
// Masonry
// ==============================================================
      var investor_container = $('.investors');
      
      investor_container.imagesLoaded(function(){
        investor_container.masonry({
          itemSelector: '.investor'
        });
      });



// ==============================================================
// Scroll Tweaks
// ==============================================================
   //  $("body").mousewheel(function(event, delta) {

   //    $('#slides').scrollLeft -= (delta * 30);
    
   //    event.preventDefault();

   // });


// ==============================================================
// Slideshow
// ==============================================================

});


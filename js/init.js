
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
            scrollTop: target.offset().top
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

    jQuery(function($){
       $("#date").mask("99/99/9999", {placeholder:"MM/DD/YYYY"});
       $("#age-range").mask("(999) 999-9999", {placeholder:"Age range:"});
       $("#tin").mask("99-9999999");
       $("#ssn").mask("999-99-9999");
    });

// ==============================================================
// Masonry
// ==============================================================
      // var investor_container = $('.investors');
      
      // investor_container.imagesLoaded(function(){
      //   investor_container.masonry({
      //     itemSelector: '.investor'
      //   });
      // });



// ==============================================================
// Scroll Tweaks
// ==============================================================
   /* jQuery Wiggle http://www.class.pm/files/jquery/jquery.wiggle/demo/ */
  (function(a){a.fn.wiggle=function(d,c){c=a.extend({degrees:["2","4","2","0","-2","-4","-2","0"],delay:30,limit:null,randomStart:true,onWiggle:function(e){},onWiggleStart:function(e){},onWiggleStop:function(e){}},c);var b={wiggle:function(g,e){if(e===undefined){e=c.randomStart?Math.floor(Math.random()*c.degrees.length):0}if(!a(g).hasClass("wiggling")){a(g).addClass("wiggling")}var f=c.degrees[e];a(g).css({"-webkit-transform":"rotate("+f+"deg)","-moz-transform":"rotate("+f+"deg)","-o-transform":"rotate("+f+"deg)","-sand-transform":"rotate("+f+"deg)",transform:"rotate("+f+"deg)"});if(e==(c.degrees.length-1)){e=0;if(a(g).data("wiggles")===undefined){a(g).data("wiggles",1)}else{a(g).data("wiggles",a(g).data("wiggles")+1)}c.onWiggle(g)}if(c.limit&&a(g).data("wiggles")==c.limit){return b.stop(g)}g.timeout=setTimeout(function(){b.wiggle(g,e+1)},c.delay)},stop:function(e){a(e).data("wiggles",0);a(e).css({"-webkit-transform":"rotate(0deg)","-moz-transform":"rotate(0deg)","-o-transform":"rotate(0deg)","-sand-transform":"rotate(0deg)",transform:"rotate(0deg)"});if(a(e).hasClass("wiggling")){a(e).removeClass("wiggling")}clearTimeout(e.timeout);e.timeout=null;c.onWiggleStop(e)},isWiggling:function(e){return !e.timeout?false:true}};if(d=="isWiggling"&&this.length==1){return b.isWiggling(this[0])}this.each(function(){if((d=="start"||d===undefined)&&!this.timeout){b.wiggle(this);c.onWiggleStart(this)}else{if(d=="stop"){b.stop(this)}}});return this}})(jQuery);


    function wiggleForOneSecond(t){
      t.wiggle();
      setTimeout(function(){t.wiggle('stop')},1000)
    }

      var thingToWiggle = $('.wiggle');
      var s = setInterval(function(){wiggleForOneSecond(thingToWiggle)},5000);
      //setTimeout(function(){window.clearInterval(s)},31000)
      thingToWiggle.hover(function(){
        window.clearInterval(s)
      });

      thingToWiggle.click(function(){
        window.clearInterval(s)
      })

      thingToWiggle.hover(function(){
        window.clearInterval(s)
      })
    

// ==============================================================
// Slideshow
// ==============================================================

});


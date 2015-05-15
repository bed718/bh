
$( document ).ready(function() {


	$('#slide-1 p').each(function(){
	    var text = $(this).html().split(' '),
	        len = text.length,
	        result = []; 

	    for( var i = 0; i < len; i++ ) {
	        result[i] = '<span data-index="' + i + '">' + text[i] + '</span>';
	    }
	    $(this).html(result.join(' '));
	}); 

	var slide_1_timing = [
		500, 200, 400, 600, 500, 200, 200, 600, 500, 200, 300, 500,
	]

	var delay = 0;
	function showWords(section, timing, more){
		$('span', section).each(function(index, el) {
			var $this = $(this);
			var slice = slide_1_timing.slice(0, index);
			delay = 800;

			$.each(slice,function() {
			    delay += this;
			});

			//console.log(delay);

			$this.css('opacity', 0).delay(delay).animate({'opacity': 1}, 0);
		});


		more.css('opacity', 0).delay(delay + 800).animate({'opacity': 1}, 0);

	}

	showWords($('#slide-1 p'), slide_1_timing, $('#slide-1 .more'));

	


});

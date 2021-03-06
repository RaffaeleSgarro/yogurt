(function($) {

// On dom loaded
$(function() {
	var loop = function(element) {
		element.delay(5000).animate({top: 0}, 3000, "easeInBounce")
		.promise().pipe(function() {
			element.delay(2000).animate({top: -element.height()});
		})
		.promise().pipe(function() {
			loop(element);
		});
	}
	
	var bunny = $("#upside_down");
	var img = bunny.find("img");
	
	var start_animation = function (image) {
		// Hide the rabbit
		bunny.css("top", ( -image.height() ) + "px");
		// Start the loop
		loop(bunny);
	}
	
	// Wait for image to be loaded, watch for cached images
	if (img[0].complete) {
		start_animation(img);
	} else {
		bunny.find("img").bind("load", function(evt) {
			start_animation($(evt.target));
		});
	}
	
});

/* Searchbox things*/
$(function(){
	// Visual part make it fixed
	var box = $("#searchbox");
	var search = $("#search");
	var log = $("#search-log");
	if ( ! box.length )
		return;
	
	var original = box.offset().top;
	var fixed = false;
	var adminbarOffset = ( $("#wpadminbar").length ) ? $("#wpadminbar").height() : 0;
	adminbarOffset += 'px';
	
	$(window).scroll(function() {
		var shouldBeFixed = $(window).scrollTop() > original;
		
		if ( shouldBeFixed && !fixed) {
			fixed = true;
			box.css({'position': 'fixed', 'top': adminbarOffset, 'left': box.offset().left});
		} else if ( !shouldBeFixed && fixed) {
			fixed = false;
			box.css({'position': 'static'});
		}
		
	});
	
	$("#searchform").submit(function(e) {e.preventDefault();});
	
	// This is the cache for async searches
	var cache = [];
	
	search.keyup(function( e ) {
		var term = search.val();
		
		// escape
		if (term.match(/[_|%]/)) {
			term = term.replace(/[_|%]/g, '' );
			search.css( {"background": "#FFDBDB"} );
			setTimeout( function(){search.css( {"background": "white"} )}, 1000 );
			search.val( term );
		}
		
		var ul = $("#search-result");
		
		if ( term.length < 3 ) {
			log.text("Type to search");
			ul.empty();
			return;
		}
		
		function afterSearch ( data ) {
			// There's a race condition among async request
			// Check if the search term is what NOW is in the search box
			if ( data.search != search.val() )
				return;
			
			if ( data.error ) {
				log.text ( data.error );
				ul.empty();
			} else {
				log.text ( "Found " + data.posts.length + " posts" );
				ul.empty();
				$.each(data.posts, function(i, post) {
					ul.prepend("<li><a href='" + post.permalink + "'>" + post.post_title + "</a></li>");
				});
			}
		}
		
		function fireSearch (term) {
			log.text("Loading...");
			$.get( yogurt + "/json/index.php", {'search': term}, function (data) {
				// Cache the result
				cache [ data.search ] = data;
				afterSearch(data);
			});
		}
		
		(function(term) {
			setTimeout(function() {
				if (term == search.val()) {
					// Se if we have a cached result
					if ( cache [ term ] ) {
						afterSearch( cache[term] );
					} else {
						fireSearch(term);
					}
				}
			}, 500);
		})(term);
		
	});
});

})(jQuery);

$(document).ready(function(){
	var wasTrigger = false;
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('nav').outerHeight();
	var isOpen = false;

  // Navbar animation
	$('.hamburger').click(function(){
    // Toggle the hamburger animation
		$(this).toggleClass('open');
    // Fade in/out the links
    if(isOpen == false){
			$('.nav-links').children().fadeOut('slow', function (){
        $(this).removeClass('hidden');
      });
      $('.nav-links').children().fadeIn('slow', 'linear', function(){
        $(this).addClass('show');
      });

			return isOpen = true;
    }else if(isOpen == true){
      $('.nav-links').children().fadeOut('fast', function (){
        $(this).removeClass('show');
      });
			$('.nav-links').children().fadeIn('fast', function(){
        $(this).addClass('hidden');
      });

			return isOpen = false;
    }
	});

// Sticky Nav with animation pop up
	$(window).scroll(function(event){
	  didScroll = true;
	});
// Scroll triggered functions
	setInterval(function(){
	  if (didScroll){
	    hasScrolled();
	    stickyNav();
			skillsView();
			fadeInContent();
	    didScroll = false;
	  }
	}, 0);

	function hasScrolled(){
  var st = $(this).scrollTop();

  if (Math.abs(lastScrollTop - st) <= delta) return;
  // If current position > last position AND scrolled past navbar...
  if (st > lastScrollTop && st > navbarHeight){
    // Scroll down
    $('nav').removeClass('nav-down').addClass('nav-up');
  }
  else {
    // Scroll up
    if (st + $(window).height() < $(document).height()){
      $('nav').removeClass('nav-up').addClass('nav-down');
    }
  }

  lastScrollTop = st;
}

function stickyNav(){
  var y = $(document).scrollTop();
  var headerHeight = $('#header').height();
	var contactHeight = $('#contact').offset().top;
  var navHeight = $('nav').height();

  if (y > headerHeight && y < contactHeight) {
    $('nav').addClass('navSticky');
    $('main').css('margin-top', navHeight);
  } else {
    $('nav').removeClass('navSticky');
    $('main').css('margin-top', 0);
  }
}

// Scroll Animation when clicked on a tags
// Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top,
        }, 1000, function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(':focus')) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          }
        });
      }
    }
  });


// Bar fill Animation
function skillsView(){
	if(wasTrigger == false){
		var $skillEl = $('#skills');
		var middle = $skillEl.offset().top/1.1;
		var winPostion = $(document).scrollTop();

		if(winPostion > middle){
			$('.bar-fill').each(function(){
				var $this = $(this);
				var $percent = $('.percent');
				var barValue = $this.attr('data-value');
				var percentValue = Math.ceil($(this).attr('data-value'));
				$this.animate(
					{'width': barValue +"%"}
					,1500);
			});

			$('.percent').each(function(){
				 $(this).prop('Counter', 0).animate(
					{Counter: $(this).text()}, {
						duration: 1500,
						easing: 'swing',
						step: function(now) {
							$(this).text(Math.ceil(now) + "%");
						}
					});
			})
			return wasTrigger = true;
		}
	}
}

function fadeInContent(){
	var winPostion = $(document).scrollTop();
	var abtContent =$(".abt-content p");
	var $icons = $('.icons');

	if(winPostion > abtContent.offset().top/1.5) {

		abtContent.animate(
			{'opacity' : 1}
			,1500);
		$icons.animate(
			{'opacity' : 1}
			,1500);
	}
}

});

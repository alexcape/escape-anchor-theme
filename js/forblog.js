/* global jQuery */
(function($) {
	'use strict';

	var $document = $(document),
		stickyNavFunc = function() {
			$(window).scroll(function() {
				var distanceFromTop = $(document).scrollTop(),
					$navbar = $('.blogbar');
				
				distanceFromTop >= $('.progbar').height() ? 
				$navbar.fadeIn(400)
					   .addClass('animated slideInUp fixed') :
				$navbar.removeClass('slideInUp')
					   .addClass('fadeOutDown')
					   .fadeOut(300)
					   .removeClass('fixed');
			});
		},
		smoothScroll = function() {
			var scroll = new SmoothScroll('a[href*="#"]', {
				speed: 1800,
				easing: 'easeInOutCubic'
			});
		},
		progressBarFunc = function () {
			var winHeight = $(window).height(), 
				docHeight = $(document).height(),
				progressBar = $('progress'),
				max, value;

			max = docHeight - winHeight;
			progressBar.attr('max', max);

			$(document).on('scroll', function(){
				value = $(window).scrollTop();
				progressBar.attr('value', value);
			});
		}
	// 	isScrolledIntoView = function(elem) {
	// 		var docViewTop = $(window).scrollTop(),
	// 			docViewBottom = docViewTop + $(window).height(),
	// 			elemTop = $(elem).offset().top,
	// 			elemBottom = elemTop + $(elem).height();

	// 		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	// 	},
	// 	fadeInFunc = function(element, transition) {
	// 		$(element).each(function() {
	// 			if (isScrolledIntoView($(this)) === true) {
	// 				$(this).addClass(transition);
	// 			}
	// 		});
	// 	},

	// $window.on({
	// 	scroll: function() {
	// 		fadeInFunc('.scrolled .fadeUp.animated', 'fadeInUp');
	// 		fadeInFunc('.scrolled .fadeDown.animated', 'fadeInDown');
	// 		fadeInFunc('.scrolled .fadeLeft.animated', 'fadeInLeft');
	// 	},
	// });

	$document.on({
		ready: function() {
			stickyNavFunc();
			smoothScroll();
			progressBarFunc();
		}
	});
})(jQuery);
﻿jQuery(function($) {
	'use strict';
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 350) {
			$('.navbar-area').addClass("is-sticky");
		} else {
			$('.navbar-area').removeClass("is-sticky");
		}
	});
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: "1199"
	});
	$(".others-option-for-responsive .dot-menu").on("click", function() {
		$(".others-option-for-responsive .container .container").toggleClass("active");
	});
	$(".header-information").on("click", function() {
		$(".top-header-area").toggleClass("active");
	});
	$('.close-btn').on('click', function() {
		$('.search-overlay').fadeOut();
		$('.search-btn').show();
		$('.close-btn').removeClass('active');
	});
	$('.search-btn').on('click', function() {
		$(this).hide();
		$('.search-overlay').fadeIn();
		$('.close-btn').addClass('active');
	});
	$('.default-btn').on('mouseenter', function(e) {
		var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		$(this).find('span').css({
			top: relY,
			left: relX
		})
	}).on('mouseout', function(e) {
		var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		$(this).find('span').css({
			top: relY,
			left: relX
		})
	});
	$('.main-banner-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.main-banner-animation-image img:nth-child(1), .main-banner-animation-image img:nth-child(2), .main-banner-animation-image img:nth-child(3), .main-banner-animation-image img:nth-child(4), .main-banner-animation-image img:nth-child(5), .main-banner-animation-image img:nth-child(6), .main-banner-animation-image img:nth-child(7), .main-banner-animation-image img:nth-child(8), .main-banner-animation-image img:nth-child(9), .main-banner-animation-image img:nth-child(10), .main-banner-animation-image img:nth-child(11), .main-banner-animation-image img:nth-child(12), .main-banner-animation-image img:nth-child(13), .main-banner-animation-image img:nth-child(14), .main-banner-animation-image img:nth-child(15), .main-banner-image-wrap').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -.4;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.main-banner-with-large-shape-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.main-banner-image img:nth-child(1), .main-banner-image img:nth-child(2), .main-banner-image img:nth-child(3), .main-banner-image img:nth-child(4), .main-banner-image img:nth-child(5), .main-banner-image img:nth-child(6), .main-banner-image img:nth-child(7), .main-banner-image img:nth-child(8), .main-banner-image img:nth-child(9), .main-banner-image-wrap').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -.4;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.main-banner-box-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.main-banner-box-content').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.partner-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.partner-shape-1, .partner-shape-2').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.features-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.features-shape-1, .features-shape-2').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.experiences-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.experiences-shape-1, .experiences-shape-2, .experiences-shape-3, .experiences-shape-4, .experiences-shape-5, .experiences-shape-6, .experiences-shape-7, .experiences-image').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.about-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.about-shape-1, .about-shape-2, .about-shape-3, .about-shape-4, .about-shape-5, .about-shape-6, .about-shape-7, .about-image').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.services-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.services-shape-1, .services-shape-2, .services-shape-3, .services-shape-4, .services-shape-5').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.support-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.support-shape-1, .support-shape-2, .support-shape-3, .support-shape-4, .support-shape-5, .support-shape-6').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.cases-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.cases-shape-1, .cases-shape-2, .cases-shape-3, .cases-shape-4, .cases-shape-5, .cases-shape-6, .cases-shape-7').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.clients-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.clients-shape-1, .clients-shape-2, .clients-shape-3').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.plans-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.plans-shape-1, .plans-shape-2, .plans-shape-3, .plans-shape-4, .plans-shape-5').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.blog-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.blog-shape-1, .blog-shape-2').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.overview-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.overview-shape-1, .overview-shape-2, .overview-shape-3, .overview-shape-4, .overview-shape-5').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.video-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.video-shape-1, .video-shape-2').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.fun-facts-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.fun-facts-shape-1, .fun-facts-shape-2, .fun-facts-shape-3, .fun-facts-shape-4').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.projects-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.projects-shape-1, .projects-shape-2, .projects-shape-3, .projects-shape-4, .projects-shape-5').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.analysis-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.analysis-shape-1, .analysis-shape-2, .analysis-shape-3, .analysis-shape-4, .analysis-shape-5, .analysis-image').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.technology-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.technology-shape-1, .technology-shape-2, .technology-shape-3, .technology-shape-4, .technology-shape-5, .technology-shape-6, .technology-shape-7, .technology-shape-8').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.page-banner-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.page-banner-shape-1, .page-banner-shape-2, .page-banner-shape-3, .page-banner-shape-4').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.services-details-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.shape-1, .shape-2, .shape-3').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.faq-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.faq-shape-1, .faq-shape-2, .faq-shape-3, .faq-shape-4, .faq-shape-5').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.footer-area').mousemove(function(e) {
		var wx = $(window).width();
		var wy = $(window).height();
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
		var newx = x - wx / 2;
		var newy = y - wy / 2;
		$('.footer-shape-1, .footer-shape-2, .footer-shape-3, .footer-shape-4, .footer-shape-5').each(function() {
			var speed = $(this).attr('data-speed');
			if ($(this).attr('data-revert')) speed *= -1;
			TweenMax.to($(this), 1, {
				x: (1 - newx * speed),
				y: (1 - newy * speed)
			});
		});
	});
	$('.partner-slides').owlCarousel({
		loop: true,
		nav: true,
		rtl: true,
		dots: false,
		smartSpeed: 500,
		margin: 30,
		autoplayHoverPause: true,
		autoplay: true,
		navText: ["<i class='ri-arrow-left-line'></i>", "<i class='ri-arrow-right-line'></i>"],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 3
			},
			1200: {
				items: 5
			}
		}
	});
	$('.clients-slides').owlCarousel({
		loop: true,
		nav: false,
		rtl: true,
		dots: true,
		smartSpeed: 500,
		margin: 30,
		autoplayHoverPause: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});
	$('.clients-slides-two').owlCarousel({
		loop: true,
		nav: false,
		rtl: true,
		dots: true,
		smartSpeed: 500,
		margin: 30,
		autoplayHoverPause: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});
	$('.projects-slides').owlCarousel({
		loop: true,
		nav: false,
		rtl: true,
		dots: false,
		scrollbarType: "scroll",
		smartSpeed: 500,
		margin: 30,
		autoplayHoverPause: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1200: {
				items: 4
			}
		}
	});
	let el = document.getElementById('filt-monthly');
	if (el) {
		let e = document.getElementById("filt-monthly"),
			d = document.getElementById("filt-yearly"),
			t = document.getElementById("switcher"),
			m = document.getElementById("monthly"),
			y = document.getElementById("yearly");
		e.addEventListener("click", function() {
			t.checked = false;
			e.classList.add("toggler--is-active");
			d.classList.remove("toggler--is-active");
			m.classList.remove("hide");
			y.classList.add("hide");
		});
		d.addEventListener("click", function() {
			t.checked = true;
			d.classList.add("toggler--is-active");
			e.classList.remove("toggler--is-active");
			m.classList.add("hide");
			y.classList.remove("hide");
		});
		t.addEventListener("click", function() {
			d.classList.toggle("toggler--is-active");
			e.classList.toggle("toggler--is-active");
			m.classList.toggle("hide");
			y.classList.toggle("hide");
		});
	}
	$(".newsletter-form").validator().on("submit", function(event) {
		if (event.isDefaultPrevented()) {
			formErrorSub();
			submitMSGSub(false, "لطفا ایمیل خود را به درستی وارد کنید.");
		} else {
			event.preventDefault();
		}
	});

	function callbackFunction(resp) {
		if (resp.result === "success") {
			formSuccessSub();
		} else {
			formErrorSub();
		}
	}

	function formSuccessSub() {
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "از اشتراک شما متشکرم!");
		setTimeout(function() {
			$("#validator-newsletter").addClass('hide');
		}, 4000)
	}

	function formErrorSub() {
		$(".newsletter-form").addClass("animated shake");
		setTimeout(function() {
			$(".newsletter-form").removeClass("animated shake");
		}, 1000)
	}

	function submitMSGSub(valid, msg) {
		if (valid) {
			var msgClasses = "validation-success";
		} else {
			var msgClasses = "validation-danger";
		}
		$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
	}
	$(".newsletter-form").ajaxChimp({
		url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",
		callback: callbackFunction
	});
	$('.accordion').find('.accordion-title').on('click', function() {
		$(this).toggleClass('active');
		$(this).next().slideToggle('fast');
		$('.accordion-content').not($(this).next()).slideUp('fast');
		$('.accordion-title').not($(this)).removeClass('active');
	});
	$('.odometer').appear(function(e) {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});
	$('.popup-youtube').magnificPopup({
		disableOn: 320,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
	$('select').niceSelect();

	function makeTimer() {
		var endTime = new Date("December 30, 2022 17:00:00 PDT");
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400);
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") {
			hours = "0" + hours;
		}
		if (minutes < "10") {
			minutes = "0" + minutes;
		}
		if (seconds < "10") {
			seconds = "0" + seconds;
		}
		$("#days").html(days + "<span>روز</span>");
		$("#hours").html(hours + "<span>ساعت</span>");
		$("#minutes").html(minutes + "<span>دقیقه</span>");
		$("#seconds").html(seconds + "<span>ثانیه</span>");
	}
	setInterval(function() {
		makeTimer();
	}, 0);
	$('.input-counter').each(function() {
		var spinner = jQuery(this),
			input = spinner.find('input[type="text"]'),
			btnUp = spinner.find('.plus-btn'),
			btnDown = spinner.find('.minus-btn'),
			min = input.attr('min'),
			max = input.attr('max');
		btnUp.on('click', function() {
			var oldValue = parseFloat(input.val());
			if (oldValue >= max) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue + 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});
		btnDown.on('click', function() {
			var oldValue = parseFloat(input.val());
			if (oldValue <= min) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue - 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});
	});
	if ($('.wow').length) {
		var wow = new WOW({
			mobile: false
		});
		wow.init();
	}
	$(window).on('scroll', function() {
		var scrolled = $(window).scrollTop();
		if (scrolled > 600) $('.go-top').addClass('active');
		if (scrolled < 600) $('.go-top').removeClass('active');
	});
	$('.go-top').on('click', function() {
		$("html, body").animate({
			scrollTop: "0"
		}, 500);
	});
	$(window).on('load', function() {
		$('.preloader-area').fadeOut();
	});
}(jQuery));
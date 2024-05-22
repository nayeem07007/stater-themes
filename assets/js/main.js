/** @format */

jQuery(function () {
	'use strict';

	//*============ parallaxie js ==============*/

	if ($('.parallaxie').length) {
		if ($(window).width() > 767) {
			$('.parallaxie').parallaxie({
				speed: 0.5,
			});
		}
	}

	//*============ background image js ==============*/
	$('[data-bg-img]').each(function () {
		var bg = $(this).data('bg-img');
		$(this).css({
			background: 'no-repeat center 0/cover url(' + bg + ')',
		});
	});

	//* Navbar Fixed
	function navbarFixedTwo() {
		if ($('.sticky_nav').length) {
			$(window).scroll(function () {
				var scroll = $(window).scrollTop();
				if (scroll) {
					$('.sticky_nav').addClass('navbar_fixed');
				} else {
					$('.sticky_nav').removeClass('navbar_fixed');
				}
			});
		}
	}
	navbarFixedTwo();

	if ($('.site-header').hasClass('site-header')) {
		var nav = $('.site-header');
		$(window).on('load resize', function () {
			var headerHeight = nav.outerHeight();
			nav.css('height', headerHeight).show();
		});
	}

	function Menu_js() {
		if ($('.submenu').length) {
			$('.submenu > .dropdown-toggle').click(function () {
				var location = $(this).attr('href');
				window.location.href = location;
				return false;
			});
		}
	}
	Menu_js();

	function menu_dropdown() {
		if ($(window).width() < 992) {
			$('.menu > li .mobile_dropdown_icon,.search_cart .shpping-cart').on(
				'click',
				function (event) {
					// $(this)
					// 	// .parents('.dropdown-menu')
					// 	.first()
					// 	.find('.open')
					// 	.addClass('open');
					// $(this).toggleClass('open');
					$(this).parent().find('.dropdown-menu').first().slideToggle(700);
					$(this)
						.parent()
						.find('.mobile_dropdown_icon')
						.first()
						.toggleClass('arrow_rotate');
					$(this).parent().siblings().find('.dropdown-menu').slideUp(700);
					$(this)
						.parent()
						.siblings()
						.find('.mobile_dropdown_icon')
						.removeClass('arrow_rotate');
				}
			);
		}
	}
	menu_dropdown();

	$('.search > a').on('click', function () {
		if ($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
		return false;
	});

	$('.navbar-toggler').on('click', function () {
		if ($('.navbar-toggler').hasClass('collapsed')) {
			$(this).removeClass('collapsed');
		} else {
			$(this).addClass('collapsed');
		}

		if ($('.navbar-collapse').not('show')) {
			$('.navbar-collapse').removeClass('show').slideToggle(700);
		} else {
			$('.navbar-collapse').addClass('show').slideUp(700);
		}
	});

	$(window).resize(function() {
		if (window.matchMedia("(max-width: 991px)").matches) {
			$('.drdt_navmenu li i').on('click', function(e){
				$(this).siblings('.sub-menu').slideToggle('slow');
				$(this).parents('li').siblings('li').find('.sub-menu').slideUp('slow');
                e.stopPropagation();
			});
		}
	}).trigger("resize");

	$(document).on('mouseenter', '.has-mega-menu', function(){
		// fulid menu
		if($(this).hasClass('fullwidth')){
			 $($(this).parents('.elementor-top-section')).addClass('megamenu_wrapper');
		}
		// Container width Menu
		if($(this).hasClass('contentwidth')){
			 $($(this).parents('.elementor-widget-container')).addClass('megamenu_wrapper');
		}
		// Content width menu
		if($(this).hasClass('menuwidth')){
			 $($(this).parents('.drdt_navmenu')).addClass('megamenu_wrapper');
		}
   }).on('mouseleave','.has-mega-menu', function(){
	   
		setTimeout(function(){
			 if($(this).hasClass('fullwidth')){
				  $($(this).parents('.elementor-top-section')).removeClass('megamenu_wrapper');
			 }
		}.bind(this), 300);
		
		setTimeout(function(){
			 if($(this).hasClass('contentwidth')){
				  $($(this).parents('.elementor-widget-container')).removeClass('megamenu_wrapper');
			 }
		}.bind(this), 300);
		
		setTimeout(function(){
			 if($(this).hasClass('menuwidth')){
				  $($(this).parents('.drdt_navmenu')).removeClass('megamenu_wrapper');
			 }
		}.bind(this), 300);
		
   });
});

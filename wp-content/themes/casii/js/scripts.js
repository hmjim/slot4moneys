jQuery(document).ready(function($) {

	$('#banner-more').click(function(event) {
		event.preventDefault();
		$('.banner .banner-item-more:nth-last-child(-n+5)').show();
		$(this).hide();
	});

	// Toogle
	$("#toggle").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("on");
	});

	// $(".similar-carousel").jCarouselLite({
	// 	btnNext: ".btn-vertical-next",
	// 	btnPrev: ".btn-vertical-prev",
	// 	vertical: true,
	// 	// auto: 8000,
	// 	speed: 1000,
	// 	visible: 5,
	// });

	// $('.similar-carousel').owlCarousel({
	// 	loop: true,
	// 	items: 1,
	// 	dots: true,
	// 	nav: true,
	// 	autoplay: true,
	// });

	$('.screen-carousel').owlCarousel({
		loop: true,
		autoplay: true,
		dots: true,
		responsive: {
			0 : {
				items: 1,
			},
			480 : {
				items: 2,
			},
			768 : {
				items: 3,
			}
		},
	});


	
});

jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.btn-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('btn-top-is-visible') : $back_to_top.removeClass('btn-top-is-visible btn-top-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('btn-top-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
			}, scroll_top_duration
		);
	});
	// $('.header .banner-item-more:eq(7) .banner-item-img img').attr("src","https://slot4moneyslots.nw.r.appspot.com/mostbet4.jpg");
	// $('.header .banner-item-more:eq(7) .banner-item-img img').css('min-height', '143px');

});
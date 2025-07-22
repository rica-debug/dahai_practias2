
// setTimeout(()=>{
// 	$("html,body").animate({
// 		scrollTop: 810
// 	}, 100);
// },200)

// 监听滚动
// var scroll_now = 0;
// var scroll_before = 0;
// jQuery(window).on("scroll", function (e) {
// 	scroll_now =jQuery(window).scrollTop();
// 	if (scroll_now > scroll_before) {
// 		 $('.header').stop().slideUp()
// 	} else if (scroll_now < scroll_before) {
// 		$('.header').stop().slideDown()
// 	}
// 	 scroll_before = scroll_now;
// });

$(document).scroll(function() {
	if($(window).scrollTop()>20){
		// $('.header').addClass('hasBg')
		$('.header2').addClass('hasBg')
	}else{
		// $('.header').removeClass('hasBg')
		$('.header2').removeClass('hasBg')
	}
});


$('#phone_search').click(function () {
	$('.pheader .search input').toggleClass('move')
})

$('.pheader .navbox').click(function () {
	$(this).toggleClass('activeBox')
	$('.menuList').stop().slideToggle();
})

$('.menuList .item a').click(function () {
	$(this).children('img').toggleClass('rotate');
	$(this).siblings('.types_top').stop().slideToggle();
	$(this).parents('.item').siblings().children('.types_top').stop().slideUp();
	$(this).parents('.item').siblings().find('img').removeClass('rotate');
})




jQuery(function($)
{
	$.scrollTo(0);
	
	$('#scrollMarch').click(function() { $.scrollTo($('#march'), 1000); });
	$('#scrollApril').click(function() { $.scrollTo($('#april'), 1500); });
	$('#scrollMay').click(function() { $.scrollTo($('#may'), 2000); });
	$('#scrollJune').click(function() { $.scrollTo($('#june'), 2000); });
	$('#scrollJuly').click(function() { $.scrollTo($('#july'), 2500); });
	$('#scrollAugust').click(function() { $.scrollTo($('#august'), 2500); });
	$('#scrollSeptember').click(function() { $.scrollTo($('#september'), 500); });
	$('#scrollOctober').click(function() { $.scrollTo($('#october'), 500); });
	$('#scrollNovember').click(function() { $.scrollTo($('#november'), 500); });
	$('#scrollDecember').click(function() { $.scrollTo($('#december'), 500); });
	
	$('.scrollUp').click(function() { $.scrollTo($('body'), 500); });
	
});

$(window).scroll(function() {
	if ($(this).scrollTop()>300) $('.scrollUp').fadeIn();
	else $('.scrollUp').fadeOut();
});
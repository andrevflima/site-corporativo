$(document).ready(function(){

	$('.read-right-bar').css('width', function() {
		return $(this).width();
	});

	$('.bxslider').bxSlider({
		pager: false,
		onSliderLoad: function() {
			$('.bxslider > li').each(function() {
				$(this).css('background-image', "url('" + $(this).data('bg') + "')");
			});
		}
	});

});
$(function(){

	$('#nav .nav_list li').hover(function(){
		$(this).find('ul').fadeIn(function(){
			$(this).find('li').hover(function(){
				$(this).css('background','#ddd');
			},function(){
				$(this).css('background','#ccc');
			})
		});
	},function(){
		$(this).find('ul').fadeOut();
	});
})



















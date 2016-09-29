$(function(){
	
	var parent = $('#content .serve_list');

	parent.find('dd').hover(function(){
		$(this).addClass('active');
		$(this).find('span').show();
		$(this).find('.suspend').fadeIn();
		$(this).find('.suspend li').hover(function(){
			$(this).css({'background-color':'#277fc2'})
		},function(){
			$(this).css({'background-color':'#fff'})
		})
	},function(){
		$(this).removeClass('active');
		$(this).find('span').hide();
		$(this).find('.suspend').fadeOut();
	});

})
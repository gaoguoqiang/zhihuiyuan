//侧边导航 课程主题
$(function(){
	//获取宽度隐藏
	var n = 0;
	var asideW = -$(".class_nav").outerWidth();
	$(".class_theme").css("left",asideW);
	n = 0;
	var Newasidew = asideW.toString();

	$('.class_theme_button').click(function(event){

		if(n===0){
			n=1;
			tabAnimate($('.class_theme'),'left','0',function(){
				n = 2;
			});
		}else if(n === 2){
		 	tabAnimate($('.class_theme'),'left',Newasidew,function(){
				n = 0;
			});
		};
		event.stopPropagation();
	});
	$(document).click(function(){
		if(n == 2){
			tabAnimate($('.class_theme'),'left',Newasidew,function(){
				n = 0;
			});

		}
	})

$(window).resize(function(){
	asideW = $(".class_nav").outerWidth();
})

})



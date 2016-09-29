
$(function(){

	// 左侧导航鼠标移入效果
	(function(){
		$('#nav .nav_side dl dt').hover(function(){
			$(this).css({'background':'#001c58'});
		},function(){
			$(this).css({'background':'#323333'});
		});
		$('#nav .nav_side dl dd').hover(function(){
			$(this).css({'background':'#277fc2'});
			$(this).find('.nav_side_info').stop(true,true).fadeIn().hover(function(){
				// $(this).css({'background':'rgba(204,204,204,1)','filter':'alpha(opacity=100)'});
				$(this).find('li').hover(function(){
					$(this).css({'background':'#277fc2'});
					$(this).find('a').css({'color':'#fff'});
				},function(){
					$(this).css({'background':'#ccc'});
					$(this).find('a').css({'color':'#000'});
				})
			},function(){
				// $(this).css({'background':'rgba(255,255,255,0.7)','filter':'alpha(opacity=70)'});
				$(this).find('li').css({'background':'#ccc'});
			});
		},function(){
			$(this).css({'background':'#4a4a4a'});
			$(this).find('.nav_side_info').stop(true,true).fadeOut();
		});
	})();
	//banner轮播
	(function(){
		var aPicWidth = $('#content .banner_pic_list li').width();
		var aPics = $('#content .banner_pic_list li');
		var oPicList = $('#content .banner_pic_list');
		var aPicBtn = $('#content .banner_pic_nav span');
		var num = 0;
		var timer = null;
		$(window).resize(function(){
			aPicWidth = $('#content .banner_pic_list li').width();
			autoPlay();
		})
		autoPlay();
		function autoPlay(){
			clearInterval(timer);
			timer = setInterval(function(){
				num ++;
				if(num >= aPics.length){
					num = 0;
					oPicList.css({'left':0})
				}
				autoPic(-aPicWidth*num);
				aPicBtn.removeClass('active').eq(num).addClass('active');
			},3000);
		}
		//移入暂停，点击切换
		$('#content .banner_pic').hover(function(){
			clearInterval(timer);
			aPicBtn.each(function(index){
				$(this).click(function(){
					aPicBtn.removeClass('active');
					$(this).addClass('active');
					oPicList.css({'left':-aPicWidth*index})
					num = index;
				})
			});
		},function(){
			autoPlay();
		});
		function autoPic(target){
			oPicList.animate({left:target},1000);
		}
	})();
	//两化无缝轮播
	(function(){
		var prey = $('.pic_info').eq(0).find('.prey');
		var next = $('.pic_info').eq(0).find('.next');
		var aPicList = $('.pic_info').eq(0).find('.pic_list');
		var iW = aPicList.width();
		prey.click(function(){
			animatePic();
		});
		next.click(function(){
			animatePic();
		});
		function animatePic(){
			if(aPicList.position().left == 0){
				aPicList.stop(true,true).animate({left:-iW/2},2000);
			}else{
				aPicList.stop(true,true).animate({left:0},2000);
			}
		}
	})();
	//旋转木马
	(function(){
		Carousel.init($('.J_Poster'));
	})();
	//图片移入放大
	(function(){

		$('.policy p a').each(function(index){
			$(this).click(function(){
				$('.policy p a').removeClass('active');
				$(this).addClass('active');
				$('.policy_pic').css({'opacity':'0','filter':'alpha(opacity=0)','z-index':'10'});
				$('.policy_pic').eq(index).css({'opacity':'1','filter':'alpha(opacity=100)','z-index':'11'});
			})
		});
		$('.association p a').each(function(index){
			$(this).click(function(){
				$('.association p a').removeClass('active');
				$(this).addClass('active');
				$('.association_pic').css({'opacity':'0','filter':'alpha(opacity=0)','z-index':'10'});
				$('.association_pic').eq(index).css({'opacity':'1','filter':'alpha(opacity=100)','z-index':'11'});
			})
		});
		$('.institution p a').each(function(index){
			$(this).click(function(){
				$('.institution p a').removeClass('active');
				$(this).addClass('active');
				$('.institution_pic').css({'opacity':'0','filter':'alpha(opacity=0)','z-index':'10'});
				$('.institution_pic').eq(index).css({'opacity':'1','filter':'alpha(opacity=100)','z-index':'11'});
			})
		});
		$('.twofuse p a').each(function(index){
			$(this).click(function(){
				$('.twofuse p a').removeClass('active');
				$(this).addClass('active');
				$('.twofuse_pic').css({'opacity':'0','filter':'alpha(opacity=0)','z-index':'10'});
				$('.twofuse_pic').eq(index).css({'opacity':'1','filter':'alpha(opacity=100)','z-index':'11'});
			})
		});
		$('.other p a').each(function(index){
			$(this).click(function(){
				$('.other p a').removeClass('active');
				$(this).addClass('active');
				$('.other_pic').css({'opacity':'0','filter':'alpha(opacity=0)','z-index':'10'});
				$('.other_pic').eq(index).css({'opacity':'1','filter':'alpha(opacity=100)','z-index':'11'});
			})
		});

		$('.pic img').each(function(){
			picBlowUp($(this));

		});
	})();
	//图片延迟加载
	(function(){
		var img = $('.pic_info img');
		picLoad(img);
		$(window).scroll(function(){
			picLoad(img)
		});
	})();
})





































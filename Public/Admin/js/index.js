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



















$(function(){
	//设置页面高度
	(function(){
		var height = $(window).height()-$('#header').height()-$('#contain .contain_nav').height();
		$('#contain .contain_side').css('height',height-30);
		$('#contain .contain_main').css('height',height-50);
	}());
	// 修改分类页面
	(function(){
		//编辑/删除移入效果
		$('.alter_classify_form span').hover(function(){
			$(this).addClass('active');
		},function(){
			$(this).removeClass('active');
		});
		// 编辑删除点击效果
		$('.alter_classify_form span').click(function(){
			var val = $(this).text();
			//var inputVal = $(this).siblings('.text').val();
			if(val == '编辑'){
				$(this).text('保存');
				$(this).siblings('.text').show();
				$(this).siblings('.classify_name').hide();
				$(this).next().text('取消');
			}else if(val == '取消'){
				$(this).text('删除');
				$(this).siblings('.text').hide();
				$(this).siblings('.classify_name').show();
				$(this).prev().text('编辑');
			}else if(val == '保存'){
				var inputVal = $(this).siblings('.text').val();
				$(this).text('编辑');
				$(this).siblings('.text').hide();
				$(this).siblings('.classify_name').show().text(inputVal);
				$(this).next().text('删除');
			}
		});
		// 翻页按钮移入效果
		$('.page_btn span').hover(function(){
			$(this).addClass('active');
		},function(){
			$(this).removeClass('active');
		})
	}());
	// 用户管理页面
	(function(){
		$('.users_info_form span').hover(function(){
			$(this).addClass('active');
		},function(){
			$(this).removeClass('active');
		});
		$('.users_info_form span').click (function(){
			var val = $(this).text();
			console.log(val)
			if(val == '修改'){
				$(this).siblings('.user_info').hide();
				$(this).siblings('.user_text').show();
				$(this).siblings('.cancel').show();
				$(this).text('保存');
			}else if(val == '保存'){
				var valNow = $(this).siblings('.user_text').val();
				$(this).siblings('.user_info').text(valNow).show();
				$(this).siblings('.user_text').hide();
				$(this).siblings('.cancel').hide();
				$(this).text('修改');
			}else if(val == '取消'){
				$(this).siblings('.user_info').show();
				$(this).siblings('.user_text').hide();
				$(this).prev().text('修改').show();
				$(this).hide();
			}
		});
	}())
})









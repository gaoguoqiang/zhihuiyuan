
$(function(){
	var parent = $('#content .reg_form');
	var content = document.getElementById('content');
    var fileBtn = content.getElementsByTagName('input')[0];
    fileBtn.onchange = function(){
        previewImage(this);
    }

	userVerify(parent);
	emailVerify(parent);
	phoneVerify(parent);
	passwordVerify(parent);
	passwordCheckVerify(parent);
	picVerify(parent);
	
	// //图片格式验证
	// function picVerify(parent){
	// 	parent.find('.file_pic').change(function(){
	// 		var typeFile = $(this).prop('files')[0].type.split('/');
	// 		if(typeFile[0] != 'image'){
	// 			$('#content .error_file').show();
	// 		}else {
	// 			$('#content .error_file').hide();
	// 		}
	// 	})
	// }

	// // 用户名验证
	// function userVerify(parent){
	// 	var reg = /^([\u4e00-\u9fa5]){2,5}$/;
	// 	parent.find('.text[name="user"]').focus(function(){
	// 		if($(this).val() == '姓名：请输入真实姓名'){
	// 			$(this).val('');
	// 			$(this).siblings('.info_user').show();		
	// 		}
	// 	});
	// 	parent.find('.text[name="user"]').blur(function(){
	// 		if($(this).val() == '' || !reg.test($(this).val())){
	// 			$(this).siblings('.info_user').hide().siblings('.error_user').show();
	// 		}else {
	// 			$(this).siblings('.info_user').hide().siblings('.error_user').hide();
	// 		}
	// 	});
	// }
	// // 邮箱验证
	// function emailVerify(parent){
	// 	var reg = /^[\w\-\.]+\@[\w\-]+(\.[a-zA-Z]{2,4}){1,2}$/;
	// 	parent.find('.text[name="email"]').focus(function(){
	// 		if($(this).val() == '邮箱：请输入您的邮箱'){
	// 			$(this).val('');
	// 			$(this).siblings('.info_email').show();		
	// 		}
	// 	});
	// 	parent.find('.text[name="email"]').blur(function(){
	// 		if($(this).val() == '' || !reg.test($(this).val())){
	// 			$(this).siblings('.info_email').hide().siblings('.error_email').show();
	// 		}else {
	// 			$(this).siblings('.info_email').hide().siblings('.error_email').hide();
	// 		}
	// 	});
	// }
	// // 手机号验证
	// function phoneVerify(parent){
	// 	var reg = /^1[3|4|5|7|8]\d{9}$/;
	// 	parent.find('.text[name="phone"]').focus(function(){
	// 		if($(this).val() == '手机号码：请输入您的手机号码'){
	// 			$(this).val('');
	// 			$(this).siblings('.info_phone').show();		
	// 		}
	// 	});
	// 	parent.find('.text[name="phone"]').blur(function(){
	// 		if($(this).val() == '' || !reg.test($(this).val())){
	// 			$(this).siblings('.info_phone').hide().siblings('.error_phone').show();
	// 		}else {
	// 			$(this).siblings('.info_phone').hide().siblings('.error_phone').hide();
	// 		}
	// 	});
	// }
	// // 密码验证
	// function passwordVerify(parent){
	// 	var reg = /^[a-zA-Z0-9]{6,15}$/;
	// 	parent.find('.text[name="password"]').focus(function(){
	// 		if($(this).val() == '密码：'){
	// 			$(this).val('');
	// 			$(this).attr('type','password');
	// 			$(this).siblings('.info_password').show();		
	// 		}
	// 	});
	// 	parent.find('.text[name="password"]').blur(function(){
	// 		if($(this).val() == '' || !reg.test($(this).val())){
	// 			$(this).siblings('.info_password').hide().siblings('.error_password').show();
	// 		}else {
	// 			$(this).siblings('.info_password').hide().siblings('.error_password').hide();
	// 		}
	// 	});
	// }
	// // 密码确认验证
	// function passwordCheckVerify(parent){
	// 	parent.find('.text[name="password_check"]').focus(function(){
	// 		if($(this).val() == '密码确认：'){
	// 			$(this).val('');
	// 			$(this).attr('type','password');
	// 			$(this).siblings('.info_password_check').show();		
	// 		}
	// 	});
	// 	parent.find('.text[name="password_check"]').blur(function(){
	// 		if($(this).val() != parent.find('.text[name="password"]').val() || $(this).val() == ''){
	// 			$(this).siblings('.info_password_check').hide().siblings('.error_password_check').show();
	// 		}else {
	// 			$(this).siblings('.info_password_check').hide().siblings('.error_password_check').hide();
	// 		}
	// 	});
	// }
});




























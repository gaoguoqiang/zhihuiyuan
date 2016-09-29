
//头像格式判断
function picVerify(parent){
	parent.find('.file_pic').change(function(){
		$('#content .error_size_file').hide();
		$('#content .error_file').hide();
		//console.log($(this).prop("files")[0].size);
		var types = ['jpg','jpeg','gif','png','bmp','JPG','JPEG','GIF','PNG','BMP'];
		var str = $(this).val().split('.');
		for(var i = 0; i < types.length; i++){
			if(str[str.length-1] == types[i]){
		 		$('#content .error_file').hide();
		 		//头像大小判断
		 		
		 		if ($(this).prop("files")[0].size/1024>1024) {
		 			$('#content .error_size_file').show();
		 		}

		 		return;
			}
			$('#content .error_file').show();
		} 
		

	})
}



//显示头像

function previewImage(file){
	var MAXWIDTH  = 0; 
	var MAXHEIGHT = 0;
	var div = document.getElementById('head_pic');
	if(div.style.width){
		var MAXWIDTH  = div.offsetWidth; 
		var MAXHEIGHT = div.offsetHeight;
	}
	if (file.files && file.files[0]){
		div.innerHTML ='<img id=imghead>';
		var img = document.getElementById('imghead');
		var reader = new FileReader();
		reader.onload = function(evt){img.src = evt.target.result;}
		reader.readAsDataURL(file.files[0]);
	}else{
		var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
		file.select();
		file.blur();
		var src = document.selection.createRange().text;
		div.innerHTML = '<img id=imghead>';
		var img = document.getElementById('imghead');
		img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
		div.innerHTML = "<img id=divhead style='width:100%;height:100%;"+sFilter+src+"\"'></img>";
	}
}
// 用户名验证
function userVerify(parent){
	// 2-5个汉字字符
	var reg = /^([\u4e00-\u9fa5]){2,5}$/;
	parent.find('.text[name="user"]').focus(function(){
		if($(this).val() == '姓名：请输入真实姓名'){
			$(this).val('');
			$(this).siblings('.info_user').show();
		}
	});
	parent.find('.text[name="user"]').blur(function(){
		if($(this).val() == '' || !reg.test($(this).val())){
			$(this).siblings('.info_user').hide().siblings('.error_user').show();
		}else {
			$(this).siblings('.info_user').hide().siblings('.error_user').hide();
		}
		if ($(this).val() == '') {
			$(this).val('姓名：请输入真实姓名');
		}
	});
}
// 邮箱验证
function emailVerify(parent){
	var reg = /^[\w\-\.]+\@[\w\-]+(\.[a-zA-Z]{2,4}){1,2}$/;
	parent.find('.text[name="email"]').focus(function(){
		if($(this).val() == '邮箱：'){
			$(this).val('');	
		}
	});
	parent.find('.text[name="email"]').blur(function(){
		if($(this).val() == '' || !reg.test($(this).val())){
			$(this).siblings('.error_email').show();
		}else {
			$(this).siblings('.error_email').hide();
		}
		if ($(this).val() == '') {
			$(this).val('邮箱：');
		}
	});
}
// 手机号验证
function phoneVerify(parent){
	var reg = /^1[3|4|5|7|8]\d{9}$/;
	parent.find('.text[name="phone"]').focus(function(){
		if($(this).val() == '联系方式：'){
			$(this).val('');
			//$(this).siblings('.info_phone').show();		
		}
	});
	parent.find('.text[name="phone"]').blur(function(){
		if($(this).val() == '' || !reg.test($(this).val())){
			$(this).siblings('.error_phone').show();
		}else {
			$(this).siblings('.error_phone').hide();
		}
		if ($(this).val() == '') {
			$(this).val('联系方式：');
		}
	});
}
// 密码验证
function passwordVerify(parent){
	var reg = /^[a-zA-Z0-9]{6,15}$/;
	parent.find('.text[name="password"]').focus(function(){
		if($(this).val() == '密码：'){
			$(this).val('');
			$(this).attr('type','password');
			$(this).siblings('.info_password').show();		
		}
	});
	parent.find('.text[name="password"]').blur(function(){
		if($(this).val() == '' || !reg.test($(this).val())){
			$(this).siblings('.info_password').hide().siblings('.error_password').show();
		}else {
			$(this).siblings('.info_password').hide().siblings('.error_password').hide();
		}
		if ($(this).val() == '') {
			$(this).val('密码：');
			$(this).attr('type','text');
		}
	});
}
// 密码确认验证
function passwordCheckVerify(parent){
	parent.find('.text[name="password_check"]').focus(function(){
		if($(this).val() == '密码确认：'){
			$(this).val('');
			$(this).attr('type','password');
			$(this).siblings('.info_password_check').show();		
		}
	});
	parent.find('.text[name="password_check"]').blur(function(){
		if($(this).val() != parent.find('.text[name="password"]').val() || $(this).val() == ''){
			$(this).siblings('.info_password_check').hide().siblings('.error_password_check').show();
		}else {
			$(this).siblings('.info_password_check').hide().siblings('.error_password_check').hide();
		}
		if ($(this).val() == '') {
			$(this).val('密码确认：');
			$(this).attr('type','text');
		}
	});
}
// 点击表单value为空
function listnull(parent){
	var street = parent.find('.text[name="dist"]');
	var begood = parent.find('.text[name="field"]');
	var video = parent.find('.text[name="video"]');
	var area = parent.find('.city_t[name="city"]');

	street.focus(function(){
		if ($(this).val() == '社区街道：') {
			$(this).val('');
		}
	});
	begood.focus(function(){
		if ($(this).val() == '擅长行业：') {
			$(this).val('');
		}
	});
	video.focus(function(){
		if ($(this).val() == '上传视频：') {
			$(this).val('');
		}
	});
	area.focus(function(){
		if ($(this).val() == '区/县：') {
			$(this).val('');
		}
	});

	street.blur(function(){
		if ($(this).val() == '') {
			$(this).val('社区街道：');
		}
	});
	begood.blur(function(){
		if ($(this).val() == '') {
			$(this).val('擅长行业：');
		}
	});
	video.blur(function(){
		if ($(this).val() == '') {
			$(this).val('上传视频：');
		}
	});
	area.blur(function(){
		if ($(this).val() == '') {
			$(this).val('区/县：');
		}
	});
}
// 验证是否所有表单填写完整且填写正确，否则不提交
// 头像验证返回
function imgCheck(parent){
	if ($('.file_pic').prop("files")[0].size/1024>1024) {
		return false;
	}else{
		return true;
	}
}
// 用户名验证返回
function userCheck(parent){
	var reg = /^([\u4e00-\u9fa5]){2,5}$/;
	var obj = parent.find('.text[name="user"]');

	if(obj.val() == '' || !reg.test(obj.val())){
		return false;
	}else{
		return true;
	}
}
// 邮箱验证返回
function emailCheck(parent){
	var reg = /^[\w\-\.]+\@[\w\-]+(\.[a-zA-Z]{2,4}){1,2}$/;
	var obj = parent.find('.text[name="email"]');

	if(obj.val() == '' || !reg.test(obj.val())){
		return false;
	}else{
		return true;
	}
}
// 手机号验证返回
function phoneCheck(parent){
	var reg = /^1[3|4|5|7|8]\d{9}$/;
	var obj = parent.find('.text[name="phone"]');

	if(obj.val() == '' || !reg.test(obj.val())){
		return false;
	}else{
		return true;
	}
}
// 密码验证返回
function passwordCheck(parent){
	var reg = /^[a-zA-Z0-9]{6,15}$/;
	var obj = parent.find('.text[name="password"]');

	if(obj.val() == '' || !reg.test(obj.val())){
		return false;
	}else{
		return true;
	}
}
// 密码确认验证返回
function notpasswordCheck(parent){
	var obj = parent.find('.text[name="password_check"]');

	if(obj.val() != parent.find('.text[name="password"]').val() || obj.val() == ''){
		return false;
	}else{
		return true;
	}
}
// 标题验证返回
function titlecheck(parent){
	var reg = /^\s+$/;
	var obj = parent.find('input[name="title"]');

	if(reg.test(obj.val()) || obj.val() == '' || obj.val() == '标题'){
		return false;
	}else{
		return true;
	}
}
// 内容验证返回
function contentcheck(parent){
	var reg = /^\s+$/;
	var obj = parent.find('textarea[name="content"]');

	if(reg.test(obj.val()) || obj.val() == '' || obj.val() == '内容'){
		return false;
	}else{
		return true;
	}
}
// 验证返回值
function checksubmit(obj){
	// console.log(userCheck(parent))
	// 注册页面验证
		// 上传头像以外都为必填项(无邮箱)
	if(obj == 'reg'){
		if(imgCheck($('#content .reg_form')) && userCheck($('#content .reg_form')) && emailCheck($('#content .reg_form')) && phoneCheck($('#content .reg_form')) && passwordCheck($('#content .reg_form')) && notpasswordCheck($('#content .reg_form'))){
			return true;		
		}else{
			return false;
		}
	}else if(obj == 'course'){// 报名提交页面验证
		if(userCheck($('.apply_form')) && emailCheck($('.apply_form')) && phoneCheck($('.apply_form'))){
			// 非必填项提交时清除默认值
			if($('.apply_form').find('input[name="company"]').val() == '公司名称：'){
				$('.apply_form').find('input[name="company"]').val('');
			}
			if($('.apply_form').find('input[name="referrals"]').val() == '推荐人：'){
				$('.apply_form').find('input[name="referrals"]').val('');
			}
			return true;
		}else{
			return false;
		}
	}else if(obj == 'train'){
		if(titlecheck($('.issue')) && contentcheck($('.issue'))){
			return true;
		}else{
			return false;
		}
	}
		
}
//视频格式验证
function videoCheckVerify(parent){
	parent.find('.file_video').change(function(){
		var typeFile = $(this).prop('files')[0].type.split('/');
		if(typeFile[0] != 'video' || typeFile[1] != 'mp4'){
			$('#content .error_file_video').show();
		}else {
			$('#content .error_file_video').hide();
		}
	});
}
//个人简介字数限制 && 文章内容字数限制
function introCheckVerify(parent){
	$('.intro').keyup(function(){
		var num = 300 - $(this).val().length;
		if(num >= 0){
			$(this).siblings('.ps').eq(0).show().find('.num').html(num);
			$(this).siblings('.ps').eq(1).hide();
		}else{
			$(this).siblings('.ps').eq(0).hide();
			$(this).siblings('.ps').eq(1).show().find('.num').html(-num);
		}
	});



	parent.find('.intro[name="intro"]').focus(function(){
		$(".value").hide();
	});
	parent.find('.intro[name="intro"]').blur(function(){
		if ($(this).val() == '') {
			$(".value").show();
		}
	});

}
// 单位————行业
function companyCheckVerify(parent){
	var reg = /^\s+$/;
	// 获取输入框中旧的值
	var oldVal = {};
	parent.find('input[name="company"]').focus(function(){
		if ($(this).val() == '公司名称：') {
			$(this).val('');
		}
	});
	parent.find('input[name="company"]').blur(function(){
		if ($(this).val() == '') {
			$(this).val('公司名称：');
		}
	});
	parent.find('input[name="field"]').focus(function(){
		oldVal.filed = $(this).val();
		$(this).val('');
	});
	parent.find('input[name="field"]').blur(function(){
		if($(this).val() == '' || reg.test($(this).val())){
			$(this).val(oldVal.filed);
		}
	});
	parent.find('input[name="technology"]').focus(function(){
		oldVal.technology = $(this).val();
		$(this).val('');
	});
	parent.find('input[name="technology"]').blur(function(){
		if($(this).val() == '' || reg.test($(this).val())){
			$(this).val(oldVal.technology);
		}
	});
}
// 推荐人验证
function referralsCheckVerify(parent) {
	var reg = /^\s+$/;
	parent.find('input[name="referrals"]').focus(function(){
		$(this).val('');
	});
	parent.find('input[name="referrals"]').blur(function(){
		if ($(this).val() == '') {
			$(this).val('推荐人：');
		}
	});
}









































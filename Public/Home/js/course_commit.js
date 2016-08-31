$(function(){

	var parent = $('.apply_form');
	//用户名验证
	userVerify(parent);
	// 邮箱验证
	emailVerify(parent);
	// 手机号码验证
	phoneVerify(parent);
	// 公司名称验证
	companyCheckVerify(parent);
	//推荐人验证
	referralsCheckVerify(parent)
	//
	picVerify(parent);

	parent.find('input[name="submit"]').click(function(){
		if(parent.find('input[name="company"]').val() == '公司名称'){
			parent.find('input[name="company"]').val('');
		}
		if(parent.find('input[name="referrals"]').val() == '推荐人'){
			parent.find('input[name="referrals"]').val('');
		}
	});








});

























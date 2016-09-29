
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


});




























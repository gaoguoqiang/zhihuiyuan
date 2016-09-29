
//头像格式判断
function picVerify(parent){
	parent.find('.file_pic').change(function(){
		
		var types = ['jpg','gif','png','bmp','JPG','GIF','PNG','BMP'];
		var str = $(this).val().split('.');
		for(var i = 0; i < types.length; i++){
			if(str[str.length-1] == types[i]){
		 		$('#content .error_file').hide();
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
function headPic(){
	var content = document.getElementById('content');
    var fileBtn = content.getElementsByTagName('input')[0];
    fileBtn.onchange = function(){
        previewImage(this);
    }
};








































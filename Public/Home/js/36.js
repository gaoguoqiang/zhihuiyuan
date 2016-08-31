

$(function(){
	var aLength = $('#content .page_nav a').length;
	var val = {
		one : "十大中心"
	};
	if(aLength <= 2){
		$.ajax({
			type : 'post',
			url: ThinkPHP['ROOT']+'/Index/commitList1',
			success: function(data){
				console.log(data)
			}
		})
	}
})







































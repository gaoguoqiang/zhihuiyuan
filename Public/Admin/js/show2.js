$(function(){

	$('#xnews').change(function(){
		$.ajax({
			url:ThinkPHP['MODULE']+'/News/show2',
			type:'POST',
			data:{
				sid:$('#xnews').val(),
			},
			success:function(data,response,status){
				$('.xnews').remove();
				$('.table').append(data);
				$.ajax({
					url:ThinkPHP['MODULE']+'/News/sShow',
					type:'POST',
					data:{
						id:$('#xnews').val(),
					},
					success:function(data){
						ue.setContent(data);
						headPic();
					}
				});
			}

		});
	});


	/*$('#xnews').on('change',function(){
		alert($('#xnews').val());
		$.ajax({
			url:ThinkPHP['MODULE']+'/News/sShow',
			type:'POST',
			data:{
				id:$('#x').val(),
			},
			success:function(data){
				ue.setContent(data);
			}
		});
	});		*/


});








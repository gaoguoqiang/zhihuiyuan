$(function(){

	$('#xnews option').on('click',function(){
		$.ajax({
			url:ThinkPHP['MODULE']+'/News/show1',
			type:'POST',
			data:{
				sid:$('#xnews').val(),
			},
			success:function(data,response,status){
				$('.xnews').remove();
				$('#x').append(data);
				$('#x option').on('click',function(){
					$('#td input').val($(this).html());
				});
			}
		});
	});


	$('#x').on('change',function(){
		$.ajax({
			url:ThinkPHP['MODULE']+'/News/show1',
			type:'POST',
			data:{
				id:$('#x').val(),
			},
			success:function(data){
				editor.html(data);
			}
		});
	});		


});








$(function(){

	$('#xnews').change(function(){
		$.ajax({
			url:ThinkPHP['MODULE']+'/News/show',
			type:'POST',
			data:{
				sid:$('#xnews').val(),
			},
			success:function(data,response,status){
				$('.xnews').remove();
				$('#x').append(data);
				$('#x').change(function(){
					var title = $(this).find($('option[value='+$(this).val()+']')).html();
					$('#td input').val(title);
				});
			}
		});
	})
	


	$('#x').on('change',function(){
		$.ajax({
			url:ThinkPHP['MODULE']+'/News/show',
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







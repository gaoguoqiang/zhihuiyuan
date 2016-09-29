var showContent = {
	ajax : function(urls,index,fn){
		$.ajax({
			url:"data/"+urls+".json",
			success:function(data){
				var str = "";
				for(var i in data){
						str += "<li><p>"+data[i].title+"</p></li>";
					};
				$('.article_list ul').html(str);
				if(data[index].content){
					var str2 = "";
					for(var i in data[index].content){
						str2 += "<p>"+data[index].content[i]+"</p>";
					};
					$('.article_main').html(str2);
					if(data[index].style){
						for(var i in data[index].style){
							$('.article_main p').css(data[index].style)
						};
					}

				}else if(data[index].img){
					var str2 = "";
					for(var i in data[index].img){
						str2 += "<img src=\""+data[index].img[i]+"\"/>";
					};
					$('.article_main').html(str2);

				};
				if(fn){
					fn(urls);
				};
			}
		});
	},
	tab : function(urls){
		$('.article_list ul li').each(function(index){
			$(this).click(function(){
				showContent.ajax(urls,index,showContent.tab)
			});
		});
	}
};
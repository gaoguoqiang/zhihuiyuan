$(function(){

(function(){
	var windowHeight = document.documentElement.clientHeight;
	var headerHeight = $("header").height();
	var bottomHeight = $(".bottom_bar").height();
	var NewHeight = windowHeight-headerHeight-bottomHeight;

	$(".menu").css({"height":NewHeight,"overflow-y":"scroll"});
	$(window).resize(function(){
		windowHeight = document.documentElement.clientHeight;
	    headerHeight = $("header").height();
	    bottomHeight = $(".bottom_bar").height();
	    NewHeight = windowHeight-headerHeight-bottomHeight;
	    $(".menu").css({"height":NewHeight,"overflow-y":"scroll"});
	})
})();

 	var Nheight = $("nav .menu_2").outerHeight();    //获取子列表高度
	var  height = '';
	var i = {}
	var n = 0;
	//按钮点击下拉菜单显示隐藏
	$('.button').click(function(event){
		if(n === 0){
			$('.menu').css("display","block");
			n=1;
			tabAnimate($('.menu_li'),'margin-left','0',function(){
				n = 2;
			});
		}else if(n === 2){
			$('.menu_li ul').css("height","0");
			for(var k in i){
				i[k] = 0;
			}
		 	tabAnimate($('.menu_li'),'margin-left','-12.875rem',function(){
				n = 0;
				$('.menu').css("display","none");
			});

		};
		event.stopPropagation();
	});
	//点击窗口下拉菜单导航隐藏
	$(document).click(function(){
		if(n == 2){
			n = 0;
			tabAnimate($('.menu_li'),'margin-left','-12.875rem');
		}
	})


	 $(".menu_li").each(function(index){

	 	i[index] = 0;

	 	$(this).click(function(event){

	 		height = $(this).find($('ul li')).length*Nheight+'px';
	 		if(i[index]===0){
	 			for(k in i){
	 				i[k] = 0;
	 			}
	 			$(".menu_li").find($('ul')).css({"height":"0"});
				i[index]=1;

				tabAnimate($(this).find($('ul')),'height',height,function(){
					i[index] = 2;
				});
			}else if(i[index] === 2){
			 	$(this).find($('ul')).css({"height":"0"});
			 	i[index] = 0;
			};
			event.stopPropagation();
	 	})
	 	$(document).click(function(){
	 		$('.menu_li').each(function(index){
	 			// $(".menu").find($('.menu_li')).css({"margin-left":"-6.25rem"});
	 			// n = 0;
	 			$(this).find($('ul')).css({"height":"0"});
	 			i[index] = 0;
	 		})

	 	})
	 })
});



//动画
function tabAnimate(obj,attr,target,endFn){
	var timer = null;											//定时器开关，用来检测动画是否执行完毕
	var _target = 0;
	if(target.indexOf('rem') >= 0){
		_target = parseFloat(target)*16;
	}else{
		_target = parseInt(target);
	}
	clearInterval(obj.timer);
	var index = 0;												//操纵元素的下标
	obj.timer = setInterval(function(){
		auto(obj.eq(index));
		index++;
		if(index >= obj.length){
			clearInterval(obj.timer);
		};
	},100);
	function auto(obj){
		var style = {};
		style[attr] =  _target;
		obj.animate(style,500);
	};
	timer = setInterval(function(){
		var val = 0;		//当最后一个元素执行完毕后执行回调函数
		if (parseInt(target) == target) {
			val = parseInt(obj.eq(obj.length-1).css(attr));
			if(val == _target){
				clearInterval(timer);
				endFn && endFn();
			};
		}else{
			val = parseFloat(obj.eq(obj.length-1).css(attr));
			if(val == _target){
				clearInterval(timer);
				endFn && endFn();
			};
		}

	},50);
}


//联系客服颜色变换
function loada (){
	var oIn = document.getElementById("imgid1");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;

    var oInp = document.getElementById('imgid1');
    switch(event.type){
            case "touchstart":
            oInp.style.color="#19264a";
            break;
            case "touchend":
            oInp.style.color="#dedfe0";
        }
    }
}
//地图定位颜色变换
function loadb (){
	var oIn = document.getElementById("imgid2");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;

    var oInp = document.getElementById('imgid2');
    switch(event.type){
            case "touchstart":
            oInp.style.color="#19264a";
            break;
            case "touchend":
            oInp.style.color="#dedfe0";
        }
    }
}
//登录注册颜色变换
function loadc (){
	var oIn = document.getElementById("imgid3");

	oIn.addEventListener('touchstart',touch,false);
	oIn.addEventListener('touchend',touch,false);


	function touch(event){
	var event = event || window.event;

    var oInp = document.getElementById('imgid3');
    switch(event.type){
            case "touchstart":
            oInp.style.color="#19264a";
            break;
            case "touchend":
            oInp.style.color="#dedfe0";
        }
    }
}

window.addEventListener('load',loada,false);
window.addEventListener('load',loadb,false);
window.addEventListener('load',loadc,false);

//联系客服菜单显示隐藏
$(function(){
	$("#imgid1").click(function(){
		$('#qq_select').toggle();
	})
})



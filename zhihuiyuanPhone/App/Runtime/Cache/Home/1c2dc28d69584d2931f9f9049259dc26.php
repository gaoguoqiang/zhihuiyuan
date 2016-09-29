<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />


	<title>地图定位</title>
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/map.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/font-awesome.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/swiper.min.css">

	<script src="/zhihuiyuanPhone/Public/Home/js/jquery.js" type="text/javascript"></script>
	<script src="/zhihuiyuanPhone/Public/Home/js/index.js" type="text/javascript"></script>


</head>
<body>



	<header>
		<div class="button">
			<img src="/zhihuiyuanPhone/Public/Home/img/button.png" alt="">
		</div>
		<nav class="menu">
			<ul class="menu_1">
			<?php echo ($content2); ?>
			</ul>
		</nav>
		<a href="/zhihuiyuanPhone/index.html">
		    <div class="top">
			<div class="logo">
				<img src="/zhihuiyuanPhone/Public/Home/img/logo.png" alt="">
			</div>
			<div class="word">
				<img src="/zhihuiyuanPhone/Public/Home/img/word.png" alt="">
			</div>
		    </div>
	    	</a>
	</header>

	<main>
	<div class="title">
		<h1>地图定位</h1>
	</div>

	<div class="map">
		<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=d3954d76df90df19b9d8f2b75af533d0"></script>
     	<div class="main_right">
        	<div id="container">

         	</div>
      	</div>
	</div>

	<div class="swiper-container" style="position:relative;z-index:888;">
	    <div class="swiper-wrapper">
			<div class="map_word swiper-slide">
				<p>智慧源战略发展集群运营总部</p>
				<p>联系电话：010-5629-6452</p>
				<p>地址：北京万世名流酒店会议楼五层</p>
				<p>邮箱：jqhmjd@163.com</p>
				<p>工作时间：上午9:00 - 12:00</p>
				<p>下午1:00 - 6:00</p>
			</div>
			<div class="map_word swiper-slide">
				<p>厦门智慧源战略发展集群运营分部</p>
				<p>地址：厦门市湖里区新丰路178号</p>
				<p>工作时间：上午9:00 - 12:00</p>
				<p>下午1:00 - 6:00</p>
			</div>

			<div class="map_word swiper-slide">
				<p>深圳智慧源战略发展集群运营分部</p>
				<p>地址：深圳市福田区红荔路1001号银盛大厦（共青团市委二楼）</p>
				<p>工作时间：上午9:00 - 12:00</p>
				<p>下午1:00 - 6:00</p>
			</div>
		</div>
	</div>

	</main>



	<aside class="bottom_bar">
		<ul><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2994985924&site=qq&menu=yes">

			<li id="imgid1">
				<i class="fa fa-qq fa-2x"></i>
				<span>联系客服</span>
			</li>
			</a>
			<a href="#">
			<li id="imgid2">
				<i class="fa fa-map-marker fa-2x"></i>
				<span>地图定位</span>
			</li>
			</a>
		<?php if(empty($session)): ?><a href="/zhihuiyuanPhone/Login/index">
			<li id="imgid3">
				<i class="fa fa-th-large fa-2x"></i>
				<span>登陆注册</span>
			</li>
		</a>	
		<?php else: ?>
		<a href="/zhihuiyuanPhone/Glod/personal/id/<?php echo ($id); ?>">
			<li id="imgid3">
				<i class="fa fa-male fa-2x"></i>
				<span>个人中心</span>
			</li>
		</a><?php endif; ?>
		</ul>
	</aside>



	<script type="text/javascript">

	$(function(){
		//map
		var longitude = ['116.4390208346','118.1238306042','114.1027663199'];
	    var latitude = ['40.0282927031','24.5167755474','22.5487548369'];
	    var city = ['<h1 style="font-size:1.6em;">智慧方略管理顾问有限公司</h1>','<h1 style="font-size:1.6em;">厦门智慧源战略发展集群运营分部</h1>','<h1 style="font-size:1.6em;">深圳智慧源战略发展集群运营分部</h1>',];
	    var nowLongitude = longitude[0];
        var nowLatitude = latitude[0];
        var nowCity = city[0];




	    function fn(){
	        var map = new AMap.Map('container',{
	        zoom: 15,         //设置地图缩放级别
	        center: [nowLongitude,nowLatitude]     //设置地图中心点*经度在前，纬度在后*
	        });
	        var marker = new AMap.Marker({
	        position: [nowLongitude,nowLatitude],  //设置标记点位置
	        map:map
	        });
	        var infowindow = new AMap.InfoWindow({
	        content: nowCity,
	        offset: new AMap.Pixel(0, -30),
	        size:new AMap.Size(230,0)
	        });
	        infowindow.open(map,new AMap.LngLat(nowLongitude,nowLatitude));   //默认打开提示信息
    	}
    	fn();
    	fn33();
    	function fn33(){
			var startX = 0;
			var iX = 0;
			var objX = 0;
			var iW = document.documentElement.clientWidth;

			$('.swiper-wrapper').on('touchstart',function(e){
				console.log(iX)
				startX = e.originalEvent.targetTouches[0].pageX;
			});
			$('.swiper-wrapper').on('touchmove',function(e){
				var disX = e.originalEvent.targetTouches[0].pageX-startX;
				console.log(iX)
				objX = -iX*iW + disX;
				$('.swiper-wrapper').css('left',objX);
				// 禁止左右滑动翻页
				event.preventDefault()

			});
			$('.swiper-wrapper').on('touchend',function(e){
				iX = objX/iW;
				iX = -Math.round(iX)
				if(iX < 0){
					iX = 0;
				}
				if(iX > $('.map_word').length-1){
					iX = $('.map_word').length-1;
				}
				$('.swiper-wrapper').animate({'left':-iX*iW},500);
				nowLongitude = longitude[Math.abs(iX)];
		    	nowLatitude = latitude[Math.abs(iX)];
		    	nowCity = city[Math.abs(iX)];
		    	fn();
			})
		}



	})





    </script>



</body>
</html>
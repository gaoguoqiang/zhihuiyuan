<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="UTF-8">
<title>中小企业集群运营总部</title>

<link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/public/public_head.css">
<link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/style.css">
<link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/Carousel.css">
<link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/page.css">
<script src="/zhihuiyuan/Public/Home/js/jquery.js"></script>
<script src="/zhihuiyuan/Public/Home/js/carousel.js"></script>


<script type="text/javascript" src="/zhihuiyuan/Public/Home/js/check.js"></script>
<script type="text/javascript" src="/zhihuiyuan/Public/Home/js/index.js"></script>
<script type="text/javascript">
	function hint(){
		alert("非VIP会员禁止查看！");
	}
var lll = navigator.userAgent;

if(lll.indexOf('Mobile') >= 0){
	window.location.href ="/zhihuiyuanPhone";
}
</script>

<script type="text/javascript">
var ThinkPHP={
		'ROOT':'/zhihuiyuan',
		'IMG':'/zhihuiyuan/Public/<?php echo MODULE_NAME/img;?>',
		'FACE':'/zhihuiyuan/Public/<?php echo MODULE_NAME/face;?>',
		'MODULE':'/zhihuiyuan/Home',
		'UPLOADIFY':'/zhihuiyuan/Public/Home/uploadify',
		'IMAGEURL':'<?php echo U("File/image");?>',
		'FACEURL':'<?php echo U("File/face");?>',
		'BIGFACE':'<?php echo session("user_auth")["face"]->big;?>',
		'INDEX':'<?php echo U("Index/index");?>',
	}
	</script>
</head>
<body>
</body>
<!-- 头部开始 -->
<div id="header_title">
	<p>总裁特助→总裁→总裁教练，人才开发战略 事业发展一生一世。联系电话：15313667924</p>
</div>

<div id="header">
	<div class="header_center">
		<h1 id="logo">
			<a href="/zhihuiyuan/Index/index"><img src="/zhihuiyuan/Public/Home/img/logo.png" alt="智慧方略管理顾问有限公司"></a>
		</h1>
		<?php if(empty($user)): ?><p class="header_info">您好，请【<a href="javascript:;" id="login" class="active">登录</a>】【<a href="/zhihuiyuan/Reg/index" id="reg">注册</a>】</p>
		<?php else: ?>
			<p class="header_info">尊敬的	<font style="color:#049"><?php echo ($user); ?></font>	您好!  【<a href="/zhihuiyuan/Personage/index">个人中心</a>】【<a href="/zhihuiyuan/Login/logout">退出登录</a>】</p><?php endif; ?>
		<div class="header_word">
			<h2>两化融合战略</h2>
			<h4>工业化、信息化、农业化、城镇化<h4>
		</div>
	</div>
	
</div>
<div id="logon">
	<div class="warp"></div>
	<div>
		<form action="/zhihuiyuan/Login/login" method="post">
			<p class="logon_title">账户登录</p>
			<span class="close"></span>
			<input type="text" name="user" value="用户名">
			<input type="text" name="password" value="密码">
			<input class="submit_btn" type="submit" value="确认登录">
		</form>
		<a class="reg_src" href="/zhihuiyuan/Reg/index">注册新账户</a>
	</div>
</div>
<script>
$(function(){
	// 头部文字滚动
	(function(){
		var timer = null;
		var num = $('#header_title p').position().left;
		var pW = $('#header_title p').width();
		var parentW = $('#header_title').width();
		setInterval(function(){
			num-=2;
			$('#header_title p').css({'left':num});
			if(num < -pW){
				num = parentW;
			}
		},50);
	})();
	
	// 登录
	(function(){
		$('#login').click(function(){
			$('#logon').fadeIn();
			$('#logon input[name="user"]').focus(function(){
				$(this).val('');
			})
			$('#logon input[name="password"]').focus(function(){
				$(this).attr('type','password').val('');
			})
		});
		$('#logon .close').click(function(){
			$('#logon').fadeOut();
		})
	})();
})
		
</script>
<!-- 头部结束 -->
<!-- <script src="/zhihuiyuan/Public/Home/js/reg/reg.js"></script> -->


<div id="main">
	
	<!-- 导航开始 -->
	<meta charset="UTF-8">
	<div id="content">
		<div id="nav">
			<div class="nav_side">
				<dl>
				<?php echo ($typeStr); ?>
				</dl>
			</div>
			<div class="banner">
				<ul class="nav_top">
					<li><a href="/zhihuiyuan/Company/index">企业百科</a></li>
					<li><a href="/zhihuiyuan/News/index">集群动态区</a></li>
					<li><a href="#">讨论区</a></li>
					<li><a href="/zhihuiyuan/Contact/index">联系我们</a></li>
					<li><a href="http://www.jqhmjd.com">进入官网</a></li>
				</ul>
				<div class="banner_pic">
					<ul class="banner_pic_list">
						<li>
							<a href="javascript:;"><img src="/zhihuiyuan/Public/Home/img/1.png" alt=""></a>
						</li>
						<li>
							<a href="http://www.ydachina.com.cn" target="_Blank"><img src="/zhihuiyuan/Public/Home/img/2.png" alt=""></a>
						</li>
						<li>
							<a href="javascript:;"><img src="/zhihuiyuan/Public/Home/img/3.jpg" alt=""></a>
						</li>
						<li>
							<a href="javascript:;"><img src="/zhihuiyuan/Public/Home/img/4.png" alt=""></a>
						</li>
						<li>
							<a href="javascript:;"><img src="/zhihuiyuan/Public/Home/img/5.jpg" alt=""></a>
						</li>
						<li>
							<a href="javascript:;"><img src="/zhihuiyuan/Public/Home/img/6.png" alt=""></a>
						</li>

					</ul>
					<div class="banner_pic_nav">
						<span class="active">1</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
						<span>5</span>
						<span>6</span>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		</script>
		<div class="seg"></div>
		<div class="pic_info">
			<div class="title">
				<h2>两化融合企业升级</h2>
			</div>



			<div class="pic_box">
				<ul class="pic_list">
					<?php if(is_array($datas)): foreach($datas as $key=>$v): if($v["id"] == 1): ?><li>
								<a href="http://www.zady.cn/aqpt" target="_blank">
									<img -src="/zhihuiyuan/Uploads/datas/<?php echo ($v["pic"]); ?>.png" src="/zhihuiyuan/Public/Home/img/loading.png" alt="">
									<p><?php echo ($v["dataname"]); ?></p>
								</a>
							</li>
						<?php else: ?>
							<li>
								<a href="/zhihuiyuan/Index/commitList2/id/<?php echo ($v["id"]); ?>">
									<img -src="/zhihuiyuan/Uploads/datas/<?php echo ($v["pic"]); ?>.png" src="/zhihuiyuan/Public/Home/img/loading.png" alt="">
									<p><?php echo ($v["dataname"]); ?></p>
								</a>
							</li><?php endif; endforeach; endif; ?>
				</ul>
			</div>



			<span class="prey"></span>
			<span class="next"></span>
		</div>
		<div class="pic_info">
			<div class="title">
				<h2>总裁教练集群统帅</h2>
			</div>
			<div class="J_Poster poster-main" data-setting='{
	            "width":952,
	            "height":285,
	            "posterWidth":450,
	            "posterHeight":285,
	            "scale":0.9,
	            "speed":1000,
	            "autoPlay":true,
	            "delay":3000,
	            "verticalAlign":"middle"
	        }'>
		        <ul class="poster-list">


		        <?php if(is_array($datas2)): foreach($datas2 as $key=>$v): ?><li class="poster-item"><a href="/zhihuiyuan/Index/commitList2/id/<?php echo ($v["id"]); ?>"><img -src="/zhihuiyuan/Uploads/datas/<?php echo ($v["pic"]); ?>.png" src="/zhihuiyuan/Public/Home/img/loading.png" width="100%" height="100%"></a></li><?php endforeach; endif; ?>

		        </ul>
		    </div>
			<span class="prey"></span>
			<span class="next"></span>
		</div>
		<div class="pic_info">
			<div class="title policy">
				<h2>政务服务</h2>
				<p><a class="active" href="javascript:;">政务法规</a></p>
				<p><a href="javascript:;">政务服务</a></p>
				<p><a href="javascript:;">专项资金</a></p>
				<p><a href="javascript:;">减免税收</a></p>
			</div>
			<div style="height: 500px;"></div>
			<div class="policy_pic policy_pic1 clear">
				<div class="pic pic1">
					<a id="k321" href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zc1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="政策扶持"></a>
				</div>
				<div class="pic_right">
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zc2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="政府重要公告"></a>
					</div>
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zc3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="劳工关系"></a>
					</div>
				</div>
			</div>
			<div class="policy_pic policy_pic2 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zw1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="中小微企业类型证明办理"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zw2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="营业执照办理"></a>
					</div>
				</div>
				<div class="pic_center">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zw3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="中小企业生产经营运行监测"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zw4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="组织机构代码办理"></a>
					</div>
					<div class="pic pic5">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zw5.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="税务登记办理"></a>
					</div>
				</div>
			</div>
			<div class="policy_pic policy_pic3 clear">
				<div class="pic pic1">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zj1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="国家项目资金"></a>
				</div>
				<div class="pic pic2">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zj2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="项目资助"></a>
				</div>
			</div>
			<div class="policy_pic policy_pic4 clear">
				<div class="pic pic1">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/js1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="高新企业"></a>
				</div>
				<div class="pic_right">
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/js2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="小微企业"></a>
					</div>
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/js3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="双软认证企业"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="pic_info">
			<div class="title association">
				<h2>协会服务</h2>
				<p><a class="active" href="javascript:;">展览展示</a></p>
				<p><a href="javascript:;">培训辅导</a></p>
				<p><a href="javascript:;">特色服务</a></p>
				<p><a href="javascript:;">行业研究</a></p>
			</div>
			<div style="height: 500px;"></div>

			<div class="association_pic association_pic1 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zl1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="机械展"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zl2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="珠宝展"></a>
					</div>
				</div>
				<div class="pic_center">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zl3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="电子装备产业博览"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zl4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="家具展"></a>
					</div>
					<div class="pic pic5">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zl5.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="钟表展"></a>
					</div>
				</div>
			</div>
			<div class="association_pic association_pic2 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="../sb/zcfd.html"><img -src="/zhihuiyuan/Public/Home/img/px1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="政策辅导"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/px2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="创业培训"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/px3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="行业辅导"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/px4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="网络营销培训"></a>
					</div>
				</div>
			</div>
			<div class="association_pic association_pic3 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ts1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="双软认证"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ts2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="监测仪器"></a>
					</div>
				</div>
				<div class="pic_center">
					<div class="pic 双软认证">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ts3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="3D打印"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ts4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="研发设计"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic5">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ts5.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="3D展厅"></a>
					</div>
					<div class="pic pic6">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ts6.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="物流"></a>
					</div>
				</div>
			</div>
			<div class="association_pic association_pic4 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/hy1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="LED行业研究"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/hy2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="3D行业研究"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="../sb/xcl.html"><img -src="/zhihuiyuan/Public/Home/img/hy3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="新材料行业研究"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/hy4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="电子信息化行业"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="pic_info">
			<div class="title institution">
				<h2>机构服务</h2>
				<p><a class="active" href="javascript:;">投资融资</a></p>
				<p><a href="javascript:;">电商市场</a></p>
				<p><a href="javascript:;">互联网信息化</a></p>
				<p><a href="javascript:;">法律服务</a></p>
			</div>
			<div style="height: 500px;"></div>
			<div class="institution_pic institution_pic1 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/tzrz1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="小额贷款"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/tzrz2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="风险投资"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/tzrz3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="担保服务"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/tzrz4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="银行服务"></a>
					</div>
				</div>
			</div>
			<div class="institution_pic institution_pic2 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/dssc1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="市场营销"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/dssc2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="技术开发"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/dssc3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="电子商务"></a>
					</div>
					<div class="pic pic4">
						<a href="../sb/cptj.html"><img -src="/zhihuiyuan/Public/Home/img/dssc4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="产品推介"></a>
					</div>
				</div>
			</div>
			<div class="institution_pic institution_pic3 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="../sb/jsjjfa.html"><img -src="/zhihuiyuan/Public/Home/img/xxh1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="技术解决方案"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/xxh2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="技术开发"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/xxh3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="管理信息化服务"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/xxh4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="研发信息化服务"></a>
					</div>
				</div>
			</div>
			<div class="institution_pic institution_pic4 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/fl1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="无偿法律援助"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/fl2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="法律文书代理"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/fl3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="仲裁服务"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/fl4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="调节服务"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="pic_info">
			<div class="title twofuse">
				<h2>两化融合</h2>
				<p><a class="active" href="javascript:;">计算机</a></p>
				<p><a href="javascript:;">物联网</a></p>
				<p><a href="javascript:;">新型显示</a></p>
				<p><a href="javascript:;">信息系统</a></p>
			</div>
			<div style="height: 500px;"></div>
			<div class="twofuse_pic twofuse_pic1 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/jsj1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="通信"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/jsj2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="消费类电子"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/jsj3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="三网融合"></a>
					</div>
					<div class="pic pic4">
						<a href="../sb/szjt.html"><img -src="/zhihuiyuan/Public/Home/img/jsj4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="数字家庭"></a>
					</div>
				</div>
			</div>
			<div class="twofuse_pic twofuse_pic2 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wlw1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="移动互联网"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wlw2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="云计算"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wlw3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="微信"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wlw4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="下一代网络"></a>
					</div>
				</div>
			</div>
			<div class="twofuse_pic twofuse_pic3 clear">
				<div class="pic pic1">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/xs1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="高端集成电路"></a>
				</div>
				<div class="pic pic2">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/xs2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="各类元器件"></a>
				</div>
			</div>
			<div class="twofuse_pic twofuse_pic4">
				<div class="pic pic1">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/xxxt1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="信息系统"></a>
				</div>
			</div>
		</div>
		<div class="pic_info">
			<div class="title other">
				<h2>其他服务</h2>
				<p><a class="active" href="javascript:;">知识产权代理</a></p>
				<p><a href="javascript:;">外贸报关代理</a></p>
				<p><a href="javascript:;">财会代理</a></p>
				<p><a href="javascript:;">场地租赁</a></p>
			</div>
			<div style="height: 500px;"></div>
			<div class="other_pic other_pic1 clear">
				<div class="pic pic1">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zscq1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="产品专利"></a>
				</div>
				<div class="pic_right">
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zscq2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="产品著作权"></a>
					</div>
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/zscq3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="产品认证"></a>
					</div>
				</div>
			</div>
			<div class="other_pic other_pic2 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wm1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="报关服务"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wm2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="出口代理"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wm3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="进口代理"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/wm4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="外贸关税代理"></a>
					</div>
				</div>
			</div>
			<div class="other_pic other_pic3 clear">
				<div class="pic_left">
					<div class="pic pic1">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ck1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="税务服务"></a>
					</div>
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ck2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="审计"></a>
					</div>
				</div>
				<div class="pic_right">
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ck3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="会计服务"></a>
					</div>
					<div class="pic pic4">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/ck4.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="记账服务"></a>
					</div>
				</div>
			</div>
			<div class="other_pic other_pic4 clear">
				<div class="pic pic1">
					<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/cd1.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="工业园区服务"></a>
				</div>
				<div class="pic_right">
					<div class="pic pic2">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/cd2.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="科技园区服务"></a>
					</div>
					<div class="pic pic3">
						<a href="/zhihuiyuan/Company/index"><img -src="/zhihuiyuan/Public/Home/img/cd3.jpg" src="/zhihuiyuan/Public/Home/img/loading.png" alt="创业园区服务"></a>
					</div>
				</div>
			</div>
		</div>
		<script>
			// 设置ul长度
			var aul = $('#content .pic_info .pic_list');
			var aw = aul.find('li').outerWidth(true);
			aul.css({'width':aw*aul.find($('li')).length});
		</script>

	</div>

	<!-- 导航结束 -->

</div>
<div id="footer">
	<div class="footer_center">
		<h4 class="footer_title">友情链接 ：</h4>
		<p>
        	<a href="http://chinanpn.com">中国新闻采编网</a>
            <a href="http://www.hx-x.com">华夏讯网</a>
            <a href="http://www.shidaizhongguo.com">时代中国</a>
            <a href="http://zgcaibao.com">中国财报</a>
            <a href="http://www.zgdtnews.com">中国动态新闻网</a>
            <a href="http://www.hqwhw.com">环球文化网</a>
            <a href="http://caijing.nvwaxx.com">中国产业经济信息网</a>
            <a href="http://www.cubn.com.cn">中国联合商报</a>
            <a href="http://cv-sina.com.cn">新浪网</a>
            <a href="http://mt.sohu.com">搜狐网</a>
            <a href="http://www.xinhuanet.com">新华网</a>
        </p>
        <p>
            <a href="http://www.cipsc.org.cn">中文信息学会</a>
            <a href="http://www.cse.edu.cn">教育学会</a>
            <a href="http://www.cie-info.org.cn">电子学会</a>
            <a href="http://www.cgn.net.cn">图学学会</a>
            <a href="http://www.chinaasc.org">建筑学会</a>
            <a href="http://www.cpsbeijing.org">心理学会</a>
            <a href="http://www.cn-e.cn">伦理学会</a>
            <a href="http://www.zgjcjy.org">基础教育学会</a>
            <a href="http://www.aschina.org">中国声学学会</a>
            <a href="http://www.caa.org.cn">自动化学会</a>
            <a href="http://www.esc.org.cn">生态学会</a>
            <a href="http://www.china-cic.cn">通信学会</a>
        </p>
        <p>
            <a href="http://www.isc.org.cn">互联网协会</a>
            <a href="http://www.cada.cc">酒业协会</a>
            <a href="http://www.iac.org.cn">投资协会</a>
            <a href="http://www.china-cba.net">银行业协会</a>
            <a href="http://www.bita.org.cn">通信信息协会</a>
            <a href="http://www.chc.org.cn">保健协会</a>
            <a href="http://www.cast.org.cn">科学技术协会</a>
            <a href="http://www.caq.org.cn">中国质协</a>
            <a href="http://www.caam.org.cn">汽车工业协会</a>
            <a href="http://www.cpaffc.org.cn">人民对外友好协会</a>
            <a href="http://www.azxh.cn">安装协会</a>
        </p>
        <p>
            <a href="http://www.sme.gov.cn">中国中小企业信息网</a>
            <a href="http://www.fortunechina.com">财富中文网</a>
            <a href="http://www.csrworld.cn/video">CSR环球网</a>
            <a href="http://www.cspiii.com">中国两化融合服务平台</a>
            <a href="http://www.elexcon.com/ipce/">第五届深圳国际嵌入式系统展</a>
        </p>
	</div>
</div>


</html>
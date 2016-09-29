<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<script src="/zhihuiyuan/Public/Home/js/index.js"></script>


    <link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/public/page_nav.css">
    <link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/36.css">
    <script src="/zhihuiyuan/Public/Home/js/distpicker.data.js"></script>
    <script src="/zhihuiyuan/Public/Home/js/distpicker.js"></script>

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
		<a class="reg_src" href="reg.html">注册新账户</a>
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


<!-- main区 -->
<div id="main">
	
    <div id="content" class="clear">
        <div class="page_nav">
            <a class="index" href="/zhihuiyuan/Index/index">首页</a>
            <span>&gt;</span>

            <?php if(empty($title)): ?><span></span>
            <?php else: ?>
            <a class="now_page" href="/zhihuiyuan/Index/commitList1/nid/<?php echo ($title["id"]); ?>"><?php echo ($title["36name"]); ?></a><?php endif; ?>

            <?php if(empty($title2)): ?><span></span>
            <?php else: ?>
            <a class="now_page" href="/zhihuiyuan/Index/commitList1/id/<?php echo ($title2["id"]); ?>">><?php echo ($title2["36name"]); ?></a><?php endif; ?>


            <?php if(empty($title3)): ?><span></span>
            <?php else: ?>
            <a class="now_page" href="#">><?php echo ($title3["infoname"]); ?></a><?php endif; ?>


            <?php if(empty($matter)): ?><span></span>
            <?php else: ?>
                <a class="now_page" href="#">><?php echo ($content1["infoname"]); ?></a><?php endif; ?>
            
            
            
        </div>
        <div class="article_list">
            <h4>名称</h4>
            <ul>

                <?php if(is_array($result)): foreach($result as $key=>$v): ?><li>
                    <p><a href="/zhihuiyuan/Index/commitList1/id/<?php echo ($v['id']); ?>"><?php echo ($v["36name"]); ?></a></p>
                </li><?php endforeach; endif; ?>

            <?php if(empty($content["id"])): if(is_array($result2)): foreach($result2 as $key=>$v): ?><li>
                    <p><a href="/zhihuiyuan/Index/commitList1/iId/<?php echo ($v['id']); ?>"><?php echo ($v["infoname"]); ?></a></p>
                </li><?php endforeach; endif; ?>
                <div class="page">
                <table class="pages">
                    <tr>
                      <td height="20" colspan="3" align="right" padding="4"><?php echo ($show); echo ($show2); ?></td>  
                    </tr>
                </table>   
                </div>


            <?php else: ?>
                <li>
                    <?php echo ($content["infoname"]); ?>
                </li><?php endif; ?>
            
                
                
            </ul>
        </div>
        <div class="article_main">
           <?php if(empty($matter)): echo ($matter1); ?> 
            <?php else: ?>
            <?php echo ($matter); endif; ?>
        </div>
        </div>
    </div>

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
	</div>
</div>






</body>
</html>
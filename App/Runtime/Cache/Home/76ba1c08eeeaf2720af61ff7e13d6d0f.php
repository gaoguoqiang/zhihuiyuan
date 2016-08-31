<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>中小企业集群运营总部</title>
<link rel="stylesheet" href="/Public/Home/css/public/public_head.css">
<link rel="stylesheet" href="/Public/Home/css/style.css">
<link rel="stylesheet" href="/Public/Home/css/Carousel.css">
<link rel="stylesheet" href="/Public/Home/css/page.css">
<script src="/Public/Home/js/jquery.js"></script>
<script src="/Public/Home/js/carousel.js"></script>
<script src="/Public/Home/js/index.js"></script>

    <link rel="stylesheet" href="/Public/Home/css/style.css">
    <script src="/Public/Home/js/check.js"></script>
    <script src="/Public/Home/js/reg/reg.js"></script>
    <link rel="stylesheet" href="/Public/Home/css/reg.css">

<script type="text/javascript">
var ThinkPHP={
		'ROOT':'',
		'IMG':'/Public/<?php echo MODULE_NAME/img;?>',
		'FACE':'/Public/<?php echo MODULE_NAME/face;?>',
		'MODULE':'/Home',
		'UPLOADIFY':'/Public/Home/uploadify',
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
			<a href="/Index/index"><img src="/Public/Home/img/logo.png" alt="智慧方略管理顾问有限公司"></a>
		</h1>
		<?php if(empty($user)): ?><p class="header_info">您好，请【<a href="javascript:;" id="login" class="active">登录</a>】【<a href="/Reg/index" id="reg">注册</a>】</p>
		<?php else: ?>
			<p class="header_info">尊敬的	<font style="color:#049"><?php echo ($user); ?></font>	您好!  【<a href="/Personage/index">个人中心</a>】【<a href="/Login/logout">退出登录</a>】</p><?php endif; ?>
	</div>
	
</div>
<div id="logon">
	<div class="warp"></div>
	<div>
		<form action="/Login/login" method="post">
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
<!-- <script src="/Public/Home/js/reg/reg.js"></script> -->


<div id="main">
	
    <div id="content" class="clear">
    	<div class="reg_form">
    		<form action="/Reg/insert" onsubmit="return checksubmit('reg')" method="post" enctype="multipart/form-data">
                <ul>
                    <li>
                        <label>
                            <input type="file" class="file_pic" name="userfile" id="file" />
                            <div class="head_pic" id="head_pic"><img src="/Public/Home/img/big.jpg" id="img"> 上传头像
                              <!--   <img id="imghead" width=100 height=100 border=0 src=''> -->
                            </div>
                        </label> 
                        <span style="left: 220px" class="error error_file">请上传图片格式的文件！</span>
                    </li>
                    <li>
                       <input class="text" type="text" name="user" value="姓名：请输入真实姓名"> 
                       <span class="info info_user">请填写您的真实姓名！</span>
                       <span class="error error_user">姓名格式错误，不能出现数字、英文、标点符号、特殊字符！</span>
                    </li>
                    <li>
                        <select name="sex" id="">
                            <option value="男">男</option>
                            <option value="女">女</option>
                        </select>
                    </li>
                    <li>
                        <input class="text" type="text" name="email" value="邮箱：请输入您的邮箱">
                        <span class="info info_email">请填写您的邮箱！</span>
                        <span class="error error_email">邮箱格式错误，请重新输入！</span>
                    </li>
                    <li>
                        <input class="text" type="text" name="phone" value="手机号码：请输入您的手机号码">
                        <span class="info info_phone">请填写您的手机号码！</span>
                        <span class="error error_phone">手机号格式错误，请重新输入！</span>
                    </li>
                    <li>
                        <input class="text" type="text" name="password" value="密码：">
                        <span class="info info_password">请输入6 - 15位除特殊字符外的密码！<strong style="font-weight: normal; font-size: 12px; color: red;">密码不可修改，请谨慎填写！！！</strong></span>
                        <span class="error error_password">密码格式错误，请重新输入！</span>
                    </li>
                    <li>
                        <input class="text" type="text" name="password_check" value="密码确认：">
                        <span class="info info_password_check">请重新输入密码！</span>
                        <span class="error error_password_check">密码不一致，请重新输入！</span>
                    </li>
                    <li>
                        <input class="submit" type="submit" value="确认提交">
                    </li>
                </ul>
    		</form>
    	</div>
    	<div class="reg_info">
    		注册信息
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
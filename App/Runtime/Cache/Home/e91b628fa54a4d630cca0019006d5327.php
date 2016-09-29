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

    <link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/public/page_nav.css">
    <link rel="stylesheet" href="/zhihuiyuan/Public/Home/css/perfectInfo.css">
    <script src="/zhihuiyuan/Public/Home/js/distpicker.data.js"></script>
    <script src="/zhihuiyuan/Public/Home/js/distpicker.js"></script>
    <script src="/zhihuiyuan/Public/Home/js/check.js"></script>

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
	
    <div id="content" class="clear">
        <div class="page_nav">
            <a class="index" href="/zhihuiyuan/Index/index">首页</a>
            <span>&gt;</span>
            <a class="now_page" href="/zhihuiyuan/Personage/index">个人中心</a>
            <span>&gt;</span>
            <a class="now_page" href="#">完善个人资料</a>
        </div>
        <div class="reg_form">
            <form action="/zhihuiyuan/Personage/save" method="post" enctype="multipart/form-data" onsubmit="return checksubmit('perfectInfo')">
                <ul class="clear">
                    <li class="form_user">
                        <input class="text" type="text" value="<?php echo ($userResulr1["user"]); ?>" disabled="disabled">
                    </li>
                    <li  class="form_pic">

                        <?php if(empty($userResulr["face"])): ?><label>
                            <input class="file_pic" type="file" name="face">
                            <div id="head_pic" class="head_pic">上传头像</div>
                        </label>
                        <?php else: ?>
                            <label>
                            <input class="file_pic" type="file" name="face">
                            <div id="head_pic" class="head_pic">
                            <img src="/zhihuiyuan/Uploads/<?php echo ($userResulr["face"]); ?>"/>上传头像</div>
                        </label><?php endif; ?>
                        


                    </li>
                    <li class="form_sex">
                        <select name="" id="" disabled="disabled">
                        <?php if(($userResulr1["sex"] == 男)): ?><option value="男" selected>男</option>
                        <?php else: ?>
                            <option value="女" selected>女</option><?php endif; ?>
                        </select>
                    </li>
                    <li class="form_email">
                        <input class="text" type="text" value="邮箱：<?php echo ($userResulr1["email"]); ?>" disabled="disabled">
                    </li>
                    <li>
                        <input class="text" type="text" value="电话：<?php echo ($userResulr1["phone"]); ?>" disabled="disabled">
                    </li>
                    <li class="distpicker1">
                        <select class="prov" name="prov" id="prov"></select>
                        <select class="city" name="city" id="city"></select>
                        <select class="dist" name="dist" id="dist"></select>
                    </li>
                    <li>
                        <input class="text" name="company" type="text" value="单位名称：<?php echo ($userResulr["company"]); ?>">
                    </li>
                    <li>
                        <input class="text" name="field" type="text" value="擅长领域：<?php echo ($userResulr["field"]); ?>">
                    </li>
                    <li>
                        <input class="text" name="technology" type="text" value="技术特长：<?php echo ($userResulr["technology"]); ?>">
                    </li>
                    <li>
                        <label>
                            <div class="form_video">上传视频</div>
                            <input class="file_video" type="file">
                        </label>
                        <span class="error error_file_video">请上传MP4格式的文件！</span>
                    </li>
                    <li>
                        <textarea class="intro" name="introduction" id="">个人简介：<?php echo ($userResulr["introduction"]); ?></textarea>
                        <span class="ps">还可以输入<em class="num">300</em>字</span>
                        <span class="ps" style="display: none;">已超过<em class="num">20</em>字,请删除！</span>
                    </li>
                    <li>
                        <div class="checkbox_info">（可多选）</div>
                        <div>
                        <?php if(empty($userResulr['teacher'][0])): ?><input type="checkbox" value="讲师" name="teacher[0]">
                        <?php else: ?> 
                            <input type="checkbox" value="讲师" name="teacher[0]" checked="checked"><?php endif; ?> 
                            <span>讲师</span>

                        <?php if(empty($userResulr['teacher'][1])): ?><input type="checkbox" value="咨询师" name="teacher[1]">
                        <?php else: ?> 
                            <input type="checkbox" value="咨询师" name="teacher[1]" checked="checked"><?php endif; ?>
                            <span>咨询师</span>

                        <?php if(empty($userResulr['teacher'][2])): ?><input type="checkbox" value="资源供应" name="teacher[2]">
                        <?php else: ?> 
                            <input type="checkbox" value="资源供应" name="teacher[2]" checked="checked"><?php endif; ?>
                            <span>资源供应</span>

                        <?php if(empty($userResulr['teacher'][3])): ?><input type="checkbox" value="资源需求" name="teacher[3]">
                        <?php else: ?>
                            <input type="checkbox" value="资源需求" name="teacher[3]" checked="checked"><?php endif; ?> 
                            <span>资源需求</span>

                        <?php if(empty($userResulr['teacher'][4])): ?><input type="checkbox" value="资源供应" name="teacher[4]">
                        <?php else: ?>
                            <input type="checkbox" value="资源供应" name="teacher[4]" checked="checked"><?php endif; ?> 
                            <span>培训需求供应</span>

                        <?php if(empty($userResulr['teacher'][4])): ?><input type="checkbox" value="资源需求" name="teacher[5]">
                        <?php else: ?>
                            <input type="checkbox" value="资源需求" name="teacher[5]" checked="checked"><?php endif; ?>
                            <span>咨询需求</span>
                        </div>
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
    <script>
        $(function() { 
            $(".distpicker1").distpicker(); 
            //去除单位/行业默认值
            companyCheckVerify($('.reg_form form'));
            // 视频格式判断
            videoCheckVerify($('.reg_form form'));
            // 个人简介字数检测
            introCheckVerify($('.reg_form form'));
            //头像预览
            var content = document.getElementById('content');
            var fileBtn = content.getElementsByTagName('input')[1];
            fileBtn.onchange = function(){
                previewImage(this);
            }
        })
    </script>

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
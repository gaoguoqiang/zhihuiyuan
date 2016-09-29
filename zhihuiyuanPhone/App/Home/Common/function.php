	<?php

//企业百科分类菜单
function getTypeStr(){
	//获取第一级分类
	$typeOneArr=M("services")->where("nid=0")->select();
	$content="";
	foreach($typeOneArr as $v1){
		$content.="<dt> {$v1['sername']}</dt>";
		//获取第二级
		$typeTwoArr=M("services")->where("nid={$v1['id']}")->select();
		foreach($typeTwoArr as $v2){
		$content.="
		<dd>
                <a href=\"/zhihuiyuan/zhihuiyuanPhone/Company/commitList/nid/{$v2['id']}\">{$v2['sername']}</a>
                <span>&gt;</span>
                <ul class=\"suspend\">
		";
		//获取第三级
			$typeThreeArr=M('services')->where("nid={$v2['id']}")->select();
			foreach($typeThreeArr as $v3){
			$content.="
                    <li>
                        <a href=\"/zhihuiyuan/zhihuiyuanPhone/Company/commitList/id/{$v3['id']}/nid/{$v3['nid']}\">{$v3['sername']}</a>
                    </li>
			";
			}
		$content.="</ul></dd>";
		}
		
	}
	return $content;
}



//首页分类菜单


function getTypeStr2(){
		//获取第一级分类
		$typeOneArr=M("36serves")->where("nid=0")->select();
		$content="";
		foreach($typeOneArr as $v1){
			$content.="
				<li class=\"menu_li\"><a href=\"javascript:vold(0);\">{$v1['36name']}</a>
					<ul class=\"detailed\">
						";

			//获取第二级
			$typeTwoArr=M("36serves")->where("nid={$v1['id']}")->select();
			foreach($typeTwoArr as $v2){
					$content.="	<li class=\"menu-a menu_2\"><a href=\"/zhihuiyuanPhone/Glod/index/id/{$v2['id']}\">{$v2['36name']}</a></li>
						";						
			}
			//获取第三级列表
		
		$content.="	</ul>
				</li>";
		}
		return $content;		
	}












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
                <a href=\"/Company/commitList/nid/{$v2['id']}\">{$v2['sername']}</a>
                <span>&gt;</span>
                <ul class=\"suspend\">
		";
		//获取第三级
			$typeThreeArr=M('services')->where("nid={$v2['id']}")->select();
			foreach($typeThreeArr as $v3){
			$content.="
                    <li>
                        <a href=\"/Company/commitList/id/{$v3['id']}/nid/{$v3['nid']}\">{$v3['sername']}</a>
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
	if($_SESSION['vip'] == ''){
		//获取第一级分类
		$typeOneArr=M("36serves")->where("nid=0")->select();
		$content="";
		foreach($typeOneArr as $v1){
			$content.="<dt> {$v1['36name']}</dt>";
			//获取第二级
			$typeTwoArr=M("36serves")->where("nid={$v1['id']}")->select();
			foreach($typeTwoArr as $v2){
				if($v2['nid'] < 5){
					$content.="<dd><a href=\"/zhihuiyuan/Index/commitList1/nid/{$v2['id']}\">{$v2['36name']}</a>
						<ul class=\"nav_side_info\">
						";
						//获取第三级
						$typeThreeArr=M('36serves')->where("nid={$v2['id']}")->select();
						foreach($typeThreeArr as $v3){
						$content.="
						<li>
						<a href=\"/zhihuiyuan/Index/commitList1/id/{$v3['id']}/nid/{$v3['nid']}\">{$v3['36name']}</a>
						</li>
						";
						}
					}else{
						$content.="<dd onclick=\"hint()\"><a href=\"javascript:void(0);\" \">{$v2['36name']}</a>
						<ul class=\"nav_side_info\">
						";
					}
			
			
			$content.="</ul></dd>";
			}
			
		}
		return $content;
	}elseif($_SESSION['vip'] == 1){
		//获取第一级分类
		$typeOneArr=M("36serves")->where("nid=0")->select();
		$content="";
		foreach($typeOneArr as $v1){
			$content.="<dt> {$v1['36name']}</dt>";
			//获取第二级
			$typeTwoArr=M("36serves")->where("nid={$v1['id']}")->select();
			foreach($typeTwoArr as $v2){
				if($v2['nid'] < 6){
					$content.="<dd><a href=\"/zhihuiyuan/Index/commitList1/nid/{$v2['id']}\">{$v2['36name']}</a>
						<ul class=\"nav_side_info\">
						";
								//获取第三级
						$typeThreeArr=M('36serves')->where("nid={$v2['id']}")->select();
						foreach($typeThreeArr as $v3){
						$content.="
						<li>
						<a href=\"/zhihuiyuan/Index/commitList1/id/{$v3['id']}/nid/{$v3['nid']}\">{$v3['36name']}</a>
						</li>
						";
						}
					}else{
						$content.="<dd onclick=\"hint()\"><a href=\"javascript:void(0);\" \">{$v2['36name']}</a>
						<ul class=\"nav_side_info\">
						";
					}
			
			
			$content.="</ul></dd>";
			}
			
		}
		return $content;
	}elseif($_SESSION['vip'] == 2){
		//获取第一级分类
		$typeOneArr=M("36serves")->where("nid=0")->select();
		$content="";
		foreach($typeOneArr as $v1){
			$content.="<dt> {$v1['36name']}</dt>";
			//获取第二级
			$typeTwoArr=M("36serves")->where("nid={$v1['id']}")->select();
			foreach($typeTwoArr as $v2){
			$content.="<dd><a href=\"/zhihuiyuan/Index/commitList1/nid/{$v2['id']}\">{$v2['36name']}</a>
			<ul class=\"nav_side_info\">
			";
			//获取第三级
				$typeThreeArr=M('36serves')->where("nid={$v2['id']}")->select();
				foreach($typeThreeArr as $v3){
				$content.="
				<li>
				<a href=\"/zhihuiyuan/Index/commitList1/id/{$v3['id']}/nid/{$v3['nid']}\">{$v3['36name']}</a>
				</li>
				";
				}
			$content.="</ul></dd>";
			}
			
		}
		return $content;
	}



}










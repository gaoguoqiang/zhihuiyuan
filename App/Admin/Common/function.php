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
                <a href=\"/zhihuiyuan/Company/commitList/nid/{$v2['id']}\">{$v2['sername']}</a>
                <span>&gt;</span>
                <ul class=\"suspend\">
		";
		//获取第三级
			$typeThreeArr=M('services')->where("nid={$v2['id']}")->select();
			foreach($typeThreeArr as $v3){
			$content.="
                    <li>
                        <a href=\"/zhihuiyuan/Company/commitList/id/{$v3['id']}/nid/{$v3['nid']}\">{$v3['sername']}</a>
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





function getTypen($fid=0,$num=0){
	//获取一级分类
	$arr=M("36serves")->where("nid = $fid")->select();
	$typeStr="";
	//产生缩进字符串 &nbsp;&nbsp;
	$indentStr=str_repeat("&nbsp;&nbsp;&nbsp;",$num);
	$num++;
	foreach($arr as $v){
		$typeStr.="<option value='{$v['id']}' style=\"background-color:#85DBCE;border:0;width:100%;\">{$indentStr}{$v['36name']}</option>";
		$typeSon=getTypen($v['id'],$num);
		$typeStr.=$typeSon;
	}
	return $typeStr;
}



function getTypenTr($fid=0,$num=0){
	//获取一级分类
	$arr=M("36serves")->where("nid = $fid")->select();
	$typeStr="";
	//产生缩进字符串 &nbsp;&nbsp;
	$indentStr=str_repeat("&nbsp;&nbsp;",$num);
	$num++;
	foreach($arr as $v){
		$typeStr.="<tr><td style='text-align:left'>{$indentStr}{$v['36name']}</td><td><a href='".U('Type/update',array('id'=>$v['id'],'xid'=>1))."'>修改</a>&nbsp;|&nbsp;<a href='".U('Type/del',array('id'=>$v['id'],'xid'=>1))."'>删除</a></td></tr>";
		$typeSon=getTypenTr($v['id'],$num);
		$typeStr.=$typeSon;
	}
	return $typeStr;
}



//企业百科分类显示
function getTypen1($fid=0,$num=0){
	//获取一级分类
	$arr=M("services")->where("nid = $fid")->select();
	$typeStr="";
	//产生缩进字符串 &nbsp;&nbsp;
	$indentStr=str_repeat("&nbsp;&nbsp;&nbsp;",$num);
	$num++;
	foreach($arr as $v){
		$typeStr.="<option value='{$v['id']}' style=\"background-color:#85DBCE;border:0;width:100%;\">{$indentStr}{$v['sername']}</option>";
		$typeSon=getTypen1($v['id'],$num);
		$typeStr.=$typeSon;
	}
	return $typeStr;
}












function getTypep($fid=0,$num=0,$fstr=""){
	//获取一级分类
	$arr=M("Type")->where("state<9 and fid=$fid")->select();
	$typeStr="";
	//产生缩进字符串 &nbsp;&nbsp;
	$indentStr=str_repeat("&nbsp;&nbsp;",$num);
	$num++;
	if($fid!=0){
		$fstr.=">$fid";//>0>1
	}
	foreach($arr as $v){
		$typeStr.="<option value='{$fstr}>{$v['id']}>' style=\"background-color:#85DBCE;border:0;width:100%;\">{$indentStr}{$v['name']}</option>";
		$typeSon=getTypep($v['id'],$num,$fstr);
		$typeStr.=$typeSon;
	}
	return $typeStr;
}

//企业百科显示
function getTypenTr2($fid=0,$num=0){
	//获取一级分类
	$arr=M("services")->where("nid = $fid")->select();
	$typeStr="";
	//产生缩进字符串 &nbsp;&nbsp;
	$indentStr=str_repeat("&nbsp;&nbsp;",$num);
	$num++;
	foreach($arr as $v){
		$typeStr.="<tr><td style='text-align:left'>{$indentStr}{$v['sername']}</td><td><a href='".U('Type/update',array('id'=>$v['id'],'xid'=>2))."'>修改</a>&nbsp;|&nbsp;<a href='".U('Type/del',array('id'=>$v['id'],'xid'=>2))."')>删除</a></td></tr>";
		$typeSon=getTypenTr2($v['id'],$num);
		$typeStr.=$typeSon;
	}
	return $typeStr;
}










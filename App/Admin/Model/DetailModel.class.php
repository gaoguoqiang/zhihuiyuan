<?php

/*
 * Copyright(c)2015 All rights reserved.
 * @Licenced  http://wwww.w3.org
 * @Author  Liutian <1538731090@qq.com>
 * @Create on 2015-11-17 20:49:33
 * @Version 1.0
 */
/**
 * 如果使用关联查询 要使用RelationModel的基类
 */
namespace Admin\Model;
use Think\Model\RelationModel;
class DetailModel extends RelationModel{
	protected $tableName = "detail";
	protected $tablePrefix = "si_";
	protected $_link = array(
		'orders' => array(
			'mapping_type' => self::BELONGS_TO,//设置关联类型
			'class_name' => "Order",
			'foreign_key' => "orderid",
			'mapping_name' =>"order"		    
		)
		
	);
//	protected $_validate = array(
//		array("title", "require", "标题不能为空"),
//		array("cid", "require", "分类未选择"),
//		array("uid", "require", "作者未选择"),
//		array("content", "require", "内容不能为空"),
//	);
//	protected $_auto = array(
//		array("createtime", "date", self::MODEL_BOTH, "function", array('Y-m-d H:i:s')),//array(完成字段1,完成规则,[完成条件,附加规则]),
//	);
//	
//	public function TT($arg) {
//		return date("Y-m-d H:i:s");
//	}
}

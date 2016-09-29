<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
if($_SESSION["userMsg"]== NULL){
	echo "<script type='text/javascript'>";
	echo " alert('您还没有登录无权访问该页面')";
	echo " window.location='../index.php';";
	echo "</script>";
}
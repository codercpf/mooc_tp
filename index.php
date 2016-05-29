<?php 
/*
	$module = isset($_GET['m']) ? $_GET['m'] : 'Index';
	$action = isset($_GET['a']) ? $_GET['a'] : 'Index';

	$mooc = new $module();
	$mooc->$action();
	// $mooc->test();

	class Index{
		function __construct(){
			echo "调用了Index控制器<br/><br/>";
		}
		function index(){
			echo "我是Index控制器的index方法<br/><br/>";
		}
		function test(){
			echo "我是Index控制器的test方法";
		}
	}

	class test{
		function __construct(){
			echo "调用了test控制器<br/><br/>";
		}
		function index(){
			echo "我是test控制器的index方法<br/><br/>";
		}
		function test(){
			echo "我是test控制器的test方法";
		}
	}

exit();
*/
	define('APP_DEBUG',true);

	define('APP_NAME','App');
	define('APP_PATH','./App/');
	require('./ThinkPHP/ThinkPHP.php');	
 ?>
<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysql', 			//数据库类型
	'DB_HOST' => 'localhost',	//数据库服务器地址
	'DB_NAME' => 'tpmooc',			//数据库名称
	'DB_USER' => 'root',			//数据库用户名
	'DB_PWD'  => 'root',			//用户密码
	'DB_PORT' => '3306',			//数据库端口
	'DB_PREFIX' => 'mooc_',			//数据表前缀

	//开启主从读写分离
	//'DB_RW_SEPARATE' => false,

	//设置多个主数据库服务器——————此处默认前2个，即localhost,localhost01是主服务器
	//'DB_MASTER_NUM' => '1',


/*
	URL_MODEL
	1：默认模式 pathinfo模式为1
		http://thinkphp/index.php/Index/user/id/1.html
	0：普通模式
		http://thinkphp/index.php?m=Index&a=user&id=1
	2：重写模式:即隐藏index.php(需要Apache开启重写，并在根入口同级目录配置参数文件.htaccess)
		http://thinkphp/Index/user/id/1.html
	3：兼容模式
		http://thinkphp/index.php?s=/Index/user/id/1.html
*/
	'URL_MODEL' => 2,

	'URL_HTML_SUFFIX' => 'html|shtml|xml',  // URL伪静态后缀设置

	'name' => 'Changpengfei222',
	// 'LOAD_EXT_CONFIG' => 'user',	//不要自定义配置文件，用系统自带的
);
?>
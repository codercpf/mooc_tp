<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 <!-- 
 	<?php ?>
 	<hr/>
 	<?php ?>
 	<hr/>
 	<?php ?>
 -->
<!-- 
	<?php echo ($me['name']); ?><br/>
	<?php echo ($me['age']); ?><br/>
	<?php echo ($me["age"]); ?><br/>
	<br/>
	<br/>
设置默认值时不能有空格
	<?php echo (($me["sex"])?($me["sex"]):"man"); ?><br/>
运算操作必须以数组方式，不能以对象方式
	<?php echo ($me['age']+1); ?>   
 -->
<!-- 
 	<?php echo (substr(md5($me['name']),0,5)); ?><br/>
 	<?php echo ($name); ?>
 -->
<!-- 
 	<?php echo (date("Y-m-d H:i:s", $now)); ?><br/>
 	<?php echo (THINK_VERSION); ?><br/>
 	<?php echo ($_SERVER['HTTP_HOST']); ?>
 -->

<!-- 
 <?php if(is_array($person)): $i = 0; $__LIST__ = array_slice($person,1,2,true);if( count($__LIST__)==0 ) : echo "我没数据" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['name']); ?>----------<?php echo ($data['age']); ?><br/><?php endforeach; endif; else: echo "我没数据" ;endif; ?>
 <hr>
foreach循环没有volist功能多
 <?php if(is_array($person)): foreach($person as $key=>$data): echo ($data['name']); ?>--------<?php echo ($data['age']); ?><br/><?php endforeach; endif; ?>
 -->

eq=   neq!=   gt>   egt>=   lt<   elt<=   heq===   nheq!==
<br/><br/>
<!-- 
 <?php $__FOR_START_3804__=1;$__FOR_END_3804__=10;for($k=$__FOR_START_3804__;$k <= $__FOR_END_3804__;$k+=1){ echo ($k); ?><br/><?php } ?>
 -->

<!-- 
除了if之外，其他标签都要加结束符 /
 <?php if($num > 10): ?>num大于10
 <?php elseif($num < 10): ?>num小于10
 <?php else: ?>num等于10<?php endif; ?>
 -->

<!--
除开始、结束以外，都要加结束符“/”
 <?php switch($name): case "laoshi": ?>小明，滚出去！<?php break;?>
 	<?php case "xiaohong": case "xiaolan": case "xiaohuang": ?>小明，同学让你滚出去！<?php break;?>
 	<?php default: ?>小明，自己滚出去了<?php endswitch;?>
-->
<!-- 
比较标签<br/>
	<?php if(($num) != "11"): ?>num的值不是11
	<?php else: ?>
		num的值是11<?php endif; ?>
 -->

<!--
 in notin between(1-10)<br/>
 <?php echo ($num); ?>
 <br/>
 <?php if(in_array(($num), explode(',',"11,12,13"))): ?>在in包含的数据集中<?php else: ?>不在in包含的数据集中<?php endif; ?>
 <br/>
 <?php $_RANGE_VAR_=explode(',',"1,12");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?>确实在这个区间<?php else: ?>确实不在这个区间<?php endif; ?>
 <br/>
 range只能代替in/notin，即判断单个数值是否在一个集合中；区间判断只能用between/notbetween<br/>
 <?php if(in_array(($num), explode(',',"1,13,19"))): ?>在里面<?php else: ?>不在里面<?php endif; ?>
 <br/><br/>
 <?php echo ($num>13 ? '大于13' : '不大于13'); ?>
-->


<!-- 属性中间不能加标签符号，故下面直接用name='data.age' -->

	<?php if(is_array($person)): foreach($person as $key=>$data): if(($data["age"]) >= "18"): echo ($data["name"]); ?>已经成年了！<?php else: echo ($data["name"]); ?>还是个孩子！<?php endif; ?><br/><?php endforeach; endif; ?>
	<br/><br/>

	<?php echo ($num); ?><br/>
	<?php if(($num) == "11"): echo ($num); ?>等于11<?php else: echo ($num); ?>不等于11<?php endif; ?><br/>
	<?php if(($num) > "10"): echo ($num); ?>大于10<?php else: echo ($num); ?>不大于10<?php endif; ?>



 </body>
 </html>
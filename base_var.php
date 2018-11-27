<?php
/**
 *   php基础知识复习 - 基础面试题
 *   zhangyu 2018-11-27
 */
$a=3;
$b=6;
if($a > 1 || $b=5){
	echo $a.PHP_EOL;
}
$b = &$a;
$b = 8;
echo $a.PHP_EOL;
echo $b++."\n";
echo $b.PHP_EOL;


$str = 'welcome to 斯塔克';
echo strlen($str);

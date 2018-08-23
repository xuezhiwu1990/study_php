<?php
/**
 * php基础知识复习 - 函数部分
 * zhangyu 2018-08-23
 */

$outer = 'str';
function mgfunc()
{
	global $outer;
	echo $outer;
}


function myFunc()
{
	static $a = 1;
	echo $a++;
}
myFunc();  // 输出1
myFunc();  // 输出2
myFunc();  // 输出3

$count = 5;
function get_count()
{
	static $count;
	return $count++;
}
var_dump($count); // int 5
++$count;
var_dump($count); // int 6
var_dump(get_count()); //null
var_dump(get_count()); //int 1

function &test_addr(){
	static $b = 10;
	return $b;
}

$addr = test_addr();
$addr = &test_addr();
$addr = 100;
echo test_addr(); //100 引用同一个地址 会一起修改
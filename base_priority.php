<?php
/**
 * php基础知识复习 - 运算符的优先级
 * zhangyu 2018-08-23
 */

//浮点数多于的数值会被清除
echo (int)(0.1+0.8)*100;

//FALSE的七种情况
//https://www.cnblogs.com/yongzhenye/p/9175198.html

if('==false'){
	echo 111;
}elseif( '0' == false ){
	echo 222;
}else if( 0.0 == false ){
	echo 333;
}

var_dump(false == array());
var_dump(false == '');
var_dump(false == '0');
var_dump(false == 0.0);
var_dump(false == null);
var_dump(false == 0);
var_dump(false == false);
/**
boolean true
boolean true
boolean true
boolean true
boolean true
boolean true
boolean true
**/

$a  = 5;
echo 'a='.$a++.PHP_EOL; //先返回，在运算，变量的值实际的值是6

$b  = 6;
echo 'b='.++$b.PHP_EOL; //先运算，在返回，变量的值实际的值是7
var_dump($a,$b);

/**
a=5 b=7
int 6
int 7
**/

$a = 0;
$b = 0;
if($a = 3 >0 || $b =3 >0)
{
	$a++;
	$b++;
	echo $a.PHP_EOL;
	echo $b.PHP_EOL;
}
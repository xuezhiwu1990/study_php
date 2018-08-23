<?php
//定义一个变量
$a = 3; //range(0,3);
//var_dump(memory_get_usage());
var_dump($a );
//引用赋值
$b = &$a;
//xdebug_debug_zval('a');

$b = 666;
$a = 3;
xdebug_debug_zval('a');
xdebug_debug_zval('b');
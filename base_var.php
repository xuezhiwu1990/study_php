<?php
//定义一个变量
$a = range(0,1000);
var_dump(memory_get_usage());
//COW Copy On Write
//定义一个$b
$b = $a;
var_dump(memory_get_usage());

$b = &$a;
var_dump(memory_get_usage());
//对a进行修改
$a = range(0, 1000);
var_dump(memory_get_usage());
<?php
/**
 * php基础知识复习
 * zhangyu 2018-08-23
 * 在使用前开启xdebug模块
 */


/**
xdebug.profiler_append = 0
xdebug.profiler_enable = 1
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "../tmp"
xdebug.trace_output_dir = "../tmp"
xdebug.profiler_output_name = "cache.out.%t-%s"
xdebug.remote_enable = 1
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "127.0.0.1"
extension=xdebug.dll
zend_extension_ts=xdebug.dll
**/

//定义一个变量
$a = 3; //range(0,3);
//var_dump(memory_get_usage());
var_dump( $a );
//引用赋值
$b = &$a;
xdebug_debug_zval('a');

$b = 666;
$a = 3;

xdebug_debug_zval('a');
xdebug_debug_zval('b');


/**
int 3
a:
(refcount=2, is_ref=1),int 3
a:
(refcount=2, is_ref=1),int 3
b:
(refcount=2, is_ref=1),int 3
**/
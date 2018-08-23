<?php
/**
 * php基础知识复习
 * zhangyu 2018-08-23
 * 在使用前开启xdebug模块
 */
//zval变量容器
//phpinfo();die();
//xdebug_debug_zval 需要安装xdebug扩展
$a = range(0,3);
xdebug_debug_zval('a');

//定义变量b , 把a的值赋值给$a
$b = $a;
xdebug_debug_zval('a');
xdebug_debug_zval('b');

/**
a:
(refcount=1, is_ref=0),
array
  0 => (refcount=1, is_ref=0),int 0
  1 => (refcount=1, is_ref=0),int 1
  2 => (refcount=1, is_ref=0),int 2
  3 => (refcount=1, is_ref=0),int 3
a:
(refcount=2, is_ref=0),
array
  0 => (refcount=1, is_ref=0),int 0
  1 => (refcount=1, is_ref=0),int 1
  2 => (refcount=1, is_ref=0),int 2
  3 => (refcount=1, is_ref=0),int 3
b:
(refcount=2, is_ref=0),
array
  0 => (refcount=1, is_ref=0),int 0
  1 => (refcount=1, is_ref=0),int 1
  2 => (refcount=1, is_ref=0),int 2
  3 => (refcount=1, is_ref=0),int 3
  **/
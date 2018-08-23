<?php
//zval变量容器
//phpinfo();die();
//xdebug_debug_zval 需要安装xdebug扩展
$a = range(0,3);
xdebug_debug_zval('a');

/**
a:
(refcount=1, is_ref=0),
array
  0 => (refcount=1, is_ref=0),int 0
  1 => (refcount=1, is_ref=0),int 1
  2 => (refcount=1, is_ref=0),int 2
  3 => (refcount=1, is_ref=0),int 3
  **/

  //定义变量b , 把a的值赋值给$a
  $b = $a;
  xdebug_debug_zval('a');
  xdebug_debug_zval('b');
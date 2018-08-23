<?php
/**
 * php基础知识复习 - 时间函数部分
 * zhangyu 2018-08-23
 */
echo date('Y-m-d H:i:s',strtotime("now")), "\n";  // 现在时间戳
echo strtotime("10 September 2000"), "\n"; // 2000年10月现在时间戳
echo strtotime("+1 day"), "\n";  // 距离现在一天后的时间戳
echo strtotime("-3 day"), "\n";  // 距离现在三天前的时间戳
echo strtotime("+1 week"), "\n"; // 距离现在一周后的时间戳
echo strtotime("-1 month"), "\n";// 距离现在一个月前的时间戳
echo strtotime("+1 year"), "\n"; // 距离现在一年后的时间戳
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";  // 距离现在1周2天4小时2秒后的时间戳
echo strtotime("next Thursday"), "\n";  // 下个星期三
echo strtotime("last Monday"), "\n";    // 本月的最后一个星期一

//ip地址函数
$ip = gethostbyname('www.haozu.com');
var_dump($ip);
$out = ip2long($ip);
$out_ip = long2ip($ip);
var_dump($out,$out_ip);

//面试真题
$var1 = 5;
$var2 = 10;

function foo(&$my_var)
{
	global $var1;
	$var1 += 2;
	$var2 = 4;
	$my_var += 3;
	return $val2;
}
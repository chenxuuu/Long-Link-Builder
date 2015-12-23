<?php

$b=$_GET['dat'];

if($b=='')
{
	echo '<SCRIPT language=JavaScript>alert("链接格式错误！\nThe format of link is error!")</SCRIPT>';
	echo '<meta http-equiv="refresh" content="0.1;url=index.html">';
	return 0;
}
else
{
	
$in=base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($b)))))))));

if(!strstr($in, 'http://'))
{
	echo '<SCRIPT language=JavaScript>alert("链接格式错误！\nThe format of link is error!")</SCRIPT>';
	echo '<meta http-equiv="refresh" content="0.1;url=index.html">';
	return 0;
}

header("Location:$in");
}
?>
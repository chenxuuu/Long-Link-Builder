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

$b=base64_decode($b);

$decodecount=$b[2];

$decode='          ';

for($x=0;$x<$decodecount;$x++){
	$decode[$x]=$b[$x*4+4];
}

$decode='http://t.cn/'.$decode;

function  curl_post_302($url)
{
    $ch = curl_init();
    curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch,  CURLOPT_FOLLOWLOCATION, 1); // 302 redirect
    curl_setopt($ch,  CURLOPT_POSTFIELDS, "233");
    $data = curl_exec($ch);
    $Headers =  curl_getinfo($ch);
    curl_close($ch);
    if ($data != $Headers)
    return  $Headers["url"];
    else
    return $url;
}

$safe_check = file_get_contents("http://cgi.urlsec.qq.com/index.php?m=check&a=check&url=".curl_post_302($decode));

if(strstr($safe_check, "\u60a8\u8981\u8bbf\u95ee\u7684\u7f51\u7ad9\u88ab\u5927\u91cf\u7528\u6237\u4e3e\u62a5"))
{

}
else
{
    header("Location:$decode");
    return;
}

}
?><html lang="zh_CN">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="favicon.ico">
<title>非法网址！已拦截！</title>
<SCRIPT language=JavaScript>alert("该网址不安全，已为你拦截该网址！")</SCRIPT>
<body>
<div align="center">
<font size="7" style="font-family:微软雅黑">
<h1>
本页面由<a href="http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com" target="_blank">长链接生成器</a>生成<br/>
目标网址不安全，已为你拦截该网址！<br/>
如有误拦截请联系腾讯网址安全中心！
</h1>
</font>
</div>
</body>
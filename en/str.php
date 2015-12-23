<html>
<head>
    <title>The long link Generator v2.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The long link Generator">
    <meta name="keywords" content="The long link Generator">
    <meta name="author" content="晨旭">
<meta charset="UTF-8"/>
    <link rel="shortcut icon" href="f.ico">
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?aad5599351133befad7a74887ace2b5d";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>

</head>
<body>
<?php

$urlget=$_POST['content']; 

if($urlget=='')
{
	echo '<SCRIPT language=JavaScript>alert("Please enter the correct link!")</SCRIPT>';
	echo '<meta http-equiv="refresh" content="0.1;url=http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/en/">';
	return 0;
}

//判断字符串的包含


if(!strstr($urlget, 'http://'))
{
	if(!strstr($urlget, 'https://'))
	{
		$urlget='http://'.$urlget;
	}
}


function shorturl($long_url){
	$apiKey='3213676317';//要修改这里的key再测试哦
	$apiUrl='http://api.t.sina.com.cn/short_url/shorten.json?source='.$apiKey.'&url_long='.$long_url;
	$response = file_get_contents($apiUrl);
	$json = json_decode($response);
	return $json[0]->url_short;
}

function expandurl($short_url){
	$apiKey='3213676317';//要修改这里的key再测试哦
	$apiUrl='http://api.t.sina.com.cn/short_url/expand.json?source='.$apiKey.'&url_short='.$short_url;

	$response = file_get_contents($apiUrl);
	$json = json_decode($response);
	return $json[0]->url_long;
}
$str1=shorturl($urlget);

if($str1=='')
{
	echo '<SCRIPT language=JavaScript>alert("Please enter the correct link!")</SCRIPT>';
	echo '<meta http-equiv="refresh" content="0.1;url=http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/en/">';
	return 0;
}

function getRandom($param){
    $str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $key = "";
    for($i=0;$i<$param;$i++)
     {
         $key .= $str{mt_rand(0,32)};    //生成php随机数
     }
     return $key;
}

?>
<br><div align="center">
	<table border="0" width="15%">
		<tr>
			<td>
			<p align="right"><a href="../">中文</a> | English</td>
		</tr>
		<tr>
			<td><form>
<p align="center">The long link Generator v2.1</p>

</form>
			<p align="right">by <a href="http://www.chenxublog.com/" target="_blank">Chenxu</a><p></td>
		</tr>
		<tr>
			<td>Convert successful!The long link of old <a href="<?php echo $urlget;?>" target="_blank">link</a> is:<br>
			<form method="POST" action="--WEBBOT-SELF--">
				<!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
				<p><textarea rows="20" name="S1" cols="80">http://<?php echo getRandom(63);?>.biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/<?php

				$out=base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($str1)))))))));

				echo $out.$out;


				?>
</textarea></p>
<br><p><a href="http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/en/">Convert another long link!</a></p>
			</form>
			<p></td>
		</tr>
	</table>
	<table border="0" width="15%">
		<tr>
			<td>Give you a low short link:<br>
			<form method="POST" action="--WEBBOT-SELF--">
				<!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
				<p><textarea rows="9" name="S2" cols="80"><?php echo $str1; ?>
</textarea></p>
			</form>
			<p></td>
		</tr>
	</table>
</div>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="1" data-title="长链接生成器v2.1" data-url="http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"biubiubiubiubiubiu"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
</body>

</html>
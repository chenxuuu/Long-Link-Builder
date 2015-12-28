<?php

$b=$_GET['dat'];

if($b=='')
{
	echo '<SCRIPT language=JavaScript>alert("¡¥Ω”∏Ò Ω¥ÌŒÛ£°\nThe format of link is error!")</SCRIPT>';
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

header("Location:$decode");
}
?>
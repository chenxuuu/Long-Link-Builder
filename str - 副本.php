<!DOCTYPE html>
<html lang="zh-cn">
<html>
<head>
    <title>长链接生成器v2.2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="长链接生成器">
    <meta name="keywords" content="长链接生成器">
    <meta name="author" content="晨旭">
<meta charset="UTF-8"/>
    <link rel="shortcut icon" href="f.ico">
	<script type="text/javascript">
	var SEPARATION = 100, AMOUNTX = 50, AMOUNTY = 50;

	var container;
	var camera, scene, renderer;

	var particles, particle, count = 0;

	var mouseX = 0, mouseY = 0;

	var windowHalfX = window.innerWidth / 2;
	var windowHalfY = window.innerHeight / 2;

	init();
	animate();

	function init() {

		container = document.createElement( 'div' );
		document.body.appendChild( container );

		camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 10000 );
		camera.position.z = 1000;

		scene = new THREE.Scene();

		particles = new Array();

		var PI2 = Math.PI * 2;
		var material = new THREE.ParticleCanvasMaterial( {

			color: 0xffffff,
			program: function ( context ) {

				context.beginPath();
				context.arc( 0, 0, 1, 0, PI2, true );
				context.fill();

			}

		} );

		var i = 0;

		for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

			for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

				particle = particles[ i ++ ] = new THREE.Particle( material );
				particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
				particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
				scene.add( particle );

			}

		}

		renderer = new THREE.CanvasRenderer();
		renderer.setSize( window.innerWidth, window.innerHeight );
		container.appendChild( renderer.domElement );

		document.addEventListener( 'mousemove', onDocumentMouseMove, false );
		document.addEventListener( 'touchstart', onDocumentTouchStart, false );
		document.addEventListener( 'touchmove', onDocumentTouchMove, false );

		//

		window.addEventListener( 'resize', onWindowResize, false );

	}

	function onWindowResize() {

		windowHalfX = window.innerWidth / 2;
		windowHalfY = window.innerHeight / 2;

		camera.aspect = window.innerWidth / window.innerHeight;
		camera.updateProjectionMatrix();

		renderer.setSize( window.innerWidth, window.innerHeight );

	}

	//

	function onDocumentMouseMove( event ) {

		mouseX = event.clientX - windowHalfX;
		mouseY = event.clientY - windowHalfY;

	}

	function onDocumentTouchStart( event ) {

		if ( event.touches.length === 1 ) {

			event.preventDefault();

			mouseX = event.touches[ 0 ].pageX - windowHalfX;
			mouseY = event.touches[ 0 ].pageY - windowHalfY;

		}

	}

	function onDocumentTouchMove( event ) {

		if ( event.touches.length === 1 ) {

			event.preventDefault();

			mouseX = event.touches[ 0 ].pageX - windowHalfX;
			mouseY = event.touches[ 0 ].pageY - windowHalfY;

		}

	}

	//

	function animate() {

		requestAnimationFrame( animate );

		render();


	}

	function render() {

		camera.position.x += ( mouseX - camera.position.x ) * .05;
		camera.position.y += ( - mouseY - camera.position.y ) * .05;
		camera.lookAt( scene.position );

		var i = 0;

		for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

			for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

				particle = particles[ i++ ];
				particle.position.y = ( Math.sin( ( ix + count ) * 0.3 ) * 50 ) + ( Math.sin( ( iy + count ) * 0.5 ) * 50 );
				particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 2 + ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 2;

			}

		}

		renderer.render( scene, camera );

		count += 0.1;

	}
	</script>
	<script>
	(function(){
		var bp = document.createElement('script');
		bp.src = '//push.zhanzhang.baidu.com/push.js';
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(bp, s);
	})();
	</script>
	<style>
	input[type=text]{
		border-color:#bbb;
		height:38px;
		font-size:14px;
		border-radius:2px;
		outline:0;
		border:#ccc 1px solid;
		padding:0 10px;
		-webkit-transition:box-shadow .5s;
		margin-bottom:15px;
	}
	input[type=text]:hover,input[type=text]:focus,input[type=password]:hover,input[type=password]:focus {
		border:1px solid #56b4ef;
		box-shadow:inset 0 1px 3px rgba(0,0,0,.05),0 0 8px rgba(82,168,236,.6);
		-webkit-transition:box-shadow .5s;
	}
	input::-webkit-input-placeholder {
		color:#999;
		-webkit-transition:color .5s;
	}
	input:focus::-webkit-input-placeholder,input:hover::-webkit-input-placeholder {
		color:#c2c2c2;
		-webkit-transition:color .5s;
	}
	//输入框
	</style>
	<style>
	body {
		font:20px "微软雅黑",Verdana, Arial, Geneva, sans-serif;
		color:#404040;
	}
	//全局
	</style>
	
    <style type="text/css">
	/* Default button styling - this applies to all anchors with the .button class */
	.button {
		display: block; 
		font-size: 20px; 
		text-decoration: none!important; 
		font-family: Helvetica, Arial, sans serif;
		padding: 8px 12px; 
		border-radius: 3px; 
		-moz-border-radius: 3px; 
		box-shadow: inset 0px 0px 2px #fff;
		-o-box-shadow: inset 0px 0px 2px #fff;
		-webkit-box-shadow: inset 0px 0px 2px #fff;
		-moz-box-shadow: inset 0px 0px 2px #fff;
	}
	.button:active {
		box-shadow: inset 0px 0px 3px #999;
		-o-box-shadow: inset 0px 0px 3px #999;
		-webkit-box-shadow: inset 0px 0px 3px #999;
		-moz-box-shadow: inset 0px 0px 3px #999;
	}

	/* The styles for the grey button */
	.grey {
		color: #FFF;
		border: 1px solid #d0d0d0;
		background-image: -moz-linear-gradient(#ededed, #e1e1e1);
		background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e1e1e1), to(#ededed));
		background-image: -webkit-linear-gradient(rgba(237, 237, 237, 0), rgba(225, 225, 225, 0));
		background-image: -o-linear-gradient(#ededed, #e1e1e1);
		text-shadow: 1px 1px 1px #566746;
		background-color: rgba(225, 225, 225, 0);
	}
	.grey:hover {
		border: 1px solid #1AE49D;
		border-right-color: rgb(26, 228, 157);
		border-right-style: solid;
		border-right-width: 1px;
		border-bottom-color: rgb(26, 228, 157);
		border-bottom-style: solid;
		border-bottom-width: 1px;
		border-left-color: rgb(26, 228, 157);
		border-left-style: solid;
		border-left-width: 1px;
		background-image: -moz-linear-gradient(#e1e1e1, #ededed);
		background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#e1e1e1));
		background-image: -webkit-linear-gradient(#4AB38A, #4AB38A);
		background-image: -o-linear-gradient(#e1e1e1, #ededed);
		background-color: #ededed;
	}
	.grey:active {border: 1px solid #666;}

	/* The styles for the button groups */

	.left {
		border-top-right-radius: 0px;
		-moz-border-top-right-radius: 0px;
		border-bottom-right-radius: 0px;
		-moz-border-bottom-right-radius: 0px;
		border-right: 0px;
	}
	.left:hover {
		border-right: 0px;
	}
	.middle {
		border-radius: 0px;
		-moz-radius: 0px;
		border-right: 0px;
	}
	.middle:hover {
		border-right: 0px;
	}
	.right {
		border-top-left-radius: 0px;
		-moz-border-top-left-radius: 0px;
		border-bottom-left-radius: 0px;
		-moz-border-bottom-left-radius: 0px;
	}

	/* Large Styles */

	.large {padding: 14px 28px;}
    </style>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php

$urlget=$_POST['content']; 

if($urlget=='')
{
	echo '<SCRIPT language=JavaScript>alert("请填写正确的网址！")</SCRIPT>';
	echo '<meta http-equiv="refresh" content="0.1;url=index.html">';
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
	echo '<SCRIPT language=JavaScript>alert("请填写正确的网址！")</SCRIPT>';
	echo '<meta http-equiv="refresh" content="0.1;url=index.html">';
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
$ranstr1=getRandom(150);
$ranstr2=getRandom(400);
$str1=str_replace('http://t.cn/','',$str1);
?>
<div align="center">

<div class="htmleaf-container">
	<div class="wrapper form-success">
		<tr>
			<td>
				<form action="str.php" method="post">
				<p align="right">中文 | <a href="en/">English</a></p>
				<p align="center">长链接生成器v2.2</p>
				生成成功！<a href="<?php echo $urlget;?>" target="_blank">原网址</a>的长链接为：<br>
				<p><input type="text" name="content" id="fe_text" placeholder="输入网址~" value="http://<?php echo getRandom(63);?>.biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/<?php
$strcount=strlen($str1);
	
for($x=0;$x<$strcount;$x++){
	$ranstr1[$x*4+4]=$str1[$x];
}

$ranstr1[2]=$strcount;

$final=$ranstr1.$ranstr2;
$final=base64_encode($final);
$final=str_replace('=','',$final);
echo $final;
?>" size="82">
								<button id="d_clip_button" class="button grey large" data-clipboard-target="fe_text"><b>copy~</b></button>
								
				<br><a href="index.html">再生成一个长链接</a>
				<p align="right">by <a href="http://www.chenxublog.com/" target="_blank">晨旭</a></p>
				</form>
		</td>
		</tr>

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
		
</div>


<script src="jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$('#login-button').click(function (event) {
	event.preventDefault();
	$('form').fadeOut(500);
	$('.wrapper').addClass('form-success');
});
</script>

<script type="text/javascript" src="ZeroClipboard.min.js"></script>
<script type="text/javascript">
// 定义一个新的复制对象
var clip = new ZeroClipboard( document.getElementById("d_clip_button"), {
  moviePath: "ZeroClipboard.swf"
} );

// 复制内容到剪贴板成功后的操作
clip.on( 'complete', function(client, args) {
   alert("复制成功~");
} );

</script>

<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jiathis_r.js?type=left&amp;move=0&amp;btn=l1.gif" charset="utf-8"></script>
<!-- JiaThis Button END -->
<tr>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="1" data-title="长链接生成器" data-url="http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/index.html"></div>
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
</tr>
<!-- 	<script type="text/javascript">
	!function(){function o(w,v,i){return w.getAttribute(v)||i}function j(i){return document.getElementsByTagName(i)}function l(){var i=j("script"),w=i.length,v=i[w-1];return{l:w,z:o(v,"zIndex",-1),o:o(v,"opacity",0.5),c:o(v,"color","0,0,0"),n:o(v,"count",99)}}function k(){r=u.width=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,n=u.height=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight}function b(){e.clearRect(0,0,r,n);var w=[f].concat(t);var x,v,A,B,z,y;t.forEach(function(i){i.x+=i.xa,i.y+=i.ya,i.xa*=i.x>r||i.x<0?-1:1,i.ya*=i.y>n||i.y<0?-1:1,e.fillRect(i.x-0.5,i.y-0.5,1,1);for(v=0;v<w.length;v++){x=w[v];if(i!==x&&null!==x.x&&null!==x.y){B=i.x-x.x,z=i.y-x.y,y=B*B+z*z;y<x.max&&(x===f&&y>=x.max/2&&(i.x-=0.03*B,i.y-=0.03*z),A=(x.max-y)/x.max,e.beginPath(),e.lineWidth=A/2,e.strokeStyle="rgba("+s.c+","+(A+0.2)+")",e.moveTo(i.x,i.y),e.lineTo(x.x,x.y),e.stroke())}}w.splice(w.indexOf(i),1)}),m(b)}var u=document.createElement("canvas"),s=l(),c="c_n"+s.l,e=u.getContext("2d"),r,n,m=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(i){window.setTimeout(i,1000/45)},a=Math.random,f={x:null,y:null,max:20000};u.id=c;u.style.cssText="position:fixed;top:0;left:0;z-index:"+s.z+";opacity:"+s.o;j("body")[0].appendChild(u);k(),window.onresize=k;window.onmousemove=function(i){i=i||window.event,f.x=i.clientX,f.y=i.clientY},window.onmouseout=function(){f.x=null,f.y=null};for(var t=[],p=0;s.n>p;p++){var h=a()*r,g=a()*n,q=2*a()-1,d=2*a()-1;t.push({x:h,y:g,xa:q,ya:d,max:6000})}setTimeout(function(){b()},100)}();
	</script> -->
</body>

</html>
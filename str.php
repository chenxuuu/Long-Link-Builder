<!DOCTYPE html>
<html lang="zh-cn">
  <html>

    <head>
      <title>长链接生成器v2.2</title>
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="description" content="长链接生成器">
      <meta name="keywords" content="长链接生成器">
      <meta name="author" content="晨旭">
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="f.ico">
      <script type="text/javascript">function init() {
          container = document.createElement("div"),
          document.body.appendChild(container),
          camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 1e4),
          camera.position.z = 1e3,
          scene = new THREE.Scene,
          particles = new Array;
          for (var e = 2 * Math.PI,
          n = new THREE.ParticleCanvasMaterial({
            color: 16777215,
            program: function(n) {
              n.beginPath(),
              n.arc(0, 0, 1, 0, e, !0),
              n.fill()
            }
          }), i = 0, o = 0; AMOUNTX > o; o++) for (var t = 0; AMOUNTY > t; t++) particle = particles[i++] = new THREE.Particle(n),
          particle.position.x = o * SEPARATION - AMOUNTX * SEPARATION / 2,
          particle.position.z = t * SEPARATION - AMOUNTY * SEPARATION / 2,
          scene.add(particle);
          renderer = new THREE.CanvasRenderer,
          renderer.setSize(window.innerWidth, window.innerHeight),
          container.appendChild(renderer.domElement),
          document.addEventListener("mousemove", onDocumentMouseMove, !1),
          document.addEventListener("touchstart", onDocumentTouchStart, !1),
          document.addEventListener("touchmove", onDocumentTouchMove, !1),
          window.addEventListener("resize", onWindowResize, !1)
        }
        function onWindowResize() {
          windowHalfX = window.innerWidth / 2,
          windowHalfY = window.innerHeight / 2,
          camera.aspect = window.innerWidth / window.innerHeight,
          camera.updateProjectionMatrix(),
          renderer.setSize(window.innerWidth, window.innerHeight)
        }
        function onDocumentMouseMove(e) {
          mouseX = e.clientX - windowHalfX,
          mouseY = e.clientY - windowHalfY
        }
        function onDocumentTouchStart(e) {
          1 === e.touches.length && (e.preventDefault(), mouseX = e.touches[0].pageX - windowHalfX, mouseY = e.touches[0].pageY - windowHalfY)
        }
        function onDocumentTouchMove(e) {
          1 === e.touches.length && (e.preventDefault(), mouseX = e.touches[0].pageX - windowHalfX, mouseY = e.touches[0].pageY - windowHalfY)
        }
        function animate() {
          requestAnimationFrame(animate),
          render()
        }
        function render() {
          camera.position.x += .05 * (mouseX - camera.position.x),
          camera.position.y += .05 * ( - mouseY - camera.position.y),
          camera.lookAt(scene.position);
          for (var e = 0,
          n = 0; AMOUNTX > n; n++) for (var i = 0; AMOUNTY > i; i++) particle = particles[e++],
          particle.position.y = 50 * Math.sin(.3 * (n + count)) + 50 * Math.sin(.5 * (i + count)),
          particle.scale.x = particle.scale.y = 2 * (Math.sin(.3 * (n + count)) + 1) + 2 * (Math.sin(.5 * (i + count)) + 1);
          renderer.render(scene, camera),
          count += .1
        }
        var SEPARATION = 100,
        AMOUNTX = 50,
        AMOUNTY = 50,
        container, camera, scene, renderer, particles, particle, count = 0,
        mouseX = 0,
        mouseY = 0,
        windowHalfX = window.innerWidth / 2,
        windowHalfY = window.innerHeight / 2;
        init(),
        animate();</script>
      <script>(function() {
          var bp = document.createElement('script');
          bp.src = '//push.zhanzhang.baidu.com/push.js';
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(bp, s);
        })();</script>
      <style>input[type=text]{border-color:#bbb;height:38px;font-size:14px;border-radius:2px;outline:0;border:#ccc 1px solid;padding:0 10px;-webkit-transition:box-shadow .5s;margin-bottom:15px}input[type=text]:hover,input[type=text]:focus,input[type=password]:hover,input[type=password]:focus{border:1px solid #56b4ef;box-shadow:inset 0 1px 3px rgba(0,0,0,.05),0 0 8px rgba(82,168,236,.6);-webkit-transition:box-shadow .5s}input::-webkit-input-placeholder{color:#999;-webkit-transition:color .5s}input:focus::-webkit-input-placeholder,input:hover::-webkit-input-placeholder{color:#c2c2c2;-webkit-transition:color .5s}//输入框</style>
      <style>body{font:20px "微软雅黑",Verdana,Arial,Geneva,sans-serif;color:#404040}//全局</style>
      <style type="text/css">.button{display:block;font-size:20px;text-decoration:none!important;font-family:Helvetica,Arial,sans serif;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;box-shadow:inset 0 0 2px #fff;-o-box-shadow:inset 0 0 2px #fff;-webkit-box-shadow:inset 0 0 2px #fff;-moz-box-shadow:inset 0 0 2px #fff}.button:active{box-shadow:inset 0 0 3px #999;-o-box-shadow:inset 0 0 3px #999;-webkit-box-shadow:inset 0 0 3px #999;-moz-box-shadow:inset 0 0 3px #999}.grey{color:#FFF;border:1px solid #d0d0d0;background-image:-moz-linear-gradient(#ededed,#e1e1e1);background-image:-webkit-gradient(linear,0 0,0 100%,from(#e1e1e1),to(#ededed));background-image:-webkit-linear-gradient(rgba(237,237,237,0),rgba(225,225,225,0));background-image:-o-linear-gradient(#ededed,#e1e1e1);text-shadow:1px 1px 1px #566746;background-color:rgba(225,225,225,0)}.grey:hover{border:1px solid #1AE49D;border-right-color:#1ae49d;border-right-style:solid;border-right-width:1px;border-bottom-color:#1ae49d;border-bottom-style:solid;border-bottom-width:1px;border-left-color:#1ae49d;border-left-style:solid;border-left-width:1px;background-image:-moz-linear-gradient(#e1e1e1,#ededed);background-image:-webkit-gradient(linear,0 0,0 100%,from(#ededed),to(#e1e1e1));background-image:-webkit-linear-gradient(#4AB38A,#4AB38A);background-image:-o-linear-gradient(#e1e1e1,#ededed);background-color:#ededed}.grey:active{border:1px solid #666}.left{border-top-right-radius:0;-moz-border-top-right-radius:0;border-bottom-right-radius:0;-moz-border-bottom-right-radius:0;border-right:0}.left:hover{border-right:0}.middle{border-radius:0;-moz-radius:0;border-right:0}.middle:hover{border-right:0}.right{border-top-left-radius:0;-moz-border-top-left-radius:0;border-bottom-left-radius:0;-moz-border-bottom-left-radius:0}.large{padding:14px 28px}</style>
      <link rel="stylesheet" type="text/css" href="styles.css"></head>

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


$str1 = base64_encode(gzdeflate($urlget));

$str1 = strrev($str1);

$str1 = str_replace('=','',$str1);

$str1 = base64_encode($str1."*");

if(strlen($str1) >= 850) //长度超过最大
{
  echo '<SCRIPT language=JavaScript>alert("网址过长，生成失败！")</SCRIPT>';
  echo '<meta http-equiv="refresh" content="0.1;url=index.html">';
  return 0;
}

function getRandom($param,$nostar){
    $str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $key = "";
    for($i=0;$i<$param;$i++)
     {
         $key .= $str{mt_rand(0,32)};    //生成php随机数
     }
     if($nostar && strpos(base64_decode($key),"*") !==false)
     {
      return getRandom($param,true);
     }
     return $key;
}

$urlSite = "https://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/";
$urlResult = getRandom(100,false).$str1.getRandom(950 - strlen($str1),true);

?>
      <div align="center">
        <div class="htmleaf-container">
          <div class="wrapper form-success">
            <tr>
              <td>
                <form action="str.php" method="post">
                  <p align="right">中文 | <a href="en/">English</a></p>生成成功！
                  <a href="<?php echo $urlget;?>" target="_blank">原网址</a>的长链接为：
                  <br>
                  <p>
                    <input type="text" name="content" id="fe_text" placeholder="输入网址~" value="<?php echo $urlSite.$urlResult; ?>" size="82">
                    <button id="d_clip_button" class="button grey large" data-clipboard-target="fe_text">
                      <b>copy~</b>
                    </button>该网址的镜像镜像：
                    <input type="text" value="<?php echo $urlSite."mirror".$urlResult; ?>" size="82">
                    <a href="index.html">再生成一个长链接</a></p>
                  <p align="right">by
                    <a href="http://www.chenxublog.com/" target="_blank">晨旭</a></p>
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
      <script>$("#login-button").click(function(e) {
          e.preventDefault(),
          $("form").fadeOut(500),
          $(".wrapper").addClass("form-success")
        });</script>
      <script type="text/javascript" src="ZeroClipboard.min.js"></script>
      <script type="text/javascript">var clip = new ZeroClipboard(document.getElementById("d_clip_button"), {
          moviePath: "ZeroClipboard.swf"
        });
        clip.on("complete",
        function() {
          alert("复制成功~")
        });</script>
      <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jiathis_r.js?type=left&amp;move=0&amp;btn=l1.gif" charset="utf-8"></script>
      <tr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="ds-thread" data-thread-key="1" data-title="长链接生成器" data-url="http://biubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiubiu.com/index.html"></div>
        <script type="text/javascript">var duoshuoQuery = {
            short_name: "biubiubiubiubiubiu"
          }; !
          function() {
            var t = document.createElement("script");
            t.type = "text/javascript",
            t.async = !0,
            t.src = ("https:" == document.location.protocol ? "https:": "http:") + "//static.duoshuo.com/embed.js",
            t.charset = "UTF-8",
            (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(t)
          } ();</script>
      </tr>
    </body>

  </html>

</html>

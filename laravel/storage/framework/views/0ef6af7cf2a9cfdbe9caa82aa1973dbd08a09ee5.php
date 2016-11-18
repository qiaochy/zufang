<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name='keywords'
          content=''>
    <meta name="description"
          content=""/>
    <link rel="icon" type="image/x-icon" href="http://s1.wutongwan.org/favicon.ico">
    <!-- Set render engine for multi engine browser -->
<?php echo $__env->yieldContent('header'); ?>


</head>

<!--[if lte IE 8]>
<script src="http://s2.wutongwan.org/build/js/pc_home/html5shiv-38554644e6.js"></script>

<script src="http://s2.wutongwan.org/build/js/pc_home/respond-972b9d5576.min.js"></script>

<![endif]-->

<!--[if lt IE 8]>
<div class="alert-danger text-center">您正在使用<strong>过时</strong>的浏览器，本网站不能很好的支持。
    <a href="http://browser.qq.com/" target="_blank">立即使用最新QQ浏览器</a> 获得更好的使用体验！
</div>
<![endif]-->

<body>

<div class="danke_header" id="topbar">
    <div class="nav_warp">
        <div class="fl">
            <a href="javascript:void(0)" class="logo" title="蛋壳公寓"><img src="img/logo.png"/></a>
        </div>
        <div class="fl grline"></div>
        
        <div class="fl nav_channel">
            <ul>
                <li><a href="index" class="ss">首页</a></li>
                <li>
                    <a href="room" class="ss">我要租房</a>
                </li>
                <li>
                    <a href="notice" class="ss">租前必读</a>
                </li>

                <li>
                    <a href="abouts" class="ss">关于1024公寓</a>
                </li>
            </ul>
        </div>
        <div class="fr serphone">
            <div class="phonetime">
                客服热线：09:00 ~ 21:00
            </div>
            <div class="phonenum">
                400-818-5656
            </div>
        </div>
    </div>
    <div class="shadow"></div>
</div>

    <?php echo $__env->yieldContent('content'); ?>
</body>

<script>
    $(".ss").click(function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    })
</script>
</html>
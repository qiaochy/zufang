
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>北京租房_蛋壳公寓官网-为都市白领打造高品质的租住环境</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name='keywords'
          content='北京租房,北京合租,北京租房信息,北京公寓,北京白领公寓,房屋合租,蛋壳公寓北京站,合租公寓,蛋壳公寓,蛋壳公寓官网,白领租房信息,免中介费,押一付一,蛋壳租房信息'>
    <meta name="description"
          content="【100%真实房源】【免中介费】【付一押一】蛋壳公寓致力于为都市白领创造高品质租住生活，做国内最专业的白领合租公寓，希望通过我们的努力，给您提供一个安心舒适的居住环境。"/>
    <link rel="icon" type="image/x-icon" href="http://s1.wutongwan.org/favicon.ico">
    <!-- Set render engine for multi engine browser -->
@yield('header')


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
            <a href="/" class="logo" title="蛋壳公寓"><img src="img/logo.png"/></a>
        </div>
        <div class="fl grline"></div>
        <div class="fl dkcity">
            <span id="dropdownMenu1" data-toggle="dropdown"><i></i>北京</span>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li>
                        <a href="http://www.dankegongyu.com/bj">
                            北京市
                        </a>
                    </li>
                                    <li>
                        <a href="http://www.dankegongyu.com/sz">
                            深圳市
                        </a>
                    </li>
                                    <li>
                        <a href="http://www.dankegongyu.com/sh">
                            上海市
                        </a>
                    </li>
                
            </ul>
        </div>
        <div class="fl nav_channel">
            <ul>
                <li><a href="index" class="ss">首页</a></li>
                <li>
                    <a href="room" class="ss">我要租房</a>
                </li>
                <li>
                    <a href="notice" class="ss">租前必读</a>
                </li>
                    <li><a href="javascript:void(0)" id="fangdongjiameng">房东加盟</a></li>
                <li>
                    <a href="abouts" class="ss">关于蛋壳</a>
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

    @yield('content')
</body>

<script>
    $(".ss").click(function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    })
</script>
</html>
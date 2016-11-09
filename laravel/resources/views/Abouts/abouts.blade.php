@extends('Layout/layout')
@section('header')
    <meta name="renderer" content="webkit">
    <!-- Disable Baidu Siteapp -->
    <meta http-equiv="Cache-Control" content="no-siteapp">

    <link media="all" type="text/css" rel="stylesheet" href="css/bootstrap-2f624089c6.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="css/swiper-0b941af5db.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="css/common-f34e3d4c02.css">


        <link media="all" type="text/css" rel="stylesheet" href="css/about-us-f2f37daa1a.css">


@stop

@section('content')


    <!--header end-->
    <div class="wrapper">
        <!--面包屑导航-->
        <div class="intro">
            <div class="fl container_n">
                <a href="http://www.dankegongyu.com/">首页</a> &gt; <a href="./蛋壳公寓介绍_蛋壳公寓_files/蛋壳公寓介绍_蛋壳公寓.html">关于我们</a>
            </div>
        </div>
        <!--面包屑导航 end-->
    </div>
    <!--关于我们-->
    <div class="wrapper clearfix">
        <div class="fl roomintro">
            <div class="hp_usbox">
    <ul>
                    <li class="active">
                <a href="abouts">关于租房网</a>
            </li>
                    <li class="">
                <a href="touch">联系租房网</a>
            </li>
                   
            </ul>
</div>        </div>

        <div class="fr roomcenter">
           
            <div class="hp_txtbox">
               {!!$my['content']!!}
            </div>
        </div>

    </div>

<div class="footer">
    <div class="footcontainer">
        <div class="fl contai">
            <a href="tel:4008185656" class="m_keep"><i></i><span>客服热线：400-818-5656</span></a>
            <a href="./蛋壳公寓介绍_蛋壳公寓_files/蛋壳公寓介绍_蛋壳公寓.html">关于蛋壳</a><span>·</span>
            <a href="http://www.dankegongyu.com/about/contact">联系蛋壳</a><span>·</span>
            <a href="http://www.dankegongyu.com/about/join">加入蛋壳</a><span>·</span>
            <span>关注我们</span>
            <a target="_blank" href="http://weibo.com/u/5712515570?refer_flag=1001030101" class="mart10">
                <img src="./img/weibo_icon.png">
            </a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#myWeixin" class="mart10">
                <img src="./img/weixin_weixin.png">
            </a>
        </div>
        <div class="fr copyt">
            © 2016 蛋壳公寓 京ICP备15009197号
        </div>
    </div>
</div>

<!-- 关注微信-->
<div class="modal fade" id="myWeixin" tabindex="-1" role="dialog" aria-labelledby="myWeixinLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    关注蛋壳公寓官方微信
                </h4>
            </div>
            <div class="modal-body">
                <img src="./img/wechat_mp_qr_200.jpg">
            </div>
            <div class="modal-body text-center gui9">
                扫描二维码，关注“蛋壳公寓官方微信”<br>更多优惠信息，第一时间掌握。
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script charset="utf-8" src="js/lxb.js"></script><script charset="utf-8" src="js/v.js"></script><script src="js/hm.js"></script><script async="" src="js/analytics.js"></script><script src="js/jquery-8fa48925b6.min.js"></script>

<script src="js/bootstrap-c5b5b2fa19.min.js"></script>

<script src="js/swiper-3-cd2bffb7f2.3.1.min.js"></script>

<script src="js/public-fea84bbb90.js"></script>

<script>
        var tracker = {
            channel: '' || null,
            platform: "pc",
            city: "北京市"
        };
    </script>

        <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'js/analytics.js', 'ga');

        ga('create', 'UA-67874461-1', 'auto');
        ga('set', 'dimension1', tracker.platform);
        ga('set', 'dimension2', tracker.channel);
        ga('set', 'dimension3', tracker.city);
        ga('send', 'pageview');
    </script>

        <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "js/hm.js?814ef98ed9fc41dfe57d70d8a496561d";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>


<script>
    $(document).ready(function () {
        jkmethod($('a[href^="tel"]'),'click_tel_button',this.href);
        jkmethod($('#click_kanfang'),'click_kanfang', window.location.href);
        jkmethod($('#click_submit_order'),'click_submit_order', window.location.href);
    });
    function jkmethod(obj, ev, play) {
        obj.on('click', function () {
            ga('send', 'event', ev, play);
        });
    }
</script>
@stop
@extends('Layout/layout')
@section('header')
    <meta name="renderer" content="webkit">
    <!-- Disable Baidu Siteapp -->
    <meta http-equiv="Cache-Control" content="no-siteapp">

    <link media="all" type="text/css" rel="stylesheet" href="css/bootstrap-2f624089c6.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="css/swiper-0b941af5db.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="css/common-f34e3d4c02.css">


        <link media="all" type="text/css" rel="stylesheet" href="css/list-a87958db94.css">


<link type="text/css" rel="stylesheet" href="css/chatStyle.css">
@stop

@section('content')


    <input type="hidden" name="" id="windowId" value="list">
    <div class="wrapper">
        <!--面包屑导航-->
        <div class="intro">
            <div class="fl container">
                <a href="index">首页</a> &gt;
                <a href="room">我要租房</a>
            </div>
        </div>
        <!--面包屑导航 end-->
        <!--条件找房-->
        <div class="zf_c_box">
            <div class="zf_ban_t">
                <div class="zf_ban_ta">
                    按条件找房
                </div>
                <div class="zf_map_ta">
                    <a href="http://www.dankegongyu.com/room/map/bj?from=room" target="_blank">地图找房</a>
                </div>
            </div>
            <form method="GET" action="./北京租房信息_蛋壳公寓北京站_files/北京租房信息_蛋壳公寓北京站.html" accept-charset="UTF-8">
            <input type="hidden" name="search" value="1">
            <div class="zf_sebox">
                <div class="sear_menu">
                    <input type="text" class="sear_input" name="search_text" value="" placeholder="例如: 10号线、四惠、天通苑等">
                    <button type="submit" class="search_btn">搜索</button>
                </div>
                <div class="sear_more">
                    热门搜索：
                    <a href="http://www.dankegongyu.com/room/bj?search=1&from=hot_keywords&suite_status=%E7%8E%B0%E6%88%BF">现房</a>
                    <a href="http://www.dankegongyu.com/room/bj?search=1&from=hot_keywords&suite_bedroom_num=1">一居室</a>
                                                                <a href="http://www.dankegongyu.com/room/bj?search=1&from=hot_keywords&search_text=10%E5%8F%B7%E7%BA%BF">10号线</a>
                                            <a href="http://www.dankegongyu.com/room/bj?search=1&from=hot_keywords&search_text=%E5%A4%A9%E9%80%9A%E8%8B%91">天通苑</a>
                                            <a href="http://www.dankegongyu.com/room/bj?search=1&from=hot_keywords&search_text=%E5%9B%9E%E9%BE%99%E8%A7%82">回龙观</a>
                                            <a href="http://www.dankegongyu.com/room/bj?search=1&from=hot_keywords&search_text=%E9%9D%92%E5%B9%B4%E8%B7%AF">青年路</a>
                                        <a href="./北京租房信息_蛋壳公寓北京站_files/北京租房信息_蛋壳公寓北京站.html">所有房源</a>
                </div>
            </div>
            </form>

            <div class="filter_options">
                <dl class="dl_lst">
                    <dt>区域：</dt>
                    <dd>
<<<<<<< HEAD
                        <div class="option_list">
                            <a href="room?region_id=%" class="region">不限</a>
                            <!-- <a href="javascript:void(0)" region_id="%" class="region onlist">不限</a> -->
                            @foreach($region as $item)
                            <a href="room?region_id={{$item['region_id']}}" class="region">{{$item['region_name']}}</a>
                            <!-- <a href="javascript:void(0)" region_id="{{$item['region_id']}}" class="region">{{$item['region_name']}}</a> -->
                            @endforeach
                        </div>    
                    </dd>
=======
                                                    <div class="option_list">
                                                                    <a href="room" class="onlist">不限</a>
                                                                    @foreach($region as $item)
                                                                    <a href="room?region_name={{$item['region_name']}}">{{$item['region_name']}}</a>
                                                                    @endforeach
                                                    </dd>
                                                                
>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
                </dl>
                                    
                
                <dl class="dl_lst">
                    <dt>租金：</dt>
                    <dd>
<<<<<<< HEAD
                        <div class="option_list">
<!--                             <a href="room?price=0&priced=20000" class="onlist price">不限</a>
                            <a href="room?price=0&priced=2000" class="">2000元以下</a>
                            <a href="room?price=2000&priced=2500" class="">2000-2500元</a>
                            <a href="room?price=2500&priced=3000" class="">2500-3000元</a>
                            <a href="room?price=3000&priced=3500" class="">3000-3500元</a>
                            <a href="room?price=3500&priced=20000" class="">3500元以上</a> -->
                            <a href="javascript:void(0)" price="price=0&priced=20000" class="price">不限</a>
                            <a href="javascript:void(0)" price="price=0&priced=2000" class="price">2000元以下</a>
                            <a href="javascript:void(0)" price="price=2000&priced=2500" class="price">2000-2500元</a>
                            <a href="javascript:void(0)" price="price=2500&priced=3000" class="price">2500-3000元</a>
                            <a href="javascript:void(0)" price="price=3000&priced=3500" class="price">3000-3500元</a>
                            <a href="javascript:void(0)" price="price=3500&priced=20000" class="price">3500元以上</a>
=======
                                                <div class="option_list">
                            <a href="http://www.dankegongyu.com/room/bj?search=1" class="onlist">不限</a>
                                                                                            <a href="room?begin=1&end=2000" class="">2000元以下</a>
                                                                                            <a href="room?begin=2000&end=2500" class="">2000-2500元</a>
                                                                                            <a href="room?begin=2500&end=3000" class="">2500-3000元</a>
                                                                                            <a href="room?begin=3000&end=3500" class="">3000-3500元</a>
                                                                                            <a href="room?begin=3500&end=99999" class="">3500元以上</a>
                            

>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
                        </div>
                    </dd>
                </dl>
                <dl class="dl_lst">
                    <dt>居室：</dt>
                    <dd>
                        <div class="option_list">
<<<<<<< HEAD
                            <a href="javascript:void(0)" cat_id = "cat_id=%" class="cate">不限</a>
                            @foreach($cate as $item)
                            <a href="javascript:void(0)" cat_id = "cat_id={{$item['cat_id']}}" class="cate">{{$item['cat_name']}}</a>
=======

                            
                            <a href="http://www.dankegongyu.com/room/bj?search=1" class="onlist">不限</a>
                            @foreach($cate as $item)
                            <a href="room?cat_name={{$item['cat_name']}}">{{$item['cat_name']}}</a>
>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
                            @endforeach
                        </div>
                    </dd>
                </dl>
                <dl class="dl_lst">
                    <dt>特色：</dt>
                    <dd>
                        <div class="dlul">
                            <a href="javascript:void(0)" class="pri" p_id = "p_id=%">
                                <i></i>不限
                            </a>

<<<<<<< HEAD
                            <a href="javascript:void(0)" class="pri" p_id = "p_id=1">
=======
                                                        <a href="">
>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
                                <i></i>独卫
                            </a>

                            <a href="javascript:void(0)" class="pri" p_id = "p_id=3">
                                <i></i>独立阳台
                            </a>
                            <a href="javascript:void(0)" class="pri" p_id = "p_id=2">
                                <i></i>独立淋浴
                            </a>
                        </div>
                        <!--主次卧-->
                        
<!--                         <div class="bedroombox selectmodel">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    主次卧
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="javascript:void(0)" class="zc" r_title = "r_title=''">不限</a></li>
                                    <li><a href="javascript:void(0)" class="zc" r_title = "r_title='主卧'">主卧</a></li>
                                    <li><a href="javascript:void(0)" class="zc" r_title = "r_title='次卧'">次卧</a></li>
                                </ul>
                            </div>
                        </div>
 -->                        <!--朝向face-->
                        
<!--                         <div class="directionbox selectmodel">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    朝向
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
<<<<<<< HEAD
                                    <li><a href="http://www.dankegongyu.com/room/bj?search=1&page=1&face=">不限</a></li>
                                    <li><a href="http://www.dankegongyu.com/room/bj?search=1&page=1&face=%E4%B8%9C">东</a></li>
                                    <li><a href="http://www.dankegongyu.com/room/bj?search=1&page=1&face=%E5%8D%97">南</a></li>
                                    <li><a href="http://www.dankegongyu.com/room/bj?search=1&page=1&face=%E8%A5%BF">西</a></li>
                                    <li><a href="http://www.dankegongyu.com/room/bj?search=1&page=1&face=%E5%8C%97">北</a></li>
=======
                                                                        <li><a href="room">不限</a></li>
                                                                        <li><a href="room?direct=东">东</a></li>
                                                                        <li><a href="room?direct=南">南</a></li>
                                                                        <li><a href="room?direct=西">西</a></li>
                                                                        <li><a href="room?direct=北">北</a></li>
>>>>>>> b391d4934e101f86dc04909c98c6a1662e57cdc5
                                </ul>
                            </div>
                                </ul>
                            </div>
                        </div> -->


                    </dd>
                </dl>

            </div>


        </div>
        <!--条件找房 end-->

        <!--房源列表-->
        <div class="roomlist">
                <div class="r_ls">
                    <a href="http://www.dankegongyu.com/room/bj?orderby=&asc=" class="ss ck_on">默认</a>
                    <a href="room?asc=r_price" class="ss">价格<i></i></a>
                    <a href="room?asc=r_area" class="ss">面积<i></i></a>
                </div>
                                    
                <div class="r_ls_box">
                    @foreach($room as $item)
                        <div class="r_lbx">
                            <a href="http://www.dankegongyu.com/room/3584.html" class="rimg"><img src="http://www.feng.com:8080/house/zufang/zufang/yii2/backend/web/{{$item['r_img']}}"></a>
                            <div class="r_lbx_cen">
                                <a href="http://www.dankegongyu.com/room/3584.html">{{$item['region_name']}} {{$item['h_name']}} {{$item['r_title']}} {{$item['direct']}} {{$item['r_name']}}</a>
                                <div class="r_lbx_cena">
                                    {{$item['survey']}}
                                </div>
                                <div class="r_lbx_cenb">

                                     {{$item['r_area']}}㎡ | {{$item['floor']}}楼 |  {{$item['cat_name']}} | {{$item['direct']}}
                                </div>
                                <div class="r_lbx_cenc">
                                    @foreach($item['privape'] as $val)
                                                          
                                        @if($val['p_id']==1)          
                                        <span>独立卫生间</span>
                                        @endif
                                        @if($val['p_id']==2)
                                        <span>独立淋浴</span>
                                        @endif
                                        @if($val['p_id']==3)
                                        <span>独立阳台</span>
                                        @endif
                                  @endforeach
                             </div>
                            </div>
                            <div class="r_lbx_money">
                                <div class="r_lbx_moneya">
                                    <span class="ty_a">￥</span>
                                    <span class="ty_b">{{$item['r_price']}}</span>
                                    <span class="ty_c">/ 月</span>
                                </div>
                                <a class="lk_more" href="http://www.dankegongyu.com/room/3584.html">
                                    查看房间详情
                                </a>
                            </div>
                        </div>
                    @endforeach
                                         
                                        
                <!--翻页插件-->

                
                <div class="page">

                    <a href="http://www.dankegongyu.com/room/bj?page=1" class="on">1</a>
                    <a href="http://www.dankegongyu.com/room/bj?page=2">2</a>
                    <a href="http://www.dankegongyu.com/room/bj?page=3">3</a>
                    <a href="http://www.dankegongyu.com/room/bj?page=4">4</a>
                    <a href="http://www.dankegongyu.com/room/bj?page=5">5</a>
                    <a href="http://www.dankegongyu.com/room/bj?page=2">&gt;</a>
                </div>
                <!--翻页插件 end-->
                </div>

        <!--房源列表 end-->

        <!--猜你喜欢-->
        <div class="y_like_box">
            <div class="lk_titl">
                猜你喜欢
            </div>
            <div class="lk_room_box">
                                    <dl>
                        <dt>
                            <a href="http://www.dankegongyu.com/room/6574.html">
                                <img src="img/public-20160801-FiLr4-y-I-gvF1e_Kg3nnR__53s-">
                                <div class="month_y">
                                    2190<span>元/月</span>
                                </div>
                            </a>
                        </dt>
                        <dd>
                            <a href="http://www.dankegongyu.com/room/6574.html">天通苑南 丽水园 主卧 朝北 C室</a>
                            <p>
                                地铁 5号线 / 15平米  / 独立阳台  
                            </p>
                        </dd>
                    </dl>
                                    <dl>
                        <dt>
                            <a href="http://www.dankegongyu.com/room/733.html">
                                <img src="img/public-20161021-FhiaKHSCAmhuw4aieALPvqkygCYQ">
                                <div class="month_y">
                                    3690<span>元/月</span>
                                </div>
                            </a>
                        </dt>
                        <dd>
                            <a href="http://www.dankegongyu.com/room/733.html">五道口 清华园 主卧 朝南 B室</a>
                            <p>
                                地铁 13号线 / 13平米 
                            </p>
                        </dd>
                    </dl>
                                    <dl>
                        <dt>
                            <a href="http://www.dankegongyu.com/room/383.html">
                                <img src="img/public-20160902-Ftklnzh1Fa4XHhWoMc2tQylmtzSG">
                                <div class="month_y">
                                    1850<span>元/月</span>
                                </div>
                            </a>
                        </dt>
                        <dd>
                            <a href="http://www.dankegongyu.com/room/383.html">育知路 风雅园二区 次卧 朝南 C室</a>
                            <p>
                                地铁 8号线 / 9平米 
                            </p>
                        </dd>
                    </dl>
                                    <dl>
                        <dt>
                            <a href="http://www.dankegongyu.com/room/7092.html">
                                <img src="img/no-picture.jpg">
                                <div class="month_y">
                                    1790<span>元/月</span>
                                </div>
                            </a>
                        </dt>
                        <dd>
                            <a href="http://www.dankegongyu.com/room/7092.html">新宫 德鑫嘉园 次卧 朝北 A室</a>
                            <p>
                                地铁 大兴线 / 10平米 
                            </p>
                        </dd>
                    </dl>
                            </div>
        </div>
        <!--猜你喜欢 end-->
    </div>



<div class="footer">
    <div class="footcontainer">
        <div class="fl contai">
            <a href="tel:4008185656" class="m_keep"><i></i><span>客服热线：400-818-5656</span></a>
            <a href="http://www.dankegongyu.com/about/aboutus">关于蛋壳</a><span>·</span>
            <a href="http://www.dankegongyu.com/about/contact">联系蛋壳</a><span>·</span>
            <a href="http://www.dankegongyu.com/about/join">加入蛋壳</a><span>·</span>
            <span>关注我们</span>
            <a target="_blank" href="http://weibo.com/u/5712515570?refer_flag=1001030101" class="mart10">
                <img src="img/weibo_icon.png">
            </a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#myWeixin" class="mart10">
                <img src="img/weixin_weixin.png">
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
                <img src="img/wechat_mp_qr_200.jpg">
            </div>
            <div class="modal-body text-center gui9">
                扫描二维码，关注“蛋壳公寓官方微信”<br>更多优惠信息，第一时间掌握。
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script charset="UTF-8" src="js/QiMoIMSDK.js"></script><script charset="utf-8" src="js/lxb.js"></script><script charset="utf-8" src="js/v.js"></script><script charset="UTF-8" src="js/json2.js"></script><script src="js/hm.js"></script><script async="" src="js/analytics.js"></script><script src="js/jquery-8fa48925b6.min.js"></script>

<script src="js/bootstrap-c5b5b2fa19.min.js"></script>

<script src="js/swiper-3-cd2bffb7f2.3.1.min.js"></script>

<script src="js/public-fea84bbb90.js"></script>

    <!-- 有新房源通知我 -->
    <div class="modal fade" id="myroom" tabindex="-1" role="dialog" aria-labelledby="myWeixinLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm onlineroom">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        有新房源通知我
                    </h4>
                </div>
                <div class="modal-body">
    <form method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="bCB5NV7M4iIUiqksC2Tw1HbVyMOJGwOX8VZq8jti">
        <input type="hidden" name="type" id="type" value="list">
        <input type="hidden" name="citycode" id="citycode" value="bj">
        <div class="state_tmobilex_box">
                            <div class="sta_tx_b clearfix">
                    <div class="sta_tx_b1">
                        <span>*</span>您的需求：
                    </div>
                    <div class="sta_tx_b2">
                        <textarea id="note" name="note" cols="" rows="" class="input_txt" placeholder="我在国贸工作，我想找10号线附近的有独立卫生间，价格在2300左右的房子。" maxlength="80"></textarea>
                    </div>
                </div>
                        <input type="hidden" name="room_id" id="room_id" value="">

            <div class="sta_tx_b clearfix">
                <div class="sta_tx_b1">
                    <span>*</span>您的姓名：
                </div>
                <div class="sta_tx_b2">
                    <input type="text" class="text350" maxlength="20" name="name" id="name" placeholder="请输入您的姓名">
                </div>
            </div>
            <div class="sta_tx_b clearfix">
                <div class="sta_tx_b1">
                    <span>*</span>联系电话：
                </div>
                <div class="sta_tx_b2">
                    <input type="text" class="text350" name="mobile" id="mobile" maxlength="11" placeholder="请输入您的手机号">
                </div>
            </div>
            <div class="sta_tx_b clearfix">
                <div class="sta_tx_b1">
                    <span>*</span>验证码：
                </div>
                <div class="sta_tx_b2">
                    <input type="text" class="text220" name="code" id="messgecode" placeholder="请输入短信验证码" maxlength="6">
                    <b>获取验证码</b>
                    <strong>60s重新获取</strong>
                </div>
            </div>

            
            <div class="pclogintip"></div>
            <div class="sub_tab">
                <div class="pcloginbtnbox">
                    <a href="javascript:void(0)" class="huise">提交委托</a>
                    <a href="javascript:void(0)" class="chengse" id="click_submit_order">提交委托</a>
                </div>

            </div>
        </div>
    </form>
    <div class="modal-body text-center gui9 telred">
        收不到短信？
        拨打 <span>400-818-5656</span> 联系客服MM电话委托
    </div>

    <div class="succesbox" style="display: none">
        <strong>提交成功！</strong>
        <p>我们将在24小时之内联系您，请不要拒接座机，保持电话畅通噢！</p>
    </div>

</div>
    <script src="js/jquery-8fa48925b6.min.js"></script>

<style type="text/css">
    /*有新房源通知我*/
    .onlineroom {
        width: 600px;
    }

    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
    }

    .modal-header .close {
        margin-top: -2px;
    }

    button.close {
        -webkit-appearance: none;
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
    }

    .close {
        float: right;
        font-size: 21px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2;
    }

    .onlineroom .modal-body, .modal-body {
        padding-top: 20px;
        text-align: center;
        font-size: 14px;
    }

    .sta_tx_b {
        padding: 10px 0;
        overflow: hidden;
    }

    .sta_tx_b1 {
        float: left;
        width: 150px;
        height: 50px;
        color: #666666;
        text-align: right;
        /* font-weight: bold; */
        font-size: 16px;
        line-height: 50px;
    }

    .sta_tx_b1 span {
        padding-right: 4px;
        color: #ff643a;
    }

    .text350 {
        float: left;
        width: 348px;
        height: 48px;
        border: 1px solid #c4c4c4;
        border-radius: 2px;
        color: #333;
        text-indent: 10px;
        font-size: 16px;
        line-height: 48px;
    }

    .text220 {
        float: left;
        width: 178px;
        height: 48px;
        border: 1px solid #c4c4c4;
        border-radius: 2px;
        color: #333;
        text-indent: 10px;
        font-size: 16px;
        line-height: 48px;
    }

    .sta_tx_b2 {
        float: left;
        width: 350px;
    }

    .sta_tx_b2 b, .sta_tx_b2 strong {
        float: right;
        width: 165px;
        height: 48px;

        color: #fff;
        text-align: center;
        font-size: 16px;
        line-height: 53px;
        cursor: pointer;
    }

    .sta_tx_b2 textarea {
        width: 348px;
        border: 1px solid #c4c4c4;
        border-radius: 2px;
        resize: none;
        height: 100px;
        font-size: 16px;
        padding: 10px;
        margin-top: 10px;
    }

    .sta_tx_b2 b {
        display: block;
        background: #4BB4BB;
    }

    .sta_tx_b2 strong {
        display: none;
        background: #dddddd;
    }

    .pclogintip {
        display: block;
        height: 35px;
        color: #f00;
        text-align: left;
        font-size: 14px;
        padding-left: 150px;
        line-height: 25px;
    }

    .sub_tab {
        overflow: hidden;
        width: 100%;
    }

    .pcloginbtnbox {
        display: block;
        overflow: hidden;
        width: 348px;
        margin-left: 150px;
    }

    .pcloginbtnbox a {
        height: 45px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        color: #fff;
        text-align: center;
        font-size: 18px;
        line-height: 45px;
    }

    .huise {
        display: block;
        background: #ddd;
    }

    .chengse {
        display: none;
        background: #4BB4BB;
    }

    .telred span {
        color: #FF3300;
        font-weight: bold;
    }

    /*有新房源通知我 end*/
</style>
<script>
    $(function () {
        //手机号
        var newMobile = /^1[3-9]\d{9}$/;
        var roomType = $('#type').val();
        var cityCode = $('#citycode').val();
        var data = {};
        var tipText = $('.pclogintip');
        //提交委托
        $('.pcloginbtnbox a.huise').click(function () {
            tipText.text('请完善您的通知资料!');
        });
        $('.sta_tx_b input').keyup(function () {
            var name = $('#name').val();
            var mobile = $('#mobile').val();
            var messgeCode = $('#messgecode').val();
            if (name != '' && mobile != '' && messgeCode != '') {
                switch (roomType) {
                    case "index" :
                        var city = $('#city').val();
                        var areaName = $('#areaname').val();
                        if (city != '' && areaName != '') {
                            btnShow();
                        } else {
                            btnHide();
                        }
                        break;
                    case "detail":
                        var note = $('#note').val();
                        if (note != '') {
                            btnShow();
                        } else {
                            btnHide();
                        }
                        break;
                    case "list":
                        btnShow();
                        break;
                }
            } else {
                btnHide();
            }

        });
        //获取验证码
        $('.sta_tx_b2 b').click(function () {
            var timer = 60;
            var mobile = $('#mobile').val();

            if (!newMobile.test(mobile)) {
                tipText.text('请输入正确的手机号码！');
                return false;
            }
            //widget include
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': 'bCB5NV7M4iIUiqksC2Tw1HbVyMOJGwOX8VZq8jti'
    },
    cache: false,
    async: false,
});            $.ajax({
                type: "POST",
                url: '/collect/ajax-verify-code/' + mobile,
                async: false,
                error: function (msg) {
                    alert("提交失败，请退出重试。");
                },
                success: function (data) {
                    $('.pclogintip').text(data['msg']);
                    if (!data['success']) {
                        return false;
                    }
                }
            });
            $('.sta_tx_b2 b').hide();
            $('.sta_tx_b2 strong').css('display', 'block').text(timer + 's重新获取');
            //获取接口
            var tim = setInterval(function () {
                timer--;
                $('.sta_tx_b2 strong').text(timer + 's重新获取');
                if (timer == 0) {
                    clearInterval(tim);
                    $('.sta_tx_b2 strong').hide();
                    $('.sta_tx_b2 b').css('display', 'block').text('重新获取');
                }
            }, 1000)
        });
        //提交
        $('.pcloginbtnbox a.chengse').click(function () {
            var name = $('#name').val();
            var mobile = $('#mobile').val();
            var messgeCode = $('#messgecode').val();
            if (!newMobile.test(mobile)) {
                tipText.text('请输入正确的手机号码！');
                return false;
            }
            tipText.text('');
            switch (roomType) {
                case "index" :
                    var areaName = $('#areaname').val();
                    data = {name: name, mobile: mobile, code: messgeCode, type: 'index', areaname: areaName};
                    break;
                case "detail":
                    var roomId = $('#room_id').val();
                    data = {name: name, mobile: mobile, code: messgeCode, type: 'detail', room_id: roomId};
                    break;
                case "list":
                    var note = $('#note').val();
                    var source = '';
                    if (window.location.href.indexOf('source') >= 0) {
                        source = window.location.href.split('=')[1].toString();
                    }
                    data = {name: name, mobile: mobile, code: messgeCode, type: 'detail', note: note, source: source};
                    break;
            }
            $.ajax({
                type: "POST",
                url: '/collect/ajax-info/' + cityCode,
                data: data,
                async: false,
                error: function (msg) {
                    alert("提交失败，请退出重试。");
                },
                success: function (data) {
                    if (data['success'] === true) {
                        $('.form-horizontal,.gui9.telred').hide();
                        $('.succesbox').show();
                    } else {
                        $('.pclogintip').text(data['msg']);
                    }

                }
            });
        });
    });
    function btnShow() {
        $('.pcloginbtnbox a.huise').hide();
        $('.pcloginbtnbox a.chengse').css('display', 'block');
    }
    function btnHide() {
        $('.pcloginbtnbox a.chengse').hide();
        $('.pcloginbtnbox a.huise').css('display', 'block');
    }
</script>            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <script src="js/jquery-9642b4bbfe.bootstrap-dropdown-hover.min.js"></script>

    <script src="js/list-ef7a284a6d.js"></script>

    <script type="text/javascript" src="js/7moorInit.js" async="async">
        </script>
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

<script>
                $(function(){
                    $(".ss").click(function(){
                        $(this).addClass('ck_on');
                        $(this).siblings().removeClass();
                    })
                })                               
                                               
</script>

<script type="text/javascript" src="./北京租房信息_蛋壳公寓北京站_files/online"></script><div><div class="qimo_chatpup" id="qimo_chatpup" style="display: none; border-top-color: rgb(0, 204, 205); border-left-color: rgb(0, 204, 205); border-right-color: rgb(0, 204, 205);"><iframe src="./北京租房信息_蛋壳公寓北京站_files/moor_chat.html" height="100%" width="100%"></iframe></div><div id="chatBtn" class="chatBtn" style="bottom: -1px; background-color: rgb(0, 204, 205);"><img width="28px" height="25px" style="margin:0px 5px -6px 0px;" src="img/chat.png"><span>咨询客服</span></div></div>
<script>
    $(function(){
        $(".region").click(function(){
            $(this).attr("class","onlist").siblings().removeClass("onlist");
            // var region_id = $(this).attr("region_id");
            // alert(region_id);
        });
        //房租
        $(".price").click(function(){
            $(this).attr("class","onlist").siblings().removeClass("onlist");
             var price = $(this).attr("price");
             var wid = window.location.href; 
            // alert(wid);return false;
             
             if(wid == "http://www.qiaochy.com/laravel/public/room"){
                location.href = wid+"?"+price;
             }else{
                if(wid.indexOf("price")>0){
                    wid = wid.substr(0,wid.indexOf("price")-1);
                    // alert(wid);return false;
                    if(wid == "http://www.qiaochy.com/laravel/public/room"){
                        location.href = wid+"?"+price;
                    }else{
                        location.href = wid+"&"+price;
                    }
                    
                }else{
                    location.href = wid+"&"+price;
                }

             }
        });
        //居室
        $(".cate").click(function(){
            $(this).attr("class","onlist").siblings().removeClass("onlist");
             var cate = $(this).attr("cat_id");
             var wid = window.location.href; 

             
             if(wid == "http://www.qiaochy.com/laravel/public/room"){
                location.href = wid+"?"+cate;
             }else{
                if(wid.indexOf("cat_id")>0){
                    wid = wid.substr(0,wid.indexOf("cat_id")-1);
                    // alert(wid);return false;
                    if(wid == "http://www.qiaochy.com/laravel/public/room"){
                        location.href = wid+"?"+cate;
                    }else{
                        location.href = wid+"&"+cate;
                    }
                    
                }else{
                    location.href = wid+"&"+cate;
                }
             }
        });
        //特色
        $(".pri").click(function(){
            $(this).attr("class","onlist").siblings().removeClass("onlist");
             var pri = $(this).attr("p_id");
             var wid = window.location.href; 

             
             if(wid == "http://www.qiaochy.com/laravel/public/room"){
                location.href = wid+"?"+pri;
             }else{
                if(wid.indexOf("p_id")>0){
                    wid = wid.substr(0,wid.indexOf("p_id")-1);
                    if(wid == "http://www.qiaochy.com/laravel/public/room"){
                        location.href = wid+"?"+pri;
                    }else{
                        location.href = wid+"&"+pri;
                    }
                }else{
                    location.href = wid+"&"+pri;
                }
             }
        });

        //主次卧
        $(".zc").change(function(){
            // $(this).attr("class","onlist").siblings().removeClass("onlist");
             var zc = $(this).attr("r_title");
             var wid = window.location.href; 
            // alert(zc);return false;
             
             if(wid == "http://www.qiaochy.com/laravel/public/room"){
                location.href = wid+"?"+zc;
             }else{
                if(wid.indexOf("r_title")>0){
                    wid = wid.substr(0,wid.indexOf("r_title")-1);
                    if(wid == "http://www.qiaochy.com/laravel/public/room"){
                        location.href = wid+"?"+zc;
                    }else{
                        location.href = wid+"&"+zc;
                    }
                }else{
                    location.href = wid+"&"+zc;
                }
             }
        });        
    });
</script>
@stop
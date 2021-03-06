<?php $__env->startSection('header'); ?>
    <meta name="renderer" content="webkit">
    <!-- Disable Baidu Siteapp -->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link media="all" type="text/css" rel="stylesheet" href="css/bootstrap-2f624089c6.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/swiper-0b941af5db.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/common-f34e3d4c02.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/index-4db5244693.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <input type="hidden" name="" id="windowId" value="index">
    <div class="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner">
            <?php foreach($ad_img as $k=>$v){?>
                    <div class="item">
                        <a href="<?php echo $v['ad_url']?>" target="_blank">
                            <img src="http://www.qiaochy.com/yii2/backend/web/<?php echo $v['ad_img']?>" alt=""/>
                        </a>
                    </div>
            <?php }?>
                                                                                                                                                                </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="swiper-button-prev swiper-button-white" href="#myCarousel" data-slide="prev"></a>
            <a class="swiper-button-next swiper-button-white" href="#myCarousel" data-slide="next"></a>
        </div>
        <!--banner-->
        <div class="banenrboxs">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                                                                                        <div class="swiper-slide">
                            <a href="http://dankeyu-zukegushi.sxl.cn/" target="_blank">
                                                                    <img src="http://public.wutongwan.org/public-20161010-FoXh5R_8xBT0j6D1AY_qU7j5fKgr" alt=""
                                         class="minimg"><!-- 小图 -->
                                                            </a>
                        </div>
                                                                                                                                                                                                                                <div class="swiper-slide">
                            <a href="http://dankegongyu-baibiansc.sxl.cn/?src=banner" target="_blank">
                                                                    <img src="http://public.wutongwan.org/public-20160808-FveQpO9VzunIt7-YqgMp1dvgfF77?imageView2/1/w/640/h/400" alt=""
                                         class="minimg"><!-- 小图 -->
                                                            </a>
                        </div>
                                                                    <div class="swiper-slide">
                            <a href="http://www.dankegongyu.com/about/join" target="_blank">
                                                                    <img src="http://public.wutongwan.org/public-20160813-FqTDo2g-almQyp8aMD5dXdOoiK_y" alt=""
                                         class="minimg"><!-- 小图 -->
                                                            </a>
                        </div>
                                                                                                                                                                                
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-black"></div>
            </div>
        </div>
        <!--banner end-->
    </div>

    <div class="wrapper">

        <!--频道导航手机端显示-->
        <div class="mod_box">
            <div class="gridbox">
                <h2 class="box_col" title="所有房源">
                    <a href="http://www.dankegongyu.com/room/bj" class="inner">
                        <div class="icofangyuan"></div>
                        <div class="iconame">
                            所有房源
                        </div>
                    </a>
                </h2>
                <h2 class="box_col" title="样板间展示">
                    <a href="javascript:void(0)" class="inner photoinput">
                        <div class="icoshipai"></div>
                        <div class="iconame">
                            样板间展示
                        </div>
                    </a>
                </h2>
                <h2 class="box_col" title="房东加盟">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#yezhujoin" class="inner">
                        <div class="icojiameng"></div>
                        <div class="iconame">
                            房东加盟
                        </div>
                    </a>
                </h2>
                <h2 class="box_col" title="联系客服">
                    <a href="tel:4008185656" class="inner">
                        <div class="icolianxi"></div>
                        <div class="iconame">
                            联系客服
                        </div>
                    </a>
                </h2>

            </div>
        </div>
        <!--频道导航手机端显示 end-->
        <div class="mainbox clear blocklook">
            <div class="col_row">
                <h2 class="title_sec gred3">
                    精选房源
                </h2>
                <p class="gred9">蛋壳公寓致力于为都市白领创造高品质租住生活</p>
                <ul id="oneTab">
                                            <li>
                            <a href="#rooms_租户推荐" data-toggle="tab">租户推荐</a>
                        </li>
                                            <li>
                            <a href="#rooms_新房上线" data-toggle="tab">新房上线</a>
                        </li>
                                            <li>
                            <a href="#rooms_管家推荐" data-toggle="tab">管家推荐</a>
                        </li>
                                    </ul>
            </div>
            <div id="oneTabContent">
                        <div class="room_pro fade" id="rooms_租户推荐">
                            <?php foreach($u_room as $item): ?>
                            <div class="room_pro_box">
                                <a href="javascript:void(0)"  class="hit" id="<?php echo e($item['r_id']); ?>"><img src="http://www.qiaochy.com/yii2/backend/web/<?php echo e($item['r_img']); ?>" width="380px" height="285px" /></a>
                                <div class="room_ti">
                                    <a href="javascript:void(0)"  class="hit" id="<?php echo e($item['r_id']); ?>"><?php echo e($item['region_name']); ?><?php echo e($item['h_name']); ?><?php echo e($item['r_title']); ?><?php echo e($item['direct']); ?><?php echo e($item['r_name']); ?></a>
                                </div>
                                <div class="roo_ads">
                                    <div class="roo_ads fl">
                                        <?php echo e($item["r_area"]); ?>平米  /                                     <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==1): ?>
                                        <span>独立阳台</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>  
                            
                                    <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==2): ?>
                                        <span>独立淋浴</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>  
                                    
                                    <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==3): ?>
                                        <span>独立卫生间</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>    
                                    </div>
                                    <div class="room_money fr">
                                        <?php echo e($item["r_price"]); ?><span>元/月</span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="room_pro fade" id="rooms_新房上线">
                            <?php foreach($n_room as $item): ?>
                            <div class="room_pro_box">
                                <a href="javascript:void(0)"  class="hit" id="<?php echo e($item['r_id']); ?>"><img src="http://www.qiaochy.com/yii2/backend/web/<?php echo e($item['r_img']); ?>" width="380px" height="285px" /></a>
                                <div class="room_ti">
                                    <a href="javascript:void(0)"  class="hit" id="<?php echo e($item['r_id']); ?>"><?php echo e($item['region_name']); ?><?php echo e($item['h_name']); ?><?php echo e($item['r_title']); ?><?php echo e($item['direct']); ?><?php echo e($item['r_name']); ?></a>
                                </div>
                                <div class="roo_ads">
                                    <div class="roo_ads fl">
                                        <?php echo e($item["r_area"]); ?>平米  /                                     <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==1): ?>
                                        <span>独立阳台</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>  
                            
                                    <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==2): ?>
                                        <span>独立淋浴</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>  
                                    
                                    <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==3): ?>
                                        <span>独立卫生间</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>    
                                    </div>
                                    <div class="room_money fr">
                                        <?php echo e($item["r_price"]); ?><span>元/月</span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="room_pro fade" id="rooms_管家推荐">

                            <?php foreach($g_room as $item): ?>
                            <div class="room_pro_box">
                                <a href="javascript:void(0)"  class="hit" id="<?php echo e($item['r_id']); ?>"><img src="http://www.qiaochy.com/yii2/backend/web/<?php echo e($item['r_img']); ?>" width="380px" height="285px" /></a>
                                <div class="room_ti">
                                    <a href="javascript:void(0)"  class="hit" id="<?php echo e($item['r_id']); ?>"><?php echo e($item['region_name']); ?><?php echo e($item['h_name']); ?><?php echo e($item['r_title']); ?><?php echo e($item['direct']); ?><?php echo e($item['r_name']); ?></a>
                                </div>
                                <div class="roo_ads">
                                    <div class="roo_ads fl">
                                        <?php echo e($item["r_area"]); ?>平米  /                                     <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==1): ?>
                                        <span>独立阳台</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>  
                            
                                    <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==2): ?>
                                        <span>独立淋浴</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>  
                                    
                                    <?php foreach($item['privape'] as $val): ?>
                                        <?php if($val['p_id']==3): ?>
                                        <span>独立卫生间</span>
                                        <?php endif; ?>                                        
                                    <?php endforeach; ?>    
                                    </div>
                                    <div class="room_money fr">
                                        <?php echo e($item["r_price"]); ?><span>元/月</span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
            <div class="lk_more">
                <a href="room">更多房源</a>
            </div>
        </div>
        <!--room end-->
        <!--room photo-->
        <div class="mainbox clear">
            <div class="col_row">
                <h2 class="title_sec gred3">
                    样板间展示
                </h2>
                <p class="gred9">80后设计师倾力打造的温馨环境</p>
                <ul id="twoTab">
                    <li>
                        <a href="#con_ms_0" data-toggle="tab">房间</a>
                    </li>
                    <li>
                        <a href="#con_ms_1" data-toggle="tab">客厅</a>
                    </li>
                    <li>
                        <a href="#con_ms_2" data-toggle="tab">厨房</a>
                    </li>
                    <li>
                        <a href="#con_ms_3" data-toggle="tab">卫生间</a>
                    </li>
                </ul>
            </div>

            <div id="twoTabContent">
                
                                    <div class="room_photo fade" id="con_ms_0">
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-Fvwh8vi8gFmHaNAY3gqkkR-4hq0H?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-FqjyyZ1z-gpGnBSmN_8Obs9dFYEG?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-Fhb7uzEy9ZGZxyrWSmZXJ6kbkRa9?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-FohtOdcjte36GhYoFBvw4sHBJAOb?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                            </div>
                                    <div class="room_photo fade" id="con_ms_1">
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-FjxhukHtd2WRNZYwsru2wMpxxyUr?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-FiC0p31K1HJtWGX9EAwmHZDVDNON?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-Forc5ggD0rZfEDBTUrtn8cpk6XX_?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160805-Fgmjk3it3HdMBL1OFI_h-aeq_R0L?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                            </div>
                                    <div class="room_photo fade" id="con_ms_2">
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-FjaL60YZPI9op1EalSzgwHOUitQJ?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-FlY0xRg1PicdSgohwTH_wyJg1VQN?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160805-FimYY6XKlkkxYPH_C8qI6gwhKNcT?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160805-FmrSv4lvYll32cEDoiqCWGfOMOjG?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                            </div>
                                    <div class="room_photo fade" id="con_ms_3">
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-Ftc64ENFvYSoNjyPSJe9hTcerZbq?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160802-FrofWIGs9ctmuif_qWXl-_SDMtxw?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160805-FvjJi4OlXyIkFZePsDXP03PSxi4x?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                                    <div class="room_pho_box">
                                <a href="#" data-toggle="modal" data-target="#picture-modal">
                                    <img src="http://public.wutongwan.org/public-20160805-FpS6j6gtugYxkFv9a4JkLD7YF3fO?imageView2/1/w/280/h/210"/>
                                    <span class="overlay">
                                <i></i>
                            </span>
                                </a>
                            </div>
                                            </div>
                
            </div>
        </div>
        <!--room photo end-->
        
        <!--goodreson-->
        <div class="mainbox clear">
            <div class="col_row">
                <h2 class="title_sec gred3">
                    品质承诺
                </h2>
                <p class="gred9">做国内最专业的白领合租公寓</p>
            </div>
            <div class="good_resonbox">
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan1.jpg"/>
                    </div>
                    <div class="g_resonb">
                        零附加费
                    </div>
                    <div class="g_resonc">
                        没错，我们真的不收中介费和服务费！
                    </div>
                </div>
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan2.jpg"/>
                    </div>
                    <div class="g_resonb">
                        原创设计
                    </div>
                    <div class="g_resonc">
                        80后设计师倾力打造的温馨环境。
                    </div>
                </div>
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan3.jpg"/>
                    </div>
                    <div class="g_resonb">
                        高档家居
                    </div>
                    <div class="g_resonc">
                        高档品牌家具及家电，保障品质生活。
                    </div>
                </div>
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan4.jpg"/>
                    </div>
                    <div class="g_resonb">
                        环保装修
                    </div>
                    <div class="g_resonc">
                        无味环保材料，符合国家最高环保标准。
                    </div>
                </div>
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan5.jpg"/>
                    </div>
                    <div class="g_resonb">
                        一客一锁
                    </div>
                    <div class="g_resonc">
                        高质量智能密码锁，安全有保障！
                    </div>
                </div>
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan6.jpg"/>
                    </div>
                    <div class="g_resonb">
                        免费WIFI
                    </div>
                    <div class="g_resonc">
                        高速宽带+高品质路由器，网络精彩不断线。
                    </div>
                </div>
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan7.jpg"/>
                    </div>
                    <div class="g_resonb">
                        维修服务
                    </div>
                    <div class="g_resonc">
                        设施坏了电话约，我们为您排忧解难。
                    </div>
                </div>
                <div class="g_reson">
                    <div class="g_resona">
                        <img src="img/advan8.jpg"/>
                    </div>
                    <div class="g_resonb">
                        双周保洁
                    </div>
                    <div class="g_resonc">
                        公共区域定期保洁，清除卫生死角。
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<div class="footer">

</div>

            <!-- Picture Modal  弹窗-->
    <div class="modal fade" id="picture-modal" tabindex="-1" role="dialog" aria-labelledby="picture-modal-label"
         aria-hidden="true">
        <div class="modal-dialog imgroom">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center" id="picture-modal-label">样板间展示</h4>
                </div>
                <div class="modal-body">
                    <article class="single-project">
                        <div class="row txtbbs">
                            <div class="col-md-3">
                                <ul class="list-unstyled project-info">
                                    <li><strong>版本</strong><span class="pull-right">蛋壳2.0</span></li>
                                    <li><strong>主设计师</strong><span class="pull-right">张泽楷</span></li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    低调的配色，厚实的遮光窗帘，精心挑选的舒适床垫，方便实用的定制化家具，品牌电器，高速WIFI，尽力为您营造一个舒适的居住空间。
                                </p>
                            </div>
                        </div>
                                                <div class="project-thumbnail">
                            <div id="project-thumbnail-carousel-1" class="carousel slide" data-ride="carousel"
                                 data-interval="3000">
                                <div class="carousel-inner">
                                                                            <div class="item active">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-Fvwh8vi8gFmHaNAY3gqkkR-4hq0H"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-FqjyyZ1z-gpGnBSmN_8Obs9dFYEG"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-Fhb7uzEy9ZGZxyrWSmZXJ6kbkRa9"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-FohtOdcjte36GhYoFBvw4sHBJAOb"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-FjxhukHtd2WRNZYwsru2wMpxxyUr"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-FiC0p31K1HJtWGX9EAwmHZDVDNON"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-Forc5ggD0rZfEDBTUrtn8cpk6XX_"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160805-Fgmjk3it3HdMBL1OFI_h-aeq_R0L"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-FjaL60YZPI9op1EalSzgwHOUitQJ"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-FlY0xRg1PicdSgohwTH_wyJg1VQN"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160805-FimYY6XKlkkxYPH_C8qI6gwhKNcT"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160805-FmrSv4lvYll32cEDoiqCWGfOMOjG"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-Ftc64ENFvYSoNjyPSJe9hTcerZbq"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160802-FrofWIGs9ctmuif_qWXl-_SDMtxw"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160805-FvjJi4OlXyIkFZePsDXP03PSxi4x"/>
                                        </div>
                                                                            <div class="item 1">
                                            <img style="margin: auto;" src="http://public.wutongwan.org/public-20160805-FpS6j6gtugYxkFv9a4JkLD7YF3fO"/>
                                        </div>
                                    
                                </div>
                                <ol class="carousel-indicators">
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="0" class="active"></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="1" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="2" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="3" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="4" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="5" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="6" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="7" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="8" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="9" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="10" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="11" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="12" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="13" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="14" 1></li>
                                                                            <li data-target="#project-thumbnail-carousel-1"
                                            data-slide-to="15" 1></li>
                                                                    </ol>
                                <a class="left carousel-control" href="#project-thumbnail-carousel-1" data-slide="prev"><span
                                            class="fa fa-chevron-left"></span></a>
                                <a class="right carousel-control" href="#project-thumbnail-carousel-1"
                                   data-slide="next"><span class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!--房间实拍-->
    <section class="photoimg">
        <div style="height: 100%;">


            <div class="newphoto">
                <div class="header_home">
                    <a href="javascript:void(0);" class="backh">
				<span class="back_wrap">
					<i class="icon_fanhui2"></i><em>返回</em>
				</span>
                    </a>
                    <div class="opt_box">样板间展示</div>
                </div>
                <div class="imgview-title">
                    <span class="on">房间</span>
                    <span>客厅</span>
                    <span>厨房</span>
                    <span>卫生间</span>
                </div>
                <div class="imgview-view">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-Fvwh8vi8gFmHaNAY3gqkkR-4hq0H"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-FqjyyZ1z-gpGnBSmN_8Obs9dFYEG"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-Fhb7uzEy9ZGZxyrWSmZXJ6kbkRa9"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-FohtOdcjte36GhYoFBvw4sHBJAOb"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-FjxhukHtd2WRNZYwsru2wMpxxyUr"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-FiC0p31K1HJtWGX9EAwmHZDVDNON"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-Forc5ggD0rZfEDBTUrtn8cpk6XX_"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160805-Fgmjk3it3HdMBL1OFI_h-aeq_R0L"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-FjaL60YZPI9op1EalSzgwHOUitQJ"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-FlY0xRg1PicdSgohwTH_wyJg1VQN"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160805-FimYY6XKlkkxYPH_C8qI6gwhKNcT"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160805-FmrSv4lvYll32cEDoiqCWGfOMOjG"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-Ftc64ENFvYSoNjyPSJe9hTcerZbq"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160802-FrofWIGs9ctmuif_qWXl-_SDMtxw"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160805-FvjJi4OlXyIkFZePsDXP03PSxi4x"/>
                                </div>
                                                            <div class="swiper-slide">
                                    <img src="http://public.wutongwan.org/public-20160805-FpS6j6gtugYxkFv9a4JkLD7YF3fO"/>
                                </div>
                                                    </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination2">1/2</div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!--房间实拍 end-->


    <!-- 手机版 房东加盟-->
    <div class="modal fade" id="yezhujoin" tabindex="-1" role="dialog" aria-labelledby="myWeixinLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        房东加盟
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="dk_yezhubox">
                        <div class="dk_yz_boxa">
                            <img src="http://public.wutongwan.org/public-20160802-FstlATdgDsezg24OcW6QCdDjOibE"/>
                        </div>

                        <div class="dk_phonewt">
                            <div class="dk_pwta">
                                拨打电话，立即委托
                            </div>
                            <div class="dk_pwtb">
                                <a href="tel:4008185656">400-818-5656</a>
                            </div>
                            <div class="dk_pwtc">
                                服务时间：9:00 - 21:00（节假日照常）
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <!-- 手机版 房东加盟 end -->
    <!-- 关注微信-->
<div class="modal fade" id="myWeixin" tabindex="-1" role="dialog" aria-labelledby="myWeixinLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    关注蛋壳公寓官方微信
                </h4>
            </div>
            <div class="modal-body">
                <img src="img/wechat_mp_qr_200.jpg"/>
            </div>
            <div class="modal-body text-center gui9">
                扫描二维码，关注“蛋壳公寓官方微信”<br>更多优惠信息，第一时间掌握。
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script src="js/jquery-8fa48925b6.min.js"></script>

<script src="js/bootstrap-c5b5b2fa19.min.js"></script>

<script src="js/swiper-3-cd2bffb7f2.3.1.min.js"></script>

<script src="js/public-fea84bbb90.js"></script>

    <script src="js/index-9c29349919.js"></script>


            <!-- 在线预约 -->
    <div class="modal fade" id="myroom" tabindex="-1" role="dialog" aria-labelledby="myWeixinLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm onlineroom">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        我有房子要委托出租
                    </h4>
                </div>
                <div class="modal-body">
    <form method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="Hv06ev9KnLckLl3y9Sh1qUB9GR5Dny4PFhy8BQGB">
        <input type="hidden" name="type" id="type" value="index">
        <input type="hidden" name="citycode" id="citycode" value="bj">
        <div class="state_tmobilex_box">
                        <input type="hidden" name="room_id" id="room_id" value="">

            <div class="sta_tx_b clearfix">
                <div class="sta_tx_b1">
                    <span>*</span>您的姓名：
                </div>
                <div class="sta_tx_b2">
                    <input type="text" class="text350" maxlength="20" name="name" id="name" placeholder="请输入您的姓名"/>
                </div>
            </div>
            <div class="sta_tx_b clearfix">
                <div class="sta_tx_b1">
                    <span>*</span>联系电话：
                </div>
                <div class="sta_tx_b2">
                    <input type="text" class="text350" name="mobile" id="mobile" maxlength="11" placeholder="请输入您的手机号"/>
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

                            <div class="sta_tx_b clearfix">
                    <div class="sta_tx_b1">
                        <span>*</span>小区名：
                    </div>
                    <div class="sta_tx_b2">
                        <input type="text" class="text350" maxlength="60" name="areaname" id="areaname"
                               placeholder="所在小区名称"/>
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
        'X-CSRF-TOKEN': 'Hv06ev9KnLckLl3y9Sh1qUB9GR5Dny4PFhy8BQGB'
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

    <script type='text/javascript'
                src='http://webchat.7moor.com/javascripts/7moorInit.js?accessId=71debe60-0e04-11e6-bc3c-bdd89c47cbec&autoShow=true'
                async='async'>
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
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

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
            hm.src = "https://hm.baidu.com/hm.js?814ef98ed9fc41dfe57d70d8a496561d";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

<script>
    //搜索
    $(function(){
        $("#but").click(function(){
            var search_text = $("input[name='search_text']").val();
            location.href="http://www.feng.com:8080/house/zufang/zufang/laravel/public/iwhere?search_text=".search_text;
        })
    })
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

<script src="js/hit.js">

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout/layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
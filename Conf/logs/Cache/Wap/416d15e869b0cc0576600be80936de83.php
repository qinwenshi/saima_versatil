<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/peak-3.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/home-menu.css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/car/js/jQuery.js"></script>
<title>关于我们</title>

        <style>
            img{width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">
       

<div class="body" style="padding-bottom:60px;">

    <!--div class="top_bar footer_bar">
            <section>
                    <div class="nav_8">
                        <ul class="box">
                            <li>
                                <a href="javascript:history.go(-1);">
                                    <p class="back2"></p>
                                    <span>返回</span>
                                </a>
                            </li>
                                                            <li>
                                <a href="tel:<?php echo ($about['tel']); ?>">
                                    <p class="tel"></p>
                                    <span>联系电话</span>
                                </a>
                            </li>
                                <li>
                                <a href="http://api.map.baidu.com/marker?location=<?php echo ($about['latitude']); ?>,<?php echo ($about['longitude']); ?>&title=<?php echo ($about['shortname']); ?>&name=<?php echo ($about['name']); ?>&content=<?php echo ($about['address']); ?>&output=html&src=weiba|weiweb">
                                    <p class="addr"></p>
                                    <span>地址导航</span>
                                </a>
                            </li>
                                                        <li>
                                <a href="<?php echo U('Car/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>">
                                    <p class="home"></p>
                                    <span>首页</span>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
            </section>
        </div-->
 

    <span class="copyright" >
    <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
    <?php else: ?>
    <?php echo ($siteCopyright); endif; ?>
    </span>

<script type="text/javascript">
window.shareData = {
            "moduleName":"Car",
            "moduleID":"0",
            "imgUrl": "",
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Car/index',array('token'=>$token));?>",
            "tTitle": "微汽车",
            "tContent": "微汽车"
        };
</script>
<?php echo ($shareScript); ?>
        <section class="news_article">
        <header>
            <h3 style="font-size:14px;">联系我们</h3>
            <small class="gray"><?php echo ($about['name']); ?></small>
            <p><img src="<?php echo ($about['logourl']); ?>" width="180" height="50" alt="" style="width:auto!important;max-width:240px;"></p>
        </header>
        <article>
            <p>
            <div class="box_map"> 
    <a  href="http://chabus.duapp.com/mapapi.php?lng=<?php echo ($about['longitude']); ?>&lat=<?php echo ($about['latitude']); ?>&title=地址&info=温馨提示：<?php echo ($about['address']); ?>"> <div class="map_area">
    <span>
    地址： <?php echo ($about['address']); ?></span>
      </div> </a>
    </div>
<p>
    <strong><span style="color:#009900;font-size:16px;">免费热线：<?php echo ($about['tel']); ?></span></strong><br />

公司简介：<br />
 <?php echo (trim(html_entity_decode($about['intro']))); ?>
</p></P>
        </article>
    </section>

<div style="padding-bottom:0!important;">
    <a href="javascript:window.scrollTo(0,0);" style="font-size:12px;margin:5px auto;display:block;color:#fff;text-align:center;line-height:35px;background:#333;margin-bottom:-10px;">返回顶部</a>
</div></div>

<div mark="stat_code" style="width:0px; height:0px; display:none;">
</div>
    </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <link href="/tpl/static/vhouse/cate4_4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo RES;?>/css/104/iscroll.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo RES;?>/css/104/iscroll.js" type="text/javascript"></script>
        <script type="text/javascript">
            var myScroll;

            function loaded() {
                myScroll = new iScroll('wrapper', {
                    snap: true,
                    momentum: false,
                    hScrollbar: false,
                    onScrollEnd: function () {
                        document.querySelector('#indicator > li.active').className = '';
                        document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
                    }
                });

            }

            document.addEventListener('DOMContentLoaded', loaded, false);
        </script>

    </head>
    <body id="cate4">

   <div class="banner">
        <div >
            <h1 style="padding-left: 5px;color: #fff;">预约列表</h1>
        </div>

        <div class="clr"></div>
        </div>
        <div id="insert1"></div>
        <div id="todayList">
            <ul class="todayList">
                <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="only4">
                        <a href="<?php echo U('Estate/reservation',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'house_book','rid'=>$vo['id']));?>">
                           <?php if($vo['headpic'] != ''): ?><div class="img"><img src="<?php echo ($vo['headpic']); ?>"></div><?php endif; ?>
                            <h2><?php echo ($vo['title']); ?></h2>
                            <p class="onlyheight"><?php echo (strip_tags(html_entity_decode($vo["info"]))); ?></p>
                            <span class="icon">&nbsp;</span>
                            <div class="clr"></div>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <script>


            var count = document.getElementById("thelist").getElementsByTagName("img").length;


            for(i=0;i<count;i++){
                document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

            }

            document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


            setInterval(function(){
                myScroll.scrollToPage('next', 0,400,count);
            },3500 );

            window.onresize = function(){
                for(i=0;i<count;i++){
                    document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

                }

                document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
            }

        </script>
        <div id="insert2"></div>
        <div style="display:none"> </div>
        <div style="display:none"></div>

<!--<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script>  -->
    </body></html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 微信公众平台源码,微信机器人源码,微信自动回复源码 PigCms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="/tpl/User/default/common/css/style_2_common.css?BPm" />
<script src="/tpl/User/default/common/js/common.js" type="text/javascript"></script>
<link href="/tpl/User/default/common/css/style.css" rel="stylesheet" type="text/css" />
 <script src="/tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $apikey;?>"></script>
 <link rel="stylesheet" type="text/css" href="/tpl/User/default/common/css/cymain.css" />
 <script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style type="text/css">
body, html {width: 100%;height: 100%;overflow: hidden;margin:0;}
#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;}
#l-map{height:100%;width:100%;}
</style>
</head>
<body id="nv_member">
<input type="hidden" id="longitude" value="0" />
<input type="hidden" id="latitude" value="0" />

<div class="ftip" style="margin:0">拖动红色图标到相应位置然后点击右侧链接-> <a id="ok" style="float:none" href="###">已经设定好，关闭该页面</a></div>
<div id="l-map"></div>
<script type="text/javascript">
if (art.dialog.data('longitude')) {
	document.getElementById('longitude').value = art.dialog.data('longitude');// 获取由主页面传递过来的数据
	document.getElementById('latitude').value = art.dialog.data('latitude');
};
// 关闭并返回数据到主页面
document.getElementById('ok').onclick = function () {
	var origin = artDialog.open.origin;
	var longitudeinput = origin.document.getElementById('longitude');
	var latitudeinput = origin.document.getElementById('latitude');
	longitudeinput.value = $('#longitude').attr('value');
	latitudeinput.value = $('#latitude').attr('value');
	art.dialog.close();
};


var map = new BMap.Map("l-map");
var point = new BMap.Point($('#longitude').val(),$('#latitude').val());
map.centerAndZoom(point,12);
map.enableScrollWheelZoom();                            //启用滚轮放大缩小
function myFun(result){
	var cityName = result.name;
	if($('#longitude').val()==0||$('#longitude').val()==''){
		map.setCenter(cityName);
		p = new BMap.Point(result.center.lng,result.center.lat);
	}else{
		p = new BMap.Point($('#longitude').val(),$('#latitude').val());
	}
	var marker = new BMap.Marker(p);
	marker.enableDragging();
	map.addOverlay(marker);

	marker.addEventListener("dragend", function(e){
		$('#longitude').attr('value',e.point.lng)
		$('#latitude').attr('value',e.point.lat)
	})
}

var myCity = new BMap.LocalCity();
var p=myCity.get(myFun);

</script>
</body>
</html>
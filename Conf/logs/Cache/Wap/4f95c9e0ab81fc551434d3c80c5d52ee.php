<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<title>赴宴名单</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信">
<link rel="stylesheet" type="text/css" href="tpl/Wap/default/common/css/wedding/css/wedding.css" media="all">
<style type="text/css">
.reload {
position: absolute;
right: 0;
}
header>div>ul li {
display: inline-block;
}
</style>
</head>
<body>
<div class="container">
<header>
<div>
<ul class="box">
<li class="relative"><span class="pic"><img src="<?php if($pic['picurl'] != false): echo ($pic['picurl']); else: ?>http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg<?php endif; ?>"></span></li>
<li>
<div class="name">
赴宴名单
<div>
</div></div></li>
<li>
<a href="javascript:location.reload();" class="reload">刷新</a>
</li>
</ul>
</div>
</header>
            <div style=" height:70px"></div>
<section class="body">
            <div>
            	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="integral_table">
<thead>
<tr>
  <th>姓名</th>
  <th>手机号码</th>
  <th>人数</th>
  </tr>
 <?php if(is_array($wedding)): $i = 0; $__LIST__ = $wedding;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wedding): $mod = ($i % 2 );++$i;?><tr>
  <td><?php echo ($wedding['name']); ?></td>
  <td><?php echo ($wedding['phone']); ?></td>
  <td><?php echo (($wedding["num"])?($wedding["num"]):1); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</thead>
<tbody>
  </tbody>
<tfoot>
<tr>
<td>&nbsp;</td>
<td class="right">人数总计：</td>
<td><span class="heji"><?php echo ($count); ?></span></td>
</tr>
</tfoot>
</table>
            </div>
</section>


            </div>
            
<footer></footer>




</body></html>
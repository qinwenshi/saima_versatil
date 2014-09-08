<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 微信公众平台源码,微信机器人源码,微信自动回复源码 PigCms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/style_2_common.css?BPm" />
<script src="./tpl/User/default/common/js/common.js" type="text/javascript"></script>
<link href="./tpl/User/default/common/css/style.css" rel="stylesheet" type="text/css" />
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
</head>
<body id="nv_member">
<div style="line-height:200%;padding:10px 20px;">
<strong>车型/车系：</strong><?php echo ($userinfo['brand_serise']); ?><br>
<strong>车主姓名：</strong><?php echo ($userinfo['car_userName']); ?><br>
<strong>车主号码：</strong><?php echo ($userinfo['user_tel']); ?><br>
<strong>上牌时间：</strong><?php echo ($userinfo['car_startTime']); ?><br>
<strong>购车时间：</strong><?php echo ($userinfo['car_buyTime']); ?><br>
<strong>上次保险日期：</strong> <?php echo ($userinfo['car_insurance_lastDate']); ?><br>
<strong>上次保险费用：</strong><font color='red'><?php echo ($userinfo['car_insurance_lastCost']); ?></font> RMB<br>
<strong>上次保养里程：</strong><?php echo ($userinfo['car_care_mileage']); ?> 公里<br>
<strong>上次保养时间：</strong><?php echo ($userinfo['car_care_lastDate']); ?><br>
<strong>上次保养费用：</strong><font color='red'><?php echo ($userinfo['car_care_lastCost']); ?></font> RMB<br>
<strong>上次年检时间：</strong><?php echo ($userinfo['car_care_inspection']); ?><br>



<?php if($ok == 1): ?><strong><font  color='red'>修改成功</font> </strong>

<?php elseif($ok == 2): ?>
<strong><font  color='red'>修改失败</font> </strong><?php endif; ?>
</div>

<form class="form" method="post" id="form" action=""> 
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
     <tr>
      <th><span class="red">*</span>本次保险日期：</th>
      <td><input type="input" class="px" id="insurance_Date" value="<?php if($userinfo['insurance_Date'] != ''): echo ($userinfo["insurance_Date"]); else: echo date('Y-m-d',mktime(date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="insurance_Date" />                
      </td>
    </tr>
     <tr>
      <th><span class="red">*</span>下次保险日期：</th>
      <td><input type="input" class="px" id="next_insurance_Date" value="<?php if($userinfo['next_insurance_Date'] != ''): echo ($userinfo["next_insurance_Date"]); else: echo date('Y-m-d',mktime(date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="next_insurance_Date" />      <span>提醒车主下次交保险日期</span>       
      </td>
    </tr>
     <tr>
      <th><span class="red">*</span>本次保险费用：</th>
      <td><input type="number" class="px" id="insurance_Cost" value="<?php echo ($userinfo['insurance_Cost']); ?>" name="insurance_Cost" /> RMB              
      </td>
    </tr>

     <tr>
      <th><span class="red">*</span>本次保养里程：</th>
      <td><input type="number" class="px" id="care_mileage" value="<?php echo ($userinfo['care_mileage']); ?>" name="care_mileage" /> 公里              
      </td>
    </tr>

     <tr>
      <th><span class="red">*</span>下次保养里程：</th>
      <td><input type="number" class="px" id="care_mileage" value="<?php echo ($userinfo['care_next_mileage']); ?>" name="care_next_mileage" /> 公里     <span>提醒车主下次保养里程数</span>         
      </td>
    </tr>

     <tr>
      <th><span class="red">*</span>本次保养时间：</th>
      <td><input type="input" class="px" id="car_care_Date" value="<?php if($userinfo['car_care_Date'] != ''): echo ($userinfo["car_care_Date"]); else: echo date('Y-m-d',mktime(date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="car_care_Date" />                
      </td>
    </tr>
     <tr>
      <th><span class="red">*</span>本次保养费用：</th>
      <td><input type="number" class="px" id="car_care_Cost" value="<?php echo ($userinfo['car_care_Cost']); ?>" name="car_care_Cost" /> RMB            
      </td>
    </tr>
     <tr>
      <th><span class="red">*</span>本次年检时间：</th>
      <td><input type="input" class="px" id="car_care_inspection" value="<?php if($userinfo['car_care_inspection'] != ''): echo ($userinfo["car_care_inspection"]); else: echo date('Y-m-d',mktime(date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="car_care_inspection" />                
      </td>
    </tr>
     <tr>
      <th><span class="red">*</span>下次年检时间：</th>
      <td><input type="input" class="px" id="next_care_inspection" value="<?php if($userinfo['next_care_inspection'] != ''): echo ($userinfo["next_care_inspection"]); else: echo date('Y-m-d',mktime(date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="next_care_inspection" />   <span>提醒车主下次年检时间</span>             
      </td>
    </tr>
  
    

       <tr> 
        <th><span class="red">*</span>客服备注：</th>
        <td>
        <textarea class="px" id="kfinfo" name="kfinfo" style="width:400px; height:100px"><?php echo ($userinfo['kfinfo']); ?></textarea>
        </td> 
       </tr>
       <tr>         
       <th>&nbsp;</th>
       <td>
      <input type="hidden" name="id" value="<?php echo ($userinfo['id']); ?>" />
      <input type="hidden" name="wecha_id" value="<?php echo ($userinfo['wecha_id']); ?>" />
      <input type="hidden" name="token" value="<?php echo ($userinfo['token']); ?>" />
       <button type="submit" name="button" class="btnGreen">保存</button> </td> 
       </tr> 
      </tbody> 
     </table> 
     </div>
    
</form> 

</body>
</html>
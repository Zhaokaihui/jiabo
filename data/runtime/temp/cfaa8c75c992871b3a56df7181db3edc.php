<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:30:"./template/pc/view_article.htm";i:1558945818;s:42:"/data/wwwroot/jiabo/template/pc/header.htm";i:1558945818;s:40:"/data/wwwroot/jiabo/template/pc/left.htm";i:1558945818;s:42:"/data/wwwroot/jiabo/template/pc/footer.htm";i:1558945818;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/style.css" rel="stylesheet" />
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="applicable-device" content="pc">
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<div class="header">
  <div class="header_top w1200">
    <p class="fr">全国服务热线：<span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></span></p>
    <span class="fl"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span> </div>
  <div class="header_bottom clear w1200">
    <div class="header_logo fl"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"> </a></div>
    <div class="header_nav fr">
      <ul>
        <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" class="<?php if(CONTROLLER_NAME == 'Index'): ?>active<?php endif; ?>">网站首页</a></li>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li><a href="<?php echo $field['typeurl']; ?>" class="<?php echo $field['currentstyle']; ?>" target="_self"><?php echo $field['typename']; ?></a></li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      </ul>
    </div>
  </div>
</div>
<div class="page_banner" style="background: url(<?php  $tagAd = new \think\template\taglib\eyou\TagAd; $_result = $tagAd->getAd("7"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?><?php echo $field['litpic']; endif; else: echo "";endif; $field = []; ?>) no-repeat center center;"></div>
<div class="main">
  <div class="w1200">
    <div class="main_l fl">
      <div class="main_l_title">
        <p class="p1"><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></p>
        <p class="p2"><?php echo gettoptype($eyou['field']['typeid'],'englist_name'); ?></p>
      </div>
      <div id="main_l" class="clearfix">
        <ul class="clearfix">
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>" ><?php echo $field['typename']; ?></a></li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
      </div>
      <div class="main_left_message"> </div>
      <div class="contact">
        <p>电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></p>
        <p>传真：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?></p>
        <p>邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?></p>
        <p>地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?></p>
      </div>
    </div>
    
    <div class="main_right fr">
      <div class="crumbs"> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?></div>
      <div class="show_content">
        <h3><?php echo $eyou['field']['title']; ?></h3>
        <p class="tips">来源:<?php echo $eyou['field']['author']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;发布时间: <?php echo MyDate('Y-m-d',$eyou['field']['add_time']); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagArcclick = new \think\template\taglib\eyou\TagArcclick; $__VALUE__ = $tagArcclick->getArcclick($aid, "", ""); echo $__VALUE__; ?> 次浏览</p>
        <div class="des"></div>
        <div class="show_c_content">
          <?php echo $eyou['field']['content']; ?> 
          <p><br/>
          </p>
        </div>
        <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( empty($__LIST__) ) : echo htmlspecialchars_decode("&lt;p class=&quot;show_c_content&quot;&gt;上一篇&amp;nbsp;:&amp;nbsp;&amp;nbsp;&lt;a&gt;暂无&lt;/a&gt;&lt;/p&gt;");else: $field = $__LIST__;$field["title"] = text_msubstr($field["title"], 0, 100, false);?>
        <p class="show_c_content">上一篇&nbsp;:&nbsp;&nbsp;<a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?> </a></p>
        <?php endif; else: echo htmlspecialchars_decode("&lt;p class=&quot;show_c_content&quot;&gt;上一篇&amp;nbsp;:&amp;nbsp;&amp;nbsp;&lt;a&gt;暂无&lt;/a&gt;&lt;/p&gt;");endif; $field = [];  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( empty($__LIST__) ) : echo htmlspecialchars_decode("&lt;p class=&quot;show_c_content&quot;&gt;下一篇&amp;nbsp;:&amp;nbsp;&amp;nbsp;&lt;a&gt;暂无&lt;/a&gt;&lt;/p&gt;");else: $field = $__LIST__;$field["title"] = text_msubstr($field["title"], 0, 100, false);?>
        <p class="show_c_content">下一篇&nbsp;:&nbsp;&nbsp;<a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?> </a></p>
        <?php endif; else: echo htmlspecialchars_decode("&lt;p class=&quot;show_c_content&quot;&gt;下一篇&amp;nbsp;:&amp;nbsp;&amp;nbsp;&lt;a&gt;暂无&lt;/a&gt;&lt;/p&gt;");endif; $field = []; ?>
      </div>
    </div>
  </div>
</div>
<div class="footer clear">
  <div class="w1200 clearfix">
    <div class="footer_left fl">
      <p>公司地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?></p>
      <p>TEL：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?> FAX:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?> EMAIL：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?></p>
      <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__;  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?> </p>
    </div>
    <div class="footer_right fr"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/tel.png">
      <p class="p1">全国服务热线</p>
      <p class="p2">SERVICE HOTLINE</p>
      <p class="p3"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></p>
    </div>
  </div>
</div>
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?> 
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
<style type="text/css">
    .pagination p {
        line-height: 20px;
    }
    .pagination a {
        line-height: 20px;
    }
</style>
</body>
</html>
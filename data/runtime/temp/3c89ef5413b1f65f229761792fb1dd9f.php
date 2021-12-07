<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:44:"./application/admin/template/seo/sitemap.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:58:"/data/wwwroot/jiabo/application/admin/template/seo/bar.htm";i:1638802540;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<link href="/public/static/admin/font/css/iconfont.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<!-- <link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>"> -->
<style type="text/css">html, body { overflow: visible;}</style>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />

<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style type="text/css">
	/*左侧收缩图标*/
	#foldSidebar i { font-size: 24px;color:<?php echo $global['web_theme_color']; ?>; }
    /*左侧菜单*/
    .eycms_cont_left{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl dd a:hover,.eycms_cont_left dl dd a.on,.eycms_cont_left dl dt.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl dd a:active{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist dd{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl.jslist dd a:hover,.eycms_cont_left dl.jslist dd a.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist:hover{ background:<?php echo $global['web_assist_color']; ?>; }
    /*栏目操作*/
    .cate-dropup .cate-dropup-con a:hover{ background-color: <?php echo $global['web_theme_color']; ?>; }
    /*按钮*/
    a.ncap-btn-green { background-color: <?php echo $global['web_theme_color']; ?>; }
    a:hover.ncap-btn-green { background-color: <?php echo $global['web_assist_color']; ?>; }
    .flexigrid .sDiv2 .btn:hover { background-color: <?php echo $global['web_theme_color']; ?>; }
    .flexigrid .mDiv .fbutton div.add{background-color: <?php echo $global['web_theme_color']; ?>; border: none;}
    .flexigrid .mDiv .fbutton div.add:hover{ background-color: <?php echo $global['web_assist_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds{color:<?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds:hover{ background-color: <?php echo $global['web_theme_color']; ?>;}
    /*选项卡字体*/
    .tab-base a.current,
    .tab-base a:hover.current { border-bottom: solid 2px <?php echo $global['web_theme_color']; ?> !important;color: <?php echo $global['web_theme_color']; ?> !important;}
    .addartbtn input.btn:hover{ border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>; }
    .addartbtn input.btn.selected{ color: <?php echo $global['web_theme_color']; ?>;border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>;}
	/*会员导航*/
	.member-nav-group .member-nav-item .btn.selected{background: <?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;box-shadow: -1px 0 0 0 <?php echo $global['web_theme_color']; ?>;}
	.member-nav-group .member-nav-item:first-child .btn.selected{border-left: 1px solid <?php echo $global['web_theme_color']; ?> !important;}
	/*搜索按钮图标*/
	.flexigrid .sDiv2 .fa-search{}
        
    /* 商品订单列表标题 */
   .flexigrid .mDiv .ftitle h3 {border-left: 3px solid <?php echo $global['web_theme_color']; ?>;} 
	
    /*分页*/
    .pagination > .active > a, .pagination > .active > a:focus, 
	.pagination > .active > a:hover, 
	.pagination > .active > span, 
	.pagination > .active > span:focus, 
	.pagination > .active > span:hover { border-color: <?php echo $global['web_theme_color']; ?>;color:<?php echo $global['web_theme_color']; ?>; }
    
    .layui-form-onswitch {border-color: <?php echo $global['web_theme_color']; ?> !important;background-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    input[type="text"]:focus,
    input[type="text"]:hover,
    input[type="text"]:active,
    input[type="password"]:focus,
    input[type="password"]:hover,
    input[type="password"]:active,
    textarea:hover,
    textarea:focus,
    textarea:active { border-color:<?php echo hex2rgba($global['web_theme_color'],0.8); ?>;box-shadow: 0 0 0 2px <?php echo hex2rgba($global['web_theme_color'],0.15); ?> !important;}
    .input-file-show:hover .type-file-button {background-color:<?php echo $global['web_theme_color']; ?> !important; }
    .input-file-show:hover {border-color: <?php echo $global['web_theme_color']; ?> !important;box-shadow: 0 0 5px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover span.show a,
    .input-file-show span.show a:hover { color: <?php echo $global['web_theme_color']; ?> !important;}
    .input-file-show:hover .type-file-button {background-color: <?php echo $global['web_theme_color']; ?> !important; }
    .color_z { color: <?php echo $global['web_theme_color']; ?> !important;}
    a.imgupload{
        background-color: <?php echo $global['web_theme_color']; ?> !important;
        border-color: <?php echo $global['web_theme_color']; ?> !important;
    }
    /*专题节点按钮*/
    .ncap-form-default .special-add{background-color:<?php echo $global['web_theme_color']; ?>;border-color:<?php echo $global['web_theme_color']; ?>;}
    .ncap-form-default .special-add:hover{background-color:<?php echo $global['web_assist_color']; ?>;border-color:<?php echo $global['web_assist_color']; ?>;}
    
    /*更多功能标题*/
    .on-off_panel .title::before {background-color:<?php echo $global['web_theme_color']; ?>;}
    
     /*内容菜单*/
    .ztree li a:hover{color:<?php echo $global['web_theme_color']; ?> !important;}
    .ztree li a.curSelectedNode{background-color: <?php echo $global['web_theme_color']; ?> !important; border-color:<?php echo $global['web_theme_color']; ?> !important;}
    .layout-left .on-off-btn {background-color: <?php echo $global['web_theme_color']; ?> !important;}
</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<!-- <script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script> -->
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body class="bodystyle">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page atta">
        <div class="fixed-bar">
        <div class="item-title">
            <ul class="tab-base nc-row">
                <?php if($main_lang == $admin_lang): if(is_check_access('Seo@seo') == '1'): ?>
                <li><a href="<?php echo url('Seo/seo'); ?>" <?php if('seo'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>URL配置</span></a></li>
                <?php endif; endif; if($main_lang == $admin_lang): if(is_check_access('Sitemap@index') == '1'): ?>
                <li><a href="<?php echo url('Sitemap/index'); ?>" <?php if('Sitemap'==CONTROLLER_NAME): ?>class="current"<?php endif; ?>><span>Sitemap</span></a></li>
                <?php endif; endif; if(is_check_access('Links@index') == '1'): ?>
                <li><a href="<?php echo url('Links/index'); ?>" <?php if('Links'==CONTROLLER_NAME): ?>class="current"<?php endif; ?>><span>友情链接</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <form method="post" id="handlepost" action="<?php echo U('Sitemap/index'); ?>" enctype="multipart/form-data" name="form1">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">自动生成</dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="sitemap_auto1" class="cb-enable <?php if(isset($config['sitemap_auto']) && $config['sitemap_auto'] == 1): ?>selected<?php endif; ?>" >开启</label>
                        <label for="sitemap_auto0" class="cb-disable <?php if(!isset($config['sitemap_auto']) || $config['sitemap_auto'] == 0): ?>selected<?php endif; ?>" >关闭</label>
                        <input id="sitemap_auto1" name="sitemap_auto" value="1" <?php if(isset($config['sitemap_auto']) && $config['sitemap_auto'] == 1): ?>checked<?php endif; ?> type="radio">
                        <input id="sitemap_auto0" name="sitemap_auto" value="0" <?php if(!isset($config['sitemap_auto']) || $config['sitemap_auto'] == 0): ?>checked<?php endif; ?> type="radio">
                    </div>
                    <p class="notic">更新内容时候自动更新网站地图</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>过滤栏目及内容</label>
                </dt>
                <dd class="opt">          
                    <label><input type="checkbox" name="sitemap_not1" value="1" <?php if(isset($config['sitemap_not1']) && $config['sitemap_not1'] == 1): ?>checked="checked"<?php endif; ?>>过滤隐藏栏目</label>&nbsp;
                    <label><input type="checkbox" name="sitemap_not2" value="1" <?php if(isset($config['sitemap_not2']) && $config['sitemap_not2'] == 1): ?>checked="checked"<?php endif; ?>>过滤外部模块</label>&nbsp;
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>Sitemap类型</label>
                </dt>
                <dd class="opt">          
                    <label><input type="checkbox" name="sitemap_xml" value="1" <?php if(isset($config['sitemap_xml']) && $config['sitemap_xml'] == 1): ?>checked="checked"<?php endif; ?>>Xml网站地图</label>&nbsp;
                    <br/><p class="notic2">适合谷歌和百度，地图网址 <a href="http://120.55.78.125/sitemap.xml" target="_blank">http://120.55.78.125/sitemap.xml</a> &nbsp;&nbsp;<a href="javascript:void(0);" onclick="update_sitemap();" class="ncap-btn ncap-btn-green">更新地图</a></p>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>更新频率</label>
                </dt>
                <dd class="opt">
                    首页
                    <select name="sitemap_changefreq_index">
                        <option value="always" <?php if(empty($config['sitemap_changefreq_index']) || $config['sitemap_changefreq_index'] == 'always'): ?>selected="true"<?php endif; ?>>经常</option>
                        <option value="hourly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'hourly'): ?>selected="true"<?php endif; ?>>每小时</option>
                        <option value="daily" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'daily'): ?>selected="true"<?php endif; ?>>每天</option>
                        <option value="weekly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'weekly'): ?>selected="true"<?php endif; ?>>每周</option>
                        <option value="monthly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'monthly'): ?>selected="true"<?php endif; ?>>每月</option>
                        <option value="yearly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'yearly'): ?>selected="true"<?php endif; ?>>每年</option>
                        <option value="never" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'never'): ?>selected="true"<?php endif; ?>>从不</option>
                    </select>
                    &nbsp;&nbsp;
                    列表页
                    <select name="sitemap_changefreq_list">
                        <option value="always" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'always'): ?>selected="true"<?php endif; ?>>经常</option>
                        <option value="hourly" <?php if(empty($config['sitemap_changefreq_list']) || $config['sitemap_changefreq_list'] == 'hourly'): ?>selected="true"<?php endif; ?>>每小时</option>
                        <option value="daily" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'daily'): ?>selected="true"<?php endif; ?>>每天</option>
                        <option value="weekly" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'weekly'): ?>selected="true"<?php endif; ?>>每周</option>
                        <option value="monthly" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'monthly'): ?>selected="true"<?php endif; ?>>每月</option>
                        <option value="yearly" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'yearly'): ?>selected="true"<?php endif; ?>>每年</option>
                        <option value="never" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'never'): ?>selected="true"<?php endif; ?>>从不</option>
                    </select>
                    &nbsp;&nbsp;
                    内容页
                    <select name="sitemap_changefreq_view">
                        <option value="always" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'always'): ?>selected="true"<?php endif; ?>>经常</option>
                        <option value="hourly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'hourly'): ?>selected="true"<?php endif; ?>>每小时</option>
                        <option value="daily" <?php if(empty($config['sitemap_changefreq_view']) || $config['sitemap_changefreq_view'] == 'daily'): ?>selected="true"<?php endif; ?>>每天</option>
                        <option value="weekly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'weekly'): ?>selected="true"<?php endif; ?>>每周</option>
                        <option value="monthly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'monthly'): ?>selected="true"<?php endif; ?>>每月</option>
                        <option value="yearly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'yearly'): ?>selected="true"<?php endif; ?>>每年</option>
                        <option value="never" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'never'): ?>selected="true"<?php endif; ?>>从不</option>
                    </select>
                    <span class="err"></span>
                    <p class="notic">XML地图文件使用，你输入的网站的网页内容更新的频率。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>优先级别</label>
                </dt>
                <dd class="opt">
                    首页
                    <select name="sitemap_priority_index">
                        <option value="0.1" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.1'): ?>selected="true"<?php endif; ?>>0.1</option>
                        <option value="0.2" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.2'): ?>selected="true"<?php endif; ?>>0.2</option>
                        <option value="0.3" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.3'): ?>selected="true"<?php endif; ?>>0.3</option>
                        <option value="0.4" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.4'): ?>selected="true"<?php endif; ?>>0.4</option>
                        <option value="0.5" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.5'): ?>selected="true"<?php endif; ?>>0.5</option>
                        <option value="0.6" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.6'): ?>selected="true"<?php endif; ?>>0.6</option>
                        <option value="0.7" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.7'): ?>selected="true"<?php endif; ?>>0.7</option>
                        <option value="0.8" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.8'): ?>selected="true"<?php endif; ?>>0.8</option>
                        <option value="0.9" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.9'): ?>selected="true"<?php endif; ?>>0.9</option>
                        <option value="1.0" <?php if(empty($config['sitemap_priority_index']) || $config['sitemap_priority_index'] == '1.0'): ?>selected="true"<?php endif; ?>>1.0</option>
                    </select>
                    &nbsp;&nbsp;
                    列表页
                    <select name="sitemap_priority_list">
                        <option value="0.1" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.1'): ?>selected="true"<?php endif; ?>>0.1</option>
                        <option value="0.2" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.2'): ?>selected="true"<?php endif; ?>>0.2</option>
                        <option value="0.3" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.3'): ?>selected="true"<?php endif; ?>>0.3</option>
                        <option value="0.4" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.4'): ?>selected="true"<?php endif; ?>>0.4</option>
                        <option value="0.5" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.5'): ?>selected="true"<?php endif; ?>>0.5</option>
                        <option value="0.6" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.6'): ?>selected="true"<?php endif; ?>>0.6</option>
                        <option value="0.7" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.7'): ?>selected="true"<?php endif; ?>>0.7</option>
                        <option value="0.8" <?php if(empty($config['sitemap_priority_list']) || $config['sitemap_priority_list'] == '0.8'): ?>selected="true"<?php endif; ?>>0.8</option>
                        <option value="0.9" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.9'): ?>selected="true"<?php endif; ?>>0.9</option>
                        <option value="1.0" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '1.0'): ?>selected="true"<?php endif; ?>>1.0</option>
                    </select>
                    &nbsp;&nbsp;
                    内容页
                    <select name="sitemap_priority_view">
                        <option value="0.1" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.1'): ?>selected="true"<?php endif; ?>>0.1</option>
                        <option value="0.2" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.2'): ?>selected="true"<?php endif; ?>>0.2</option>
                        <option value="0.3" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.3'): ?>selected="true"<?php endif; ?>>0.3</option>
                        <option value="0.4" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.4'): ?>selected="true"<?php endif; ?>>0.4</option>
                        <option value="0.5" <?php if(empty($config['sitemap_priority_view']) || $config['sitemap_priority_view'] == '0.5'): ?>selected="true"<?php endif; ?>>0.5</option>
                        <option value="0.6" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.6'): ?>selected="true"<?php endif; ?>>0.6</option>
                        <option value="0.7" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.7'): ?>selected="true"<?php endif; ?>>0.7</option>
                        <option value="0.8" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.8'): ?>selected="true"<?php endif; ?>>0.8</option>
                        <option value="0.9" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.9'): ?>selected="true"<?php endif; ?>>0.9</option>
                        <option value="1.0" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '1.0'): ?>selected="true"<?php endif; ?>>1.0</option>
                    </select>
                    <span class="err"></span>
                    <p class="notic">XML地图文件使用，所抓取页面在您网站的重要性，告诉搜索引擎抓取的优先级。数值越大，优先级越高。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="sitemap_archives_num">生成文档数量</label>
                </dt>
                <dd class="opt">
                    <input id="sitemap_archives_num" name="sitemap_archives_num" value="<?php echo (isset($config['sitemap_archives_num']) && ($config['sitemap_archives_num'] !== '')?$config['sitemap_archives_num']:'100'); ?>" type="text" style="width: 60px;" />&nbsp;篇
                    <p class="notic">发布/编辑文档时，会同步更新sitemap.xml，包含首页、栏目页、指定数量的最新发布文档。</p>
                    <p class="<?php if(isset($config['sitemap_archives_num']) && $config['sitemap_archives_num'] <= 100): ?>none<?php endif; ?> red" id="p_sitemap_archives_num">推荐设置100篇，数量设置越多，会对文档发布/编辑的速度造成一定影响。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="sitemap_tags_num">生成Tag数量</label>
                </dt>
                <dd class="opt">
                    <input id="sitemap_tags_num" name="sitemap_tags_num" value="<?php echo (isset($config['sitemap_tags_num']) && ($config['sitemap_tags_num'] !== '')?$config['sitemap_tags_num']:'100'); ?>" type="text" style="width: 60px;" />&nbsp;篇
                    <p class="notic">发布/编辑文档时，会同步更新sitemap.xml，包含首页、栏目页、指定数量的最新发布文档。</p>
                    <p class="{if isset($config.sitemap_tags_num) && $config.sitemap_tags_num <= 100}none{/elt} red" id="p_sitemap_tags_num">推荐设置100篇，数量设置越多，会对文档发布/编辑的速度造成一定影响。</p>
                </dd>
            </dl>
            <dl class="row zzbaidu">
                <dt class="tit">
                    <label for="sitemap_zzbaidutoken">实时推送Url的token</label>
                </dt>
                <dd class="opt">
                    <input id="sitemap_zzbaidutoken" name="sitemap_zzbaidutoken" value="<?php echo (isset($config['sitemap_zzbaidutoken']) && ($config['sitemap_zzbaidutoken'] !== '')?$config['sitemap_zzbaidutoken']:''); ?>" class="input-txt" type="text" />
                    <p class="notic2">这里填入 <a href="https://ziyuan.baidu.com" target="_blank" style="color: red;">百度搜索资源平台</a> 的准入密钥，才能第一时间推送文章链接给百度蜘蛛。</p>
                </dd>
            </dl>
            <div class="bot">
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="adsubmit();">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">

    $(document).ready(function(){
        // 生成文档数量
        $('#sitemap_archives_num').keyup(function(){
            var sitemap_archives_num = parseInt($(this).val());
            if (sitemap_archives_num > 100) {
                $('#p_sitemap_archives_num').show();
            } else {
                $('#p_sitemap_archives_num').hide();
            }
        });

        // 生成Tag数量
        $('#sitemap_tags_num').keyup(function(){
            var sitemap_tags_num = parseInt($(this).val());
            if (sitemap_tags_num > 100) {
                $('#p_sitemap_tags_num').show();
            } else {
                $('#p_sitemap_tags_num').hide();
            }
        });
    });

    function update_sitemap() {
        layer_loading('正在处理');
        $.ajax({
            url: "<?php echo url('Sitemap/ajax_update_sitemap'); ?>",
            type: "POST",
            dataType: "json",
            data: {_ajax:1},
            success: function(res){
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {icon: 1, time: 1500}, function(){
                        window.location.reload();
                    });
                } else {
                    layer.alert(res.data.msg, {icon: 5, title: false});
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(e.responseText, {icon: 5, title:false});
            }
        });
    }

    function adsubmit(){
        layer_loading("正在处理");
        $('#handlepost').submit();
    }
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>
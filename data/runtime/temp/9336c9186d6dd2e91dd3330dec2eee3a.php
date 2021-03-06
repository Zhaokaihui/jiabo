<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:40:"./application/admin/template/seo/seo.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:58:"/data/wwwroot/jiabo/application/admin/template/seo/bar.htm";i:1638802540;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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

<!-- ????????????????????????????????????????????????????????????????????????????????? -->

<style type="text/css">
	/*??????????????????*/
	#foldSidebar i { font-size: 24px;color:<?php echo $global['web_theme_color']; ?>; }
    /*????????????*/
    .eycms_cont_left{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl dd a:hover,.eycms_cont_left dl dd a.on,.eycms_cont_left dl dt.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl dd a:active{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist dd{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl.jslist dd a:hover,.eycms_cont_left dl.jslist dd a.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist:hover{ background:<?php echo $global['web_assist_color']; ?>; }
    /*????????????*/
    .cate-dropup .cate-dropup-con a:hover{ background-color: <?php echo $global['web_theme_color']; ?>; }
    /*??????*/
    a.ncap-btn-green { background-color: <?php echo $global['web_theme_color']; ?>; }
    a:hover.ncap-btn-green { background-color: <?php echo $global['web_assist_color']; ?>; }
    .flexigrid .sDiv2 .btn:hover { background-color: <?php echo $global['web_theme_color']; ?>; }
    .flexigrid .mDiv .fbutton div.add{background-color: <?php echo $global['web_theme_color']; ?>; border: none;}
    .flexigrid .mDiv .fbutton div.add:hover{ background-color: <?php echo $global['web_assist_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds{color:<?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds:hover{ background-color: <?php echo $global['web_theme_color']; ?>;}
    /*???????????????*/
    .tab-base a.current,
    .tab-base a:hover.current { border-bottom: solid 2px <?php echo $global['web_theme_color']; ?> !important;color: <?php echo $global['web_theme_color']; ?> !important;}
    .addartbtn input.btn:hover{ border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>; }
    .addartbtn input.btn.selected{ color: <?php echo $global['web_theme_color']; ?>;border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>;}
	/*????????????*/
	.member-nav-group .member-nav-item .btn.selected{background: <?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;box-shadow: -1px 0 0 0 <?php echo $global['web_theme_color']; ?>;}
	.member-nav-group .member-nav-item:first-child .btn.selected{border-left: 1px solid <?php echo $global['web_theme_color']; ?> !important;}
	/*??????????????????*/
	.flexigrid .sDiv2 .fa-search{}
        
    /* ???????????????????????? */
   .flexigrid .mDiv .ftitle h3 {border-left: 3px solid <?php echo $global['web_theme_color']; ?>;} 
	
    /*??????*/
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
    /*??????????????????*/
    .ncap-form-default .special-add{background-color:<?php echo $global['web_theme_color']; ?>;border-color:<?php echo $global['web_theme_color']; ?>;}
    .ncap-form-default .special-add:hover{background-color:<?php echo $global['web_assist_color']; ?>;border-color:<?php echo $global['web_assist_color']; ?>;}
    
    /*??????????????????*/
    .on-off_panel .title::before {background-color:<?php echo $global['web_theme_color']; ?>;}
    
     /*????????????*/
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
                <li><a href="<?php echo url('Seo/seo'); ?>" <?php if('seo'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>URL??????</span></a></li>
                <?php endif; endif; if($main_lang == $admin_lang): if(is_check_access('Sitemap@index') == '1'): ?>
                <li><a href="<?php echo url('Sitemap/index'); ?>" <?php if('Sitemap'==CONTROLLER_NAME): ?>class="current"<?php endif; ?>><span>Sitemap</span></a></li>
                <?php endif; endif; if(is_check_access('Links@index') == '1'): ?>
                <li><a href="<?php echo url('Links/index'); ?>" <?php if('Links'==CONTROLLER_NAME): ?>class="current"<?php endif; ?>><span>????????????</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <form method="post" id="handlepost" action="<?php echo url('Seo/handle'); ?>" enctype="multipart/form-data" name="form1">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="seo_pseudo">URL??????</label>
                </dt>
                <dd class="opt">
                    <?php if(is_array($seo_pseudo_list) || $seo_pseudo_list instanceof \think\Collection || $seo_pseudo_list instanceof \think\Paginator): $i = 0; $__LIST__ = $seo_pseudo_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <label>
                        <input type="radio" name="seo_pseudo" value="<?php echo $key; ?>" <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] == $key): ?>checked="checked"<?php endif; ?>/><?php echo $vo; ?>&nbsp;
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <input type="hidden" id="seo_pseudo_old" value="<?php echo (isset($config['seo_pseudo']) && ($config['seo_pseudo'] !== '')?$config['seo_pseudo']:'1'); ?>"/>
                    <input type="hidden" name="seo_html_arcdir_limit" value="<?php echo $seo_html_arcdir_limit; ?>"/>
                    <input type="hidden" id="seo_inlet" value="<?php echo $config['seo_inlet']; ?>"/>
                    <input type="hidden" id="init_html" value="<?php echo (isset($init_html) && ($init_html !== '')?$init_html:'1'); ?>"/>
                </dd>
            </dl>
            <dl class="row <?php if(empty($config['seo_pseudo']) || 1 != $config['seo_pseudo'] || (1 == $config['seo_pseudo'] && 1 == $config['seo_dynamic_format'])): ?>none<?php endif; ?>" id="dl_seo_dynamic_format">
                <dt class="tit">
                    <label>????????????</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_dynamic_format" value="1" <?php if(!isset($config['seo_dynamic_format']) OR $config['seo_dynamic_format'] == 1): ?>checked="checked"<?php endif; ?>>???????????????<a href="javascript:void(0);" onclick="view_exp('view_1_1');">????????????</a><span id="view_1_1" class="none">???http://120.55.78.125/index.php?m=home&amp;c=Lists&amp;a=index&amp;tid=1</span>???</label>&nbsp;
                    <?php if(isset($config['seo_dynamic_format']) AND $config['seo_dynamic_format'] == 2): ?>
                    <br/>
                    <label><input type="radio" name="seo_dynamic_format" value="2" checked="checked">????????????&nbsp;<font color="red">[?????????????????????]</font>???<a href="javascript:void(0);" onclick="view_exp('view_1_2');">????????????</a><span id="view_1_2" class="none">???http://120.55.78.125/home/Lists/index.html?tid=1</span>???</label>&nbsp;
                    <?php endif; ?>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <div class="row <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] != 2): ?>none<?php endif; ?>" id="dl_seo_html_format">
                <?php if(!(empty($seo_pseudo_lang) || (($seo_pseudo_lang instanceof \think\Collection || $seo_pseudo_lang instanceof \think\Paginator ) && $seo_pseudo_lang->isEmpty()))): ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="seo_pseudo_lang">?????????URL</label>
                    </dt>
                     <dd class="opt">
                        <label><input type="radio" name="seo_pseudo_lang" value="1" <?php if(!isset($seo_pseudo_lang) OR $seo_pseudo_lang != 3): ?>checked="checked"<?php endif; ?>/>??????URL</label>&nbsp;
                        <label><input type="radio" name="seo_pseudo_lang" value="3" <?php if(isset($seo_pseudo_lang) AND $seo_pseudo_lang == 3): ?>checked="checked"<?php endif; ?>>????????????</label>&nbsp;
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <?php endif; ?>
                <dl class="row">
                    <dt class="tit">
                        <label for="seo_html_arcdir">??????????????????</label>
                    </dt>
                    <dd class="opt">
                        <input id="seo_html_arcdir" name="seo_html_arcdir" value="<?php echo (isset($config['seo_html_arcdir']) && ($config['seo_html_arcdir'] !== '')?$config['seo_html_arcdir']:''); ?>" placeholder="?????????????????????" type="text" />
                        ?????????html???
                        <p class="notic">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                        <p class="<?php if(empty($seo_html_arcdir_1) || (($seo_html_arcdir_1 instanceof \think\Collection || $seo_html_arcdir_1 instanceof \think\Paginator ) && $seo_html_arcdir_1->isEmpty())): ?>none<?php endif; ?>" style="color: red;" id="tips_seo_html_arcdir_1">?????????????????? http://120.55.78.125<span id="tips_seo_html_arcdir_2"><?php echo (isset($seo_html_arcdir_1) && ($seo_html_arcdir_1 !== '')?$seo_html_arcdir_1:''); ?></span>/</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label>??????????????????</label>
                    </dt>
                    <dd class="opt">
                        <label><input type="radio" name="seo_html_listname" value="1" <?php if(isset($config['seo_html_listname']) && $config['seo_html_listname'] == 1): ?>checked="checked"<?php endif; ?>><?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>???????????????/<?php endif; ?>??????????????????/lists_ID.html???<a href="javascript:void(0);" onclick="view_exp('lists_2_1');">????????????</a><span id="lists_2_1" class="none">???http://120.55.78.125<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/lists_1.html</span>???</label>&nbsp;
                        <br/>
                        <label><input type="radio" name="seo_html_listname" value="2" <?php if(!isset($config['seo_html_listname']) || $config['seo_html_listname'] != 1): ?>checked="checked"<?php endif; ?>><?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>???????????????/<?php endif; ?>??????????????????/???????????????/???<a href="javascript:void(0);" onclick="view_exp('lists_2_2');">????????????</a><span id="lists_2_2" class="none">???http://120.55.78.125<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/lol/</span>???</label>&nbsp;
                        <br/>
                        <label><input type="radio" name="seo_html_listname" value="3" <?php if(isset($config['seo_html_listname']) && $config['seo_html_listname'] == 3): ?>checked="checked"<?php endif; ?>><?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>???????????????/<?php endif; ?>???????????????/???<a href="javascript:void(0);" onclick="view_exp('lists_2_3');">????????????</a><span id="lists_2_3" class="none">???http://120.55.78.125<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/lol/</span>???</label>&nbsp;
                        <br/>
                        <label><input type="radio" name="seo_html_listname" value="4" <?php if(isset($config['seo_html_listname']) && $config['seo_html_listname'] == 4): ?>checked="checked"<?php endif; ?>>????????????<a href="javascript:void(0);" onclick="view_exp('lists_2_4');">????????????</a><span id="lists_2_4" class="none">??????????????????????????????/??????????????????????????????????????????????????????????????????</span>???</label>&nbsp;
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label>??????????????????</label>
                    </dt>
                    <dd class="opt">
                        <label><input type="radio" name="seo_html_pagename" value="1" <?php if(isset($config['seo_html_pagename']) && $config['seo_html_pagename'] == 1): ?>checked="checked"<?php endif; ?>><?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>???????????????/<?php endif; ?>??????????????????/ID.html???<a href="javascript:void(0);" onclick="view_exp('view_2_1');">????????????</a><span id="view_2_1" class="none">???http://120.55.78.125<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/10.html</span>???</label>&nbsp;
                        <br/>
                        <label><input type="radio" name="seo_html_pagename" value="2" <?php if(!isset($config['seo_html_pagename']) || $config['seo_html_pagename'] != 1): ?>checked="checked"<?php endif; ?>><?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>???????????????/<?php endif; ?>??????????????????/???????????????/ID.html???<a href="javascript:void(0);" onclick="view_exp('view_2_2');">????????????</a><span id="view_2_2" class="none">???http://120.55.78.125<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/lol/20.html</span>???</label>&nbsp;
                        <br/>
                        <label><input type="radio" name="seo_html_pagename" value="3" <?php if(isset($config['seo_html_pagename']) && $config['seo_html_pagename'] == 3): ?>checked="checked"<?php endif; ?>><?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>???????????????/<?php endif; ?>???????????????/ID.html???<a href="javascript:void(0);" onclick="view_exp('view_2_3');">????????????</a><span id="view_2_3" class="none">???http://120.55.78.125<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/lol/20.html</span>???</label>&nbsp;
                        <br/>
                        <label><input type="radio" name="seo_html_pagename" value="4" <?php if(isset($config['seo_html_pagename']) && $config['seo_html_pagename'] == 4): ?>checked="checked"<?php endif; ?>>????????????<a href="javascript:void(0);" onclick="view_exp('view_2_4');">????????????</a><span id="view_2_4" class="none">??????????????????????????????/??????????????????????????????????????????????????????????????????</span>???</label>&nbsp;
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
            </div>
            <dl class="row <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] != 3): ?>none<?php endif; ?>" id="dl_seo_rewrite_format">
                <dt class="tit">
                    <label>URL??????</label>
                </dt>
                <dd class="opt">
                    <label>
                        <input type="radio" name="seo_rewrite_format" <?php if(!isset($config['seo_rewrite_format']) OR $config['seo_rewrite_format'] == 1): ?> value="1" checked="checked" <?php else: ?> value="3" checked="checked" <?php endif; ?>>???????????????<a href="javascript:void(0);" onclick="view_exp('view_3_1');">??????</a><span id="view_3_1" class="none">???http://120.55.78.125/news/</span>???
                    </label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_rewrite_format" value="2" <?php if(isset($config['seo_rewrite_format']) AND $config['seo_rewrite_format'] == 2): ?>checked="checked"<?php endif; ?>>???????????????<a href="javascript:void(0);" onclick="view_exp('view_3_2');">??????</a><span id="view_3_2" class="none">???http://120.55.78.125/article/news.html</span>???</label>&nbsp;
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row <?php if(!isset($config['seo_pseudo']) OR $config['seo_pseudo'] != 3 OR $config['seo_rewrite_format'] == 2): ?>none<?php endif; ?>" id="dl_seo_rewrite_view_format">
                <dt class="tit">
                    <label>????????????URL</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_rewrite_view_format" value="1" <?php if((!isset($config['seo_rewrite_format']) OR $config['seo_rewrite_format'] == 1) OR (!isset($config['seo_rewrite_view_format']) OR $config['seo_rewrite_view_format'] == 1)): ?>checked="checked"<?php endif; ?>>?????????</label>&nbsp;
                    <label><input type="radio" name="seo_rewrite_view_format" value="3" <?php if((isset($config['seo_rewrite_format']) AND $config['seo_rewrite_format'] == 3) OR $config['seo_rewrite_view_format'] == 3): ?>checked="checked"<?php endif; ?>>????????????</label>&nbsp;
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>??????????????????</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_liststitle_format" value="1" <?php if(isset($config['seo_liststitle_format']) AND $config['seo_liststitle_format'] == 1): ?>checked="checked"<?php endif; ?>>????????????_???N???</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_liststitle_format" value="2" <?php if(!isset($config['seo_liststitle_format']) OR $config['seo_liststitle_format'] == 2): ?>checked="checked"<?php endif; ?>>????????????_???N???_????????????</label>&nbsp;
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>??????????????????</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_viewtitle_format" value="1" <?php if(isset($config['seo_viewtitle_format']) AND $config['seo_viewtitle_format'] == 1): ?>checked="checked"<?php endif; ?>>????????????</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_viewtitle_format" value="2" <?php if(!isset($config['seo_viewtitle_format']) OR $config['seo_viewtitle_format'] == 2): ?>checked="checked"<?php endif; ?>>????????????_????????????</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_viewtitle_format" value="3" <?php if(isset($config['seo_viewtitle_format']) AND $config['seo_viewtitle_format'] == 3): ?>checked="checked"<?php endif; ?>>????????????_????????????_????????????</label>&nbsp;
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <!-- <dl class="row <?php if(empty($config['seo_inlet']) OR (1 == $config['seo_inlet'] AND 1 == $config['seo_force_inlet'])): else: ?>none<?php endif; ?>" id="dl_seo_force_inlet"> -->
            <dl class="row none" id="dl_seo_force_inlet">
                <dt class="tit">
                    <label for="site_url">????????????index.php</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="seo_force_inlet1" class="cb-enable <?php if(isset($config['seo_force_inlet']) && $config['seo_force_inlet'] == 1): ?>selected<?php endif; ?>">??????</label>
                        <label for="seo_force_inlet0" class="cb-disable <?php if(empty($config['seo_force_inlet'])): ?>selected<?php endif; ?>">??????</label>
                        <input id="seo_force_inlet1" name="seo_force_inlet" value="1" type="radio" <?php if(isset($config['seo_force_inlet']) && $config['seo_force_inlet'] == 1): ?> checked="checked"<?php endif; ?>>
                        <input id="seo_force_inlet0" name="seo_force_inlet" value="0" type="radio" <?php if(empty($config['seo_force_inlet'])): ?> checked="checked"<?php endif; ?>>
                    </div>
                    <br/>
                    <p class=""></p>
                </dd>
            </dl>
            <div class="bot">
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="adsubmit();">????????????</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">

    $(function(){
        // ??????????????????
        $('input[name=seo_html_listname]').click(function(){
            var seo_html_listname = $(this).val();
            var seo_html_pagename = $('input[name=seo_html_pagename]:checked').val();
            if (4 == seo_html_listname && 4 != seo_html_pagename) {
                layer.alert('??????????????????????????????????????????', {icon: 6, closeBtn:false, title: false});
            }
        });
        // ??????????????????
        $('input[name=seo_html_pagename]').click(function(){
            var seo_html_pagename = $(this).val();
            var seo_html_listname = $('input[name=seo_html_listname]:checked').val();
            if (4 == seo_html_pagename && 4 != seo_html_listname) {
                layer.alert('??????????????????????????????????????????', {icon: 6, closeBtn:false, title: false});
            }
        });

        $('input[name=seo_pseudo]').click(function(){
            var _this = this;
            $('#dl_seo_dynamic_format').hide();
            $('#dl_seo_html_format').hide();
            // $('#tab_base_html').attr('style','display:none!important');
            $('#dl_seo_rewrite_format').hide();
            $('#seo_right_uphtml').hide();
            var seo_pseudo = $(_this).val();
            if (1 == seo_pseudo) {
                $('#dl_seo_rewrite_view_format').hide();
                if (1 != $('input[name=seo_dynamic_format]:checked').val()) {
                    $('#dl_seo_dynamic_format').show();
                }
                if (1 != $('#seo_inlet').val()) {
                    $('#dl_seo_force_inlet').show();
                } else {
                    $('#dl_seo_force_inlet').hide();
                }
            } else if (2 == seo_pseudo) {
                $('#dl_seo_force_inlet').hide();
                $('#dl_seo_rewrite_view_format').hide();
                msg = "??????????????????????????????<br/>1???????????????????????????<br/>2?????????????????????????????????<br/>3?????????????????????????????????????????????";
                layer.alert(msg, {icon: 6, closeBtn:false, title: false});
                $('#dl_seo_html_format').show();
                // $('#tab_base_html').show();
                $('#seo_right_uphtml').show();
            } else {
                $('#dl_seo_rewrite_format').show();
                var seo_rewrite_format = $('input[name=seo_rewrite_format]:checked').val();
                if (seo_rewrite_format == 1) {
                    $('#dl_seo_rewrite_view_format').show();
                } else {
                    $('#dl_seo_rewrite_view_format').hide();
                }
                
                if (1 != $('#seo_inlet').val()) {
                    $('#dl_seo_force_inlet').show();
                } else {
                    $('#dl_seo_force_inlet').hide();
                }
            }

            var seo_pseudo_old = $('#seo_pseudo_old').val();
            if (3 == seo_pseudo) {
                layer_loading('????????????');
                $.ajax({
                    url: "<?php echo url('Seo/ajax_checkHtmlDirpath'); ?>",
                    type: "POST",
                    dataType: "json",
                    data: {seo_pseudo_new:seo_pseudo, _ajax:1},
                    // async: true,
                    success: function(res){
                        layer.closeAll();
                        if (res.code == 0) {
                            layer.msg(res.msg, {icon: 5, time: 1500});
                        } else {
                            if (res.data.msg != '') {
                                $('input[name=seo_pseudo]').each(function(i,o){
                                    if($(o).val() == seo_pseudo_old){
                                        $(o).attr('checked',true);
                                    } else {
                                        $(o).attr('checked',false);
                                    }
                                })
                                $('#dl_seo_html_format').show();
                                $('#seo_right_uphtml').show();
                                // $('#tab_base_html').show();
                                var seo_pseudo = $(_this).val();
                                //?????????
                                var height = res.data.height + 116;
                                if (350 <= height) height = 350;
                                var confirm1 = layer.confirm(res.data.msg, {
                                        title: false
                                        ,area: ['320px', height+'px']
                                        ,btn: ['????????????','????????????'] //??????

                                    }, function(){
                                        layer.close(confirm1);

                                    }, function(){
                                        layer_loading('????????????');
                                        $.ajax({
                                            url: "<?php echo url('Seo/ajax_delHtmlDirpath'); ?>",
                                            type: "POST",
                                            dataType: "json",
                                            data: {_ajax:1},
                                            success: function(res){
                                                layer.closeAll();
                                                if (1 == res.code) {
                                                    $('input[name=seo_pseudo]').each(function(i,o){
                                                        if($(o).val() == seo_pseudo){
                                                            $(o).attr('checked',true);
                                                        } else {
                                                            $(o).attr('checked',false);
                                                        }
                                                    })
                                                    $('#dl_seo_html_format').hide();
                                                    $('#seo_right_uphtml').hide();
                                                    // $('#tab_base_html').attr('style','display:none!important');
                                                    layer.msg(res.msg, {icon: 1, time: 1500});
                                                } else {
                                                    layer.alert(res.data.msg, {icon: 5, title: false});
                                                }
                                            },
                                            error: function(e){
                                                layer.closeAll();
                                                layer.alert(e.responseText, {icon: 5, title:false});
                                            }
                                        })
                                    }
                                );
                            }
                        }
                    },
                    error: function(e){
                        layer.closeAll();
                        layer.alert(e.responseText, {icon: 5, title:false});
                    }
                });
            }
        });

        $('input[name=seo_rewrite_format]').click(function(){
            var seo_rewrite_format = $(this).val();
            if (1 == seo_rewrite_format || 3 == seo_rewrite_format) {
                $('#dl_seo_rewrite_view_format').show();
            } else {
                $('#dl_seo_rewrite_view_format').hide();
            }
        });

        $('#seo_html_arcdir').keyup(function(){
            var seo_html_arcdir = $(this).val();
            if (seo_html_arcdir != '') {
                if (seo_html_arcdir.substr(0,1) == '/') seo_html_arcdir = seo_html_arcdir.substr(1);
                seo_html_arcdir = '/' + seo_html_arcdir;
                $('#tips_seo_html_arcdir_1').show();
                $('#tips_seo_html_arcdir_2').html(seo_html_arcdir);
            } else {
                $('#tips_seo_html_arcdir_1').hide();
            }
            $('#exp_seo_html_arcdir').html(seo_html_arcdir);
        });

        $('input[name="seo_force_inlet"]').click(function(){
            if (1 == $(this).val()) {
                layer.open({
                    type: 2,
                    title: false,
                    area: ['0px', '0px'],
                    shade: 0.0,
                    closeBtn: 0,
                    shadeClose: true,
                    content: '//<?php echo \think\Request::instance()->host(); ?>/api/Rewrite/testing.html',
                    success: function(layero, index){
                        layer.close(index);
                        var body = layer.getChildFrame('body', index);
                        var content = body.html();
                        if (content.indexOf("Congratulations on passing") == -1)
                        {
                            $('label[for=seo_force_inlet1]').removeClass('selected');
                            $('#seo_force_inlet1').attr('checked','');
                            $('label[for=seo_force_inlet0]').addClass('selected');
                            $('#seo_force_inlet0').attr('checked','checked');
                            layer.alert('???????????????index.php??????<a href="javascript:void(0);" onclick="layer.closeAll();click_to_eyou_1575506523(\'https://www.eyoucms.com/plus/view.php?aid=7874\',\'??????URL??????index.php??????\');">??????????????????</a>', {icon: 2, title:false});
                        }
                    }
                });
            }
        });

        checkInlet();

        // ??????????????????index.php
        function checkInlet() {
            if (2 == $('input[name=seo_pseudo]:checked').val()) {
                $('#dl_seo_force_inlet').hide();
            }
            layer.open({
                type: 2,
                title: false,
                area: ['0px', '0px'],
                shade: 0.0,
                closeBtn: 0,
                shadeClose: true,
                content: '//<?php echo \think\Request::instance()->host(); ?>/api/Rewrite/setInlet.html',
                success: function(layero, index){
                    layer.close(index);
                    var body = layer.getChildFrame('body', index);
                    var content = body.html();
                    if (content.indexOf("Congratulations on passing") == -1)
                    {
                        $('#seo_inlet').val(0);
                        $('label[for=seo_force_inlet1]').removeClass('selected');
                        $('#seo_force_inlet1').attr('checked','');
                        $('label[for=seo_force_inlet0]').addClass('selected');
                        $('#seo_force_inlet0').attr('checked','checked');
                        if (2 != $('input[name=seo_pseudo]:checked').val()) {
                            $('#dl_seo_force_inlet').show();
                        }
                        $.ajax({
                            type : "POST",
                            url  : "/index.php?m=api&c=Rewrite&a=setInlet",
                            data : {seo_inlet:0,_ajax:1},
                            dataType : "JSON",
                            success: function(res) {

                            }
                        });
                    } else {
                        $('#seo_inlet').val(1);
                        $('#dl_seo_force_inlet').hide();
                        $('label[for=seo_force_inlet0]').removeClass('selected');
                        $('#seo_force_inlet0').attr('checked','');
                        $('label[for=seo_force_inlet1]').addClass('selected');
                        $('#seo_force_inlet1').attr('checked','checked');
                    }
                }
            });
        }
    });

    function adsubmit(){
        if($("input[name='seo_pseudo']:checked").val() == '2'){
            var seo_html_arcdir = $('input[name="seo_html_arcdir"]').val();
            if (seo_html_arcdir != '') {
                seo_html_arcdir = seo_html_arcdir_new = seo_html_arcdir.replace('\\', '/');
                var reg = /^([0-9a-zA-Z\_\-\/]+)$/;
                if (seo_html_arcdir != '/' && reg.test(seo_html_arcdir)) {
                    // ????????????????????????
                    if (seo_html_arcdir_new.substr(0,1) == '/') seo_html_arcdir_new = seo_html_arcdir_new.substr(1);
                    var html_arcdir_arr = seo_html_arcdir_new.split("/");
                    var html_arcdir_one = html_arcdir_arr[0]; // ???????????????
                    var seo_html_arcdir_limit = $('input[name="seo_html_arcdir_limit"]').val();
                    var seo_html_arcdir_limit_arr = seo_html_arcdir_limit.split(",");
                    if (seo_html_arcdir_limit_arr.indexOf(html_arcdir_one) >= 0){
                        layer.msg('?????????????????????????????? '+html_arcdir_one+' ????????????????????????!', {icon: 2,time: 3000});
                        $('input[name="seo_html_arcdir"]').focus();
                        return false;
                    }
                }else{
                    showErrorMsg('????????????????????????????????????');
                    $('input[name="seo_html_arcdir"]').focus();
                    return false;
                }
            }
        }
        layer_loading("????????????");
        var init_html = $('#init_html').val();
        $.ajax({
            url: "<?php echo url('Seo/handle', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'json',
            data: $('#handlepost').serialize(),
            success: function(res){
                if (1 == res.code) {
                    if (2 == init_html || 2 != $("input[name='seo_pseudo']:checked").val()) {
                        // layer.closeAll();
                        layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                            window.location.href = res.url;
                        });
                    } else {
                        layer.closeAll();
                        var confirm1 = layer.confirm('?????????????????????????????????????????????', {
                                title: false
                                ,closeBtn: false
                                ,btn: ['???','???'] //??????

                            }, function(){
                                var url = eyou_basefile+"?m=admin&c=Seo&a=site&lang="+__lang__;
                                var index = layer.open({
                                    type: 2,
                                    title: '????????????',
                                    area: ['500px', '300px'],
                                    fix: false, 
                                    maxmin: false,
                                    content: url,
                                    end: function(layero, index){
                                        layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                                            window.location.href = res.url;
                                        });
                                    }
                                });
                            }, function(){
                                layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                                    window.location.href = res.url;
                                });
                            }
                        );
                    }
                } else {
                    layer.closeAll();
                    layer.alert(res.msg, {icon: 5, title:false});
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(e.responseText, {icon: 5, title:false});
            }
        });
    }

    function view_exp(id)
    {
        $('#'+id).toggle();
    }
</script>

<div class="seo-right <?php if(2 != $config['seo_pseudo']): ?>none<?php endif; ?>" id="seo_right_uphtml">
    <style>
        .seo-right{
            position: fixed;
            top: 70px;
            margin-top: 0px;
    /*        top: 50%;
            margin-top: -185px;*/
            right: 30px;
            width: 350px;
            height: 270px;
            background-color:#fff;
            z-index:666666;
            border: 1px solid #ddd;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            border-radius: 4px;
            overflow: hidden;
        }
        .seo-html dt.tit {
           width: 60px;
           padding-left:20px;
        }   
    </style>
    <div class="page">
        <form method="get" id="html_handlepost" name="form2">
            <div class="ncap-form-default seo-html">
                <dl class="row">
                    <dt class="tit">
                        <label>????????????</label>
                    </dt>
                    <dd class="opt w0">       
                        <a href="javascript:void(0);" id="up_site" class="ncap-btn ncap-btn-green">????????????</a>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label>??????</label>
                    </dt>
                    <dd class="opt w0">       
                        <a href="javascript:void(0);" id="up_index" class="ncap-btn ncap-btn-green">????????????</a>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">?????????</dt>
                    <dd class="opt w0">
                        <select name="html_typeid" id="html_typeid" style="width: 150px;">
                            <option value="0">???????????????</option>
                            <?php echo $select_html; ?>
                        </select>
                        &nbsp;<a href="javascript:void(0);" id="up_channel" class="ncap-btn ncap-btn-green">????????????</a>
                        <p class="notic"></p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">?????????</dt>
                    <dd class="opt w0">
                        <select name="html_arc_typeid" id="html_arc_typeid" style="width: 150px;">
                            <option value="0">???????????????</option>
                            <?php echo $arc_select_html; ?>
                        </select>
                        &nbsp;<a href="javascript:void(0);" id="up_article" class="ncap-btn ncap-btn-green">????????????</a>
                        <p class="notic"></p>
                    </dd>
                </dl>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(function(){
            
            //????????????
            $("#up_site").click(function(){
                $.ajax({
                    url: "<?php echo url('Seo/handle', ['is_buildhtml'=>1,'_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: $('#handlepost').serialize(),
                    beforeSend:function(){
                        layer_loading('????????????');
                    },
                    success: function(res){
                        layer.closeAll();
                        if (0 == res.code) {
                            showErrorAlert(res.msg);
                        } else {
                            var url = eyou_basefile+"?m=admin&c=Seo&a=site&lang="+__lang__;
                            var index = layer.open({type: 2,title: '????????????',area: ['500px', '300px'],fix: false, maxmin: false,content: url});
                        }
                    },
                    error: function(e){
                        layer.closeAll();
                        layer.alert(e.responseText, {icon: 5, title:false});
                    }
                });
            })

            //????????????
            $("#up_index").click(function(){
                $.ajax({
                    url: "<?php echo url('Seo/handle', ['is_buildhtml'=>1,'_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: $('#handlepost').serialize(),
                    beforeSend:function(){
                        layer_loading('????????????');
                    },
                    success: function(res){
                        if (0 == res.code) {
                            layer.closeAll();
                            showErrorAlert(res.msg);
                        } else {
                            var timestamp1 = Date.parse(new Date());
                            $.ajax({
                                url:__root_dir__+"/index.php?m=home&c=Buildhtml&a=buildIndex&lang="+__lang__,
                                type:'POST',
                                dataType:'json',
                                data: {_ajax:1},
                                beforeSend:function(){
                                    // layer_loading('????????????');
                                    // var index = layer.load(0, {shade: false}); 
                                },
                                success:function(data){
                                    if(data.msg !== ""){
                                        layer.alert(data.msg, {icon: 5, title:false,closeBtn: 0 },function () {
                                            layer.closeAll();
                                        } );
                                    }else{
                                        layer.closeAll();
                                        var timestamp2 = Date.parse(new Date());
                                        var timestamp3 = (timestamp2 - timestamp1) / 1000;
                                        if (timestamp3 < 1) timestamp3 = 1; 
                                        layer.msg("???????????????????????????<font color='red'>"+timestamp3+"</font> ???",{icon:1,time:2000}); 
                                    }
                                },
                                complete:function(){
                                    // layer.alert(1, {icon: 5, title:false});
                                },
                                error: function(e){
                                    layer.closeAll();
                                    showErrorAlert(e.responseText);
                                }
                            });
                        }
                    },
                    error: function(e){
                        layer.closeAll();
                        showErrorAlert(e.responseText);
                    }
                });
            })
            
            //???????????????
            $("#up_channel").click(function(){
                $.ajax({
                    url: "<?php echo url('Seo/handle', ['is_buildhtml'=>1,'_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: $('#handlepost').serialize(),
                    beforeSend:function(){
                        layer_loading('????????????');
                    },
                    success: function(res){
                        layer.closeAll();
                        if (0 == res.code) {
                            showErrorAlert(res.msg);
                        } else {
                            var typeid = $("#html_typeid").val();     //??????id
                            var url = eyou_basefile+"?m=admin&c=Seo&a=channel&typeid="+typeid+"&lang="+__lang__;
                            var index = layer.open({type: 2,title: '????????????',area: ['500px', '300px'],fix: false, maxmin: false,content: url});
                        }
                    },
                    error: function(e){
                        layer.closeAll();
                        showErrorAlert(e.responseText);
                    }
                });
            })

            //???????????????
            $("#up_article").click(function(){
                $.ajax({
                    url: "<?php echo url('Seo/handle', ['is_buildhtml'=>1,'_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'json',
                    data: $('#handlepost').serialize(),
                    beforeSend:function(){
                        layer_loading('????????????');
                    },
                    success: function(res){
                        layer.closeAll();
                        if (0 == res.code) {
                            showErrorAlert(res.msg);
                        } else {
                            var typeid = $("#html_arc_typeid").val();     //??????id
                            var url = eyou_basefile+"?m=admin&c=Seo&a=article&typeid="+typeid+"&lang="+__lang__;
                            var index = layer.open({type: 2,title: '????????????',area: ['500px', '300px'],fix: false, maxmin: false,content: url});
                        }
                    },
                    error: function(e){
                        layer.closeAll();
                        showErrorAlert(e.responseText);
                    }
                });
            })
        })
    </script>
</div>

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
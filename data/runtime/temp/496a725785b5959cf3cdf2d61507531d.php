<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:43:"./application/admin/template/system/web.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:61:"/data/wwwroot/jiabo/application/admin/template/system/bar.htm";i:1638802540;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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
<script type="text/javascript" src="/public/static/admin/js/clipboard.min.js"></script>
<body class="system-web" style="overflow-y: scroll;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <?php if(\think\Request::instance()->param('tabase') != '-1'): ?>
    <div class="fixed-bar">
        <div class="item-title">
            <ul class="tab-base nc-row">
                <?php if(is_check_access(CONTROLLER_NAME.'@web') == '1'): ?>
                <li><a href="<?php echo url('System/web'); ?>" <?php if('web'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>????????????</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@web2') == '1'): ?>
                    <li><a href="<?php echo url('System/web2'); ?>" <?php if('web2'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>????????????</span></a></li>
                    <?php endif; endif; if(is_check_access(CONTROLLER_NAME.'@basic') == '1'): ?>
                <li><a href="<?php echo url('System/basic'); ?>" <?php if('basic'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>????????????</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@api_conf') == '1'): ?>
                    <li><a href="<?php echo url('System/api_conf'); ?>" <?php if(preg_match('/^api_conf/i', ACTION_NAME)): ?>class="current"<?php endif; ?>><span>????????????</span></a></li>
                    <?php endif; endif; ?>
<!-- 
                <?php if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@pay_api_index') == '1'): ?>
                        <li><a href="<?php echo url('PayApi/pay_api_index'); ?>" <?php if('pay_api_index'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>????????????</span></a></li>
                    <?php endif; endif; ?>
 -->
            </ul>
        </div>
    </div>
<?php endif; ?>
    <form method="post" id="handlepost" action="<?php echo url('System/web'); ?>" enctype="multipart/form-data" name="form1">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="site_url">????????????</label>
                </dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="web_status0" class="cb-enable <?php if(!isset($config['web_status']) OR empty($config['web_status'])): ?>selected<?php endif; ?>">??????</label>
                        <label for="web_status1" class="cb-disable <?php if(isset($config['web_status']) AND $config['web_status'] == 1): ?>selected<?php endif; ?>">??????</label>
                        <input id="web_status0" name="web_status" value="0" type="radio" <?php if(!isset($config['web_status']) OR empty($config['web_status'])): ?> checked="checked"<?php endif; ?>>
                        <input id="web_status1" name="web_status" value="1" type="radio" <?php if(isset($config['web_status']) AND $config['web_status'] == 1): ?> checked="checked"<?php endif; ?>>
                        <input type="hidden" id="old_web_status" value="<?php echo (isset($config['web_status']) && ($config['web_status'] !== '')?$config['web_status']:'0'); ?>">
                    </div>
                    <!-- <p class="notic2 red none" id="web_status_tips" style="text-indent: 1em;">????????????????????????????????????????????????URL?????????</p> -->
                    <?php if($web_cmsmode == '2'): ?>
                    <dd class="variable">
                        <div><p><b>?????????</b></p></div>
                        <div class="r"><b>????????????</b></div>
                    </dd>
                    <?php endif; ?>
                </dd>
            </dl>
            <div id="div_web_status_close" class="<?php if(!isset($config['web_status']) OR empty($config['web_status'])): ?>none<?php endif; ?>">
                <dl class="row">
                    <dt class="tit">
                        <label for="web_status_url">&nbsp;</label>
                    </dt>
                    <dd class="opt">
                        <input id="web_status_url" name="web_status_url" value="<?php echo (isset($config['web_status_url']) && ($config['web_status_url'] !== '')?$config['web_status_url']:''); ?>" class="input-txt" type="text" placeholder="?????????????????????????????????URL???http://" />
                        <p class="notic">??????????????????URL??????????????????????????????????????????URL????????????http:// ??? https://</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label for="web_status_tpl">&nbsp;</label>
                    </dt>
                    <dd class="opt">
                        <input id="web_status_tpl" name="web_status_tpl" value="<?php echo (isset($config['web_status_tpl']) && ($config['web_status_tpl'] !== '')?$config['web_status_tpl']:''); ?>" class="input-txt" type="text" placeholder="??????????????????????????????????????????????????????public/close.html" />
                        <p class="notic">???????????????????????????????????????URL??????????????????????????????????????????</p>
                    </dd>
                </dl>
            </div>
            <dl class="row">
                <dt class="tit">
                    <label for="web_name">????????????</label>
                </dt>
                <dd class="opt ui-web_name ui-text">
                    <input id="web_name" name="web_name" value="<?php echo (isset($config['web_name']) && ($config['web_name'] !== '')?$config['web_name']:''); ?>" class="input-txt ui-input" type="text" data-num="10" />
                    <p class="notic">???????????????10?????????</p>
                    <p class="ui-big-text none">???????????????10????????????<span class="ui-textTips">???????????????10?????????</span>???</p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_name</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_name');" class="ui-btn3 blue web_name" data-clipboard-text="{eyou:global name='web_name' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_logo">??????LOGO</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_web_logo_local" <?php if(isset($config['web_logo_is_remote']) AND $config['web_logo_is_remote'] == 1): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="img_a_web_logo" class="nyroModal" rel="gal" href="<?php echo (isset($config['web_logo_local']) && ($config['web_logo_local'] !== '')?$config['web_logo_local']:'javascript:void(0);'); ?>" target="_blank">
                                <i id="img_i_web_logo" class="fa fa-picture-o" <?php if(!(empty($config['web_logo_local']) || (($config['web_logo_local'] instanceof \think\Collection || $config['web_logo_local'] instanceof \think\Paginator ) && $config['web_logo_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($config['web_logo_local']) && ($config['web_logo_local'] !== '')?$config['web_logo_local']:''); ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="web_logo_local" name="web_logo_local" value="<?php echo (isset($config['web_logo_local']) && ($config['web_logo_local'] !== '')?$config['web_logo_local']:''); ?>" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="????????????..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','web_logo_img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo" title="?????????????????????????????????????????????????????????????????????????????????????????????">
                        </span>
                    </div>
                    <input type="text" id="web_logo_remote" name="web_logo_remote" value="<?php echo (isset($config['web_logo_remote']) && ($config['web_logo_remote'] !== '')?$config['web_logo_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if(!isset($config['web_logo_is_remote']) OR empty($config['web_logo_is_remote'])): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="web_logo_is_remote" id="web_logo_is_remote" value="1" <?php if(isset($config['web_logo_is_remote']) AND $config['web_logo_is_remote'] == 1): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'web_logo');">????????????</label>
                    <span class="err"></span>
                    <p class="notic">????????????LOGO?????????????????????????????????????????????????????????</p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_logo</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_logo');" class="ui-btn3 blue web_logo" data-clipboard-text="{eyou:global name='web_logo' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_ico">???????????????</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show">
                        <span class="show">
                            <a id="img_a_web_ico" class="nyroModal" rel="gal" href="<?php echo (isset($config['web_ico']) && ($config['web_ico'] !== '')?$config['web_ico']:'javascript:void(0);'); ?>?t=<?php echo time(); ?>" target="_blank">
                                <i id="img_i_web_ico" class="fa fa-picture-o" <?php if(!(empty($config['web_ico']) || (($config['web_ico'] instanceof \think\Collection || $config['web_ico'] instanceof \think\Paginator ) && $config['web_ico']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($config['web_ico']) && ($config['web_ico'] !== '')?$config['web_ico']:''); ?>?t=<?php echo time(); ?> width=32 height=32>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="web_ico" name="web_ico" value="<?php echo (isset($config['web_ico']) && ($config['web_ico'] !== '')?$config['web_ico']:''); ?>" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="????????????..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','web_ico_img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo" title="?????????????????????????????????????????????????????????????????????????????????????????????">
                        </span>
                    </div>
                    <span class="err"></span>
                    <p class="notic">???????????? 32 * 32 (??????) ???.ico?????????<br/>???????????????????????????????????????????????????????????????????????????</p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_ico</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_ico');" class="ui-btn3 blue web_ico" data-clipboard-text="{eyou:global name='web_ico' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_basehost">????????????</label>
                </dt>
                <dd class="opt">
                    <input id="web_basehost" name="web_basehost" value="<?php echo (isset($config['web_basehost']) && ($config['web_basehost'] !== '')?$config['web_basehost']:''); ?>" placeholder="<?php echo \think\Request::instance()->scheme(); ?>://" class="input-txt" type="text" />
                    <p class="notic"></p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_basehost</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_basehost');" class="ui-btn3 blue web_basehost" data-clipboard-text="{eyou:global name='web_basehost' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_title">????????????</label>
                </dt>
                <dd class="opt ui-web_title ui-text">
                    <input id="web_title" name="web_title" value="<?php echo (isset($config['web_title']) && ($config['web_title'] !== '')?$config['web_title']:''); ?>" class="input-txt ui-input" type="text" data-num="80" />
                    <p class="notic">???????????????80?????????</p>
                    <p class="ui-big-text none">???????????????80????????????<span class="ui-textTips">???????????????80?????????</span>???</p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_title</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_title');" class="ui-btn3 blue web_title" data-clipboard-text="{eyou:global name='web_title' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_keywords">???????????????</label>
                </dt>
                <dd class="opt ui-keyword ui-text">
                    <input id="web_keywords" name="web_keywords" value="<?php echo (isset($config['web_keywords']) && ($config['web_keywords'] !== '')?$config['web_keywords']:''); ?>" class="input-txt ui-input" type="text" data-num="100" />
                    <p class="notic">???????????????100?????????</p>
                    <p class="ui-big-text none">???????????????100????????????<span class="ui-textTips">???????????????100?????????</span>???</p>

<!-- 
                    <input type="text" value="<?php echo (isset($config['web_keywords']) && ($config['web_keywords'] !== '')?$config['web_keywords']:''); ?>" name="web_keywords" id="web_keywords" class="input-txt ui-input" data-num="100">
                    <input type="hidden" id="web_keywords_1607062084" value="web_keywords">
                    <script type="text/javascript">
                        $(function() { $('#web_keywords').tagsInput({width: '450px', height: 'auto'}); });
                    </script>
                    <span class="err"></span>
                    <p class="notic">????????????????????????????????????????????????</p>
                     -->
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_keywords</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_keywords');" class="ui-btn3 blue web_keywords" data-clipboard-text="{eyou:global name='web_keywords' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_description">????????????</label>
                </dt>
                <dd class="opt ui-web_description ui-text">
                    <textarea rows="5" cols="60" id="web_description" name="web_description" style="height:60px;" class="ui-input" data-num="200"><?php echo (isset($config['web_description']) && ($config['web_description'] !== '')?$config['web_description']:''); ?></textarea>
                    <p class="notic">???????????????200?????????</p>
                    <p class="ui-big-text none">???????????????200????????????<span class="ui-textTips">???????????????200?????????</span>???</p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_description</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_description');" class="ui-btn3 blue web_description" data-clipboard-text="{eyou:global name='web_description' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_copyright">????????????</label>
                </dt>
                <dd class="opt">
                    <textarea cols="60" id="web_copyright" name="web_copyright" class="h20"><?php echo (isset($config['web_copyright']) && ($config['web_copyright'] !== '')?$config['web_copyright']:''); ?></textarea>
                    <p class="notic"></p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_copyright</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_copyright');" class="ui-btn3 blue web_copyright" data-clipboard-text="{eyou:global name='web_copyright' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_recordnum">?????????</label>
                </dt>
                <dd class="opt ui-keyword">
                    <?php if($config['web_recordnum_mode'] == '1'): ?>
                        <textarea rows="5" cols="60" id="web_recordnum" name="web_recordnum" class="h40"><?php echo (isset($config['web_recordnum']) && ($config['web_recordnum'] !== '')?$config['web_recordnum']:''); ?></textarea>
                    <?php else: ?>
                        <textarea rows="5" cols="60" id="web_recordnum" name="web_recordnum" class="h20"><?php echo strip_tags(htmlspecialchars_decode($config['web_recordnum'])); ?></textarea>
                    <?php endif; ?>
                    <input type="hidden" id="web_recordnum_mode" name="web_recordnum_mode" value="<?php echo (isset($config['web_recordnum_mode']) && ($config['web_recordnum_mode'] !== '')?$config['web_recordnum_mode']:'0'); ?>">
                    &nbsp;[<a href="javascript:void(0);" onclick="show_recordnum(this);"><?php if($config['web_recordnum_mode'] == '
                    1'): ?>????????????<?php else: ?>????????????<?php endif; ?></a>]
                    <p class="notic"></p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_recordnum</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_recordnum');" class="ui-btn3 blue web_recordnum" data-clipboard-text="{eyou:global name='web_recordnum' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit" style="width: auto">
                    <label><b>???????????????</b></label>
                    &nbsp;&nbsp;<a href="javascript:void(0);" onclick="customvar_index(this);">[??????]</a>
                </dt>
            </dl>
            <?php if(is_array($eyou_row) || $eyou_row instanceof \think\Collection || $eyou_row instanceof \think\Paginator): $i = 0; $__LIST__ = $eyou_row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <dl class="row" id="dl_<?php echo $vo['attr_var_name']; ?>">
                <dt class="tit">
                    <label for="<?php echo $vo['attr_var_name']; ?>"><?php echo $vo['attr_name']; ?></label>
                </dt>
                <dd class="opt">
                    <?php switch($vo['attr_input_type']): case "1": break; case "2": ?>
                        <textarea rows="5" cols="60" id="<?php echo $vo['attr_var_name']; ?>" name="<?php echo $vo['attr_var_name']; ?>" style="height:36px;"><?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:''); ?></textarea>
                        <?php break; case "3": ?>
                        <div class="input-file-show">
                            <span class="show">
                                <a id="img_a_<?php echo $vo['attr_var_name']; ?>" class="nyroModal" rel="gal" href="<?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:'javascript:void(0);'); ?>" target="_blank">
                                    <i id="img_i_<?php echo $vo['attr_var_name']; ?>" class="fa fa-picture-o" <?php if(!(empty($vo['value']) || (($vo['value'] instanceof \think\Collection || $vo['value'] instanceof \think\Paginator ) && $vo['value']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:''); ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                                </a>
                            </span>
                            <span class="type-file-box">
                                <input type="text" id="<?php echo $vo['attr_var_name']; ?>" name="<?php echo $vo['attr_var_name']; ?>" value="<?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:''); ?>" class="type-file-text" autocomplete="off">
                                <input type="button" name="button" id="button1" value="????????????..." class="type-file-button">
                                <input class="type-file-file" onClick="GetUploadify(1,'','allimg','<?php echo $vo['attr_var_name']; ?>_img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo" title="?????????????????????????????????????????????????????????????????????????????????????????????">
                            </span>
                        </div>
                        <script type="text/javascript">
                            function <?php echo $vo['attr_var_name']; ?>_img_call_back(fileurl_tmp)
                            {
                                $("#<?php echo $vo['attr_var_name']; ?>").val(fileurl_tmp);
                                $("#img_a_<?php echo $vo['attr_var_name']; ?>").attr('href', fileurl_tmp);
                                $("#img_i_<?php echo $vo['attr_var_name']; ?>").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
                            }
                        </script>
                        <?php break; default: ?>
                        <input id="<?php echo $vo['attr_var_name']; ?>" name="<?php echo $vo['attr_var_name']; ?>" value="<?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:''); ?>" class="input-txt" type="text" />
                    <?php endswitch; ?>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p><?php echo $vo['attr_var_name']; ?></p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('<?php echo $vo['attr_var_name']; ?>');" class="ui-btn3 blue <?php echo $vo['attr_var_name']; ?>" data-clipboard-text="{<?php  echo 'eyou:global name=\''; ?><?php echo $vo['attr_var_name'];  echo '\' /'; ?>}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <dl class="row"><dt class="tit"><label><b>?????????????????????</b></label></dt></dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_thirdcode_pc">??????PC???</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="60" id="web_thirdcode_pc" name="web_thirdcode_pc" style="height:80px;"><?php echo (isset($config['web_thirdcode_pc']) && ($config['web_thirdcode_pc'] !== '')?$config['web_thirdcode_pc']:''); ?></textarea>
                    <p class="notic">??????????????? &lt;/body&gt; ???????????????????????????????????????????????????????????????????????????????????????????????????</p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_thirdcode_pc</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_thirdcode_pc');" class="ui-btn3 blue web_thirdcode_pc" data-clipboard-text="{eyou:global name='web_thirdcode_pc' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_thirdcode_wap">???????????????</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="60" id="web_thirdcode_wap" name="web_thirdcode_wap" style="height:80px;"><?php echo (isset($config['web_thirdcode_wap']) && ($config['web_thirdcode_wap'] !== '')?$config['web_thirdcode_wap']:''); ?></textarea>
                    <p class="notic">??????????????? &lt;/body&gt; ???????????????????????????????????????????????????????????????????????????????????????????????????</p>
                </dd>
                <?php if($web_cmsmode == '2'): ?>
                <dd class="variable">
                    <div><p>web_thirdcode_wap</p></div>
                    <div class="r"><a href="javascript:void(0);" onclick="showtext('web_thirdcode_wap');" class="ui-btn3 blue web_thirdcode_wap" data-clipboard-text="{eyou:global name='web_thirdcode_wap' /}">????????????</a></div>
                </dd>
                <?php endif; ?>
            </dl>
            <div class="bot">
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="adsubmit();">????????????</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">

    $(function(){
        tipsText();

        // ????????????
        $('input[name=web_status]').click(function(){
            $('#div_web_status_close').hide();
            // $('#web_status_tips').hide();
            // var seo_pseudo = <?php echo (isset($seo_pseudo) && ($seo_pseudo !== '')?$seo_pseudo:0); ?>;
            // var old_web_status = $('#old_web_status').val();
            // if(2 == seo_pseudo && old_web_status == 0 && $(this).val() == 1){
            //     $('#web_status_tips').show();
            // }
            if ($(this).val() == 1) {
                $('#div_web_status_close').show();
            }
        });
    });

    function adsubmit(){
        if($('input[name=web_status]:checked').val() == 1){
            if($('input[name=web_status_url]').val() != '' && !checkURL($('input[name=web_status_url]').val())){
                showErrorMsg('?????????URL??????????????????');
                $('input[name=web_status_url]').focus();
                return false;
            }
        }
        layer_loading("????????????");
        $('#handlepost').submit();
    }
    
    function web_logo_img_call_back(fileurl_tmp)
    {
        $("#web_logo_local").val(fileurl_tmp);
        $("#img_a_web_logo").attr('href', fileurl_tmp);
        $("#img_i_web_logo").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
    }
    
    function web_ico_img_call_back(fileurl_tmp)
    {
        $("#web_ico").val(fileurl_tmp);
        $("#img_a_web_ico").attr('href', fileurl_tmp);
        $("#img_i_web_ico").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" width=32 height=32>',this,{tips: [1, '#fff']});");
    }

    function customvar_index(obj)
    {
        //iframe???
        var iframes = layer.open({
            type: 2,
            title: '?????????????????????',
            fixed: true, //?????????
            shadeClose: false,
            shade: 0.3,
            content: "<?php echo url('System/customvar_index'); ?>",
            /*end: function(){
                layer.load();
                window.location.reload();
            }*/
        });
        layer.full(iframes);
    }

    function showtext(classname){
        var clipboard1 = new Clipboard("."+classname);clipboard1.on("success", function(e) {layer.msg("????????????");});clipboard1.on("error", function(e) {layer.msg("??????????????????????????????", {icon:5});}); 
    }
    
    function show_recordnum(obj)
    {
        var recordnumObj = $('#web_recordnum');
        var value = recordnumObj.val();
        var valuehtml = "";

        if (value.indexOf('&lt;/a&gt;') == -1) {
            valuehtml = '<a href="https://beian.miit.gov.cn/" rel="nofollow" target="_blank">'+value+'</a>';
        }

        var web_recordnum_mode = $('#web_recordnum_mode').val();
        if (web_recordnum_mode == 0) { // ?????????????????????
            $('#web_recordnum_mode').val(1);
            $(obj).html('????????????');
            recordnumObj.css('height', '40px');
            recordnumObj.val(valuehtml);
        } else { // ?????????????????????
            $('#web_recordnum_mode').val(0);
            $(obj).html('????????????');
            recordnumObj.css('height', '20px');
            recordnumObj.val(removeHTMLTag(value));
        }
    }

    //??????HTML??????
    function removeHTMLTag(str) {
        str = str.replace(/<\/?[^>]*>/g, ''); //??????HTML tag
        str = str.replace(/[ | ]*\n/g, '\n'); //??????????????????
        str = str.replace(/ /ig, ''); //?????? 
        return str;
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
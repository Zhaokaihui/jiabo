<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:48:"./application/admin/template/system/api_conf.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:61:"/data/wwwroot/jiabo/application/admin/template/system/bar.htm";i:1638802540;s:70:"/data/wwwroot/jiabo/application/admin/template/system/pay_api_list.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/system/notify.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/system/microsite.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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
<body class="bodystyle" style=" overflow-y: scroll;min-width:auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto; ">
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
    <div class="flexigrid htitx">
        <?php if($pay_open == '1'): ?>
            <!-- ?????????????????????????????? -->
            <div class="hDiv" id="alipay_set">
    <div class="hDivBox">
        <table cellspacing="0" cellpadding="0" style="width: 100%">
            <thead>
            <tr>
                <th class="sign w10" axis="col0">
                    <div class="tc"></div>
                </th>
                <th abbr="article_title" axis="col3" class="w10">
                    <div id="anchor-sms" class="tc">????????????</div>
                </th>
                <th abbr="ac_id" axis="col4">
                    <div class=""></div>
                </th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<div class="plug-list">
    <?php if(empty($pay_api_list) || (($pay_api_list instanceof \think\Collection || $pay_api_list instanceof \think\Paginator ) && $pay_api_list->isEmpty())): ?>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>???????????????????????????
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
    <?php else: ?>
        <!-- ???????????????????????? - ????????? -->
        <div class="plug-item-content" style="display: none;">
            <div class="plug-item-top">
                <div class="plug-img">
                    <a href="JavaScript:void(0);"><img src="/public/static/admin/images/balance.png?v=<?php echo $version; ?>"></a>
                </div>
                <div class="plug-text">
                    <div class="plug-text-title"> <a href="JavaScript:void(0);">????????????</a> </div>
                    <div class="plug-text-versions"> <span>????????????</span> </div>
                </div>
            </div>
            <div class="plug-item-bottm">
                <a href="JavaScript:void(0);" id="pay_balance_open1" onclick="BalancePayOpen('0');" <?php if($pay_balance_open == '1'): ?> style="cursor: pointer;" <?php else: ?> style="cursor: pointer; display: none;" <?php endif; ?> title="????????????">????????? </a>
                <a href="JavaScript:void(0);" id="pay_balance_open0" onclick="BalancePayOpen('1');" <?php if($pay_balance_open == '1'): ?> style="cursor: pointer; color: #9ea3a7; display: none;" <?php else: ?> style="cursor: pointer; color: #9ea3a7;" <?php endif; ?> title="????????????">????????? </a>
            </div>
        </div>
        <script type="text/javascript">
            function BalancePayOpen(open_value) {
                $.ajax({
                    url: "<?php echo url('Ajax/BalancePayOpen', ['_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {open_value: open_value},
                    success: function(res) {
                        layer.closeAll();
                        if (1 == res.code) {
                            if (1 == open_value) {
                                $('#pay_balance_open1').show();
                                $('#pay_balance_open0').hide();
                            } else {
                                $('#pay_balance_open0').show();
                                $('#pay_balance_open1').hide();
                            }
                            layer.msg(res.msg, {icon: 1, time: 1000});
                            return false;
                        } else {
                            layer.alert(res.msg, {icon: 2, title:false});
                            return false;
                        }
                    },
                    error: function(e){
                        layer.closeAll();
                        showErrorMsg(ey_unknown_error);
                        return false;
                    }
                });
            }
        </script>
        <!-- ???????????????????????? - END -->

        <?php if(is_array($pay_api_list) || $pay_api_list instanceof \think\Collection || $pay_api_list instanceof \think\Paginator): if( count($pay_api_list)==0 ) : echo "" ;else: foreach($pay_api_list as $k=>$vo): ?>
        <div class="plug-item-content">
            <div class="plug-item-top">
                <div class="plug-img">
                    <a href="JavaScript:void(0);" onclick="PayApiConfig(<?php echo $vo['pay_id']; ?>, '<?php echo $vo['pay_name']; ?>');"><img src="<?php echo get_default_pic($vo['litpic']); ?>"></a>
                </div>
                <div class="plug-text">
                    <div class="plug-text-title">
                        <a href="JavaScript:void(0);" onclick="PayApiConfig(<?php echo $vo['pay_id']; ?>, '<?php echo $vo['pay_name']; ?>');"><?php echo $vo['pay_name']; ?></a>
                    </div>
                    <div class="plug-text-versions">
                        <span><?php if($vo['system_built'] == '1'): ?>????????????<?php else: ?>????????????<?php endif; ?></span>
                    </div>
                    <!-- <div class="plug-text-des">????????????</div> -->
                </div>
            </div>
            <div class="plug-item-bottm">
                <a href="JavaScript:void(0);" onclick="PayApiConfig(<?php echo $vo['pay_id']; ?>, '<?php echo $vo['pay_name']; ?>');">??????</a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
</div>

<script type="text/javascript">
    function PayApiConfig(pay_id, title) {
        if (!pay_id) return false;
        var url = "<?php echo url('PayApi/open_pay_api_config'); ?>";
        //iframe???
        var iframes = layer.open({
            type: 2,
            title: title,
            fixed: true,
            shadeClose: false,
            shade: 0.3,
            content: url + '&pay_id=' + pay_id
        });
        layer.full(iframes);
    }
</script>
            <!-- END -->
        <?php endif; ?>

        <!-- ???????????? -->
        <div class="hDiv" id="notify_list">
    <div class="hDivBox">
        <table cellspacing="0" cellpadding="0" style="width: 100%">
            <thead>
            <tr>
                <th class="sign w10" axis="col0">
                    <div class="tc"></div>
                </th>
                <th abbr="article_title" axis="col3" class="w10">
                    <div id="anchor-sms" class="tc">????????????</div>
                </th>
                <th abbr="ac_id" axis="col4">
                    <div class=""></div>
                </th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<div class="plug-list">
    <!-- ???????????? -->
    <div class="plug-item-content">
        <div class="plug-item-top">
            <div class="plug-img">
                <a href="<?php echo url('System/smtp'); ?>"><img src="/public/static/admin/images/email.png?v=<?php echo $version; ?>"></a>
            </div>
            <div class="plug-text">
                <div class="plug-text-title">
                    <a href="<?php echo url('System/smtp'); ?>">????????????</a>
                </div>
                <div class="plug-text-versions">
                    <span>????????????</span>
                </div>
                <!-- <div class="plug-text-des">????????????</div> -->
            </div>
        </div>
        <div class="plug-item-bottm">
            <a href="<?php echo url('System/smtp'); ?>">??????</a>
        </div>
    </div>
    <!-- ???????????? -->
    <div class="plug-item-content">
        <div class="plug-item-top">
            <div class="plug-img">
                <a <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>href="JavaScript:showErrorAlert('???????????????????????????????????????', 4);"<?php else: ?>href="<?php echo url('System/sms'); ?>"<?php endif; ?>><img src="/public/static/admin/images/sms.png?v=<?php echo $version; ?>"></a>
            </div>
            <div class="plug-text">
                <div class="plug-text-title">
                    <a <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>href="JavaScript:showErrorAlert('???????????????????????????????????????', 4);"<?php else: ?>href="<?php echo url('System/sms'); ?>"<?php endif; ?>>?????????
                        <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>
                            <i class="anchor-icon anchor-icon-biao" title="???????????????????????????"></i>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="plug-text-versions">
                    <span>????????????</span>
                </div>
                <!-- <div class="plug-text-des">????????????</div> -->
            </div>
        </div>
        <div class="plug-item-bottm">
            <a <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>href="JavaScript:showErrorAlert('???????????????????????????????????????', 4);"<?php else: ?>href="<?php echo url('System/sms'); ?>"<?php endif; ?>>??????</a>
        </div>
    </div>
    <!-- ??????????????? -->
    <?php if(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty())): if(is_check_access('Notify@notify_tpl') == '1'): ?>
        <div class="plug-item-content">
            <div class="plug-item-top">
                <div class="plug-img">
                    <a href="<?php echo url('Notify/notify_tpl'); ?>"><img src="/public/static/admin/images/notify.png?v=<?php echo $version; ?>"></a>
                </div>
                <div class="plug-text">
                    <div class="plug-text-title">
                        <a href="<?php echo url('Notify/notify_tpl'); ?>">?????????</a>
                    </div>
                    <div class="plug-text-versions">
                        <span>????????????</span>
                    </div>
                    <!-- <div class="plug-text-des">????????????</div> -->
                </div>
            </div>
            <div class="plug-item-bottm">
                <a href="<?php echo url('Notify/notify_tpl'); ?>">??????</a>
            </div>
        </div>
        <?php endif; endif; ?>
</div>
        <!-- END -->

        <!-- ??????????????? -->
        <form class="form-horizontal" id="postMicrosite" method="post">
    <div class="hDiv" id="microsite">
        <div class="hDivBox">
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <thead>
                <tr>
                    <th class="sign w10" axis="col0">
                        <div class="tc"></div>
                    </th>
                    <th abbr="article_title" axis="col3" class="w10">
                        <div class="tc">
                            <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>
                                <i class="anchor-icon anchor-icon-biao" title="???????????????????????????"></i>
                            <?php endif; ?>
                            ???????????????
                        </div>
                    </th>
                    <th abbr="ac_id" axis="col4">
                        <div class=""></div>
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="ncap-form-default">
        <dl class="row">
            <dt class="tit">
                <label>???????????????</label>
                <input type="hidden" id="shop_micro" value="<?php echo (isset($userConfig['shop_micro']) && ($userConfig['shop_micro'] !== '')?$userConfig['shop_micro']:0); ?>">
            </dt>
            <dd class="opt" style="line-height: 30px;">
                <label>
                    <input type="radio" name="shop[shop_micro]" id="shop_micro1" value="1" <?php if(isset($userConfig['shop_micro']) && $userConfig['shop_micro'] == 1): ?> checked="checked" <?php endif; ?> onclick="DetectConfig(1);"/>??????
                </label>
                &nbsp;&nbsp;&nbsp;
                <label>
                    <input type="radio" name="shop[shop_micro]" id="shop_micro0" value="0" <?php if(empty($userConfig['shop_micro'])): ?> checked="checked" <?php endif; ?>/>??????
                </label>
                &nbsp;&nbsp;&nbsp;
                <p class="notic">??????????????????????????????????????????????????????????????????????????????????????????</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label>??????????????????</label>
                <input type="hidden" id="shop_force_use_wechat" value="<?php echo (isset($userConfig['shop_force_use_wechat']) && ($userConfig['shop_force_use_wechat'] !== '')?$userConfig['shop_force_use_wechat']:0); ?>">
            </dt>
            <dd class="opt" style="line-height: 30px;">
                <label>
                    <input type="radio" name="shop[shop_force_use_wechat]" id="shop_force_use_wechat1" value="1" <?php if(isset($userConfig['shop_force_use_wechat']) && $userConfig['shop_force_use_wechat'] == 1): ?> checked="checked" <?php endif; ?> onclick="DetectConfig(2);"/>??????
                </label>
                &nbsp;&nbsp;&nbsp;
                <label>
                    <input type="radio" name="shop[shop_force_use_wechat]" id="shop_force_use_wechat0" value="0" <?php if(empty($userConfig['shop_force_use_wechat'])): ?> checked="checked" <?php endif; ?> onclick="DetectConfig(3);"/>??????
                </label>
                &nbsp;&nbsp;&nbsp;
                <p class="notic">?????????????????????????????????????????????????????????????????????</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="WX_appid"><em>*</em>??????AppId</label>
            </dt>
            <dd class="opt">
                <input type="text" name="login[appid]" id="WX_appid" value="<?php echo (isset($login['appid']) && ($login['appid'] !== '')?$login['appid']:''); ?>" class="input-txt">
                <p class="notic">????????????????????????AppId?????????????????????<span style="color: red;">(?????????????????????AppId)</span></p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="appsecret"><em>*</em>??????AppSecret</label>
            </dt>
            <dd class="opt">
                <input type="text" name="login[appsecret]" id="appsecret" value="<?php echo (isset($login['appsecret']) && ($login['appsecret'] !== '')?$login['appsecret']:''); ?>" class="input-txt">
                <p class="notic">????????????????????????AppSecret???????????????????????????</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="wechat_name">?????????????????????</label>
            </dt>
            <dd class="opt">
                <input type="text" name="login[wechat_name]" id="wechat_name" value="<?php echo (isset($login['wechat_name']) && ($login['wechat_name'] !== '')?$login['wechat_name']:''); ?>" class="input-txt">
                <p class="notic">??????????????????????????????????????????<span style="color: red;">??????????????????</span>??????PC??????????????????</p>
            </dd>
        </dl>

        <dl class="row">
            <dt class="tit">
                <label for="wechat_pic">??????????????????</label>
            </dt>
            <dd class="opt">
                <div class="input-file-show">
                    <span class="show">
                        <a id="img_a_wechat_pic" class="nyroModal" rel="gal" href="<?php echo (isset($login['wechat_pic']) && ($login['wechat_pic'] !== '')?$login['wechat_pic']:'javascript:void(0);'); ?>?t=<?php echo time(); ?>" target="_blank">
                            <i id="img_i_wechat_pic" class="fa fa-picture-o" <?php if(!(empty($login['wechat_pic']) || (($login['wechat_pic'] instanceof \think\Collection || $login['wechat_pic'] instanceof \think\Paginator ) && $login['wechat_pic']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo (isset($login['wechat_pic']) && ($login['wechat_pic'] !== '')?$login['wechat_pic']:''); ?>?t=<?php echo time(); ?> width=300 height=300>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                        </a>
                    </span>
                    <span class="type-file-box">
                        <input type="text" id="wechat_pic" name="login[wechat_pic]" value="<?php echo (isset($login['wechat_pic']) && ($login['wechat_pic'] !== '')?$login['wechat_pic']:''); ?>" class="type-file-text" autocomplete="off">
                        <input type="button" name="button" id="button1" value="????????????..." class="type-file-button">
                        <input class="type-file-file" onclick="GetUploadify(1, '', 'allimg', 'wechat_pic_call_back')" size="30" hidefocus="true" nc_type="change_site_logo" title="?????????????????????????????????????????????????????????????????????????????????????????????">
                    </span>
                </div>
                <span class="err"></span>
                <p class="notic">??????????????????????????????????????????<span style="color: red;">??????????????????</span>??????PC??????????????????</p>
            </dd>
        </dl>

        <dl class="row">
            <div class="bot" style="padding-bottom:0px;">
                <a href="JavaScript:void(0);" onclick="submit_microsite();" class="ncap-btn-big ncap-btn-green">????????????</a>
                &nbsp;<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=10166','???????????????')" style="font-size: 12px;padding-left: 10px;position:absolute;top: 30px">???????????????</a>
            </div>
        </dl>
    </div>
</form>
<script type="text/javascript">
    // ??????
    function submit_microsite(){
        layer_loading("????????????");
        $.ajax({
            url: "<?php echo url('System/microsite', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: $('#postMicrosite').serialize(),
            success: function(res){
                layer.closeAll();
                if (1 == res.code) {
                    layer.msg(res.msg, {icon: 1, time: 1000});
                    return false;
                } else {
                    var icon = 2;
                    try{
                        if (res.data.icon) {
                            icon = res.data.icon;
                        }
                    }catch(e){}
                    layer.alert(res.msg, {icon: icon, title:false});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorMsg(ey_unknown_error);
                return false;
            }
        });
    }

    // ??????????????????????????????
    function DetectConfig(type) {
        if (3 == type) {
            $('#shop_micro0').removeAttr("disabled");
            return false;
        }

        var WX_appid = $('#WX_appid');
        if (!WX_appid.val() || '' == WX_appid.val()) {
            WX_appid.focus();
            layer.msg('??????????????????AppId');
            if (1 == type) {
                $("#shop_micro0").click();
            } else if (2 == type) {
                $("#shop_force_use_wechat0").click();
            }
            return false;
        }

        var appsecret = $('#appsecret');
        if (!appsecret.val() || '' == appsecret.val()) {
            appsecret.focus();
            layer.msg('??????????????????AppSecret');
            if (1 == type) {
                $("#shop_micro0").click();
            } else if (2 == type) {
                $("#shop_force_use_wechat0").click();
            }
            return false;
        }

        if (2 == type) {
            // ?????????????????????
            $("#shop_force_use_wechat1, #shop_micro1").attr('checked', true);
            $('#shop_micro0').attr("disabled", "disabled");
        }
    }

    // ??????????????????
    function wechat_pic_call_back(fileurl_tmp) {
        $("#wechat_pic").val(fileurl_tmp);
        $("#img_a_wechat_pic").attr('href', fileurl_tmp);
        $("#img_i_wechat_pic").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" width=300 height=300>',this,{tips: [1, '#fff']});");
    }
</script>
        <!-- END -->
    </div>
</div>

<!--?????????????????????-->
<div class="floatNav">
    <div class="floatNav-tit">
        ????????????
    </div>
    <div class="floatNav-con">
        <ul>
            <li>
                <div class="dot"></div>
                <div class="event" data-to="alipay_set"><a href="javascript:void(0);">????????????</a></div>
            </li>
            <li>
                <div class="dot"></div>
                <div class="event" data-to="notify_list"><a href="javascript:void(0);">????????????</a></div>
            </li>
            <li>
                <div class="dot"></div>
                <div class="event" data-to="microsite"><a href="javascript:void(0);">???????????????</a></div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        var to = "<?php echo \think\Request::instance()->param('sys'); ?>";
        if (to) {
            var div_top = document.getElementById(to).offsetTop;
            window.scrollTo(0, div_top + 70);
        }
        //???????????????????????????????????????
        var lis = document.getElementsByClassName("event");
        for(var i = 0; i < lis.length; i++) {
            lis[i].onclick = function() {
                //????????????event???data-to??????????????????????????????div
                var attr = this.getAttribute("data-to");
                //???????????????event????????????div???????????????????????????
                var div_top = document.getElementById(attr).offsetTop;
                window.scrollTo(0, div_top + 70);
            }
        }
    })
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
<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:45:"./application/admin/template/article/edit.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:82:"/data/wwwroot/jiabo/application/admin/template/archives/get_field_addonextitem.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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

<?php if($editor['editor_select'] == '1'): ?>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?v=v1.5.5"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?v=v1.5.5"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?v=v1.5.5"></script>
<?php else: ?>
    <script type="text/javascript" src="/public/plugins/ckeditor/ckeditor.js?v=v1.5.5"></script>
<?php endif; ?>

<body style="background-color: #FFF; overflow: auto;min-width:auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="????????????"><i class="fa fa-angle-double-left"></i>??????</a>
            
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>????????????</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>SEO??????</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>????????????</span></a></li>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Article/edit'); ?>" method="post">
        <!-- ???????????? -->
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>??????</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" value="<?php echo $field['title']; ?>" id="title" class="input-txt" maxlength="100" <?php if($channelRow['is_repeat_title'] == '0'): ?> oninput="check_title_repeat(this,'<?php echo $field['aid']; ?>');" <?php endif; ?>>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>????????????</label>
                </dt>
                <dd class="opt">
                    <input type="hidden" name="attr[typeid]" id="attr_typeid" value="<?php echo $field['typeid']; ?>">
                    <select name="typeid" id="typeid">
                        <?php echo $arctype_html; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic">??????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>????????????</label>
                </dt>
                <dd class="opt">
                    <?php if(is_array($archives_flags) || $archives_flags instanceof \think\Collection || $archives_flags instanceof \think\Paginator): $i = 0; $__LIST__ = $archives_flags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input type="hidden" name="attr[<?php echo $vo['flag_fieldname']; ?>]" <?php if($field[$vo['flag_fieldname']] == 1): ?>value="1"<?php else: ?>value="0"<?php endif; ?>>
                        <label><input type="checkbox" name="<?php echo $vo['flag_fieldname']; ?>" value="1" <?php if($field[$vo['flag_fieldname']] == 1): ?>checked<?php endif; ?>><?php echo $vo['flag_name']; ?>[<?php echo $vo['flag_attr']; ?>]</label>&nbsp;
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row <?php if($field['is_jump'] != 1): ?>none<?php endif; ?> dl_jump">
                <dt class="tit">
                    <label>????????????</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['jumplinks']; ?>" name="jumplinks" id="jumplinks" class="input-txt" placeholder="http://">
                    <span class="err"></span>
                    <p class="notic">??????????????????URL???????????????http???https??????????????????????????????????????????????????????????????????</p>
                </dd>
            </dl>
            <dl class="row <?php if(empty($global['web_citysite_open']) || (($global['web_citysite_open'] instanceof \think\Collection || $global['web_citysite_open'] instanceof \think\Paginator ) && $global['web_citysite_open']->isEmpty())): ?> none <?php endif; ?> ">
                <dt class="tit">
                    <label for="title">????????????</label>
                </dt>
                <dd class="opt"> 
                    <select name="province_id" id="province_id" onchange="set_city_list(0);">
                        <option value="0">??????</option>
                        <?php $_result=get_site_province_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>" <?php if($field['province_id'] == $vo['id']): ?> selected <?php endif; ?> ><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <select name="city_id" id="city_id" class="none ml5" onchange="set_area_list(0);">
                        <option value="">--?????????--</option>
                    </select>
                    <select name="area_id" id="area_id" class="none ml5">
                        <option value="">--?????????--</option>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                  <label>?????????</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local" <?php if($field['is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:'javascript:void(0);'); ?>">
                                <i id="img_i" class="fa fa-picture-o" <?php if(!(empty($field['litpic_local']) || (($field['litpic_local'] instanceof \think\Collection || $field['litpic_local'] instanceof \think\Paginator ) && $field['litpic_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo $field['litpic_local']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="????????????..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                 title="?????????????????????????????????????????????????????????????????????????????????????????????">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>" placeholder="http://" class="input-txt" onKeyup="keyupRemote(this, 'litpic');" <?php if($field['is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if($field['is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'litpic');">????????????</label>
                    <span class="err"></span>
                    <p class="notic">??????????????????????????????????????????????????????????????????????????????????????????</p>
                </dd>
            </dl>
            <div class="<?php if(empty($channelRow['data']['is_article_pay'])): ?> none <?php endif; ?>">

                <dl class="row">
                    <dt class="tit">
                        <label>????????????</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input type="radio" name="restric_type" value="0" <?php if(empty($field['restric_type']) || (($field['restric_type'] instanceof \think\Collection || $field['restric_type'] instanceof \think\Paginator ) && $field['restric_type']->isEmpty())): ?> checked="checked" <?php endif; ?>>??????</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="1" <?php if($field['restric_type'] == '1'): ?> checked="checked" <?php endif; ?>>??????</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="2" <?php if($field['restric_type'] == '2'): ?> checked="checked" <?php endif; ?>>????????????</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="3" <?php if($field['restric_type'] == '3'): ?> checked="checked" <?php endif; ?>>????????????</label>&nbsp;&nbsp;
                    </dd>
                </dl>

                <dl class="row <?php if(!in_array($field['restric_type'], [2,3])): ?> none <?php endif; ?>" id="dl_arc_level_id">
                    <dt class="tit">
                        <label><em>*</em>????????????</label>
                    </dt>
                    <dd class="opt">
                        <select name="arc_level_id" id="arc_level_id">
                            <?php if(is_array($users_level) || $users_level instanceof \think\Collection || $users_level instanceof \think\Paginator): $i = 0; $__LIST__ = $users_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['level_id']; ?>" level_value="<?php echo $vo['level_value']; ?>" <?php if($vo['level_id'] == $field['arc_level_id']): ?> selected <?php endif; ?>><?php echo $vo['level_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <p class="notic">??????????????????????????????????????????</p>
                    </dd>
                </dl>

                <dl class="row <?php if(!in_array($field['restric_type'], [1,3])): ?> none <?php endif; ?>" id="dl_users_price">
                    <dt class="tit">
                        <label for="title"><em>*</em>????????????</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" name="users_price" id="users_price" value="<?php echo $field['users_price']; ?>" class="input-txt" autocomplete="off" onkeyup="this.value=this.value.replace(/[^\d\.]/g,'');" onpaste="this.value=this.value.replace(/[^\d\.]/g,'')" style="width: 100px !important;text-align: right;">&nbsp;???
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>

                <div class="<?php if(empty($field['restric_type'])): ?> none <?php endif; ?>" id="div_free_html">
                    <dl class="row" id="dl_part_free">
                        <dt class="tit">
                            <label for="title"><em>*</em>????????????</label>
                        </dt>
                        <dd class="opt">
                            <label class="curpoin"><input type="radio" name="part_free" value="0" <?php if(empty($field['part_free'])): ?> checked <?php endif; ?> onclick="change_part_free(this);">?????????</label>&nbsp;
                            <label class="curpoin"><input type="radio" name="part_free" value="2" <?php if($field['part_free'] == '2'): ?> checked <?php endif; ?> onclick="change_part_free(this);">????????????</label>&nbsp;
                            <label class="curpoin"><input type="radio" name="part_free" value="1" <?php if($field['part_free'] == '1'): ?> checked <?php endif; ?> onclick="change_part_free(this);">????????????<?php if($field['part_free'] == '1'): ?><span id="part_free_span" style="color: red;">[??????]</span><?php endif; ?></label>&nbsp;
                            <span class="err"></span>
                            <p class="notic"></p>
                        </dd>
                    </dl>
                    <dl class="row <?php if($field['part_free'] != '2'): ?> none <?php endif; ?>" id="dl_size">
                        <dt class="tit">
                            <label for="size">??????</label>
                        </dt>
                        <dd class="opt">
                            <input type="text" name="size" value="<?php echo (isset($field['size']) && ($field['size'] !== '')?$field['size']:1); ?>" id="size" class="input-txt" maxlength="100" autocomplete="off" style="width: 100px !important;text-align: right;">&nbsp;K
                            <span class="err"></span>
                            <p class="notic"></p>
                        </dd>
                    </dl>
                </div>

            </div>
            <span id="FieldAddonextitem"></span>
<script type="text/javascript">
    $(function() {
        var aidNew = <?php echo (isset($field['aid']) && ($field['aid'] !== '')?$field['aid']:'0'); ?>;
        var typeidNew = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        if (!typeidNew) typeidNew = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        var channeltypeNew = <?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>;
        var ControllerName = '<?php echo CONTROLLER_NAME; ?>';
        GetAddonextitem(0, typeidNew, channeltypeNew, aidNew, false, ControllerName);
    });
    
    function GetAddonextitem(init, typeidNew, channeltypeNew, aidNew, is_destroy, ControllerName) {
        var loadingTxt = 1 == init ? '????????????' : '????????????';
        layer_loading(loadingTxt);
        ControllerName = ControllerName ? ControllerName : '';
        
        $.ajax({
            url: "<?php echo url('Archives/ajax_get_addonextitem'); ?>",
            data: {typeid: typeidNew, channeltype: channeltypeNew, aid: aidNew, controller_name: ControllerName, _ajax:1},
            type:'get',
            success:function(res) {
                layer.closeAll();
                if (res.code == 0) {
                    layer.alert(res.msg, {icon: 2, title:false});
                } else {
                    var EditorSelect = <?php echo $editor['editor_select']; ?>;
                    if (2 == EditorSelect) {
                        // ???????????????????????????
                        var contentData = [];
                        $.each(res.data.htmltextField, function (index, value) {
                            var contentID = 'addonFieldExt_' + value;
                            var getContent = '';
                            for (instance in CKEDITOR.instances) {
                                CKEDITOR.instances[contentID].updateElement();
                                getContent = CKEDITOR.instances[contentID].getData();
                            }
                            contentData.push(getContent);
                        });
                        // ????????????????????????HTML
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        // ????????????????????????
                        $.each(res.data.htmltextField, function (index, value) {
                            if (contentData[index]) {
                                var contentID = 'addonFieldExt_' + value;
                                CKEDITOR.instances[contentID].setData(contentData[index]);
                            }
                        });
                    } else if (1 == EditorSelect) {
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        
                        if (1 == init) {
                            $.each(res.data.htmltextField, function (index, value) {
                                showEditor_1597892187('addonFieldExt_'+value);
                            });
                        }
                    }
                    // ??????????????????????????????????????????????????????
                    var editor_addonFieldExt = '';
                    $.each(res.data.htmltextField, function (index, value) {
                        if ($('#editor_addonFieldExt')) {
                            if (editor_addonFieldExt) {
                                editor_addonFieldExt += ','+value;
                            }else{
                                editor_addonFieldExt = value;
                            }
                        }
                    });
                    if (editor_addonFieldExt) {
                        $('#editor_addonFieldExt').val(editor_addonFieldExt);
                    }
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(e.responseText, {icon: 2, title:false});
            }
        });
    }

    // ???????????????
    function showEditor_1597892187(elemtid) {
        var content = '';
        try{
            content = UE.getEditor(elemtid).getContent();
            UE.getEditor(elemtid).destroy();
        }catch(e){}
        var serverUrl = eyou_basefile+'?m=admin&c=Ueditor&a=index&savepath=ueditor&lang='+__lang__;
        var options = {
            serverUrl : serverUrl,
            zIndex: 999,
            initialFrameWidth: "100%", //????????????
            initialFrameHeight: 450, //????????????            
            focus: false, //?????????????????????????????????????????????true???false
            maximumWords: 99999,
            removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//???????????????????????? 'fullscreen',
            pasteplain:false, //?????????????????????????????????false??????????????????????????????true????????????????????????
            autoHeightEnabled: false,
            toolbars: ueditor_toolbars
        };
        eval("ue_"+elemtid+" = UE.getEditor(elemtid, options);ue_"+elemtid+".ready(function() {ue_"+elemtid+".setContent(content);});");
    }
</script>
        </div>
        <!-- ???????????? -->
        <!-- SEO?????? -->
        <div class="ncap-form-default tab_div_2" style="display:none;">
            <dl class="row" style="z-index:2;">
                <dt class="tit">
                    <label>TAG??????</label>
                </dt>
                <dd class="opt">          
                    <input type="text" value="<?php echo $field['tags']; ?>" name="tags" id="tags" class="input-txt" placeholder="?????????????????????????????????" autocomplete="off" oninput="get_common_tagindex_input(this);" onfocus="$('#often_tags').hide();" onkeyup="this.value=this.value.replace(/[\???]/g,',');" onpaste="this.value=this.value.replace(/[\???]/g,',')">&nbsp;
                    <a href="javascript:void(0);" onclick="get_common_tagindex(this);">??????????????????</a>&nbsp;<img id="tag_loading" src="/public/static/common/images/loading.gif" style="display: none;" />
                    <div class="often_tags" id="often_tags" style="display: none;"></div>
                    <div class="often_tags" id="often_tags_input" style="display: none;"></div>
                    <input type="hidden" id="tags_click_count">
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="seo_title">SEO??????</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['seo_title']; ?>" name="seo_title" id="seo_title" class="input-txt">
                    <p class="notic">???????????????80??????????????????????????????????????????????????? <a href="<?php echo url('Seo/index', array('inc_type'=>'seo')); ?>">SEO?????? - SEO??????</a> ????????????????????????</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO?????????</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:40px;"><?php echo $field['seo_keywords']; ?></textarea>
                    <span class="err"></span>
                    <p class="notic">???????????????100????????????????????????????????????????????????,??????????????????3???5???????????????</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO??????</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:60px;"><?php echo $field['seo_description']; ?></textarea>
                    <span class="err"></span>
                    <p class="notic">???????????????200??????????????????????????????????????????????????????200?????????</p>
                </dd>
            </dl>
        </div>
        <!-- SEO?????? -->
        <!-- ???????????? -->
        <div class="ncap-form-default tab_div_3" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label for="author">??????</label>
                </dt>
                <dd class="opt">
                    <input type="hidden" value="<?php echo $field['users_id']; ?>" name="users_id" class="input-txt">
                    <input type="text" value="<?php echo $field['author']; ?>" name="author" id="author" class="input-txt">
                    &nbsp;<a href="javascript:void(0);" onclick="set_author();" class="ncap-btn ncap-btn-green">??????</a>
                    <p class="notic">?????????????????????????????????????????????????????????</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>?????????</label>
                </dt>
                <dd class="opt">    
                    <input type="text" value="<?php echo $field['click']; ?>" name="click" id="click" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>????????????</label>
                </dt>
                <dd class="opt">
                    <input type="hidden" value="<?php echo $field['arcrank']; ?>" name="old_arcrank" class="input-txt">
                    <select name="arcrank" id="arcrank" <?php if($field['arcrank'] < 0 && $admin_info['role_id'] > 0 && $auth_role_info['check_oneself'] < 1): ?> disabled="disabled" <?php endif; ?>>
                        <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['rank']; ?>" <?php if($vo['rank'] == $field['arcrank']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>    
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="articleForm">????????????</label>
                </dt>
                <dd class="opt">
                    <input type="text" class="input-txt" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s',$field['add_time']); ?>" autocomplete="off">        
                    <span class="add-on input-group-addon">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    </span> 
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="tempview">????????????</label>
                </dt>
                <dd class="opt">
                    <select name="tempview" id="tempview">
                        <?php if(is_array($templateList) || $templateList instanceof \think\Collection || $templateList instanceof \think\Paginator): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo; ?>" <?php if($vo == $tempview): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>" />
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row" <?php if(!in_array(($seo_pseudo), explode(',',"2"))): ?>style="display: none;"<?php endif; ?>>
                <dt class="tit">
                    <label>??????????????????</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $field['htmlfilename']; ?>" name="htmlfilename" id="htmlfilename" onkeyup="this.value=this.value.replace(/[^\w\-]/g,'-');" onpaste="this.value=this.value.replace(/[^\w\-]/g,'-');" class="input-txt">.html
                    <span class="err"></span>
                    <p class="notic">???????????????????????????????????????????????????(_)????????????(-)??????????????????????????????????????????????????????????????????(-)</p>
                </dd>
            </dl>
        </div>
        <!-- ???????????? -->
        <div class="ncap-form-default">
            <div class="bot">
                <textarea name="free_content" id="free_content" style="display: none;"><?php echo $field['free_content']; ?></textarea>
                <input type="hidden" name="gourl" value="<?php echo (isset($gourl) && ($gourl !== '')?$gourl:''); ?>">
                <input type="hidden" name="aid" value="<?php echo (isset($field['aid']) && ($field['aid'] !== '')?$field['aid']:'0'); ?>">
                <input type="hidden" id="editor_addonFieldExt" value="">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">????????????</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">
    layui.use('laydate', function() {
        var laydate = layui.laydate;

        laydate.render({
            elem: '#add_time'
            ,type: 'datetime'
        });
    })

    $(function () {
        try {
            set_city_list(<?php echo (isset($field['city_id']) && ($field['city_id'] !== '')?$field['city_id']:0); ?>);
            set_area_list(<?php echo (isset($field['area_id']) && ($field['area_id'] !== '')?$field['area_id']:0); ?>);
        }catch(e){}
     
        //?????????????????????
        $('.tab-base').find('.tab').click(function(){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');          
            $(".tab_div_1, .tab_div_2, .tab_div_3").hide();          
            $(".tab_div_"+tab_index).show();
        });

        $('input[name=is_jump]').click(function(){
            if ($(this).is(':checked')) {
                $('.dl_jump').show();
            } else {
                $('.dl_jump').hide();
            }
        });

        var dftypeid = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        $('#typeid').change(function(){
            var current_channel = $(this).find('option:selected').data('current_channel');
            if (0 < $(this).val() && <?php echo $channeltype; ?> != current_channel) {
                showErrorMsg('?????????????????????????????????');
                $(this).val(dftypeid);
            } else if (<?php echo $channeltype; ?> == current_channel) {
                layer.closeAll();
            }
            var aid = $("input[name=aid]").val();
            GetAddonextitem(1, $(this).val(), <?php echo $channeltype; ?>, aid, true);
        });

        $(document).click(function(){
            $('#often_tags').hide();
            $('#often_tags_input').hide();
            event.stopPropagation();
        });

        $('#often_tags').click(function(){
            $('#often_tags').show();
            event.stopPropagation();
        });

        $('input[name=restric_type]').click(function(){
            $('#dl_arc_level_id').hide();
            $('#dl_users_price').hide();
            $('#div_free_html').hide();
            var restric_type = $(this).val();
            if (0 < restric_type) {
                $('#div_free_html').show();
            }
            if (-1 < $.inArray(restric_type, ['1','3'])) {
                $('#dl_users_price').show();
            }
            if (-1 < $.inArray(restric_type, ['2','3'])) {
                $('#dl_arc_level_id').show();
            }
        });
    });

    // ???????????????????????????
    function check_submit(){
        if($.trim($('input[name=title]').val()) == ''){
            showErrorMsg('?????????????????????');
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            $('input[name=title]').focus();
            return false;
        }
        if ($('#typeid').val() == 0) {
            showErrorMsg('?????????????????????');
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            $('#typeid').focus();
            return false;
        }
        if (-1 < $.inArray($('input[name=restric_type]:checked').val(), ['1','3'])) {
            var users_price = $('#users_price').val();
            if (parseFloat(users_price).toString()  == "NaN") {
                users_price = 0;
            }
            if (0 == users_price || users_price == '') {
                showErrorMsg('???????????????????????????0');
                $('#users_price').focus();
                return false;
            } else {
                var exp = /^(([1-9]\d*)|\d)(\.\d{1,2})?$/;
                if (!exp.test(users_price)) {
                    showErrorMsg('??????????????????????????????');
                    $('#users_price').focus();
                    return false;
                }
            }
        }
        
        layer_loading('????????????');
        if(!ajax_check_htmlfilename())
        {
            layer.closeAll();
            showErrorMsg('??????????????????????????????');
            $('input[name=htmlfilename]').focus();
            return false;
        }
        setTimeout(function (){
            editor_auto_210607();
            $('#post_form').submit();
        }, 1);
    }

    function img_call_back(fileurl_tmp)
    {
        $("#litpic_local").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
        $("input[name=is_litpic]").attr('checked', true); // ??????????????????[??????]
    }
    function change_part_free(e) {
        if (1 == $(e).val()){
            $('#dl_size').hide();
            $('#part_free_span').show();
            open_free_content();
        }else if (2 == $(e).val()){
            $('#part_free_span').hide();
            $('#dl_size').show();
        } else{
            $('#part_free_span').hide();
            $('#dl_size').hide();
        }
    }
    function open_free_content() {
        var url = "<?php echo url('Article/free_content',['aid'=>$field['aid']]); ?>";
        layer.open({
            type: 2,
            title:'?????????????????????',
            area: ['90%', '90%'], //??????
            content: url
        });
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
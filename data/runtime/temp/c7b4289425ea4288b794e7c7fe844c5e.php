<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:49:"./application/admin/template/ad_position/edit.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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

<body class="ad_postion bodystyle" style="overflow-y: scroll;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <form class="form-horizontal" id="post_form" action="<?php echo url('AdPosition/edit'); ?>" method="post">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit"> <label for="title"><em>*</em>????????????</label> </dt>
                <dd class="opt">
                    <input type="text" name="title" value="<?php echo $field['title']; ?>" id="title" onkeyup="DetectionTitleRepeat(this);" class="input-txt" autocomplete="off">
                    <span class="err"></span>
                    <p class="notic2 red" id="title_tips"></p>
                </dd>
            </dl>

            <dl class="row">
                <dt class="tit"> <label for="type">????????????</label> </dt>
                <dd class="opt">
                    <input type="hidden" name="type" value="<?php echo $field['type']; ?>"> <?php echo $field['type_name']; ?> 
                </dd>
            </dl>

            <dl class="row 1615775137_dl" style="display: none;" id="1615775137_1" style="z-index: 2">
                <dt class="tit"> <label>????????????</label> </dt>
                <dd class="opt">
                    <div class="tab-pane" id="tab_imgupload">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="sort-list">
                                        <?php if(is_array($ad_data) || $ad_data instanceof \think\Collection || $ad_data instanceof \think\Paginator): $k = 0; $__LIST__ = $ad_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($vo['media_type'] == '1'): ?>
                                                <div class="images_upload">
                                                    <div class="ic">
                                                        <div class='upimg' title="??????????????????" >
                                                            <div class='icaction' style="display: none" >
                                                                <span class="load_images" onclick="Images('<?php echo $vo['litpic']; ?>', 900, 600);">
                                                                    <a href="javascript:void(0);" style="color:white">
                                                                        <i class='fa fa-search-plus'></i>??????
                                                                    </a>
                                                                </span>
                                                                <span class="load_images" onclick="LoadImagesId('<?php echo $vo['id']; ?>');">
                                                                    <i class='fa fa-photo'></i>??????
                                                                </span>
                                                                <span class="load_images" onclick="ShowInput('<?php echo $vo['id']; ?>');">
                                                                    <i class='fa fa-file-text-o'></i>??????
                                                                </span>
                                                            </div>
                                                            <div class='cover-bg' style="display: none" ></div>
                                                            <img id="<?php echo $vo['id']; ?>_Id" src="<?php echo $vo['litpic']; ?>"/>
                                                            <?php if($main_lang == $admin_lang): ?>
                                                                <a class="delect" href="javascript:void(0);" onclick="ClearPicArr(this,'<?php echo $vo['litpic']; ?>','<?php echo $vo['id']; ?>');" title="??????">
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                        
                                                        <div class="load_input" id="<?php echo $vo['id']; ?>_ShowInput" >
                                                            <input type="hidden" name="img_id[]" value="<?php echo $vo['id']; ?>"/>
                                                            <span class="span_input">
                                                                <input type="hidden" id="<?php echo $vo['id']; ?>_Litpic" name="img_litpic[]" value="<?php echo $vo['litpic']; ?>"/>
                                                            </span>
                                                            <textarea name="img_title[]" placeholder="???????????????..." style="height: 28px;"><?php echo $vo['title']; ?></textarea>
                                                            <textarea name="img_links[]" placeholder="?????????????????????..." style="height: 28px;"><?php echo $vo['links']; ?></textarea>
                                                            <textarea name="img_intro[]" placeholder="?????????????????????HTML??????" style="height: 64px;"><?php echo $vo['intro']; ?></textarea>
                                                            <div class="operation">
                                                                <a href="javascript:void(0);">
                                                                    <label>
                                                                        <input type="checkbox" <?php if($vo['target'] == '1'): ?> checked="checked" <?php endif; ?> title="??????????????????" onclick="CheckedTarget(this)"/>?????????
                                                                        <input type="hidden" name="img_target[]" value="<?php echo $vo['target']; ?>">
                                                                    </label>
                                                                </a>
                                                                <a href="javascript:void(0);" onclick="copyToClipBoard(<?php echo $vo['id']; ?>);">
                                                                    <i class="fa fa-file-code-o"></i>????????????
                                                                </a>
                                                                <a onclick="HideInput('<?php echo $vo['id']; ?>');" style="width: 32%;" href="javascript:void(0);" title="??????"><i style="font-size:16px;" class="fa fa-angle-double-up"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        <div class="images_upload"></div>
                                    </div> 
                                    <?php if($main_lang == $admin_lang): ?>
                                        <a href="javascript:void(0);" onClick="GetUploadify(30,'','allimg','imgupload_call_back');" class="img-upload b-img-upload mb15" title="????????????">
                                            <div class="y-line"></div>
                                            <div class="x-line"></div>
                                        </a>
                                    <?php endif; ?>
                                    <input type="hidden" id="ImagesId">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ??????????????????????????? start -->
                    <div class="images_upload_tpl none">
                        <div class="images_upload ic">
                            <div class="ic">
                                <div class='upimg' title="??????????????????" >
                                    <div class='icaction' style="display: none">
                                        <span class="load_images" onclick="">
                                            <a href="javascript:void(0);" style="color: white">
                                                <i class='fa fa-search-plus'></i>??????
                                            </a>
                                        </span>
                                        <span class="load_images" onclick="">
                                            <i class='fa fa-file-text-o'></i>??????
                                        </span>
                                    </div>
                                    <div class='cover-bg' style="display: none"></div>
                                    <img src="/public/static/admin/images/add-button.jpg"/>
                                    <a class="delect" href="javascript:void(0);" title="??????"></a>
                                </div>

                                <div class="load_input" >
                                    <input type="hidden"/>
                                    <span class="span_input"> <input type="hidden"/> </span>
                                    <textarea placeholder="???????????????..." style="height: 28px;"></textarea>
                                    <textarea placeholder="?????????????????????..." style="height: 28px;"></textarea>
                                    <textarea placeholder="?????????????????????HTML??????" style="height: 64px;"></textarea>
                                    <div class="operation">
                                        <a href="javascript:void(0);">&nbsp;&nbsp;</a>
                                        <a href="javascript:void(0);">&nbsp;&nbsp;</a>
                                        <a style="width: 32%;" href="javascript:void(0);">&nbsp;&nbsp;</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ??????????????????????????? end -->
                </dd>
            </dl>

            <dl class="row 1615775137_dl" style="display: none;" id="1615775137_2" style="z-index: 2">
                <dt class="tit"> <label for="type">????????????</label> </dt>
                <dd class="opt">
                    <input type="hidden" name="video_id" <?php if($ad_data['0']['media_type'] == '2'): ?> value="<?php echo $ad_data['0']['id']; ?>" <?php endif; ?> class="input-txt">
                    <input type="text" name="video_litpic" id="video_litpic" <?php if($ad_data['0']['media_type'] == '2'): ?> value="<?php echo $ad_data['0']['litpic']; ?>" <?php endif; ?> class="input-txt">
                    <input type="file" id="courseware_file" data-type='local' onchange="upload_video_litpic_1615775137(this)" style="display: none;">
                    <?php if($WeappOpen['qny_open'] == '1'): ?>
                    &nbsp;<a href="javascript:void(0);" class="ncap-btn ncap-btn-green" id="upload_video_litpic_qiniu" onclick="$('#courseware_file').attr('data-type', 'qiniu').trigger('click');">???????????????</a>
                    <?php endif; if($WeappOpen['oss_open'] == '1'): ?>
                    &nbsp;<a href="javascript:void(0);" class="ncap-btn ncap-btn-green" id="upload_video_litpic_oss" onclick="$('#courseware_file').attr('data-type', 'oss').trigger('click');">oss??????</a>
                    <?php endif; if($WeappOpen['cos_open'] == '1'): ?>
                    &nbsp;<a href="javascript:void(0);" class="ncap-btn ncap-btn-green" id="upload_video_litpic_cos" onclick="$('#courseware_file').attr('data-type', 'cos').trigger('click');">cos??????</a>
                    <?php endif; ?>
                    &nbsp;<a href="javascript:void(0);" class="ncap-btn ncap-btn-green " id="upload_video_litpic_local" onclick="$('#courseware_file').attr('data-type', 'local').trigger('click');">????????????</a>
                    <input type="hidden" id="OpenPreviewVideoUrl" value="<?php echo url('AdPosition/open_preview_video'); ?>">
                    &nbsp;<a href="javascript:void(0);" class="ncap-btn ncap-btn-green" id="PreviewVideo" onclick="OpenPreviewVideo();">??????</a>
                </dd>
            </dl>

            <dl class="row 1615775137_dl" style="display: none;" id="1615775137_3" style="z-index: 2">
                <dt class="tit"> <label for="type">????????????</label> </dt>
                <dd class="opt">
                    <input type="hidden" name="html_id" <?php if($ad_data['0']['media_type'] == '3'): ?> value="<?php echo $ad_data['0']['id']; ?>" <?php endif; ?> class="input-txt">
                    <textarea rows="5" cols="60" id="html_intro" name="html_intro" style="height: 200px;"><?php if($ad_data['0']['media_type'] == '3'): ?><?php echo $ad_data['0']['intro']; endif; ?></textarea>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>

            <dl class="row">
                <dt class="tit">
                    <label>????????????</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="intro" name="intro" style="height:60px;"><?php echo $field['intro']; ?></textarea>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>

            <div class="bot">
                <input type="hidden" name="id" id="1615775137_id" value="<?php echo $field['id']; ?>">
                <a href="JavaScript:void(0);" onclick="checkForm();" class="ncap-btn-big ncap-btn-green" id="submitBtn">????????????</a>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    var SelectedType = '<?php echo $field['type']; ?>';
    $(function() {
        // ????????????????????????????????????????????????
        // $('#type'+SelectedType).attr('checked', 'checked');
        // ????????????????????????????????????
        $('#1615775137_'+SelectedType).show();
        // ??????????????? && ????????????????????? ??????????????? ?????? ????????????
        VideoLitpicValue('#video_litpic');
    });

    // ??????????????????
    function TypeSwitch(typeValue) {
        // ????????????????????????
        $('.1615775137_dl').hide();
        // ????????????????????????
        $('#1615775137_'+typeValue).show();
        // ?????????????????????????????????????????????
        SelectedType = typeValue;
        
        // var ad_type = '<?php echo $field['type']; ?>';
        // if (typeValue != ad_type) {
        //     // ??????????????????????????????
        //     $('.notic2').show();
        // } else {
        //     // ??????????????????????????????
        //     $('.notic2').hide();
        // }
    }

    // ??????????????? && ????????????????????? ??????????????? ?????? ????????????
    function VideoLitpicValue(obj) {
        // ??????????????????(????????????????????????)
        // var video_litpic = $(obj).val();
        // ??????????????????????????????if (2 == SelectedType && video_litpic)
        if (2 == SelectedType) {
            $('#PreviewVideo').show();
        } else {
            $('#PreviewVideo').hide();
        }
    }

    // ??????????????????
    function OpenPreviewVideo() {
        // ??????????????????
        var video_litpic = $('#video_litpic').val();
        if (video_litpic == '') {
            $('#video_litpic').focus();
            showErrorMsg('??????????????????');
            return false;
        }

        /* ?????????????????????????????? */
        var fileExt = video_litpic.substr(video_litpic.lastIndexOf('.')).toLowerCase();
        var fileExt = judgeExt(fileExt);
        if (fileExt == -1) {
            $('#video_litpic').focus();
            showErrorMsg('??????????????????????????????????????????????????????');
            return false;
        }
        /* END */

        /* ???????????????????????????????????? */
        var fileInfo = video_litpic.lastIndexOf('/');
        if (fileInfo == -1) {
            $('#video_litpic').focus();
            showErrorMsg('??????????????????????????????????????????');
            return false;
        }
        /* END */

        // ??????????????????
        $.ajax({
            type : 'post',
            url  : $('#OpenPreviewVideoUrl').val(),
            data : {video_litpic: video_litpic},
            dataType : 'json',
            success : function(res) {
                if (1 == res.code) {
                    var PreviewVideo = "<video style='width:100%; height:100%;' src='"+res.url+"' controls preload='auto' oncontextmenu='return fase' autoplay></video>";
                    layer.open({
                        type: 1,
                        title: false,
                        fixed: true, //?????????
                        shadeClose: false,
                        shade: 0.3,
                        area: ['80%', '80%'],
                        content: PreviewVideo
                    });
                } else {
                    showErrorMsg(res.msg);
                }
            },
            error: function(e) {
                showErrorAlert(e.responseText);
            }
        });
    }

    // ??????????????????
    function upload_video_litpic_1615775137(e) {
        var data_type = $(e).attr('data-type');
        if ('qiniu' == data_type) {
            // ???????????????
            upload_video_litpic_qiniu(e);
        } else if ('oss' == data_type) {
             // OSS??????
            upload_video_litpic_oss(e);
        } else if ('cos' == data_type) {
             // COS??????
            upload_video_litpic_cos(e);
        } else {
            // ????????????
            upload_video_litpic_local(e);
        }
    }

    // ???????????????
    function upload_video_litpic_qiniu(e) {
        // ?????????????????????
        var file = $(e)[0].files[0];

        // ??????????????????
        var fileName = file.name;
        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
        var ext = judgeExt(fileExt);
        if (ext == -1) {
            showErrorMsg('??????????????????????????????,???????????????????????????');
            return false;
        }

        // ??????????????????
        var size = "<?php echo $upload_max_filesize; ?>";
        if (file.size > size) {
            showErrorMsg('????????????????????????,???????????????????????????');
            return false;
        }

        // ????????????
        layer_loading('???????????????');
        $.ajax({
            type: 'POST',
            url: '/index.php?m=plugins&c=Qiniuyun&a=qiniu_upload',
            data: {_ajax: 1},
            dataType: "JSON",
            success: function(res1) {
                if (1 == res1.code) {
                    var token  = res1.data.token;
                    var formData = new FormData();
                    formData.append('file', file);
                    formData.append('token', token);

                    fileName = res1.data.filePath + fileExt;
                    formData.append('key', fileName);
                    $.ajax({
                        url: res1.data.uphost,
                        type: 'POST',
                        dataType: 'JSON',
                        data: formData,
                        timeout: 1200000,
                        cache: false,
                        processData: false,
                        contentType: false,
                        xhr: function () {
                            myXhr = $.ajaxSettings.xhr();
                            if (myXhr.upload) {
                                myXhr.upload.addEventListener('progress', function(e){
                                    var curr = e.loaded;
                                    var total = e.total;
                                    process = parseInt(curr / total * 100);
                                    $("#upload_video_litpic_qiniu").text('?????????...'+process+"%");
                                });
                            }
                            return myXhr;
                        },
                        success: function(res2) {
                            layer.closeAll();
                            $("#upload_video_litpic_qiniu").text('????????????');
                            setTimeout(function() {
                                $('#upload_video_litpic_qiniu').text('???????????????');
                            }, 2000);
                            var video_url = res1.data.domain + "/" + res2.key;
                            $("#video_litpic").empty().val(video_url);
                        },
                        error: function(e) {
                            layer.closeAll();
                            showErrorMsg(e.responseText);
                            return false;
                        }
                    });
                } else {
                    layer.closeAll();
                    showErrorMsg(res1.msg);
                }
            },
            error: function(e) {
                layer.closeAll();
                showErrorMsg(e.responseText);
            }
        });
    }

    // ?????????OSS??????
    function upload_video_litpic_oss(e) {
        // ?????????????????????
        var file = $(e)[0].files[0];
        
        // ??????????????????
        var fileName = file.name;
        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
        var ext = judgeExt(fileExt);
        if (ext == -1) {
            showErrorMsg('??????????????????????????????,???????????????????????????');
            return false;
        }

        // ??????????????????
        var size = "<?php echo $upload_max_filesize; ?>";
        if (file.size > size) {
            showErrorMsg('????????????????????????,???????????????????????????');
            return false;
        }

        // ????????????
        layer_loading('???????????????OSS');
        $.ajax({
            type: 'POST',
            url: '/index.php?m=plugins&c=AliyunOss&a=oss_upload',
            data: {_ajax: 1},
            dataType: "JSON",
            success: function(res1){
                if (1 == res1.code){
                    fileName = res1.data.filePath + fileExt;
                    //??????????????????
                    var request = new FormData();
                    request.append("OSSAccessKeyId",res1.data.accessid);
                    request.append("policy",res1.data.policy);
                    request.append("Signature",res1.data.signature);
                    request.append("key",fileName);
                    request.append("success_action_status",201);
                    request.append('file', file);

                    $.ajax({
                        url : res1.data.host,
                        data : request,
                        processData: false,
                        cache: false,
                        contentType: false,
                        dataType: 'xml',
                        type : 'post',
                        xhr: function () {
                            myXhr = $.ajaxSettings.xhr();
                            if (myXhr.upload) {
                                myXhr.upload.addEventListener('progress', function(e){
                                    var curr = e.loaded;
                                    var total = e.total;
                                    var process = parseInt(curr / total * 100);
                                    $("#upload_video_litpic_oss").text('?????????...'+process+"%");
                                });
                            }
                            return myXhr;
                        },
                        success : function(data) {
                            layer.closeAll();
                            var res = $(data).find('PostResponse');
                            if (res) {
                                var key = res.find('Key').text();
                                $("#upload_video_litpic_oss").text('????????????');
                                setTimeout(function() {
                                    $('#upload_video_litpic_oss').text('oss??????');
                                }, 2000);
                                var video_url = res1.data.domain + "/" + key;
                                $("#video_litpic").val(video_url);
                            } else {
                                $("#upload_video_litpic_oss").text('????????????');
                                setTimeout(function() {
                                    $('#upload_video_litpic_oss').text('oss??????');
                                }, 2000);
                            }
                        },
                        error : function(e) {
                            layer.closeAll();
                            console.log(e.responseText);
                        }
                    });
                } else {
                    layer.closeAll();
                    showErrorMsg(res1.msg);
                }
            },
            error: function(e) {
                layer.closeAll();
                showErrorMsg(e.responseText);
            }
        });
    }

    // ?????????COS??????
    function upload_video_litpic_cos(e) {
        // ?????????????????????
        var file = $(e)[0].files[0];
        
        // ??????????????????
        var fileName = file.name;
        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
        var ext = judgeExt(fileExt);
        if (ext == -1) {
            showErrorMsg('????????????????????????????????????????????????????????????');
            return false;
        }

        // ??????????????????
        var size = "<?php echo $upload_max_filesize; ?>";
        if (file.size > size) {
            showErrorMsg('??????????????????????????????????????????????????????');
            return false;
        }

        // ????????????
        var formData = new FormData();
            formData.append('file', file);
            formData.append('file_ext', fileExt);

        // ????????????
        $.ajax({
            type: 'post',
            url: '/index.php?m=plugins&c=Cos&a=cos_upload&_ajax=1',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            xhr: function () {
                myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', function(e){
                        var curr = e.loaded;
                        var total = e.total;
                        process = parseInt(curr / total * 100);
                        if (100 == process) {
                            process = 99;
                            layer_loading('???????????????COS');
                        }
                        $("#upload_video_litpic_cos").text('?????????...'+process+"%");
                        
                    });
                }
                return myXhr;
            },
            success: function(res) {
                layer.closeAll();
                if (1 == res.code) {
                    $("#video_litpic").val(res.data.url);
                    $("#upload_video_litpic_cos").text('????????????');
                } else {
                    $("#upload_video_litpic_cos").text('????????????');
                }
                setTimeout(function() {
                    $('#upload_video_litpic_cos').text('cos??????');
                }, 2000);
            },
            error: function(e) {
                layer.closeAll();
                showErrorMsg(e.responseText);
            }
        });
    }

    // ????????????
    function upload_video_litpic_local(e) {
        // ?????????????????????
        var file = $(e)[0].files[0];

        // ??????????????????
        var fileName = file.name;
        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
        var ext = judgeExt(fileExt);
        if (ext == -1) {
            showErrorMsg('??????????????????????????????,???????????????????????????');
            return false;
        }

        // ??????????????????
        var size = "<?php echo $upload_max_filesize; ?>";
        if (file.size > size) {
            showErrorMsg('????????????????????????,???????????????????????????');
            return false;
        }

        // ??????????????????
        var formData = new FormData();
        formData.append('file', file);

        // ????????????
        layer_loading('????????????');
        $.ajax({
            type: 'post',
            url : "<?php echo url('Ueditor/upVideo', ['savepath'=>'media']); ?>",
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            xhr: function () {
                myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', function(e){
                        var curr = e.loaded;
                        var total = e.total;
                        process = parseInt(curr / total * 100);
                        $("#upload_video_litpic_local").html('?????????...'+process+"%");
                    });
                }
                return myXhr;
            },
            success: function (res) {
                layer.closeAll();
                $("#upload_video_litpic_local").html('????????????');
                setTimeout(function() {
                    $('#upload_video_litpic_local').html('????????????');
                }, 2000);
                if ("SUCCESS" == res.state) {
                    $("#video_litpic").val(res.url);
                } else {
                    showErrorMsg(res.msg);
                }
            }
        });
    }

    // ????????????
    function judgeExt(ext) {
        var type = "<?php echo $media_type; ?>";
        var extArr = [];
        extArr = type.split("|");
        var ext = ext.replace(".","");
        return extArr.indexOf(ext);
    }
</script>

<script type="text/javascript">
    var parentObj = parent.layer.getFrameIndex(window.name); //???????????????iframe????????????
    // ???????????????????????????
    function CheckedTarget(t){
        if ($(t).is(':checked')) {
            $(t).parent().find('input[name="img_target[]"]').val(1);
        }else{
            $(t).parent().find('input[name="img_target[]"]').val(0);
        }
    }

    // ????????????????????????????????????????????????
    $(document).ready(function(){
       $(".upimg").live('mouseover', function(){
            $(this).find('div.icaction').show();
            $(this).find('div.cover-bg').show();
       }).live('mouseout', function(){
            $(this).find('div.icaction').hide();
            $(this).find('div.cover-bg').hide();
       });
    });

    // ????????????????????????????????????
    function DetectionTitleRepeat(obj) {
        // ????????????ID
        var id = $('#1615775137_id').val();
        // ?????????????????????
        var title = $(obj).val();
        // ????????????
        $.ajax({
            type: 'post',
            url : "<?php echo url('AdPosition/detection_title_repeat', ['_ajax'=>1]); ?>",
            data: {id: id, title: title},
            dataType: 'json',
            success: function(res) {
                if (0 == res.code) {
                    $('#title_tips').show().html(res.msg);
                } else {
                    $('#title_tips').hide().html('');
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorAlert(e.responseText);
            }
        });
    }

    // ???????????????????????????
    function checkForm(){
        if($('input[name=title]').val() == ''){
            layer.msg('??????????????????????????????', {icon: 2,time: 1000});
            return false;
        }
        layer_loading('????????????');
        $.ajax({
            type : 'post',
            url : "<?php echo url('AdPosition/edit', ['_ajax'=>1]); ?>",
            data : $('#post_form').serialize(),
            dataType : 'json',
            success : function(res){
                layer.closeAll();
                if (res.code == 1) {
                    layer.msg(res.msg, {icon: 1, shade: 0.3, time: 1000}, function(){
                        window.location.reload();
                    });
                } else {
                    showErrorMsg(res.msg);
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorAlert(e.responseText);
            }
        });
    }

    // ???????????????????????????ID??????????????????
    function LoadImagesId(id){
        // ??????ID????????????
        $('#ImagesId').val(id);
        // ??????????????????JS
        GetUploadify(1,'','allimg','UpdataImages');
    }

    // ????????????
    function UpdataImages(path){
        // ???????????????ID
        var id = $('#ImagesId').val();
        // ????????????????????????
        $("#"+id+"_Id").attr('src', path);
        // ?????????????????????????????????
        $("#"+id+"_Litpic").val(path);
    }

    // ?????????????????????
    function ShowInput(id) {
       $("#"+id+"_ShowInput").toggle('show'); 
    }

    // ??????????????????
    function HideInput(id) {
        $("#"+id+"_ShowInput").toggle('show');
    }

    // ??????????????????????????????
    function imgupload_call_back(paths){
        var last_div = $(".images_upload_tpl").html();
        var inputs   = $('.span_input input');
        var timestamp = 0;

        // ??????????????????
        for (var i=0; i<paths.length; i++) {
            // ?????????????????????
            timestamp = (new Date()).getTime();
            // ???????????? ?????????
            $(".images_upload:eq(0)").before(last_div);
            // ????????????????????????
            $(".images_upload:eq(0)").find('span:eq(0)').attr('onclick', "Images('"+paths[i]+"', 900, 600);");
            // ??????????????????????????????
            $(".images_upload:eq(0)").find('span:eq(1)').attr('onclick', "ShowInput('"+timestamp+"');");
            // ????????????????????????
            $(".images_upload:eq(0)").find('img').attr('src', paths[i]);
            // ??????????????????
            $(".images_upload:eq(0)").find('a:eq(1)').attr('onclick', "ClearPicArr(this, '"+paths[i]+"', 0);");
            // ?????????????????????ID
            $(".images_upload:eq(0)").find('.load_input:eq(0)').attr('id', timestamp+'_ShowInput');
            
            // ??????????????????????????????
            if (inputs.length > 0) {
                // ???????????????
                $(".images_upload:eq(0)").find('input:eq(0)').attr('name', 'img_id[]').attr('value', '');
                $(".span_input:eq(0)").find('input:eq(0)').attr('name', 'img_litpic[]').attr('value', paths[i]);
                // ????????????
                $(".images_upload:eq(0)").find('textarea:eq(0)').attr('name', 'img_title[]');
                // ??????????????????
                $(".images_upload:eq(0)").find('textarea:eq(1)').attr('name', 'img_links[]');
                // ??????????????????
                $(".images_upload:eq(0)").find('textarea:eq(2)').attr('name', 'img_intro[]');
                // ?????????????????????
                $(".images_upload:eq(0)").find('div.operation a:eq(0)').html("<label><input type='checkbox' title='??????????????????' onclick='CheckedTarget(this);'/>?????????<input type='hidden' name='img_target[]' value='0'></label>");
                // ??????????????????
                $(".images_upload:eq(0)").find('div.operation a:eq(2)').attr('onclick', "HideInput('"+timestamp+"');").attr('title', "??????").html('<i style="font-size:16px;" class="fa fa-angle-double-up"></i>');
            }
        }
    }

    // ????????????????????????input
    function ClearPicArr(obj, path, id) {
        // ?????????????????????
        $.ajax({
            type:'POST',
            url:"<?php echo url('AdPosition/del_imgupload'); ?>",
            data:{del_id:id,_ajax:1},
            success:function(){
                $(obj).parent().parent().parent().remove(); // ?????????????????????, ????????? html????????????
                $.ajax({
                    type:'POST',
                    url:"<?php echo url('Uploadify/delupload'); ?>",
                    data:{action:"del", filename:path,_ajax:1},
                    success:function(){}
                }); 
            }
        });
    }

    // ????????????js
    function copyToClipBoard(id) {
        var adstr = "{eyou:ad aid='" + id + "'}\r\n   <a href='{$"+"field.links}' {$"+"field.target}><img src='{$"+"field.litpic}' alt='{$"+"field.title}' /></a>\r\n   ???????????????{$"+"field.intro}\r\n{/eyou:ad";
        var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px"><dd>?????? ad ??????:</dd>';
        contentdiv += '<textarea rows="4" cols="60" style="width:400px;height:100px;">' + adstr + '}</textarea>';
        contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color: #F60;">??????????????????????????????????????????????????????????????????</dd></dl></div>';
        layer.open({
            title: '????????????',
            type: 1,
            skin: 'layui-layer-demo',
            area: ['480px', '260px'], //??????
            content: contentdiv
        });
    }

    // ????????????????????????????????? js
    $( ".sort-list" ).sortable({
        start: function( event, ui) {
        
        }
        ,stop: function( event, ui ) {

        }
    });
    //????????????????????????????????????????????????????????????????????????  
    $( ".sort-list" ).disableSelection();
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
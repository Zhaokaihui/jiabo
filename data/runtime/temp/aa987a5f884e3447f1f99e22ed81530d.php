<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:44:"./application/admin/template/tools/index.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:60:"/data/wwwroot/jiabo/application/admin/template/tools/bar.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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
<body class="bodystyle" style="cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back" href="<?php echo url('Index/switch_map'); ?>" title="????????????"><i class="fa fa-angle-double-left"></i>??????</a>
            <ul class="tab-base nc-row">
                <li><a href="<?php echo url("Tools/index"); ?>" class="tab <?php if(\think\Request::instance()->action() == 'index'): ?>current<?php endif; ?>"><span>????????????</span></a></li>
                <li><a href="<?php echo url("Tools/restore"); ?>" class="tab <?php if(in_array(\think\Request::instance()->action(), array('restore'))): ?>current<?php endif; ?>"><span>????????????</span></a></li>
            </ul>
        </div>
    </div>
    <!-- ???????????? -->
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="?????????????????????????????????????????????">??????</h4>
            <span title="????????????" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
            <li>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? phpMyAdmin ??????</li>
            <li>???????????????????????????</li>
        </ul>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <?php if(is_check_access(CONTROLLER_NAME.'@export') == '1'): ?>
                <div class="fbutton">
                    <a id="ing_btn">
                        <div class="add" title="????????????" onclick="$('.export_btn').trigger('click');">
                            <span><i class="fa fa-book"></i><span>????????????</span></span>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc"><input type="checkbox" autocomplete="off" onclick="javascript:$('input[name*=tables]').prop('checked',this.checked);" checked="checked"></div>
                        </th>
                        <th abbr="article_title" axis="col3">
                            <div style="padding-left: 10px;" class="">????????????</div>
                        </th>
                        <th abbr="ac_id" axis="col4" class="w80">
                            <div class="tc">????????????</div>
                        </th>
                        <th abbr="article_show" axis="col5" class="w80">
                            <div class="tc">????????????</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w120">
                            <div class="tc">??????</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">????????????</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w80">
                            <div class="tc">????????????</div>
                        </th>
                        <th axis="col1" class="w80">
                            <div class="tc">??????</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <form  method="post" id="export-form" action="<?php echo url('Tools/export'); ?>">
                    <table id="tb_flexigrid" style="width: 100%">
                        <tbody>
                        <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                            <tr>
                                <td class="no-data" align="center" axis="col0" colspan="50">
                                    <i class="fa fa-exclamation-circle"></i>???????????????????????????
                                </td>
                            </tr>
                        <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                            <tr data-id="<?php echo $vo['Name']; ?>">
                                <td class="sign">
                                    <div class="w40 tc"><input type="checkbox" autocomplete="off" name="tables[]" value="<?php echo $vo['Name']; ?>" checked="checked"></div>
                                </td>
                                <td style="width: 100%">
                                    <div style="padding-left: 10px;"><?php echo $vo['Name']; ?></div>
                                </td>
                                <td>
                                    <div class="w80 tc"><?php echo $vo['Rows']; ?></div>
                                </td>
                                <td>
                                    <div class="w80 tc"><?php echo format_bytes($vo['Data_length']); ?></div>
                                </td>
                                <td>
                                    <div class="w120 tc"><?php echo $vo['Collation']; ?></div>
                                </td>
                                <td>
                                    <div class="w160 tc"><?php echo $vo['Create_time']; ?></div>
                                </td>
                                <td>
                                    <div class="info w80 tc">?????????</div>
                                </td>
                                <td>
                                    <div class="w80 tc">
                                        <?php if(is_check_access(CONTROLLER_NAME.'@optimize') == '1'): ?>
                                        <!-- <a href="<?php echo url('Tools/optimize',array('tablename'=>$vo['Name'])); ?>" class="btn blue"><i class="fa fa-magic"></i>??????</a> -->
                                        <?php endif; if(is_check_access(CONTROLLER_NAME.'@repair') == '1'): ?>
                                        <a class="btn green" href="<?php echo url('Tools/repair',array('tablename'=>$vo['Name'])); ?>"><i class="fa fa-wrench"></i>??????</a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                               
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall">
                    <input type="checkbox" autocomplete="off" onclick="javascript:$('input[name*=tables]').prop('checked',this.checked);" checked="checked">
                </div>
                <?php if(is_check_access(CONTROLLER_NAME.'@export') == '1'): ?>
                <div class="fbutton export_btn">
                    <a id="ing_btn" class="layui-btn layui-btn-primary">
                        <span>????????????</span>
                    </a>
                </div>
                <?php endif; ?>
				<div class="fbuttonr" style="margin-right: 15px;">
					<div class="total">
						 <h5>???<?php echo $tableNum; ?>??????????????????<?php echo $total; ?></h5>
					</div>
				</div>
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        // ???????????????????????????
        $('#tb_flexigrid >tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // ??????????????????
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

    });

    (function($){
        var $form = $("#export-form"), $export = $(".export_btn"), tables
        $export.click(function(){
            if($("input[name^='tables']:checked").length == 0){
                layer.alert('??????????????????????????????', {icon: 5, title:false, closeBtn:false});
                return false;
            }
            $export.addClass("disabled");
            $export.find('a').html("????????????????????????...");
            $.post(
                "<?php echo url('Tools/export', ['_ajax'=>1]); ?>",
                $form.serialize(),
                function(res){
                    if(res.code){
                        tables = res.tables;
                        var loading = layer.msg('???????????????(<font id="upgrade_backup_table">'+res.tab.table+'</font>)??????<font id="upgrade_backup_speed">0.01</font>%', 
                        {
                            icon: 1,
                            time: 3600000, //1????????????????????????
                            shade: [0.2] //0.1????????????????????????
                        });
                        $export.find('a').html(res.msg + "??????????????????????????????????????????");
                        backup(res.tab);
                        window.onbeforeunload = function(){ return "??????????????????????????????????????????" }
                    } else {
                        layer.alert(res.msg, {icon: 5, title:false, closeBtn:false});
                        $export.removeClass("disabled");
                        $export.find('a').html("????????????");
                    }
                },
                "json"
            );
            return false;
        });

        function backup(tab, status){
            status && showmsg(tab.id, "??????????????????(0%)");
            $.post("<?php echo url('Tools/export', ['_ajax'=>1]); ?>", tab, function(res){
                if(res.code){
                    if (tab.table) {
                        showmsg(tab.id, res.msg);
                        $('#upgrade_backup_table').html(tab.table);
                        $('#upgrade_backup_speed').html(tab.speed);
                        $export.find('a').html('?????????????????????????????????('+tab.table+')??????'+tab.speed+'%??????????????????????????????');
                    } else {
                        $export.find('a').html('??????????????????????????????????????????????????????????????????');
                    }
                    if(!$.isPlainObject(res.tab)){
                        var loading = layer.msg('??????????????????100%??????????????????????????????', 
                        {
                            icon: 1,
                            time: 2000, //1????????????????????????
                            shade: [0.2] //0.1????????????????????????
                        });
                        $export.removeClass("disabled");
                        $export.find('a').html("??????????????????100%?????????????????????");
                        setTimeout(function(){
                            layer.closeAll();
                            layer.alert('???????????????', {icon: 6, title:false, closeBtn:false});
                        }, 1000);
                        window.onbeforeunload = function(){ return null }
                        return;
                    }
                    backup(res.tab, tab.id != res.tab.id);
                } else {
                    layer.closeAll();
                    $export.removeClass("disabled");
                    $export.find('a').html("????????????");
                }
            }, "json");
        }

        function showmsg(id, msg){
            $form.find("input[value=" + tables[id] + "]").closest("tr").find(".info").html(msg);
        }
    })(jQuery);
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
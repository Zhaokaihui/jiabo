<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:58:"./application/admin/template/recycle_bin/arctype_index.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:66:"/data/wwwroot/jiabo/application/admin/template/recycle_bin/bar.htm";i:1638802540;s:66:"/data/wwwroot/jiabo/application/admin/template/recycle_bin/btn.htm";i:1638802540;s:62:"/data/wwwroot/jiabo/application/admin/template/public/page.htm";i:1638802540;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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

<body class="bodystyle" style="cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
        <div class="fixed-bar">
        <div class="item-title">
            <a class="back" href="<?php echo url('Index/switch_map'); ?>" title="返回列表"><i class="fa fa-angle-double-left"></i>返回</a>
            <ul class="tab-base nc-row">
                <?php if(is_check_access('RecycleBin@archives_index') == '1'): ?>
                    <li>
                        <a href="<?php echo url('RecycleBin/archives_index'); ?>" <?php if(in_array(CONTROLLER_NAME, ['RecycleBin'])): ?>class="current"<?php endif; ?>>
                            <span>回收站</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <form class="navbar-form form-inline" action="<?php echo url('RecycleBin/arctype_index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
					<div class="ftitle">
                    
<!-- <div class="addartbtn fl">
    <input type="button" class="btn <?php if(\think\Request::instance()->action() != 'archives_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="文档管理" onClick="window.location.href='<?php echo url('RecycleBin/archives_index'); ?>';">
</div>
<div class=" addartbtn fl"><span class="sprt col-padding-1">|</span></div>
<div class="addartbtn fl">
    <input type="button" class="btn <?php if(\think\Request::instance()->action() != 'arctype_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="栏目管理" onClick="window.location.href='<?php echo url('RecycleBin/arctype_index'); ?>';">
</div>
<div class=" addartbtn fl"><span class="sprt col-padding-1">|</span></div>
<div class="addartbtn fl" >
    <input type="button" class="btn <?php if(\think\Request::instance()->action() != 'customvar_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="自定义变量" onClick="window.location.href='<?php echo url('RecycleBin/customvar_index'); ?>';">
</div>
<div class=" addartbtn fl"><span class="sprt col-padding-1">|</span></div>
<div class="addartbtn fl" >
    <input type="button" class="btn <?php if(\think\Request::instance()->action() != 'proattr_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="产品参数" onClick="window.location.href='<?php echo url('RecycleBin/proattr_index'); ?>';">
</div>
<div class=" addartbtn fl"><span class="sprt col-padding-1">|</span></div>
<div class="addartbtn fl">
    <input type="button" class="btn <?php if(\think\Request::instance()->action() != 'gbookattr_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="留言属性" onClick="window.location.href='<?php echo url('RecycleBin/gbookattr_index'); ?>';">
</div>
 -->


<div class="member-nav-group">

	<label class="member-nav-item">
		<input type="button" class="btn <?php if(\think\Request::instance()->action() != 'archives_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="文档管理" onClick="window.location.href='<?php echo url('RecycleBin/archives_index'); ?>';">
	</label>
	<label class="member-nav-item">
		<input type="button" class="btn <?php if(\think\Request::instance()->action() != 'arctype_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="栏目管理" onClick="window.location.href='<?php echo url('RecycleBin/arctype_index'); ?>';">
	</label>
	<label class="member-nav-item">
		<input type="button" class="btn <?php if(\think\Request::instance()->action() != 'customvar_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="自定义变量" onClick="window.location.href='<?php echo url('RecycleBin/customvar_index'); ?>';">
	</label>
	<label class="member-nav-item">
		<input type="button" class="btn <?php if(\think\Request::instance()->action() != 'proattr_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="产品参数" onClick="window.location.href='<?php echo url('RecycleBin/proattr_index'); ?>';">
	</label>
	<label class="member-nav-item">
		<input type="button" class="btn <?php if(\think\Request::instance()->action() != 'gbookattr_index'): ?>current<?php else: ?>selected<?php endif; ?>" value="留言属性" onClick="window.location.href='<?php echo url('RecycleBin/gbookattr_index'); ?>';">
	</label>
</div>
					</div>
					<div class="sDiv">
						<div class="sDiv2">
							<input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="名称搜索...">
							<input type="submit" class="btn" value="搜索">
							<i class="fa fa-search"></i>
						</div>
					</div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc"><input type="checkbox" autocomplete="off" class="checkAll"></div>
                        </th>
                        <th abbr="article_show" axis="col5" class="w60">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div class="text-l10">栏目名称</div>
                        </th>
                        <th axis="col2" class="w150">
                            <div class="tc">所属模型</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">删除时间</div>
                        </th>
                        <th axis="col1" class="w150">
                            <div class="tc">操作</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div class="tc w40"><input type="checkbox" autocomplete="off" name="ids[]" value="<?php echo $vo['id']; ?>"></div>
                            </td>
                            <td class="sort">
                                <div class="w60 tc">
                                    <?php echo $vo['id']; ?>
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div class="text-l10">
                                    <?php echo $vo['typename']; ?>
                                </div>
                            </td>
                            <td class="sort">
                                <div class="w150 tc">
                                    <?php echo (isset($channeltype_list[$vo['current_channel']]['title']) && ($channeltype_list[$vo['current_channel']]['title'] !== '')?$channeltype_list[$vo['current_channel']]['title']:''); ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    <?php echo date('Y-m-d',$vo['update_time']); ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="w150 tc">
                                    <?php if(is_check_access('RecycleBin@arctype_recovery') == '1'): ?>
                                    <a class="btn blue" href="javascript:void(0);" data-url="<?php echo url('RecycleBin/arctype_recovery'); ?>" data-id="<?php echo $vo['id']; ?>" data-typename="<?php echo $vo['typename']; ?>" onClick="recovery(this);">还原</a>
                                    <?php endif; if(is_check_access('RecycleBin@arctype_del') == '1'): ?>
									<i></i>
                                    <a class="btn red" href="javascript:void(0);" data-url="<?php echo url('RecycleBin/arctype_del'); ?>" data-id="<?php echo $vo['id']; ?>" data-typename="<?php echo $vo['typename']; ?>" onClick="delfun(this);">彻底删除</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall">
                    <input type="checkbox" autocomplete="off" class="checkAll">
                </div>
                <?php if(is_check_access('RecycleBin@arctype_recovery') == '1'): ?>
                <div class="fbutton">
                    <a onclick="batch_recovery(this, 'ids');" data-url="<?php echo url('RecycleBin/batch_arctype_recovery'); ?>" class="layui-btn layui-btn-primary">
                        <span>批量还原</span>
                    </a>
                </div>
                <?php endif; if(is_check_access('RecycleBin@arctype_del') == '1'): ?>
                <div class="fbutton">
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('RecycleBin/batch_arctype_del'); ?>" class="layui-btn layui-btn-primary">
                        <span>批量彻底删除</span>
                    </a>
                </div>
                <?php endif; ?>
                <div class="fbuttonr">
    <div class="pages">
       <?php echo $page; ?>
    </div>
</div>
<div class="fbuttonr">
    <div class="total">
        <h5>共有<?php echo $pager->totalRows; ?>条,每页显示
            <select name="pagesize" style="width: 60px;" onchange="ey_selectPagesize(this);">
                <option <?php if($pager->listRows == 20): ?> selected <?php endif; ?> value="20">20</option>
                <option <?php if($pager->listRows == 50): ?> selected <?php endif; ?> value="50">50</option>
                <option <?php if($pager->listRows == 100): ?> selected <?php endif; ?> value="100">100</option>
                <option <?php if($pager->listRows == 200): ?> selected <?php endif; ?> value="200">200</option>
            </select>
        </h5>
    </div>
</div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('input[name*=ids]').click(function(){
            if ($('input[name*=ids]').length == $('input[name*=ids]:checked').length) {
                $('.checkAll').prop('checked','checked');
            } else {
                $('.checkAll').prop('checked', false);
            }
        });
        $('input[type=checkbox].checkAll').click(function(){
            $('input[type=checkbox]').prop('checked',this.checked);
        });
    });

    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });
    });

    // 还原
    function recovery(obj){
        layer.confirm('<font color="red">如有父级栏目及文档将一起还原</font>，确认还原？', {
            title: false,//$(obj).attr('data-typename'),
            btn: ['确定','取消'] //按钮
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:$(obj).attr('data-id'), _ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 6});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 5, title:false});
                    }
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    /**
     * 批量还原提交
     */
    function batch_recovery(obj, name) {
        var a = [];
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {icon: 5, title:false});
            return;
        }
        // 还原按钮
        layer.confirm('<font color="red">选定文档与关联栏目一起还原</font>，确认批量还原？', {
            title: false,
            btn: ['确定', '取消'] //按钮
        }, function () {
            layer_loading('正在处理');
            $.ajax({
                type: "POST",
                url: $(obj).attr('data-url'),
                data: {del_id:a, _ajax:1},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 6});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 5, title:false});
                    }
                },
                error:function(){
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 5, title:false});
                }
            });
        }, function (index) {
            layer.closeAll(index);
        });
    }

    // 删除
    function delfun(obj){
        layer.confirm('<font color="red">如有子栏目及文档将一起清空</font>，确认彻底删除？', {
            title: false,//$(obj).attr('data-typename'),
            btn: ['确定','取消'] //按钮
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:$(obj).attr('data-id'), _ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 6});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 5, title:false});
                    }
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    /**
     * 批量删除提交
     */
    function batch_del(obj, name) {
        var a = [];
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {icon: 5, title:false});
            return;
        }
        // 删除按钮
        layer.confirm('此操作不可恢复，确认批量彻底删除？', {
            title: false,
            btn: ['确定', '取消'] //按钮
        }, function () {
            layer_loading('正在处理');
            $.ajax({
                type: "POST",
                url: $(obj).attr('data-url'),
                data: {del_id:a, _ajax:1},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 6});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 5, title:false});
                    }
                },
                error:function(){
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 5, title:false});
                }
            });
        }, function (index) {
            layer.closeAll(index);
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
<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:44:"./application/admin/template/admin/index.htm";i:1638802558;s:64:"/data/wwwroot/jiabo/application/admin/template/public/layout.htm";i:1638802558;s:67:"/data/wwwroot/jiabo/application/admin/template/public/theme_css.htm";i:1638802558;s:66:"/data/wwwroot/jiabo/application/admin/template/admin/admin_bar.htm";i:1638802540;s:62:"/data/wwwroot/jiabo/application/admin/template/public/page.htm";i:1638802540;s:64:"/data/wwwroot/jiabo/application/admin/template/public/footer.htm";i:1558945818;}*/ ?>
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
                <?php if(is_check_access('Admin@index') == '1'): ?>
                <li><a href="<?php echo url("Admin/index"); ?>" class="tab <?php if(in_array(\think\Request::instance()->controller(), array('Admin'))): ?>current<?php endif; ?>"><span>???????????????</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access('AuthRole@index') == '1'): ?>
                <li><a href="<?php echo url("AuthRole/index"); ?>" class="tab <?php if(in_array(\think\Request::instance()->controller(), array('AuthRole'))): ?>current<?php endif; ?>"><span>????????????</span></a></li>
                <?php endif; endif; ?>
            </ul>
        </div>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
               <?php if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@admin_add') == '1'): ?>
                   <div class="fbutton">
                       <a href="javascript:void(0);" data-href="<?php echo url('Admin/admin_add'); ?>" onclick="openFullframe(this, '???????????????', '100%', '100%');">
                           <div class="add" title="???????????????">
                               <span><i class="layui-icon layui-icon-addition"></i>???????????????</span>
                           </div>
                       </a>
                   </div>
                   <?php endif; endif; ?>
            </div>
            <form class="navbar-form form-inline" action="<?php echo url('Admin/index'); ?>" method="get" onsubmit="layer_loading('????????????');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="??????????????????...">
                        <input type="submit" class="btn" value="??????">
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
                        <?php if($main_lang == $admin_lang): ?>
                        <th class="sign w40" axis="col0">
                            <div class="tc"><input type="checkbox" class="checkAll"></div>
                        </th>
                        <?php endif; ?>
                        <th abbr="article_title" axis="col3" class="w40">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="ac_id" axis="col4">
                            <div class="text-l10">?????????</div>
                        </th>
                        <th abbr="ac_id" axis="col4" class="w150">
                            <div class="tc">????????????</div>
                        </th>
                        <th abbr="article_show" axis="col5" class="w150">
                            <div class="tc">?????????</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w120">
                            <div class="tc">????????????</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">??????????????????</div>
                        </th>
                        <th axis="col1" class="w120">
                            <div class="tc">??????</div>
                        </th>
                        
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto; min-height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>???????????????????????????
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <?php if($main_lang == $admin_lang): ?>
                            <td class="sign">
                                <div class="w40 tc">
                                    <?php if(\think\Session::get('admin_id') != $vo['admin_id'] AND !empty($vo['parent_id'])): ?>
                                    <input type="checkbox" name="ids[]" value="<?php echo $vo['admin_id']; ?>">
									<?php else: ?>
									<input disabled type="checkbox" name="ids[]" value="<?php echo $vo['admin_id']; ?>">
                                    <?php endif; ?>
                                </div>
                            </td>
                            <?php endif; ?>
                            <td class="sort">
                                <div class="w40 tc"><?php echo $vo['admin_id']; ?></div>
                            </td>
                            <td style="width: 100%">
                                <div class="text-l10">
                                    <?php if(is_check_access('Admin@admin_edit') == '1'): ?>
                                    <a href="javascript:void(0);" data-href="<?php echo url('Admin/admin_edit',array('id'=>$vo['admin_id'])); ?>" onclick="openFullframe(this, '???????????????', '100%', '100%');"><?php echo $vo['user_name']; ?></a>
                                    <?php else: ?>
                                    <?php echo $vo['user_name']; endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="w150 tc">
                                    <?php echo $vo['true_name']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="w150 tc"><?php echo (isset($vo['role_name']) && ($vo['role_name'] !== '')?$vo['role_name']:'<em class="red">????????????</em>'); ?></div>
                            </td>
                            <td>
                                <div class="w120 tc">
                                    <?php echo (isset($vo['mobile']) && ($vo['mobile'] !== '')?$vo['mobile']:'???'); ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="tc w160">
                                <?php if(empty($vo['last_login']) || (($vo['last_login'] instanceof \think\Collection || $vo['last_login'] instanceof \think\Paginator ) && $vo['last_login']->isEmpty())): ?>
                                ?????????
                                <?php else: ?>
                                <?php echo date('Y-m-d H:i:s',$vo['last_login']); endif; ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="w120 tc">
                                    <?php if(is_check_access('Admin@admin_edit') == '1'): ?>
                                    <a href="javascript:void(0);" data-href="<?php echo url('Admin/admin_edit',array('id'=>$vo['admin_id'])); ?>" class="btn blue" onclick="openFullframe(this, '???????????????', '100%', '100%');">??????</a>
                                    <?php endif; if($main_lang == $admin_lang): if(is_check_access('Admin@admin_del') == '1'): if(\think\Session::get('admin_id') != $vo['admin_id'] AND !empty($vo['parent_id'])): ?>
										<i></i>
                                        <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Admin/admin_del'); ?>" data-id="<?php echo $vo['admin_id']; ?>" onClick="delfun(this);">??????</a>
										<?php else: ?>
										<i></i>
										<a class="btn grey"  href="javascript:void(0);" data-id="<?php echo $vo['admin_id']; ?>">??????</a>
                                        <?php endif; endif; endif; ?>
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
                <?php if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@admin_del') == '1'): ?>
                    <div class="fbutton checkboxall">
                        <input type="checkbox" class="checkAll">
                    </div>
                    <div class="fbutton">
                        <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('Admin/admin_del'); ?>" class="layui-btn layui-btn-primary">
                                <span>????????????</span>
                        </a>
                    </div>
                    <?php endif; endif; ?>
                <div class="fbuttonr">
    <div class="pages">
       <?php echo $page; ?>
    </div>
</div>
<div class="fbuttonr">
    <div class="total">
        <h5>??????<?php echo $pager->totalRows; ?>???,????????????
            <select name="pagesize" style="width: 60px;" onchange="ey_selectPagesize(this);">
                <option <?php if($pager->listRows == 20): ?> selected <?php endif; ?> value="20">20</option>
                <option <?php if($pager->listRows == 50): ?> selected <?php endif; ?> value="50">50</option>
                <option <?php if($pager->listRows == 100): ?> selected <?php endif; ?> value="100">100</option>
                <option <?php if($pager->listRows == 200): ?> selected <?php endif; ?> value="200">200</option>
            </select>
        </h5>
    </div>
</div>
            </div>
            <div style="clear:both"></div>
        </div>
       
       </div>
</div>
<input type="hidden" name="head_pic" id="head_pic" value="<?php echo get_head_pic(\think\Session::get('admin_info.head_pic')); ?>">
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
        // ???????????????????????????
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // ??????????????????
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        // ????????????????????????
        $('#admin_head_pic', window.parent.document).attr('src', $('#head_pic').val());
    });
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
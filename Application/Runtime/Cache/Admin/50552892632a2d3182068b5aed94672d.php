<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>直销360微信分销系统后台管理平台</title>
		<meta name="description" content=" 微商城 微信商城" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="__PUBLIC__/Plugin/style/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<!-- ace styles -->
		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace-skins.min.css" />
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace-ie.min.css" />
		<![endif]-->
		<!-- ace settings handler -->
		<script src="__PUBLIC__/Plugin/style/js/ace-extra.min.js"></script>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="__PUBLIC__/Plugin/style/js/html5shiv.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/respond.min.js"></script>
		<![endif]-->
		<!-- javascript footer -->
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='__PUBLIC__/Plugin/style/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		 	window.jQuery || document.write("<script src='__PUBLIC__/Plugin/style/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='__PUBLIC__/Plugin/style/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="__PUBLIC__/Plugin/style/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/typeahead-bs2.min.js"></script>
		<!-- page specific plugin scripts -->
		<!--[if lte IE 8]>
		  <script src="__PUBLIC__/Plugin/style/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="__PUBLIC__/Plugin/style/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.ui.touch-punch.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.slimscroll.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.easy-pie-chart.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.sparkline.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/flot/jquery.flot.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/flot/jquery.flot.pie.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/flot/jquery.flot.resize.min.js"></script>
		<!-- ace scripts -->
		<script src="__PUBLIC__/Plugin/style/js/ace-elements.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/ace.min.js"></script>
	</head>
	<body>
<div class="navbar navbar-default" id="navbar">
	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<a href="#" class="navbar-brand">
				<small>直销360微信分销系统</small>
			</a><!-- /.brand -->
		</div><!-- /.navbar-header -->
		<div class="navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="light-blue">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="icon-desktop  icon-desktop"></i>微信预览
					</a>
					<div class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>手机端预览</title>
<link rel="stylesheet" href="__PUBLIC__/Plugin/preview/app.css">
</head>
<body>
	<div class="phone-content">
		<div class="phone">
			<iframe src="<?php echo U('App/Index/listsp',array('id'=>1));?>" frameborder="0" scrolling="yes"></iframe>
		</div>
	</div>
</body>
</html>
					</div>
				</li>
				<li class="light-blue">
					<a href="<?php echo U('Admin/Login/logout');?>"><i class="icon-off"></i>注销</a>
				</li>
			</ul><!-- /.ace-nav -->
		</div><!-- /.navbar-header -->
	</div><!-- /.container -->
</div>
<div class="main-container" id="main-container">
	<div class="main-container-inner">
		<div class="sidebar" id="sidebar">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	<ul class="nav nav-list">
		<li <?php if(!in_array(1,$group_json)){echo "style='display:none;'";} ?>>
			<a href="">
				<i class="icon-home"></i>
				<span class="menu-text"> 系统设置 </span>
			</a>
		</li>
		<li  <?php if(!in_array(2,$group_json)){echo "style='display:none;'";} ?>>
			<a href="javascript:void(0)">
				<i class="icon-list"></i>
				<span class="menu-text"> 商品分类 </span>
			</a>
		</li>
		<li  <?php if(!in_array(3,$group_json)){echo "style='display:none;'";} ?>>
			<a href="javascript:void(0)">
				<i class="icon-gift"></i>
				<span class="menu-text"> 商品管理 </span>
			</a>
		</li>
		<li  <?php if(!in_array(4,$group_json)){echo "style='display:none;'";} ?>>
			<a href="javascript:void(0)">
				<i class="icon-calendar"></i>
				<span class="menu-text"> 订单管理 </span>
			</a>
		</li>
		<li  <?php if(!in_array(5,$group_json)){echo "style='display:none;'";} ?>>
			<a href="javascript:void(0)">
				<i class="icon-group"></i>
				<span class="menu-text"> 用户管理 </span>
			</a>
		</li>
		<li  <?php if(!in_array(6,$group_json)){echo "style='display:none;'";} ?>>
			<a href="javascript:void(0)">
				<i class="icon-edit"></i>
				<span class="menu-text"> 微信管理 </span>
			</a>
		</li>
		<li  <?php if(!in_array(7,$group_json)){echo "style='display:none;'";} ?>>
			<a href="javascript:void(0)">
				<i class="icon-calendar"></i>
				<span class="menu-text"> 提现管理 </span>
			</a>
		</li>
		<li>
			<a href="http://wpa.qq.com/msgrd?v=3&uin=852793799&site=qq&menu=yes" target="_blank">
				<i class="icon-cloud"></i>
				<span class="menu-text"> 技术支持版本号V.733 </span>
			</a>
		</li>
	</ul><!-- /.nav-list -->
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
        <script type="text/javascript" language="javascript"> 
   		function iframeResize(iframe) {
	        iframe.height = $(window).height()-90;
	    }
		</script>
		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<ul class="breadcrumb">
					<li><i class="icon-home home-icon"></i> <a href="javascript:void(0);">管理后台</a></li>
					<li class="active">商城设置</li>
				</ul>
			</div>
			<div id="content_main">
				<iframe src="<?php echo U('Admin/Index/set');?>" id="main_iframe" name="main_iframe" style="width: 100%;" frameborder="0" onload="iframeResize(this);"  scrolling="yes"></iframe>
			</div>
		</div>
	</div>
</div>
		<script type="text/javascript">
		/* 系统设置 */
		$('.nav.nav-list li').eq(0).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$('#breadcrumbs ul li').eq(0).html('系统设置');
			$('#main_iframe').attr("src","<?php echo U('Admin/Index/set');?>");
		});
		/* 商品分类 */
		$('.nav.nav-list li').eq(1).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$('#breadcrumbs ul li').eq(1).html('商品分类');
			$('#main_iframe').attr("src","<?php echo U('Admin/Menu/index');?>");
		});
		/* 商品管理 */
		$('.nav.nav-list li').eq(2).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$('#breadcrumbs ul li').eq(1).html('商品管理');
			$('#main_iframe').attr("src","<?php echo U('Admin/Good/index');?>");
		});
		/* 订单管理 */
		$('.nav.nav-list li').eq(3).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$('#breadcrumbs ul li').eq(1).html('订单管理');
			$('#main_iframe').attr("src","<?php echo U('Admin/Order/index');?>");
		});
		/* 用户管理 */
		$('.nav.nav-list li').eq(4).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$('#breadcrumbs ul li').eq(1).html('用户管理');
			$('#main_iframe').attr("src","<?php echo U('Admin/User/index');?>");
		});
		/* 微信管理 */
		$('.nav.nav-list li').eq(5).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$('#breadcrumbs ul li').eq(1).html('微信管理');
			$('#main_iframe').attr("src","<?php echo U('Admin/Weixin/index');?>");
		});
		/* 提现管理 */
		$('.nav.nav-list li').eq(6).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$('#breadcrumbs ul li').eq(1).html('提现管理');
			$('#main_iframe').attr("src","<?php echo U('Admin/Tx/index');?>");
		});
		</script>
		</body>
</html>
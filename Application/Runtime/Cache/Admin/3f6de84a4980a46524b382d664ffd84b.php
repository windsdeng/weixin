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
<div class="col-sm-12 widget-container-span">
	<div class="widget-box transparent">
		<div class="widget-header">
			<div class="widget-toolbar no-border">
				<ul class="nav nav-tabs" id="myTab2">
					<li class="active"><a data-toggle="tab" href="#home1">商城设置</a></li>
					<li><a data-toggle="tab" href="#home2">模板设置</a>
					<li><a data-toggle="tab" href="#home3">支付宝设置</a></li>					
					<li><a data-toggle="tab" href="#home4">分销设置</a></li>
					<li><a data-toggle="tab" href="#home5">修改密码</a></li>
					<li><a data-toggle="tab" href="#home6">添加管理员</a></li>
					<li><a data-toggle="tab" href="#home7">管理员列表</a></li>
				</ul>
			</div>
		</div>
		<div class="widget-body">
			<div class="widget-main padding-12 no-padding-left no-padding-right">
				<div class="tab-content padding-4">
					<div id="home1" class="tab-pane in active">
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<form class="form-horizontal" role="form" action="<?php echo U('Admin/Index/setting');?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 名称： </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?php echo ($info["name"]); ?>" name="name" class="col-xs-10 col-sm-6">
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-2"> 公告： </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-2" value="<?php echo ($info["notification"]); ?>" name="notification" class="col-xs-10 col-sm-6">
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit"><i class="icon-ok bigger-110"></i> 提交 </button>
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset"><i class="icon-undo bigger-110"></i> 取消 </button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div id="home2" class="tab-pane in">
						<div class="well well-sm"> 更多模板功能定制,请咨询QQ852793799</div>
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<div style="margin-left: 10px;">
									<div style="width: 260px; float: left;">
										<img src="__ROOT__/Application/Tpl/App/<?php echo ($settheme); ?>/thumb.png" style="width: 240px; height: 340px;" class="img-thumbnail">
										<button type="button" class="btn btn-info btn-lg btn-block" style="margin: -2px 10px 0px 0px; width: 240px;">已设置</button>
									</div>
								</div>
							</div>
							<div class="col-xs-12" style="margin-top:20px;">
								<?php if(is_array($theme)): $i = 0; $__LIST__ = $theme;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$themevo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3">
									<div style="width: 260px; float: left;">
										<img src="__ROOT__/Application/Tpl/App/<?php echo ($themevo->dir); ?>/thumb.png" style="width: 240px; height: 340px;"
											class="img-thumbnail">
										<a type="button" href="<?php echo U('Admin/Index/settheme',array('name'=>$themevo->dir));?>" class="btn btn-default btn-lg btn-block"
											style="margin: -2px 10px 0px 0px; width: 240px;">设置</a>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
					</div>
					<div id="home3" class="tab-pane in">
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<form class="form-horizontal" role="form" action="<?php echo U('Admin/Index/setalipay');?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 支付宝账号： </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?php echo ($alipay["alipayname"]); ?>" name="alipayname" class="col-xs-10 col-sm-6">
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-2"> 合作身份者ID： </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-2"
												value="<?php echo ($alipay["partner"]); ?>" name="partner" class="col-xs-10 col-sm-6">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-2"> 安全检验码KEY： </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-2"
												value="<?php echo ($alipay["key"]); ?>" name="key" class="col-xs-10 col-sm-6">
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i> 提交
											</button>
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i> 取消
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div id="home4" class="tab-pane in">						<div class="row">							<div class="col-xs-12 no-padding-right">								<form class="form-horizontal" role="form" action="<?php echo U('Admin/Index/setfenxiao');?>" method="post">									<div class="form-group">										<label class="col-sm-3 control-label no-padding-right"											for="form-field-1"> 购买后保持分销商资格： </label>										<div class="col-sm-9">											<input type="text" id="form-field-1"												value="<?php echo ($buyday); ?>" name="buyday" class="col-xs-10 col-sm-6">（天,0为不限制）										</div>									</div>									<div class="space-4"></div>									<div class="clearfix form-actions">										<div class="col-md-offset-3 col-md-9">											<button class="btn btn-info" type="submit">												<i class="icon-ok bigger-110"></i> 提交											</button>											&nbsp; &nbsp; &nbsp;											<button class="btn" type="reset">												<i class="icon-undo bigger-110"></i> 取消											</button>										</div>									</div>								</form>							</div>						</div>					</div>
				
				
					<div id="home5" class="tab-pane in">
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<form class="form-horizontal" role="form" action="<?php echo U('Admin/Index/changepass');?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-1"> 原密码： </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-1"
												value="" name="oldpass" class="col-xs-10 col-sm-6">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-2"> 新密码： </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2"
												value="" name="newpass" class="col-xs-10 col-sm-6">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-2"> 确认新密码： </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2"
												value="" name="newpass2" class="col-xs-10 col-sm-6">
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i> 提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i> 取消
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				
					<div id="home6" class="tab-pane in">
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<form class="form-horizontal" role="form" action="<?php echo U('Admin/Index/addadmin');?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-1"> 用户名： </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1"
												value="" name="name" class="col-xs-10 col-sm-6">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-2"> 密码： </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2"
												value="" name="pass" class="col-xs-10 col-sm-6">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"
											for="form-field-2"> 权限组： </label>

										<div class="col-sm-9">
											商城设置：<input name="group[]" type="checkbox" value="1" />
											菜单管理：<input name="group[]" type="checkbox" value="2" />
											商品管理：<input name="group[]" type="checkbox" value="3" />
											订单管理：<input name="group[]" type="checkbox" value="4" />
											用户管理：<input name="group[]" type="checkbox" value="5" />
											微信管理：<input name="group[]" type="checkbox" value="6" />
											提现管理：<input name="group[]" type="checkbox" value="7" />
												
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i> 提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i> 取消
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					
					<div id="home7" class="tab-pane in">
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<div class="table-responsive">
									<table id="sample-table-1"
										class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center"><label> <input
														type="checkbox" class="ace"> <span class="lbl"></span>
												</label></th>
												<th>ID</th>
												<th>用户名</th>
												<th>权限</th>
												<th>操作</th>
											</tr>
										</thead>

										<tbody>
										<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><tr>
												<td class="center"><label> <input
														type="checkbox" class="ace"> <span class="lbl"></span>
												</label></td>

												<td><?php echo ($result["id"]); ?></td>
												<td><?php echo ($result["username"]); ?></td>
												<td><?php echo ($result["group"]); ?></td>
												<td><a class="J_ajax_del btn btn-white btn-sm" href="<?php echo U('Admin/Index/deladmin',array('id'=>$result['id']));?>">删除</a></td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
										</tbody>
									</table>
									<div class="pagination" style="margin:0px;">
									    <?php echo ($page); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
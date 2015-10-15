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
		<div class="widget-body">
			<div class="widget-main padding-12 no-padding-left no-padding-right">
				<div class="tab-content padding-4">
					<div id="home1" class="tab-pane in active">
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
												<th>提现编号</th>
												<th>用户id</th>
												<th>状态</th>
												<th>金额</th>
												<th>开户行</th>
												<th>开户账号</th>
												<th>开户人姓名</th>
												<th>创建时间</th>
												<th>操作</th>
											</tr>
										</thead>

										<tbody>
										<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><tr>
												<td class="center"><label> <input
														type="checkbox" class="ace"> <span class="lbl"></span>
												</label></td>
												
												<td><?php echo ($result["id"]); ?></td>
												<td><?php echo ($result["uid"]); ?></td>
												<td><?php if($result['status'] == 1): ?>已完成<?php else: ?>待审核<?php endif; ?></td>
												
												<td><?php echo ($result["price"]); ?></td>
												<td><?php echo ($result["bank_name"]); ?></td>
												<td><?php echo ($result["bank_num"]); ?></td>
												<td><?php echo ($result["name"]); ?></td>
												<td><?php echo ($result["time"]); ?></td>

												<td><?php if($result['status'] == 1): else: ?><a href="<?php echo U('Admin/Tx/payComplete',array('id'=>$result['id']));?>" class="btn btn-white btn-sm">支付</a><?php endif; ?><a class="btn btn-white btn-sm" href="<?php echo U('Admin/Tx/del',array('id'=>$result['id']));?>">删除</a></td>
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
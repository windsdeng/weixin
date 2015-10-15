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
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a data-toggle="tab" href="#home1">粉丝信息</a></li>
				</ul>
			</div>
		</div>
		<div class="widget-body">
			<div class="widget-main padding-12 no-padding-left no-padding-right">
				<div class="tab-content padding-4">
					<div id="home1" class="tab-pane in active">
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<div class="table-responsive">
									<table id="sample-table-1" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center"><label> <input type="checkbox" class="ace"> <span class="lbl"></span></label></th>
												<th>ID</th>
												<th>微信昵称</th>
												<th>微信头像</th>
												<th>联系人</th>
												<th>邮箱</th>
												<th>联系方式</th>
												<th>送货地址</th>
												<th>加入时间</th>
											</tr>
										</thead>
										<tbody>
										<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><tr>
												<td class="center"><label> <input type="checkbox" class="ace"> <span class="lbl"></span></label></td>
												<td><?php echo ($result["id"]); ?></td>
												<?php $wx_info = json_decode($result['wx_info'],true); echo "<td>$wx_info[nickname]</td>"; $img = !empty($wx_info['headimgurl'])?$wx_info['headimgurl']:'./Application/Tpl/App/default/Public/Static/images/defult.jpg'; echo "<td><img src='".$img."' width='40px;' height='40px;'></td>"; ?>
												<td><?php echo ($result["username"]); ?></td>
												<td><?php echo ($result["email"]); ?></td>
												<td><?php echo ($result["phone"]); ?></td>
												<td><?php echo ($result["address"]); ?></td>
												<td><?php echo ($result["time"]); ?></td>
											</tr>
											<tr>
											<td colspan="2">上线ID：<?php echo ($result["l_id"]); ?></td>
											<td>他/她的推荐详细</td>
											<td>一级:<?php echo ($result["a_cnt"]); ?>人</td>
											<td>二级:<?php echo ($result["b_cnt"]); ?>人</td>
											<td>三级:<?php echo ($result["c_cnt"]); ?>人</td>
											<td colspan="2">上二级ID:<?php echo ($result["l_b"]); ?>  上三级ID:<?php echo ($result["l_c"]); ?></td>
											<td>可提现佣金:<?php echo ($result["price"]); ?>元</td>
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
		
		<script type="text/javascript">
			function addSubmenu(o) {
				var subid = $(o).parent().prev().prev().html();
				$('select[name="parent"]').val(subid);
				$('input[name="addmenu"]').val('0');
				$('input[name="name"]').val('');
				$('#myTab li').eq(1).find('a').click();
			}
			function reSubmenu(o){
				var name = $(o).parent().prev().html().replace(/&nbsp;/g,'').replace('├─','');
				var pid = $(o).parent().prev().prev().attr('parent');
				var subid = $(o).parent().prev().prev().html();
				$('select[name="parent"]').val(pid);
				$('input[name="name"]').val(name);
				$('input[name="addmenu"]').val(subid);
				$('#myTab li').eq(1).find('a').click();
			}
		</script>
	</div>
</div>
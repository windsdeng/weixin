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
<div>筛选:
<select onchange=mbar(this) name="select">
	<option >全部</option>
	<option value="<?php echo U('Admin/Order/index',array('type'=>0));?>">未发货</option>
	<option value="<?php echo U('Admin/Order/index',array('type'=>1));?>">已发货</option>
	<option value="<?php echo U('Admin/Order/index',array('type'=>2));?>">已收货</option>
	<option value="<?php echo U('Admin/Order/index',array('type'=>3));?>">已完成</option>
	<option value="<?php echo U('Admin/Order/index',array('type'=>4));?>">已退货</option>
	<option value="<?php echo U('Admin/Order/index',array('type'=>5));?>">已支付</option>
	<option value="<?php echo U('Admin/Order/index',array('type'=>6));?>">已支付未发货</option>
</select>
<span><input type='text' id='order'><input type='button' value='订单编号搜索' onclick='s_order();'></span>
<span><input type='button' value='导出未发货订单' onclick='import_order();'></span>
<div>
<form method="post" action="<?php echo U('Admin/Order/upexcel');?>" enctype="multipart/form-data">
<span style="float:left">导入发货订单</span><span style="float:left"><input  type="file" name="file_stu" /></span><span  style="float:left"><input type="submit"  value="发货" /></span>
</form>
</div>
</div>
<script>
function mbar(sobj) {
	var docurl =sobj.options[sobj.selectedIndex].value;
	if (docurl != "") {
	   open(docurl,'_self');
	   sobj.selectedIndex=0;
	   sobj.blur();
	}
}

function s_order()
{
	var docurl = "<?php echo U('Admin/Order/index');?>"+'&order='+$('#order').val();
	open(docurl,'_self');
}

function import_order()
{
	var docurl = "<?php echo U('Admin/Order/import');?>";
	open(docurl,'_self');
}
</script>
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
												<th class="center"><label> <input type="checkbox" class="ace"> <span class="lbl"></span>
												</label></th>
												<th>订单编号</th>
												<th>联系人|联系方式|地址</th>
												<th>总金额</th>
												<th>支付</th>
												<th>发货</th>
												<th>创建时间</th>
												<th>备注</th>
												<th>详情</th>
												<th>快递信息</th>
												<th>订单操作</th>
												<th>特殊操作</th>
											</tr>
										</thead>

										<tbody>
										<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><tr>
												<td class="center"><label> <input type="checkbox" class="ace"> <span class="lbl"></span>
												</label></td>
												<td><?php echo ($result["orderid"]); ?></td>
												<td><?php echo ($result["shouhuoname"]); ?>|<?php echo ($result["phone"]); ?><br/><?php echo ($result["address"]); ?></td>
												<td><?php echo ($result["totalprice"]); ?></td>
												<td><?php if($result['pay_status'] == 1): ?>已付<?php else: ?>未付<?php endif; ?></td>
												<td>
													<?php if($result['order_status'] == 0): ?>未发<?php endif; ?>
													<?php if($result['order_status'] == 1): ?>已发<?php endif; ?>
													<?php if($result['order_status'] == 2): ?>已收<?php endif; ?>
													<?php if($result['order_status'] == 3): ?>完成<?php endif; ?>
													<?php if($result['order_status'] == 4): ?>已退<?php endif; ?>
												</td>
												<td><?php echo ($result["time"]); ?></td>
												<td><?php echo ($result["note"]); ?></td>
												<td style="width:65px;">
													<div class="btn-group" style="position: absolute;">
														<a class="btn btn-white btn-sm" data-toggle="dropdown">详情 <i class="fa fa-angle-down"></i></a>
														<ul class="dropdown-menu" role="menu">
															<li><a>
																	<table style="text-align: center;">
																		<tr>订单商品详情：</tr>
																		<tr>
																			<td>商品名称|</td>
																			<td>商品价格|</td>
																			<td>商品数量</td>
																		</tr>
																		<?php $json = $result[cartdata]; $data = json_decode($json,true); for($i=0;$i < count($data);$i++){ echo '<tr><td>'.$data[$i][name].'</td><td>'.$data[$i][price].'</td><td>'.$data[$i][num].'</td></tr>'; } ?>
																	</table>
															</a></li>
														</ul>
													</div>
												</td>
												<td>
													快递单号：<input type='text' name='num' id='num_<?php echo ($result["id"]); ?>' value='<?php $json = $result[order_info];$data = json_decode($json,true);echo $data[num] ?>'><br/>
													快递公司：<input type='text' name='name' id='name_<?php echo ($result["id"]); ?>' value='<?php $json = $result[order_info];$data = json_decode($json,true);echo $data[name] ?>'><input type='button' value='修改' onclick="submit_order_info(<?php echo ($result["id"]); ?>)">
												</td>
												<td>
													<?php if($result['order_status'] == 0): ?><a href="<?php echo U('Admin/Order/publish',array('id'=>$result['id']));?>" class="btn btn-white btn-sm">现在发货</a><?php endif; ?>
													<?php if($result['order_status'] != 4): ?><a href="<?php echo U('Admin/Order/txpublish',array('id'=>$result['id']));?>" class="btn btn-white btn-sm">退货</a><?php endif; ?>
													<a class="btn btn-white btn-sm" href="<?php echo U('Admin/Order/del',array('id'=>$result['id']));?>">删除</a>
												</td>
												<td>
													<a href="<?php echo U('Admin/Order/payComplete',array('id'=>$result['id']));?>" class="btn btn-white btn-sm">标记支付</a>
												</td>
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
					<script>
					function submit_order_info(id)
					{
						var num = $('#num_'+id).val();
						var name = $('#name_'+id).val();
						$.ajax({
							type : 'POST',
							url : '<?php echo U("Admin/Order/set_order_info");?>',
							data : {
								num : num,
								id : id,
								name : name
							},
							success : function (response , status , xhr) {
								alert('信息已录入');
							},
							beforeSend : function(){
							},
							complete : function(){
							}
						});
					}
					</script>
					<div id="home2" class="tab-pane in">
						<form class="form-horizontal J_ajaxForm" id="myform" action="<?php echo U('Admin/Menu/addmenu');?>" method="post">
							<div class="tabbable">
								<div class="tab-content">
									<div class="tab-pane active">
										<table cellpadding="2" cellspacing="2" width="100%">
											<tbody>
												<tr>
													<td width="140">上级:</td>
													<td>
														<select name="parent" class="normal_select">
															<option value="0">作为一级分类</option>
															<?php if(is_array($menulist)): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menulist): $mod = ($i % 2 );++$i;?><option value="<?php echo ($menulist["id"]); ?>"><?php echo ($menulist["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
														</select>
													</td>
												</tr>
												<tr>
													<td>名称:</td>
													<td><input type="text" class="input" name="name"
														value=""><input type="hidden" name="addmenu" value="0"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="form-actions">
								<button class="btn btn-primary btn_submit J_ajax_submit_btn"
									type="submit">提交</button>
								<a class="btn" href="">返回</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
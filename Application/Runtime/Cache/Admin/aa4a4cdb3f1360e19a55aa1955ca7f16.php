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
<div class="col-sm-10 widget-container-span" style="width: 100%">
	<div class="widget-box transparent">
		<div class="widget-header">
			<div class="widget-toolbar no-border">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a data-toggle="tab" href="#home1">基本信息</a></li>
					<li><a data-toggle="tab" href="#home2">菜单管理</a></li>
					<li><!--a data-toggle="tab" href="#home3">添加/修改菜单</a!--></li>
					<li><a data-toggle="tab" href="#home4">自定义回复</a></li>
					<li><a data-toggle="tab" href="#home5">添加/修改自定义回复</a></li>
				</ul>
			</div>
		</div>

		<div class="widget-body">
			<div class="widget-main padding-12 no-padding-left no-padding-right">
				<div class="tab-content padding-4">
					<div id="home1" class="tab-pane in active">
						<form class="form-horizontal J_ajaxForm" id="myform" action="<?php echo U('Admin/Weixin/setconfig');?>" method="post">
							<div class="tabbable">
								<div class="tab-content">
									<div class="tab-pane active">
										<table cellpadding="2" cellspacing="2" width="100%">
											<tbody>
												<tr>
													<td width="20%">公众号名称:</td>
													<td><input type="text" class="input" name="num" value="<?php echo ($config["num"]); ?>" id="name"></td>
												</tr>
												<tr>
													<td>微信原始账号:</td>
													<td><input type="text" class="input" name="ini_num" value="<?php echo ($config["ini_num"]); ?>" id="name"></td>
												</tr>
												<tr>
													<td>URL(服务器地址):</td>
													<td style="padding:2px 0px;"><?php echo ($url); ?></td>
												</tr>
												<tr>
													<td>Token(令牌):</td>
													<td><input type="text" class="input" name="token" id="url_input" value="<?php echo ($config["token"]); ?>" autocomplete="off">
													</td>
												</tr>
												<tr>
													<td>AppID(应用ID):</td>
													<td><input type="text" class="input" name="appid" id="url_input" value="<?php echo ($config["appid"]); ?>" autocomplete="off"></td>
												</tr>
												<tr>
													<td>AppSecret(应用密钥):</td>
													<td><input type="text" class="input" name="appsecret" id="url_input" value="<?php echo ($config["appsecret"]); ?>" autocomplete="off"></td>
												</tr>
												<tr>
													<td>EncodingAESKey(消息加解密密钥):</td>
													<td><input type="text" class="input" name="encodingaeskey" id="url_input" value="<?php echo ($config["encodingaeskey"]); ?>" autocomplete="off"> 建议选择明文模式</td>
												</tr>
												<tr>
													<td><b>微信支付配置</b></td>
												</tr>
												<tr>
													<td>Partnerid(微信商户号):</td>
													<td><input  type="text" class="input" name="partnerid" id="url_input" value="<?php echo ($config["partnerid"]); ?>" autocomplete="off"></td>
												</tr>
												<tr>
													<td>Partnerkey（密码32位）:</td>
													<td><input  type="text" class="input" name="partnerkey" id="url_input" value="<?php echo ($config["partnerkey"]); ?>" autocomplete="off"></td>
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
					<div id="home2" class="tab-pane in">
						<div class="row">
							<div class="col-xs-12">
								<div class="table-responsive">
									<table id="sample-table-1"
										class="table table-striped table-bordered table-hover">如须修改自定义菜单,请通过FTP进入Public\Conf\button_config.php文件,修改自定义菜单配置,然后点击下面的生成按钮。微信生效需要时间，请慢慢等待，或多次取消关注并重新关注查看效果。
									</table>
									<div class="form-actions">
										<a href="<?php echo U('Admin/Wechat/createMenu');?>" class="btn btn-primary btn_submit mr10" type="submit">重新生成菜单</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="home3" class="tab-pane in">
						<form class="form-horizontal J_ajaxForm" id="myform" action="<?php echo U('Admin/Weixin/addmenu');?>" method="post">
							<div class="tabbable">
								<div class="tab-content">
									<div class="tab-pane active">
										<table cellpadding="2" cellspacing="2" width="100%">
											<tbody>
												<tr>
													<td width="180">上级:</td>
													<td><select name="pid" class="normal_select"><option value="0">作为一级菜单</option></select></td>
												</tr>
												<tr>
													<td>显示名称:</td>
													<td><input type="text" class="input" name="menu_name"
														value="" id="name" >
														<input type="hidden" class="input" name="menu_id"
														value="0" id="id" ></td>
												</tr>
												<tr>
													<td>类型:</td>
													<td><select name="menu_type">
															<option value="view" selected="">超链接</option>
															<option value="click">点击事件</option>
													</select></td>
												</tr>
												<tr>
													<td>URL</td>

													<td><input type="text" class="input" name="view_url"
																id="url_input" value="" autocomplete="off">
													</td>
												</tr>
												<tr>
													<td>点击事件key</td>
													<td><input type="text" class="input" name="event_key"></td>
												</tr>
												<tr>
													<td>排序</td>
													<td><input type="text" class="input" name="listorder"></td>
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
					
					<div id="home4" class="tab-pane in">
						<div class="row">
							<div class="col-xs-12">
								<div class="table-responsive">
									<table id="sample-table-1"
										class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center"><label> <input
														type="checkbox" class="ace"> <span class="lbl"></span>
												</label></th>
												<th>ID</th>
												<th>类型</th>
												<th>标题</th>
												<th>描述</th>
												<th>图片</th>
												<th>URL</th>
												<th>关键词</th>
												<th>操作</th>
											</tr>

										</thead>

										<tbody>
											<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?><tr>
												<td class="center"><label> <input
														type="checkbox" class="ace"> <span class="lbl"></span>
												</label></td>
												<th><?php echo ($message["id"]); ?></th>
												<th><?php echo ($message["type"]); ?></th>
												<th><?php echo ($message["title"]); ?></th>
												<th><?php echo ($message["description"]); ?></th>
												<th>
												<div class="btn-group">
														<a class="btn btn-white btn-sm" data-toggle="dropdown">
															预览
														</a>
														<div class="dropdown-menu" role="menu">
															<center><img style="padding: 0px 0px 6px 0px;max-width:200px;max-height:200px;" src="__PUBLIC__/Uploads/<?php echo ($message["picurl"]); ?>"/></center>
														</div>
													</div>
												</th>
												<th><?php echo ($message["url"]); ?></th>
												<th><?php echo ($message["key"]); ?></th>
												<td><a
													href="javascript:void(0);" onclick="reWxmessage(this)"
													class="btn btn-white btn-sm">修改</a><a
													class="J_ajax_del btn btn-white btn-sm"
													href="<?php echo U('Admin/Weixin/delmessage',array('id'=>$message['id']));?>">删除</a></td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div id="home5" class="tab-pane in">
						<form class="form-horizontal J_ajaxForm" enctype="multipart/form-data" id="myform" action="<?php echo U('Admin/Weixin/addmessage');?>" method="post">
							<div class="tabbable">
								<div class="tab-content">
									<div class="tab-pane active">
										<table cellpadding="2" cellspacing="2" width="100%">
											<tbody>
												<tr>
													<td width="180">类型:</td>
													<td><select name="type" class="normal_select">
															<option value="0">图文</option>
															<option value="1">文本</option>
													</select></td>
												</tr>
												<tr>
													<td>标题:</td>
													<td><input type="text" class="input" name="title"
														value="" id="name" >
														<input type="hidden" class="input" name="message_id"
														value="0" ></td>
												</tr>
												<tr>
													<td>描述:</td>
													<td><textarea name="description" rows="8" cols="32"></textarea>(文本回复内容为描述,其他项目不用填写)</td>
												</tr>
												<tr>
													<td>图片:</td>
													<td><input multiple="multiple" type="file" name="picurl">
													<p class="help-block">允许的附件文件类型: jpg,gif,png,jpeg并且图片大小小于200k.</p></td>
												</tr>
												<tr>
													<td>URL</td>

													<td><input type="text" class="input" name="url"
															 value="" autocomplete="off">
													</td>
												</tr>
												<tr>
													<td>关键词</td>
													<td><input type="text" class="input" name="key"></td>
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
		
		<script type="text/javascript">
			function reWxmenu(o){
				var event_key = $(o).parent().prev().html();
				var url = $(o).parent().prev().prev().html();
				var menu_type = $(o).parent().prev().prev().prev().html();
				var menu_name = $(o).parent().prev().prev().prev().prev().html();
				var menu_id = $(o).parent().prev().prev().prev().prev().prev().html();
				var listorder = $(o).parent().prev().prev().prev().prev().prev().prev().html();
				
				$('input[name="menu_name"]').val(menu_name);
				$('select[name="menu_type"]').val(menu_type);
				$('input[name="view_url"]').val(url);
				$('input[name="event_key"]').val(event_key);
				$('input[name="listorder"]').val(listorder);
				$('input[name="menu_id"]').val(menu_id);
				
				
				$('#myTab li').eq(2).find('a').click();
			}
			var flag = true;
			function reWxmessage(o) {
				var key = $(o).parent().prev().html();
				var url =  $(o).parent().prev().prev().html();
				var picurl = $(o).parent().prev().prev().prev().find("center").html();
				var description = $(o).parent().prev().prev().prev().prev().html();
				var title = $(o).parent().prev().prev().prev().prev().prev().html();
				var type = $(o).parent().prev().prev().prev().prev().prev().prev().html();
				var id = $(o).parent().prev().prev().prev().prev().prev().prev().prev().html();
				
				$('input[name="title"]').val(title);
				$('select[name="type"]').val(type);
				$('input[name="url"]').val(url);
				$('input[name="key"]').val(key);
				$('input[name="message_id"]').val(id);
				$('textarea[name="description"]').val(description);
				
				if (flag) {
					$('input[name="picurl"]').parent().append(picurl);
					flag = false;
				}else{
					$('input[name="picurl"]').parent().find("img").remove();
					$('input[name="picurl"]').parent().append(picurl);
				}
				
				$('#myTab li').eq(4).find('a').click();
			}
		</script>
	</div>
</div>
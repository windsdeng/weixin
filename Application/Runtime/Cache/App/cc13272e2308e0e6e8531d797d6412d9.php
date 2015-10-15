<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../Public/Static/css/foods.css?t=333" rel="stylesheet"
	type="text/css">
<script type="text/javascript" src="../Public/Static/js/jquery.min.js"></script>
<script type="text/javascript" src="../Public/Static/js/wemall.js?14115"></script>
<script type="text/javascript" src="../Public/Static/js/alert.js"></script>
<script type="text/javascript">
var appurl = '__APP__';
var rooturl = '__ROOT__';

$(function () {
	$("#all_cnt").click(function(){
		$(".member_cnt").toggle();
		if($(this).find('img').attr("src")=="../Public/Static/images/arrow_unclick.png")
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_click.png");
		}
		else
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_unclick.png");
		}
	});
	
	$("#all_price").click(function(){
		$(".price_cnt").toggle();
		if($(this).find('img').attr("src")=="../Public/Static/images/arrow_unclick.png")
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_click.png");
		}
		else
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_unclick.png");
		}
	});
	
	$("#memeber_url").click(function(){
		$(".memeber_url").toggle();
		if($(this).find('img').attr("src")=="../Public/Static/images/arrow_unclick.png")
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_click.png");
		}
		else
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_unclick.png");
		}
	});
	
	$("#all_buy").click(function(){
		$(".buy_cnt").toggle();
		if($(this).find('img').attr("src")=="../Public/Static/images/arrow_unclick.png")
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_click.png");
		}
		else
		{
			$(this).find('img').attr("src","../Public/Static/images/arrow_unclick.png");
		}
	});
	
});

</script>
</head>
<body class="sanckbg mode_webapp">

	<div id="member-container" style="display: block;">

		<div class="menu_header">
			<div class="menu_topbar">
				<div id="menu" class="sort ">
					<a href="">分销详情</a>
				</div>
			</div>
		</div>

		<div class="div_header">
			<span style='float:left;margin-left:10px;margin-right:10px;'>
				<?php $wx_info = json_decode($users['wx_info'],true); $img = !empty($wx_info['headimgurl'])?$wx_info['headimgurl']:'../Public/Static/images/defult.jpg'; echo "<img src='".$img."' width='70px;' height='70px;'>"; ?>
			</span>
			<span class="header_right">
				<div class="header_l_di">
					<span>昵称：<?php echo $wx_info['nickname']; ?></span>&nbsp;&nbsp;
					<<a style='color:red' href="./index.php?g=App&m=Member&a=index&uid=<?php echo ($users["uid"]); ?>">账号设置</a>>
				</div>
				<div><span>合伙人：<?php if($users["member"] == 1): ?>是<?php else: ?>否(<a style='color:red' href='./index.php?g=App&m=Index&a=index'>点击链接成为合伙人</a>)<?php endif; ?></span></div>
				<div><span>关注时间：<?php echo date('Y-m-d',$wx_info['subscribe_time']); ?>&nbsp;&nbsp;<a style='color:red' href="./index.php?g=App&m=Member&a=logout">退出登录</a>></span></div>
				<div><span> 会员ID：<?php echo ($users["id"]); ?>  
				   </span></div>
		</div>
		
		<div class="div_table">
		<table  style='height:35px;text-align:center;background-color:#e61945;border:0px' border=0>
			<tr style="border:0px" border=0><td style="background-color:#e61945;">销售额：<?php echo ($all_buy_price); ?>元</td><td style="border-left:1px solid #fff;background-color:#e61945;">我的佣金：<?php echo ($all_price); ?>元</td></tr>
		</table>
		
		</div>
		
		<div class="cardexplain" style="TEXT-ALIGN: center;color:#000;font-size:14px;">您是由【<?php echo ($l_name); ?>】推荐</div>
        <div class="cardexplain" style="TEXT-ALIGN: center;color:#006400;font-size:13px;"><marquee scrollamount=1 scrolldelay=7 direction=left><?php echo ($info["notification"]); ?></marquee></div>
		<div class="cardexplain">
			<div class="div_ul" id="all_cnt" ><span><img style='margin-left:5px;' src="../Public/Static/images/arrow_unclick.png">家族成员</span><span class="bg_total"><?php echo ($all_cnt); ?> 人</span></div>
			<ul class="round">
				<li class="member_cnt" style=""><a href="<?php echo ($type_a_url); ?>"><span><img style="width:20px;height:20px;" src="../Public/Static/images/bullet_blue_expand.png">一级会员<span style="float:right;color:red;"><?php echo ($users["a_cnt"]); ?></span></span></a></li>
				<li class="member_cnt"><a href="<?php echo ($type_b_url); ?>"><span><img style="width:20px;height:20px;"  src="../Public/Static/images/bullet_blue_expand.png">二级会员<span style="float:right;color:red;"><?php echo ($users["b_cnt"]); ?></span></span></a></li>
				<li class="member_cnt"><a href="<?php echo ($type_c_url); ?>"><span><img style="width:20px;height:20px;" src="../Public/Static/images/bullet_blue_expand.png">三级会员<span style="float:right;color:red;"><?php echo ($users["c_cnt"]); ?></span></span></a></li>
			</ul>
		</div>
		
		<div class="cardexplain">
			
			<div class="div_ul" id="all_buy"><span><img style='margin-left:5px;' src="../Public/Static/images/arrow_unclick.png">家族推广<span class="bg_total"><?php echo ($all_count_buy); ?> 单</span></span></div>
			<ul class="round">
				<li class="buy_cnt"><span>下单未购买<span style="float:right;color:red;"><?php echo ($all_over_buy); ?></span></span></li>
				<li class="buy_cnt"><span>下单已购买<span style="float:right;color:red;"><?php echo ($all_buy); ?></span></span></li>
			</ul>
		</div>
		
		
		<div class="cardexplain">
			<div class="div_ul" id="all_price"><span><img style='margin-left:5px;'  src="../Public/Static/images/arrow_unclick.png">我的佣金<span class="bg_total"><?php echo ($all_price); ?> 元</span></span></div>
			<ul class="round">
				<li class="price_cnt"><span>未付款定单佣金<span style="float:right;color:red;"><?php echo ($start_price); ?></span></span></li>
				<li class="price_cnt"><span>已付款定单佣金<span style="float:right;color:red;"><?php echo ($over_price); ?></span></span></li>
				<li class="price_cnt"><span>已收货定单佣金<span style="float:right;color:red;"><?php echo ($confirm_price); ?></span></span></li>
				<li  class="price_cnt"><span>已完成定单佣金<span style="float:right;color:red;"><?php echo ($add_over_price); ?></span></span></li>
				<li  class="price_cnt"><span>待审核提现佣金<span style="float:right;color:red;"><?php echo ($get_start_price); ?></span></span></li>
				<li  class="price_cnt"><span>已提现佣金<span style="float:right;color:red;"><?php echo ($get_end_price); ?></span></span></li>
				<li class="price_cnt"><span>可提现佣金<span style="float:right;color:red;"><?php echo ($users["price"]); ?></span></span></li>
			</ul>
		</div>
		<div class="cardexplain">
			<div class="div_ul" onClick="$('#tx').click();"><span><img style='margin-left:5px;' src="../Public/Static/images/arrow_unclick.png">申请提现</span></div>
		</div>
		<div class="cardexplain">
			<div class="div_ul" id="memeber_url"><span><img style='margin-left:5px;' src="../Public/Static/images/arrow_unclick.png">分享链接</span></div>
			<span class="memeber_url" style='display:none;'><?php echo ($member_url); ?></span>
		</div>
		<div class="cardexplain">
			<a href = './index.php?g=App&m=Index&a=member_top&id=<?php echo ($users["id"]); ?>'><div class="div_ul" id="top_url"><span><img style='margin-left:5px;' src="../Public/Static/images/arrow_unclick.png">销售排行榜</span></div></a>
		</div>
		<div style="text-align:center;"></div>
	</div>
	
	<div id="ticket-container" style="display: none;">
		<img src='<?php echo ($ticket); ?>' style="width:100%">
	</div>
	
	<div id="tx-container" style="display: none;">

		<div class="menu_header">
			<div class="menu_topbar">
				<div id="menu" class="sort ">
					<a href="">申请提现</a>
				</div>
			</div>
		</div>
		
		<div class="div_header">
			<span style='float:left;margin-left:10px;margin-right:10px;'>
				<?php $wx_info = json_decode($users['wx_info'],true); $img = !empty($wx_info['headimgurl'])?$wx_info['headimgurl']:'../Public/Static/images/defult.jpg'; echo "<img src='".$img."' width='70px;' height='70px;'>"; ?>
			</span>
			<span class="header_right">
				<div><span>昵称：<?php echo $wx_info['nickname']; ?></span></div>
				<div><span>合伙人：<?php if($users["member"] == 1): ?>是<?php else: ?>否(<a style='color:red' href='./index.php?g=App&m=Index&a=index'>点击链接成为合伙人</a>)<?php endif; ?></span></div>
				<div><span>关注时间：<?php echo date('Y-m-d',$wx_info['subscribe_time']); ?></span></div>
				<div><span>会员ID：<?php echo ($users["id"]); ?>  <?php if($users["member"] == 1): if(isset($dongjia_time) && !empty($dongjia_time)){echo "<span>合伙人剩余时间:$dongjia_time天</span>";} endif; ?></span></div>
			</span>
		</div>

		<section class="order">
			<form name="txinfoForm" id="txinfoForm" method="post" action="">
				<div class="contact-info">
					<ul>
						<li class="title">提现信息</li>
						<li>
							<table style="padding: 0; margin: 0; width: 100%;">
								<tbody>
									<tr>
										<td width="80px"><label for="price" class="ui-input-text">提现金额：</label></td>
										<td>
											<div class="ui-input-text">
												<input id="price" name="price" placeholder="" value="<?php echo ($users["price"]); ?>" type="text"
													class="ui-input-text">
											</div></td>
									</tr>

									<tr>
										<td width="80px"><label for="bank_name" class="ui-input-text">开户行：</label></td>
										<td>
											<div class="ui-input-text">
												<input id="bank_name" name="bank_name" placeholder="" value="" type="text"
													class="ui-input-text">
											</div>
										</td>
									</tr>
									
									<tr>
										<td width="80px"><label for="bank_num" class="ui-input-text">开户账号：</label></td>
										<td>
											<div class="ui-input-text">
												<input id="bank_num" name="bank_num" placeholder="" value="" type="text"
													class="ui-input-text">
											</div>
										</td>
									</tr>
									
									<tr>
										<td width="80px"><label for="name" class="ui-input-text">开户人姓名：</label></td>
										<td>
											<div class="ui-input-text">
												<input id="name" name="name" placeholder="" value="" type="text"
													class="ui-input-text">
											</div>
										</td>
									</tr>
									
									<tr>
										<td width="80px"><label for="bank_name" class="ui-input-text">电话</label></td>
										<td>
											<div class="ui-input-text">
												<input id="tel" name="tel" placeholder="" value="" type="tel"
													class="ui-input-text">
											</div>
										</td>
									</tr>
									
								</tbody>
							</table>

							<div class="footReturn">
								<a id="txshowcard" class="submit" href="javascript:submitTxOrder();">确定提交</a>
							</div>

						</li>
					</ul>
				</div>
			</form>
		</section>

		<!-- 正在提交数据 -->
		<div id="tx-menu-shadow" hidefocus="true"
			style="display: none; z-index: 10;">
			<div class="btn-group"
				style="position: fixed; font-size: 12px; width: 220px; bottom: 80px; left: 50%; margin-left: -110px; z-index: 999;">
				<div class="del" style="font-size: 14px;">
					<img src="../Public/Static/images/ajax-loader.gif" alt="loader">正在提交申请...
				</div>
			</div>
		</div>
		
		<ul class="round">
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="cpbiaoge">
					<tr>
						<th>编号</th>
						<th class="cc">金额</th>
						<th class="cc">状态</th>
					</tr>
					<tbody>
					<?php if(is_array($tx_record)): $i = 0; $__LIST__ = $tx_record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tx_record): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($tx_record["id"]); ?></td>
						<td class="cc"><?php echo ($tx_record["price"]); ?></td>
						<td class="cc"><?php if($tx_record['status'] == 1): ?><em class="ok">已完成</em><?php else: ?><em class="no">待审核</em><?php endif; ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</ul>
		
		
	</div>
	
	
	<div id="user-container" style="display: none;">

		<div class="menu_header">
			<div class="menu_topbar">
				<div id="menu" class="sort ">
					<a href="">查看我的订单</a>
				</div>
			</div>
		</div>

		<div>
			<ul class="round" style="margin:0;padding:0;border-radius:0;border:0px;border-bottom:1px solid #C6C6C6">
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="cpbiaoge">
					<tr>
						<td> <span>订单详情</span> <span style='float:right'><a href='javascript:$("#ticket").click();' style='color:red;'>获取推广二维码>>></a></span> </td>
					</tr>
				</table>
			</ul>
		</div>
		
		<div class="cardexplain">
			<div id="page_tag_load" hidefocus="true"
				style="display: none; z-index: 10;">
				<div class="btn-group"
					style="position: fixed; font-size: 12px; width: 220px; bottom: 80px; left: 50%; margin-left: -110px; z-index: 999;">
					<div class="del" style="font-size: 14px;">
						<img src="../Public/Static/images/ajax-loader.gif" alt="loader">正在获取订单...
					</div>
				</div>
			</div>
			<ul class="round"  id="orderlistinsert" style='color:#000;font-size:12px;'>
				<!--插入订单ul-->
			</ul>
		</div>
	</div>

	<div class="footermenu">
		<ul>
			<li ><a href="./index.php?g=App&m=Index&a=listsp&id=1"> <img src="../Public/Static/images/21.png">
					<p>立即购买</p>
			</a></li>
			<li id="user"><a href="javascript:void(0);"> <img src="../Public/Static/images/22.png">
					<p>我的订单</p>
			</a></li>
			<li id="member"><a href="javascript:void(0);" class="active"> <img src="../Public/Static/images/23.png">
					<p>销售业绩</p>
			</a></li>
			<li id="ticket"><a href="javascript:void(0);"> <img src="../Public/Static/images/24.png">
					<p>我的二维码</p>
			</a></li>
			<li style='display:none;' id="tx"><a href="javascript:void(0);"> <img src="../Public/Static/images/24.png">
					<p>我的二维码</p>
			</a></li>
		</ul>
	</div>
	<script>
	window.onload=function(){
		if($_GET['page_type']=='order')
		{
			user();
		}
	}
	</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../Public/Static/css/foods.css?444" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../Public/Static/js/jquery.min.js"></script>
<script type="text/javascript" src="../Public/Static/js/wemall.js"></script>
<script type="text/javascript" src="../Public/Static/js/alert.js"></script>
<script type="text/javascript">
var appurl = '__APP__';
var rooturl = '__ROOT__';

</script>
<style>

.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px
}

.pagination > li {
    display: inline
}

.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.428571429;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd
}

.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px
}

.pagination > li:last-child > a, .pagination > li:last-child > span {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
}

.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
    background-color: #eee
}

.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #428bca;
    border-color: #428bca
}

.pagination > .disabled > span, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus {
    color: #999;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd
}

.pagination-lg > li > a, .pagination-lg > li > span {
    padding: 10px 16px;
    font-size: 18px
}

.pagination-lg > li:first-child > a, .pagination-lg > li:first-child > span {
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px
}

.pagination-lg > li:last-child > a, .pagination-lg > li:last-child > span {
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px
}

.pagination-sm > li > a, .pagination-sm > li > span {
    padding: 5px 10px;
    font-size: 12px
}

.pagination-sm > li:first-child > a, .pagination-sm > li:first-child > span {
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px
}

.pagination-sm > li:last-child > a, .pagination-sm > li:last-child > span {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px
}

.pager {
    padding-left: 0;
    margin: 20px 0;
    text-align: center;
    list-style: none
}

.pager:before, .pager:after {
    display: table;
    content: " "
}

.pager:after {
    clear: both
}

.pager:before, .pager:after {
    display: table;
    content: " "
}

.pager:after {
    clear: both
}

.pager li {
    display: inline
}

.pager li > a, .pager li > span {
    display: inline-block;
    padding: 5px 14px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px
}

.pager li > a:hover, .pager li > a:focus {
    text-decoration: none;
    background-color: #eee
}

.pager .next > a, .pager .next > span {
    float: right
}

.pager .previous > a, .pager .previous > span {
    float: left
}

.pager .disabled > a, .pager .disabled > a:hover, .pager .disabled > a:focus, .pager .disabled > span {
    color: #999;
    cursor: not-allowed;
    background-color: #fff
}

</style>
</head>
<body class="sanckbg mode_webapp">

	<div id="member-container" style="display: block;">
		
		<div class="div_header">
			<span style='float:left;margin-left:10px;margin-right:10px;'>
				<?php $wx_info = json_decode($users['wx_info'],true); $img = !empty($wx_info['headimgurl'])?$wx_info['headimgurl']:'../Public/Static/images/defult.jpg'; echo "<img src='".$img."' width='70px;' height='70px;'>"; ?>
			</span>
			<span class="header_right">
				<div class="header_l_di">
					<span>昵称：<?php echo $wx_info['nickname']; ?></span>&nbsp;&nbsp;
				</div>
				<div><span>合伙人：<?php if($users["member"] == 1): ?>是<?php else: ?>否(<a style='color:red' href='./index.php?g=App&m=Index&a=index'>点击链接成为合伙人</a>)<?php endif; ?></span></div>
				<div><span>关注时间：<?php echo date('Y-m-d',$wx_info['subscribe_time']); ?></span></div>
			</span>
		</div>
		
		<div class="cardexplain">
			<ul class="round_user">
				<?php if(is_array($top_info)): $i = 0; $__LIST__ = $top_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top_info): $mod = ($i % 2 );++$i;?><li>
						<div style="">
							<span style='float:left;margin-left:10px;margin-right:10px;margin-top:5px;'>
							<?php $wx_info = json_decode($top_info['wx_info'],true); $img = !empty($wx_info['headimgurl'])?$wx_info['headimgurl']:'../Public/Static/images/defult.jpg'; echo "<img src='".$img."' width='40px;' height='40px;'>"; ?>
							</span>
							<span class="header_right" style="margin-top:5px;">
								<div class="header_l_di"><span>昵称：<?php echo $wx_info['nickname']; ?></span></div>
								<div><span>销售额：</span><?php echo ($top_info["total"]); ?></div>
								<div><span>关注时间：<?php echo date('Y-m-d',$wx_info['subscribe_time']); ?></span></div>
							</span>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</body>
</html>
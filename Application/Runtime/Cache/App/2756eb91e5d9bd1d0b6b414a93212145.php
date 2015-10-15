<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type"content="text/html; charset=UTF-8">
<meta name="viewport"content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable"content="yes">
<meta name="apple-mobile-web-app-status-bar-style"content="black">
<meta name="format-detection"content="telephone=no">
<link href="../Public/Static/css/foods.css" rel="stylesheet" type="text/css">
<title></title>
</head>
<body>
<style>
.deploy_ctype_tip{z-index:1001;width:100%;text-align:center;position:fixed;top:50%;margin-top:-23px;left:0;}
.deploy_ctype_tip p{display:inline-block;padding:13px 24px;border:solid#d6d482 1px;background:#f5f4c5;font-size:16px;color:#8f772f;line-height:18px;border-radius:3px;}
body, article, section, h1, h2, hgroup, p, a, ul, li, em, div, small, span, footer, canvas, figure, figcaption, input {
    margin: 0;
    padding: 0;
}
a {
	color:#333;
    cursor: pointer;
    text-decoration: none;
}
ul,li{
    list-style-type: none;
}
.clr{
	clear:both;
}
body {
    background-color: #ECECEC;
    font-family: Microsoft YaHei,Helvitica,Verdana,Tohoma,Arial,san-serif;
    margin: 0;
    overflow-x: hidden;
    padding: 0;
	color: #666666;
}
.qiandaobanner{
	display:block;
	text-align:center;
	position: relative;
	min-height: 26px;
}
.qiandaobanner img{
	width:100%;
	border:0;
	min-width:320px;
}

.qiandaobanner  span {
    background-color: rgba(0, 0, 0, 0.5);
    bottom: 0;
    color: #FFFFFF;
    display: block;
    font-size: 16px;
    margin: 0 auto;
    line-height: 26px;
    position: absolute;
    text-align: center;
    width: 100%;
}
.cardexplain{
	margin:11px 10px 20px 9px;
	min-width:301px;
}
h2 {
    color: #373B3E;
    font-size: 14px;
    line-height: 32px;
    padding-left: 10px;
    padding-top: 5px;
    text-align: left;
	font-weight:normal;
}

ul.round {
	border:1px solid #C6C6C6;
	background-color:rgba(255, 255, 255, 0.9);
	text-align:left;
	font-size:14px;
	line-height:24px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	-moz-box-shadow:0 1px 1px #f6f6f6;
	-webkit-box-shadow:0 1px 1px #f6f6f6;
	box-shadow:0 1px 1px #f6f6f6;
	margin-bottom:11px;
	display:block
}

ul.round li {
	border:solid #C6C6C6;
	border-width:0 0 1px 0;
	padding:0px 10px 0 10px;
}
ul.round li:only-of-type {
	border-width:0;
}
ul.round li:last-of-type {
	border-width:0;
}
.round li, .round li span, .round li a {
	line-height:22px;
}
.round li span {
	display:block;
	background:url(img/arrow3.png) no-repeat right 50%;
	-webkit-background-size:8.5px 13px;
	background-size:8.5px 13px;
	padding:10px 20px 9px 0;
	position:relative;
	font-size:16px;
	min-height: 22px;
}
.round li span.none {
    background: none repeat scroll 0 0 transparent;
}
.round li span.noneorder {
    background: none repeat scroll 0 0 transparent;
	padding:10px 5px 9px 0;
}
.round li span.none em {
    right: 0;
}

.round li.addr{
    background: url(img/addr.png) no-repeat scroll 10px 13px transparent;
	background-size:15px 15px;
    line-height: 22px;
    padding-left: 34px;
}
.round li.addr span{
	font-size:14px;
}
.mb{ margin-bottom:4px}
.round li.nob {
    border-width:0;
}
.round li.dandanb {
	border-color:#EBEBEB;
}
.round li.nob .px{
    border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	background-color: #FFFFFF;
	border: 1px solid #E8E8E8;
	margin: 5px 0 4px;
	padding: 5px 10px;
}
.round li.nob .dropdown-select{
    border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	background-color: #FFFFFF;
	border: 1px solid #E8E8E8;
	margin: 5px 0 4px;
	padding: 5px 10px;
}
.round li.nob .pxtextarea{
    border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	background-color: #FFFFFF;
	border: 1px solid #E8E8E8;
	margin: 5px 0 5px;
	padding: 5px 10px;
}
ul.round li.nob:last-of-type {
	margin-bottom:8px
}
.round li.tel {
    background: url(img/tel.png) no-repeat scroll 11px 13px transparent;
	background-size:15px 15px;
    line-height: 22px;
    padding-left: 34px;
}
.round li.tel2 {
    background: url(img/tel2.png) no-repeat scroll 11px 13px transparent;
	background-size:15px 15px;
    line-height: 22px;
    padding-left: 34px;
}
.round li.userinfo {
    background: url(img/userinfo.png) no-repeat scroll 11px 13px transparent;
	background-size:15px 15px;
    line-height: 22px;
    padding-left: 34px;
}
.round li.detail {
    background: url(img/detail.png) no-repeat scroll 10px 13px transparent;
	background-size:15px 15px;
    line-height: 22px;
    padding-left: 34px;
	-webkit-border-radius:0 0 5px 5px;
	border-radius:0 0 5px 5px;
}
.round li.gift {
    background: url(img/gift.png) no-repeat scroll 10px 13px transparent;
	background-size:15px 15px;
    line-height: 22px;
    padding-left: 34px;
	-webkit-border-radius:0 0 5px 5px;
	border-radius:0 0 5px 5px;
}
.round li h2 {
    color: #373B3E;
    font-size: 16px;
    font-weight: normal;
    line-height: 20px;
    padding: 10px 0 10px 0;
	border-bottom:1px dotted #C6C6C6;
}
.round li span h2 {
    color: #373B3E;
    font-size: 16px;
    font-weight: normal;
    line-height: 20px;
    padding: 6px 20px 6px 0;
	border-bottom:0;
	overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.round li span img {
    border: 0 none;
	width:50px;
	height:50px;
	float:left;
	margin:0 10px 0 0;
}
.round li span img.showimg {
    border: 0 none;
	width:108px;
	height:60px;
	float:left;
	margin:0 10px 0 0;
	border-radius: 3px 3px 3px 3px;
}
.round li span p{
	overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
	padding-right: 10px;
}

.round li .text {
	padding:10px 0 10px;
}
.round li .btop {
    background-color: #F5F5F5;
    margin-bottom: 10px;
    padding: 10px;
}
.round li .text p {
    line-height: 20px; font-size:14px; color:#666;
}
.round li img{
	max-width:100%;
	border:0;
}

.round li span em{
	display:block;
	-webkit-border-radius:20px;
	border-radius:20px;
	color:#FFF;
	font-size: 12px;
    line-height: 12px;
    margin-top: -10px;
    padding: 4px 8px;
    position: absolute;
    right: 20px;
    top: 50%;
	text-shadow: 0 0 #FFFFFF;
	font-style:normal;
}
em.ok{
	background-color: #1CC200;
}
em.error{
	background-color: #FF6600;
}
em.no{
	background-color: #BBBBBB;
}
em.more {
    text-shadow:0 1px #FFF !important;
	color: #666666 !important;
	right:8px !important;
}
.price{
	color: #FF6600; font-size:16px;
}
.price2{
	color: #1CC200; font-size:16px;
}
.round li span.jifen em{
	left:70px; font-style:normal;color: #1CC200;font-size: 18px;
}
ul.round li.biaotou { padding-right:30px;border-bottom: 1px solid #DADADA;background-color: #EBEBEB;}
ul.round li.pad { padding-right:15px;}
.biaotou td{ color:#999;font-size: 12px;}
.biaotou td.yuanjia{ color:#999;font-size: 12px;text-align: right; width:70px;}
.biaotou td.youhuijia{ color:#999;font-size: 12px; text-align:right; width:70px;}



.jiagebiao td.yuanjia{ color:#999;font-size: 14px; text-align:right; width:70px;}
.jiagebiao td.youhuijia{ color:#F60;font-size: 14px; text-align:right; width:70px;}

a.yuanjia{ color:#999;font-size: 12px; line-height:14px }
a.youhuijia{ color:#F60;font-size: 14px; line-height:14px }
.round li.orderinfo{
    background: url(img/order.png) no-repeat scroll 10px 13px transparent;
	background-size:15px 15px;
    line-height: 22px;
    padding-left: 34px;
}
.round li.title{
	background-color:#E1E1E1;
    background-image: linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);
	background-image: -o-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);
	background-image: -moz-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);
	background-image: -webkit-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);
	background-image: -ms-linear-gradient(bottom, #E7E7E7 0%, #f9f9f9 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #E7E7E7),
	color-stop(1, #f9f9f9)
	);
	-webkit-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;
	-moz-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;
	box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	-o-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.round li.title span{
    padding: 5px 15px 4px 0;font-size: 14px; color:#666;text-shadow:0 1px #FFF;
}

.round li p{
	padding:0; margin:2px 0; color:#999; font-size:12px;line-height: 14px;
}


.kuang th {
    color: #333333;padding:0; font-size:16px; font-weight:normal;text-align: left;width: 79px;
}
.kuang td {
    color: #999999;padding:0;
}
.kuang th.thtop{ padding:10px 0 0 0}
.kuang td.userinfo{
    padding:10px;
}
.round li span .kuang td.userinfo{
    padding:0 0 1px 10px;color: #666666;
}
.kuang td.title{
    padding:10px 0;color: #333333;
}
.kuang td.price{
	color: #FF6600; font-size:16px;
}
.kuang td.price2{
	color: #1CC200; font-size:16px;
}
.kuang td.pm{
    font-size:14px;
	line-height:20px;
}
.green{
	color:#090;
}
.red{
	color:#FF6600;
}
.time{
	font-size:12px;
}
.small{
	font-size:12px;
}
.detailcontent {
	border:1px solid #C6C6C6;
	background-color:rgba(255, 255, 255, 0.9);
	text-align:left;
	font-size:14px;
	line-height:22px;
	-webkit-border-radius:5px;
	border-radius:5px;
	box-shadow:0 1px 1px #f6f6f6;
	-moz-box-shadow:0 1px 1px #f6f6f6;
	-webkit-box-shadow:0 1px 1px #f6f6f6;
	padding:10px;
	margin-bottom:11px;
}
.detailcontent h2 {
    color: #373B3E;
    font-size: 16px;
    font-weight: normal;
    line-height: 20px;
    padding: 0 0 5px 0;
	border-bottom:1px solid #C6C6C6;
	margin-bottom:6px;
}

.detailcontent img {
	max-width:100%;
	border:0;
}
.zongjifen li{
	width:33%;
	float:left;
	display:block;
}
.zongjifen li p{
	display:block;
	text-align:center;
	
}
.zongjifen li span{
	display:block;
	text-align:center;
}
.zongjifen li .fengexian{
	border-right: 1px dotted #ccc;
}
.jifen-box{
	border:1px solid #C6C6C6;
	background-color:rgba(255, 255, 255, 0.8);
	text-align:left;
	font-size:14px;
	line-height:24px;
	-webkit-border-radius:5px;
	border-radius:5px;
	box-shadow:0 1px 1px #f6f6f6;
	padding:10px;
	margin-bottom:10px;
	position: relative;
}
/*login*/
.px {
	position: relative;
	background-color: transparent;
	color: #999999;
	display: block;
	width: 100%; 
	padding:10px;
	font-size: 16px;
	margin:0 auto;
	font-family:Arial, Helvetica, sans-serif;
	border:0;
	-webkit-appearance:none;
}

.px[type="text"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.px[type="password"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.px[type="button"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.pxbtn[type="button"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.submit[type="button"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.del[type="button"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.pxtextarea[type="textarea"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.pxtextarea{
	position: relative;
	background-color: transparent;
	color: #999999;
	display: block;
	width: 100%; 
	margin:10px 0;
	font-size: 14px;
	padding:0 10px;
	font-family:Arial, Helvetica, sans-serif;
	border:0;
	overflow:auto;
	-webkit-appearance:none;
}
.pxbtn {
	
	background: #ff6501;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffa201 ), to( #ff6501 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffa201 , #ff6501 ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffa201 , #ff6501 ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffa201 , #ff6501 ); /* IE10 */
	background-image:      -o-linear-gradient( #ffa201 , #ff6501 ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffa201 , #ff6501 );
	border: 1px solid #ff6501;
	border-bottom: 1px solid #d35605;
	color: #ffffff;
	font-weight: bold;
	text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0.6em 0.6em 0.6em 0.6em;
	display: block;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow:0 1px 3px rgba(0, 0, 0, 0.5);
	-webkit-box-shadow:0 1px 3px rgba(0, 0, 0, 0.5);
	text-overflow: ellipsis;
	white-space: nowrap;
	cursor: pointer;
	text-align: center;
	font-weight: bold;
	text-shadow: 0 0 2px #BE4205;
	font-size: 18px;
	padding:8px 10px;
	margin:10px 0 0 0;
}
.pxbtn:visited {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffa201 ), to( #ff6501 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffa201 , #ff6501 ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffa201 , #ff6501 ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffa201 , #ff6501 ); /* IE10 */
	background-image:      -o-linear-gradient( #ffa201 , #ff6501 ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffa201 , #ff6501 );
}
.pxbtn:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ff7f01 ), to( #ff6501 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ff7f01 , #ff6501 ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ff7f01 , #ff6501 ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ff7f01 , #ff6501 ); /* IE10 */
	background-image:      -o-linear-gradient( #ff7f01 , #ff6501 ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ff7f01 , #ff6501 );
}
.pxbtn:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ff6501 ), to( #ffa201 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ff6501 , #ffa201 ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ff6501 , #ffa201 ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ff6501 , #ffa201 ); /* IE10 */
	background-image:      -o-linear-gradient( #ff6501 , #ffa201 ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ff6501 , #ffa201 );
	border: 1px solid #ff6501;
	border-top: 1px solid #d35605;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
}
input::-moz-placeholder, textarea::-moz-placeholder { color: #cccccc;}


.dropdown-option {color: #999;background-color: transparent;}

/* End Dropdown Select */
.roundyellow {
	background-color:#ffe156;
	text-decoration:none;
	border:1px solid #D2BD85;
	background-image: linear-gradient(bottom,  #ffe156 0%, #fff5cb 100%);
	background-image: -o-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -moz-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -webkit-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -ms-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #ffe156),
	color-stop(1, #fff5cb)
	);
	-webkit-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	display:block;
}
ul.roundyellow {
	background-color:#ffe156;
	text-decoration:none;
	border:1px solid #D2BD85;
	background-image: linear-gradient(bottom,  #ffe156 0%, #fff5cb 100%);
	background-image: -o-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -moz-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -webkit-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -ms-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #ffe156),
	color-stop(1, #fff5cb)
	);
	-webkit-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.1);
	box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.1);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	display:block;
}
.beizhu{
	border:1px solid #EDE17E;
	background-color: #FFF5C5;
	text-align: center;
	color: #BCA24B;
	font-size:14px;
	line-height:22px;
	-webkit-border-radius:5px;
	border-radius:5px;
	box-shadow:0 1px 1px #f6f6f6;
	-moz-box-shadow:0 1px 1px #f6f6f6;
	-webkit-box-shadow:0 1px 1px #f6f6f6;
	padding: 4px 10px 5px;
	margin: 11px 0 8px;
}
.footReturn {
    display: block;
    margin: 11px auto;
    padding: 0;
	position: relative;
}
.footerbtn{ width:50%; float:left;}
.right3{ margin-right:3px}
.left3{ margin-left:3px}
.vm {
vertical-align: middle;
}
.submit {
	background-color:#179F00;
	padding:10px 20px;
	font-size:16px;
	text-decoration:none;
	border:1px solid #0B8E00;
	background-image: linear-gradient(bottom,  #179F00 0%, #5DD300 100%);
	background-image: -o-linear-gradient(bottom, #179F00 0%, #5DD300 100%);
	background-image: -moz-linear-gradient(bottom, #179F00 0%, #5DD300 100%);
	background-image: -webkit-linear-gradient(bottom, #179F00 0%, #5DD300 100%);
	background-image: -ms-linear-gradient(bottom, #179F00 0%, #5DD300 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #179F00),
	color-stop(1, #5DD300)
	);
	-webkit-box-shadow: 0 1px 0 #94E700 inset, 0 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 1px 0 #94E700 inset, 0 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: 0 1px 0 #94E700 inset, 0 1px 2px rgba(0, 0, 0, 0.5);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	color: #ffffff;
	display:block;
	text-align:center;
	text-shadow:0 1px rgba(0, 0, 0, 0.2);
}
.submit:active {
	padding-bottom:9px;
	padding-left:20px;
	padding-right:20px;
	padding-top:11px;
	top:0px;
	background-image: linear-gradient(bottom, #5DD300 0%, #179F00 100%);
	background-image: -o-linear-gradient(bottom,  #5DD300 0%, #179F00 100%);
	background-image: -moz-linear-gradient(bottom,  #5DD300 0%, #179F00 100%);
	background-image: -webkit-linear-gradient(bottom,  #5DD300 0%, #179F00 100%);
	background-image: -ms-linear-gradient(bottom,  #5DD300 0%, #179F00 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #5DD300),
	color-stop(1, #179F00)
	);
	-webkit-box-shadow: 0 1px 0 #5DD300 inset, 0 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 1px 0 #5DD300 inset, 0 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: 0 1px 0 #5DD300 inset, 0 1px 2px rgba(0, 0, 0, 0.5);
}
.submit img{ width:15px; margin:-4px 10px 0 0;}
.del{
	background-color:#F4F4F4;
	padding:10px 20px;
	font-size:16px;
	text-decoration:none;
	border:1px solid #ABABAB;
	background-image: linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -o-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -moz-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -webkit-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -ms-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #E1E1E1),
	color-stop(1, #ffffff)
	);
	-webkit-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
	box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	color: #666666;
	display:block;
	text-align:center;
	text-shadow:0 1px #FFF;
}
.del:active {
	padding-bottom:9px;
	padding-left:20px;
	padding-right:20px;
	padding-top:11px;
	top:0px;
	background-image: linear-gradient(bottom, #ffffff 0%, #E1E1E1 100%);
	background-image: -o-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -moz-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -webkit-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -ms-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #ffffff),
	color-stop(1, #E1E1E1)
	);
	-webkit-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
	box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
}
.del img{ width:15px;width:15px; margin:-4px 10px 0 0;}
.submit2 {
	background-color:#ffe156;
	padding:10px 20px;
	font-size:16px;
	text-decoration:none;
	border:1px solid #D2BD85;
	background-image: linear-gradient(bottom,  #ffe156 0%, #fff5cb 100%);
	background-image: -o-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -moz-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -webkit-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -ms-linear-gradient(bottom, #ffe156 0%, #fff5cb 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #ffe156),
	color-stop(1, #fff5cb)
	);
	-webkit-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	color: #333;
	display:block;
	text-align:center;
	text-shadow: 0 1px rgba(255, 255, 255, 0.5);
}
.submit2:active {
	padding-bottom:9px;
	padding-left:20px;
	padding-right:20px;
	padding-top:11px;
	top:0px;
	background-image: linear-gradient(bottom, #fff5cb 0%, #ffe156 100%);
	background-image: -o-linear-gradient(bottom,  #fff5cb 0%, #ffe156 100%);
	background-image: -moz-linear-gradient(bottom,  #fff5cb 0%, #ffe156 100%);
	background-image: -webkit-linear-gradient(bottom,  #fff5cb 0%, #ffe156 100%);
	background-image: -ms-linear-gradient(bottom,  #fff5cb 0%, #ffe156 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #fff5cb),
	color-stop(1, #ffe156)
	);
	-webkit-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
	box-shadow: 0 1px 1px #fff3c2 inset, 0 1px 2px rgba(0, 0, 0, 0.15);
}
.submit2 img{ width:15px; margin:-4px 10px 0 0;}
.receive {
	background-color:#F4F4F4;
	padding:10px 20px;
	font-size:16px;
	text-decoration:none;
	border:1px solid #C6C6C6;
	background-image: linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -o-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -moz-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -webkit-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -ms-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #E1E1E1),
	color-stop(1, #ffffff)
	);
	-webkit-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;
	-moz-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;
	box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 0 #EEEEEE;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	color: #666666;
	display:block;
	text-align:center;
	text-shadow:0 1px rgba(0, 0, 0, 0.2);
}

.receive:before {
	background-image: linear-gradient(bottom, rgba(255, 255, 255, 0.41) 0%, #E1E1E1 100%);
	background-image: -o-linear-gradient(bottom, rgba(255, 255, 255, 0.41) 0%, #E1E1E1 100%);
	background-image: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0.41) 0%, #E1E1E1 100%);
	background-image: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.41) 0%, #E1E1E1 100%);
	background-image: -ms-linear-gradient(bottom, rgba(255, 255, 255, 0.41) 0%, #E1E1E1 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, rgba(255, 255, 255, 0.41)),
	color-stop(1, #E1E1E1)
	);
	content:"";
	display:block;
	position:absolute;
	width:100%;
	height:100%;
	padding:5px;
	left:-5px;
	top:-6px;
	z-index:-1;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 1px rgba(144, 145, 147, 0.21) inset, 0 1px 0 rgba(255, 255, 255, 0.57);
	-moz-box-shadow: 0 1px 1px rgba(144, 145, 147, 0.21) inset, 0 1px 0 rgba(255, 255, 255, 0.57);
	-o-box-shadow:0 1px 1px rgba(144, 145, 147, 0.21) inset, 0 1px 0 rgba(255, 255, 255, 0.57);
	box-shadow:0 1px 1px rgba(144, 145, 147, 0.21) inset, 0 1px 0 rgba(255, 255, 255, 0.57);
}

.receive:active {
	padding-bottom:9px;
	padding-left:20px;
	padding-right:20px;
	padding-top:11px;
	top:0px;
	background-image: linear-gradient(bottom, #ffffff 0%, #E1E1E1 100%);
	background-image: -o-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -moz-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -webkit-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -ms-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #ffffff),
	color-stop(1, #E1E1E1)
	);
	-webkit-box-shadow: 0 1px 0 #E1E1E1 inset, 0 1px 1px #F6F6F6;
	-moz-box-shadow: 0 1px 0 #E1E1E1 inset, 0 1px 1px #F6F6F6;
	box-shadow: 0 1px 0 #E1E1E1 inset, 0 1px 1px #F6F6F6;
}

/*window*/
.window {
	width:267px;
	position:absolute;
	display:none;
	margin:0px auto 0 -136px;
	padding:2px;
	bottom:60px;
	left:50%;
	border-radius:0.6em;
	-webkit-border-radius:0.6em;
	-moz-border-radius:0.6em;
	background-color: #f1f1f1;
	-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	font:14px/1.5 Microsoft YaHei, Helvitica, Verdana, Arial, san-serif;
	z-index:10;
}
.window .wtitle {
	background-color: #585858;
	line-height: 26px;
	padding: 5px 5px 5px 10px;
	color:#ffffff;
	font-size:16px;
	border-radius:0.5em 0.5em 0 0;
	-webkit-border-radius:0.5em 0.5em 0 0;
	-moz-border-radius:0.5em 0.5em 0 0;
}
.window .content {
	/*min-height:100px;*/
	overflow:auto;
	padding:10px;
	color: #222222;
	text-shadow: 0 1px 0 #FFFFFF;
}
.window #txt {
	min-height:30px;
	font-size:14px;
	line-height:20px;
}
.window .content p {
	margin:10px 0 0 0;
}

.window .wtitle .close {
	float:right;
	background-image: url("img/QJ8o7KOek84fkCWSBtfLNy2MPpCkPFMH6PWEhWhKncIyEk69VfiUuVhqJefdsYcwNbEwxGqGIFWYAAAAASUVORK5CYII=");
	width:26px;
	height:26px;
	display:block;
}
#overlay {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:#000000;
	opacity:0.5;
	filter:alpha(opacity=0);
	display:none;
	z-index: 9;
}

/*page*/
.pagination{
    margin: 0 auto;
    text-align: center;
    text-align: center;
	min-width:301px;
}
.pagination a {
	margin: 0 ;
    padding: 6px 27px;
	border:1px solid #D1D1D1;
	background:#fefefe;
	border:1px solid #ABABAB;
	background-image: linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -o-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -moz-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -webkit-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -ms-linear-gradient(bottom, #E1E1E1 0%, #ffffff 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #E1E1E1),
	color-stop(1, #ffffff)
	);
	-webkit-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 1px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 1px rgba(0, 0, 0, 0.1);
	box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 1px rgba(0, 0, 0, 0.1);
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-radius:5px;
	color:#666;
	text-shadow:0 1px #fff;
	display:block;
}
.pagination a:hover {
	background-image: linear-gradient(bottom, #F5F2F2 0%, #ffffff 100%);
	background-image: -o-linear-gradient(bottom, #F5F2F2 0%, #ffffff 100%);
	background-image: -moz-linear-gradient(bottom, #F5F2F2 0%, #ffffff 100%);
	background-image: -webkit-linear-gradient(bottom, #F5F2F2 0%, #ffffff 100%);
	background-image: -ms-linear-gradient(bottom, #F5F2F2 0%, #ffffff 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #F5F2F2),
	color-stop(1, #ffffff)
	);
}
.pagination a:active {
	background-image: linear-gradient(bottom, #ffffff 0%, #E1E1E1 100%);
	background-image: -o-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -moz-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -webkit-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -ms-linear-gradient(bottom,  #ffffff 0%, #E1E1E1 100%);
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #ffffff),
	color-stop(1, #E1E1E1)
	);
	-webkit-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
	box-shadow: 0 1px 0 #FFFFFF inset, 0 1px 2px rgba(0, 0, 0, 0.25);
}
.pagination .disabled a, .pagination .disabled a:hover {
	background:none;
	border:1px solid #cbcbcb;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
	color:A4A3A3;
}
.pagination .allpage{
	position: relative;
    text-align: center;
    vertical-align: baseline;
	display: inline-block;
}
.pagination .currentpage{
    line-height: 36px;
    width: 80px;
}
#dropdown-select{position:absolute;
	top:0;
	left:0;
	height:36px;
	width:80px;
	opacity:0;
}
.pagination .left{ float:left}
.pagination .right{ float:right}


/*iscroll*/

.banner {
	width:100%;
	margin:0 auto;
	padding:0;overflow: hidden;
	background-color: #333333;
}
#wrapper {
	margin:0;
	width:100%;
	height:auto;
	float:left;
	position:relative;	/* On older OS versions "position" and "z-index" must be defined, */
	z-index:1;			/* it seems that recent webkit is less picky and works anyway. */
	overflow:hidden;
	
}

#scroller {
	height:auto;
	float:left;
	padding:0;
}

#scroller ul {
	list-style:none;
	display:block;
	float:left;
	width:100%;
	height:auto;
	padding:0;
	margin:0;
	text-align:left;
}

#scroller li {
	
	display:block; float:left;
	width:auto; height:auto;
	text-align:center;
	font-size:0px;
	padding:0;
	position:relative;
}
#scroller li a{
	
	display:block;
	padding:0;
	margin:0;
}
#scroller li p{
	position:absolute;
	z-index:2;
	display:block;
	width:100%;
	bottom:0;
	background-color:rgba(0, 0, 0, 0.5);
	color:#F4F4F4;
	font-size:14px;
	text-indent: 55px;
	line-height:24px;
	text-align: left;
    text-indent: 10px;
    text-overflow: ellipsis;
    white-space: nowrap;
	padding:0;
	margin:0;
}
#nav {
	float: right;
    margin-top: -15px;
    padding: 0;
    position: relative;
    width: auto;
    z-index: 3;
}

#prev, #next {
	float:left;
	font-weight:bold;
	font-size:14px;
	padding:5px 0;
	width:80px;
	display: none;
}

#next {
	float:right;
	text-align:right;
}

#indicator > li {
	display:block; float:left;
	list-style:none;
	padding:0; margin:0;
}

#indicator {
	display: block;
    margin: 0 8px;
    padding: 0;
    width: auto;
}

#indicator > li {
	text-indent:-9999em;
	width:8px; height:8px;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	-o-border-radius:4px;
	border-radius:4px;
	background:#888;
	overflow:hidden;
	margin-right:4px;
}

#indicator > li.active {
	background:#DDDDDD;
}

#indicator > li:last-child {
	margin:0;
}

</style>
<script language="javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideOptionMenu');
});
function callpay()
{
	WeixinJSBridge.invoke(
		'getBrandWCPayRequest',
		<?php echo ($url); ?>,
		function(res){
			WeixinJSBridge.log(res.err_msg);
			if(res.err_msg=='get_brand_wcpay_request:ok')
			{
				document.getElementById('payDom').style.display='none';
				document.getElementById('successDom').style.display='';
				//setTimeout("window.location.href = '<?php echo ($returnUrl); ?>'",2000);
				window.location.href = '<?php echo ($returnUrl); ?>';
			}
			else
			{
				document.getElementById('payDom').style.display='none';
				document.getElementById('failDom').style.display='';
				//document.getElementById('failRt').innerHTML=res.err_code+'|'+res.err_desc+'|'+res.err_msg;
			}
		});
}

</script>

<div class="cardexplain"  style="margin:0;padding:0;">
	<ul class="round" style="margin:0;padding:0;border-radius:0;border:0px;border-bottom:1px solid #C6C6C6">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="cpbiaoge">
			<tr>
				<td> <span>订单详情</span> <!--span style='float:right'><a href='./index.php?g=App&m=Index&a=index_info'>继续购物>>></a></span--> </td>
			</tr>
		</table>
	</ul>
</div>


<div class="cardexplain" style="margin-bottom: 0px;">
	<ul class="round"  style="margin-left:0;margin-right:0;">
		<li class="title mb"><span class="none">收货人信息</span></li>
		<li class="nob">
			<table>
				<tr><td>联系人：<?php echo ($username); ?></td></tr>
				<tr><td>联系电话：<?php echo ($phone); ?></td></tr>
				<tr><td>联系地址：<?php echo ($address); ?></td></tr>
			</table>
		</ul>
</div>

<div class="cardexplain">
	<ul class="round" style="margin-left:0;margin-right:0;">
		<li class="title mb"><span class="none">产品信息</span></li>
		<li class="nob">
			<table>
				<tr><!--<td><img width='70' height='70' src='../Public/Static/images/chanpininfo.jpg'></td>-->
					<td><table>
					<tr><td><?php echo ($cart_name); ?><td></tr>
					<tr><td>￥<?php echo ($cart_price); ?> * <?php echo ($cart_num); ?><td></tr>
					</table></td>
				</tr>
			</table>
			<div style='text-align:center;color:red;'>购物合计总金额：<?php echo ($price); ?>元</div>
		</ul>
</div>

	
	
<div id="payDom"class="cardexplain">
	<div class="footReturn"style="text-align:center">
		<input type="button"style="margin:0 auto 20px auto;width:100%"onclick="callpay()"class="submit"value="微信支付"/>
	</div>
</div>
<div id="failDom"style="display:none"class="cardexplain">
	<ul class="round">
		<li class="title mb"><span class="none">支付结果</span></li>
		<li class="nob">
			<table width="100%"border="0"cellspacing="0"cellpadding="0"class="kuang">
				<tr><th>支付失败</th><td><div id="failRt"></div></td></tr>
			</table>
		</li>
	</ul>
	<div class="footReturn"style="text-align:center">
		<input type="button"style="margin:0 auto 20px auto;width:100%"onclick="callpay()"class="submit"value="重新进行支付"/>
	</div>
</div>
<div id="successDom"style="display:none"class="cardexplain">
	<ul class="round"><li class="title mb"><span class="none">支付成功</span></li>
	<li class="nob">
		<table width="100%"border="0"cellspacing="0"cellpadding="0"class="kuang">
			<tr><th>您已支付成功，页面正在跳转...</td></tr>
		</table>
		<div id="failRt"></div>
	<!--/td></tr></table-->
	</li>
	</ul>
</div>
</body>
</html>
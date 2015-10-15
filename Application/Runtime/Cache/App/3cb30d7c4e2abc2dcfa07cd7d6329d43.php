<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>注册</title>
    <meta name="author" content="ecdaddy.com">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="./Application/Tpl/App/default/Public/Static/member/base.css">
    <script type="text/javascript">
    function check(theForm){
        if(theForm.login.value == ""){
            alert("请输入用户名!");theForm.login.focus();return false;
        }
        if(theForm.password.value == ""){
            alert("请输入密码!");theForm.password.focus();return false;
        }
        return true;
    }
    </script>
    <style type="text/css">
    header {
        border-top: 1px solid #e61945;
        z-index: 900;
        margin: auto;
        display: block;
        width: 100%;
        height: 48px;
        display: -webkit-box;
        display: box;
        -webkit-box-orient: horizontal;
        background-color: #e61945;
        background: -webkit-linear-gradient(top, #e61945, #e61945);
    }

    </style>
</head>
<body>
    <header>
        <p class="button_img" style="line-height: 3em; color:#fff;width:100%;text-align:center; margin:0 auto;">立即关注，组建<!--?php echo (名族品牌); ?-->家族</p>
    </header>
    <div class="login-reg mc radius">
    <form onSubmit="javascript:return check(formUser);" action="" method="post" name="formUser">
        <table width="100%">
            <tbody><tr>
                <td align="right" width="20%">用户名：&nbsp;</td>
                <td><input name="login" type="text" id="login" class="common-input" placeholder="请填写用户名！" style="width:90%;">
                <span id="username_notice" style="color:#FF0000"> *</span></td>
            </tr>
            <tr>
                <td align="right">登录密码：&nbsp;</td>
                <td><input placeholder="请填写登陆密码！" name="password" type="text" id="password" class="common-input" style="width:90%;">
                <span style="color:#FF0000" id="password_notice"> *</span></td>
            </tr>
            <tr>
                <td align="right">手机：&nbsp;</td>
                <td><input placeholder="请填写手机号！" name="phone" type="text" id="phone" class="common-input" style="width:90%;">
                <span style="color:#FF0000" id="password_notice"> *</span></td>
            </tr>
            <tr>
                <td align="right">邮箱：&nbsp;</td>
                <td><input placeholder="请填写邮箱地址！" name="email" type="text" id="email" class="common-input" style="width:90%;">
                <span style="color:#FF0000" id="password_notice"> *</span></td>
            </tr>
            
            <tr>
                <td></td>
                <td align="left"><span style="color:#FF0000; text-align:center"> 请完善个人信息！</span></td>
            </tr>
            <tr>
	          <td>&nbsp;</td>
	          <td><label>
	            <input name="agreement" value="1" checked="checked" type="checkbox">
	            我已看过并接受《<a href="./Application/Tpl/App/default/wenzhang/zhucexieyi.html" style="color:blue" target="_blank">用户协议</a>》</label></td>
	        </tr>
            <tr>
                <td>&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input name="act" type="hidden" value="act_register">
                    <input type="hidden" name="back_act" value="">
                    <input name="Submit" type="submit" class="sub_btn fl" style="width:90%" value="立即注册"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>已经有账号了，直接 <a href="<?php echo U('App/Member/login');?>">登录</a></td>
                </tr>
            </tbody></table>
        </form>
    </div>
    ﻿<div class="to-top"><a href="javascript:scroll(0,0)" hidefocus="true"><span></span>返回顶部</a></div>
</body></html>
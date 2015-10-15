<?php
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=member&refresh=1';
$buy='http://weilai-mbp.tunnel.mobi/weixin/index.php?g=App&m=Member&a=login';
$newmenu = ' {
        "button": [
            {
                "type": "view",
                "name": "我的网站",
                "url": "'.$buy.'" ,
                "sub_button": [ ]
            },
            {
                "name": "我的家族",
                "sub_button": [
                    {
                        "type": "view",
                        "name": "我的家族",
                        "url":"'.$jiazu_button.'" ,
                        "sub_button": [ ]
                    },
                    {
                        "type": "click",
                        "name": "我的二维码",
                        "key": "GET_PIC",
                        "sub_button": [ ]
                    }
                ]
            },
            {
                "name": "我的助手",
                "sub_button": [
                    {
                        "type": "view",
                        "name": "快递查询",
                        "url": "http://kd.mmmm6.com",
                        "sub_button": [ ]
                    },

                    {
                        "type": "click",
                        "name": "联系我们",
                        "key": "TEL_CALL",
                        "sub_button": [ ]
                    }
                ]
            }
        ]
    }';

$message_name = '官方网';
$link_config = 'http://mp.weixin.qq.com/s?__biz=MzA5NzcxNjM3MQ==&mid=207351453&idx=2&sn=6ae645fcefa34543d29466d55bf99c82#rd';
$config_good_pic = 'http://m.020369.com/Public/Plugin/umeditor/php/upload/20150406/1428297272533.jpg';
$headimgurl = 'http://m.020369.com/Public/Plugin/umeditor/php/upload/20150406/1428297272533.jpg';
?>

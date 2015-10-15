-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015-08-18 06:39:42
-- 服务器版本: 5.5.25
-- PHP 版本: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `a0504123149`
--

-- --------------------------------------------------------

--
-- 表的结构 `wemall_access`
--

CREATE TABLE IF NOT EXISTS `wemall_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_admin`
--

CREATE TABLE IF NOT EXISTS `wemall_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wemall_admin`
--

INSERT INTO `wemall_admin` (`id`, `username`, `password`, `time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2015-07-12 03:05:38');

-- --------------------------------------------------------

--
-- 表的结构 `wemall_alipay`
--

CREATE TABLE IF NOT EXISTS `wemall_alipay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alipayname` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '֧',
  `partner` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'id',
  `key` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ȫ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_good`
--

CREATE TABLE IF NOT EXISTS `wemall_good` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `name` text NOT NULL,
  `yongjin` text NOT NULL,
  `price` text NOT NULL,
  `commision` text NOT NULL,
  `old_price` text NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `status` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `wemall_good`
--

INSERT INTO `wemall_good` (`id`, `menu_id`, `sort`, `name`, `yongjin`, `price`, `commision`, `old_price`, `image`, `detail`, `status`, `time`) VALUES
(1, 1, 1, '测试，加入我们', '', '0.1', '0.001', '380', '559a010e5a995.jpg', '<p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348822229475.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348822229475.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348822241867.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348822241867.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348822264712.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348822264712.jpg"/></p><p><br/></p><span id="_baidu_bookmark_start_2" style="line-height: 0px; display: none;">‍</span>', 1, '2015-07-11 09:35:59'),
(2, 1, 3, '戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）', '', '699', '100', '5999', '559a02269f437.jpg', '<p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457855507.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457855507.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457883722.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457883722.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457906521.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457906521.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457942443.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457942443.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457978521.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457978521.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458008110.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458008110.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458031709.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458031709.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458061.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458061.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458104017.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458104017.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458128817.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458128817.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458164447.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458164447.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458187567.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458187567.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458215940.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458215940.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458253347.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458253347.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458273516.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458273516.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458325927.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458325927.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458352588.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458352588.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458381783.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458381783.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458413404.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458413404.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458434363.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458434363.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458467693.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458467693.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458494305.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458494305.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458514032.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458514032.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458543782.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458543782.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458573736.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458573736.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458611144.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458611144.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458645625.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458645625.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/143464586713.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/143464586713.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458697800.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458697800.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458727066.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458727066.jpg"/></p><p><br/></p>', 1, '2015-07-23 16:38:26'),
(3, 1, 2, '美国森盾终身无耗材空气净化器，雾霾，PM2.5,除甲醛', '', '2980', '980', '5980', '559a01e55ad66.jpg', '<p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761436558.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761436558.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761465084.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761465084.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761483499.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761483499.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761517349.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761517349.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761542316.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761542316.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/143487615885.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/143487615885.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761627175.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761627175.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761736399.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761736399.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761779255.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761779255.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/1434876180747.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/1434876180747.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761844107.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761844107.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761871883.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761871883.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761901807.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761901807.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761942196.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761942196.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761978641.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348761978641.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348762017170.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348762017170.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348762156089.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/14348762156089.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/1434876217757.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/1434876217757.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/1434876226898.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150621/1434876226898.jpg"/></p><p style="text-align: center;"><br/></p>', 1, '2015-07-23 16:38:34'),
(4, 1, 4, '戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（银色）', '', '529', '100', '4999', '559a028f06acf.jpg', '<p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457855507.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457855507.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457883722.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457883722.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457906521.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457906521.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457942443.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457942443.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457978521.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346457978521.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458008110.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458008110.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458031709.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458031709.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458061.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458061.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458104017.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458104017.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458128817.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458128817.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458164447.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458164447.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458187567.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458187567.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458215940.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458215940.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458253347.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458253347.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458273516.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458273516.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458325927.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458325927.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458352588.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458352588.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458381783.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458381783.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458413404.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458413404.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458434363.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458434363.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458467693.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458467693.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458494305.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458494305.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458514032.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458514032.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458543782.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458543782.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458573736.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458573736.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458611144.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458611144.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458645625.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458645625.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/143464586713.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/143464586713.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458697800.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458697800.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458727066.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346458727066.jpg"/></p><p><br/></p>', 1, '2015-07-23 16:38:43'),
(5, 1, 5, '美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5<黑色>', '', '2199', '300', '2980', '559a02c989ce5.jpg', '<p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453766465.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453766465.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453804246.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453804246.jpg"/></p><p><br/></p>', 1, '2015-07-23 16:38:52'),
(6, 1, 6, '美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5<白色>', '', '2199', '300', '2980', '559a02f8b34a7.jpg', '<p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453766465.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453766465.jpg"/></p><p style="text-align: center;"><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453804246.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150619/14346453804246.jpg"/></p><p><br/></p>', 1, '2015-07-23 16:38:59'),
(7, 1, 0, '龙者支付、4G双卡双待手机pos刷卡一体机、 移动金融智能终端', '', '1999', '199', '3980', '55a1370e53724.jpg', '<p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-family: 宋体; font-size: 13.5pt;">&nbsp;&nbsp;&nbsp; 在手机电话功能的基础上集合金融刷卡器，不受时间和环境的限制，全天任何时候都可以进行金融操作，为银行卡持卡人提供面向个人、家庭、商户和行业应用支付需求的一种自助刷卡支付新业务，实现实时处理，资金实时到账，为您的工作和生活保驾护航。</span><span style="color: black; font-size: 13.5pt;"></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">&nbsp;</span></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;"></span>1.<span style="font-family: &quot;Times New Roman&quot;;"></span><span style="font-family: &quot;Times New Roman&quot;;"></span></span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">不受时间、空间限制，随时、随地、随心所欲完成支付。</span><span style="color: black; font-size: 13.5pt;"></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">&nbsp;</span></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;">2.</span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">移动支付终端每台机配置一张加密卡</span><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">,</span></span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">加上一机一密，比网银、手机银行等支付方式更安全。</span><span style="color: black; font-size: 13.5pt;"></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">&nbsp;</span></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">&nbsp;</span></span><span style="color: black; font-size: 13.5pt;">3.</span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">参照人民银行及银联的收费标准。0.49% \r\n、0.78%&nbsp; 35封顶三种费率</span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">&nbsp;</span></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;">4.</span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">实现了</span><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">T+0</span></span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">，交易即时完成，资金实时到帐。是目前最便捷的转帐工具之一</span><span style="color: black; font-size: 13.5pt;"></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">&nbsp;</span></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">&nbsp;</span></span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">如果从此不再跑银行，也不用排队……</span><span style="color: black; font-size: 13.5pt;"></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-family: 宋体; font-size: 13.5pt;">如果银行可以如影随形地跟着我，随时随地为我服务……</span><span style="color: black; font-size: 13.5pt;"></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-family: 宋体; font-size: 13.5pt;">如果</span><span style="color: black; font-size: 13.5pt;"><span style="font-family: &quot;Times New Roman&quot;;">ATM</span></span><span style="color: black; font-family: 宋体; font-size: 13.5pt;">机可以缩小，放进我自己的口袋……</span><span style="color: black; font-size: 13.5pt;"></span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-family: 宋体; font-size: 13.5pt;">如果我，想付就付……&nbsp; 服务热线：400-0899-512</span></strong></span></span></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-family: 宋体; font-size: 13.5pt;"><br/></span></strong></span></span></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/14365846687897.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/14365846687897.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/14365846825743.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/14365846825743.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/1436584700919.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/1436584700919.jpg"/></p><p><img src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/14365847186468.jpg" _src="http://mall.020369.com/Public/Plugin/umeditor/php/upload/20150711/14365847186468.jpg"/></p><p align="left" style="margin: 0cm 0cm 0pt;"><span style="color: rgb(204, 0, 0);"><span style="font-size: 18px;"><strong><span style="color: black; font-family: 宋体; font-size: 13.5pt;"><br/></span></strong></span></span></p><p align="left"></p>', 1, '2015-07-23 16:39:09');

-- --------------------------------------------------------

--
-- 表的结构 `wemall_info`
--

CREATE TABLE IF NOT EXISTS `wemall_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `notification` text NOT NULL,
  `theme` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wemall_info`
--

INSERT INTO `wemall_info` (`id`, `name`, `notification`, `theme`) VALUES
(1, '直销360分销系统', '欢迎使用直销360分销系统', 'default');

-- --------------------------------------------------------

--
-- 表的结构 `wemall_mail`
--

CREATE TABLE IF NOT EXISTS `wemall_mail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `smtp` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `on` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_member`
--

CREATE TABLE IF NOT EXISTS `wemall_member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_menu`
--

CREATE TABLE IF NOT EXISTS `wemall_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `wemall_menu`
--

INSERT INTO `wemall_menu` (`id`, `name`, `pid`) VALUES
(1, '主菜单只能修改不能删', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wemall_node`
--

CREATE TABLE IF NOT EXISTS `wemall_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_order`
--

CREATE TABLE IF NOT EXISTS `wemall_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `totalprice` text NOT NULL,
  `pay_style` varchar(255) NOT NULL,
  `pay_status` tinyint(3) unsigned NOT NULL,
  `note` text NOT NULL,
  `order_status` tinyint(3) unsigned NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cartdata` text NOT NULL,
  `order_info` text NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `shouhuoname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `order` (`order_status`),
  KEY `orderid` (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- 转存表中的数据 `wemall_order`
--

INSERT INTO `wemall_order` (`id`, `user_id`, `orderid`, `totalprice`, `pay_style`, `pay_status`, `note`, `order_status`, `time`, `cartdata`, `order_info`, `address`, `phone`, `shouhuoname`) VALUES
(63, 82, '201506161343317', '0.01', '微信支付', 0, '12631212', 2, '2015-06-16 09:15:07', '[{"name":"黛莱美多重修护面膜","num":"1","price":"0.01"}]', '', '上海市,上海市,长宁区,繁兴路180号', '15818257066', '董康'),
(64, 82, '201506161704269', '0.01', '微信支付', 0, '', 2, '2015-06-16 09:14:20', '[{"name":"微信精灵","num":"1","price":"0.01"}]', '', '北京市,北京市,崇文区,你', '15818257066', '董康'),
(70, 84, '201506162001261', '0.01', '微信支付', 1, '', 2, '2015-07-06 04:00:38', '[{"name":"微信精灵","num":"1","price":"0.01"}]', '', '上海市,上海市,闸北区,繁兴路180号', '15618257066', '牛绍芬'),
(71, 86, '201506162357073', '0.01', '微信支付', 1, '', 2, '2015-06-17 16:03:52', '[{"name":"微信精灵","num":"1","price":"0.01"}]', '', '北京市,北京市,宣武区,不可斤斤计较', '13423888079', '羽绒服'),
(75, 98, '201506171347597', '380.00', '微信支付', 1, '1538744', 0, '2015-06-17 05:55:50', '[{"name":"加粉精灵","num":"1","price":"380"}]', '', '云南省,文山州,文山县,味道文山', '15187616466', '陈羽'),
(69, 82, '201506161724232', '0.01', '微信支付', 1, '', 2, '2015-06-16 09:34:39', '[{"name":"微信精灵","num":"1","price":"0.01"}]', '', '天津市,天津市,河东区,123', '15818257066', '董康'),
(74, 85, '201506171333187', '380.00', '微信支付', 0, '1254445', 0, '2015-06-17 05:33:18', '[{"name":"加粉精灵","num":"1","price":"380"}]', '', '上海市,上海市,卢湾区,测试', '15618257066', '贷款'),
(76, 98, '201506171353063', '380.00', '微信支付', 0, '1538744', 0, '2015-06-17 05:53:06', '[{"name":"加粉精灵","num":"1","price":"380"}]', '', '云南省,文山州,文山县,味道文山', '15187616466', '陈羽'),
(77, 103, '201506171413358', '380.00', '微信支付', 0, 'jpj790806', 0, '2015-06-17 06:13:35', '[{"name":"加粉精灵","num":"1","price":"380"}]', '', '山东省,日照市,莒县,山东省日照市莒县城阳北路66号', '13806335391', '贾节菊'),
(78, 100, '201506171431031', '0.01', '微信支付', 1, 'BM4037', 2, '2015-07-06 04:00:38', '[{"name":"快速加入代理链接","num":"1","price":"0.01"}]', '', '北京市,北京市,怀柔区,北京', '18911810524', '王硕'),
(81, 87, '201506171554301', '0.01', '微信支付', 1, '330440523', 2, '2015-07-06 04:00:38', '[{"name":"快速加入代理链接","num":"1","price":"0.01"}]', '', '北京市,北京市,朝阳区,cell', '13800138000', '吴乾坤'),
(80, 108, '201506171510014', '380.00', '微信支付', 1, 'LiZChary', 0, '2015-06-17 07:10:21', '[{"name":"加粉精灵","num":"1","price":"380"}]', '', '浙江省,宁波市,鄞州区,浙江省宁波市鄞州区高桥镇秀丰路', '15558407838', '李臻'),
(82, 133, '201506171702116', '0.01', '微信支付', 1, '405352747', 2, '2015-07-06 04:00:38', '[{"name":"快速加入代理链接","num":"1","price":"0.01"}]', '', '广东省,深圳市,宝安区,龙华新区观澜街道人民路107号', '13760333652', '张彦波'),
(83, 152, '201506171921293', '380.00', '微信支付', 0, 'luyi5555', 0, '2015-06-17 11:21:29', '[{"name":"加粉精灵","num":"1","price":"380"}]', '', '山西省,晋城市,龙港镇,公民明', '13029899999', '家里'),
(84, 82, '201506172308334', '0.01', '微信支付', 1, '1212', 0, '2015-06-17 15:08:43', '[{"name":"快速加入代理链接","num":"1","price":"0.01"}]', '', '上海市,上海市,卢湾区,攻击力', '15818257066', '董康'),
(85, 168, '201506172348208', '0.01', '微信支付', 1, '12345', 0, '2015-06-17 15:48:39', '[{"name":"快速加入代理链接","num":"1","price":"0.01"}]', '', '天津市,天津市,河北区,测试', '13800138000', '测试'),
(86, 81, '201507061258251', '0.01', '微信支付', 1, '330440523', 2, '2015-07-06 04:59:37', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '重庆市,重庆市,九龙坡区,从而', '15300082935', '卖源码'),
(87, 178, '201507061746131', '0.01', '微信支付', 1, '', 0, '2015-07-11 00:49:23', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '天津市,天津市,河北区,觉得就到家', '13666666666', 'ID卡的'),
(88, 184, '201507062101185', '0.01', '微信支付', 1, '32568952', 0, '2015-07-06 13:01:40', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '重庆市,重庆市,九龙坡区,晚上', '15856235682', '黄建强'),
(89, 188, '201507062258241', '5960.00', '微信支付', 0, '哈哈哈', 0, '2015-07-06 14:58:24', '[{"name":"美国森盾终身无耗材空气净化器，雾霾，PM2.5,除甲醛","num":"2","price":"2980"}]', '', '北京市,北京市,东城区,入团申请书', '18862313312', '吴荣伟'),
(90, 190, '201507062312206', '0.01', '微信支付', 1, '饿死罚恶恶', 0, '2015-07-11 00:49:13', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '湖北省,武汉市,江岸区,vasfesfea', '13811111111', '事实上'),
(91, 191, '201507062353157', '0.01', '微信支付', 1, '', 0, '2015-07-06 15:53:38', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '河北省,廊坊市,固安镇,测试一下', '13541855055', '看见'),
(92, 191, '201507070228218', '0.01', '微信支付', 1, '', 0, '2015-07-11 00:49:00', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '河北省,廊坊市,永清县,测试一下', '13541855055', '看见'),
(93, 194, '201507070812122', '2199.00', '微信支付', 0, '不能说的秘密', 0, '2015-07-07 00:12:12', '[{"name":"美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5&lt;黑色&gt;","num":"1","price":"2199"}]', '', '重庆市,重庆市,九龙坡区,测试中测试中', '15312649823', '测试中'),
(94, 197, '201507071004318', '0.01', '微信支付', 1, '很好很好很好', 0, '2015-07-07 02:04:47', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '北京市,北京市,东城区,呵呵哈哈哈', '18510362698', '张吉凯'),
(95, 199, '201507071222007', '699.00', '微信支付', 0, 'j j k k', 0, '2015-07-07 04:22:00', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '', '甘肃省,兰州市,,土同志', '15294181385', '交流'),
(96, 200, '201507071401049', '0.01', '微信支付', 1, '', 0, '2015-07-11 00:48:51', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '辽宁省,沈阳市,沈河区,呵呵哈哈哈', '8555', '嘿嘿'),
(97, 200, '201507071408406', '0.01', '微信支付', 1, '', 0, '2015-07-07 06:09:20', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '辽宁省,沈阳市,沈河区,嘿嘿', '8555', '嘿嘿'),
(98, 200, '201507101452143', '0.01', '微信支付', 1, '', 2, '2015-08-07 04:03:35', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12580","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '辽宁省,沈阳市,沈河区,考虑考虑', '8555', '嘿嘿'),
(99, 200, '201507101454153', '0.01', '微信支付', 1, '', 0, '2015-07-11 11:20:00', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12306","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '天津市,天津市,和平区,哦了啦咯了', '8555', '嘿嘿'),
(100, 205, '201507101534321', '2199.00', '微信支付', 0, '', 0, '2015-07-10 07:34:32', '[{"name":"美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5&lt;黑色&gt;","num":"1","price":"2199"}]', '', '上海市,上海市,,ggg', '17705280002', 'wei'),
(101, 207, '201507101639144', '2199.00', '微信支付', 0, 'Haagou', 0, '2015-07-10 08:39:14', '[{"name":"美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5&lt;黑色&gt;","num":"1","price":"2199"}]', '', '广东省,深圳市,宝安区,西乡大道', '18675545551', '李佳晔'),
(102, 81, '201507102147199', '0.01', '微信支付', 1, '', 2, '2015-07-11 13:59:20', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12580","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '山西省,晋城市,高平市,从而', '15300082935', '卖源码'),
(103, 175, '201507110120456', '0.01', '微信支付', 1, '', 2, '2015-07-11 11:19:41', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12580","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '上海市,上海市,黄浦区,测试', '13423777013', '测试'),
(104, 215, '201507110138515', '0.01', '微信支付', 1, '', 2, '2015-08-07 04:03:35', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12306","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '上海市,上海市,静安区,1的的', '1111', '豪'),
(105, 215, '201507110140002', '0.01', '微信支付', 1, '', 2, '2015-08-07 04:03:35', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12306","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '重庆市,重庆市,江北区,好好', '1111', '豪'),
(106, 216, '201507110345564', '2199.00', '微信支付', 0, '', 0, '2015-07-11 11:18:59', '[{"name":"美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5&lt;黑色&gt;","num":"1","price":"2199"}]', '{"num":"2015","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '重庆市,重庆市,沙坪坝区,不会和', '13813813838', '方法'),
(107, 81, '201507110844208', '699.00', '微信支付', 1, '', 2, '2015-07-11 11:18:51', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '{"num":"12036","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '北京市,北京市,东城区,吴', '15300000000', '吴怡华'),
(108, 81, '201507110845405', '699.00', '微信支付', 1, '', 2, '2015-07-11 11:18:45', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '{"num":"12036","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '重庆市,重庆市,九龙坡区,25874', '15300000000', '吴怡华'),
(109, 208, '201507110923311', '0.01', '微信支付', 1, '', 2, '2015-07-11 11:18:33', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12306","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '河北省,承德市,下板城镇,111', '1111', '1111'),
(110, 81, '201507110937417', '2199.00', '微信支付', 1, '', 2, '2015-07-11 11:18:24', '[{"name":"美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5&lt;黑色&gt;","num":"1","price":"2199"}]', '{"num":"110","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '北京市,北京市,宣武区,测试', '15300000000', '吴怡华'),
(111, 81, '201507111007033', '2177.01', '微信支付', 1, '', 2, '2015-07-11 11:18:16', '[{"name":"美国艾奥尼克（ionicpro）空气净化器， TA500静音除雾霾PM2.5&lt;黑色&gt;","num":"1","price":"2177.01"}]', '{"num":"12306","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '重庆市,重庆市,九龙坡区,从而', '15300000000', '吴怡华'),
(112, 81, '201507111210402', '0.01', '微信支付', 1, '', 2, '2015-07-11 11:08:12', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"3051029945","name":"\\u987a\\u4e30\\u901f\\u8fd0"}', '重庆市,重庆市,九龙坡区,微信', '15300000000', '吴怡华'),
(113, 81, '201507111211549', '699.00', '微信支付', 1, '', 2, '2015-07-11 11:08:10', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '{"num":"3052261208","name":"\\u5b85\\u6025\\u9001"}', '河北省,廊坊市,固安县,测试', '15300000000', '吴怡华'),
(114, 219, '201507111218248', '0.01', '微信支付', 0, '', 0, '2015-07-11 04:18:24', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '', '北京市,北京市,朝阳区,呵呵哈哈哈哈', '13911001340', '郭成'),
(115, 175, '201507111422468', '0.01', '微信支付', 1, '', 2, '2015-08-07 04:03:35', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"5680489630","name":"\\u987a\\u4e30\\u5feb\\u9012"}', '重庆市,重庆市,沙坪坝区,测试', '13423777013', '测试'),
(116, 220, '201507111423184', '0.01', '微信支付', 1, '', 2, '2015-08-07 04:03:35', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"12306","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '浙江省,宁波市,鄞州区,天童南路399号', '15990555587', '15990555587'),
(117, 81, '201507111430002', '0.01', '微信支付', 1, '', 2, '2015-07-11 11:08:07', '[{"name":"测试，加入我们","num":"1","price":"0.01"}]', '{"num":"3052214563","name":"\\u767e\\u4e16\\u6c47\\u901a"}', '河北省,唐山市,开平区,与测试', '15300000000', '吴怡华'),
(118, 208, '201507111912527', '0.10', '微信支付', 1, '', 2, '2015-08-07 04:03:35', '[{"name":"测试，加入我们","num":"1","price":"0.1"}]', '{"num":"12306","name":"\\u65cf\\u957f\\u901a\\u77e5\\u4e66"}', '河北省,唐山市,开平区,Q', '1111', '1111'),
(119, 228, '201507111944304', '699.00', '微信支付', 0, '', 0, '2015-07-11 11:44:30', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '', '重庆市,重庆市,九龙坡区,百度', '56999', '百度'),
(120, 81, '201507112307065', '699.00', '微信支付', 0, '丰润区', 0, '2015-07-11 15:07:06', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '', '河北省,唐山市,丰润区,测试货到付款', '15300000000', '吴怡华'),
(121, 81, '201507112307101', '699.00', '微信支付', 1, '丰润区', 2, '2015-07-12 00:22:32', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '{"num":"12580","name":"\\u5706\\u901a"}', '河北省,唐山市,丰润区,测试货到付款', '15300000000', '吴怡华'),
(122, 248, '201507120043395', '0.10', '微信支付', 1, '', 0, '2015-07-11 16:44:19', '[{"name":"测试，加入我们","num":"1","price":"0.1"}]', '', '上海市,上海市,徐汇区,xndnndndss\n', '15151515154', 'yq'),
(123, 81, '201507120106391', '699.00', '微信支付', 0, '', 0, '2015-07-11 17:06:39', '[{"name":"戴克（DYKE）空气净化器 A400 家用无耗材除雾霾PM2.5终身无耗材（金色）","num":"1","price":"699"}]', '', '河北省,廊坊市,固安镇,把腿就跑', '15300000000', '吴怡华'),
(124, 50001, '201508141607537', '2980.00', '微信支付', 1, '', 2, '2015-08-14 08:13:31', '[{"name":"美国森盾终身无耗材空气净化器，雾霾，PM2.5,除甲醛","num":"1","price":"2980"}]', '{"num":"","name":""}', '山东省,济南市,市中区,特色家常', '198410', '特色家常'),
(125, 50001, '201508141613283', '0.10', '微信支付', 1, '特色家常', 2, '2015-08-18 06:35:32', '[{"name":"测试，加入我们","num":"1","price":"0.1"}]', '', '北京市,北京市,东城区,特色家常', '198410', '特色家常'),
(126, 50001, '201508161417476', '0.10', '微信支付', 1, '', 2, '2015-08-16 06:54:13', '[{"name":"测试，加入我们","num":"1","price":"0.1"}]', '{"num":"","name":""}', '北京市,北京市,东城区,乞丐省乞丐市乞丐村', '198410', '乞丐');

-- --------------------------------------------------------

--
-- 表的结构 `wemall_order_level`
--

CREATE TABLE IF NOT EXISTS `wemall_order_level` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `level_id` int(11) unsigned NOT NULL,
  `level_type` tinyint(3) unsigned NOT NULL,
  `price` float(6,2) unsigned NOT NULL,
  `active_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orderid` (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=333 ;

--
-- 转存表中的数据 `wemall_order_level`
--

INSERT INTO `wemall_order_level` (`id`, `order_id`, `status`, `level_id`, `level_type`, `price`, `active_time`) VALUES
(1, '201504231550177', 1, 14, 1, 2.50, NULL),
(2, '201504231552321', 1, 15, 1, 2.50, NULL),
(3, '201504231552321', 1, 14, 2, 1.50, NULL),
(4, '201504231554222', 0, 15, 1, 2.50, NULL),
(5, '201504231554222', 0, 14, 2, 1.50, NULL),
(6, '201504231554275', 1, 18, 1, 2.50, NULL),
(7, '201504231554275', 1, 15, 2, 1.50, NULL),
(8, '201504231554275', 1, 14, 3, 1.00, NULL),
(9, '201504231611081', 1, 14, 1, 25.00, NULL),
(10, '201504231614176', 1, 17, 1, 25.00, NULL),
(11, '201504231614176', 1, 14, 2, 15.00, NULL),
(12, '201504231617054', 1, 20, 1, 25.00, NULL),
(13, '201504231617054', 1, 17, 2, 15.00, NULL),
(14, '201504231617054', 1, 14, 3, 10.00, NULL),
(15, '201504231619359', 1, 21, 1, 25.00, NULL),
(16, '201504231619359', 1, 20, 2, 15.00, NULL),
(17, '201504231619359', 1, 17, 3, 10.00, NULL),
(18, '201504240950567', 0, 15, 1, 25.00, NULL),
(19, '201504240950567', 0, 14, 2, 15.00, NULL),
(20, '201504240952105', 0, 15, 1, 2.50, NULL),
(21, '201504240952105', 0, 14, 2, 1.50, NULL),
(22, '201504240952569', 1, 15, 1, 25.00, NULL),
(23, '201504240952569', 1, 14, 2, 15.00, NULL),
(24, '201504272240588', 1, 28, 1, 0.00, NULL),
(25, '201504272307408', 2, 28, 1, 0.00, '2015-05-14 04:52:05'),
(26, '201504272332013', 2, 28, 1, 0.00, '2015-05-21 04:18:42'),
(27, '201504280844263', 1, 28, 1, 0.00, NULL),
(28, '201504280845391', 1, 28, 1, 0.00, NULL),
(29, '201504280940587', 1, 28, 1, 0.00, NULL),
(30, '201504281100372', 1, 83, 1, 0.00, NULL),
(31, '201504281116541', 1, 28, 1, 0.00, NULL),
(32, '201504281121541', 0, 104, 1, 0.00, NULL),
(33, '201504281121541', 0, 28, 2, 0.00, NULL),
(34, '201504281127164', 3, 104, 1, 0.00, '2015-05-16 00:48:49'),
(35, '201504281127164', 2, 28, 2, 0.00, '2015-05-16 00:48:49'),
(36, '201504281131244', 1, 93, 1, 0.00, NULL),
(37, '201504281210406', 1, 28, 1, 0.00, NULL),
(38, '201504281212179', 1, 117, 1, 0.00, NULL),
(39, '201504281212179', 1, 104, 2, 0.00, NULL),
(40, '201504281212179', 1, 28, 3, 0.00, NULL),
(41, '201504281321346', 1, 93, 1, 0.00, NULL),
(42, '201504281400243', 1, 59, 1, 0.00, NULL),
(43, '201504281453239', 1, 50, 1, 0.00, NULL),
(44, '201504281505024', 1, 50, 1, 0.00, NULL),
(45, '201504281518121', 1, 93, 1, 0.00, NULL),
(46, '201504281635142', 1, 28, 1, 0.00, NULL),
(47, '201504281639535', 0, 50, 1, 0.00, NULL),
(48, '201504281651025', 1, 50, 1, 0.00, NULL),
(49, '201504281926109', 1, 117, 1, 0.00, NULL),
(50, '201504281926109', 1, 104, 2, 0.00, NULL),
(51, '201504281926109', 1, 28, 3, 0.00, NULL),
(52, '201504282108395', 0, 28, 1, 0.00, NULL),
(53, '201504282109104', 0, 28, 1, 0.00, NULL),
(54, '201504282110091', 1, 28, 1, 0.00, NULL),
(55, '201504282129563', 3, 106, 1, 0.00, '2015-05-21 06:55:23'),
(56, '201504282129563', 2, 28, 2, 0.00, '2015-05-21 06:55:23'),
(57, '201504282136322', 3, 106, 1, 0.00, '2015-05-21 06:28:05'),
(58, '201504282136322', 2, 28, 2, 0.00, '2015-05-21 06:28:05'),
(59, '201504282143377', 3, 106, 1, 0.00, '2015-05-21 06:28:05'),
(60, '201504282143377', 2, 28, 2, 0.00, '2015-05-21 06:28:05'),
(61, '201504282222487', 2, 51, 1, 0.00, '2015-05-21 06:28:05'),
(62, '201504282222487', 2, 28, 2, 0.00, '2015-05-21 06:28:05'),
(63, '201504290046012', 0, 153, 1, 19.60, NULL),
(64, '201504290046012', 0, 117, 2, 14.70, NULL),
(65, '201504290046012', 0, 104, 3, 9.80, NULL),
(66, '201504290609549', 2, 39, 1, 0.00, '2015-05-21 06:28:05'),
(67, '201504290732577', 0, 117, 1, 0.00, NULL),
(68, '201504290732577', 0, 104, 2, 0.00, NULL),
(69, '201504290732577', 0, 28, 3, 0.00, NULL),
(70, '201504290833013', 0, 59, 1, 0.00, NULL),
(71, '201504290850126', 1, 59, 1, 0.00, NULL),
(72, '201504290857336', 1, 28, 1, 0.00, NULL),
(73, '201504290858122', 3, 117, 1, 0.00, '2015-05-17 09:25:17'),
(74, '201504290858122', 3, 104, 2, 0.00, '2015-05-17 09:25:17'),
(75, '201504290858122', 2, 28, 3, 0.00, '2015-05-17 09:25:17'),
(76, '201504290904566', 3, 108, 1, 0.00, '2015-05-21 06:28:05'),
(77, '201504290916071', 0, 153, 1, 0.00, NULL),
(78, '201504290916071', 0, 117, 2, 0.00, NULL),
(79, '201504290916071', 0, 104, 3, 0.00, NULL),
(80, '201504290924555', 1, 153, 1, 0.00, NULL),
(81, '201504290924555', 1, 117, 2, 0.00, NULL),
(82, '201504290924555', 1, 104, 3, 0.00, NULL),
(83, '201504290959252', 0, 28, 1, 0.00, NULL),
(84, '201504291004301', 2, 28, 1, 0.00, '2015-05-21 06:28:05'),
(85, '201504291255296', 1, 59, 1, 0.00, NULL),
(86, '201504291255325', 0, 117, 1, 0.00, NULL),
(87, '201504291255325', 0, 104, 2, 0.00, NULL),
(88, '201504291255325', 0, 28, 3, 0.00, NULL),
(89, '201504291259332', 1, 117, 1, 0.00, NULL),
(90, '201504291259332', 1, 104, 2, 0.00, NULL),
(91, '201504291259332', 1, 28, 3, 0.00, NULL),
(92, '201504291303116', 1, 93, 1, 0.00, NULL),
(93, '201504291308223', 2, 51, 1, 0.00, '2015-05-21 06:28:05'),
(94, '201504291308223', 2, 28, 2, 0.00, '2015-05-21 06:28:05'),
(95, '201504291309573', 0, 59, 1, 0.00, NULL),
(96, '201504291313295', 1, 59, 1, 0.00, NULL),
(97, '201504291313542', 0, 117, 1, 0.00, NULL),
(98, '201504291313542', 0, 104, 2, 0.00, NULL),
(99, '201504291313542', 0, 28, 3, 0.00, NULL),
(100, '201504291317133', 1, 59, 1, 0.00, NULL),
(101, '201504291318446', 1, 59, 1, 0.00, NULL),
(102, '201504291322154', 0, 117, 1, 0.00, NULL),
(103, '201504291322154', 0, 104, 2, 0.00, NULL),
(104, '201504291322154', 0, 28, 3, 0.00, NULL),
(105, '201504291324471', 0, 59, 1, 0.00, NULL),
(106, '201504291335089', 0, 59, 1, 0.00, NULL),
(107, '201504291349474', 1, 50, 1, 0.00, NULL),
(108, '201504291351158', 0, 106, 1, 0.00, NULL),
(109, '201504291351158', 0, 28, 2, 0.00, NULL),
(110, '201504291352109', 1, 106, 1, 0.00, NULL),
(111, '201504291352109', 1, 28, 2, 0.00, NULL),
(112, '201504291353177', 0, 235, 1, 0.00, NULL),
(113, '201504291353177', 0, 59, 2, 0.00, NULL),
(114, '201504291357481', 1, 59, 1, 0.00, NULL),
(115, '201504291401008', 1, 59, 1, 0.00, NULL),
(116, '201504291403396', 0, 112, 1, 0.00, NULL),
(117, '201504291403396', 0, 93, 2, 0.00, NULL),
(118, '201504291414098', 0, 112, 1, 0.00, NULL),
(119, '201504291414098', 0, 93, 2, 0.00, NULL),
(120, '201504291414433', 2, 51, 1, 0.00, '2015-05-21 06:28:05'),
(121, '201504291414433', 2, 28, 2, 0.00, '2015-05-21 06:28:05'),
(122, '201504291421034', 0, 112, 1, 0.00, NULL),
(123, '201504291421034', 0, 93, 2, 0.00, NULL),
(124, '201504291422449', 0, 56, 1, 0.00, NULL),
(125, '201504291431473', 0, 104, 1, 0.00, NULL),
(126, '201504291431473', 0, 28, 2, 0.00, NULL),
(127, '201504291434378', 3, 104, 1, 0.00, '2015-05-16 00:48:41'),
(128, '201504291434378', 2, 28, 2, 0.00, '2015-05-16 00:48:41'),
(129, '201504291438437', 1, 160, 1, 0.00, NULL),
(130, '201504291438437', 1, 106, 2, 0.00, NULL),
(131, '201504291438437', 1, 28, 3, 0.00, NULL),
(132, '201504291443329', 1, 117, 1, 0.00, NULL),
(133, '201504291443329', 1, 104, 2, 0.00, NULL),
(134, '201504291443329', 1, 28, 3, 0.00, NULL),
(135, '201504291452107', 2, 259, 1, 0.00, '2015-05-21 07:03:36'),
(136, '201504291452107', 2, 51, 2, 0.00, '2015-05-21 07:03:36'),
(137, '201504291452107', 2, 28, 3, 0.00, '2015-05-21 07:03:36'),
(138, '201504291500522', 0, 160, 1, 0.00, NULL),
(139, '201504291500522', 0, 106, 2, 0.00, NULL),
(140, '201504291500522', 0, 28, 3, 0.00, NULL),
(141, '201504291512285', 3, 117, 1, 0.00, '2015-05-21 07:56:02'),
(142, '201504291512285', 3, 104, 2, 0.00, '2015-05-21 07:56:02'),
(143, '201504291512285', 2, 28, 3, 0.00, '2015-05-21 07:56:02'),
(144, '201504291514014', 3, 83, 1, 0.00, '2015-05-21 07:56:02'),
(145, '201504291516058', 1, 117, 1, 0.00, NULL),
(146, '201504291516058', 1, 104, 2, 0.00, NULL),
(147, '201504291516058', 1, 28, 3, 0.00, NULL),
(148, '201504291520094', 1, 259, 1, 0.00, NULL),
(149, '201504291520094', 1, 51, 2, 0.00, NULL),
(150, '201504291520094', 1, 28, 3, 0.00, NULL),
(151, '201504291533378', 0, 160, 1, 0.00, NULL),
(152, '201504291533378', 0, 106, 2, 0.00, NULL),
(153, '201504291533378', 0, 28, 3, 0.00, NULL),
(154, '201504291534005', 0, 160, 1, 0.00, NULL),
(155, '201504291534005', 0, 106, 2, 0.00, NULL),
(156, '201504291534005', 0, 28, 3, 0.00, NULL),
(157, '201504291535004', 1, 160, 1, 0.00, NULL),
(158, '201504291535004', 1, 106, 2, 0.00, NULL),
(159, '201504291535004', 1, 28, 3, 0.00, NULL),
(160, '201504291536314', 0, 59, 1, 0.00, NULL),
(161, '201504291538419', 1, 117, 1, 0.00, NULL),
(162, '201504291538419', 1, 104, 2, 0.00, NULL),
(163, '201504291538419', 1, 28, 3, 0.00, NULL),
(164, '201504291557565', 0, 93, 1, 0.00, NULL),
(165, '201504291558377', 1, 59, 1, 0.00, NULL),
(166, '201504291601189', 0, 73, 1, 0.00, NULL),
(167, '201504291605534', 0, 59, 1, 0.00, NULL),
(168, '201504291613198', 1, 59, 1, 0.00, NULL),
(169, '201504291618161', 4, 160, 1, 0.00, NULL),
(170, '201504291618161', 4, 106, 2, 0.00, NULL),
(171, '201504291618161', 4, 28, 3, 0.00, NULL),
(172, '201504291622085', 1, 107, 1, 0.00, NULL),
(173, '201504291634164', 0, 160, 1, 0.00, NULL),
(174, '201504291634164', 0, 106, 2, 0.00, NULL),
(175, '201504291634164', 0, 28, 3, 0.00, NULL),
(176, '201504291644235', 0, 93, 1, 0.00, NULL),
(177, '201504291707367', 1, 93, 1, 0.00, NULL),
(178, '201504291709131', 1, 93, 1, 0.00, NULL),
(179, '201504291715259', 1, 73, 1, 0.00, NULL),
(180, '201504291725216', 1, 164, 1, 0.00, NULL),
(181, '201504291725216', 1, 51, 2, 0.00, NULL),
(182, '201504291725216', 1, 28, 3, 0.00, NULL),
(183, '201504291729535', 1, 73, 1, 0.00, NULL),
(184, '201504291744522', 1, 159, 1, 0.00, NULL),
(185, '201504291744522', 1, 39, 2, 0.00, NULL),
(186, '201504291827338', 1, 280, 1, 0.00, NULL),
(187, '201504291827338', 1, 259, 2, 0.00, NULL),
(188, '201504291827338', 1, 51, 3, 0.00, NULL),
(189, '201504291830599', 1, 117, 1, 0.00, NULL),
(190, '201504291830599', 1, 104, 2, 0.00, NULL),
(191, '201504291830599', 1, 28, 3, 0.00, NULL),
(192, '201504291833519', 1, 259, 1, 0.00, NULL),
(193, '201504291833519', 1, 51, 2, 0.00, NULL),
(194, '201504291833519', 1, 28, 3, 0.00, NULL),
(195, '201504291837311', 1, 280, 1, 0.00, NULL),
(196, '201504291837311', 1, 259, 2, 0.00, NULL),
(197, '201504291837311', 1, 51, 3, 0.00, NULL),
(198, '201504291837565', 1, 159, 1, 0.00, NULL),
(199, '201504291837565', 1, 39, 2, 0.00, NULL),
(200, '201504291959345', 0, 59, 1, 0.00, NULL),
(201, '201504292019476', 1, 117, 1, 0.00, NULL),
(202, '201504292019476', 1, 104, 2, 0.00, NULL),
(203, '201504292019476', 1, 28, 3, 0.00, NULL),
(204, '201504292021319', 1, 208, 1, 0.00, NULL),
(205, '201504292021319', 1, 117, 2, 0.00, NULL),
(206, '201504292021319', 1, 104, 3, 0.00, NULL),
(207, '201504292027119', 0, 271, 1, 0.00, NULL),
(208, '201504292027119', 0, 259, 2, 0.00, NULL),
(209, '201504292027119', 0, 51, 3, 0.00, NULL),
(210, '201504292058169', 1, 28, 1, 0.00, NULL),
(211, '201504292103258', 0, 51, 1, 0.00, NULL),
(212, '201504292103258', 0, 28, 2, 0.00, NULL),
(213, '201504292119452', 1, 83, 1, 0.00, NULL),
(214, '201504292139255', 0, 59, 1, 0.00, NULL),
(215, '201504292203275', 1, 59, 1, 0.00, NULL),
(216, '201504292243175', 1, 73, 1, 0.00, NULL),
(217, '201504292246187', 0, 188, 1, 0.00, NULL),
(218, '201504292246187', 0, 93, 2, 0.00, NULL),
(219, '201504300006529', 0, 39, 1, 0.00, NULL),
(220, '201504300008058', 1, 39, 1, 0.00, NULL),
(221, '201504300026255', 0, 160, 1, 0.00, NULL),
(222, '201504300026255', 0, 106, 2, 0.00, NULL),
(223, '201504300026255', 0, 28, 3, 0.00, NULL),
(224, '201504300027398', 1, 160, 1, 0.00, NULL),
(225, '201504300027398', 1, 106, 2, 0.00, NULL),
(226, '201504300027398', 1, 28, 3, 0.00, NULL),
(227, '201504300035509', 1, 160, 1, 0.00, NULL),
(228, '201504300035509', 1, 106, 2, 0.00, NULL),
(229, '201504300035509', 1, 28, 3, 0.00, NULL),
(230, '201504300121182', 1, 117, 1, 0.00, NULL),
(231, '201504300121182', 1, 104, 2, 0.00, NULL),
(232, '201504300121182', 1, 28, 3, 0.00, NULL),
(233, '201504300310011', 1, 138, 1, 0.00, NULL),
(234, '201504300941038', 0, 138, 1, 0.00, NULL),
(235, '201504300944327', 1, 138, 1, 0.00, NULL),
(236, '201504301014059', 0, 117, 1, 0.00, NULL),
(237, '201504301014059', 0, 104, 2, 0.00, NULL),
(238, '201504301014059', 0, 28, 3, 0.00, NULL),
(239, '201504301215031', 1, 117, 1, 0.00, NULL),
(240, '201504301215031', 1, 104, 2, 0.00, NULL),
(241, '201504301215031', 1, 28, 3, 0.00, NULL),
(242, '201504301218436', 1, 107, 1, 0.00, NULL),
(243, '201504301239485', 0, 108, 1, 0.00, NULL),
(244, '201504301845086', 1, 153, 1, 0.00, NULL),
(245, '201504301845086', 1, 117, 2, 0.00, NULL),
(246, '201504301845086', 1, 104, 3, 0.00, NULL),
(247, '201504302056134', 0, 84, 1, 0.00, NULL),
(248, '201504302117038', 0, 138, 1, 0.00, NULL),
(249, '201504302118506', 0, 84, 1, 0.00, NULL),
(250, '201504302119192', 1, 138, 1, 0.00, NULL),
(251, '201504302119452', 1, 84, 1, 0.00, NULL),
(252, '201504302122108', 0, 84, 1, 0.00, NULL),
(253, '201504302137179', 1, 138, 1, 0.00, NULL),
(254, '201504302222148', 0, 52, 1, 0.00, NULL),
(255, '201504302222148', 0, 28, 2, 0.00, NULL),
(256, '201504302231114', 1, 93, 1, 0.00, NULL),
(257, '201504302306265', 0, 375, 1, 0.00, NULL),
(258, '201504302306265', 0, 93, 2, 0.00, NULL),
(259, '201504302331309', 1, 375, 1, 0.00, NULL),
(260, '201504302331309', 1, 93, 2, 0.00, NULL),
(261, '201505010911031', 1, 159, 1, 0.00, NULL),
(262, '201505010911031', 1, 39, 2, 0.00, NULL),
(263, '201505011024534', 1, 28, 1, 0.00, NULL),
(264, '201505011253041', 1, 93, 1, 0.00, NULL),
(265, '201505012314327', 0, 138, 1, 19.60, NULL),
(266, '201505012345431', 0, 73, 1, 0.00, NULL),
(267, '201505012346098', 0, 73, 1, 0.00, NULL),
(268, '201505012347503', 1, 73, 1, 0.00, NULL),
(269, '201505012348323', 1, 73, 1, 0.00, NULL),
(270, '201505012355332', 0, 73, 1, 0.00, NULL),
(271, '201505021304175', 1, 117, 1, 0.00, NULL),
(272, '201505021304175', 1, 104, 2, 0.00, NULL),
(273, '201505021304175', 1, 28, 3, 0.00, NULL),
(274, '201505021321105', 0, 117, 1, 0.00, NULL),
(275, '201505021321105', 0, 104, 2, 0.00, NULL),
(276, '201505021321105', 0, 28, 3, 0.00, NULL),
(277, '201505021333003', 1, 235, 1, 0.00, NULL),
(278, '201505021333003', 1, 59, 2, 0.00, NULL),
(279, '201505021520105', 1, 153, 1, 0.00, NULL),
(280, '201505021520105', 1, 117, 2, 0.00, NULL),
(281, '201505021520105', 1, 104, 3, 0.00, NULL),
(282, '201505021735441', 1, 117, 1, 0.00, NULL),
(283, '201505021735441', 1, 104, 2, 0.00, NULL),
(284, '201505021735441', 1, 28, 3, 0.00, NULL),
(285, '201505021917082', 1, 229, 1, 0.00, NULL),
(286, '201505021917082', 1, 59, 2, 0.00, NULL),
(287, '201505022007574', 1, 271, 1, 0.00, NULL),
(288, '201505022007574', 1, 259, 2, 0.00, NULL),
(289, '201505022007574', 1, 51, 3, 0.00, NULL),
(290, '201505080757385', 1, 1, 1, 61.50, NULL),
(291, '201505080931221', 1, 1, 1, 5.00, NULL),
(292, '201505081928299', 1, 1, 1, 61.50, NULL),
(293, '201505091239235', 1, 1, 1, 61.50, NULL),
(294, '201505091241055', 3, 1, 1, 61.50, '2015-05-09 05:22:25'),
(295, '201505091306378', 3, 1, 1, 50.00, '2015-05-09 05:22:25'),
(296, '201505091316381', 3, 1, 1, 50.00, '2015-05-09 05:17:33'),
(297, '201505091425094', 0, 1, 1, 0.00, NULL),
(298, '201505091802031', 0, 1, 1, 61.50, NULL),
(299, '201505091803478', 1, 1, 1, 0.00, NULL),
(300, '201505100859231', 1, 1, 1, 0.00, NULL),
(301, '201505100859586', 1, 1, 1, 0.50, NULL),
(302, '201505100906164', 3, 1, 1, 30.50, '2015-05-10 01:13:33'),
(303, '201505100907276', 3, 1, 1, 30.50, '2015-05-10 01:12:19'),
(304, '201505101159332', 1, 1, 1, 0.00, NULL),
(305, '201505101212422', 1, 1, 1, 0.00, NULL),
(306, '201505101214454', 0, 1, 1, 0.00, NULL),
(307, '201505101704508', 1, 66, 1, 0.00, NULL),
(308, '201505101716167', 0, 67, 1, 0.00, NULL),
(309, '201505101716167', 0, 66, 2, 0.00, NULL),
(310, '201505101716374', 0, 67, 1, 0.00, NULL),
(311, '201505101716374', 0, 66, 2, 0.00, NULL),
(312, '201505102342226', 1, 1, 1, 0.00, NULL),
(313, '201505131830281', 0, 1, 1, 0.00, NULL),
(314, '201505131831038', 0, 1, 1, 0.50, NULL),
(315, '201506162001261', 2, 82, 1, 0.00, '2015-07-07 04:00:38'),
(316, '201506171323527', 0, 82, 1, 0.00, NULL),
(317, '201506171327566', 0, 82, 1, 62.70, NULL),
(318, '201506171333187', 0, 82, 1, 114.00, NULL),
(319, '201506171347597', 1, 82, 1, 114.00, NULL),
(320, '201506171353063', 0, 82, 1, 114.00, NULL),
(321, '201506171431031', 2, 82, 1, 0.00, '2015-07-07 04:00:38'),
(322, '201506171447377', 0, 82, 1, 114.00, NULL),
(323, '201506171510014', 1, 82, 1, 114.00, NULL),
(324, '201506171702116', 2, 82, 1, 0.00, '2015-07-07 04:00:38'),
(325, '201506171921293', 0, 86, 1, 114.00, NULL),
(326, '201506172348208', 1, 86, 1, 0.00, NULL),
(327, '201507062258241', 0, 81, 1, 294.00, NULL),
(328, '201507101639144', 0, 191, 1, 120.00, NULL),
(329, '201507110923311', 2, 81, 1, 0.00, '2015-07-12 04:34:10'),
(330, '201507111423184', 2, 81, 1, 0.00, '2015-08-08 04:03:35'),
(331, '201507111912527', 2, 81, 1, 0.00, '2015-08-08 04:03:35'),
(332, '201507111944304', 0, 81, 1, 30.00, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `wemall_role`
--

CREATE TABLE IF NOT EXISTS `wemall_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_role_user`
--

CREATE TABLE IF NOT EXISTS `wemall_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `admin_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_tx_record`
--

CREATE TABLE IF NOT EXISTS `wemall_tx_record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `price` float(6,2) NOT NULL,
  `bank_name` text NOT NULL,
  `bank_num` text NOT NULL,
  `name` text NOT NULL,
  `tel` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_user`
--

CREATE TABLE IF NOT EXISTS `wemall_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `member` tinyint(3) unsigned NOT NULL COMMENT 'ǷǻԱ',
  `ticket` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `phone` text NOT NULL,
  `weixin` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `wx_info` text NOT NULL,
  `price` float(6,2) NOT NULL,
  `jifen` int(11) unsigned NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` text NOT NULL,
  `l_id` int(11) unsigned NOT NULL COMMENT 'ϼID',
  `l_b` int(11) unsigned NOT NULL COMMENT 'ϼ',
  `l_c` int(11) unsigned NOT NULL COMMENT 'ϼ',
  `c_cnt` int(11) unsigned NOT NULL COMMENT '3',
  `b_cnt` int(11) unsigned NOT NULL COMMENT '2',
  `a_cnt` int(11) unsigned NOT NULL COMMENT '1',
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`),
  KEY `ticket` (`ticket`),
  KEY `l_id` (`l_id`),
  KEY `l_b` (`l_b`),
  KEY `l_c` (`l_c`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50002 ;

--
-- 转存表中的数据 `wemall_user`
--

INSERT INTO `wemall_user` (`id`, `uid`, `member`, `ticket`, `username`, `phone`, `weixin`, `password`, `address`, `wx_info`, `price`, `jifen`, `time`, `url`, `l_id`, `l_b`, `l_c`, `c_cnt`, `b_cnt`, `a_cnt`, `login`, `email`) VALUES
(49999, 'o80GWuHk0MjSMRDoy1a_bl2E9Kvk', 0, '', '', '', '', 'e10adc3949ba59abbe56e057f20f883e', '', '{"subscribe":1,"openid":"o80GWuHk0MjSMRDoy1a_bl2E9Kvk","nickname":"\\u5510\\u8a89\\u6cfd\\ue332\\u4e2d\\u56fd\\u5fae\\u521b\\u4e1a\\u8054\\u5408\\u4f53\\u53d1\\u8d77\\u4eba","sex":1,"language":"zh_CN","city":"\\u957f\\u6c99","province":"\\u6e56\\u5357","country":"\\u4e2d\\u56fd","headimgurl":"http:\\/\\/wx.qlogo.cn\\/mmopen\\/PiajxSqBRaEKYCWtUnWTsIBheeia6CmYfShRr4A1ic8P4rQOBdO1fU4h9U5thmICMcfjLHsSCuiacaNgrkcR1r5E1g\\/0","subscribe_time":1436668824,"remark":"","groupid":0}', 0.00, 0, '2015-08-18 06:32:01', '', 0, 0, 0, 0, 0, 0, '', ''),
(50001, '50001', 0, '', '乞丐', '198410', '', 'e10adc3949ba59abbe56e057f20f883e', '北京市,北京市,东城区,乞丐省乞丐市乞丐村', '{"nickname":"yanshi","subscribe_time":1439537261}', 0.00, 0, '2015-08-18 06:35:10', '', 0, 0, 0, 0, 0, 0, 'yanshi', 'yanshi@gmail.com');

-- --------------------------------------------------------

--
-- 表的结构 `wemall_wxconfig`
--

CREATE TABLE IF NOT EXISTS `wemall_wxconfig` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `num` text NOT NULL,
  `ini_num` text NOT NULL,
  `token` text NOT NULL,
  `appid` text NOT NULL,
  `appsecret` text NOT NULL,
  `encodingaeskey` text NOT NULL,
  `partnerid` text NOT NULL,
  `partnerkey` text NOT NULL,
  `paysignkey` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wemall_wxconfig`
--

INSERT INTO `wemall_wxconfig` (`id`, `num`, `ini_num`, `token`, `appid`, `appsecret`, `encodingaeskey`, `partnerid`, `partnerkey`, `paysignkey`) VALUES
(1, 'zhixiao360', 'gh_123456456', '123456', 'wx70c16d311d7f45ec', 'e6f0b120016550506ce6bb6bc3438490', 'M6Te15pEUWjIgNpub8blEWZPbM3PKllkk3reeUCC6hb', '1221456309', 'songningningwuqiankun11974322SNN', '');

-- --------------------------------------------------------

--
-- 表的结构 `wemall_wxmenu`
--

CREATE TABLE IF NOT EXISTS `wemall_wxmenu` (
  `menu_id` int(5) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(10) DEFAULT NULL,
  `menu_name` varchar(10) NOT NULL,
  `event_key` varchar(200) NOT NULL,
  `view_url` varchar(300) NOT NULL,
  `pid` int(5) NOT NULL DEFAULT '0',
  `listorder` varchar(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `wemall_wxmessage`
--

CREATE TABLE IF NOT EXISTS `wemall_wxmessage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `picurl` text NOT NULL,
  `url` text NOT NULL,
  `key` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `wemall_wxmessage`
--

INSERT INTO `wemall_wxmessage` (`id`, `type`, `title`, `description`, `picurl`, `url`, `key`) VALUES
(8, '1', '回复', '直销360：\r\n1、<a href="http://kd.mmmm6.com">快递查询</a>\r\n\r\n2、<a href="http://mp.weixin.qq.com/s?__biz=MzA5Njg1NTAyNw==&amp;mid=852793799&amp;idx=1&amp;sn=029976cc3e5a1210b266e69221ef0813#rd">关于佣金、提现、售后、物流详细说明</a>\r\n\r\n3、<a href="http://mp.weixin.qq.com/s?__biz=MzA5Njg1NTAyNw==&amp;mid=852793799&amp;idx=1&amp;sn=db1b48268ad387ac43063a810a9760e7#rd">看看如何挣钱</a>\r\n\r\n4、<a href="https://qianbao.baidu.com/hd/huafei?invite_code=CHDXE9AF" se_prerender_url="complete">鸿美琪家族和百度赞助1分钱充5元话费</a>', '553ed230caa26.jpg', '', 'GET_INFO'),
(12, '1', '联系我们', '联系我们：\r\n\r\n1、微信：zhixiao360\r\n\r\n2、Q  Q：852793799\r\n\r\n3、电话：<a href="tel:400-0899-512">400-0899-512</a>', '', '', 'TEL_CALL'),
(13, '1', '拍拍商城', '<center>\r\n<a href="http://shop.paipai.com/330440523">拍拍商城</a></center>\r\n', '', '', 'P_PAIPAI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

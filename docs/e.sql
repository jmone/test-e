-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 03 日 00:02
-- 服务器版本: 5.5.28
-- PHP 版本: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `e`
--

-- --------------------------------------------------------

--
-- 表的结构 `buy_offer`
--

CREATE TABLE IF NOT EXISTS `buy_offer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `message` varchar(200) DEFAULT NULL,
  `count` int(10) NOT NULL,
  `expiration_date` int(10) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='求购信息' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `buy_offer`
--

INSERT INTO `buy_offer` (`id`, `uid`, `name`, `message`, `count`, `expiration_date`, `dateline`) VALUES
(1, 1, 'test', 'test message.', 100, 1380390993, 1380390993),
(2, 1, 'test', 'test message.', 100, 1380391001, 1380391001),
(3, 1, 'test', 'test message.', 100, 1380391002, 1380391002),
(4, 1, 'test', 'test message.', 100, 1380391014, 1380391014);

-- --------------------------------------------------------

--
-- 表的结构 `common_user`
--

CREATE TABLE IF NOT EXISTS `common_user` (
  `uid` int(10) NOT NULL,
  `name` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='普通用户';

-- --------------------------------------------------------

--
-- 表的结构 `company_user`
--

CREATE TABLE IF NOT EXISTS `company_user` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='企业用户';

-- --------------------------------------------------------

--
-- 表的结构 `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `exhibition`
--

CREATE TABLE IF NOT EXISTS `exhibition` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL COMMENT '展会名称',
  `address` varchar(200) NOT NULL COMMENT '展会地点',
  `description` text NOT NULL COMMENT '介绍',
  `start_date` int(10) NOT NULL COMMENT '展会开始时间',
  `expiration_date` int(10) NOT NULL COMMENT '展会结束时间',
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='展会' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `friend_link`
--

CREATE TABLE IF NOT EXISTS `friend_link` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `order_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '越小越靠前',
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `from_uid` int(10) NOT NULL,
  `to_uid` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`from_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='留言' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `content` text NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='企业新闻' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL COMMENT '职位名称',
  `description` text NOT NULL COMMENT '职位要求简介等',
  `count` int(10) NOT NULL COMMENT '招聘人数',
  `expiration_date` int(10) NOT NULL COMMENT '截止时间',
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='职位' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `sell_offer`
--

CREATE TABLE IF NOT EXISTS `sell_offer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT '商品名',
  `picture` varchar(200) DEFAULT NULL,
  `description` text NOT NULL COMMENT '商品描述',
  `amount` int(10) NOT NULL COMMENT '商品数量',
  `price` int(10) NOT NULL COMMENT '单价',
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='供应信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 普通用户 2 企业用户',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='基础用户信息' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `type`, `email`, `password`, `dateline`) VALUES
(1, '1', 'jmone2006@126.com', '32100321', 1374760391);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

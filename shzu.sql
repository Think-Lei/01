
 -- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 27 日 07:02
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `shzu`
--

-- --------------------------------------------------------

--
-- 表的结构 `shzu_imformation`
--

CREATE TABLE IF NOT EXISTS `shzu_imformation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `student_id` varchar(30) CHARACTER SET utf8 NOT NULL,
  `year` int(4) NOT NULL,
  `class` int(4) NOT NULL,
  `school` varchar(20) CHARACTER SET utf8 NOT NULL,
  `college` varchar(20) CHARACTER SET utf8 NOT NULL,
  `department` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '1',
  `card_ID` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nation` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dorm` int(10) NOT NULL,
  `Email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `shzu_imformation`
--

INSERT INTO `shzu_imformation` (`id`, `username`, `password`, `student_id`, `year`, `class`, `school`, `college`, `department`, `sex`, `card_ID`, `nation`, `dorm`, `Email`, `phone`) VALUES
(1, '123', '123', '', 0, 0, '', '', '', 1, '', '', 0, '', ''),
(2, '2014508010', '2014508010', '2014508010', 2014, 1, '石河子大学', '信息科学与技术', '计算机科学与技术', 1, '653125199603200616', '汉', 501, '1576701411@qq.com', '18399357349'),
(3, '1234567', '1234567', '', 0, 0, '', '', '', 1, '', '', 0, '', ''),
(4, '123', '123', '', 0, 0, '', '', '', 1, '', '', 0, '', ''),
(9, 'QWE', 'QWE', '', 0, 0, '', '', '', 1, '', '', 0, '', ''),
(10, '333', '333', '', 0, 0, '', '', '', 1, '', '', 0, '', ''),
(11, '1', '1', '', 0, 0, '', '', '', 1, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `shzu_message`
--

CREATE TABLE IF NOT EXISTS `shzu_message` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `shzu_message`
--

INSERT INTO `shzu_message` (`id`, `username`, `message`) VALUES
(1, '2014508010', 'wwwwwwwwwwwwweeeeeeeeeeeee'),
(2, '123', 'wqrwerwet'),
(3, '123', 'asfasfgasf'),
(4, '1234567', 'eqtqetqe'),
(5, '1234567', 'sFVADGVadGV'),
(6, '1234567', 'QWEEQQQEQEWRQWRQWR'),
(7, '1234567', 'AFFFFFFFFFFFFFFFFFFFFF'),
(8, '1234567', 'AGFDSGA'),
(9, '1234567', 'QWRQR'),
(10, '1234567', 'QWE'),
(11, '1234567', '???S1'),
(12, '1234567', 'FJGHK'),
(13, '333', '??WDwd'),
(14, '333', 'adsfadsfd收到过覆盖'),
(15, '333', '啊DJKAHDJK1'),
(16, '333', '阿斯顿发生'),
(17, '1', 'dgjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(18, '1', 'hhhhhhhhhhhhhhhhhhhh');

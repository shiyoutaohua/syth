/*
Navicat MySQL Data Transfer

Source Server         : MySQL5.7 @MIPro
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : syth

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2019-03-08 20:34:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号 主键',
  `title` varchar(30) NOT NULL COMMENT '书名',
  `author` varchar(30) NOT NULL COMMENT '作者 多名作者 以英文逗号分隔',
  `press` varchar(25) NOT NULL COMMENT '出版社',
  `edition` int(11) NOT NULL DEFAULT '1' COMMENT '版次 未填写则是第一版',
  `label` varchar(25) DEFAULT NULL COMMENT '标签，书的类型，可以多个，以英文逗号分隔',
  `publishdate` date NOT NULL COMMENT '出版日期',
  `printdate` date NOT NULL COMMENT '印刷日期',
  `enteringdate` date NOT NULL COMMENT '录入数据库日期',
  `username` varchar(20) NOT NULL COMMENT '书的主人',
  `price` tinyint(4) NOT NULL COMMENT '书的主人出示的价格 <=300',
  `comment` text COMMENT '主人对书的简介',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('2', '数据结构与算法', '张小莉,王苗,罗文劼', '机械工业出版社', '3', '计算机,数据结构与算法', '2016-01-01', '2016-01-01', '2018-04-02', 'shiyoutaohua', '10', '学科基础课，别错过咯');
INSERT INTO `books` VALUES ('3', '运筹学教程', '胡运权,郭耀煌', '清华大学出版社', '4', '数学,运筹学', '2012-11-01', '2017-07-01', '2018-04-02', 'shiyoutaohua', '10', '经管专业的运筹学，九成新的');
INSERT INTO `books` VALUES ('1', '数据库技术及应用', '苗雪兰,刘瑞新,宋会群', '机械工业出版社', '1', '计算机,数据库', '2016-11-01', '2016-11-01', '2018-04-02', 'shiyoutaohua', '10', '好看的小姐姐可以送的哦！');
INSERT INTO `books` VALUES ('4', '电子商务概论', '刘鲁川,徐光', '清华大学出版社', '2', '电子商务', '2016-07-01', '2016-07-01', '2018-04-02', 'liangbing', '10', null);
INSERT INTO `books` VALUES ('5', '统计学', '王爱莲,史晓燕', '西安交通大学出版社', '1', '统计学', '2010-08-01', '2017-06-01', '2018-04-02', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('6', 'Java基础教程', '吴仁群', '清华大学出版社', '2', 'Java,计算机', '2012-04-01', '2012-04-01', '2018-04-03', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('7', 'C语言程序设计', '谭浩强', '清华大学出版社', '4', '计算机,编程', '2010-06-01', '2011-06-01', '2018-05-28', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('8', 'ASP.NET程序设计(C#版)', '崔淼,关六三,彭炜', '机械工业出版社', '2', '计算机,编程', '2017-01-02', '2017-01-02', '2018-05-28', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('9', '技术经济学概论', '虞晓芬,龚建立', '高等教育出版社', '4', '经济学', '2015-09-01', '2017-01-01', '2018-06-02', 'shiyoutaohua', '5', null);
INSERT INTO `books` VALUES ('10', '大学计算机基础', '陈明晰,李瑜,李杰', '中国铁道出版社', '2', '计算机', '2014-09-01', '2015-07-01', '2018-06-02', 'shiyoutaohua', '12', null);
INSERT INTO `books` VALUES ('11', '简明线性代数', '欧阳克智,李富民', '高等教育出版社', '2', '数学', '2010-01-01', '2016-06-01', '2018-06-02', 'shiyoutaohua', '5', null);
INSERT INTO `books` VALUES ('12', '概率统计重点难点40讲', '雷发社', '陕西科学技术出版社', '1', '数学,辅导', '2004-05-01', '2004-05-01', '2018-06-02', 'shiyoutaohua', '5', null);
INSERT INTO `books` VALUES ('13', '新编高等数学习题课教程', '翟亮亮,郝上京,安刚', '西北工业大学出版社', '1', '高数,习题,辅导', '2011-09-01', '2011-09-01', '2018-06-02', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('14', '新编线性代数学习指导', '雷发社', '西安地图出版社', '1', '线代,辅导', '2007-09-01', '2007-09-01', '2018-06-02', 'shiyoutaohua', '5', null);
INSERT INTO `books` VALUES ('15', 'HTML CSS JavaScript网页制作从入门到精通', '刘西杰,张婷', '中国工信出版社', '3', '网页,网站', '2016-07-01', '2016-07-01', '2018-06-02', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('16', '系统工程', '汪应洛', '机械工业出版社', '5', '系统工程', '2017-01-01', '2017-01-01', '2018-06-02', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('17', '中国近现代史纲要', '本书编写组', '高等教育出版社', '6', '思政', '2015-08-01', '2015-08-01', '2018-06-02', 'shiyoutaohua', '15', null);
INSERT INTO `books` VALUES ('18', '大学语文', '赵慧霞', '陕西人民教育出版社', '5', '语文', '2013-08-01', '2013-08-01', '2018-06-02', 'shiyoutaohua', '15', null);
INSERT INTO `books` VALUES ('19', '毛泽东思想和中国特色社会主义理论体系概论', '本书编写组', '高等教育出版社', '5', '思政', '2015-08-01', '2015-08-01', '2018-06-02', 'shiyoutaohua', '10', null);
INSERT INTO `books` VALUES ('20', '形势与政策', '原丽红,王津秋,陈瑶', '东北大学出版社', '1', null, '2015-07-01', '2015-07-01', '2018-06-02', 'shiyoutaohua', '5', null);

-- ----------------------------
-- Table structure for user_contact_way
-- ----------------------------
DROP TABLE IF EXISTS `user_contact_way`;
CREATE TABLE `user_contact_way` (
  `username` varchar(20) NOT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `qq` bigint(11) DEFAULT NULL,
  `wechat` varchar(20) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户联系方式';

-- ----------------------------
-- Records of user_contact_way
-- ----------------------------
INSERT INTO `user_contact_way` VALUES ('shiyoutaohua', null, '723667939', 'qingyuehanxi', '723667939@qq.com');
INSERT INTO `user_contact_way` VALUES ('linger', null, '815059819', 'linger', 'linger@qq.com');
INSERT INTO `user_contact_way` VALUES ('xiaoke', null, '723667939', 'qingyuehanxi', '723667939@qq.com');
INSERT INTO `user_contact_way` VALUES ('xiaobai', null, '723667939', 'qingyuehanxi', '723667939@qq.com');
INSERT INTO `user_contact_way` VALUES ('mingyue', null, '5201314', 'qingyuehanxi', 'qingyuehanxi@icloud.com');

-- ----------------------------
-- Table structure for user_core
-- ----------------------------
DROP TABLE IF EXISTS `user_core`;
CREATE TABLE `user_core` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level_member` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_core
-- ----------------------------
INSERT INTO `user_core` VALUES ('shiyoutaohua', '123456', null);
INSERT INTO `user_core` VALUES ('linger', '123456', null);
INSERT INTO `user_core` VALUES ('xiaoke', '123456', null);
INSERT INTO `user_core` VALUES ('xiaobai', '123456', null);
INSERT INTO `user_core` VALUES ('mingyue', '123456', null);

-- ----------------------------
-- Table structure for user_detail
-- ----------------------------
DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE `user_detail` (
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `sex` tinyint(4) DEFAULT '1' COMMENT '性别，1-女，2-男，其他-保密',
  `nickname` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `enrolldate` date DEFAULT NULL COMMENT '注册日期',
  `latestlogindate` date DEFAULT NULL COMMENT '最后登录日期',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户的详细信息';

-- ----------------------------
-- Records of user_detail
-- ----------------------------
INSERT INTO `user_detail` VALUES ('shiyoutaohua', '1', '世有桃花', '2018-06-11', '2018-06-13');
INSERT INTO `user_detail` VALUES ('linger', '1', '灵儿', '2018-06-11', '2019-01-25');
INSERT INTO `user_detail` VALUES ('xiaoke', '1', '小可', '2018-06-11', null);
INSERT INTO `user_detail` VALUES ('xiaobai', '1', '小白', '2018-06-11', null);
INSERT INTO `user_detail` VALUES ('mingyue', '1', '明月', '2018-06-11', null);

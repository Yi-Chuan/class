/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50524
Source Host           : 127.0.0.1:3306
Source Database       : lamp

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2015-09-10 12:09:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for phone
-- ----------------------------
DROP TABLE IF EXISTS `phone`;
CREATE TABLE `phone` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phone
-- ----------------------------
INSERT INTO `phone` VALUES ('1', 'iphone', 'iPhone，是苹果公司研发的智能时尚手机，它搭载苹果公司研发的iOS操作系统。第一代iPhone于2007年1月9日由苹果公司前首席执行官史蒂夫·乔布斯发布，并在同年6月29日正式发售[1] 。2013年9月10日，苹果公司在美国加州的新产品发布会上，推出第七代产品iPhone 5S及iPhone 5C。首次发布会还在北京、柏林和东京三地设置分会场，再在各地分别举行了发布会。第七代的iPhone 5S和iPhone 5C于2013年9月10日发布，同年9月20日正式发售。第八代的iPhone 6和iPhone6 Plus于2014年9月10日发布，大陆地区销售时间定为10月17日。', 'apple', '1');
INSERT INTO `phone` VALUES ('2', 'xiaomi', '小米手机 [1] 是小米公司（全称北京小米科技有限责任公司）研发的一款高性能发烧级智能手机。小米手机坚持 “为发烧而生”的设计理念，将全球最顶尖的移动终端技术与元器件运用到每款新品，小米手机超高的性价比也使其每款产品成为当年最值得期待的智能手机。 小米手机采用线上销售模式。2013年4月9日，米粉节上，搭载高通骁龙600 四核1.7G的小米手机2S正式发布，并在其官网进行销售，售价1999元；另外，搭载高通骁龙S4 Pro双核1.7GHz，采用与小米手机2S一致的28纳米制程与新版Krait 300 构架的小米2A同时发布，售价为1499元。', '小米科技', '2');
INSERT INTO `phone` VALUES ('3', 'smartisan', 'Smartisan T1 采用高通骁龙801 8x74AC 2.5Ghz四核处理器，它\r\n高通骁龙 801 8x74AC\r\n高通骁龙 801 8x74AC\r\n是量产的全球最快的移动 CPU 处理器', '锤子科技', '3');
INSERT INTO `phone` VALUES ('4', 'meizu', '魅族手机是一个非常优秀的国产手机,性能卓越,并且性价比高', '魅族科技', '0');

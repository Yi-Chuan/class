/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50524
Source Host           : 127.0.0.1:3306
Source Database       : lamp

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2015-09-15 12:05:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `url` varchar(255) NOT NULL,
  `cate_id` int(11) NOT NULL COMMENT '分类id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '小清新格子包臀裙', './images/3aa3744cf515f5c0b7fd8b21c4c6edaf.jpg', '55', 'http://www.meilishuo.com/share/item/3515286095?ad_tag=1_10013_1&d_r=6__1-1-2-1', '1');
INSERT INTO `goods` VALUES ('2', '呛口小辣椒刺绣吊带连衣裙', './images/b1faf31f316b3079a96a82169c426258.jpg', '128', 'http://www.meilishuo.com/share/item/3489597183?ad_tag=1_10013_1&d_r=6_89_1-1-2-2', '2');
INSERT INTO `goods` VALUES ('3', '立体花喇叭袖短裙雪纺衫', './images/689dd5eae077459af4a17e9f815bad50.jpg', '118', 'http://www.meilishuo.com/share/item/3491909545?ad_tag=1_10013_1&d_r=6__1-1-2-3', '2');
INSERT INTO `goods` VALUES ('4', '韩国新款 优雅名媛连衣裙', './images/604a6dad0be72b2426d63e0d8efaf917.jpg', '79', 'http://www.meilishuo.com/share/item/3492100153?ad_tag=1_10013_1&d_r=6__1-1-2-4', '4');
INSERT INTO `goods` VALUES ('5', '欧美单排扣高腰牛仔裙裤', './images/568309f2a4b2ee0c4ed1f1f9d6c69de3.jpg', '42', 'http://www.meilishuo.com/share/item/3502343645?ad_tag=1_10013_1&d_r=6__1-1-2-5', '5');
INSERT INTO `goods` VALUES ('6', '宽松短袖连衣裙', './images/f45c350eb2f192077c450164b8986716.jpg', '70', 'http://www.meilishuo.com/share/item/3488512605?ad_tag=1_10013_1&d_r=6_89_1-1-2-7', '1');
INSERT INTO `goods` VALUES ('7', '沙滩短裙欧根纱公主裙', './images/520330a46fdc687f8b325ee5a16a4832.jpg', '69', 'http://www.meilishuo.com/share/item/3529314511?ad_tag=1_10013_1&d_r=6__1-1-2-8', '2');
INSERT INTO `goods` VALUES ('8', '纯色荷叶边包臀裙', './images/27f7b404889169e12edabb23e8d80889.jpg', '65', 'http://www.meilishuo.com/share/item/3545346417?ad_tag=1_0_1&d_r=6__1-1-2-9', '4');
INSERT INTO `goods` VALUES ('9', '欧根纱卡通印花无袖连衣裙', './images/0168e002115edc79a028117ec4b48bff.jpg', '98', 'http://www.meilishuo.com/share/item/3485675649?ad_tag=1_10013_1&d_r=6_89_1-1-2-10', '5');
INSERT INTO `goods` VALUES ('10', '夏季美裙露肩印花连衣裙', './images/edb14f72deb2a2c5566d96beefab7d57.jpg', '69', 'http://www.meilishuo.com/share/item/3556611349?ad_tag=0_0_1&d_r=6__0-1-2-11', '0');
INSERT INTO `goods` VALUES ('11', '棉麻荷叶袖抽绳条纹连衣裙', './images/325b5c0e5c133cb61171d286d37c13d9.jpg', '88', 'http://www.meilishuo.com/share/item/3550617151?ad_tag=0_0_1&d_r=6__0-1-2-12', '0');
INSERT INTO `goods` VALUES ('12', '做旧插兜双口袋牛仔半身裙', './images/99034a47383ce8ead2ce3fe48bdead79.jpg', '59', 'http://www.meilishuo.com/share/item/3557634117?ad_tag=0_0_1&d_r=6__0-1-2-13', '0');
INSERT INTO `goods` VALUES ('13', '宽松大码喇叭袖连衣裙', './images/605190a25644c015ebada86c5e815310.jpg', '59', 'http://www.meilishuo.com/share/item/3549243015?ad_tag=0_0_1&d_r=6__0-1-2-14', '0');
INSERT INTO `goods` VALUES ('14', '荷叶领碎花雪纺吊带连衣裙', './images/2524bc9ecbbb687a18208f665c070c5e.jpg', '88', 'http://www.meilishuo.com/share/item/3547155551?ad_tag=0_0_1&d_r=6__0-1-2-15', '0');
INSERT INTO `goods` VALUES ('15', '原宿风破洞牛仔短裙', './images/a0c84c6248d7e6fe29fb86a44ddc35da.jpg', '69', 'http://www.meilishuo.com/share/item/3552613409?ad_tag=0_0_1&d_r=6__0-1-2-16', '0');
INSERT INTO `goods` VALUES ('16', '高腰修身包臀牛仔短裙', './images/4ec1e01c209a394e629c967f48c2ac19.jpg', '67', 'http://www.meilishuo.com/share/item/3548580563?ad_tag=0_0_1&d_r=6__0-1-2-17', '0');
INSERT INTO `goods` VALUES ('17', '韩版显瘦修身短裙连衣裙', './images/186a39f9111ae0db0d44ed2961f5da07.jpg', '96', 'http://www.meilishuo.com/share/item/3555839769?ad_tag=0_0_1&d_r=6__0-1-2-18', '0');
INSERT INTO `goods` VALUES ('18', '夏季韩版雪纺连衣裙包臀裙', './images/8c5c54152e0f269ccdb3a61f243cb3d1.jpg', '69', 'http://www.meilishuo.com/share/item/3549432269?ad_tag=0_0_1&d_r=6__0-1-2-19', '0');
INSERT INTO `goods` VALUES ('19', '韩版条纹假两件连衣裙', './images/9695d002e584ac1b1f0bbe7d5a226c7d.jpg', '138', 'http://www.meilishuo.com/share/item/3553726031?ad_tag=0_0_1&d_r=6__0-1-2-20', '0');
INSERT INTO `goods` VALUES ('20', '夏装收腰无袖连衣裙', './images/21236ef9bface4fef38410da83b60f78.jpg', '89', 'http://www.meilishuo.com/share/item/3559295369?ad_tag=1_10013_1&d_r=6__1-2-2-1', '0');
INSERT INTO `goods` VALUES ('21', '套装蕾丝纯色镂空连衣裙夏', './images/13c2376b2bcf67abfd76e0c12ec6e079.jpg', '109', 'http://www.meilishuo.com/share/item/3546278199?ad_tag=1_10013_1&d_r=6__1-2-2-2', '0');
INSERT INTO `goods` VALUES ('22', '条纹撞色拼接修身连衣裙', './images/383f45de0317e8073631d77c75e70c16.jpg', '149', 'http://www.meilishuo.com/share/item/3544759643?ad_tag=1_10013_1&d_r=6__1-2-2-3', '0');
INSERT INTO `goods` VALUES ('23', '欧根纱水墨抽象印花连衣裙', './images/6ad0702c9d16cd51fcbc8320da4fb1df.jpg', '138', 'http://www.meilishuo.com/share/item/3557950173?ad_tag=1_10013_1&d_r=6__1-2-2-4', '0');
INSERT INTO `goods` VALUES ('24', '夏装韩国宽松背心连衣裙', './images/629bd963864f67c05da6aae9a3505d3d.jpg', '78', 'http://www.meilishuo.com/share/item/3550729657?ad_tag=1_10013_1&d_r=6__1-2-2-5', '0');
INSERT INTO `goods` VALUES ('25', '夏季新款学院风背带连衣裙', './images/617a7198b845a140bc8cb480d52b27b2.jpg', '79', 'http://www.meilishuo.com/share/item/3558283161?ad_tag=1_10013_1&d_r=6__1-2-2-6', '0');
INSERT INTO `goods` VALUES ('26', '梭织麻料单排扣连衣裙', './images/b26e8021d45509ca538dd903287c1f77.jpg', '86', 'http://www.meilishuo.com/share/item/3546464017?ad_tag=1_10013_1&d_r=6__1-2-2-7', '0');
INSERT INTO `goods` VALUES ('27', '波西米亚短裙印花背心裙', './images/90446c8a1d0dc0610824b3f9dc346b4c.jpg', '75', 'http://www.meilishuo.com/share/item/3550599281?ad_tag=1_10013_1&d_r=6__1-2-2-8', '0');
INSERT INTO `goods` VALUES ('28', '欧美羽毛印花背心连衣裙', './images/c7957c6786b3b4497214dff536ffa853.jpg', '118', 'http://www.meilishuo.com/share/item/3557824463?ad_tag=1_10013_1&d_r=6__1-2-2-9', '0');
INSERT INTO `goods` VALUES ('29', '气质V领纯色修身连衣裙', './images/ea63ccbe670ffd767517de6780b405b9.jpg', '149', 'http://www.meilishuo.com/share/item/3557738849?ad_tag=1_10013_1&d_r=6__1-2-2-10', '0');
INSERT INTO `goods` VALUES ('30', '夏季新款名媛短裙连衣裙', './images/37ddbe295277bf81ae09a086218834de.jpg', '79', 'http://www.meilishuo.com/share/item/3548197381?ad_tag=1_10013_1&d_r=6__1-2-2-11', '0');
INSERT INTO `goods` VALUES ('31', '新款修身无袖流苏连衣裙', './images/7e3825d89a5dff806f6ca36df4af4fb7.jpg', '69', 'http://www.meilishuo.com/share/item/3551387629?ad_tag=1_10013_1&d_r=6__1-2-2-12', '0');
INSERT INTO `goods` VALUES ('32', '韩版青花瓷碎花背心连衣裙', './images/0cc6e9d321abc1332518eb6f23d8bbc8.jpg', '69', 'http://www.meilishuo.com/share/item/3474899639?ad_tag=1_10013_1&d_r=6__1-2-2-13', '0');
INSERT INTO `goods` VALUES ('33', '夏季时尚性感露肩连衣裙', './images/33fdfa927e7f121b73dc5e7f245f3675.jpg', '79', 'http://www.meilishuo.com/share/item/3524656639?ad_tag=1_0_1&d_r=6__1-2-2-14', '0');
INSERT INTO `goods` VALUES ('34', '牛仔背带裙连衣裙短裙', './images/4bd9e05b224abeea1de56ecb62c94b24.jpg', '68', 'http://www.meilishuo.com/share/item/3547632475?ad_tag=1_10013_1&d_r=6__1-2-2-15', '0');
INSERT INTO `goods` VALUES ('35', '无袖露背收腰雪纺连衣裙', './images/6c54af51a990500c86ecc19fdb29e4cd.jpg', '79', 'http://www.meilishuo.com/share/item/3548241915?ad_tag=1_10013_1&d_r=6__1-2-2-16', '0');
INSERT INTO `goods` VALUES ('36', '韩版姐妹款连衣裙', './images/d7d26ff942fec41274ed43d688e694f8.jpg', '87', 'http://www.meilishuo.com/share/item/3537246151?ad_tag=1_10013_1&d_r=6__1-2-2-17', '0');
INSERT INTO `goods` VALUES ('37', '衬衣+印花短裙套装', './images/36903020fe0619b5cc93e1801eb9190e.jpg', '99', 'http://www.meilishuo.com/share/item/3521501917?ad_tag=1_10013_1&d_r=6__1-2-2-18', '0');
INSERT INTO `goods` VALUES ('38', '纯色修身气质网纱连衣裙', './images/ce831be19199a3feaa1f13b2927c67e9.jpg', '138', 'http://www.meilishuo.com/share/item/3545061087?ad_tag=1_10013_1&d_r=6__1-2-2-19', '0');
INSERT INTO `goods` VALUES ('39', '韩版条纹无袖连衣裙', './images/e60173e3867f3192f59a53d85ae90146.jpg', '89', 'http://www.meilishuo.com/share/item/3525104123?ad_tag=1_10013_1&d_r=6__1-2-2-20', '0');
INSERT INTO `goods` VALUES ('40', '夏新款时尚排扣牛仔包裙', './images/499ba1648b39a1514a3e743a3b65e715.jpg', '70', 'http://www.meilishuo.com/share/item/3496892569?ad_tag=1_10013_1&d_r=6__1-3-2-1', '0');
INSERT INTO `goods` VALUES ('41', '重工钉珠百搭背带连衣裙', './images/2541e071aea98d21fb242fec8f297fe0.jpg', '279', 'http://www.meilishuo.com/share/item/3514552667?ad_tag=1_10013_1&d_r=6__1-3-2-2', '0');
INSERT INTO `goods` VALUES ('42', '韩版高品质麻料连衣裙', './images/35f32c68a7c489f90ceeab0fec33e4f2.jpg', '80', 'http://www.meilishuo.com/share/item/3505195929?ad_tag=1_10013_1&d_r=6__1-3-2-3', '0');
INSERT INTO `goods` VALUES ('43', '性感网纱拼接无袖背心裙', './images/544b37532d01aff51f98c7ceff68e73f.jpg', '79', 'http://www.meilishuo.com/share/item/3521754813?ad_tag=1_0_1&d_r=6__1-3-2-4', '0');
INSERT INTO `goods` VALUES ('44', '雪纺连衣裙露肩宽松A字裙', './images/7c4db20bfd3051542b8f050fdebb8fbb.jpg', '69', 'http://www.meilishuo.com/share/item/3479894305?ad_tag=1_10013_1&d_r=6__1-3-2-5', '0');
INSERT INTO `goods` VALUES ('45', '复古牛仔A字伞状半身短裙', './images/32fa987c0abe0904339dbec4dc196ab0.jpg', '69', 'http://www.meilishuo.com/share/item/3497541893?ad_tag=1_10013_1&d_r=6__1-3-2-6', '0');
INSERT INTO `goods` VALUES ('46', '钮扣双口袋牛仔半身裙', './images/a9db754e44f42afd91857cb2478ffb31.jpg', '79', 'http://www.meilishuo.com/share/item/3511877305?ad_tag=1_0_1&d_r=6__1-3-2-7', '0');
INSERT INTO `goods` VALUES ('47', '韩版修身气质OL半身裙', './images/f9e63e3fde0fa0072d26f8268b8b417b.jpg', '39', 'http://www.meilishuo.com/share/item/3492578625?ad_tag=1_10013_1&d_r=8_67_1-3-2-8', '0');
INSERT INTO `goods` VALUES ('48', '韩版显瘦名媛短裙连衣裙', './images/2894def20d04b501d9dd913eb7853a2e.jpg', '79', 'http://www.meilishuo.com/share/item/3548246413?ad_tag=1_10013_1&d_r=6__1-3-2-9', '0');
INSERT INTO `goods` VALUES ('49', '夏季雪纺碎花包臀半身裙', './images/85b1f1ed4c8125c08b0940c71c3193ce.jpg', '38', 'http://www.meilishuo.com/share/item/3500851915?ad_tag=1_0_1&d_r=6__1-3-2-10', '0');
INSERT INTO `goods` VALUES ('50', '百搭牛仔半身裙调节背带裙', './images/5d546cb1bf72f5f88958907c427f0706.jpg', '77', 'http://www.meilishuo.com/share/item/3410149671?ad_tag=1_10013_1&d_r=6__1-3-2-11', '0');
INSERT INTO `goods` VALUES ('51', '印花短裙半身裙廓形蓬蓬裙', './images/bb70dc1ef15f1595cf4b59970eac8433.jpg', '99', 'http://www.meilishuo.com/share/item/3479819295?ad_tag=1_10013_1&d_r=8_67_1-3-2-12', '0');
INSERT INTO `goods` VALUES ('52', '收腰显瘦蓬蓬短裙', './images/2cedf043b0667354b3eed99c3e0bd557.jpg', '78', 'http://www.meilishuo.com/share/item/3506660413?ad_tag=1_10013_1&d_r=6__1-3-2-13', '0');
INSERT INTO `goods` VALUES ('53', '夏季韩版棉麻露肩连衣裙', './images/633c42ace82d4e51fec2d206917842c7.jpg', '95', 'http://www.meilishuo.com/share/item/3497554997?ad_tag=1_10013_1&d_r=6__1-3-2-14', '0');
INSERT INTO `goods` VALUES ('54', '夏装名媛气质雪纺连衣裙', './images/2278e6388c25c10fbc3b7118ca6cbf21.jpg', '89', 'http://www.meilishuo.com/share/item/3536600659?ad_tag=1_10013_1&d_r=6__1-3-2-15', '0');
INSERT INTO `goods` VALUES ('55', '条纹百褶圆领连衣裙', './images/d87b0074a2b887d0f2f8d38ca97bf2e7.jpg', '89', 'http://www.meilishuo.com/share/item/3555607891?ad_tag=1_10013_1&d_r=6__1-3-2-16', '0');
INSERT INTO `goods` VALUES ('56', '小碎花收腰印花牛仔连衣裙', './images/5268844d1ad657b5156874f8e700f9da.jpg', '88', 'http://www.meilishuo.com/share/item/3556615401?ad_tag=1_10013_1&d_r=6__1-3-2-17', '0');
INSERT INTO `goods` VALUES ('57', '韩版修身显瘦蕾丝连衣裙', './images/4facbf688567535eca937edc11c8c19d.jpg', '99', 'http://www.meilishuo.com/share/item/3528441961?ad_tag=1_10013_1&d_r=6__1-3-2-18', '0');
INSERT INTO `goods` VALUES ('58', '新款韩版修身破洞半身裙', './images/6f1bff4a9eb74b96b7afbe859ec5776d.jpg', '67', 'http://www.meilishuo.com/share/item/3544644709?ad_tag=1_10013_1&d_r=6__1-3-2-19', '0');
INSERT INTO `goods` VALUES ('59', '蝙蝠袖拼接蕾丝透视连衣裙', './images/8b16423f1f3f36cb5fd7769747b7f3d2.jpg', '79', 'http://www.meilishuo.com/share/item/3481811671?ad_tag=1_0_1&d_r=6__1-3-2-20', '0');
INSERT INTO `goods` VALUES ('60', '时尚简约学院风牛仔半身裙', './images/ca560738fc912e72853016062511738b.jpg', '78', 'http://www.meilishuo.com/share/item/3459410281?ad_tag=1_10013_1&d_r=6__1-4-2-1', '0');
INSERT INTO `goods` VALUES ('61', '圆领碎花印花打底连衣裙', './images/3ed94db323d4290ad98ad9e9a6122463.jpg', '78', 'http://www.meilishuo.com/share/item/3477537227?ad_tag=1_10013_1&d_r=6__1-4-2-2', '0');
INSERT INTO `goods` VALUES ('62', '真丝印花拼接收腰连衣裙', './images/d23baad586775a247f522ed3f7acba39.jpg', '359', 'http://www.meilishuo.com/share/item/3512326679?ad_tag=1_10013_1&d_r=6__1-4-2-3', '0');
INSERT INTO `goods` VALUES ('63', '森女系棉麻连衣裙短裙', './images/392f77c1a5f6cc8b4639f83b36f456c8.jpg', '68', 'http://www.meilishuo.com/share/item/3535571993?ad_tag=1_10013_1&d_r=6__1-4-2-4', '0');
INSERT INTO `goods` VALUES ('64', '花边字母短袖T恤连衣裙', './images/96962fc823a5b366d118f4b57de1eb59.jpg', '79', 'http://www.meilishuo.com/share/item/3545535953?ad_tag=1_10013_1&d_r=6__1-4-2-5', '0');
INSERT INTO `goods` VALUES ('65', '露肩一字领简约显瘦连衣裙', './images/3e06eb6ddd2f1b5af9b6f243447e7dc8.jpg', '149', 'http://www.meilishuo.com/share/item/3514785127?ad_tag=1_10013_1&d_r=6__1-4-2-6', '0');
INSERT INTO `goods` VALUES ('66', '韩版夏装喇叭袖连衣裙短裙', './images/f3838d05b3220ecd8975fd052d69f8ee.jpg', '47', 'http://www.meilishuo.com/share/item/3550693541?ad_tag=1_10013_1&d_r=6__1-4-2-8', '0');
INSERT INTO `goods` VALUES ('67', 'HI夏季新款拼接连衣裙', './images/f4114207e0a91270f1c61455571c1504.jpg', '218', 'http://www.meilishuo.com/share/item/3546454421?ad_tag=1_10013_1&d_r=6__1-4-2-9', '0');
INSERT INTO `goods` VALUES ('68', '碎花不规则半身裙短裙', './images/d3a4230d3a2270b0e550e1e9c4608df0.jpg', '59', 'http://www.meilishuo.com/share/item/3545874801?ad_tag=1_10013_1&d_r=6__1-4-2-10', '0');
INSERT INTO `goods` VALUES ('69', '字母不规则荷叶摆边连衣裙', './images/1777dcf8a092b8b4dfd7965d9d605148.jpg', '55', 'http://www.meilishuo.com/share/item/3508147449?ad_tag=1_10013_1&d_r=6__1-4-2-11', '0');
INSERT INTO `goods` VALUES ('70', '韩版显瘦高腰鱼尾半身裙', './images/07a693e19997c45f6e700ffa876d4d8b.jpg', '65', 'http://www.meilishuo.com/share/item/3509403275?ad_tag=1_10013_1&d_r=6__1-7-2-1', '0');
INSERT INTO `goods` VALUES ('71', '森系花朵连衣裙', './images/59e3195fb4e8f7557debee48914ff22a.jpg', '49', 'http://www.meilishuo.com/share/item/3547601729?ad_tag=0_0_1&d_r=6__0-4-2-12', '0');
INSERT INTO `goods` VALUES ('72', '欧根纱绣花蕾丝短袖连衣裙', './images/04c79b9dde6c803faf3b2ddbadce76f7.jpg', '68', 'http://www.meilishuo.com/share/item/3487941515?ad_tag=1_10013_1&d_r=6__1-7-2-2', '0');
INSERT INTO `goods` VALUES ('73', '性感镂空修身大摆连衣裙', './images/0442556551093e6b03b1eec64b1cea22.jpg', '0', 'http://www.meilishuo.com/share/item/3545824955?ad_tag=1_10013_1&d_r=6__1-4-2-13', '0');
INSERT INTO `goods` VALUES ('74', '欧根纱拼接A字裙女短裙', './images/11cea80745732d1f011478b122f9bd7b.jpg', '326', 'http://www.meilishuo.com/share/item/3466076611?ad_tag=1_10013_1&d_r=6__1-7-2-3', '0');
INSERT INTO `goods` VALUES ('75', '纯色双层网纱A字瘦腿短裙', './images/6cbe693689a9a831b9cd1d523085bde3.jpg', '581', 'http://www.meilishuo.com/share/item/3552939349?ad_tag=1_10013_1&d_r=6__1-4-2-14', '0');
INSERT INTO `goods` VALUES ('76', '初夏新品韩版刺绣牛仔裙', './images/d5e76cf3f7cfa661acd0ac774fca2fe9.jpg', '128', 'http://www.meilishuo.com/share/item/3545993489?ad_tag=1_10013_1&d_r=6__1-7-2-4', '0');
INSERT INTO `goods` VALUES ('77', '韩版显瘦高腰鱼尾半身裙', './images/07a693e19997c45f6e700ffa876d4d8b.jpg', '65', 'http://www.meilishuo.com/share/item/3509403275?ad_tag=1_10013_1&d_r=6__1-7-2-1', '0');
INSERT INTO `goods` VALUES ('78', '新款碎花双层网纱半身裙', './images/24735a488a83e347370793bd1050bd80.jpg', '58', 'http://www.meilishuo.com/share/item/3552954623?ad_tag=1_10013_1&d_r=6__1-4-2-15', '0');
INSERT INTO `goods` VALUES ('79', '韩版条纹拼接牛仔连衣裙', './images/0a2e815e62207be182acd6e54579d9dc.jpg', '78', 'http://www.meilishuo.com/share/item/3532471131?ad_tag=1_0_1&d_r=6__1-7-2-5', '0');
INSERT INTO `goods` VALUES ('80', '欧根纱绣花蕾丝短袖连衣裙', './images/04c79b9dde6c803faf3b2ddbadce76f7.jpg', '68', 'http://www.meilishuo.com/share/item/3487941515?ad_tag=1_10013_1&d_r=6__1-7-2-2', '0');
INSERT INTO `goods` VALUES ('81', '韩版显瘦高腰鱼尾半身裙', './images/07a693e19997c45f6e700ffa876d4d8b.jpg', '65', 'http://www.meilishuo.com/share/item/3509403275?ad_tag=1_10013_1&d_r=6__1-7-2-1', '0');
INSERT INTO `goods` VALUES ('82', '高腰包臀荷叶边半身裙短裙', './images/17b717b6674bd4c399d82a1047097693.jpg', '49', 'http://www.meilishuo.com/share/item/3513249797?ad_tag=1_10013_1&d_r=6__1-7-2-6', '0');
INSERT INTO `goods` VALUES ('83', '韩国破洞牛仔包臀裙', './images/602ad5b243d724ea2c8e6ac27b80a85e.jpg', '79', 'http://www.meilishuo.com/share/item/3552608693?ad_tag=1_10013_1&d_r=6__1-4-2-16', '0');
INSERT INTO `goods` VALUES ('84', '欧根纱拼接A字裙女短裙', './images/11cea80745732d1f011478b122f9bd7b.jpg', '32', 'http://www.meilishuo.com/share/item/3466076611?ad_tag=1_10013_1&d_r=6__1-7-2-3', '0');
INSERT INTO `goods` VALUES ('85', '欧根纱绣花蕾丝短袖连衣裙', './images/04c79b9dde6c803faf3b2ddbadce76f7.jpg', '68', 'http://www.meilishuo.com/share/item/3487941515?ad_tag=1_10013_1&d_r=6__1-7-2-2', '0');
INSERT INTO `goods` VALUES ('86', '蝴蝶结一字领连衣裙短裙', './images/660785975b1d1b02db37e8afdd1f7a81.jpg', '89', 'http://www.meilishuo.com/share/item/3503636765?ad_tag=1_10013_1&d_r=6__1-7-2-7', '0');
INSERT INTO `goods` VALUES ('87', '百搭高腰半身百褶短裙', './images/0c0284bb404ac7213ef8cd1acdbfdc2f.jpg', '70', 'http://www.meilishuo.com/share/item/3496718191?ad_tag=1_10013_1&d_r=6__1-4-2-17', '0');
INSERT INTO `goods` VALUES ('88', '初夏新品韩版刺绣牛仔裙', './images/d5e76cf3f7cfa661acd0ac774fca2fe9.jpg', '128', 'http://www.meilishuo.com/share/item/3545993489?ad_tag=1_10013_1&d_r=6__1-7-2-4', '0');
INSERT INTO `goods` VALUES ('89', '流苏开叉包臀牛仔裙', './images/87c4aa8c0150ec4893ce737b6e5960a2.jpg', '49', 'http://www.meilishuo.com/share/item/3526672065?ad_tag=1_10013_1&d_r=6__1-7-2-8', '0');
INSERT INTO `goods` VALUES ('90', '欧根纱拼接A字裙女短裙', './images/11cea80745732d1f011478b122f9bd7b.jpg', '32', 'http://www.meilishuo.com/share/item/3466076611?ad_tag=1_10013_1&d_r=6__1-7-2-3', '0');
INSERT INTO `goods` VALUES ('91', '韩版高腰修身印花连衣裙', './images/063a9b05dbe192f16fbe4dc2e4159084.jpg', '89', 'http://www.meilishuo.com/share/item/3557314611?ad_tag=1_10013_1&d_r=6__1-4-2-18', '0');
INSERT INTO `goods` VALUES ('92', '韩版条纹拼接牛仔连衣裙', './images/0a2e815e62207be182acd6e54579d9dc.jpg', '78', 'http://www.meilishuo.com/share/item/3532471131?ad_tag=1_0_1&d_r=6__1-7-2-5', '0');
INSERT INTO `goods` VALUES ('93', '初夏新品韩版刺绣牛仔裙', './images/d5e76cf3f7cfa661acd0ac774fca2fe9.jpg', '128', 'http://www.meilishuo.com/share/item/3545993489?ad_tag=1_10013_1&d_r=6__1-7-2-4', '0');
INSERT INTO `goods` VALUES ('94', '学院风复古牛仔连衣裙', './images/0284457a7fe9eec89ec4023f60159993.jpg', '88', 'http://www.meilishuo.com/share/item/3443364743?ad_tag=1_10013_1&d_r=6__1-4-2-19', '0');
INSERT INTO `goods` VALUES ('95', '高腰包臀荷叶边半身裙短裙', './images/17b717b6674bd4c399d82a1047097693.jpg', '49', 'http://www.meilishuo.com/share/item/3513249797?ad_tag=1_10013_1&d_r=6__1-7-2-6', '0');
INSERT INTO `goods` VALUES ('96', 'HI夏季新款蝴蝶结百搭裙', './images/5e6a060e6343bdaf59e49a4dab669527.jpg', '196', 'http://www.meilishuo.com/share/item/3543316419?ad_tag=1_10013_1&d_r=6__1-7-2-9', '0');
INSERT INTO `goods` VALUES ('97', '韩版条纹拼接牛仔连衣裙', './images/0a2e815e62207be182acd6e54579d9dc.jpg', '78', 'http://www.meilishuo.com/share/item/3532471131?ad_tag=1_0_1&d_r=6__1-7-2-5', '0');
INSERT INTO `goods` VALUES ('98', '格子短裙长袖蓬蓬连衣裙', './images/411088d37ec21fd2742a0cdf43b02130.jpg', '88', 'http://www.meilishuo.com/share/item/3443110731?ad_tag=1_10013_1&d_r=6__1-4-2-20', '0');
INSERT INTO `goods` VALUES ('99', '蝴蝶结一字领连衣裙短裙', './images/660785975b1d1b02db37e8afdd1f7a81.jpg', '89', 'http://www.meilishuo.com/share/item/3503636765?ad_tag=1_10013_1&d_r=6__1-7-2-7', '0');
INSERT INTO `goods` VALUES ('100', '气质印花无袖背心连衣裙', './images/72b404b5fba83af9cc9a9afd92188346.jpg', '78', 'http://www.meilishuo.com/share/item/3522981555?ad_tag=1_10013_1&d_r=6__1-7-2-10', '0');
INSERT INTO `goods` VALUES ('101', '高腰包臀荷叶边半身裙短裙', './images/17b717b6674bd4c399d82a1047097693.jpg', '49', 'http://www.meilishuo.com/share/item/3513249797?ad_tag=1_10013_1&d_r=6__1-7-2-6', '0');
INSERT INTO `goods` VALUES ('102', '流苏开叉包臀牛仔裙', './images/87c4aa8c0150ec4893ce737b6e5960a2.jpg', '49', 'http://www.meilishuo.com/share/item/3526672065?ad_tag=1_10013_1&d_r=6__1-7-2-8', '0');
INSERT INTO `goods` VALUES ('103', '名嫒气质显瘦格纹连衣裙', './images/20f62810734e9efefde11466588baa45.jpg', '99', 'http://www.meilishuo.com/share/item/3549785335?ad_tag=1_10013_1&d_r=6__1-7-2-11', '0');
INSERT INTO `goods` VALUES ('104', '蝴蝶结一字领连衣裙短裙', './images/660785975b1d1b02db37e8afdd1f7a81.jpg', '89', 'http://www.meilishuo.com/share/item/3503636765?ad_tag=1_10013_1&d_r=6__1-7-2-7', '0');
INSERT INTO `goods` VALUES ('105', 'HI夏季新款蝴蝶结百搭裙', './images/5e6a060e6343bdaf59e49a4dab669527.jpg', '196', 'http://www.meilishuo.com/share/item/3543316419?ad_tag=1_10013_1&d_r=6__1-7-2-9', '0');
INSERT INTO `goods` VALUES ('106', '流苏开叉包臀牛仔裙', './images/87c4aa8c0150ec4893ce737b6e5960a2.jpg', '49', 'http://www.meilishuo.com/share/item/3526672065?ad_tag=1_10013_1&d_r=6__1-7-2-8', '0');
INSERT INTO `goods` VALUES ('107', '韩版夏日薄款碎花连衣裙', './images/05bb0203db64c3cfea040ffb05e2e73c.jpg', '89', 'http://www.meilishuo.com/share/item/3559091851?ad_tag=1_10013_1&d_r=6__1-7-2-12', '0');
INSERT INTO `goods` VALUES ('108', '气质印花无袖背心连衣裙', './images/72b404b5fba83af9cc9a9afd92188346.jpg', '78', 'http://www.meilishuo.com/share/item/3522981555?ad_tag=1_10013_1&d_r=6__1-7-2-10', '0');
INSERT INTO `goods` VALUES ('109', '荷叶边显瘦鱼尾裙连衣裙', './images/7e6a98acea6308b72e3053187c425777.jpg', '89', 'http://www.meilishuo.com/share/item/3549129641?ad_tag=1_10013_1&d_r=6__1-7-2-13', '0');
INSERT INTO `goods` VALUES ('110', 'HI夏季新款蝴蝶结百搭裙', './images/5e6a060e6343bdaf59e49a4dab669527.jpg', '196', 'http://www.meilishuo.com/share/item/3543316419?ad_tag=1_10013_1&d_r=6__1-7-2-9', '0');
INSERT INTO `goods` VALUES ('111', '名嫒气质显瘦格纹连衣裙', './images/20f62810734e9efefde11466588baa45.jpg', '99', 'http://www.meilishuo.com/share/item/3549785335?ad_tag=1_10013_1&d_r=6__1-7-2-11', '0');
INSERT INTO `goods` VALUES ('112', '气质印花无袖背心连衣裙', './images/72b404b5fba83af9cc9a9afd92188346.jpg', '78', 'http://www.meilishuo.com/share/item/3522981555?ad_tag=1_10013_1&d_r=6__1-7-2-10', '0');
INSERT INTO `goods` VALUES ('113', '假两件无袖棉麻连衣裙', './images/2a6ab27548bb2b2229b261b3bebecfc6.jpg', '98', 'http://www.meilishuo.com/share/item/3533197197?ad_tag=1_10013_1&d_r=6__1-7-2-14', '0');
INSERT INTO `goods` VALUES ('114', '韩版夏日薄款碎花连衣裙', './images/05bb0203db64c3cfea040ffb05e2e73c.jpg', '89', 'http://www.meilishuo.com/share/item/3559091851?ad_tag=1_10013_1&d_r=6__1-7-2-12', '0');
INSERT INTO `goods` VALUES ('115', '名嫒气质显瘦格纹连衣裙', './images/20f62810734e9efefde11466588baa45.jpg', '99', 'http://www.meilishuo.com/share/item/3549785335?ad_tag=1_10013_1&d_r=6__1-7-2-11', '0');
INSERT INTO `goods` VALUES ('116', '做旧磨边百搭背带牛仔裙', './images/a7265b027fbd56b4b540bdd0c74709ae.jpg', '69', 'http://www.meilishuo.com/share/item/3530184457?ad_tag=1_10013_1&d_r=6__1-7-2-15', '0');
INSERT INTO `goods` VALUES ('117', '荷叶边显瘦鱼尾裙连衣裙', './images/7e6a98acea6308b72e3053187c425777.jpg', '89', 'http://www.meilishuo.com/share/item/3549129641?ad_tag=1_10013_1&d_r=6__1-7-2-13', '0');
INSERT INTO `goods` VALUES ('118', '韩版夏日薄款碎花连衣裙', './images/05bb0203db64c3cfea040ffb05e2e73c.jpg', '89', 'http://www.meilishuo.com/share/item/3559091851?ad_tag=1_10013_1&d_r=6__1-7-2-12', '0');
INSERT INTO `goods` VALUES ('119', '简约 露背系带连衣裙', './images/7cb5252f11b7181865986e9b1c813563.jpg', '69', 'http://www.meilishuo.com/share/item/3169297671?ad_tag=1_10013_1&d_r=6__1-7-2-16', '0');
INSERT INTO `goods` VALUES ('120', '假两件无袖棉麻连衣裙', './images/2a6ab27548bb2b2229b261b3bebecfc6.jpg', '98', 'http://www.meilishuo.com/share/item/3533197197?ad_tag=1_10013_1&d_r=6__1-7-2-14', '0');
INSERT INTO `goods` VALUES ('121', '荷叶边显瘦鱼尾裙连衣裙', './images/7e6a98acea6308b72e3053187c425777.jpg', '89', 'http://www.meilishuo.com/share/item/3549129641?ad_tag=1_10013_1&d_r=6__1-7-2-13', '0');
INSERT INTO `goods` VALUES ('122', '印花蕾丝无袖欧根纱连衣裙', './images/7fab916d7f5ef61f2640ede509f96090.jpg', '105', 'http://www.meilishuo.com/share/item/3551246769?ad_tag=1_10013_1&d_r=6__1-7-2-17', '0');
INSERT INTO `goods` VALUES ('123', '做旧磨边百搭背带牛仔裙', './images/a7265b027fbd56b4b540bdd0c74709ae.jpg', '69', 'http://www.meilishuo.com/share/item/3530184457?ad_tag=1_10013_1&d_r=6__1-7-2-15', '0');
INSERT INTO `goods` VALUES ('124', '假两件无袖棉麻连衣裙', './images/2a6ab27548bb2b2229b261b3bebecfc6.jpg', '98', 'http://www.meilishuo.com/share/item/3533197197?ad_tag=1_10013_1&d_r=6__1-7-2-14', '0');
INSERT INTO `goods` VALUES ('125', '气质荷叶袖包臀裙连衣裙', './images/10de0fbefd1750dc5c81fad66b3636d9.jpg', '70', 'http://www.meilishuo.com/share/item/3517338529?ad_tag=1_10013_1&d_r=6__1-7-2-18', '0');
INSERT INTO `goods` VALUES ('126', '简约 露背系带连衣裙', './images/7cb5252f11b7181865986e9b1c813563.jpg', '69', 'http://www.meilishuo.com/share/item/3169297671?ad_tag=1_10013_1&d_r=6__1-7-2-16', '0');
INSERT INTO `goods` VALUES ('127', '做旧磨边百搭背带牛仔裙', './images/a7265b027fbd56b4b540bdd0c74709ae.jpg', '69', 'http://www.meilishuo.com/share/item/3530184457?ad_tag=1_10013_1&d_r=6__1-7-2-15', '0');
INSERT INTO `goods` VALUES ('128', '雪纺波西米亚长裙半身裙', './images/cdeff333d4b50df78e19f9f8fe9e1f94.jpg', '68', 'http://www.meilishuo.com/share/item/3558329787?ad_tag=1_0_1&d_r=6__1-7-2-19', '0');
INSERT INTO `goods` VALUES ('129', '印花蕾丝无袖欧根纱连衣裙', './images/7fab916d7f5ef61f2640ede509f96090.jpg', '105', 'http://www.meilishuo.com/share/item/3551246769?ad_tag=1_10013_1&d_r=6__1-7-2-17', '0');
INSERT INTO `goods` VALUES ('130', '简约 露背系带连衣裙', './images/7cb5252f11b7181865986e9b1c813563.jpg', '69', 'http://www.meilishuo.com/share/item/3169297671?ad_tag=1_10013_1&d_r=6__1-7-2-16', '0');
INSERT INTO `goods` VALUES ('131', '气质荷叶袖包臀裙连衣裙', './images/10de0fbefd1750dc5c81fad66b3636d9.jpg', '70', 'http://www.meilishuo.com/share/item/3517338529?ad_tag=1_10013_1&d_r=6__1-7-2-18', '0');
INSERT INTO `goods` VALUES ('132', '海军风T恤裙短裙连衣裙', './images/688afce2e4d490ce99f191f474083e81.jpg', '57', 'http://www.meilishuo.com/share/item/3537508093?ad_tag=1_10013_1&d_r=6__1-7-2-20', '0');
INSERT INTO `goods` VALUES ('133', '印花蕾丝无袖欧根纱连衣裙', './images/7fab916d7f5ef61f2640ede509f96090.jpg', '105', 'http://www.meilishuo.com/share/item/3551246769?ad_tag=1_10013_1&d_r=6__1-7-2-17', '0');
INSERT INTO `goods` VALUES ('134', '雪纺波西米亚长裙半身裙', './images/cdeff333d4b50df78e19f9f8fe9e1f94.jpg', '68', 'http://www.meilishuo.com/share/item/3558329787?ad_tag=1_0_1&d_r=6__1-7-2-19', '0');
INSERT INTO `goods` VALUES ('135', '气质荷叶袖包臀裙连衣裙', './images/10de0fbefd1750dc5c81fad66b3636d9.jpg', '70', 'http://www.meilishuo.com/share/item/3517338529?ad_tag=1_10013_1&d_r=6__1-7-2-18', '0');
INSERT INTO `goods` VALUES ('136', '海军风T恤裙短裙连衣裙', './images/688afce2e4d490ce99f191f474083e81.jpg', '57', 'http://www.meilishuo.com/share/item/3537508093?ad_tag=1_10013_1&d_r=6__1-7-2-20', '0');
INSERT INTO `goods` VALUES ('137', '雪纺波西米亚长裙半身裙', './images/cdeff333d4b50df78e19f9f8fe9e1f94.jpg', '68', 'http://www.meilishuo.com/share/item/3558329787?ad_tag=1_0_1&d_r=6__1-7-2-19', '0');
INSERT INTO `goods` VALUES ('138', '海军风T恤裙短裙连衣裙', './images/688afce2e4d490ce99f191f474083e81.jpg', '57', 'http://www.meilishuo.com/share/item/3537508093?ad_tag=1_10013_1&d_r=6__1-7-2-20', '0');
INSERT INTO `goods` VALUES ('139', '韩版数字83号连衣裙', './images/24dd4dad34f6fd86527402fb3607de9a.jpg', '48', 'http://www.meilishuo.com/share/item/3519468773?ad_tag=1_10013_1&d_r=6__1-8-2-1', '0');
INSERT INTO `goods` VALUES ('140', '短袖气质欧根纱连衣裙', './images/30827ae7fe308bbae7a546f70e50cb7e.jpg', '95', 'http://www.meilishuo.com/share/item/3525697897?ad_tag=1_10013_1&d_r=6__1-8-2-2', '0');
INSERT INTO `goods` VALUES ('141', '字母T恤拼接牛仔裙连衣裙', './images/e041ac8e36a59388212d2870c3069688.jpg', '88', 'http://www.meilishuo.com/share/item/3528278719?ad_tag=1_10013_1&d_r=6__1-8-2-3', '0');
INSERT INTO `goods` VALUES ('142', '百搭半身牛仔包臀短裙', './images/5039e7d0fd0cfb9af0981b3c485dc01b.jpg', '89', 'http://www.meilishuo.com/share/item/3542778151?ad_tag=1_10013_1&d_r=6__1-8-2-4', '0');
INSERT INTO `goods` VALUES ('143', '2015超值百褶小短裙裤', './images/5371cf3470567d61127a9b9194e57e79.jpg', '70', 'http://www.meilishuo.com/share/item/3519168371?ad_tag=1_10013_1&d_r=6__1-8-2-5', '0');
INSERT INTO `goods` VALUES ('144', '仙人掌印花宽松大码连衣裙', './images/fd07bb56695b332a326417ac8638a4f2.jpg', '79', 'http://www.meilishuo.com/share/item/3555607693?ad_tag=1_10013_1&d_r=6__1-8-2-6', '0');
INSERT INTO `goods` VALUES ('145', '大牌无袖雪纺短裙连衣裙', './images/92f157fd6800eb3cd0258031a2a90c40.jpg', '79', 'http://www.meilishuo.com/share/item/3554813199?ad_tag=1_10013_1&d_r=6__1-8-2-7', '0');
INSERT INTO `goods` VALUES ('146', '亮片短袖下摆拼纱连衣裙', './images/b0c737ee5c99eb09da88494408d09d85.jpg', '79', 'http://www.meilishuo.com/share/item/3553319843?ad_tag=1_10013_1&d_r=6__1-8-2-8', '0');
INSERT INTO `goods` VALUES ('147', '韩版棉麻蝴蝶结腰带连衣裙', './images/d501a5566d135dbd6cdc144f3190cd52.jpg', '79', 'http://www.meilishuo.com/share/item/3557337211?ad_tag=1_10013_1&d_r=6__1-8-2-9', '0');
INSERT INTO `goods` VALUES ('148', '韩版背心高腰圆领连衣裙', './images/4e46c4fe07ba36cf78ba03b4330a2291.jpg', '69', 'http://www.meilishuo.com/share/item/3548628007?ad_tag=1_10013_1&d_r=6__1-8-2-10', '0');
INSERT INTO `goods` VALUES ('149', '韩版海军风露肩短裙连衣裙', './images/59eaf0d95e3e7335825bf8d62054bc1e.jpg', '49', 'http://www.meilishuo.com/share/item/3539117641?ad_tag=1_10013_1&d_r=6__1-8-2-11', '0');
INSERT INTO `goods` VALUES ('150', '夏季不规则印花短裙半身裙', './images/3efe7262d88c3e74cfe0c0142d140537.jpg', '60', 'http://www.meilishuo.com/share/item/3550758419?ad_tag=0_0_1&d_r=6__0-8-2-12', '0');
INSERT INTO `goods` VALUES ('151', '初夏新品高腰雪纺显瘦短裙', './images/508643dd9359127eccc8c3313cdd3fcf.jpg', '55', 'http://www.meilishuo.com/share/item/3527836777?ad_tag=1_10013_1&d_r=6__1-8-2-13', '0');
INSERT INTO `goods` VALUES ('152', '纯色包臀荷叶高腰半身裙', './images/6edcea4e40d931656049a536bf39402e.jpg', '89', 'http://www.meilishuo.com/share/item/3549893831?ad_tag=0_0_1&d_r=6__0-8-2-14', '0');
INSERT INTO `goods` VALUES ('153', '无袖条纹蕾丝拼接连衣裙', './images/2025fa1af657688c221f9e7333876641.jpg', '89', 'http://www.meilishuo.com/share/item/3540093765?ad_tag=1_10013_1&d_r=6__1-8-2-15', '0');
INSERT INTO `goods` VALUES ('154', '大码弹力短裙糖果色20色', './images/1cf23b258b736de278f8f1ea4f49a9c5.jpg', '30', 'http://www.meilishuo.com/share/item/3527535991?ad_tag=1_10013_1&d_r=6__1-8-2-16', '0');
INSERT INTO `goods` VALUES ('155', '初夏连衣裙', './images/339f7d0ad1b920495f81fdf9f541cb84.jpg', '55', 'http://www.meilishuo.com/share/item/3546041821?ad_tag=1_10013_1&d_r=6__1-8-2-17', '0');
INSERT INTO `goods` VALUES ('156', 'PU高腰百褶短裙伞裙皮裙', './images/ed84dfcffccb67c0d41f795ccf8c3d43.jpg', '35', 'http://www.meilishuo.com/share/item/3534896571?ad_tag=1_10013_1&d_r=6__1-8-2-18', '0');
INSERT INTO `goods` VALUES ('157', '纯色勾花镂空A字连衣裙', './images/952b43f4275984bea9c15f5efa0209eb.jpg', '359', 'http://www.meilishuo.com/share/item/3475111921?ad_tag=1_10013_1&d_r=6__1-8-2-19', '0');
INSERT INTO `goods` VALUES ('158', '印花宽松T恤大摆短裙套装', './images/a85a51396cd287ab726b7d76e9743224.jpg', '79', 'http://www.meilishuo.com/share/item/3506779239?ad_tag=1_10013_1&d_r=6__1-8-2-20', '0');
INSERT INTO `goods` VALUES ('159', '无袖潮流斗篷连衣裙', './images/024e31c9b94586bcb09d90eb4cf51e13.jpg', '89', 'http://www.meilishuo.com/share/item/3547229423?ad_tag=1_10013_1&d_r=6__1-9-2-1', '0');
INSERT INTO `goods` VALUES ('160', '喇叭短袖印花雪纺裙连衣裙', './images/e1803a057a52a33075b35395657726b6.jpg', '69', 'http://www.meilishuo.com/share/item/3519343491?ad_tag=0_0_1&d_r=6_89_0-9-2-2', '0');
INSERT INTO `goods` VALUES ('161', '夏装印花连衣裙 送腰带', './images/7cc01988e8351940f072db93319f1bcd.jpg', '128', 'http://www.meilishuo.com/share/item/3522200235?ad_tag=1_10013_1&d_r=6__1-9-2-3', '0');
INSERT INTO `goods` VALUES ('162', '初夏波西米亚露肩连衣裙', './images/2def2b6c64c406a1874e3a890df242f0.jpg', '98', 'http://www.meilishuo.com/share/item/3544201409?ad_tag=1_0_1&d_r=6__1-9-2-4', '0');
INSERT INTO `goods` VALUES ('163', '春夏新款雪纺吊带连衣裙', './images/44f28d3dbb2aabe3b86e254692993bb2.jpg', '71', 'http://www.meilishuo.com/share/item/3535291123?ad_tag=1_10013_1&d_r=6__1-9-2-5', '0');
INSERT INTO `goods` VALUES ('164', '欧美范休闲短袖连衣裙', './images/4301a676952a1e16fcf7459995ccf650.jpg', '69', 'http://www.meilishuo.com/share/item/3495195965?ad_tag=1_10013_1&d_r=6__1-9-2-6', '0');
INSERT INTO `goods` VALUES ('165', '气质纯色背带裙连衣裙', './images/99a76739515905f6004c8e32ab903206.jpg', '79', 'http://www.meilishuo.com/share/item/3527545949?ad_tag=1_10013_1&d_r=6__1-9-2-7', '0');
INSERT INTO `goods` VALUES ('166', '夏季条纹网纱无袖连衣裙', './images/625aa837def4cad7c7c05f6fc88a8489.jpg', '119', 'http://www.meilishuo.com/share/item/3558659473?ad_tag=1_10013_1&d_r=6__1-9-2-8', '0');
INSERT INTO `goods` VALUES ('167', '字母棉料接拼牛仔连衣裙', './images/4331c3b9def4ff975ff8952634143689.jpg', '79', 'http://www.meilishuo.com/share/item/3547725535?ad_tag=0_0_1&d_r=6__0-9-2-9', '0');
INSERT INTO `goods` VALUES ('168', '新款叶边鱼尾包臀半身裙', './images/1650fc37e0b7d04c65ced61942a4089a.jpg', '68', 'http://www.meilishuo.com/share/item/3498989515?ad_tag=1_10013_1&d_r=6__1-9-2-10', '0');
INSERT INTO `goods` VALUES ('169', '欧美风高腰AA牛仔短裙', './images/499b51a15427fcfa403553fe97dd318e.jpg', '70', 'http://www.meilishuo.com/share/item/3442770519?ad_tag=1_10013_1&d_r=6__1-9-2-11', '0');
INSERT INTO `goods` VALUES ('170', '夏季新款宽松印花连衣裙', './images/6db11a259f16264243e490276fe029a0.jpg', '138', 'http://www.meilishuo.com/share/item/3550261711?ad_tag=1_10013_1&d_r=6__1-9-2-12', '0');
INSERT INTO `goods` VALUES ('171', '韩版背心连衣裙短裙蓬蓬裙', './images/4996c857b17d917a448c8ccaededd837.jpg', '78', 'http://www.meilishuo.com/share/item/3467324879?ad_tag=1_10013_1&d_r=6__1-10-2-1', '0');
INSERT INTO `goods` VALUES ('172', '假两件针织T恤 牛仔裙', './images/b92edc5a8ae04e048dffb41e313adcd6.jpg', '127', 'http://www.meilishuo.com/share/item/3514827687?ad_tag=1_10013_1&d_r=6__1-9-2-13', '0');
INSERT INTO `goods` VALUES ('173', '网纱短袖亮片印花连衣裙', './images/09f9a0ec8510367f1db415b25471abd5.jpg', '59', 'http://www.meilishuo.com/share/item/3524487751?ad_tag=1_10013_1&d_r=6__1-10-2-2', '0');
INSERT INTO `goods` VALUES ('174', '夏季亚麻打底裙连衣裙短裙', './images/ec75246697d7b9565d080ec56ecdaf45.jpg', '47', 'http://www.meilishuo.com/share/item/3550638101?ad_tag=1_10013_1&d_r=6__1-9-2-14', '0');
INSERT INTO `goods` VALUES ('175', '飞飞袖荷叶边包臀连衣裙', './images/9d59e3921141905b4ff1f71bd0ee479e.jpg', '98', 'http://www.meilishuo.com/share/item/3537849393?ad_tag=1_10013_1&d_r=6__1-10-2-3', '0');
INSERT INTO `goods` VALUES ('176', '镂空领性感修身连衣裙短', './images/8e81a37991a0ea41e4bde9dd0a3c2db5.jpg', '69', 'http://www.meilishuo.com/share/item/3557452071?ad_tag=0_0_1&d_r=6__0-9-2-15', '0');
INSERT INTO `goods` VALUES ('177', '夏装印花撞色短袖连衣裙', './images/8a9250b0e0be9093cfa4a7b4d7c3474b.jpg', '105', 'http://www.meilishuo.com/share/item/3527937075?ad_tag=1_10013_1&d_r=6__1-10-2-4', '0');
INSERT INTO `goods` VALUES ('178', 'HI夏季新款印花A字裙', './images/19a00fe319b37cd6f20ef6c810c3f96d.jpg', '168', 'http://www.meilishuo.com/share/item/3546889517?ad_tag=1_10013_1&d_r=6__1-9-2-16', '0');
INSERT INTO `goods` VALUES ('179', '修身蕾丝牛仔印花连衣裙', './images/89978655633d84a7f946b9a1c069bc07.jpg', '69', 'http://www.meilishuo.com/share/item/3505471839?ad_tag=1_10013_1&d_r=6__1-10-2-5', '0');
INSERT INTO `goods` VALUES ('180', '欧根纱拼接纯色蛋糕连衣裙', './images/cc515dac6f3b6f6176f04dd8cd24a75d.jpg', '79', 'http://www.meilishuo.com/share/item/3521872067?ad_tag=1_10013_1&d_r=6__1-9-2-17', '0');
INSERT INTO `goods` VALUES ('181', '全棉针织运动连衣裙', './images/4fb0d684533f8b555d16d4fe713ff93a.jpg', '48', 'http://www.meilishuo.com/share/item/3426053107?ad_tag=1_10013_1&d_r=6__1-10-2-6', '0');
INSERT INTO `goods` VALUES ('182', '破洞牛仔短裙', './images/f94dae82182ebd2e4d828a455afa12b6.jpg', '89', 'http://www.meilishuo.com/share/item/3521593865?ad_tag=1_10013_1&d_r=6__1-9-2-18', '0');
INSERT INTO `goods` VALUES ('183', '卡通印花短袖T恤连衣裙', './images/cb27d980a61d73b11264a6b1e337554b.jpg', '65', 'http://www.meilishuo.com/share/item/3527359593?ad_tag=1_10013_1&d_r=6__1-10-2-7', '0');
INSERT INTO `goods` VALUES ('184', '小清新印花雪纺裙短裙', './images/812a0465eb7644fbe1f974a8d79a2cc6.jpg', '78', 'http://www.meilishuo.com/share/item/3545063975?ad_tag=1_10013_1&d_r=6__1-9-2-19', '0');
INSERT INTO `goods` VALUES ('185', '韩国气质褶皱显瘦短裙潮', './images/930c35f72a75ece04ecff322b75cbed2.jpg', '55', 'http://www.meilishuo.com/share/item/3537428335?ad_tag=0_0_1&d_r=6__0-14-2-1', '0');
INSERT INTO `goods` VALUES ('186', '韩国气质褶皱显瘦短裙潮', './images/930c35f72a75ece04ecff322b75cbed2.jpg', '55', 'http://www.meilishuo.com/share/item/3537428335?ad_tag=0_0_1&d_r=6__0-14-2-1', '0');
INSERT INTO `goods` VALUES ('187', '拼色宽松短款连衣裙', './images/01884e43a82f280c426e59612e02b0ed.jpg', '78', 'http://www.meilishuo.com/share/item/3531729131?ad_tag=1_10013_1&d_r=6__1-10-2-8', '0');
INSERT INTO `goods` VALUES ('188', '韩国气质褶皱显瘦短裙潮', './images/930c35f72a75ece04ecff322b75cbed2.jpg', '55', 'http://www.meilishuo.com/share/item/3537428335?ad_tag=0_0_1&d_r=6__0-14-2-1', '0');
INSERT INTO `goods` VALUES ('189', '韩国气质褶皱显瘦短裙潮', './images/930c35f72a75ece04ecff322b75cbed2.jpg', '55', 'http://www.meilishuo.com/share/item/3537428335?ad_tag=0_0_1&d_r=6__0-14-2-1', '0');
INSERT INTO `goods` VALUES ('190', '圆领背心连衣裙背心短裙', './images/76aa8248f86cb7476693425b658c5f0e.jpg', '66', 'http://www.meilishuo.com/share/item/3476073827?ad_tag=1_10013_1&d_r=6__1-9-2-20', '0');
INSERT INTO `goods` VALUES ('191', '蕾丝A字裙宽松打底连衣裙', './images/4b4a0bf39c9298e0f6484f9237220c11.jpg', '68', 'http://www.meilishuo.com/share/item/3493122485?ad_tag=0_0_1&d_r=6__0-14-2-2', '0');
INSERT INTO `goods` VALUES ('192', '蕾丝A字裙宽松打底连衣裙', './images/4b4a0bf39c9298e0f6484f9237220c11.jpg', '68', 'http://www.meilishuo.com/share/item/3493122485?ad_tag=0_0_1&d_r=6__0-14-2-2', '0');
INSERT INTO `goods` VALUES ('193', '韩版短裙A字牛仔半身裙', './images/df8a144f77f587afa468cecdbd068b2b.jpg', '67', 'http://www.meilishuo.com/share/item/3477469423?ad_tag=1_10013_1&d_r=6__1-10-2-9', '0');
INSERT INTO `goods` VALUES ('194', '蕾丝A字裙宽松打底连衣裙', './images/4b4a0bf39c9298e0f6484f9237220c11.jpg', '68', 'http://www.meilishuo.com/share/item/3493122485?ad_tag=0_0_1&d_r=6__0-14-2-2', '0');
INSERT INTO `goods` VALUES ('195', '蕾丝A字裙宽松打底连衣裙', './images/4b4a0bf39c9298e0f6484f9237220c11.jpg', '68', 'http://www.meilishuo.com/share/item/3493122485?ad_tag=0_0_1&d_r=6__0-14-2-2', '0');
INSERT INTO `goods` VALUES ('196', '名媛V领吊带蓬蓬连衣裙', './images/913bdd9a78fe1e34eeeb58cbd1fbb633.jpg', '85', 'http://www.meilishuo.com/share/item/3460522493?ad_tag=0_0_1&d_r=6__0-14-2-3', '0');
INSERT INTO `goods` VALUES ('197', '螺纹小包裙', './images/fb2c3bc89e74371140d73333f62110a6.jpg', '59', 'http://www.meilishuo.com/share/item/3547593793?ad_tag=1_10013_1&d_r=6__1-10-2-10', '0');
INSERT INTO `goods` VALUES ('198', '名媛V领吊带蓬蓬连衣裙', './images/913bdd9a78fe1e34eeeb58cbd1fbb633.jpg', '85', 'http://www.meilishuo.com/share/item/3460522493?ad_tag=0_0_1&d_r=6__0-14-2-3', '0');
INSERT INTO `goods` VALUES ('199', '名媛V领吊带蓬蓬连衣裙', './images/913bdd9a78fe1e34eeeb58cbd1fbb633.jpg', '85', 'http://www.meilishuo.com/share/item/3460522493?ad_tag=0_0_1&d_r=6__0-14-2-3', '0');
INSERT INTO `goods` VALUES ('200', '韩版修身漏背收腰连衣裙', './images/2be995e415ba3159d553fce1a34ace3e.jpg', '88', 'http://www.meilishuo.com/share/item/3477460349?ad_tag=0_0_1&d_r=6__0-14-2-4', '0');
INSERT INTO `goods` VALUES ('201', '前后V领连衣短裙B19', './images/8495bd7618608a45383917145911e796.jpg', '49', 'http://www.meilishuo.com/share/item/3525479523?ad_tag=1_10013_1&d_r=6__1-10-2-11', '0');
INSERT INTO `goods` VALUES ('202', '名媛V领吊带蓬蓬连衣裙', './images/913bdd9a78fe1e34eeeb58cbd1fbb633.jpg', '85', 'http://www.meilishuo.com/share/item/3460522493?ad_tag=0_0_1&d_r=6__0-14-2-3', '0');
INSERT INTO `goods` VALUES ('203', '韩版修身漏背收腰连衣裙', './images/2be995e415ba3159d553fce1a34ace3e.jpg', '88', 'http://www.meilishuo.com/share/item/3477460349?ad_tag=0_0_1&d_r=6__0-14-2-4', '0');
INSERT INTO `goods` VALUES ('204', '2015新品牛仔包裙破洞', './images/f799cdc0f912f61349d93cc8bdf243ba.jpg', '69', 'http://www.meilishuo.com/share/item/3536516507?ad_tag=0_0_1&d_r=6__0-14-2-5', '0');
INSERT INTO `goods` VALUES ('205', '韩版修身漏背收腰连衣裙', './images/2be995e415ba3159d553fce1a34ace3e.jpg', '88', 'http://www.meilishuo.com/share/item/3477460349?ad_tag=0_0_1&d_r=6__0-14-2-4', '0');
INSERT INTO `goods` VALUES ('206', '波西米亚无袖印花雪纺裙', './images/78c3c268da2745410cf65aab17ecfd67.jpg', '88', 'http://www.meilishuo.com/share/item/3522667765?ad_tag=1_10013_1&d_r=6__1-10-2-12', '0');
INSERT INTO `goods` VALUES ('207', '韩版修身漏背收腰连衣裙', './images/2be995e415ba3159d553fce1a34ace3e.jpg', '88', 'http://www.meilishuo.com/share/item/3477460349?ad_tag=0_0_1&d_r=6__0-14-2-4', '0');
INSERT INTO `goods` VALUES ('208', '2015新品牛仔包裙破洞', './images/f799cdc0f912f61349d93cc8bdf243ba.jpg', '69', 'http://www.meilishuo.com/share/item/3536516507?ad_tag=0_0_1&d_r=6__0-14-2-5', '0');
INSERT INTO `goods` VALUES ('209', '2015高腰牛仔包裙短裙', './images/8e0d550f28c3f8ad6fc6ebbe4f62ea7b.jpg', '69', 'http://www.meilishuo.com/share/item/3536509045?ad_tag=0_0_1&d_r=6__0-14-2-6', '0');
INSERT INTO `goods` VALUES ('210', '2015新品牛仔包裙破洞', './images/f799cdc0f912f61349d93cc8bdf243ba.jpg', '69', 'http://www.meilishuo.com/share/item/3536516507?ad_tag=0_0_1&d_r=6__0-14-2-5', '0');
INSERT INTO `goods` VALUES ('211', '夏装牛仔吊带半身裙', './images/2ddd49e027207b180847b408cd10bc5b.jpg', '75', 'http://www.meilishuo.com/share/item/3524087935?ad_tag=1_10013_1&d_r=6__1-10-2-13', '0');
INSERT INTO `goods` VALUES ('212', '2015高腰牛仔包裙短裙', './images/8e0d550f28c3f8ad6fc6ebbe4f62ea7b.jpg', '69', 'http://www.meilishuo.com/share/item/3536509045?ad_tag=0_0_1&d_r=6__0-14-2-6', '0');
INSERT INTO `goods` VALUES ('213', '2015新品牛仔包裙破洞', './images/f799cdc0f912f61349d93cc8bdf243ba.jpg', '69', 'http://www.meilishuo.com/share/item/3536516507?ad_tag=0_0_1&d_r=6__0-14-2-5', '0');
INSERT INTO `goods` VALUES ('214', '春夏新款显瘦雪纺连衣裙', './images/47ce394385623a43d31d5ce4223fe210.jpg', '128', 'http://www.meilishuo.com/share/item/3545222117?ad_tag=0_0_1&d_r=6__0-14-2-7', '0');
INSERT INTO `goods` VALUES ('215', '2015高腰牛仔包裙短裙', './images/8e0d550f28c3f8ad6fc6ebbe4f62ea7b.jpg', '69', 'http://www.meilishuo.com/share/item/3536509045?ad_tag=0_0_1&d_r=6__0-14-2-6', '0');
INSERT INTO `goods` VALUES ('216', '修身圆领镂空短袖连衣裙', './images/9daa953293cd012ebe1d33573ecd7328.jpg', '68', 'http://www.meilishuo.com/share/item/3540539371?ad_tag=1_10013_1&d_r=6__1-10-2-14', '0');
INSERT INTO `goods` VALUES ('217', '2015高腰牛仔包裙短裙', './images/8e0d550f28c3f8ad6fc6ebbe4f62ea7b.jpg', '69', 'http://www.meilishuo.com/share/item/3536509045?ad_tag=0_0_1&d_r=6__0-14-2-6', '0');
INSERT INTO `goods` VALUES ('218', '春夏新款显瘦雪纺连衣裙', './images/47ce394385623a43d31d5ce4223fe210.jpg', '128', 'http://www.meilishuo.com/share/item/3545222117?ad_tag=0_0_1&d_r=6__0-14-2-7', '0');
INSERT INTO `goods` VALUES ('219', '交叉肩带连衣裙', './images/03134213489fefcdf898719d50f0ccf7.jpg', '79', 'http://www.meilishuo.com/share/item/3535997291?ad_tag=0_0_1&d_r=6__0-14-2-8', '0');
INSERT INTO `goods` VALUES ('220', '春夏新款显瘦雪纺连衣裙', './images/47ce394385623a43d31d5ce4223fe210.jpg', '128', 'http://www.meilishuo.com/share/item/3545222117?ad_tag=0_0_1&d_r=6__0-14-2-7', '0');
INSERT INTO `goods` VALUES ('221', '夏季修身两件套连衣长裙', './images/8adaff7518165f53986f9bc3e6d82877.jpg', '99', 'http://www.meilishuo.com/share/item/3544210593?ad_tag=1_10013_1&d_r=6__1-10-2-15', '0');
INSERT INTO `goods` VALUES ('222', '春夏新款显瘦雪纺连衣裙', './images/47ce394385623a43d31d5ce4223fe210.jpg', '128', 'http://www.meilishuo.com/share/item/3545222117?ad_tag=0_0_1&d_r=6__0-14-2-7', '0');
INSERT INTO `goods` VALUES ('223', '交叉肩带连衣裙', './images/03134213489fefcdf898719d50f0ccf7.jpg', '79', 'http://www.meilishuo.com/share/item/3535997291?ad_tag=0_0_1&d_r=6__0-14-2-8', '0');
INSERT INTO `goods` VALUES ('224', '韩版条纹梦幻连衣裙', './images/f17a6f45cc18673baf4dd125b35f25e8.jpg', '69', 'http://www.meilishuo.com/share/item/3546902865?ad_tag=0_0_1&d_r=6__0-14-2-9', '0');
INSERT INTO `goods` VALUES ('225', '交叉肩带连衣裙', './images/03134213489fefcdf898719d50f0ccf7.jpg', '79', 'http://www.meilishuo.com/share/item/3535997291?ad_tag=0_0_1&d_r=6__0-14-2-8', '0');
INSERT INTO `goods` VALUES ('226', '印花修身A字裙无袖连衣裙', './images/ee97bc70170e8c9b4b7f3a0d1b5366be.jpg', '79', 'http://www.meilishuo.com/share/item/3512404549?ad_tag=1_10013_1&d_r=6__1-10-2-16', '0');
INSERT INTO `goods` VALUES ('227', '交叉肩带连衣裙', './images/03134213489fefcdf898719d50f0ccf7.jpg', '79', 'http://www.meilishuo.com/share/item/3535997291?ad_tag=0_0_1&d_r=6__0-14-2-8', '0');
INSERT INTO `goods` VALUES ('228', '夏季韩版针织包臀连衣裙', './images/b1daf44ac8846ba8b040208c68a9d5c2.jpg', '79', 'http://www.meilishuo.com/share/item/3545525785?ad_tag=0_0_1&d_r=6__0-14-2-10', '0');
INSERT INTO `goods` VALUES ('229', '韩版条纹梦幻连衣裙', './images/f17a6f45cc18673baf4dd125b35f25e8.jpg', '69', 'http://www.meilishuo.com/share/item/3546902865?ad_tag=0_0_1&d_r=6__0-14-2-9', '0');
INSERT INTO `goods` VALUES ('230', '韩版条纹梦幻连衣裙', './images/f17a6f45cc18673baf4dd125b35f25e8.jpg', '69', 'http://www.meilishuo.com/share/item/3546902865?ad_tag=0_0_1&d_r=6__0-14-2-9', '0');
INSERT INTO `goods` VALUES ('231', 'V领黑色名媛内搭短裙', './images/f3ec263f957cab7af116fa1ff4588a47.jpg', '270', 'http://www.meilishuo.com/share/item/3482880505?ad_tag=1_10013_1&d_r=6__1-10-2-17', '0');
INSERT INTO `goods` VALUES ('232', '韩版条纹梦幻连衣裙', './images/f17a6f45cc18673baf4dd125b35f25e8.jpg', '69', 'http://www.meilishuo.com/share/item/3546902865?ad_tag=0_0_1&d_r=6__0-14-2-9', '0');
INSERT INTO `goods` VALUES ('233', '韩版显瘦雪纺连衣裙短裙', './images/3ab49bda748a06eea65a7a3446c23b7a.jpg', '109', 'http://www.meilishuo.com/share/item/3545286341?ad_tag=0_0_1&d_r=6__0-14-2-11', '0');
INSERT INTO `goods` VALUES ('234', '夏季韩版针织包臀连衣裙', './images/b1daf44ac8846ba8b040208c68a9d5c2.jpg', '79', 'http://www.meilishuo.com/share/item/3545525785?ad_tag=0_0_1&d_r=6__0-14-2-10', '0');
INSERT INTO `goods` VALUES ('235', '夏季韩版针织包臀连衣裙', './images/b1daf44ac8846ba8b040208c68a9d5c2.jpg', '79', 'http://www.meilishuo.com/share/item/3545525785?ad_tag=0_0_1&d_r=6__0-14-2-10', '0');
INSERT INTO `goods` VALUES ('236', '春夏新品性感露肩连衣裙', './images/3597b8d000ec2955702c830e81e04d5b.jpg', '109', 'http://www.meilishuo.com/share/item/3540788763?ad_tag=1_10013_1&d_r=6__1-10-2-18', '0');
INSERT INTO `goods` VALUES ('237', '夏季韩版针织包臀连衣裙', './images/b1daf44ac8846ba8b040208c68a9d5c2.jpg', '79', 'http://www.meilishuo.com/share/item/3545525785?ad_tag=0_0_1&d_r=6__0-14-2-10', '0');
INSERT INTO `goods` VALUES ('238', '韩版复古显瘦牛仔背带裙', './images/34419efcf109566faf2c7a12107552e6.jpg', '79', 'http://www.meilishuo.com/share/item/3545122243?ad_tag=0_0_1&d_r=6__0-14-2-12', '0');
INSERT INTO `goods` VALUES ('239', '韩版显瘦雪纺连衣裙短裙', './images/3ab49bda748a06eea65a7a3446c23b7a.jpg', '109', 'http://www.meilishuo.com/share/item/3545286341?ad_tag=0_0_1&d_r=6__0-14-2-11', '0');
INSERT INTO `goods` VALUES ('240', '韩版显瘦雪纺连衣裙短裙', './images/3ab49bda748a06eea65a7a3446c23b7a.jpg', '109', 'http://www.meilishuo.com/share/item/3545286341?ad_tag=0_0_1&d_r=6__0-14-2-11', '0');
INSERT INTO `goods` VALUES ('241', '夏季韩版一字领印花连衣裙', './images/aba4c58be78ac44977e8f25be2dfe57a.jpg', '69', 'http://www.meilishuo.com/share/item/3549227211?ad_tag=0_0_1&d_r=6__0-10-2-19', '0');
INSERT INTO `goods` VALUES ('242', '韩版显瘦雪纺连衣裙短裙', './images/3ab49bda748a06eea65a7a3446c23b7a.jpg', '109', 'http://www.meilishuo.com/share/item/3545286341?ad_tag=0_0_1&d_r=6__0-14-2-11', '0');
INSERT INTO `goods` VALUES ('243', '韩版钩花镂空蕾丝连衣裙', './images/dd721fd414d819b1253caa462fd11c08.jpg', '139', 'http://www.meilishuo.com/share/item/3545265227?ad_tag=0_0_1&d_r=6__0-14-2-13', '0');
INSERT INTO `goods` VALUES ('244', '韩版复古显瘦牛仔背带裙', './images/34419efcf109566faf2c7a12107552e6.jpg', '79', 'http://www.meilishuo.com/share/item/3545122243?ad_tag=0_0_1&d_r=6__0-14-2-12', '0');
INSERT INTO `goods` VALUES ('245', '韩版复古显瘦牛仔背带裙', './images/34419efcf109566faf2c7a12107552e6.jpg', '79', 'http://www.meilishuo.com/share/item/3545122243?ad_tag=0_0_1&d_r=6__0-14-2-12', '0');
INSERT INTO `goods` VALUES ('246', '学院风宽松牛仔背带连衣裙', './images/8b1618d1baa9265c0195225dea7463fb.jpg', '75', 'http://www.meilishuo.com/share/item/3508180437?ad_tag=1_10013_1&d_r=6__1-10-2-20', '0');
INSERT INTO `goods` VALUES ('247', '韩版复古显瘦牛仔背带裙', './images/34419efcf109566faf2c7a12107552e6.jpg', '79', 'http://www.meilishuo.com/share/item/3545122243?ad_tag=0_0_1&d_r=6__0-14-2-12', '0');
INSERT INTO `goods` VALUES ('248', '[预售]名族风刺绣深V领连衣裙', './images/f7ca4df5f1e716d33495c6bdf3603c87.jpg', '109', 'http://www.meilishuo.com/share/item/3527951501?ad_tag=0_0_1&d_r=6__0-14-2-14', '0');
INSERT INTO `goods` VALUES ('249', '韩版钩花镂空蕾丝连衣裙', './images/dd721fd414d819b1253caa462fd11c08.jpg', '139', 'http://www.meilishuo.com/share/item/3545265227?ad_tag=0_0_1&d_r=6__0-14-2-13', '0');
INSERT INTO `goods` VALUES ('250', '韩版钩花镂空蕾丝连衣裙', './images/dd721fd414d819b1253caa462fd11c08.jpg', '139', 'http://www.meilishuo.com/share/item/3545265227?ad_tag=0_0_1&d_r=6__0-14-2-13', '0');
INSERT INTO `goods` VALUES ('251', '韩版钩花镂空蕾丝连衣裙', './images/dd721fd414d819b1253caa462fd11c08.jpg', '139', 'http://www.meilishuo.com/share/item/3545265227?ad_tag=0_0_1&d_r=6__0-14-2-13', '0');
INSERT INTO `goods` VALUES ('252', '正版欧根纱披肩连衣裙', './images/a59d5380b9a67472faa4f783af3f941f.jpg', '89', 'http://www.meilishuo.com/share/item/3547898061?ad_tag=0_0_1&d_r=6__0-14-2-15', '0');
INSERT INTO `goods` VALUES ('253', '[预售]名族风刺绣深V领连衣裙', './images/f7ca4df5f1e716d33495c6bdf3603c87.jpg', '109', 'http://www.meilishuo.com/share/item/3527951501?ad_tag=0_0_1&d_r=6__0-14-2-14', '0');
INSERT INTO `goods` VALUES ('254', '[预售]名族风刺绣深V领连衣裙', './images/f7ca4df5f1e716d33495c6bdf3603c87.jpg', '109', 'http://www.meilishuo.com/share/item/3527951501?ad_tag=0_0_1&d_r=6__0-14-2-14', '0');
INSERT INTO `goods` VALUES ('255', '[预售]名族风刺绣深V领连衣裙', './images/f7ca4df5f1e716d33495c6bdf3603c87.jpg', '109', 'http://www.meilishuo.com/share/item/3527951501?ad_tag=0_0_1&d_r=6__0-14-2-14', '0');
INSERT INTO `goods` VALUES ('256', '灯笼袖网纱连衣裙', './images/ba47ea9c70aab0108e2ee8cd058ede18.jpg', '89', 'http://www.meilishuo.com/share/item/3537526415?ad_tag=0_0_1&d_r=6__0-14-2-16', '0');
INSERT INTO `goods` VALUES ('257', '正版欧根纱披肩连衣裙', './images/a59d5380b9a67472faa4f783af3f941f.jpg', '89', 'http://www.meilishuo.com/share/item/3547898061?ad_tag=0_0_1&d_r=6__0-14-2-15', '0');
INSERT INTO `goods` VALUES ('258', '正版欧根纱披肩连衣裙', './images/a59d5380b9a67472faa4f783af3f941f.jpg', '89', 'http://www.meilishuo.com/share/item/3547898061?ad_tag=0_0_1&d_r=6__0-14-2-15', '0');
INSERT INTO `goods` VALUES ('259', '正版欧根纱披肩连衣裙', './images/a59d5380b9a67472faa4f783af3f941f.jpg', '89', 'http://www.meilishuo.com/share/item/3547898061?ad_tag=0_0_1&d_r=6__0-14-2-15', '0');
INSERT INTO `goods` VALUES ('260', '破洞欧美风牛仔短裙', './images/ab573e563c271e98cafab9a36ffd6d36.jpg', '49', 'http://www.meilishuo.com/share/item/3530126015?ad_tag=0_0_1&d_r=6__0-14-2-17', '0');
INSERT INTO `goods` VALUES ('261', '灯笼袖网纱连衣裙', './images/ba47ea9c70aab0108e2ee8cd058ede18.jpg', '89', 'http://www.meilishuo.com/share/item/3537526415?ad_tag=0_0_1&d_r=6__0-14-2-16', '0');
INSERT INTO `goods` VALUES ('262', '灯笼袖网纱连衣裙', './images/ba47ea9c70aab0108e2ee8cd058ede18.jpg', '89', 'http://www.meilishuo.com/share/item/3537526415?ad_tag=0_0_1&d_r=6__0-14-2-16', '0');
INSERT INTO `goods` VALUES ('263', '灯笼袖网纱连衣裙', './images/ba47ea9c70aab0108e2ee8cd058ede18.jpg', '89', 'http://www.meilishuo.com/share/item/3537526415?ad_tag=0_0_1&d_r=6__0-14-2-16', '0');
INSERT INTO `goods` VALUES ('264', '夏刺绣A字裙欧根纱连衣裙', './images/2054540a06a0c46019660bca9d0850bd.jpg', '88', 'http://www.meilishuo.com/share/item/3547093985?ad_tag=0_0_1&d_r=6__0-14-2-18', '0');
INSERT INTO `goods` VALUES ('265', '破洞欧美风牛仔短裙', './images/ab573e563c271e98cafab9a36ffd6d36.jpg', '49', 'http://www.meilishuo.com/share/item/3530126015?ad_tag=0_0_1&d_r=6__0-14-2-17', '0');
INSERT INTO `goods` VALUES ('266', '破洞欧美风牛仔短裙', './images/ab573e563c271e98cafab9a36ffd6d36.jpg', '49', 'http://www.meilishuo.com/share/item/3530126015?ad_tag=0_0_1&d_r=6__0-14-2-17', '0');
INSERT INTO `goods` VALUES ('267', '破洞欧美风牛仔短裙', './images/ab573e563c271e98cafab9a36ffd6d36.jpg', '49', 'http://www.meilishuo.com/share/item/3530126015?ad_tag=0_0_1&d_r=6__0-14-2-17', '0');
INSERT INTO `goods` VALUES ('268', '韩版蕾丝短裙背心裙连衣裙', './images/f9526cafcc30994e90feaec0becd8c59.jpg', '89', 'http://www.meilishuo.com/share/item/3491548475?ad_tag=0_0_1&d_r=6__0-14-2-19', '0');
INSERT INTO `goods` VALUES ('269', '夏刺绣A字裙欧根纱连衣裙', './images/2054540a06a0c46019660bca9d0850bd.jpg', '88', 'http://www.meilishuo.com/share/item/3547093985?ad_tag=0_0_1&d_r=6__0-14-2-18', '0');
INSERT INTO `goods` VALUES ('270', '夏刺绣A字裙欧根纱连衣裙', './images/2054540a06a0c46019660bca9d0850bd.jpg', '88', 'http://www.meilishuo.com/share/item/3547093985?ad_tag=0_0_1&d_r=6__0-14-2-18', '0');
INSERT INTO `goods` VALUES ('271', '夏刺绣A字裙欧根纱连衣裙', './images/2054540a06a0c46019660bca9d0850bd.jpg', '88', 'http://www.meilishuo.com/share/item/3547093985?ad_tag=0_0_1&d_r=6__0-14-2-18', '0');
INSERT INTO `goods` VALUES ('272', '吊带露肩一字领连衣裙短裙', './images/3f4f9664d95771901014a2e95110970c.jpg', '65', 'http://www.meilishuo.com/share/item/3472972117?ad_tag=0_0_1&d_r=6__0-14-2-20', '0');
INSERT INTO `goods` VALUES ('273', '韩版蕾丝短裙背心裙连衣裙', './images/f9526cafcc30994e90feaec0becd8c59.jpg', '89', 'http://www.meilishuo.com/share/item/3491548475?ad_tag=0_0_1&d_r=6__0-14-2-19', '0');
INSERT INTO `goods` VALUES ('274', '韩版蕾丝短裙背心裙连衣裙', './images/f9526cafcc30994e90feaec0becd8c59.jpg', '89', 'http://www.meilishuo.com/share/item/3491548475?ad_tag=0_0_1&d_r=6__0-14-2-19', '0');
INSERT INTO `goods` VALUES ('275', '韩版蕾丝短裙背心裙连衣裙', './images/f9526cafcc30994e90feaec0becd8c59.jpg', '89', 'http://www.meilishuo.com/share/item/3491548475?ad_tag=0_0_1&d_r=6__0-14-2-19', '0');
INSERT INTO `goods` VALUES ('276', '吊带露肩一字领连衣裙短裙', './images/3f4f9664d95771901014a2e95110970c.jpg', '65', 'http://www.meilishuo.com/share/item/3472972117?ad_tag=0_0_1&d_r=6__0-14-2-20', '0');
INSERT INTO `goods` VALUES ('277', '吊带露肩一字领连衣裙短裙', './images/3f4f9664d95771901014a2e95110970c.jpg', '65', 'http://www.meilishuo.com/share/item/3472972117?ad_tag=0_0_1&d_r=6__0-14-2-20', '0');
INSERT INTO `goods` VALUES ('278', '吊带露肩一字领连衣裙短裙', './images/3f4f9664d95771901014a2e95110970c.jpg', '65', 'http://www.meilishuo.com/share/item/3472972117?ad_tag=0_0_1&d_r=6__0-14-2-20', '0');

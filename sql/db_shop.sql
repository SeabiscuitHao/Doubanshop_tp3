/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : db_shop

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-06-03 16:59:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_address
-- ----------------------------
DROP TABLE IF EXISTS `tb_address`;
CREATE TABLE `tb_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `info` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `createtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `phone` varchar(13) NOT NULL DEFAULT '',
  `province` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `area` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_address
-- ----------------------------
INSERT INTO `tb_address` VALUES ('1', '1', '北华大学', '1', '2018-05-27 10:51:27', null, '15945678945', '北京市', '北京市市辖区', '东城区', '郝帅');
INSERT INTO `tb_address` VALUES ('2', '1', '新地山湾', '1', '2018-05-29 20:03:47', null, '15590062337', '山西省', '阳泉市', '平定县', '郝铁柱');

-- ----------------------------
-- Table structure for tb_banner
-- ----------------------------
DROP TABLE IF EXISTS `tb_banner`;
CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `createtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_banner
-- ----------------------------
INSERT INTO `tb_banner` VALUES ('1', '123', '/Public/Home/images/file-1521684961-1.jpg', '2', '2018-05-16 10:54:49', '2018-05-16 10:54:49', '1');
INSERT INTO `tb_banner` VALUES ('2', '456', '/Public/Home/images/file-1524122635-0.jpg', '3', '2018-05-16 10:54:49', '2018-05-16 10:54:49', '1');
INSERT INTO `tb_banner` VALUES ('3', '789', '/Public/Home/images/file-1519640597-1.jpg', '4', '2018-05-16 10:54:50', '2018-05-16 10:54:50', '1');
INSERT INTO `tb_banner` VALUES ('4', '好看', './Uploads/2018-05-26/5b09086e83292.jpg', 'www.baidu.com', '2018-05-26 15:12:55', '2018-05-26 15:12:55', '1');
INSERT INTO `tb_banner` VALUES ('6', '好玩222', './Uploads/2018-05-26/5b090b51855a0.JPG', 'http://www.sina.com', '2018-05-26 15:22:57', '2018-05-26 15:22:57', '1');

-- ----------------------------
-- Table structure for tb_cart
-- ----------------------------
DROP TABLE IF EXISTS `tb_cart`;
CREATE TABLE `tb_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL DEFAULT '1',
  `goods_num` int(11) NOT NULL DEFAULT '0',
  `goods_price` int(11) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `createtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT '',
  `goods_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_goods` (`goods_id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_cart
-- ----------------------------
INSERT INTO `tb_cart` VALUES ('13', '1', '1', '1', '49', '1', '2018-06-03 10:03:52', '2018-06-03 10:03:52', './Uploads/2018-05-24/5b067fd0b7155.JPG', '挂耳咖啡');
INSERT INTO `tb_cart` VALUES ('14', '5', '1', '111', '50', '1', '2018-06-03 10:11:49', '2018-06-03 10:11:49', './Uploads/2018-05-24/5b06837350b9a.jpg', 'wanfan');
INSERT INTO `tb_cart` VALUES ('29', '7', '1', '2', '69', '1', '2018-06-03 10:32:29', '2018-06-03 10:32:29', './Uploads/2018-05-26/5b09048eb07d6.jpg', '书包');
INSERT INTO `tb_cart` VALUES ('30', '6', '1', '4', '80', '1', '2018-06-03 10:04:07', '2018-06-03 10:04:07', './Uploads/2018-05-25/5b07c6d73dc19.png', '麻辣烫');
INSERT INTO `tb_cart` VALUES ('52', '2', '1', '1', '1', '1', '2018-06-03 10:04:00', '2018-06-03 10:04:00', './Uploads/2018-05-24/5b067fd0b7155.JPG', '1');

-- ----------------------------
-- Table structure for tb_comment
-- ----------------------------
DROP TABLE IF EXISTS `tb_comment`;
CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `create_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_comment
-- ----------------------------

-- ----------------------------
-- Table structure for tb_goods
-- ----------------------------
DROP TABLE IF EXISTS `tb_goods`;
CREATE TABLE `tb_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(50) NOT NULL DEFAULT '',
  `goods_info` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `tag_id` varchar(255) DEFAULT '',
  `createtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `price` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_goods
-- ----------------------------
INSERT INTO `tb_goods` VALUES ('1', '挂耳咖啡', '以经典电影为设计灵感', './Uploads/2018-05-24/5b067fd0b7155.JPG', '1,2', '2018-05-25 16:15:15', '2018-05-25 16:15:15', '1', '4900');
INSERT INTO `tb_goods` VALUES ('2', '1', '1', './Uploads/2018-05-24/5b067fd0b7155.JPG', '2', '2018-05-30 13:49:28', '2018-05-30 13:49:28', '1', '100');
INSERT INTO `tb_goods` VALUES ('5', 'wanfan', 'haochi', './Uploads/2018-05-24/5b06837350b9a.jpg', '1,2', '2018-05-24 17:18:43', '2018-05-24 17:18:43', '1', '5000');
INSERT INTO `tb_goods` VALUES ('6', '麻辣烫', '好吃', './Uploads/2018-05-25/5b07c6d73dc19.png', '2', '2018-05-30 13:56:26', '2018-05-30 13:56:26', '1', '8000');
INSERT INTO `tb_goods` VALUES ('7', '书包', '质量好', './Uploads/2018-05-26/5b09048eb07d6.jpg', '1', '2018-05-26 14:54:06', '2018-05-26 14:54:06', '1', '6900');

-- ----------------------------
-- Table structure for tb_order
-- ----------------------------
DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` varchar(11) NOT NULL,
  `goods_count` int(11) NOT NULL,
  `goods_price` int(11) NOT NULL,
  `goods_info` varchar(255) DEFAULT '',
  `goods_image` varchar(255) DEFAULT '',
  `order_num` int(11) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1',
  `createtime` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_order
-- ----------------------------
INSERT INTO `tb_order` VALUES ('1', '2', '3', '5000', '超大号', './Uploads/2018-05-24/5b067fd0b7155.JPG', '1589555599', '1', '2018-05-30 21:08:03', '2018-05-30 21:08:03', '1');
INSERT INTO `tb_order` VALUES ('2', '6', '2', '800', '多麻多辣', './Uploads/2018-05-25/5b07c6d73dc19.png', '889564455', '1', '2018-05-30 21:08:04', '2018-05-30 21:08:04', '1');
INSERT INTO `tb_order` VALUES ('3', '6', '5', '200', '11', './Uploads/2018-05-25/5b07c6d73dc19.png', '1589555599', '1', '2018-05-30 21:08:05', '2018-05-30 21:08:05', '1');

-- ----------------------------
-- Table structure for tb_order_tmp
-- ----------------------------
DROP TABLE IF EXISTS `tb_order_tmp`;
CREATE TABLE `tb_order_tmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_info` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_order_tmp
-- ----------------------------
INSERT INTO `tb_order_tmp` VALUES ('21', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('22', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('23', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('24', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('25', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('26', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('27', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('28', '[{\"goodsId\":\"5\",\"count\":null},{\"goodsId\":\"7\",\"count\":null}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('29', '[{\"goodsId\":\"5\",\"count\":null},{\"goodsId\":\"2\",\"count\":null}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('30', '[{\"goodsId\":\"1\",\"count\":null},{\"goodsId\":\"5\",\"count\":null}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('31', '[{\"goodsId\":\"2\",\"count\":\"4\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('32', '[{\"goodsId\":\"1\",\"count\":null},{\"goodsId\":\"5\",\"count\":null}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('33', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('34', '[{\"goodsId\":\"7\",\"count\":\"2\"}]', '1');
INSERT INTO `tb_order_tmp` VALUES ('35', '[{\"goodsId\":\"1\",\"count\":\"1\"}]', '1');

-- ----------------------------
-- Table structure for tb_tags
-- ----------------------------
DROP TABLE IF EXISTS `tb_tags`;
CREATE TABLE `tb_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(20) NOT NULL,
  `color` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_tags
-- ----------------------------
INSERT INTO `tb_tags` VALUES ('1', '新品', 'red');
INSERT INTO `tb_tags` VALUES ('2', '520特惠', 'black');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(32) NOT NULL,
  `createtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'haoshuai777', '15590062337', 'Haoshuai666', null, null, '1');
INSERT INTO `tb_user` VALUES ('2', 'haoshuai111', '15590062337', 'Haoshuai666', null, null, '1');
INSERT INTO `tb_user` VALUES ('3', 'hahah11', '13659598979', 'Haoshuai1111', null, null, '1');
INSERT INTO `tb_user` VALUES ('4', 'ahaha11', '15965659595', 'Haoshuai111', '2018-05-27 10:00:09', null, '1');

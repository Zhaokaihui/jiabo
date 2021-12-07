ALTER TABLE `ey_shop_order` ADD COLUMN `is_comment` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否已评论，0为否，1为是，默认0' AFTER `admin_note`;

DELETE FROM `ey_region` WHERE `level` = '3' AND `parent_id` = '29855';
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('常平镇', '3', '29855', 'C');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('茶山镇', '3', '29855', 'C');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('大朗镇', '3', '29855', 'D');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('大岭山镇', '3', '29855', 'D');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('道滘镇', '3', '29855', 'D');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('东城街道', '3', '29855', 'D');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('东坑镇', '3', '29855', 'D');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('凤岗镇', '3', '29855', 'F');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('高埗镇', '3', '29855', 'G');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('莞城街道', '3', '29855', 'G');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('横沥镇', '3', '29855', 'H');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('洪梅镇', '3', '29855', 'H');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('厚街镇', '3', '29855', 'H');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('黄江镇', '3', '29855', 'H');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('虎门镇', '3', '29855', 'H');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('寮步镇', '3', '29855', 'L');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('麻涌镇', '3', '29855', 'M');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('南城街道', '3', '29855', 'N');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('桥头镇', '3', '29855', 'Q');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('清溪镇', '3', '29855', 'Q');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('企石镇', '3', '29855', 'Q');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('沙田镇', '3', '29855', 'S');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('石碣镇', '3', '29855', 'S');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('石龙镇', '3', '29855', 'S');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('石排镇', '3', '29855', 'S');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('松山湖管委会', '3', '29855', 'S');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('塘厦镇', '3', '29855', 'T');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('望牛墩镇', '3', '29855', 'W');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('万江街道', '3', '29855', 'W');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('谢岗镇', '3', '29855', 'X');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('长安镇', '3', '29855', 'Z');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('樟木头镇', '3', '29855', 'Z');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('中堂镇', '3', '29855', 'Z');
UPDATE `ey_region` SET `name` = '密云区', `parent_id` = '2' WHERE `id` = '301';
UPDATE `ey_region` SET `name` = '延庆区', `parent_id` = '2' WHERE `id` = '322';
DELETE FROM `ey_region` WHERE `id` = '300';
UPDATE `ey_region` SET `name` = '上海市', `initial` = 'S' WHERE `id` = '10544';
UPDATE `ey_region` SET `name` = '崇明区', `parent_id` = '10544' WHERE `id` = '10780';
DELETE FROM `ey_region` WHERE `id` = '10779';
UPDATE `ey_region` SET `name` = '重庆市', `initial` = 'C' WHERE `id` = '31930';
UPDATE `ey_region` SET `name` = '北京市', `initial` = 'B' WHERE `id` = '2';
UPDATE `ey_region` SET `name` = '天津市', `initial` = 'T' WHERE `id` = '339';
UPDATE `ey_region` SET `name` = '宁河区', `parent_id` = '339' WHERE `id` = '570';
UPDATE `ey_region` SET `name` = '静海区', `parent_id` = '339' WHERE `id` = '586';
UPDATE `ey_region` SET `name` = '蓟州区', `parent_id` = '339' WHERE `id` = '608';
DELETE FROM `ey_region` WHERE `id` = '569';

DELETE FROM `ey_channeltype` WHERE `id` = '51';
INSERT INTO `ey_channeltype` (`id`, `nid`, `title`, `ntitle`, `table`, `ctl_name`, `status`, `ifsystem`, `is_repeat_title`, `is_release`, `is_litpic_users_release`, `data`, `is_del`, `sort_order`, `add_time`, `update_time`) VALUES ('51', 'ask', '问答模型', '问答', 'ask', 'Ask', '0', '1', '1', '0', '1', '', '0', '9', '1509197711', '1564532747');

UPDATE `ey_config` SET `value` = '500|1000' WHERE `name` = 'other_arcclick' AND `value` = '-1';
UPDATE `ey_config` SET `value` = '100|500' WHERE `name` = 'other_arcdownload' AND `value` = '-1';
UPDATE `ey_smtp_tpl` SET `update_time` = '1613985230' WHERE `update_time` = '0';
UPDATE `ey_sms_template` SET `update_time` = '1613985230' WHERE `update_time` = '0';
UPDATE `ey_quickentry` SET `status` = '0' WHERE `type` = '1' AND `controller` = 'Filemanager' AND `action` = 'index';

ALTER TABLE `ey_shop_order_details` MODIFY COLUMN `order_id`  int(10) NOT NULL DEFAULT 0 COMMENT '订单ID' AFTER `details_id`;
ALTER TABLE `ey_shop_order_details` MODIFY COLUMN `product_name`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '产品名称' AFTER `product_id`;
ALTER TABLE `ey_shop_order_details` MODIFY COLUMN `num`  int(10) NOT NULL DEFAULT 0 COMMENT '单个产品数量' AFTER `product_name`;
ALTER TABLE `ey_shop_order_details` MODIFY COLUMN `prom_type`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '产品类型：0普通产品，1虚拟产品' AFTER `product_price`;
ALTER TABLE `ey_shop_order_details` MODIFY COLUMN `litpic`  varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '封面图片' AFTER `prom_type`;
ALTER TABLE `ey_shop_order_details` ADD COLUMN `apply_service`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否申请退换货服务：0 未申请、1已申请' AFTER `litpic`;
ALTER TABLE `ey_shop_order_details` ADD COLUMN `is_comment` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否已评论，0为否，1为是，默认0' AFTER `apply_service`;
ALTER TABLE `ey_product_spec_preset` ADD COLUMN `spec_sync`  tinyint(1) UNSIGNED NULL DEFAULT 0 COMMENT '是否同步到已发布的商品规格：0否，1是。' AFTER `preset_value`;
ALTER TABLE `ey_archives` MODIFY COLUMN `htmlfilename`  varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '自定义文件名' AFTER `downcount`;
ALTER TABLE `ey_archives` MODIFY COLUMN `attrlist_id`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '参数列表ID' AFTER `seo_description`;
UPDATE `ey_channelfield` SET `dtype` = 'int', `define` = 'int(10) unsigned', `maxlength` = '10' WHERE `name` = 'sales_num';
UPDATE `ey_channelfield` SET `dtype` = 'int', `define` = 'int(10) unsigned', `maxlength` = '10' WHERE `name` = 'attrlist_id';
UPDATE `ey_channelfield` SET `dtype` = 'int' WHERE `define` = 'int(10)' AND `dtype` = '';
ALTER TABLE `ey_product_spec_value` ADD COLUMN `seckill_price`  decimal(10,2) NOT NULL DEFAULT 0.00 COMMENT '秒杀价格' AFTER `spec_sales_num`;
ALTER TABLE `ey_product_spec_value` ADD COLUMN `seckill_stock`  int(10) NOT NULL DEFAULT 0 COMMENT '秒杀库存(独立库存，与spec_stock库存不同步)' AFTER `seckill_price`;
ALTER TABLE `ey_product_spec_value` ADD COLUMN `seckill_sales_num`  int(10) NOT NULL DEFAULT 0 COMMENT '秒杀销售量' AFTER `seckill_stock`;
ALTER TABLE `ey_product_spec_value` ADD COLUMN `is_seckill`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-普通 1-秒杀' AFTER `seckill_sales_num`;
ALTER TABLE `ey_shop_order` ADD COLUMN `order_source`  tinyint(3) NULL DEFAULT 10 COMMENT '10-普通订单 20-秒杀订单' AFTER `order_md5`;
ALTER TABLE `ey_shop_order` ADD COLUMN `order_source_id`  int(10) NULL DEFAULT 0 COMMENT '来源id(秒杀订单:active_time_id)' AFTER `order_source`;
ALTER TABLE `ey_shop_order` ADD COLUMN `coupon_id`  int(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '优惠券数据表ID' AFTER `update_time`;
ALTER TABLE `ey_shop_order` ADD COLUMN `use_id`  int(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '会员的优惠券数据表ID' AFTER `coupon_id`;
ALTER TABLE `ey_shop_order` ADD COLUMN `coupon_price`  decimal(10,2) NOT NULL DEFAULT 0.00 COMMENT '使用的优惠券金额' AFTER `use_id`;
ALTER TABLE `ey_ad_position` ADD COLUMN `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '广告展示类型，1图片类型，2媒体类型，3HTML代码' AFTER `title`;

DROP TABLE IF EXISTS `ey_shop_order_service`;
CREATE TABLE `ey_shop_order_service` (
  `service_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `service_type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '类型：1换货，2退货，3维修',
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员id',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '订单ID',
  `order_code` varchar(20) NOT NULL DEFAULT '' COMMENT '订单编号',
  `details_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '订单明细表ID',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '产品ID',
  `product_name` varchar(200) NOT NULL DEFAULT '' COMMENT '产品名称',
  `product_spec` varchar(200) NOT NULL DEFAULT '' COMMENT '产品规格',
  `product_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '产品数量',
  `product_img` varchar(500) NOT NULL DEFAULT '' COMMENT '产品图片',
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '退换货描述',
  `upload_img` varchar(3000) NOT NULL DEFAULT '' COMMENT '上传的图片',
  `address` varchar(500) NOT NULL DEFAULT '' COMMENT '退货的收货地址',
  `consignee` varchar(30) NOT NULL DEFAULT '' COMMENT '收货人',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '手机',
  `refund_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '退还金额',
  `refund_balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '退还余额',
  `refund_code` varchar(40) NOT NULL DEFAULT '' COMMENT '退款单号',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态：1审核中 2审核通过 3审核不通过 4已发货 5已收货 6换货完成 7退款完成 8服务取消',
  `users_delivery` varchar(500) NOT NULL DEFAULT '' COMMENT '会员发货信息',
  `admin_delivery` varchar(500) NOT NULL DEFAULT '' COMMENT '管理员发货信息',
  `admin_note` varchar(1000) NOT NULL DEFAULT '' COMMENT '管理员操作备注',
  `lang` varchar(30) NOT NULL DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '申请时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`service_id`),
  KEY `users_id` (`users_id`) USING BTREE,
  KEY `order_id` (`order_id`) USING BTREE,
  KEY `order_code` (`order_code`) USING BTREE,
  KEY `product_id` (`product_id`) USING BTREE,
  KEY `details_id` (`details_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='订单退换货服务表';

DROP TABLE IF EXISTS `ey_shop_order_service_log`;
CREATE TABLE `ey_shop_order_service_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `service_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '服务表ID',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '订单ID',
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `log_note` varchar(500) NOT NULL DEFAULT '' COMMENT '记录备注',
  `lang` varchar(30) NOT NULL DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '操作时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '操作时间',
  PRIMARY KEY (`log_id`),
  KEY `service_id` (`service_id`) USING BTREE,
  KEY `order_id` (`order_id`) USING BTREE,
  KEY `users_id` (`users_id`) USING BTREE,
  KEY `admin_id` (`admin_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='订单退换货服务记录表';

DROP TABLE IF EXISTS `ey_shop_order_comment`;
CREATE TABLE `ey_shop_order_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '订单ID',
  `order_code` varchar(50) NOT NULL DEFAULT '' COMMENT '订单编号',
  `details_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '订单明细表ID',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
  `total_score` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '总评分，1：好评，2中评，3差评',
  `content` varchar(1000) NOT NULL DEFAULT '' COMMENT '评论内容',
  `upload_img` varchar(3000) NOT NULL DEFAULT '' COMMENT '晒单图片',
  `admin_reply` varchar(1000) NOT NULL DEFAULT '' COMMENT '管理员回复',
  `ip_address` varchar(15) NOT NULL DEFAULT '' COMMENT 'IP地址',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示：0否，1是',
  `is_anonymous` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否匿名评价：0否，1是',
  `lang` varchar(30) NOT NULL DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`comment_id`),
  KEY `users_id` (`users_id`),
  KEY `order_id` (`order_id`),
  KEY `details_id` (`details_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='商品评价表';

DROP TABLE IF EXISTS `ey_media_play_record`;
CREATE TABLE `ey_media_play_record` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT '0' COMMENT '用户id',
  `aid` int(10) DEFAULT '0' COMMENT '课程id',
  `file_id` int(10) DEFAULT '0' COMMENT '文件id',
  `play_time` int(10) DEFAULT '0' COMMENT '播放时间',
  `add_time` int(10) DEFAULT '0' COMMENT '添加时间',
  `update_time` int(10) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='视频播放时长表';

DROP TABLE IF EXISTS `ey_ask`;
CREATE TABLE `ey_ask` (
  `ask_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '问题栏目ID',
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `ask_title` varchar(80) NOT NULL DEFAULT '' COMMENT '问题标题',
  `is_recom` tinyint(1) NOT NULL DEFAULT '0' COMMENT '问题是否推荐',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '问题状态：0未解决，1已解决，2已关闭',
  `click` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '浏览点击量',
  `replies` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '问题回复量',
  `content` text NOT NULL COMMENT '问题内容',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '问题网址',
  `users_ip` varchar(50) NOT NULL DEFAULT '' COMMENT '问题发布时IP地址',
  `is_review` tinyint(1) NOT NULL DEFAULT '1' COMMENT '问题是否审核，1是，0否',
  `follow` tinyint(1) NOT NULL DEFAULT '0' COMMENT '关注问题则表示有回复时发送邮件通知到问题发布人',
  `solve_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '解决时间(这个问题存在最佳答案则表示已解决)',
  `bestanswer_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最佳答案',
  `sort_order` int(10) NOT NULL DEFAULT '100' COMMENT '排序号',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `money` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '悬赏金额',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '1-删除',
  PRIMARY KEY (`ask_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='问题表';

DROP TABLE IF EXISTS `ey_ask_answer`;
CREATE TABLE `ey_ask_answer` (
  `answer_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `ask_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '问题ID',
  `is_bestanswer` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否最佳答案，0否，1是',
  `is_review` tinyint(1) NOT NULL DEFAULT '1' COMMENT '问题是否审核，1是，0否',
  `type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '问题栏目ID',
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `click_like` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点赞量',
  `users_ip` varchar(30) NOT NULL DEFAULT '' COMMENT '用户IP地址',
  `content` text NOT NULL COMMENT '内容',
  `ifcheck` tinyint(1) NOT NULL DEFAULT '1',
  `answer_pid` int(10) NOT NULL DEFAULT '0' COMMENT '子答案的父答案',
  `at_users_id` int(10) NOT NULL DEFAULT '0' COMMENT '被@的用户ID',
  `at_answer_id` int(10) NOT NULL DEFAULT '0' COMMENT '@答案ID',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1-删除',
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='答案表';

DROP TABLE IF EXISTS `ey_ask_answer_like`;
CREATE TABLE `ey_ask_answer_like` (
  `like_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `ask_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '问题ID',
  `answer_id` int(10) NOT NULL DEFAULT '0' COMMENT '答案ID',
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `click_like` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点赞',
  `users_ip` varchar(30) NOT NULL DEFAULT '' COMMENT '用户IP地址',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`like_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='答案点赞表';

DROP TABLE IF EXISTS `ey_ask_score_level`;
CREATE TABLE `ey_ask_score_level` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT '',
  `min` mediumint(8) DEFAULT '0',
  `max` mediumint(8) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='积分等级表';

INSERT INTO `ey_ask_score_level` (`id`, `name`, `min`, `max`) VALUES ('1', '青铜', '0', '1000');
INSERT INTO `ey_ask_score_level` (`id`, `name`, `min`, `max`) VALUES ('2', '白银', '1001', '5000');
INSERT INTO `ey_ask_score_level` (`id`, `name`, `min`, `max`) VALUES ('3', '黄金', '5001', '20000');
INSERT INTO `ey_ask_score_level` (`id`, `name`, `min`, `max`) VALUES ('4', '王者', '20001', '0');

DROP TABLE IF EXISTS `ey_ask_type`;
CREATE TABLE `ey_ask_type` (
  `type_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目自增',
  `type_name` varchar(100) NOT NULL DEFAULT '' COMMENT '栏目名称',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级ID',
  `seo_title` varchar(200) DEFAULT '' COMMENT 'SEO标题',
  `seo_keywords` varchar(200) DEFAULT '' COMMENT 'seo关键字',
  `seo_description` text COMMENT 'seo描述',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '100' COMMENT '排序号',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='问题栏目分类表';

INSERT INTO `ey_ask_type` (`type_id`, `type_name`, `parent_id`, `seo_title`, `seo_keywords`, `seo_description`, `sort_order`, `add_time`, `update_time`) VALUES ('1', '问题求助', '0', '', '', '', '100', '1565770890', '1611910466');
INSERT INTO `ey_ask_type` (`type_id`, `type_name`, `parent_id`, `seo_title`, `seo_keywords`, `seo_description`, `sort_order`, `add_time`, `update_time`) VALUES ('2', '功能建议', '0', '', '', '', '100', '1565770890', '1611910466');
INSERT INTO `ey_ask_type` (`type_id`, `type_name`, `parent_id`, `seo_title`, `seo_keywords`, `seo_description`, `sort_order`, `add_time`, `update_time`) VALUES ('3', 'BUG反馈', '1', '', '', '', '100', '1565771021', '1611910466');
INSERT INTO `ey_ask_type` (`type_id`, `type_name`, `parent_id`, `seo_title`, `seo_keywords`, `seo_description`, `sort_order`, `add_time`, `update_time`) VALUES ('4', '其他问题', '1', '', '', '', '100', '1565771021', '1611910466');
INSERT INTO `ey_ask_type` (`type_id`, `type_name`, `parent_id`, `seo_title`, `seo_keywords`, `seo_description`, `sort_order`, `add_time`, `update_time`) VALUES ('5', '业务咨询', '0', '', '', '', '100', '1611910466', '1611910466');

DROP TABLE IF EXISTS `ey_sharp_active`;
CREATE TABLE `ey_sharp_active` (
  `active_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '活动会场ID',
  `active_date` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '活动日期',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '活动状态(0禁用 1启用)',
  `is_del` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`active_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='整点秒杀-活动会场表';

DROP TABLE IF EXISTS `ey_sharp_active_goods`;
CREATE TABLE `ey_sharp_active_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `active_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '活动会场ID',
  `active_time_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '活动场次ID',
  `aid` int(11) NOT NULL DEFAULT '0' COMMENT '文档id',
  `sharp_goods_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '秒杀商品ID',
  `sales_actual` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '实际销量',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='整点秒杀-活动会场与商品关联表';

DROP TABLE IF EXISTS `ey_sharp_active_time`;
CREATE TABLE `ey_sharp_active_time` (
  `active_time_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '场次ID',
  `active_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '活动会场ID',
  `active_time` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '场次时间(0点-23点)',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '活动状态(0禁用 1启用)',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`active_time_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='整点秒杀-活动会场场次表';

DROP TABLE IF EXISTS `ey_sharp_goods`;
CREATE TABLE `ey_sharp_goods` (
  `sharp_goods_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '秒杀商品ID',
  `aid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID->aid',
  `limit` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '限购数量',
  `seckill_stock` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '秒杀商品库存总量',
  `seckill_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '秒杀价格',
  `sales` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '累积销量',
  `sort_order` int(11) unsigned NOT NULL DEFAULT '100' COMMENT '商品排序(数字越小越靠前)',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '商品状态(0下架 1上架)',
  `is_del` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除',
  `is_sku` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1-多规格商品',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`sharp_goods_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='整点秒杀-商品表';

DROP TABLE IF EXISTS `ey_sharp_setting`;
CREATE TABLE `ey_sharp_setting` (
  `key` varchar(30) NOT NULL DEFAULT '' COMMENT '设置项标示',
  `describe` varchar(255) NOT NULL DEFAULT '' COMMENT '设置项描述',
  `values` mediumtext NOT NULL COMMENT '设置内容(json格式)',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  UNIQUE KEY `unique_key` (`key`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='整点秒杀设置表';

DROP TABLE IF EXISTS `ey_shop_coupon`;
CREATE TABLE `ey_shop_coupon` (
  `coupon_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `coupon_code` varchar(100) NOT NULL DEFAULT '' COMMENT '优惠券编号',
  `coupon_name` varchar(100) NOT NULL DEFAULT '' COMMENT '优惠券名称',
  `coupon_color` varchar(25) NOT NULL DEFAULT '' COMMENT '优惠券颜色',
  `coupon_form` tinyint(1) NOT NULL DEFAULT '1' COMMENT '优惠券类型 1-满减券',
  `coupon_type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '可使用商品(1全站通用，2指定商品，3指定商品分类)',
  `product_id` varchar(255) NOT NULL DEFAULT '' COMMENT '指定商品ID，在coupon_type=2时使用',
  `arctype_id` varchar(255) NOT NULL DEFAULT '' COMMENT '指定商品分类ID，在coupon_type=3时使用',
  `coupon_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '优惠券金额，例如10',
  `conditions_use` varchar(10) NOT NULL DEFAULT '' COMMENT '优惠券使用条件，例如300',
  `coupon_stock` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券库存，例如100',
  `redeem_points` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '兑换优惠券所需积分，为0则表示免费兑换',
  `redeem_authority` varchar(10) NOT NULL DEFAULT '' COMMENT '兑换权限，存入多个会员等级组ID',
  `valid_days` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '有效天数，例如30',
  `start_date` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券开放领取时间',
  `end_date` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券结束领取时间',
  `sort_order` int(11) unsigned NOT NULL DEFAULT '100' COMMENT '规格排序号',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '优惠券状态(0=关闭，1=开启)',
  `use_type` int(1) NOT NULL DEFAULT '1' COMMENT '使用期限 \r\n1-固定日期\r\n 2-领取后当天开始N(valid_days)天内有效\r\n 2-领取后次日开始N(valid_days)天内有效',
  `use_start_time` int(11) NOT NULL COMMENT '使用期限开始时间',
  `use_end_time` int(11) NOT NULL COMMENT '使用期限结束时间',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '0-未删除 1-已删除',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`coupon_id`),
  KEY `product_id` (`product_id`) USING BTREE,
  KEY `arctype_id` (`arctype_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='优惠券主表';

DROP TABLE IF EXISTS `ey_shop_coupon_use`;
CREATE TABLE `ey_shop_coupon_use` (
  `use_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `users_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `coupon_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券ID',
  `coupon_code` varchar(100) NOT NULL DEFAULT '' COMMENT '优惠券编号',
  `get_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '领取时的IP地址',
  `get_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券领取时的时间',
  `use_status` tinyint(4) unsigned NOT NULL DEFAULT '1' COMMENT '优惠券使用状态(0未使用，1已使用，2已过期，3已冻结)',
  `use_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券使用时的时间',
  `start_time` int(10) NOT NULL DEFAULT '0' COMMENT '优惠券有效开始时间',
  `end_time` int(10) NOT NULL DEFAULT '0' COMMENT '优惠券有效结束时间',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`use_id`),
  KEY `coupon_id` (`coupon_id`) USING BTREE,
  KEY `coupon_code` (`coupon_code`) USING BTREE,
  KEY `users_id` (`users_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='优惠券-领取记录表';

DROP TABLE IF EXISTS `ey_users_notice_tpl`;
CREATE TABLE `ey_users_notice_tpl` (
  `tpl_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `tpl_name` varchar(200) DEFAULT '' COMMENT '模板名称',
  `tpl_title` varchar(200) DEFAULT '' COMMENT '站内信标题',
  `tpl_content` text COMMENT '发送内容',
  `send_scene` tinyint(1) DEFAULT '0' COMMENT '站内信发送场景(1=留言表单）',
  `is_open` tinyint(1) DEFAULT '0' COMMENT '是否开启使用这个模板，1为是，0为否。',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '添加时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`tpl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='站内信模板表';

DROP TABLE IF EXISTS `ey_users_notice_tpl_content`;
CREATE TABLE `ey_users_notice_tpl_content` (
  `content_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `source` tinyint(1) DEFAULT '0' COMMENT '来源，对应 users_notice_tpl 表 send_scene 字段',
  `admin_id` int(10) DEFAULT '0' COMMENT '管理员ID，不为空则表示管理员接收信息',
  `users_id` int(10) DEFAULT '0' COMMENT '用户ID，不为空则表示会员接收信息，暂未使用',
  `content_title` varchar(200) DEFAULT '' COMMENT '通知标题',
  `content` text COMMENT '接收的通知内容',
  `is_read` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否已读，默认0，1是，0否',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`content_id`),
  KEY `admin_id` (`admin_id`) USING BTREE,
  KEY `users_id` (`users_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='站内信发送接收记录表';
ALTER TABLE `ey_ui_config` ADD COLUMN `idcode`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '页面唯一id标识（由 标识符+栏目id或文档id等）组成' AFTER `value`;
UPDATE `ey_quickentry` SET `status` = '1' WHERE `type` = '1' AND `controller` = 'Filemanager' AND `action` = 'index';
DELETE FROM `ey_quickentry` WHERE `type` = '2' AND `controller` = 'Media' AND `action` = 'index' AND `vars` = 'channel=5';
INSERT INTO `ey_quickentry` (`title`, `laytext`, `type`, `controller`, `action`, `vars`, `groups`, `checked`, `status`, `sort_order`, `add_time`, `update_time`) VALUES ('视频', '视频列表', '2', 'Media', 'index', 'channel=5', '1', '0', '1', '4', '1569310798', '1616579674');

ALTER TABLE `ey_archives` ADD COLUMN `appraise`  int(10) NULL DEFAULT 0 COMMENT '评价数' AFTER `downcount`;
ALTER TABLE `ey_archives` ADD COLUMN `collection`  int(10) NULL DEFAULT 0 COMMENT '收藏数' AFTER `appraise`;
DELETE FROM `ey_channelfield` WHERE `name` IN ('appraise','collection') AND `channel_id` = '0';
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('appraise', '0', '评价数', 'int', 'int(10)', '250', '', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1533091930', '1533091930');
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('collection', '0', '收藏数', 'int', 'int(10)', '250', '', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1533091930', '1533091930');

ALTER TABLE `ey_tagindex` ADD COLUMN `litpic`  varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '封面图' AFTER `typeid`;

ALTER TABLE `ey_archives` MODIFY COLUMN `sales_num`  int(10) NOT NULL DEFAULT 0 COMMENT '销售量' AFTER `old_price`;

ALTER TABLE `ey_ask_answer_like` ADD COLUMN `like_source`  tinyint(1) UNSIGNED NOT NULL DEFAULT 2 COMMENT '点赞来源，1=点赞提问(ask_id)，2=点赞评论(answer_id)，3=点赞回复(answer_id)，默认值为2，兼容以前的那些评论数据' AFTER `click_like`;
ALTER TABLE `ey_sharp_goods` ADD COLUMN `virtual_sales`  tinyint(3) NOT NULL DEFAULT 0 COMMENT '虚拟销量' AFTER `sales`;
ALTER TABLE `ey_users` ADD COLUMN `coin`  int(11) UNSIGNED NULL DEFAULT 0 COMMENT '金币' AFTER `update_time`;

ALTER TABLE `ey_media_order` MODIFY COLUMN `order_code`  varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '媒体订单编号' AFTER `order_id`;
ALTER TABLE `ey_shop_order` MODIFY COLUMN `order_code`  varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '订单编号' AFTER `order_id`;
ALTER TABLE `ey_shop_order` MODIFY COLUMN `express_order`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '发货物流单号' AFTER `pay_details`;
ALTER TABLE `ey_channelfield` MODIFY COLUMN `title`  varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '字段标题' AFTER `channel_id`;

ALTER TABLE `ey_links` ADD COLUMN `nofollow`  tinyint(1) NULL DEFAULT 0 AFTER `target`;

UPDATE `ey_channeltype` SET `is_release` = '1' WHERE `id` > '0';

DROP TABLE IF EXISTS `ey_article_order`;
CREATE TABLE `ey_article_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章订单ID',
  `order_code` varchar(20) NOT NULL DEFAULT '' COMMENT '媒体订单编号',
  `users_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `order_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态：0未付款，1已付款',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单应付总金额',
  `pay_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '支付时间',
  `pay_name` varchar(20) NOT NULL DEFAULT '' COMMENT '支付方式名称',
  `wechat_pay_type` varchar(20) NOT NULL DEFAULT '' COMMENT '微信支付时，标记使用的支付类型（扫码支付，微信内部，微信H5页面）',
  `pay_details` text COMMENT '支付时返回的数据，以serialize序列化后存入，用于后续查询。',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '视频文档ID',
  `product_name` varchar(100) DEFAULT '' COMMENT '视频文档名称',
  `product_litpic` varchar(500) DEFAULT '' COMMENT '视频文档封面图片',
  `lang` varchar(30) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned DEFAULT '0' COMMENT '下单时间',
  `update_time` int(11) unsigned DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_code` (`order_code`) USING BTREE,
  KEY `users_id` (`users_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='文章订单表';

DROP TABLE IF EXISTS `ey_article_pay`;
CREATE TABLE `ey_article_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT '0',
  `part_free` tinyint(1) DEFAULT '0' COMMENT '是否试看 0-否 1-是',
  `size` int(11) DEFAULT '1' COMMENT 'KB',
  `free_content` longtext COMMENT '试看内容',
  `add_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='文章付费预览表';

DROP TABLE IF EXISTS `ey_sql_cache_table`;
CREATE TABLE `ey_sql_cache_table` (
  `cache_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `sql_name` varchar(60) NOT NULL DEFAULT '' COMMENT 'mysql语句的标识名称，目前由模型名称+模型ID组成',
  `sql_result` text NOT NULL COMMENT 'mysql执行结果',
  `sql_md5` varchar(60) NOT NULL DEFAULT '' COMMENT 'mysql语句MD5的值',
  `sql_query` text NOT NULL COMMENT '完整mysql语句',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`cache_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='mysql缓存表';

DROP TABLE IF EXISTS `ey_wx_users`;
CREATE TABLE `ey_wx_users` (
  `wxuser_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `openid` varchar(100) NOT NULL DEFAULT '' COMMENT 'openid',
  `nickname` varchar(100) NOT NULL DEFAULT '' COMMENT '微信昵称',
  `headimgurl` varchar(200) NOT NULL DEFAULT '' COMMENT '头像',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`wxuser_id`),
  KEY `openid` (`openid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='微信小程序用户表';
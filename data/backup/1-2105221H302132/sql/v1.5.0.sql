UPDATE `ey_region` SET `name` = '徐水区' WHERE `id` = '1870';
UPDATE `ey_region` SET `name` = '清苑区' WHERE `id` = '1820';
UPDATE `ey_region` SET `name` = '满城区' WHERE `id` = '1806';
DELETE FROM `ey_region` WHERE `name` IN ('莲池区','竞秀区') AND `level` = '3' AND `parent_id` = '1772';
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('莲池区', '3', '1772', 'L');
INSERT INTO `ey_region` (`name`, `level`, `parent_id`, `initial`) VALUES ('竞秀区', '3', '1772', 'J');
DELETE FROM `ey_channelfield` WHERE `channel_id` = '-99' AND `name` = 'topid';
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('topid', '-99', '顶级栏目ID', 'int', 'int(10)', '10', '0', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1557042574', '1557042574');
ALTER TABLE `ey_channelfield` MODIFY COLUMN `dfvalue`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '默认值' AFTER `maxlength`;
UPDATE `ey_arctype` SET `topid` = 0 WHERE `topid` > 0;
UPDATE `ey_arctype` SET `topid` = `parent_id` WHERE `grade` = 1 AND `parent_id` > 0;
ALTER TABLE `ey_special_node` MODIFY COLUMN `aidlist`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '关联文章列表（多个中间用\',\'分开）' AFTER `typeid`;
ALTER TABLE `ey_users_money` MODIFY COLUMN `pay_method`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '支付方式，wechat为微信支付，alipay为支付宝支付' AFTER `status`;
ALTER TABLE `ey_media_file` MODIFY COLUMN `file_url`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '存储路径' AFTER `file_title`;
ALTER TABLE `ey_common_pic` MODIFY COLUMN `lang`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'cn' COMMENT '多语言' AFTER `pic_path`;
ALTER TABLE `ey_users` ADD COLUMN `scores`  int(10) NULL DEFAULT 0 COMMENT '积分' AFTER `frozen_money`;
ALTER TABLE `ey_users` ADD COLUMN `devote`  int(10) NULL DEFAULT 0 COMMENT '贡献值' AFTER `scores`;
ALTER TABLE `ey_users` ADD COLUMN `unread_notice_num`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '未读消息数量' AFTER `is_del`;
ALTER TABLE `ey_archives` ADD COLUMN `is_roll`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '滚动（0=否，1=是）' AFTER `is_litpic`;
ALTER TABLE `ey_archives` ADD COLUMN `is_slide`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '幻灯（0=否，1=是）' AFTER `is_roll`;
ALTER TABLE `ey_archives` ADD COLUMN `is_diyattr`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '自定义（0=否，1=是）' AFTER `is_slide`;
ALTER TABLE `ey_auth_role` ADD COLUMN `check_oneself`  tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '发布文档自动通过审核，1--是，0--否' AFTER `only_oneself`;
ALTER TABLE `ey_links` ADD COLUMN `groupid`  tinyint(2) UNSIGNED NOT NULL DEFAULT 1 COMMENT '分组id， 默认分组值为1' AFTER `typeid`;
ALTER TABLE `ey_sms_log` ADD COLUMN `sms_type`  tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '短信服务商类型，1---阿里云短信， 2---腾讯云短信' AFTER `source`;
ALTER TABLE `ey_sms_template` ADD COLUMN `sms_type`  tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '短信服务商类型，1---阿里云短信， 2---腾讯云短信' AFTER `tpl_id`;
ALTER TABLE `ey_shop_order` ADD COLUMN `group`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '订单分组' AFTER `user_note`;
ALTER TABLE `ey_shop_order` ADD COLUMN `order_md5`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '订单标识串，删除未付款的重复订单' AFTER `group`;
ALTER TABLE `ey_users_type_manage` ADD COLUMN `activity`  varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '活动文案' AFTER `limit_id`;
ALTER TABLE `ey_users_menu` ADD COLUMN `version`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'weapp' COMMENT '分组' AFTER `title`;
ALTER TABLE `ey_users_menu` ADD COLUMN `active_url`  varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '标记为选中的url' AFTER `mca`;
UPDATE `ey_users_menu` SET `version` = 'v1' WHERE `mca` IN ('user/Users/index','user/Pay/pay_consumer_details','user/Shop/shop_centre','user/Level/level_centre','user/UsersRelease/release_centre','user/Download/index');
ALTER TABLE `ey_tagindex` ADD COLUMN `is_common`  tinyint(1) NULL DEFAULT 0 COMMENT '是否常用标签，0=否，1=是' AFTER `monthup`;
ALTER TABLE `ey_tagindex` ADD COLUMN `update_time`  int(10) NULL DEFAULT 0 COMMENT '更新时间' AFTER `add_time`;

DROP TABLE IF EXISTS `ey_archives_flag`;
CREATE TABLE `ey_archives_flag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `flag_name` varchar(255) NOT NULL DEFAULT '' COMMENT '文档属性名称',
  `flag_attr` varchar(10) NOT NULL DEFAULT '' COMMENT '属性值',
  `flag_fieldname` varchar(255) NOT NULL DEFAULT '' COMMENT '字段名',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态， 1---显示， 0---隐藏',
  `sort_order` int(11) unsigned NOT NULL DEFAULT '0',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `flag_attr` (`flag_attr`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='文档属性配置表';

INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('头条', 'h', 'is_head', '1', '1', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('推荐', 'c', 'is_recom', '1', '2', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('特荐', 'a', 'is_special', '1', '3', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('加粗', 'b', 'is_b', '1', '4', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('图片', 'p', 'is_litpic', '1', '5', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('跳转', 'j', 'is_jump', '1', '6', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('幻灯', 's', 'is_slide', '0', '7', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('滚动', 'r', 'is_roll', '0', '8', 'cn', '1606272350', '1606272350');
INSERT INTO `ey_archives_flag` (`flag_name`, `flag_attr`, `flag_fieldname`, `status`, `sort_order`, `lang`, `add_time`, `update_time`) VALUES ('最热', 'd', 'is_diyattr', '0', '9', 'cn', '1606272350', '1606272350');

DELETE FROM `ey_channelfield` WHERE `name` IN ('is_slide','is_roll','is_diyattr') AND `channel_id` = '0';
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('is_slide', '0', '是否幻灯', 'switch', 'tinyint(1)', '250', '', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1533092420', '1533092420');
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('is_roll', '0', '是否幻灯', 'switch', 'tinyint(1)', '250', '', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1533092420', '1533092420');
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('is_diyattr', '0', '是否自定义', 'switch', 'tinyint(1)', '250', '', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1533092420', '1533092420');

DROP TABLE IF EXISTS `ey_links_group`;
CREATE TABLE `ey_links_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL DEFAULT '' COMMENT '分组名称',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态(1=显示，0=屏蔽)',
  `sort_order` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序号',
  `lang` varchar(50) NOT NULL DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='友情链接分组';

DROP TABLE IF EXISTS `ey_users_bottom_menu`;
CREATE TABLE `ey_users_bottom_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `title` varchar(30) DEFAULT '' COMMENT '导航名称',
  `mca` varchar(50) DEFAULT '' COMMENT '分组/控制器/操作名',
  `icon` varchar(255) NOT NULL DEFAULT '' COMMENT '图标',
  `sort_order` int(10) DEFAULT '100' COMMENT '排序号',
  `status` tinyint(1) DEFAULT '1' COMMENT '功能开关状态，1=开启，0=关闭',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示, 1--是, 0--否',
  `lang` varchar(20) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='会员中心移动端底部菜单表';

DROP TABLE IF EXISTS `ey_users_collection`;
CREATE TABLE `ey_users_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT NULL,
  `aid` int(10) DEFAULT '0' COMMENT '文档id',
  `channel` int(10) DEFAULT '0' COMMENT '模型',
  `typeid` int(10) DEFAULT '0' COMMENT '栏目',
  `title` varchar(50) DEFAULT '' COMMENT '网站标题',
  `litpic` varchar(255) DEFAULT '' COMMENT '缩略图',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='我的收藏';

DROP TABLE IF EXISTS `ey_users_footprint`;
CREATE TABLE `ey_users_footprint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel` int(10) DEFAULT '0' COMMENT '频道模型',
  `typeid` int(10) DEFAULT '0' COMMENT '栏目id',
  `aid` int(10) DEFAULT '0' COMMENT '文档id',
  `title` varchar(100) DEFAULT '' COMMENT '网站标题',
  `litpic` varchar(255) DEFAULT '' COMMENT '缩略图',
  `users_id` int(10) DEFAULT '0',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `users_id` (`users_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='我的足迹';

DROP TABLE IF EXISTS `ey_users_notice`;
CREATE TABLE `ey_users_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '' COMMENT '通知标题',
  `users_id` text NOT NULL COMMENT '用户id',
  `usernames` text NOT NULL COMMENT '用户名字符串',
  `remark` text COMMENT '通知信息',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='站内通知';

DROP TABLE IF EXISTS `ey_users_notice_read`;
CREATE TABLE `ey_users_notice_read` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `notice_id` int(10) DEFAULT NULL COMMENT '站内信id',
  `is_read` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否已读, 1---是, 0---否',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除, 1---是, 0---否',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户已读站内通知';

DROP TABLE IF EXISTS `ey_users_score`;
CREATE TABLE `ey_users_score` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '积分明细表',
  `type` tinyint(1) DEFAULT '1' COMMENT '类型:1-提问,2-回答,3-最佳答案4-悬赏退回,5-每日签到',
  `users_id` int(10) DEFAULT '0' COMMENT '用户id',
  `ask_id` int(10) DEFAULT '0' COMMENT '问题id',
  `reply_id` int(10) DEFAULT '0' COMMENT '回答id',
  `score` int(10) DEFAULT '0' COMMENT '积分',
  `devote` int(10) DEFAULT '0' COMMENT '贡献值,同score',
  `money` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `info` varchar(255) DEFAULT '' COMMENT '说明',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(10) DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='积分详情表';

DROP TABLE IF EXISTS `ey_users_signin`;
CREATE TABLE `ey_users_signin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `lang` varchar(50) NOT NULL DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '签到时间',
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户签到表';

DELETE FROM `ey_users_menu` WHERE `version` = 'v2' AND `mca` IN ('user/Users/index','user/Users/collection_index','user/Pay/pay_consumer_details','user/Users/info');
INSERT INTO `ey_users_menu` (`title`, `version`, `mca`, `active_url`, `is_userpage`, `sort_order`, `status`, `lang`, `add_time`, `update_time`) VALUES ('个人中心', 'v2', 'user/Users/index', 'user/Users/index|user/Pay/pay_account_recharge|user/Users/footprint_index|user/Level/level_centre|user/Download/index|user/Users/media_index', '1', '100', '1', 'cn', '1608708057', '1609385363');
INSERT INTO `ey_users_menu` (`title`, `version`, `mca`, `active_url`, `is_userpage`, `sort_order`, `status`, `lang`, `add_time`, `update_time`) VALUES ('我的信息', 'v2', 'user/Users/info', 'user/Users/info', '0', '100', '1', 'cn', '1608709100', '1609385363');
INSERT INTO `ey_users_menu` (`title`, `version`, `mca`, `active_url`, `is_userpage`, `sort_order`, `status`, `lang`, `add_time`, `update_time`) VALUES ('我的收藏', 'v2', 'user/Users/collection_index', 'user/Users/collection_index', '0', '100', '1', 'cn', '1608708100', '1609385363');
INSERT INTO `ey_users_menu` (`title`, `version`, `mca`, `active_url`, `is_userpage`, `sort_order`, `status`, `lang`, `add_time`, `update_time`) VALUES ('财务明细', 'v2', 'user/Pay/pay_consumer_details', 'user/Pay/pay_consumer_details|user/Users/score_index', '0', '100', '1', 'cn', '1608709000', '1609387813');
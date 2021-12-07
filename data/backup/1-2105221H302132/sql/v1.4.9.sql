ALTER TABLE `ey_arctype` ADD COLUMN `topid`  int(10) NULL DEFAULT 0 COMMENT '顶级栏目ID' AFTER `parent_id`;
ALTER TABLE `ey_weapp` ADD COLUMN `is_upgrade`  tinyint(1) NULL DEFAULT 1 COMMENT '是否提示升级' AFTER `is_buy`;
UPDATE `ey_arctype` SET `topid` = `parent_id` WHERE `grade` = 1 AND parent_id > 0;
UPDATE `ey_weapp` SET `data` = '' WHERE `data` IS NULL;
DELETE FROM `ey_channeltype` WHERE `id` = '7';
INSERT INTO `ey_channeltype` (`id`, `nid`, `title`, `ntitle`, `table`, `ctl_name`, `status`, `ifsystem`, `is_repeat_title`, `is_release`, `is_litpic_users_release`, `data`, `is_del`, `sort_order`, `add_time`, `update_time`) VALUES ('7', 'special', '专题模型', '专题', 'special', 'Special', '0', '1', '1', '0', '1', '', '0', '7', '1509197711', '1564532747');
ALTER TABLE `ey_channeltype` AUTO_INCREMENT 101;
DELETE FROM `ey_quickentry` WHERE `controller` = 'Special' AND `type` = '2';
INSERT INTO `ey_quickentry` (`title`, `laytext`, `type`, `controller`, `action`, `vars`, `groups`, `checked`, `status`, `sort_order`, `add_time`, `update_time`) VALUES ('专题', '专题列表', '2', 'Special', 'index', 'channel=7', '1', '0', '1', '7', '1600078966', '1600078966');
ALTER TABLE `ey_download_file` ADD COLUMN `server_name`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '服务器名称' AFTER `file_name`;
DELETE FROM `ey_channelfield` WHERE `channel_id` = '-99' AND `name` = 'topid';
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('topid', '-99', '顶级栏目ID', 'int', 'int(10)', '10', '0', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1557042574', '1557042574');

DROP TABLE IF EXISTS `ey_special_content`;
CREATE TABLE `ey_special_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(10) DEFAULT '0' COMMENT '文档ID',
  `content` longtext COMMENT '内容详情',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='专题附加表';

DROP TABLE IF EXISTS `ey_special_node`;
CREATE TABLE `ey_special_node` (
  `node_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文档ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '节点名称',
  `code` varchar(50) NOT NULL DEFAULT '' COMMENT '节点标识',
  `isauto` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否自动获取文档',
  `keywords` varchar(200) NOT NULL DEFAULT '' COMMENT '关键字（多个中间用'',''分开）',
  `typeid` int(10) NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `aidlist` varchar(100) NOT NULL DEFAULT '' COMMENT '关联文章列表（多个中间用'',''分开）',
  `row` int(5) NOT NULL DEFAULT '10' COMMENT '文档数',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` int(11) DEFAULT '0' COMMENT '排序',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`node_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='专题节点表';

CREATE INDEX `lang` ON `ey_tagindex`(`lang`, `add_time`) USING BTREE ;
UPDATE `ey_config` SET `value` = '-1' WHERE `name` = 'web_show_popup_upgrade';
ALTER TABLE `ey_archives` MODIFY COLUMN `attrlist_id`  int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '参数列表ID' AFTER `seo_description`;
UPDATE `ey_channelfield` SET `dtype` = 'int', `define` = 'int(10) unsigned', `maxlength` = '10' WHERE `name` = 'sales_num';
UPDATE `ey_channelfield` SET `dtype` = 'int', `define` = 'int(10) unsigned', `maxlength` = '10' WHERE `name` = 'attrlist_id';
UPDATE `ey_channelfield` SET `dtype` = 'int' WHERE `define` = 'int(10)' AND `dtype` = '';
<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

namespace app\home\model;

use think\Model;

/**
 * 美化编辑
 */
class UiConfig extends Model
{
    //初始化
    protected function initialize()
    {
        // 需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    /**
     * @author 小虎哥 by 2018-4-3
     */
    public function getInfo($theme_style, $page, $type, $name)
    {
        $md5key = md5($theme_style.$page.$name);
        $map = array(
            'md5key'    => $md5key,
            'type'  => $type,
        );
        $result = M('ui_config')->where($map)->cache(true,EYOUCMS_CACHE_TIME,"ui_config")->find();

        return $result;
    }
}
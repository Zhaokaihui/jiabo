<?php
/**
 * 易购CMS
 * ============================================================================
 * 版权所有 2016-2028 海南易而优科技有限公司，并保留所有权利。
 * 网站地址: http://www.ebuycms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 易而优团队 by 陈风任 <491085389@qq.com>
 * Date: 2019-4-13
 */

namespace think\template\taglib\eyou;

use think\Config;
use think\Db;

/**
 * 导航列表
 */
class TagNavigation extends Base
{
    public $users_id = 0;

    protected function _initialize()
    {
        parent::_initialize();
    }

    public function getNavigation($position_id = null, $orderby = '', $orderway = '', $currentstyle = '', $nav_id = null)
    {
        if (!empty($nav_id)) {
            //获取某菜单下的子菜单
            $res = $this->getSon($nav_id, $orderby, $orderway, $currentstyle);
        } elseif (!empty($position_id)) {
            //获取某导航下所有菜单
            $res = $this->getAll($position_id, $orderby, $orderway, $currentstyle);
        } else {
            return false;
        }
        return $res;
    }

    public function getAll($position_id = null, $orderby = '', $orderway = '', $currentstyle = '')
    {
        $url    = self::$request->url();
        $tid    = $this->tid;

        // 排序
        $Order = "{$orderby} {$orderway}";
        if (empty($Order)) {
            $Order = 'sort_order asc,nav_id asc';
        }
        $where       = [
            'position_id' => $position_id,
            'status'      => 1
        ];
        $arr1        = Db::name('nav_list')->where($where)->where('parent_id', 0)->order($Order)->getAllWithIndex('nav_id');
        $parent_ids1 = array_column($arr1, 'nav_id');
        $arr2        = Db::name('nav_list')->where($where)->where('parent_id', 'in', $parent_ids1)->order($Order)->getAllWithIndex('nav_id');
        $parent_ids2 = array_column($arr2, 'nav_id');
        $arr3        = Db::name('nav_list')->where($where)->where('parent_id', 'in', $parent_ids2)->order($Order)->getAllWithIndex('nav_id');

        if (!empty($arr1)) {
            foreach ($arr1 as $key => $value) {

                $value['is_cart']  = 'shop_cart_list' == $value['nav_url'] ? 1 : 0;
                $value['target']   = 1 == $value['target'] ? 'target="_blank"' : 'target="_self"';
                $value['nofollow'] = 1 == $value['nofollow'] ? 'rel="nofollow"' : 'rel=""';
                $value['currentstyle']    = '';
                $value['nav_pic']  = handle_subdir_pic(get_default_pic($value['nav_pic']));

                if  (empty($value['type_id'])) {
                    //固定页面
                    $nav_url = $value['nav_url'];//备份原来数据
                    $value['nav_url'] = $this->GetNavigUrl($value['nav_url']);
                    //如果返回是空说明是外部链接
                    if (empty($value['nav_url'])){
                        $value['nav_url'] = $nav_url;
                    }else{
                        //否则是首页等已经定义好的页面
                        if ($url == $value['nav_url']) $value['currentstyle'] = $currentstyle;
                    }
                } else{
                    //没有栏目同步
                    if (empty($value['arctype_sync'])){
                        if ($tid == $value['type_id']) $value['currentstyle'] = $currentstyle;
                    }else{
                        //栏目同步
                        $res = $this->getTypeUrl($value['type_id']);
                        if (1 == $res['ex_link']){
                            //栏目外部链接
                            $value['nav_url'] = $res['url'];
                            if ($url == $value['nav_url']) $value['currentstyle'] = $currentstyle;

                        }else{
                            $value['nav_url'] = $res['url'];
                            if ($tid == $value['type_id']) $value['currentstyle'] = $currentstyle;
                        }
                    }
                }

                foreach ($arr2 as $k => $v) {
                    $v['is_cart']  = 'shop_cart_list' == $v['nav_url'] ? 1 : 0;
                    $v['target']   = 1 == $v['target'] ? 'target="_blank"' : 'target="_self"';
                    $v['nofollow'] = 1 == $v['nofollow'] ? 'rel="nofollow"' : 'rel=""';
                    $v['currentstyle']    = '';
                    $v['nav_pic']  = handle_subdir_pic(get_default_pic($v['nav_pic']));

                    if  (empty($v['type_id'])) {
                        //固定页面
                        $nav_url = $v['nav_url'];//备份原来数据
                        $v['nav_url'] = $this->GetNavigUrl($v['nav_url']);
                        //如果返回是空说明是外部链接
                        if (empty($v['nav_url'])){
                            $v['nav_url'] = $nav_url;
                        }else{
                            //否则是首页等已经定义好的页面
                            if ($url == $v['nav_url']) $v['currentstyle'] = $currentstyle;
                        }
                    } else{
                        //没有栏目同步
                        if (empty($v['arctype_sync'])){
                            if ($tid == $v['type_id']) $v['currentstyle'] = $currentstyle;
                        }else{
                            //栏目同步
                            $res = $this->getTypeUrl($v['type_id']);
                            if (1 == $res['ex_link']){
                                //栏目外部链接
                                $v['nav_url'] = $res['url'];
                            }else{
                                $v['nav_url'] = $res['url'];
                                if ($tid == $v['type_id']) $v['currentstyle'] = $currentstyle;
                            }
                        }
                    }
                    if (!empty($v['currentstyle'])){
                        if ($value['nav_id'] == $v['parent_id']) {
                            $value['currentstyle'] = $currentstyle;
                        }
                    }

                    foreach ($arr3 as $m => $n) {
                        $n['is_cart']  = 'shop_cart_list' == $n['nav_url'] ? 1 : 0;
                        $n['target']   = 1 == $n['target'] ? 'target="_blank"' : 'target="_self"';
                        $n['nofollow'] = 1 == $n['nofollow'] ? 'rel="nofollow"' : 'rel=""';
                        $n['currentstyle']    = '';
                        $n['nav_pic']  = handle_subdir_pic(get_default_pic($n['nav_pic']));

                        if  (empty($n['type_id'])) {
                            //固定页面
                            $nav_url = $n['nav_url'];//备份原来数据
                            $n['nav_url'] = $this->GetNavigUrl($n['nav_url']);
                            //如果返回是空说明是外部链接
                            if (empty($n['nav_url'])){
                                $n['nav_url'] = $nav_url;
                            }else{
                                //否则是首页等已经定义好的页面
                                if ($url == $n['nav_url']) $n['currentstyle'] = $currentstyle;
                            }
                        } else{
                            //没有栏目同步
                            if (empty($n['arctype_sync'])){
                                if ($tid == $n['type_id']) $n['currentstyle'] = $currentstyle;
                            }else{
                                //栏目同步
                                $res = $this->getTypeUrl($n['type_id']);
                                if (1 == $res['ex_link']){
                                    //栏目外部链接
                                    $n['nav_url'] = $res['url'];
                                }else{
                                    $n['nav_url'] = $res['url'];
                                    if ($tid == $n['type_id']) $n['currentstyle'] = $currentstyle;
                                }
                            }
                        }
                        if (!empty($n['currentstyle'])){
                            if ($value['nav_id'] == $n['topid']) {
                                $value['currentstyle'] = $currentstyle;
                            }
                            if ($v['nav_id'] == $n['parent_id']) {
                                $v['currentstyle'] = $currentstyle;
                            }
                        }

                        if ($n['parent_id'] == $k) {
                            $v['children'][] = $n;
                        }
                    }

                    if ($v['parent_id'] == $key) {
                        $value['children'][] = $v;
                    }
                }
                $arr1[$key] = $value;
            }
        }

        return $arr1;
    }

    public function getSon($nav_id = null, $orderby = '', $orderway = '', $currentstyle = '')
    {
        $url    = self::$request->url();
        $tid    = $this->tid;

        $where['status'] = 1;

        //先判断这个nav_id是一级菜单还是二级菜单
        $nav_info = Db::name('nav_list')->where('nav_id', $nav_id)->find();
        //如果parent_id == topid 则是一级栏目,不等则为二级栏目
        if ($nav_info['parent_id'] == $nav_info['topid']) {
            $where['topid'] = $nav_id;
        } else {
            $where['parent_id_id'] = $nav_id;
        }

        $Order = "{$orderby} {$orderway}";// 排序
        if (empty($orderby)) {
            $Order = 'sort_order asc,nav_id asc';
        }
        $result = Db::name('nav_list')
            ->where($where)
            ->order($Order)
            ->cache(true, EYOUCMS_CACHE_TIME, "Navigation")
            ->getAllWithIndex('nav_id');
        $topArr = [];
        $sonArr = [];
        if (!empty($result)) {
            foreach ($result as $key => &$value) {
                $result[$key]['is_cart']  = 'shop_cart_list' == $result[$key]['nav_url'] ? 1 : 0;
                $result[$key]['target']   = 1 == $result[$key]['target'] ? 'target="_blank"' : 'target="_self"';
                $result[$key]['nofollow'] = 1 == $result[$key]['nofollow'] ? 'rel="nofollow"' : 'rel=""';
                $result[$key]['nav_pic']  = handle_subdir_pic(get_default_pic($result[$key]['nav_pic']));
                $result[$key]['currentstyle']    = '';

                if  (empty($result[$key]['type_id'])) {
                    //固定页面
                    $nav_url = $result[$key]['nav_url'];//备份原来数据
                    $result[$key]['nav_url'] = $this->GetNavigUrl($result[$key]['nav_url']);
                    //如果返回是空说明是外部链接
                    if (empty($result[$key]['nav_url'])){
                        $result[$key]['nav_url'] = $nav_url;
                    }else{
                        //否则是首页等已经定义好的页面
                        if ($url == $result[$key]['nav_url']) $result[$key]['currentstyle'] = $currentstyle;
                    }
                } else{
                    //没有栏目同步
                    if (empty($result[$key]['arctype_sync'])){
                        if ($tid == $result[$key]['type_id']) $result[$key]['currentstyle'] = $currentstyle;
                    }else{
                        //栏目同步
                        $res = $this->getTypeUrl($result[$key]['type_id']);
                        if (1 == $res['ex_link']){
                            //栏目外部链接
                            $result[$key]['nav_url'] = $res['url'];
                        }else{
                            $result[$key]['nav_url'] = $res['url'];
                            if ($tid == $result[$key]['type_id']) $result[$key]['currentstyle'] = $currentstyle;
                        }
                    }
                }
            }

            foreach ($result as $k => $v) {
                if ($nav_id == $v['parent_id'] ) {
                    $topArr[$k] = $v;
                } else {
                    $sonArr[$k] = $v;
                }
            }

            foreach ($topArr as $key => $val) {
                foreach ($sonArr as $k => $v) {
                    if ($v['parent_id'] == $val['nav_id']) {
                        $topArr[$key]['children'][] = $v;
                    }
                }
            }
        }
        return $topArr;
    }

    public function getTypeUrl($typeid = 0)
    {
        $type = Db::name('arctype')->where('id',$typeid)->find();
        if (!empty($type['typelink'])){
            //走栏目外部链接
            return ['url'=>$type['typelink'],'ex_link'=>1];
        }else{
            $url = typeurl('home/Lists/index', $type);
            return ['url'=>$url,'ex_link'=>0];
        }
    }

    // 获取URL
    public function GetNavigUrl($nav_url)
    {
        $ReturnData = [
            'web_cmsurl'        => $this->root_dir."/",
            'index'             => url('user/Users/index'),
            'user_info'         => url('user/Users/info'),
            'my_collect'        => url('user/Users/collection_index'),
            'consumer_details'  => url('user/Pay/pay_consumer_details'),
            'shop_cart_list'    => url('user/Shop/shop_cart_list'),
            'shop_address_list' => url('user/Shop/shop_address_list'),
            'shop_centre'       => url('user/Shop/shop_centre'),
            'my_comment'        => url('user/ShopComment/index'),
            'release_centre'    => url('user/UsersRelease/release_centre'),
            'article_add'       => url('user/UsersRelease/article_add'),
        ];
        if (isset($ReturnData[$nav_url])){
            return $ReturnData[$nav_url];
        }else{
            return '';
        }

    }
}
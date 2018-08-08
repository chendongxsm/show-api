<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 分词搜索
 * @param $str
 * @return string
 */
function search_word($str)
{
    $str_arr = preg_split('/(?<!^)(?!$)/u', str_replace(' ', '', $str));
    $new_str = '%';
    foreach ($str_arr as $k => $v) {
        $new_str = $new_str . $v . '%';
    }
    return ($new_str);
}

/**
 * @param string $msg
 * @return \think\response\Json
 */
function ok_data($msg = '操作成功')
{
    return json(['error' => 0, 'msg' => $msg]);
}

/**
 * @param string $msg
 * @return \think\response\Json
 */
function error_data($msg = '操作失败')
{
    return json(['error' => 1, 'msg' => $msg]);
}

/**
 * @param null $stamp
 * @param string $format
 * @return false|null|string
 */
function formatTime($stamp = null, $format = 'Y年m月d日 H:i')
{
    if (is_numeric($stamp)) {
        $time = $stamp > 0 ? date($format, $stamp) : '';
    } else {
        $time = $stamp;
    }
    return $time;
}
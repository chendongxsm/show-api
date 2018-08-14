<?php
/**
 * Created by PhpStorm.
 * User: ChenDong
 * Date: 2018/8/13
 * Time: 18:49
 */

namespace app\api\controller;


use think\Controller;

class User extends Controller
{
    /**
     * 获取验证码
     * @return \think\response\Json
     */
    public function getCode(){
        return ok_data('验证码发送成功');
    }
}
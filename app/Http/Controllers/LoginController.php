<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class LoginController extends Controller
{
    // 生成一个验证码
    public function verify(){
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 50, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        return response($builder->output())->header('Content-type','image/jpeg');
    }
}

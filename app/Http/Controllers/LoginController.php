<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Auth;

class LoginController extends Controller
{
    // 生成一个验证码
    public function verify(){
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 34, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        return response($builder->output())->header('Content-type','image/jpeg');
    }

    // 验证登陆
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
           return redirect()->intended('/');
        }else{
            return redirect()->back()->withInput()->withErrors('登录失败，请检查您的账号或者密码！');
        }
    }
}

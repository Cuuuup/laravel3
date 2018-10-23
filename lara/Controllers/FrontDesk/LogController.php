<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
use App\Services\BackstageService;
use Request;


class LogController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // 后台登陆
    public function login()
    {
       
        return view('background.log.login');
    }

    // 后台登陆操作
    public function landingOperation(Request $request)
    {
        $name = Request::post();
        $backstage = new BackstageService;
        $arr = $backstage ->Land($name);
        // $session = session('admin');
        // $name = $session[0];
        // print_r($name->admin_name);die;
        if ($arr == 1) {
            return redirect('FrontDesk/show/firstpage');
        }else{
            return redirect('FrontDesk/log/login');
            
        }


    }

    // 后台注册
    public function register()
    {
        return view('background.log.register');
    }

    // 后台注册操作
    public function registrationOperation()
    {
        $name = Request::post();
        // print_r($name);die();
        $backstage = new BackstageService;
        $arr = $backstage ->register($name);
        // print_r($arr);die;
        switch ($arr) {
            case '0'://0:注册失败
                    return view('background.log.register');
                break;
            
             case '1':// 1:注册成功
                    return redirect('FrontDesk/show/firstpage');
                break;
            
             case '2':// 2：密码和确认密码不一致
                    return view('background.log.register');
                break;
            
             case '3':// 3:邮箱已存在
                    return view('background.log.register');
                break;

             case '4':// 4:手机号已存在
                    return view('background.log.register');
                break;
        }
    }

}

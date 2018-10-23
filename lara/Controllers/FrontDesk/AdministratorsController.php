<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Services\AdministratorsService;
// use Illuminate\Support\Facades\DB;
use Request;


class AdministratorsController extends Controller
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

    // 管理员管理
    public function show()
    {
        $administrators = new AdministratorsService;
        $arr = $administrators ->Land();
        if ($arr == 1) {
            $manage = $administrators -> Show();
            // print($manage);die;
            return view('background.administrators.show',['manage' => $manage]);
        }else{
            return redirect('FrontDesk/log/login');
        }
    }

    // 管理员删除
    public function delete(Request $request)
    {
        $id = Request::get('id');
        $administrators = new AdministratorsService;
        $manage = $administrators -> Del($id);
        if ($manage == 1) {
            return redirect('FrontDesk/administrators/show');//删除成功
        }else{
            return redirect('FrontDesk/administrators/show');//删除成功
        }
    }

    // 管理员修改
    public function modify(Request $request)
    {
        $id = Request::get('id');
        $administrators = new AdministratorsService;
        $manage = $administrators -> Modify($id);
        
        // print_r($manage);
        return view('background.administrators.modify',['id' => $id],['manage' => $manage]);
    }

    // 管理员修改操作
    public function modify_to(Request $request)
    {
        $id = Request::get('id');
        $arr = Request::post();
        $administrators = new AdministratorsService;
        $manage = $administrators -> Modify_to($id,$arr);
        if ($manage == 1) {
            return redirect('FrontDesk/administrators/show');//修改成功
        }else{
            return redirect('FrontDesk/administrators/show');//修改失败
        }
    }

    //解冻
    public function frozen()
    {
        $id = Request::get('id');
        $administrators = new AdministratorsService;
        $manage = $administrators -> Frozen($id);
        if ($manage == 1) {
            return redirect('FrontDesk/administrators/show');//解冻成功
        }else{
            return redirect('FrontDesk/administrators/show');//解冻失败
        }
    }

    //冻结
    public function thaw()
    {
        $id = Request::get('id');
        $administrators = new AdministratorsService;
        $manage = $administrators -> Thaw($id);
        if ($manage == 1) {
            return redirect('FrontDesk/administrators/show');//冻结成功
        }else{
            return redirect('FrontDesk/administrators/show');//冻结失败
        }
    }

    public function add()
    {
        return view('background.administrators.add');//跳到添加页面
    }

    public function add_to(Request $request)
    {
        $arr = Request::post();
        $administrators = new AdministratorsService;
        $manage = $administrators -> add($arr);
        switch ($manage) {
            case '0':
                return redirect('background/administrators/add');// 0:冻结失败
                break;
            case '1':
                return redirect('FrontDesk/administrators/show');// 1:添加成功
                break;
            case '2':
                return redirect('background/administrators/add');// 2:冻结失败
                break;
            case '3':
                return redirect('background/administrators/add');// 3:冻结失败
                break;
            default:
                return redirect('background/administrators/add');// 冻结失败
                break;
        }
    }


}
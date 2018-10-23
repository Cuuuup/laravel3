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

    // 后台首页
    public function show()
    {
        $session = session('admin');
        if ($session) {
            $administrators = new AdministratorsService;
            // echo '111sss';die;
            $manage = $administrators -> Show();
            // print_r($manage);die;
            return view('background.administrators.show',['manage' => $manage]);
        }else{
            return redirect('FrontDesk/log/login');//session 不存在
        }
    }

    // 管理员删除
    public function delete(Request $request)
    {
        $id = Request::get('id');
        // print_r($id);die;
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
        $id = Request::post('id');
        $administrators = new AdministratorsService;
        $manage = $administrators -> Modify($id);
        $role = $administrators -> RoleSelect();
        // print_r($role);die;
        return view('background.administrators.modify',['manage' => $manage],['role' => $role]);
    }

   // 管理员修改操作
    public function modify_to(Request $request)
    {
        $id = Request::get('id');
        $arr = Request::post();
        // print_r($arr);die;
        $administrators = new AdministratorsService;
        $manage = $administrators -> Modify_to($id,$arr);
        switch ($manage) {
            case '0':
                return redirect('FrontDesk/administrators/modify?id='.$id);//修改失败
                break;
            case '1':
                return redirect('FrontDesk/administrators/show');//修改成功
                break;
            case '3':
                return redirect('FrontDesk/administrators/modify?id='.$id);//管理员姓名不能为空
                break;
            case '4':
                return redirect('FrontDesk/administrators/modify?id='.$id);//管理员密码不能为空
                break;
            case '5':
                return redirect('FrontDesk/administrators/modify?id='.$id);//管理员邮箱不能为空
                break;
            case '6':
                return redirect('FrontDesk/administrators/modify?id='.$id);//管理员手机号不能为空
                break;
            case '7':
                return redirect('FrontDesk/administrators/modify?id='.$id);//管理员权限不能为空
                break;
            case '8':
                return redirect('FrontDesk/administrators/modify?id='.$id);//邮箱已存在
                break;
            case '9':
                return redirect('FrontDesk/administrators/modify?id='.$id);//邮箱已存在
                break;
        }
    }

    // 管理员解冻
    public function frozen()
    {
        $id = Request::get('id');
        // print_r($id.'解冻');die;
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
        // print_r($id.'冻结');die;
        $administrators = new AdministratorsService;
        $manage = $administrators -> Thaw($id);
        if ($manage == 1) {
            return redirect('FrontDesk/administrators/show');//冻结成功
        }else{
            return redirect('FrontDesk/administrators/show');//冻结失败
        }
    }

    // 管理员添加
    public function add()
    {
        // print_r(111112345664);die;
        $administrators = new AdministratorsService;
        $manage = $administrators -> Role();
        // print_r($manage);die;
        if (count($manage) == 0) {
            // return redirect('FrontDesk/administrators/show');
            // echo "添加失败";die;
        }else{
            return view('background.administrators.add',['manage'=>$manage]);
        }
    }

    // 管理员添加操作
    public function add_to(Request $request)
    {
        $arr = Request::post();
        // print_r($arr);die;
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
                return redirect('background/administrators/add');// 3:手机号已存在
                break;
            case '4':
                return redirect('background/administrators/add');// 4:用户名不能为空
                break;
            case '5':
                return redirect('background/administrators/add');// 5:密码不能为空
                break;
            case '6':
                return redirect('background/administrators/add');// 6:邮箱不能为空
                break;
            case '7':
                return redirect('background/administrators/add');// 7:手机号不能为空
                break;
            case '8':
                return redirect('background/administrators/add');// 8:角色名不能为空
                break;
            default:
                return redirect('background/administrators/add');// 冻结失败
                break;
        }
    }


}
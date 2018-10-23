<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Services\RoleService;
// use Illuminate\Support\Facades\DB;
use Request;


class RoleController extends Controller
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

    // 角色管理页面
    public function show()
    {
        $roleShow = new RoleService;
        $arr = $roleShow ->Land();
        if ($arr == 1) {
            $manage = $roleShow -> Show();
           // print($manage);die;
           return view('background.role.show',['manage' => $manage]);
       }else{
            return redirect('FrontDesk/log/login');
        }
    }

    // 角色删除
    public function delete(Request $request)
    {
        $id = Request::get('id');
        $roleShow = new RoleService;
        $manage = $roleShow -> Del($id);
        if ($manage == 1) {
            return redirect('FrontDesk/role/show');//删除成功
        }else{
            return redirect('FrontDesk/role/show');//删除成功
        }
    }

    // 角色修改
    public function modify(Request $request)
    {
        $id = Request::get('id');
        $roleShow = new RoleService;
        $manage = $roleShow -> Modify($id);
        return view('background.role.modify',['id' => $id],['manage' => $manage]);
    }

    // 角色修改操作
    public function modify_to()
    {
        $id = Request::get('id');
        $arr = Request::post();
        // print_r($arr);
        $administrators = new RoleService;
        $manage = $administrators -> Modify_to($id,$arr);
        if ($manage == 1) {
            return redirect('FrontDesk/role/show');//删除成功
        }else{
            return redirect('FrontDesk/role/show');//删除失败
        }
    }

    // 角色添加页面
    public function add()
    {
        return view('background.role.add');
    }

    // 角色添加操作
    public function add_to(Request $request)
    {
        $role_name = Request::post('role_name');
        // print_r($role_name);die;
        $roleShow = new roleService;
        $manage = $roleShow -> Add($role_name);
        if ($manage == 1) {
            return redirect('FrontDesk/role/show');//添加成功
        }else{
            return redirect('FrontDesk/role/show');//添加失败
        }
    }

}
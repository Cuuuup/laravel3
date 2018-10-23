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

    // 后台首页
    public function show()
    {
        $session = session('admin');
        if ($session) {
            $roleShow = new RoleService; //实例化RollService
            $land = $roleShow -> Land();
            if ($land == 1) {
                $role = $roleShow ->Show();
                if ($role) {
                    return view('background.role.show',['role' => $role]);
                }else{
                    return redirect('FrontDesk/log/login');
                }
            }else{
                return redirect('FrontDesk/show/firstpage');
            }
        }else{
            return redirect('FrontDesk/log/login');//session 不存在
        }
    }

    // 退出登陆
    public function unset()
    {
        $session['admin'] = null;
        if ($session == "") {
            return redirect('FrontDesk/log/login');
        }else{
            return redirect('FrontDesk/log/login');
        }
    }

    // 角色删除
    public function delete(Request $request)
    {
        $id = Request::get('id');
        // print_r($id);die;
        $roleShow = new RoleService;
        $manage = $roleShow -> Del($id);
        if ($manage == 1) {
            return redirect('FrontDesk/role/show');//删除成功
        }else{
            return redirect('FrontDesk/role/show');//删除失败
        }
    }

    // 角色查询要修改的数据
    public function modify(Request $request)
    {
        $id = Request::get('id');
        // print_r($id);die;
        $roleShow = new RoleService;
        $manage = $roleShow -> Modify($id);
        $menuSelect = $roleShow -> MenuSelect();
        // print_r($menuSelect);die;
        return view('background.role.modify',['manage' => $manage],['menuSelect' => $menuSelect]);
    }

    // 角色修改
    public function modify_to()
    {
        $id = Request::post('id');
        $role_name = Request::post('role_name');
        $menu_id = Request::post('menu_id');
        // print_r($role_name);die;
        $administrators = new RoleService;
        $manage = $administrators -> Modify_to($id,$role_name);
        // print_r($manage);die;
        if ($manage == 1) {
            $manage1 = $administrators -> MenuDel($id,$menu_id);
            // print_r($manage1);die;
            if ($manage1) {
                return redirect('FrontDesk/role/show');//修改成功
            }else{
                return redirect('FrontDesk/role/show');//修改失败
            }
        }else{
            return redirect('FrontDesk/role/show');//修改失败
        }
    }

    // 角色添加
    public function add()
    {
        $roleShow = new roleService;
        $manage = $roleShow -> Select();
        return view('background.role.add',['manage'=>$manage]);
    }

    // 角色添加操作
    public function add_to(Request $request)
    {
        $role_name = Request::post('role_name');
        $menu_id = Request::post('menu_id');
        $roleShow = new roleService;
        $manage = $roleShow -> Add($role_name);
        if ($manage == 1) {
            $menu = $roleShow -> Menu($menu_id,$role_name);
            // print_r($menu);die;
            if ($menu == 1) {
                return redirect('FrontDesk/role/show');//添加成功
            }else{
                return redirect('FrontDesk/role/show');//添加成功
            }
        }else if($manage == 2){
            return redirect('FrontDesk/role/add');//数据库已存在该角色
        }else{
            return redirect('FrontDesk/role/add');//添加失败
        }
    }
}
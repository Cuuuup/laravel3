<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Services\MenuService;
// use Illuminate\Support\Facades\DB;
use Request;


class MenuController extends Controller
{
	public function show()
    {
       $session = session('admin');
        if ($session) {
            $menuShow = new MenuService; //实例化RollService
                $menu = $menuShow ->Show();
                // print_r($menu);die;
                if ($menu) {
                    return view('background.menu.show',['menu' => $menu]);
                }else{
                    return redirect('FrontDesk/log/login');
                }
        }else{
            return redirect('FrontDesk/log/login');//session 不存在
        }
    }

    public function delete(Request $request)
    {
    	$id = Request::get('id');
        $menuShow = new MenuService;
        $manage = $menuShow -> Del($id);
        // print_r($id);die;
        if ($manage == 1) {
            return redirect('FrontDesk/menu/show');//删除成功
        }else{
            return redirect('FrontDesk/menu/show');//删除失败
        }
    }

    // 权限查询要修改的数据
    public function modify(Request $request)
    {
        $id = Request::get('id');
        // print_r($id);die;
        $menuShow = new MenuService;
        $manage = $menuShow -> Modify($id);
        // print_r($manage);die;
        return view('background.menu.modify',['id' => $id],['manage' => $manage]);
    }

    // 权限修改
    public function modify_to()
    {
        $id = Request::get('id');
        $arr = Request::post();
        // print_r($id);die;
        $administrators = new MenuService;
        $manage = $administrators -> Modify_to($id,$arr);
        if ($manage == 1) {
            return redirect('FrontDesk/menu/show');//删除成功
        }else{
            return redirect('FrontDesk/menu/show');//删除失败
        }
    }

    // 角色添加
    public function add()
    {
        return view('background.menu.add');
    }

    // 角色添加操作
    public function add_to(Request $request)
    {
        $menu['menu_name'] = Request::post('menu_name');
        $menu['menu_url'] = Request::post('menu_url');
        // print_r($menu);die;
        $menuShow = new menuService;
        $manage = $menuShow -> Add($menu);
        // print_r($manage);die;
        if ($manage == 1) {
            return redirect('FrontDesk/menu/show');//添加成功
        }else{
            return redirect('FrontDesk/menu/add');//添加失败
        }
    }


}


<?php
namespace App\Services;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;

class RoleService extends Controller
{
	// 判断用户是否登陆
	public function Land()
	{
		$session = session('admin');//将用户信息存入session
		if ($session != "") {
			return 1; //1：用户已经登陆
		}else{
			return 0; //2：用户没有登陆
		}
		
	}


	// 展示角色
	public function Show()
	{
		$roleShow = new Role;
		return $roleShow -> Show();
		// return 1;
		
	}

	//角色删除
	public function Del($id)
	{
		$roleShow = new Role;
		$manage = $roleShow -> Del($id);
		if ($manage == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	// 角色修改
	public function Modify($id)
	{
		$administrators = new Role;
		$manage = $administrators -> Modify($id);
		return $manage;
	}

	// 角色修改操作
	public function Modify_to($id,$arr)
	{
		$administrators = new Role;
		$manage = $administrators -> alter($id,$arr);
		if ($manage) {
			return 1;
		}else{
			return 1;
		}
	}

	// 删除menu表里要修改的数据
	public function MenuDel($id,$menu_id)
	{
		$administrators = new Role;
		$manage = $administrators -> menudel($id);
		$administrators -> role_menu($menu_id,$id);
						   // role_menu($menu_id,$role_id)
		if ($administrators) {
			return 1;
		}else{
			return 0;
		}
	}


	// 角色都有哪些权限
	public function Select()
	{
		$administrators = new Role;
		$manage = $administrators -> Menu();
		if ($manage) {
			return $manage;
		}else{
			return 0;
		}
	}

	// 角色的添加
	public function Add($role_name)
	{
		$administrators = new Role;
		$count_role_name = $administrators ->role_id();
			if (count($count_role_name) == 0) {
				$manage = $administrators -> add($role_name);
			if ($manage) {
				return 1;
			}else{
				return 0;
			}
		}else{
			return 2;
		}
		
	}

	public function Menu($menu_id,$role_name)
	{
		$a = array();
		$administrators = new Role;
		$role_id = $administrators -> role_id($role_name);
		$role_id1 = $role_id[0]->role_id;
		$manage = $administrators -> role_menu($menu_id,$role_id1);
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}

	public function MenuSelect()
	{
		$administrators = new Role;
		return $administrators ->MenuSelect();
	}




	

}
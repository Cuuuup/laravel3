<?php
namespace App\Services;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;


class RoleService extends Controller
{
	//查询session是否已有用户信息
	public function Land()
	{
		$session = session('admin');
		if ($session != "") {
			return 1;
		}else{
			return 0;
		}
	}

	// 展示角色
	public function Show()
	{
		$roleShow = new Role;
		$manage = $roleShow -> Show();
		return $manage;
	}

	// 删除角色
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
		$manage = $administrators -> Select($id);
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
			return 0;
		}
	}

	// 角色的添加
	public function Add($role_name)
	{
		$administrators = new Role;
		$manage = $administrators -> add($role_name);
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}

}
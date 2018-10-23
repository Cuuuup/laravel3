<?php
namespace App\Services;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;

class MenuService extends Controller
{
	// 展示角色
	public function Show()
	{
		$menuShow = new Menu;
		return $menuShow -> Show();
		// return 1;
		
	}

	//权限删除
	public function Del($id)
	{
		$menuShow = new Menu;
		$manage = $menuShow -> Del($id);
		if ($manage == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	// 权限修改
	public function Modify($id)
	{
		$administrators = new Menu;
		$manage = $administrators -> Modify($id);
		return $manage;
	}

	// 角色修改操作
	public function Modify_to($id,$arr)
	{
		$administrators = new Menu;
		$manage = $administrators -> alter($id,$arr);
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}

	// 角色的添加
	public function Add($role)
	{
		$administrators = new Menu;
		$manage = $administrators -> add($role);
		// return $manage;
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}
}
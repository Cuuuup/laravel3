<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
	// 查询角色的数据
	public function Show()
	{
		return DB::table('menu')
				->get();
	}

	// 删除角色的数据
	public function Del($id)
	{
		return DB::table('menu')
				->where('menu_id',$id)
				->delete();
	}

	// 查询修改的数据
	public function Modify($id)
	{
		return DB::table('menu')
				->where('menu_id', $id)
				->get();
	}

	// 修改操作
	public function alter($id,$arr)
	{
		return DB::table('menu')
			->where('menu_id', $id)
			->update([
				'menu_name' => $arr['menu_name'],
				'menu_url' => $arr['menu_url']
			]);
	}

	// 角色添加
	public function add($menu)
	{
		// return $menu;
		return DB::table('menu')
			->insert([
					'menu_name' => $menu['menu_name'],
					'menu_url' => $menu['menu_url']
				]);
			
	}
}
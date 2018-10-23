<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{

	// 查询角色的数据
	public function Show()
	{
		return DB::table('role')
				->get();
	}

	// 删除角色的数据
	public function Del($id)
	{
		return DB::table('role')
				->where('role_id',$id)
				->delete();
	}

	// 查询修改的数据
	public function Modify($id)
	{
		return DB::table('role')
				->where('role_id', $id)
				->get();
	}

	// 修改操作
	public function alter($id,$arr)
	{
		return DB::table('role')
			->where('role_id', $id)
			->update([
				'role_name' => $arr
			]);
	}

	public function menudel($id)
	{
		return DB::table('role_menu')
				->where('role_id',$id)
				->delete();
	}

	public function menuadd($id,$menu_id)
	{
		return $menu_id;
		foreach ($menu_id as $key => $val) {
			$role_menu = DB::table('role_menu')->insert([
						'role_id' => $id,
						'menu_id' => $val,
					]);
		}
		return $role_menu;
	}

	// 
	public function Menu()
	{
		return DB::table('menu')
			->get();
	}

	// 角色添加
	public function add($role_name)
	{
		return DB::table('role')
			->insert([
					'role_name' => $role_name
				]);
	}

	

	// 查询本次添加数据的id
	public function role_id($role_name)
	{
		return DB::table('role')
			->where('role_name', $role_name)
			->get();
	}


	public function role_menu($menu_id,$role_id)
	{
		$a = array();
		foreach ($menu_id as $key => $val) {
			$role_menu = DB::table('role_menu')->insert([
						'role_id' => $role_id,
						'menu_id' => $val,
					]);
		}
		return $a;
		
	}

	public function MenuSelect()
	{
		return DB::table('menu')
			->get();
	}

}
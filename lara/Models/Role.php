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

	// 删除
	public function Del($id)
	{
		return DB::table('role')
				->where('role_id',$id)
				->delete();
	}

	// 查询修改的数据
	public function Select($id)
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
				'role_name' => $arr['role_name']
			]);
	}

	// 角色添加
	public function add($role_name)
	{
		return DB::table('role')
			->insert([
					'role_name' => $role_name
				]);
	}

}

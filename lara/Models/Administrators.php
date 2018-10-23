<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Administrators extends Model
{
	public function Show()
	{
		// return 1111;
		return DB::table('admin')->get();
	}

	public function Del($id)
	{
		return DB::table('admin')
				->where('admin_id',$id)
				->delete();
	}

	public function Frozen($id)
	{
		return DB::table('admin')
				->where('admin_id', $id)
				->update(['is_freeze' => 1]);
	}

	public function Thaw($id)
	{
		return DB::table('admin')
				->where('admin_id', $id)
				->update(['is_freeze' => 0]);
	}

	public function select($where,$arr)
	{
		return DB::table('admin')
				->where($where,$arr)
				->get();
	}

	public function add($arr)
	{
		return DB::table('admin')
				->insert([
					'admin_name' => $arr['admin_name'], 
					'admin_password' => $arr['admin_password'],
					'admin_email' => $arr['admin_email'], 
					'admin_phone' => $arr['admin_phone'], 
					'role_id' => $arr['role_id'], 
					'admin_time' => $arr['admin_time']
				]);
	}

	public function alter($id,$arr)
	{
		return DB::table('admin')
				->where('admin_id', $id)
				->update([
					'admin_name' => $arr['admin_name'],
					'admin_password' => $arr['admin_password'],
					'admin_email' => $arr['admin_email'],
					'admin_phone' => $arr['admin_phone'],
					'role_id' => $arr['role_id']
				]);
	}

}
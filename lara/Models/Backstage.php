<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Backstage extends Model
{
	public function landSelect($array)
	{
		return DB::table('admin')
				->where('admin_email',$array['admin_email'])
				->where('admin_password',$array['admin_password'])
				->get();
	}

	public function registerSelect($admin,$array)
	{
		return DB::table('admin')
				->where($admin,$array)
				->get();
	}

	public function registeradd($array)
	{
		return DB::table('admin')
				->insert([
						'admin_name' => $array['admin_name'], 
						'admin_email' => $array['admin_email'],
						'admin_phone' => $array['admin_phone'], 
						'admin_password' => $array['admin_password'], 
						'admin_time' => $array['admin_time']
					]);
	}

	public function registerQueryData($array)
	{
		return DB::table('admin')
				->where('admin_name',$array['admin_name'])
				->where('admin_email',$array['admin_email'])
				->where('admin_phone',$array['admin_phone'])
				->where('admin_password',$array['admin_password'])
				->get();
	}
}
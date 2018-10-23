<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Show extends Model
{

	public function authority($role_id)
	{
		$role = DB::table('role')
				->where('role_id' , $role_id)
				->get();
		$role_id = $role[0]->role_id;
		$role_menu = DB::table('role_menu')
				->where('role_id' , $role_id)
				->get();
		return $role_menu;
	}
	
	public function power($arr)
	{
		$menu = array();
		foreach ($arr as $key => $val) {
			$menu[$key] = DB::table('menu')
				->where('menu_id' , $val)
				->get();
		}
		return $menu;
	}
}
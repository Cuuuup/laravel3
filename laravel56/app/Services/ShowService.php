<?php
namespace App\Services;

use App\Models\Show;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;

class ShowService extends Controller
{

	// 判断用户是否登陆
	public function Land()
	{
		$session = session('admin');//将用户信息存入session
		if ($session != "") {
			return 1;
		}else{
			return 0;
		}
	}

	// 退出登陆状态
	public function Unset()
	{
		$session = session(['admin'=>""]);
		// $session = session('admin');//将用户信息存入session
		return $session;
	}

	// 用户的权限
	public function Jurisdiction()
	{
		$session = session('admin');
		$role_id = $session[0]->role_id;
		$jurisdiction = new Show;
		$jurisdic = $jurisdiction -> authority($role_id);
		$arr = array();
		foreach ($jurisdic as $key => $value) {
			$arr[$key] = $value->menu_id;
		}
		$power = $jurisdiction -> power($arr);
		return $power;
		
	}

}
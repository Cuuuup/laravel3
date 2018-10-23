<?php
namespace App\Services\Admin;

use App\Models\Admin\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;

class userService extends Controller
{
	// 用户的权限
	public function createMenus()
	{
		$session = session('admin');
		if ($session) {
			// print_r($session);
			$role_id = $session[0]->role_id;
			$jurisdiction = new User;
			$jurisdic = $jurisdiction -> authority($role_id);
			$arr = array();
			foreach ($jurisdic as $key => $value) {
				$arr[$key] = $value->menu_id;
			}
			$power = $jurisdiction -> power($arr);
		}else{
			return redirect('FrontDesk/log/login');//session 不存在
		}


// $menu = [['text'=>'arr','url'=>'art'],['text'=>'arr','url'=>'art'],['text'=>'arr','url'=>'art']];
        foreach ($power as $key => $val) {
        	$array[$key] =  $val[0]->menu_name;
        }
        $arr3 = array();
        foreach ($power as $k => $v) {
        	$array1[$k] = $v[0]->menu_url;
        }
        // ===============================================
        foreach ($array1 as $ke => $va) {
        	$arr3[$ke]['text'] = $array[$ke];
        	$arr3[$ke]['url'] = $array1[$ke];
        }
        // ===============================================
        $block = array_combine($array,$array1);
		return $arr3;

		// return $menu = [['text'=>'arr','url'=>'art'],['text'=>'arr','url'=>'art'],['text'=>'arr','url'=>'art']];
	}
}
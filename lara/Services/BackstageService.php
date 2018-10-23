<?php
namespace App\Services;

use App\Models\Backstage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;

class BackstageService extends Controller
{

	public function Land($arr)
	{
		$array['admin_email'] = $arr['email'];
		$array['admin_password'] = $arr['password'];
		$backstage = new Backstage;
		$landSelect = $backstage->landSelect($array);
		if (count($landSelect) == 1) {
			session(['admin'=>$landSelect]);//将用户信息存入session里的admin
			return 1;
		}else{
			return 0;
		}
		
	}

	public function register($arr)
	{
		$array['admin_name'] = $arr['admin_name'];
		$array['admin_email'] = $arr['admin_email'];
		$array['admin_phone'] = $arr['admin_phone'];
		$array['admin_password'] = $arr['admin_password'];
		$array['admin_time'] = date("Y-m-d H:i:s",time());
		$password_confirmation = $arr['password_confirmation'];
		if ($array['admin_password'] != $password_confirmation) {
			return 2;// 2：密码和确认密码不一致
		}
		$backstage = new Backstage;
		// 判断邮箱是否存在
		$landSelectEmail = $backstage->registerSelect('admin_email',$array['admin_email']);
		if (count($landSelectEmail) != 0) {
			return 3;// 3:邮箱已存在
		}
		// 判断手机号是否存在
		$landSelectPhone = $backstage->registerSelect('admin_phone',$array['admin_phone']);
		// print_r($landSelectPhone);die;
		if (count($landSelectPhone) != 0) {
			return 4;// 4:手机号已存在
		}
		$landSelect = $backstage->registeradd($array);
		if ($landSelect) {
			$data = $backstage->registerQueryData($array);
			// return $data;
			session(['admin'=>$data]);//将用户信息存入session里的admin
			return 1;// 1:注册成功
		}else{
			return 0;// 0:注册失败
		}
	}

}
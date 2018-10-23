<?php
namespace App\Services;

use App\Models\Administrators;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;


class AdministratorsService extends Controller
{
	public function Land()
	{
		// 判断用户是否登陆
		$session = session('admin');//将用户信息存入session
		if ($session != "") {
			return 1;
		}else{
			return 0;
		}
		
	}

	// 管理员展示
	public function Show()
	{
		$administrators = new Administrators;
		$manage = $administrators -> Show();
		return $manage;
	}

	// 管理员删除
	public function Del($id)
	{
		$administrators = new Administrators;
		$manage = $administrators -> Del($id);
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}

	// 管理员查询要删除的数据
	public function Modify($id)
	{
		$administrators = new Administrators;
		$manage = $administrators -> select('admin_id',$id);
		return $manage;
	}

	// 管理员删除
	public function Modify_to($id,$arr)
	{
		$administrators = new Administrators;
		$manage = $administrators -> alter($id,$arr);
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}

	// 管理员解冻
	public function Frozen($id)
	{
		$administrators = new Administrators;
		$manage = $administrators -> Frozen($id);
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}

	// 管理员冻结
	public function Thaw($id)
	{
		$administrators = new Administrators;
		$manage = $administrators -> Thaw($id);
		if ($manage) {
			return 1;
		}else{
			return 0;
		}
	}

	// 管理员添加
	public function add($arr)
	{
		$arr['admin_time'] = date("Y-m-d H:i:s",time());
		$administrators = new Administrators;
		$manage_email = $administrators -> select('admin_email', $arr['admin_email']);
		if (count($manage_email) == 1) {
			return 2;// 2:邮箱已存在
		}
		$manage_phone = $administrators -> select('admin_phone', $arr['admin_phone']);
		if (count($manage_phone) == 1) {
			return 3;// 3:手机号已存在
		}
		$manage = $administrators -> add($arr);
		if ($manage) {
			return 1;// 1:添加成功
		}else{
			return 0;// 1:添加失败
		}
	}

	

}
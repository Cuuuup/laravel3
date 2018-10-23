<?php
namespace App\Services;

use App\Models\Administrators;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\job;


class AdministratorsService extends Controller
{

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
		$manage = $administrators -> Modify('admin_id',$id);
		return $manage;
		// return $id;
	}

	public function RoleSelect()
	{
		$administrators = new Administrators;
		$manage = $administrators -> Role();
		// return '1111111';
		return $manage;
	}

	// 管理员修改
	public function Modify_to($id,$arr)
	{
		$administrators = new Administrators;
		if ($arr['admin_name'] == "admin_name") {
		 	return 3;//管理员姓名不能为空
		} 
		if ($arr['admin_password'] == "admin_password") {
		 	return 4;//管理员密码不能为空
		} 
		if ($arr['admin_email'] == "admin_email") {
		 	return 5;//管理员邮箱不能为空
		} 
		if ($arr['admin_phone'] == "admin_phone") {
		 	return 6;//管理员手机号不能为空
		} 
		if ($arr['role_id'] == 'default') {
			return 7;//管理员权限不能为空
		}
		$admin_email = $administrators -> Sele('admin_email',$arr['admin_email'],$id);
		if (count($admin_email) != 0 ) {
			return 8;//邮箱已存在
		}
		$admin_phone = $administrators -> Sele('admin_phone',$arr['admin_phone'],$id);
		if (count($admin_phone) != 0 ) {
			return 9;//邮箱已存在
		}

		$manage = $administrators -> alter($id,$arr);
		if ($manage) {
			return 1;//修改成功
		}else{
			return 0;//修改失败
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

	// 管理员添加查询角色表
	public function Role()
	{
		$administrators = new Administrators;
		$manage = $administrators -> Role();
		if ($manage) {
			return $manage;
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
		if ($arr['admin_name'] == "") {
			return 4;//4:用户名不能为空
		}
		if ($arr['admin_password'] == "") {
			return 5;//5:密码不能为空
		}
		if ($arr['admin_email'] == "") {
			return 6;//6:邮箱不能为空
		}
		if ($arr['admin_phone'] == "") {
			return 7;//7:手机号不能为空
		}
		if ($arr['role_id'] == "") {
			return 8;//8:角色名不能为空
		}
		$manage = $administrators -> add($arr);
		if ($manage) {
			return 1;// 1:添加成功
		}else{
			return 0;// 1:添加失败
		}
	}



}
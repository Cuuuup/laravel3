<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['middleware' => ['web']], function () {


	// ===================前台===================
	// 根目录-登陆
	Route::get("/", "Auth\IndexController@index");
	// 登陆的操作
	Route::post('index/landingOperation','Auth\IndexController@landingOperation');
	// 登陆的验证
	Route::post('index/userNameVerification','Auth\IndexController@userNameVerification');
	Route::post('index/mobilePhoneNumberVerification','Auth\IndexController@mobilePhoneNumberVerification');
	Route::post('index/mailboxVerification','Auth\IndexController@mailboxVerification');
	Route::post('index/passwordAuthentification','Auth\IndexController@passwordAuthentification');


	// 注册
	Route::get('index/register','Auth\IndexController@register');
	// 注册的操作
	Route::post('index/registerOperation','Auth\IndexController@registerOperation');
	// 展示
	Route::get('shop/index','Auth\ShopController@index');
	// 列表
	Route::get('shop/liebiao','Auth\ShopController@liebiao');
	// 详情
	Route::get('shop/xiangqing','Auth\ShopController@xiangqing');
	// 购物车
	Route::get('shop/gouwuche','Auth\ShopController@gouwuche');
	// 订单
	Route::any('shop/dingdanzhongxin','Auth\ShopController@dingdanzhongxin');


	Route::get('a/a', function () {
    	return view('hello');
	});




	// ===================后台===================
	// 后台登陆页面
	Route::get('FrontDesk/log/login','Frontdesk\LogController@login');
	// 后台登陆操作页面
	Route::post('FrontDesk/log/landingOperation','Frontdesk\LogController@landingOperation');
	// 后台注册页面
	Route::get('FrontDesk/log/register','Frontdesk\LogController@register');
	// 后台注册操作页面
	Route::post('FrontDesk/log/registrationOperation','Frontdesk\LogController@registrationOperation');
	// 后台首页
	Route::get('FrontDesk/show/firstpage','Frontdesk\ShowController@firstpage');
	// 管理员页面
	Route::get('FrontDesk/administrators/show','Frontdesk\AdministratorsController@show');
	// 管理员删除页面
	Route::get('FrontDesk/administrators/delete','Frontdesk\AdministratorsController@delete');
	// 管理员修改页面
	Route::get('FrontDesk/administrators/modify','Frontdesk\AdministratorsController@modify');
	// 管理员修改操作页面
	Route::post('FrontDesk/administrators/modify_to','Frontdesk\AdministratorsController@modify_to');
	// 管理员解冻页面
	Route::get('FrontDesk/administrators/frozen','Frontdesk\AdministratorsController@frozen');
	// 管理员冻结页面
	Route::get('FrontDesk/administrators/thaw','Frontdesk\AdministratorsController@thaw');
	// 管理员添加页面
	Route::get('FrontDesk/administrators/add','Frontdesk\AdministratorsController@add');
	// 管理员添加操作页面
	Route::post('FrontDesk/administrators/add_to','Frontdesk\AdministratorsController@add_to');
	// 角色页面
	Route::get('FrontDesk/role/show','Frontdesk\RoleController@show');
	// 角色删除页面
	Route::get('FrontDesk/role/delete','Frontdesk\RoleController@delete');
	// 角色修改页面
	Route::get('FrontDesk/role/modify','Frontdesk\RoleController@modify');
	// 角色修改操作页面
	Route::post('FrontDesk/role/modify_to','Frontdesk\RoleController@modify_to');
	// 角色添加页面
	Route::get('FrontDesk/role/add','Frontdesk\RoleController@add');
	// 角色添加操作页面
	Route::post('FrontDesk/role/add_to','Frontdesk\RoleController@add_to');
	// 管理员页面
	Route::get('FrontDesk/goods/show','Frontdesk\GoodsController@show');
	// 退出登陆
	Route::post('FrontDesk/show/unset','Frontdesk\ShowController@unset');
	// 权限页面
	Route::get('FrontDesk/menu/show','Frontdesk\MenuController@show');
	// 权限删除页面
	Route::get('FrontDesk/menu/delete','Frontdesk\MenuController@delete');
	// 权限修改页面
	Route::get('FrontDesk/menu/modify','Frontdesk\MenuController@modify');
	// 权限修改操作页面
	Route::post('FrontDesk/menu/modify_to','Frontdesk\MenuController@modify_to');
	// 角色添加页面
	Route::get('FrontDesk/menu/add','Frontdesk\MenuController@add');
	// 角色添加操作页面
	Route::post('FrontDesk/menu/add_to','Frontdesk\MenuController@add_to');

});
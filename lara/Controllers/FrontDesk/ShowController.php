<?php

namespace App\Http\Controllers\Frontdesk;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Services\ShowService;
// use Illuminate\Support\Facades\DB;
// use Request;


class ShowController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // 后台首页
    public function firstpage()
    {

        $backstage = new ShowService;
        $arr = $backstage ->Land();
        if ($arr == 1) {
            $jurisdiction = $backstage->Jurisdiction();
            $arr = array();
            foreach ($jurisdiction as $key => $value) {
                $arr[$key] =  $value[0];
            }
            // print_r($arr);die;
            // print_r($jurisdiction[1][0]);die;


            return view('background.show.firstpage',['arr' => $arr]);
        }else{
            return redirect('FrontDesk/log/login');
        }
        
    }
    // 删除session
    public function unset()
    {
        $backstage = new ShowService;
        $arr = $backstage ->Unset();
        if ($arr == "") {
            return redirect('FrontDesk/log/login');
        }
    }


}
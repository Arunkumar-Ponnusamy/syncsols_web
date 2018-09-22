<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Admin;
use App\Settings;
use Setting;

class AdminController extends Controller {

//    function __construct()
//    {
//        View::share([
//        ]);
//    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function showHome() {
        Setting::set('test','test');
        Setting::save();
            return view('admin.login');
        return view('admin.calender');
    }

    public function login() {
        // $admin = Admin::where('username',Input::get('username'))->where('password',Input::get('password'));
        // if($admin)
            return view('admin.index');
        // else
        //     return view('admin.login');
    }
    
    public function showAbout() {
        return view('web.about');
    }
    
    public function showService() {
        return view('web.service');
    }

    public function showService1() {
        return view('web.service1');
    }
    
    
}
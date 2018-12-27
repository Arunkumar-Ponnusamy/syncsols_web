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
        return view('admin.login');
    }

    public function login() {
        // $admin = Admin::where('username',Input::get('username'))->where('password',Input::get('password'));
        // if($admin)
        // return view('admin.calender');
            return redirect()->route('dashboard')->with('flash_success','logged in!');
        // else
        //     return view('admin.login');
    }
    
    public function dashboard() {
        return view('admin.dashboard');
    }
    
    public function setting() {
        return view('admin.settings');
    }
    
    public function update_setting(Request $request) {
        $requests = $request->except('_token');
        foreach($requests as $key=>$value) {
            if($key=='site_logo') {
                $value = $request->site_logo->store('site');
            }
            Setting::set($key, $value);
            Setting::save();
        }
            return redirect()->back()->with('flash_success','Settings Updated');

    }

    public function showBanners() {
        return view('admin.banners');
    }
    
    public function showFeatures() {
        return view('admin.features');
    }
    
    public function showOurServices() {
        return view('admin.ourservices');
    }
    
    public function showTeam() {
        return view('admin.team');
    }
    
    public function showWorks() {
        return view('admin.works');
    }
    
    public function showCounts() {
        return view('admin.counts');
    }
    
    public function showTestimonials() {
        return view('admin.testimonials');
    }
    
    public function showAboutcontent() {
        return view('admin.about');
    }
    
    public function showProjects() {
        return view('admin.projects');
    }
    
    public function showServices() {
        return view('admin.services');
    }
    
    
}
<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Admin;
use App\Banner;
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
        $banners = Banner::all();
        return view('admin.banners',compact('banners'));
    }
    
    public function addBanners(Request $request) {
    $banner = $request->all();
    try {
        if($request->hasFile('image')) 
            $banner['image'] = $request->image->store('banner/images');
        if($request->hasFile('video'))
            $banner['video'] = $request->video->store('banner/videos');
        if($banner['position']=='' || $banner['position']=='0')
            $banner['postion'] = count(Banner::all())+1;

        Banner::create($banner);        
        return redirect()->back()->with('flash_success','Banner Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editBanners(Request $request, $id) {
        $banner = Banner::find($id);
        return view('admin.edit-banners',compact('banner'));
    }
    
    public function updateBanners(Request $request, $id) {
    $banner = $request->except('_token');
        if($request->hasFile('image')) 
            $banner['image'] = $request->image->store('banner/images');
        if($request->hasFile('video'))
            $banner['video'] = $request->video->store('banner/videos');
    try {
        Banner::where('id', $id)->update($banner);
        $banners = Banner::all();
            return redirect('admin/banners')->with('flash_success','Banner Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
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
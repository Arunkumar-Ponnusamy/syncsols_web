<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use App\Settings;
use Setting;
use App\Admin;
use App\Banner;
use App\Feature;
use App\Team;
use App\Work;
use App\Count;
use App\Testimonial;
use App\About;
use App\Project;
use App\Service;

class WebController extends Controller {

//    function __construct()
//    {
//        View::share([
//        ]);
//    }
    
    public function showHome() {
        if(Setting::get('DEMO_MODE') == '1') {
            return view('web.syncsols_temp');
        } else {
            $banners = Banner::all();
            $features = Feature::all();
            $counts = Count::all();
            $team_members = Team::orderBy('position')->get();
            $testimonials = Testimonial::all();
            return view('web.index',compact('banners','features','counts','team_members','testimonials'));
        }
    }
    
    public function showAbout() {
        $about = About::first();
        return view('web.about',compact('about'));
    }
    
    public function showContact() {
        return view('web.contact');
    }
    
    public function showService() {
        return view('web.service');
    }

    public function showService1() {
        return view('web.service1');
    }
    
    public function showTestpage() {
        return view('web.test');
    }
    
    public function showServices() {
        return view('web.services');
    }

    public function showProjectpage() {
        return view('web.projects');
    }
    

}
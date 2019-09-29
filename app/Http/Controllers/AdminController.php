<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
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
            if(!$request->DEMO_MODE) {
                $key = 'DEMO_MODE';
                $value = 0;
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
    
    public function deleteBanners(Request $request, $id) {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->back()->with('flash_success','Banner Deleted');
    }

    public function showFeatures() {
        $features = Feature::all();
        return view('admin.features',compact('features'));
    }
    
    public function addFeatures(Request $request) {
    $feature = $request->except('_token');
    try {
        if(Feature::all()->count()<3) {
            Feature::create($feature);        
            return redirect()->back()->with('flash_success','Feature Added');
        } else {
            return redirect()->back()->with('flash_error','Allowed to add only 3 Features');
        }
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editFeatures(Request $request, $id) {
        $feature = Feature::find($id);
        return view('admin.edit-features',compact('feature'));
    }
    
    public function updateFeatures(Request $request, $id) {
    $feature = $request->except('_token');
    try {
        Feature::where('id', $id)->update($feature);
        $features = Feature::all();
            return redirect('admin/features')->with('flash_success','Feature Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteFeatures(Request $request, $id) {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect()->back()->with('flash_success','Feature Deleted');
    }

    public function showOurServices() {
        $ourservices = Feature::all();
        return view('admin.ourservices',compact('ourservices'));
    }
    
    public function showTeams() {
        $teams = Team::all();
        return view('admin.team',compact('teams'));
    }
    
    public function addTeams(Request $request) {
    $team = $request->except('_token');
    try {

        Team::create($team);        
        return redirect()->back()->with('flash_success','Team Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editTeams(Request $request, $id) {
        $team = Team::find($id);
        return view('admin.edit-teams',compact('team'));
    }
    
    public function updateTeams(Request $request, $id) {
    $team = $request->except('_token');
    try {
        Team::where('id', $id)->update($team);
        $teams = Team::all();
            return redirect('admin/teams')->with('flash_success','Team Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteTeams(Request $request, $id) {
        $team = Team::find($id);
        $team->delete();
        return redirect()->back()->with('flash_success','Team Deleted');
    }
    
    public function showWorks() {
        $works = Work::all();
        return view('admin.works',compact('works'));
    }
    
    public function addWorks(Request $request) {
    $work = $request->except('_token');
    try {

        Work::create($work);        
        return redirect()->back()->with('flash_success','Work Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editWorks(Request $request, $id) {
        $work = Work::find($id);
        return view('admin.edit-works',compact('work'));
    }
    
    public function updateWorks(Request $request, $id) {
    $work = $request->except('_token');
    try {
        Work::where('id', $id)->update($work);
        $works = Work::all();
            return redirect('admin/works')->with('flash_success','Work Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteWorks(Request $request, $id) {
        $work = Work::find($id);
        $work->delete();
        return redirect()->back()->with('flash_success','Work Deleted');
    }
    
    public function showCounts() {
        $counts = Count::all();
        return view('admin.counts',compact('counts'));
    }
    
    public function addCounts(Request $request) {
    $count = $request->except('_token');
    try {

        Count::create($count);        
        return redirect()->back()->with('flash_success','Count Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editCounts(Request $request, $id) {
        $count = Count::find($id);
        return view('admin.edit-counts',compact('count'));
    }
    
    public function updateCounts(Request $request, $id) {
    $count = $request->except('_token');
    try {
        Count::where('id', $id)->update($work);
        $counts = Count::all();
            return redirect('admin/counts')->with('flash_success','Count Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteCounts(Request $request, $id) {
        $count = Count::find($id);
        $count->delete();
        return redirect()->back()->with('flash_success','Count Deleted');
    }
    
    public function showTestimonials() {
        $testimonials = Testimonial::all();
        return view('admin.testimonials',compact('testimonials'));
    }
    
    public function addTestimonials(Request $request) {
    $testimonial = $request->except('_token');
    try {

        Testimonial::create($testimonial);        
        return redirect()->back()->with('flash_success','Testimonial Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editTestimonials(Request $request, $id) {
        $testimonial = Testimonial::find($id);
        return view('admin.edit-testimonials',compact('testimonial'));
    }
    
    public function updateTestimonials(Request $request, $id) {
    $testimonial = $request->except('_token');
    try {
        Testimonial::where('id', $id)->update($work);
        $testimonials = Testimonial::all();
            return redirect('admin/testimonials')->with('flash_success','Testimonial Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteTestimonials(Request $request, $id) {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with('flash_success','Testimonial Deleted');
    }
    
    public function showAbouts() {
        $abouts = About::all();
        return view('admin.about',compact('abouts'));
    }
    
    public function addAbouts(Request $request) {
    $about = $request->except('_token');
    try {

        About::create($about);        
        return redirect()->back()->with('flash_success','About Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editAbouts(Request $request, $id) {
        $about = About::find($id);
        return view('admin.edit-abouts',compact('testimonial'));
    }
    
    public function updateAbouts(Request $request, $id) {
    $about = $request->except('_token');
    try {
        About::where('id', $id)->update($about);
        $abouts = About::all();
            return redirect('admin/abouts')->with('flash_success','About Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteAbouts(Request $request, $id) {
        $about = About::find($id);
        $about->delete();
        return redirect()->back()->with('flash_success','About Deleted');
    }
    
    public function showProjects() {
        $projects = Project::all();
        return view('admin.projects',compact('projects'));
    }
    
    public function addProjects(Request $request) {
    $project = $request->except('_token');
    try {

        Project::create($project);        
        return redirect()->back()->with('flash_success','Project Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editProjects(Request $request, $id) {
        $project = Project::find($id);
        return view('admin.edit-projects',compact('project'));
    }
    
    public function updateProjects(Request $request, $id) {
    $project = $request->except('_token');
    try {
        Project::where('id', $id)->update($project);
        $projects = Project::all();
            return redirect('admin/projects')->with('flash_success','Project Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteProjects(Request $request, $id) {
        $project = Project::find($id);
        $project->delete();
        return redirect()->back()->with('flash_success','Project Deleted');
    }    

    public function showServices() {
        $services = Service::all();
        return view('admin.services',compact('services'));
    }
    
    public function addServices(Request $request) {
    $service = $request->except('_token');
    try {

        Service::create($service);        
        return redirect()->back()->with('flash_success','Service Added');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function editServices(Request $request, $id) {
        $service = Service::find($id);
        return view('admin.edit-services',compact('service'));
    }
    
    public function updateServices(Request $request, $id) {
    $service = $request->except('_token');
    try {
        Service::where('id', $id)->update($service);
        $services = Service::all();
            return redirect('admin/services')->with('flash_success','Service Updated!');
    }
    catch(Exception $e) {
        // dd($e);
        return redirect()->back()->with('flash_error',$e->getMessage());
    }
    }
    
    public function deleteServices(Request $request, $id) {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('flash_success','Service Deleted');
    }    
    
    
}
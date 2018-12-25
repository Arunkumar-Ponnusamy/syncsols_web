<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;

class WebController extends Controller {

//    function __construct()
//    {
//        View::share([
//        ]);
//    }
    
    public function showHome() {
        return view('web.index');
    }
    
    public function showAbout() {
        return view('web.about');
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
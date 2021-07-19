<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:dashboard_read'])->only('index');

    } //end of constructor

    public function index() 
    {
		$users_count     = User::whereRoleIs('admin')->count();
        $categorys_count = Category::count();
        $courses_count   = Course::count();
        $coachess_count  = User::whereRoleIs('coaches')->count();
		
    	return view('dashboard.welcome',compact('users_count','categorys_count','courses_count','coachess_count'));
    }///end of index

}//end of controller

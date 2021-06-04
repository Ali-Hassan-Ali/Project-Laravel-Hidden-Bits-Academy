<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use App\Models\Post;
use App\Models\Certificate;
use App\Models\Founder;
use App\Models\AdvisoryService;

class WelcomeController extends Controller
{
    public function index ()
    {
    	$categorys     = Category::all();
        $coaches_count = User::whereRoleIs('coaches')->count();
        $sudant_count  = User::count();
        $courses_count = Course::count();

        $all_coaches   = User::whereRoleIs('coaches')->paginate(3);
        $all_course    = Course::paginate(6);
        $posts         = Post::paginate(3);

    	return view('home.welcome',compact('categorys','coaches_count','sudant_count','courses_count','all_coaches','posts','all_course'));
    }//end of index

    public function success() 
    {
        $categorys = Category::all();

        return view('home.success',compact('categorys'));
    }//end of show log

    public function login () 
    {
    	$categorys = Category::all();

    	return view('auth.login',compact('categorys'));
    }//end of show login


    public function register() 
    {
        $categorys = Category::all();

        return view('auth.register',compact('categorys'));
    }//end of show register

    public function show_all_coache()     
    {
        $categorys = Category::all();

        $all_coaches = User::whereRoleIs('coaches')->get();

        return view('home.show_all_coache',compact('all_coaches','categorys'));
    }//end of show show_all_coache

    public function show_coache($id)     
    {
        $categorys = Category::all();

        $coache = User::find($id)->whereRoleIs('coaches')->first();

        return view('home.show_coache',compact('coache','categorys'));
    }//end of show show_coache

    public function certificates()     
    {
        $categorys     = Category::all();
        $courses     = Course::all();

        return view('home.certificates',compact('categorys','courses'));
    }//end of show certificates

    public function founder($id)     
    {
        $categorys     = Category::all();
        $founders     = Founder::find($id);

        return view('home.founder',compact('categorys','founders'));
    }//end of show certificates

    public function certificates_store(Request $request)     
    {
        // dd($request->all());
         $request->validate([
            'email'       => 'required',
            'name_ar'     => 'required',
            'name_en'     => 'required',
            'name_course' => 'required',
        ]);

        try {

            Certificate::create($request->all());

            return redirect()->route('success');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    }//end of show register

    public function advisory_services_store(Request $request)     
    {
        // dd($request->all());
         $request->validate([
            'email' => 'required',
            'name'  => 'required',
            'title' => 'required',
            'phone' => 'required',
            'body'  => 'required',
        ]);

        try {

            AdvisoryService::create($request->all());
            
            return response(['success' => true]);


        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    }//end of show register

}//end of controller

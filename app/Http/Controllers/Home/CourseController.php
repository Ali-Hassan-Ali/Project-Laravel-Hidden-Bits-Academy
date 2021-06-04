<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class CourseController extends Controller
{
    public function ShowCourse($id)
    {
    	$categorys = Category::all();
    	$courses   = Course::all()->where('categories_id', $id);
    	$name_courses   = Category::all()->where('id', $id)->pluck('name')->first();
    	
    	return view('home.show_sourse',compact('categorys','courses','name_courses'));
    }//end of show course

    public function DetailsCourse($id)
    {
    	$categorys = Category::all();
    	$details_course   = Course::find($id);
    	// dd($details_course);

    	return view('home.details_course',compact('categorys','details_course'));
    }//end of Details_Course

}//end of controller

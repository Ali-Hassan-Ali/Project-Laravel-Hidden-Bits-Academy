<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:courses_read'])->only('index');
        $this->middleware(['permission:courses_create'])->only('create');
        $this->middleware(['permission:courses_update'])->only('edit');
        $this->middleware(['permission:courses_delete'])->only('destroy');

    } //end of constructor
    
    public function index()
    {
        $courses = Course::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.course.index',compact('courses'));
    }//end of index


    public function create()
    {
        $categories = Category::all();
        return view('dashboard.course.create',compact('categories'));
    }//end of create


    public function store(Request $request)
    {

        $request->validate([
            'name'              => 'required',
            'url'               => 'required',
            'Short_description' => 'required',
            'description'       => 'required',
            'rating'            => 'required',
            'categories_id'     => 'required',
            'image'             => 'required',
            'price'             => 'required',
            'demo_video'        => 'required',
        ]);

        try {

            $request_data = $request->except(['image','demo_video']);

            if ($request->image) {

                Image::make($request->image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('uploads/course_images/' . $request->image->hashName()));

                $request_data['image'] = $request->image->hashName();

            }//end of if

            $request_data['demo_video'] = $request->file('demo_video')->store('courses_video');

            Course::create($request_data);

            session()->flash('success', __('home.added_successfully'));
            return redirect()->route('dashboard.courses.index');

         } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//endof store


    public function edit(Course $course)
    {
        $categories = Category::all();

        return view('dashboard.course.edit',compact('course','categories'));
    }//end ofedit


    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name'              => 'required',
            'url'               => 'required',
            'Short_description' => 'required',
            'description'       => 'required',
            'rating'            => 'required',
            'categories_id'     => 'required',
            'image'             => 'image',
            'price'             => 'required',
            // 'demo_video'        => 'required',
        ]);

        try {

            $request_data = $request->except(['image','demo_video']);

            if ($request->image) {

                if ($course->image != 'default.png') {

                    Storage::disk('public_uploads')->delete('/course_images/' . $course->image);

                }//end of if

                Image::make($request->image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('uploads/course_images/' . $request->image->hashName()));

                $request_data['image'] = $request->image->hashName();

            }//end of if

            if ($request->demo_video) {

                Storage::disk('public_uploads')->delete($course->demo_video);

                $request_data['demo_video'] = $request->file('demo_video')->store('courses_video');

            }//end of if

            $course->update($request_data);
            
            session()->flash('success', __('home.updated_successfully'));
            return redirect()->route('dashboard.courses.index');

         } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of update

    
    public function destroy(Course $course)
    {
        if ($course->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/course_images/' . $course->image);

        }//end of if

        Storage::disk('public_uploads')->delete($course->demo_video);

        $course->delete();
        session()->flash('success', __('home.deleted_successfully'));
        return redirect()->route('dashboard.courses.index');

    }//end of destroy

}//end of index

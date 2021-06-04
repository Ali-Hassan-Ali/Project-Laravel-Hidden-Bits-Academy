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
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        // ]);

        // try {

            $request_data = $request->except(['image']);

            if ($request->image) {

                Image::make($request->image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('uploads/course_images/' . $request->image->hashName()));

                $request['image'] = $request->image->hashName();

            }//end of if

            Course::create([
                'name' => $request->name,
                'url' => $request->url,
                'Short_description' => $request->Short_description,
                'description' => $request->description,
                'time' => $request->time,
                'rating' => $request->rating,
                'categories_id' => $request->categories_id,
                'image' => $request->image,
                'price' => $request->price,
                'demo_video' => $request->file('demo_video')->store('demo_video'),
            ]);

            session()->flash('success', __('home.added_successfully'));
            return redirect()->route('dashboard.courses.index');

         // } catch (\Exception $e) {

            // return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        // }//end try

    }//endof store


    public function edit(Course $course)
    {
        return view('dashboard.course.edit',compact('course'));
    }//end ofedit


    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {

            $course->update($request->all());            
            
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

        Storage::disk('local')->delete($course->demo_video);

        $course->delete();
        session()->flash('success', __('home.deleted_successfully'));
        return redirect()->route('dashboard.courses.index');
    }//end of destroy

}//end of index

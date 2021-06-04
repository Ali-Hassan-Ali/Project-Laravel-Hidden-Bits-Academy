<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Category;
use App\Models\Purchase;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $categorys = Category::all();

        return view('home.profile',compact('user','categorys'));
    }//end of index


    public function update(Request $request ,$id)
    {
        // dd($request->all());
        $user = User::find($id);
        $categorys = Category::all();

        $request_data = $request->except(['password', 'password_confirmation','image']);
        $request_data['password'] = bcrypt($request->password);

        if ($request->image) {

            if ($user->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/user_images/' . $user->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $user->update($request_data);

        return redirect()->route('success');

    }//end of update

    public function my_course($id)
    {
        $categorys = Category::all();
        $courses = Purchase::where('users_id', $id)->where('status', 1)->get();

        return view('home.my_course',compact('courses','categorys'));

    }//end of my_course

}//end of controller

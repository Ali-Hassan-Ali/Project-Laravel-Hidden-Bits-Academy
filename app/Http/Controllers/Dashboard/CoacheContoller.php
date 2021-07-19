<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class CoacheContoller extends Controller
{
    
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:coaches_read'])->only('index');
        $this->middleware(['permission:coaches_create'])->only('create');
        $this->middleware(['permission:coaches_update'])->only('edit');
        $this->middleware(['permission:coaches_delete'])->only('destroy');

    } //end of constructor
 
    public function index(Request $request)
    {

        $coaches = User::whereRoleIs('coaches')->orderBy('id', 'DESC')->where(function ($q) use ($request) {
        // $users = User::where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {

                return $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');

            });

        })->latest()->paginate(5);


        return view('dashboard.coaches.index', compact('coaches'));
    }//end of index

 
    public function create()
    {
        return view('dashboard.coaches.create');
    }//end of create

 
    public function store(Request $request)
    {
        // return "ggg";
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'image' => 'image',
            'phone' => 'required',
            'jobs' => 'required',
            'rating' => 'required',
            'description' => 'required',
        ]);

        $request_data = $request->except(['password', 'password_confirmation', 'permissions', 'image']);
        $request_data['password'] = bcrypt($request->password);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $user = User::create($request_data);
        $user->attachRole('coaches');

        session()->flash('success', __('home.added_successfully'));
        return redirect()->route('dashboard.coaches.index');
    }//end of store

 
    public function edit(User $coache ,$id)
    {
        $coache = User::find($id);

        return view('dashboard.coaches.edit', compact('coache'));
    }//end of edit

 
    public function update(Request $request, User $coache,$id)
    {
        // dd($request->all());
        $coache = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($coache->id),],
            'image' => 'image',
            'phone' => 'required',
            'jobs' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'password' => 'required|confirmed',
        ]);

        $request_data = $request->except(['image','password']);
        $request_data['password'] = bcrypt($request->password);

        if ($request->image) {

            if ($coache->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/user_images/' . $coache->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $coache->update($request_data);

        session()->flash('success', __('home.updated_successfully'));
        return redirect()->route('dashboard.coaches.index');
    }//end of update

 
    public function destroy(User $coache , $id)
    {

        $coache = User::find($id);

        if ($coache->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/user_images/' . $coache->image);

        }//end of if

        $coache->delete();
        session()->flash('success', __('home.deleted_successfully'));
        return redirect()->route('dashboard.coaches.index');
    }//end of destroy
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:posts_read'])->only('index');
        $this->middleware(['permission:posts_create'])->only('create');
        $this->middleware(['permission:posts_update'])->only('edit');
        $this->middleware(['permission:posts_delete'])->only('destroy');

    } //end of constructor
    
    public function index()
    {
        $posts = Post::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.posts.index',compact('posts'));
    }//end of index

 
    public function create()
    {
        return view('dashboard.posts.create');
    }//end of create


    public function store(Request $request)
    {
        $request->validate([
            'description'       => 'required',
            'short_description' => 'required',
            'image'             => 'image',
        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/post_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if

        $post = Post::create($request_data);

        session()->flash('success', __('home.added_successfully'));
        return redirect()->route('dashboard.posts.index');

    }//end of store


    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',compact('post'));
    }//end of edit



    public function update(Request $request, Post $post)
    {
        $request->validate([
            'description'       => 'required',
            'short_description' => 'required',
            'image'             => 'image',
        ]);
        $request_data = $request->except(['image']);

        if ($request->image) {

            if ($user->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/post_images/' . $post->image);

            }//end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/post_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of external if

        $post->update($request_data);

        session()->flash('success', __('home.updated_successfully'));
        return redirect()->route('dashboard.posts.index');

    }//end of update


    public function destroy(Post $post)
    {
        if ($post->image != 'default.jpg') {

            Storage::disk('public_uploads')->delete('/post_images/' . $post->image);

        }//end of if

        $post->delete();
        session()->flash('success', __('home.deleted_successfully'));
        return redirect()->route('dashboard.posts.index');
    }///end of destroy

}//end of controller

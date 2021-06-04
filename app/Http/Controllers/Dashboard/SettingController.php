<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Founder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function store(Request $request)
    {
        Setting($request->all())->save();

        session()->flash('success', __('home.updated_successfully'));
        return redirect()->back();
    } //end of store

    public function about_index()
    {
        return view('dashboard.settings.about');

    } ///end of about_index

    public function links_index()
    {
        return view('dashboard.settings.links');

    } ///end of links_index

    public function title_index()
    {
        return view('dashboard.settings.titles');

    } ///end of title_index

    public function founder($id)
    {
        $founder = Founder::find($id);

        return view('dashboard.founder.edit', compact('founder'));

    } ///end of founder

    public function founder_update(Request $request, $id)
    {

            $founder = Founder::find($id);

            $request->validate([
                'name'        => 'required',
                'email'       => 'required',
                'phone'       => 'required',
                'job'         => 'required',
                'description' => 'required',
                'image'       => 'image',
            ]);
            
        try {

            $request_data = $request->except(['image']);

            if ($request->image) {

                if ($founder->image != 'default.png') {

                    Storage::disk('public_uploads')->delete('/founder_images/' . $founder->image);

                } //end of inner if

                Image::make($request->image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('uploads/founder_images/' . $request->image->hashName()));

                $request_data['image'] = $request->image->hashName();

            } //end of external if

            $founder->update($request_data);

            session()->flash('success', __('home.updated_successfully'));

            return redirect()->back();

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    } ///end of index

} //end of controller

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PurchaseController extends Controller
{

    public function index()
    {
        //
    }//en dof index



    public function create($id)
    {
        $categorys = Category::all();
        $purchase_course   = Course::find($id);;

        return view('home.purchase_course',compact('categorys','purchase_course'));

    }//end of create



    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'bill_image' => 'required',
            'name_course'=> 'required',
            'users_id'   => 'required',
            'course_id'  => 'required',
        ]);


        try {

            $request_data = $request->except(['image']);

            if ($request->bill_image) {

                Image::make($request->bill_image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('uploads/bill_image/' . $request->bill_image->hashName()));

                $request_data['bill_image'] = $request->bill_image->hashName();

            }//end of if

            Purchase::create($request_data);

            session()->flash('success', __('home.added_successfully'));
            return redirect()->route('success');

         } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of store


     
    public function show(Purchase $purchase)
    {
        //
    }//end of show



    public function edit(Purchase $purchase)
    {
        //
    }//end of edit



    public function update(Request $request, Purchase $purchase)
    {
        //
    }//end of update


    public function destroy(Purchase $purchase)
    {
        //
    }//end of destroy

}//end of controller

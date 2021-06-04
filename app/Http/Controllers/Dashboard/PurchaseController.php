<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PurchaseController extends Controller
{

    public function index()
    {
        $purchases = Purchase::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.purchase.index',compact('purchases'));
        
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

    }//end of store

    

    public function show(Purchase $purchase)
    {
        
    }//end of show



    public function edit(Purchase $purchase)
    {
        return view('dashboard.posts.create');
    }//end of edit

    

    public function update(Request $request, Purchase $purchase)
    {

        try {
                $purchase->update($request->all());
                $courses = Course::FindOrFail($request->course_id);

            if ($request->status == 1) {

                $courses->update([
                    'studant_count' => $courses->studant_count + 1
                ]);            

            } else {

                $courses->update([
                    'studant_count' => $courses->studant_count - 1
                ]);            

            }//end of if
            
                session()->flash('success', __('home.updated_successfully'));
                return redirect()->back();


         } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of update

    

    public function destroy(Purchase $purchase)
    {
        try {
            
            if ($purchase->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/bill_image/' . $purchase->bill_image);

            }//end of if

            $purchase->delete();
            session()->flash('success', __('home.deleted_successfully'));
            return redirect()->back();

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end destroy

}//end of controller

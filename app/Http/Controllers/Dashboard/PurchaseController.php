<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PurchaseController extends Controller
{
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:purchases_read'])->only('index');
        $this->middleware(['permission:purchases_create'])->only('create');
        $this->middleware(['permission:purchases_update'])->only('edit');
        $this->middleware(['permission:purchases_delete'])->only('destroy');

    } //end of constructor

    public function index()
    {

        $purchases = Purchase::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.purchases.index',compact('purchases'));
        
    }//end of index

    
    
    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        return view('dashboard.purchases.create',compact('users','courses'));
    }//end of create

    
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'bill_image'    => 'required',
            'users_id'      => 'required',
        ]);

       try {

            $request_data = $request->except(['bill_image']);

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
            return redirect()->route('dashboard.purchases.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }//end try

    }//end of store

    

    public function show(Purchase $purchase)
    {
        
    }//end of show



    public function edit(Purchase $purchase)
    {
        $users = User::all();
        $courses = Course::all();

        return view('dashboard.purchases.edit',compact('purchase','users','courses'));
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

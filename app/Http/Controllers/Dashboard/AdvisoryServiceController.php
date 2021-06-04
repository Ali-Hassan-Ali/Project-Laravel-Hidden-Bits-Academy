<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AdvisoryService;
use Illuminate\Http\Request;

class AdvisoryServiceController extends Controller
{

    public function index()
    {
        $advisoryServices = AdvisoryService::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.advisoryServices.index', compact('advisoryServices'));
    }//end of index



    public function create()
    {
        //
    }//end of create



    public function store(Request $request)
    {
        //
    }//end of store



    public function edit(AdvisoryService $advisoryService)
    {
        //
    }//end of edit



    public function update(Request $request, AdvisoryService $advisoryService)
    {
        //
    }//end of update


    public function destroy(AdvisoryService $advisoryService)
    {
        try {

            $advisoryService->delete();
            session()->flash('success', __('home.deleted_successfully'));
            return redirect()->route('dashboard.advisoryServices.index');
            
        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    }//end of destroy

}//end of controller

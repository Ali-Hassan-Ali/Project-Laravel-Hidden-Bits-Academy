<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AdvisoryService;
use Illuminate\Http\Request;

class AdvisoryServiceController extends Controller
{
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:advisoryServices_read'])->only('index');
        $this->middleware(['permission:advisoryServices_create'])->only('create');
        $this->middleware(['permission:advisoryServices_update'])->only('edit');
        $this->middleware(['permission:advisoryServices_delete'])->only('destroy');

    } //end of constructor

    public function index()
    {
        $advisoryServices = AdvisoryService::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.advisoryServices.index', compact('advisoryServices'));
    } //end of index

    public function create()
    {
        return view('dashboard.advisoryServices.create');
    } //end of create

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'name'  => 'required',
            'title' => 'required',
            'phone' => 'required',
            'body'  => 'required',
        ]);//end of validate

        try {

            AdvisoryService::create($request->all());

            session()->flash('success', __('home.added_successfully'));
            return redirect()->route('dashboard.advisoryServices.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try
    } //end of store

    public function edit(AdvisoryService $advisoryService)
    {
        return view('dashboard.advisoryServices.edit', compact('advisoryService'));
    } //end of edit

    public function update(Request $request, AdvisoryService $advisoryService)
    {

        $request->validate([
            'email' => 'required',
            'name'  => 'required',
            'title' => 'required',
            'phone' => 'required',
            'body'  => 'required',
        ]);//end of validate

        try {

            $advisoryService->update($request->all());

            session()->flash('success', __('home.updated_successfully'));
            return redirect()->route('dashboard.advisoryServices.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try
    } //end of update

    public function destroy(AdvisoryService $advisoryService)
    {
        try {

            $advisoryService->delete();
            session()->flash('success', __('home.deleted_successfully'));
            return redirect()->route('dashboard.advisoryServices.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    } //end of destroy

} //end of controller

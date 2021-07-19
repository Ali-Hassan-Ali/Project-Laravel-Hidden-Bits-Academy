<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Course;
use Illuminate\Http\Request;

class CertificateController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:certificates_read'])->only('index');
        $this->middleware(['permission:certificates_create'])->only('create');
        $this->middleware(['permission:certificates_update'])->only('edit');
        $this->middleware(['permission:certificates_delete'])->only('destroy');

    } //end of constructor

    public function index()
    {
        $certificates = Certificate::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.certificates.index', compact('certificates'));
    } //end of index

    public function create()
    {
        $courses = Course::all();

        return view('dashboard.certificates.create',compact('courses'));
    } //end ofcreate

    public function store(Request $request)
    {
        $request->validate([
            'email'       => 'required',
            'name_ar'     => 'required',
            'name_en'     => 'required',
            'name_course' => 'required',
        ]);

        try {

            Certificate::create($request->all());

            session()->flash('success', __('home.added_successfully'));
            return redirect()->route('dashboard.certificates.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    } //end of store

    public function edit(Certificate $certificate)
    {
        $courses = Course::all();

        return view('dashboard.certificates.edit', compact('certificate','courses'));
    } //end of edit

    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'email'       => 'required',
            'name_ar'     => 'required',
            'name_en'     => 'required',
            'name_course' => 'required',
        ]);

        try {

            $certificate->update($request->all());

            session()->flash('success', __('home.updated_successfully'));
            return redirect()->route('dashboard.certificates.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try
    } //eend of update

    public function destroy(Certificate $certificate)
    {
        try {

            $certificate->delete();
            session()->flash('success', __('home.deleted_successfully'));
            return redirect()->route('dashboard.certificates.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try
    } //end of destroy

} //end of controller

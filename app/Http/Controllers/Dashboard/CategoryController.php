<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:categories_read'])->only('index');
        $this->middleware(['permission:categories_create'])->only('create');
        $this->middleware(['permission:categories_update'])->only('edit');
        $this->middleware(['permission:categories_delete'])->only('destroy');

    } //end of constructor

    public function index(Request $request)
    {
        $categories = Category::whenSearch(request()->search)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.categories.index', compact('categories'));
    } //end of index

    public function create()
    {
        return view('dashboard.categories.create');
    } //end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {

            Category::create($request->all());

            session()->flash('success', __('home.added_successfully'));
            return redirect()->route('dashboard.categories.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    } //end of store

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    } //end of edit

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {

            $category->update($request->all());

            session()->flash('success', __('home.updated_successfully'));
            return redirect()->route('dashboard.categories.index');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try

    } //end of update

    public function destroy(Category $category)
    {
        try {

            $category->delete();
            session()->flash('success', __('home.deleted_successfully'));
            return redirect()->route('dashboard.categories.index');
            
        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        } //end try
        
    } //end of destroy

} //end of contriller

<?php

namespace App\Http\Controllers\Web\backend\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $category = Category::all();
    //     return view('backend.layouts.category.index',compact('category'));
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {

                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                  <a href="' . route('category.edit',  $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                                  <i class="bi bi-pencil"></i>
                                  </a>
                                  <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bi bi-trash"></i>
                                </a>
                                </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.layouts.category.index');
    }

    public function create()
    {
        return view('backend.layouts.category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $category = new Category();
            $category->name = $request->name;
            $category->save();

            return redirect()->route('category.index')->with('success', 'Category created successfully');

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        return view('backend.layouts.category.edit',compact('category'));

    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try
        {
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->save();
            return redirect()->route('category.index')->with('success','Category Updated Successfully');
        }catch(Exception $e)
        {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }


    public function status(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        if($category->status == 'active'){
            $category->status = 'inactive';
            $category->save();

           return redirect()->back()->with('success','Category Status Inactive');
        }else{
            $category->status = 'active';
            $category->save();

            return redirect()->back()->with('success','Category Status active');

        }
    }


    public function destroy(Request $request , $id)
    {
        try
        {
            $category = Category::findOrFail($id);
            $category->delete();

            return redirect()->back()->with('success','Category Deleted Successfully');
        }catch(Exception $e)
        {
           return redirect()->back()->with('error',$e->getMessage());
        }
    }









}

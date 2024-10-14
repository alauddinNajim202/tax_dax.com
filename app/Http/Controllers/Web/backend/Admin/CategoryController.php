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
        // dd($data);
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()


                ->addColumn('status', function ($data) {
                    $backgroundColor  = $data->status == "active" ? '#4CAF50' : '#ccc';
                    $sliderTranslateX = $data->status == "active" ? '26px' : '2px';
                    $sliderStyles     = "position: absolute; top: 2px; left: 2px; width: 20px; height: 20px; background-color: white; border-radius: 50%; transition: transform 0.3s ease; transform: translateX($sliderTranslateX);";

                    $status = '<div class="form-check form-switch" style="margin-left:40px; position: relative; width: 50px; height: 24px; background-color: ' . $backgroundColor . '; border-radius: 12px; transition: background-color 0.3s ease; cursor: pointer;">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status" style="position: absolute; width: 100%; height: 100%; opacity: 0; z-index: 2; cursor: pointer;">';
                    $status .= '<span style="' . $sliderStyles . '"></span>';
                    $status .= '<label for="customSwitch' . $data->id . '" class="form-check-label" style="margin-left: 10px;"></label>';
                    $status .= '</div>';

                    return $status;
                })

                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="' . route('settings.dynamic_page.edit', ['id' => $data->id]) . '" type="button" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                    <i class="fe fe-edit"></i>
                                </a>

                                <a href="#" type="button" onclick="showDeleteConfirm(' . $data->id . ')" class="btn btn-danger fs-14 text-white delete-icn" title="Delete">
                                    <i class="fe fe-trash"></i>
                                </a>
                            </div>';
                })
                ->rawColumns(['status', 'action'])
                ->make();
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

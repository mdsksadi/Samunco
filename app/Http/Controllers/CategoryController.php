<?php

namespace App\Http\Controllers;

use App\DataTables\Admin\CategoryDataTable;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    private $data  = array();
    public function __construct()
    {
        $this->data['sub_menu'] = 'category';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $dataTable)
    {
        // return view('admin.Category.list');
        return $dataTable->render('admin.Category.list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            $class    = "success";
            $message  = "Category Added Successfully";

            $category              = new Category();
            $category->name        = $request->name;
            $category->description = $request->description;
            $category->save();
        } catch (\Exception $e) {
            $class    = "danger";
            $message  = $e->getMessage();
        }
        Session::flash('alert-class', $class);
        Session::flash('alert-message', $message);
        return redirect('admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category              = Cateogry::find($id);
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Cateogry::find($id);
        $category->delete();
    }
}

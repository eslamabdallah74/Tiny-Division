<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::orderBy('id' , 'desc')->get();
        return view('dashboard\categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard\Create\cCategory');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate database

        $validated = $request->validate(
            [
                'category_name'     => 'required|unique:categories',

            ]
        );

            // Insert new user into databasex
            $insert_category = new category;
            $insert_category->category_name          = $request->category_name;
            $insert_category->save();

            return redirect('dashboard\categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id); //get all records from the database
        return view('dashboard\Edit\eCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         // Validate database

         $validated = $request->validate(
            [
                'category_name'   => 'required|unique:categories,category_name,'.$request->id,

            ]
        );
            // Insert new user into databasex
            $update_category = category::find($request->id);
            $update_category->category_name  = $request->category_name;
            $update_category->update();

            return redirect('dashboard/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = category::findorFail($id);
        $deleteUser->delete();
        return redirect('/dashboard/categories');
    }
}

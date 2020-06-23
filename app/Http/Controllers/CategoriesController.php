<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use Session;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $categories=Categories::all();
    return view('backend.all_categories')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('backend.categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request,[
    'name'=>'required|unique:categories|max:255'
    ]);
    $categories=new Categories;
    $categories->name=$request->name;
    $categories->save();
     session::flash('success','You have succesfully created Category');
    return redirect()->back();
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $categories = Categories::find($id);
    return view('backend.update_categories')->with('categories',$categories) ;
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
        //
        $categories=Categories::find($id);
        $categories->name=$request->name;
        $categories->save();
        Session::flash('info','You have succesfully update Category');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $Categories = Categories::find($id);
    $Categories->delete();
    Session::flash('warning','Categories Delete succesfully');
    return redirect()->back();
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;    
use App\Hotelsuser;
use App\Testimonial;
use Session;
class HotelsusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('frontend.register');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('frontend.login');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    //dd($request->all());     
    $this->validate($request,[
    'name'=>'required|unique:categories|max:255',
    'email'=>'required|unique:hotelsusers|max:255',
    'password'=>'required'
    ]);
    $hotelsusers=new Hotelsuser;
    $hotelsusers->name=$request->name;
    $hotelsusers->email=$request->email;
    $hotelsusers->password=Hash::make($request->password);
    $hotelsusers->save();
    session::flash('warning','You have succesfully Register With Us');
    return redirect()->back();
    }

    public function login()
    {
    return view('frontend.login');
    Hotelsuser::where("email",$request->input('email'))->get();
    }

    public function dologin(Request $request)
    {
    return    Hotelsuser::where("email",$request->input('email'))->get();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

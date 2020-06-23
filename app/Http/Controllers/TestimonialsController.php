<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\uploads;
use Illuminate\Support\Facades\DB;

use App\Testimonial;
use App\Categories;   
use Session;
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $data = DB::table('testimonials')
       ->join('categories', 'testimonials.category_id', '=', 'categories.id')
       ->select('categories.name as cat_name', 'testimonials.name', 'testimonials.featured','testimonials.id as t_id','testimonials.content')
       
       ->get();
     return view('backend.all_testimonials',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $categories = Categories::all();
    return view('backend.testimonials')->with('categories',Categories::all());
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
            'name' =>'required|max:255',
            'featured'=>'required|image',
            'category_id'=>'required',
            'content'=>'required'
         ]);
        $data=new Testimonial;  
if($files=$request->file('featured')){  
$name=time().$files->getClientOriginalName();  
$destinationPath = 'uploads/testimonials/';
$files->move($destinationPath,$name);  
$data->featured=$name;  
}  
        $data=Testimonial::create([
        'name' => $request->name,
        'content'=> $request->content,
        'featured'=>$destinationPath.$name,
        'category_id'=> $request->category_id
        
                ]);
        // //dd($request->all());  
        $data->save();
    session::flash('success','You have succesfully created Post');
    return redirect()->back();
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
        $testimonials = Testimonial::find($id);
         return view('backend.update_testimonials')->with('testimonials',$testimonials) ;


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
        $testimonials=Testimonial::find($id);
        $testimonials->name=$request->name;
        $testimonials->content=$request->content;
            
            if($request->hasFile('featured'))
            {
            $featured = $request->featured;
            $name=time().$featured->getClientOriginalName();  
$destinationPath = 'uploads/testimonials/';
$featured->move($destinationPath,$name);  
            $testimonials->featured=$destinationPath.$name;
            }
        $testimonials->save();
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
    $categories = Testimonial::find($id);
    $categories->delete();
    return redirect()->back();
    }

}

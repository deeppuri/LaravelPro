<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Categories;   
use Session;

class FrontpagesController extends Controller
{
    //
    public function about()
    {
    	return view('frontend.about');
    }

    public function pricing()
    {
    	return view('frontend.price');
    }
    public function booking()
    {
    	return view('frontend.booking');
    }
    public function contact()
    {
    	return view('frontend.contact');
    }
}

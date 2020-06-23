<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function testimonials()
    {
     return	$this->hasMany('App\Testimonial');
    }
}

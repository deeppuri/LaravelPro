<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	protected $fillable = [
        'name', 'content', 'category_id','featured'
    ];

    public function getFeaturedAttribute($featured)
    {
    	return asset($featured);
    }
  	
    public function category()
    {
    	return $this->belongsTo('App/Categories');
    }
}

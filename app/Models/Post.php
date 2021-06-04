<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $guarded = [];

    protected $appends = ['image_path'];

    public function scopeWhenSearch($query , $search) 
    {
    	return $query->when($search, function ($q) use ($search) {

    		return $q->where('name' , 'like', "%$search%");

    	});
    	
    }//end ofscopeWhenSearch

    public function getImagePathAttribute()
    {
        return asset('uploads/post_images/' . $this->image);

    }//end of get image path

}//end of models

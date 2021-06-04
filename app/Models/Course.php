<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $guarded = [];

    protected $appends = ['image_path'];

    public function scopeWhenSearch($query , $search) 
    {
    	return $query->when($search, function ($q) use ($search) {

    		return $q->where('name' , 'like', "%$search%")

            ->orWhere('time' , 'like', "%$search%")

            ->orWhere('description' , 'like', "%$search%")

            ->orWhere('Short_description' , 'like', "%$search%");

    	});
    }//end ofscopeWhenSearch

    public function getImagePathAttribute()
    {
        return asset('uploads/course_images/' . $this->image);

    }//end of get image path

}//end of models

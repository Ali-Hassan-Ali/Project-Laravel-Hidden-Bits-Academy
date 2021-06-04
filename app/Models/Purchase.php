<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
	public $guarded = [];
	
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/bill_image/' . $this->bill_image);

    }//end of get image path

    public function scopeWhenSearch($query , $search) 
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('email' , 'like', "%$search%")

            ->orWhere('first_name' , 'like', "%$search%")
            
            ->orWhere('last_name' , 'like', "%$search%")
            
            ->orWhere('phone' , 'like', "%$search%")

            ->orWhere('name_course' , 'like', "%$search%")

            ->orWhere('status' , 'like', "%$search%");

        });
    }//end ofscopeWhenSearch

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id');
    }//belongsTo course

}//end of models

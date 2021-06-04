<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    public $guarded = [];

    protected $appends = ['image_path'];

    public function scopeWhenSearch($query , $search) 
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('name' , 'like', "%$search%")

            ->orWhere('email' , 'like', "%$search%")
            
            ->orWhere('phone' , 'like', "%$search%")
            
            ->orWhere('job' , 'like', "%$search%")

            ->orWhere('description' , 'like', "%$search%");

        });
    }//end ofscopeWhenSearch

    public function getImagePathAttribute()
    {
        return asset('uploads/founder_images/' . $this->image);

    }//end of get image path

}//end of model

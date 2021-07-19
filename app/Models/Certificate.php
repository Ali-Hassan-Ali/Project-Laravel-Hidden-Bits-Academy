<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public $guarded = [];

    public function scopeWhenSearch($query , $search) 
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('email' , 'like', "%$search%")

            ->orWhere('name_ar' , 'like', "%$search%")
            
            ->orWhere('name_en' , 'like', "%$search%")

            ->orWhere('name_course' , 'like', "%$search%");

        });
        
    }//end ofscopeWhenSearch

}//end of model

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvisoryService extends Model
{
    public $guarded = [];

    public function scopeWhenSearch($query , $search) 
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('email' , 'like', "%$search%")

            ->orWhere('name' , 'like', "%$search%")

            ->orWhere('title' , 'like', "%$search%")

            ->orWhere('phone' , 'like', "%$search%")
            
            ->orWhere('body' , 'like', "%$search%");

        });
        
    }//end ofscopeWhenSearch
    
}//end of models

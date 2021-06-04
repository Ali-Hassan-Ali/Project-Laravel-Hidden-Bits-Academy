<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $guarded = [];

    public function scopeWhenSearch($query , $search) 
    {
    	return $query->when($search, function ($q) use ($search) {

    		return $q->where('name' , 'like', "%$search%");

    	});
    	
    }//end ofscopeWhenSearch

}//end of models


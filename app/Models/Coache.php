<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class Coache extends Model
{
    use LaratrustUserTrait;

    public $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

	protected $appends = ['image_path'];

    public function scopeWhenSearch($query , $search) 
    {
    	return $query->when($search, function ($q) use ($search) {

    		return $q->where('name' , 'like', "%$search%")

            ->orWhere('name_ar' , 'like', "%$search%")

    	});
    }//end ofscopeWhenSearch

    public function getImagePathAttribute()
    {
        return asset('uploads/coache_images/' . $this->image);

    }//end of get image path

}//end ofmodels

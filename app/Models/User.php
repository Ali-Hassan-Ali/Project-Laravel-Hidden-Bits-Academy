<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','image','phone','jobs','rating','description'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['image_path'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);

    }//end of get first name

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);

    }//end of get last name

    public function getImagePathAttribute()
    {
        return asset('uploads/user_images/' . $this->image);

    }//end of get image path

    public function scopeWhenSearch($query , $search) 
    {
        return $query->when($search, function ($q) use ($search) {

            return $q->where('name' , 'like', "%$search%")
            ->orWhere('email', 'like', "%$search%")
            ->orWhere('Phone', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->orWhere('jobs', 'like', "%$search%");

        });
    }//end ofscopeWhenSearch
    
}///end of model

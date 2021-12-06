<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $guarded = [];
  
    public function user() 
    { 
        return $this->morphOne('App\User', 'profile');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinh_viens';

    protected $guarded = [];
  
    public function user() 
    { 
        return $this->morphOne('App\User', 'profile');
    }
}

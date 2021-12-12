<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    protected $table = 'giao_viens';

    protected $guarded = [];
  
    public function user() 
    { 
        return $this->morphOne('App\User', 'profile');
    }

    public function phanLopGV()
    {
        return $this->hasMany('App\Models\PhanLopGiaoVien');
    }

    public function diemMH()
    {
        return $this->hasMany('App\Models\DiemMonHoc');
    }

    public function khoa()
    {
        return $this->belongsTo('App\Models\Khoa', 'khoa_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $table = "lops";
    
    public function khoaHoc()
    {
        return $this->belongsTo('App\Models\KhoaHoc', 'khoa_hoc_id');
    }
    
    public function sinhVien()
    {
        return $this->hasMany('App\Models\SinhVien');
    }
}

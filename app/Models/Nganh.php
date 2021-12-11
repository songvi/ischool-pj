<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nganh extends Model
{
    protected $table = "nganhs";
    
    public function khoa()
    {
        return $this->belongsTo('App\Models\Khoa', 'khoa_id');
    }

    public function monHoc()
    {
        return $this->hasMany('App\Models\MonHoc');
    }
}

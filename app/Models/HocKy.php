<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HocKy extends Model
{
    protected $table = "hoc_kies";
    
    public function chuongTrinhHoc()
    {
        return $this->hasMany('App\Models\ChuongTrinhHoc');
    }
}

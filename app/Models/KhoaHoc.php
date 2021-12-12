<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhoaHoc extends Model
{
    protected $table = "khoa_hocs";
    
    public function lop()
    {
        return $this->hasMany('App\Models\Lop');
    }
}

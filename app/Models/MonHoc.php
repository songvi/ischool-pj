<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    public function lopHoc() {
        return $this->hasMany('App\Models\LopHoc');
    }
}

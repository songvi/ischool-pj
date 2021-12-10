<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiemMonHoc extends Model
{
    public function lopHoc()
    {
        return $this->belongsTo('App\Models\LopHoc', 'lop_hoc_id');
    }
}

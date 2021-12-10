<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SVDangKyLopHoc extends Model
{
    protected $table = 's_v_dang_ky_lop_hocs';

    public function lopHoc()
    {
        return $this->belongsTo('App\Models\LopHoc', 'lop_hoc_id');
    }
}

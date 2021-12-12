<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhanLopGiaoVien extends Model
{
    protected $table = 'phan_lop_giao_viens';

    public function lopHoc()
    {
        return $this->belongsTo('App\Models\LopHoc', 'lop_hoc_id');
    }

    public function giaoVien()
    {
        return $this->belongsTo('App\Models\GiaoVien', 'giao_vien_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiemMonHoc extends Model
{
    protected $table = 'diem_mon_hocs';

    public function lopHoc()
    {
        return $this->belongsTo('App\Models\LopHoc', 'lop_hoc_id');
    }

    public function sinhVien()
    {
        return $this->belongsTo('App\Models\SinhVien', 'sinh_vien_id');
    }

    public function phuongThucDG()
    {
        return $this->belongsTo('App\Models\PhuongThucDanhGia', 'phuong_thuc_danh_gia_id');
    }

    public function giaoVien()
    {
        return $this->belongsTo('App\Models\GiaoVien', 'giao_vien_id');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GiaoVien;
use App\Models\LopHoc;
use App\Models\PhanLopGiaoVien;
use Illuminate\Http\Request;

class GiaoVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $teachers = GiaoVien::where('id', $id)->get();
        foreach($teachers as $teacher) {
            // Lấy thông tin giáo viên(Collection)
            $infotcs = $teacher->where('id', $id)->get();
            // Lấy thông tin Khoa theo giáo viên(Collection)
            $khoas = $teacher->khoa->where('id', $teacher->khoa_id)->get();
        }
        return view('giaovien.index', compact('infotcs', 'khoas'));
    }

    //Lấy danh sách môn học theo giáo viên
    public function getSubjectByTeacher($id)
    {
        $teachers = PhanLopGiaoVien::where('giao_vien_id', $id)->get();
        foreach($teachers as $teacher) {
            $lop_hoc = $teacher->lopHoc;
            $mhs = $lop_hoc->monHoc->where('id', $lop_hoc->mon_hoc_id)->get();
        }
        return view('giaovien.themdiemmh', compact('mhs'));
    }

    //Lấy danh sách lớp học theo môn học
    public function getClassListBySubject($id)
    {
        $lists = LopHoc::where('mon_hoc_id', $id)->get();
        return view('giaovien.loptheomon', compact('lists'));
    }


    //Lấy danh sách điểm sinh viên theo lớp học
    public function getScoreListByClass($id)
    {
        $lhlists = LopHoc::where('id', $id)->get();
        foreach($lhlists as $items) {
            $svs = $items->sinhVienDK;
            $ten_diems = $items->phuongThucDG;
            $diemsos = $items->diemMH;
        }
        return view('giaovien.diemtheolop', compact('lhlists', 'svs', 'ten_diems', 'diemsos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GiaoVien;
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
        $teachers = GiaoVien::find($id)->get();
        foreach($teachers as $teacher) {
            // Lấy thông tin giáo viên(Collection)
            $infotcs = $teacher->get();
            // Lấy thông tin Khoa theo giáo viên(Collection)
            $khoas = $teacher->khoa->get();
        }
        return view('giaovien.index', compact('infotcs', 'khoas'));
    }

    public function getSubjectByTeacher($id)
    {
        $teachers = PhanLopGiaoVien::where('giao_vien_id', $id)->get();
        foreach($teachers as $teacher) {
            $mhs = $teacher->lopHoc->monHoc->get();
            $tennganhs = $teacher->lopHoc->monHoc->nganh->get();
        }
        return view('giaovien.themdiemmh', compact('mhs','tennganhs'));
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

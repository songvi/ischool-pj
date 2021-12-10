<!--Thừa kế layout master-->
@extends('layouts.master')

<!--Thêm section layout menu:sinh viên-->
@section('menu')
@include('menu.svmenu')
@endsection

<!--Thêm section layout content-->
@section('content')
<h1>thongtin sv</h1>
@foreach($thong_tin_sv as $thong_tin)
Thông tin: {{  $thong_tin->all()  }} <br>
ID: {{  $thong_tin->id  }} <br>
Lớp ID: {{  $thong_tin->lop_id  }} <br>
Tên họ: {{  $thong_tin->ten_ho  }} <br>
Tên đệm: {{  $thong_tin->ten_dem  }} <br>
Tên: {{  $thong_tin->ten  }} <br>
Năm Sinh: {{  $thong_tin->nam_sinh  }} <br>
Địa chỉ: {{  $thong_tin->dia_chi  }} <br>
Số điện thoại: {{  $thong_tin->tel  }} <br>
@endforeach
@endsection

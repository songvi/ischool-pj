<!--Thừa kế layout master-->
@extends('layouts.master')

<!--Thêm section layout menu:sinh viên-->
@section('menu')
@include('menu.svmenu')
@endsection

<!--Thêm section layout content-->
@section('content')
<h1 style="text-align: center;">Thông tin sinh viên</h1>
@foreach($ttsv as $tt)
ID: {{  $tt->id  }} <br>
Họ và tên: {{ $tt->ten_ho." ".$tt->ten_dem." ".$tt->ten  }} <br>
Năm Sinh: {{  $tt->nam_sinh  }} <br>
Địa chỉ: {{  $tt->dia_chi  }} <br>
Số điện thoại: {{  $tt->tel  }} <br>
@foreach($lop as $l)
Tên lớp: {{  $l->ten_lop   }}
@endforeach
@endforeach

@endsection

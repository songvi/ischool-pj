<!--Thừa kế layout master-->
@extends('layouts.master')

<!--Thêm section layout menu:sinh viên-->
@section('menu')
@include('menu.gvmenu')
@endsection

<!--Thêm section layout content-->
@section('content')
<h1 style="text-align: center;">Thông tin môn học</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên môn học</th>
            <th>Ngành</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($mhs as $mh)
            <td>{{   $mh->id   }}</td>
            <td>{{   $mh->ten_mon_hoc   }}</td>
            @endforeach
            @foreach($tennganhs as $n)
            <td>{{   $n->ten_nganh   }}</td>
            @endforeach
        </tr>
    </tbody>
</table>
@endsection

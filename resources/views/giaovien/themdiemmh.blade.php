<!--Thừa kế layout master-->
@extends('layouts.master')

<!--Thêm section layout menu:sinh viên-->
@section('menu')
@include('menu.gvmenu')
@endsection

<!--Thêm section layout content-->
@section('content')
<h1 style="text-align: center;">Danh sách môn học giáo viên giảng dạy</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên môn học</th>
            <th>Ngành</th>
        </tr>
    </thead>
    <tbody>
            
           
    </tbody>
</table>
@endsection

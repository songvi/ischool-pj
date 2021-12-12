<!--Thừa kế layout master-->
@extends('layouts.master')

<!--Thêm section layout menu:sinh viên-->
@section('menu')
@include('menu.gvmenu')
@endsection

<!--Thêm section layout content-->
@section('content')
<h1 style="text-align: center;">Danh sách lớp học giáo viên giảng dạy</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection

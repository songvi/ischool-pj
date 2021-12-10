<!--Thừa kế layout master-->
@extends('layouts.master')

<!--Thêm section layout menu:sinh viên-->
@section('menu')
@include('menu.svmenu')
@endsection

<!--Thêm section layout content-->
@section('content')
@foreach($data as $d) 
     {{ $d['mon_hoc']->ten_mon_hoc}}
@endforeach
@endsection

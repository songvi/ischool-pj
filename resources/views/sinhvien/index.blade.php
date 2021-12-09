@extends('layouts.master')
@section('content')
@foreach($mon_hoc_da_dang_ky as $mon_hoc)
Tenmonhoc: {{ $mon_hoc->ten_mon_hoc}}
<br/>
@for ($i = 0; $i < count($ten_diem); $i++)
     {{ $ten_diem[$i]->ten_diem }}:{{$diem_so[$i][0]->diem}}
<br/>
@endfor
@endforeach
@endsection
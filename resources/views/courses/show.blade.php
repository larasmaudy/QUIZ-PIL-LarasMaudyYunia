@extends('layouts.app')

@section('title', 'MK')

@section('content')
<div class='card'>
    <div class='cardbody'>
        <h3> Nama Mata Kuliah :{{ $courses['nama_mk'] }} </h3>
        <h3> SKS :{{ $courses['sks'] }} </h3>
    </div>
</div>
@endsection

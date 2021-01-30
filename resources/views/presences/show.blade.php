@extends('layouts.app')

@section('title', 'absenn')

@section('content')
<div class='card'>
    <div class='cardbody'>
        <h3> Waktu :{{ $presences['waktu'] }} </h3>
        <h3> Nama Mahasiswa :{{ $presences['namamhs'] }} </h3>
        <h3> Mata Kuliah :{{ $presences['mk'] }} </h3>
        <h3> Keterangan :{{ $presences['ket'] }} </h3>
    </div>
</div>
@endsection

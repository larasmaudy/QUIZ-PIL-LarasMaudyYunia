@extends('layouts.app')

@section('title', 'MK')

@section('content')

<form action="/courses" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputNama">Nama Matakuliah</label>
    <input type="text" class="form-control" id="exampleInputwaktu" name="nama_mk" aria-describedby="emailHelp">
    @error('nama_mk')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputNotlp">SKS</label>
    <input type="text" class="form-control" name="sks" id="exampleInputnamamhs" value="{{old('sks')}}">
    @error('sks')
    <div class="alert alert-denger">{{ $message }}</div>
    @enderror
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
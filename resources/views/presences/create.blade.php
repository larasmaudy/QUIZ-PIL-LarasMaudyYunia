@extends('layouts.app')

@section('title', 'presences')

@section('content')

<form action="/presences" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputNama">Waktu</label>
    <input type="text" class="form-control" id="exampleInputwaktu" name="waktu" aria-describedby="emailHelp">
    @error('waktu')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputNotlp">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="namamhs" id="exampleInputnamamhs" value="{{old('namamhs')}}">
    @error('namamhs')
    <div class="alert alert-denger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Mata Kuliah</label>
    <input type="text" class="form-control" name="mk" id="exampleInputmk">
    @error('mk')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Keterangan</label>
    <input type="text" class="form-control" name="ket" id="exampleInputmk">
    @error('ket')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
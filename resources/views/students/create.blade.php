@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')

<form action="/students" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputNama">Nama</label>
    <input type="text" class="form-control" id="exampleInputwaktu" name="nama" aria-describedby="emailHelp">
    @error('nama')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputNotlp">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputnamamhs" value="{{old('alamat')}}">
    @error('alamat')
    <div class="alert alert-denger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">No Telepon</label>
    <input type="text" class="form-control" name="notlp" id="exampleInputmk">
    @error('notlp')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAlamat">Email</label>
    <input type="text" class="form-control" name="email" id="exampleInputmk" aria-describedby="emailhelp">
    @error('email')
    <div class="alert alert-denger">{{$message}}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
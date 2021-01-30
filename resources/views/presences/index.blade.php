@extends('layouts.app')

@section('title','Presences')

@section('content')

<a href="/presences/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Waktu Absen</th>
      <th scope="col">Nsms Mahasiswa </th>
      <th scope="col">Matakuliah</th>
      <th scope="col">Keterangan</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($presence as $presence)
    <tr>
    <td>{{$presence->waktu}}</td>
    <td>{!!$presence->namamhs !!}</td>
    <td>{!!$presence->mk !!}</td>
    <td>{!!$presence->ket !!}</td>
 
    <td><a href="/presences/{{$presence->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/presences/{{$presence->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
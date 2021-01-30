@extends('layouts.app')

@section('title','MK')

@section('content')

<a href="/courses/create" type="button" class="btn btn-secondary mb-2 btn-sm">Tambah</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama Mata Kuliah</th>
      <th scope="col">SKS </th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($course as $course)
    <tr>
    <td>{{!!$course->nama_mk !!}}</td>
    <td>{!!$course->sks !!}</td>
 
    <td><a href="/courses/{{$course->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/courses/{{$course->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

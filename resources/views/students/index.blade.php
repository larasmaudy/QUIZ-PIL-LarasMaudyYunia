@extends('layouts.app')

@section('title','Presences')

@section('content')

@foreach ($presences as $presence)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/presences/{{$presence['id']}}" class="card-title">{{ $presence['waktu'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $presence['namamhs'] }}</h6>
    <p class="card-text">{{ $presence['mk'] }}</p>
    <p class="card-text">{{ $presence['ket'] }}</p>

    <a href="/presences/{{$presence['id']}}/edit" class="card-link btn-warning">Edit</a>
    <form action="/presences/{{$presence['id']}}" method="POST">
    
    @method('DELETE')
    <button class="card-link btn-danger">Delete</a>
    </form>
  </div>
</div>

@endforeach
<div> 
    {{ $presences->links()}}
</div> 
@endsection

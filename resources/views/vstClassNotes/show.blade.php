@extends('layouts.app')

@section('contenido')

    <div class="classes">
         @foreach ($clases as $clase)
        <div class="card" style="width: 18rem;">
    <img src="{{asset('./images/descargar.png')}}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$clase->name}}</h5>
      <a href="{{route('notes.create',$clase->id)}}" class="btn btn-success">Agregar nota</a>
    </div>
  </div>
  
     
   @endforeach
    </div>
@endsection

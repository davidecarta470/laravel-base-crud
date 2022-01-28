
@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12"><h1>{{$item->title}}</h1></div>
    <div class="col-3"><img style="" src="{{asset($item->img)}}" alt=""></div>

    
    <div class="col-6">
      <h3 >{{$item->series}}</h3>
      <p >{{$item->description}}</p>
      <h3 >{{$item->price}}</h3>
    </div>
    <div class="col-1">
   
      <button href=""class="btn btn-info mb-2"style="width:100%">update</button>
      <button href=""class="btn btn-danger"style="width:100%">delete</button>
    </div>
  </div>
  <h3 style="margin-left:80%"><a href="{{route('series.index')}}"> < < back</a></div>
</div>
@endsection

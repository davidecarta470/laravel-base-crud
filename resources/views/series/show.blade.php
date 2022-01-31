
@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12"><h1>{{$series->title}}</h1></div>
    <div class="col-3"><img style="width:100%" src="{{asset($series->img)}}" alt=""></div>
    
    <div class="col-6">
      <h3>{{$series->series}}</h3>
      <p>{{$series->description}}</p>
      <h3>{{$series->price}} euro</h3>
    </div>
    <div class="col-1">
      <a href="{{ route('series.edit', $series) }}" class="btn btn-primary">EDIT</a>
    </div>
  </div>
  <h3 style="margin-left:80%"><a href="{{route('series.index')}}"> < < back</a></div>
</div>
@endsection


@extends('layouts.main')
@section('content')
<div class="container">
  <h1>{{$item->title}}</h1>
  <img style="" src="{{asset($item->img)}}" alt="">
  <div style="display: inline-block">
    <p >{{$item->series}}</p>
    <h3 >{{$item->price}}</h3>
  </div>
  <h3 style="margin-left:80%"><a href="{{route('series.index')}}"> < < back</a></div>
</div>
@endsection

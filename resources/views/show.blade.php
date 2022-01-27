{{-- @dump($item) --}}
@extends('layouts.main')
@section('content')
<h1>{{$item->title}}</h1>
<img src="{{$item->img}}" alt="">
@endsection
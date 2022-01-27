@extends('layouts.main')
@section('content')

   @foreach ( $series as $serie )
       
   <h1>{{$serie->title}}</h1>
   @endforeach
@endsection


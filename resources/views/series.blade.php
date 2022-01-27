@extends('layouts.main')
@section('content')

   @foreach ( $series as $serie )
       
   <h1><a href="{{route('series.show',$serie)}} ">{{$serie->title}}</a></h1>
   @endforeach
   <div>{{$series->links()}}</div>
@endsection
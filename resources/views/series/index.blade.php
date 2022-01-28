@extends('layouts.main')
@section('content')
<div class="container">
   <div class="" style="min-height:250px;">
      @foreach ( $series as $serie )
      <div class="row">
         <div class="col-8">
            <h3>
               <a href="{{route('series.show',$serie)}} ">{{$serie->title}}</a>
            </h2>
         </div>
         <div class="col-3 offset-1 ">
            <button href=""class="btn btn-info">update</button>
            <button href=""class="btn btn-danger">delete</button>
         </div>
      </div>   
      @endforeach
      <a href="{{ route('series.create') }}"><button class="btn btn-success mb-2 col-3 offset-5">create new element</button></a>
   </div>
   

   <div class="py-3">{{$series->links()}}</div>
</div>
@endsection
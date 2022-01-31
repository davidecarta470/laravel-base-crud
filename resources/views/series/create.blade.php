
@extends('layouts.main')
@section('content')
<div class="container">
  
  @if($errors->any()) 

    <ul>
       @foreach(($errors->any()) as $error)
         <li>{{$error}}</li>
       @endforeach
  
    </ul>
 @endif
  

  <div class="row">
    <div class="col-6 offset-3">
      <h1>Nuova serie</h1>
      <form action="{{route('series.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">immagine</label>
          <input type="text" class="form-control" name="img" id="img">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Descrizione</label>
          <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Serie</label>
          <input type="text" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prezzo</label>
          <input type="text" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Data di uscita</label>
          <input type="text" class="form-control" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tipo</label>
          <input type="text" class="form-control" name="type" id="type">
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">reset</button>
      </form>
    </div>
  </div>
</div>
@endsection
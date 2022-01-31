@extends('layouts.main')
@section('content')
<div class="container">

  
  <div class="row">
    <div class="col-6 offset-3">
      @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{  $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <h1>Nuova serie</h1>
      <form action="{{route('series.update',$series)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titolo</label>
          <input type="text" value="{{old('title',$series->title)}}" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="emailHelp">
          @error('title')
            <p class="form_errors">
              {{$message}}
            </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">immagine</label>
          <input type="text" value="{{old('img',$series->img)}}" class="form-control" name="img" id="img">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Descrizione</label>
          <input type="text" value="{{old('description',$series->description)}}" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Serie</label>
          <input type="text" value="{{old('series',$series->series)}}" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prezzo</label>
          <input type="text" value="{{old('price',$series->price)}}" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Data di uscita</label>
          <input type="text" value="{{old('sale_date',$series->sale_date)}}" class="form-control" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tipo</label>
          <input type="text" value="{{old('type',$series->type)}}" class="form-control" name="type" id="type">
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">reset</button>
      </form>
    </div>
  </div>
</div>
@endsection
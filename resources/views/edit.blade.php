@extends('layouts.public')

@section('title', 'Add Comic')

@section('content')
<div class="container">
  <div class="row justify-content-center my-3">
    <div class="col-6">

      <form action="{{ route('comic.update', ['id' => $comic->id]) }}" method="POST">
        @csrf()

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Titolo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" value="{{ old('title', $comic->title) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Descrizione</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="description">{{ old('description', $comic->description) }}</textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Thumb (URL)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Prezzo $</label>
          <div class="col-sm-10">
            <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price', $comic->price) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Serie</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="series"  value="{{ old('series', $comic->series) }}">
          </div>
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Data</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="sale_date"  value="{{ old('sale_date', $comic->sale_date) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Tipo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="type" value="{{ old('type', $comic->type) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Artisti</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="artists" value="{{ old('artists', $comic->artists) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Scrittori</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="writers" value="{{ old('writers', $comic->writers) }}">
          </div>
        </div>

        <div class="text-center">
          <a class="btn btn-secondary" href="{{ route("homepage") }}">Annulla</a>
          <button class="btn btn-primary">Aggiorna</button>
        </div>

      </form>

    </div>
  </div>
</div>
@endsection
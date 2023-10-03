@extends('layouts.public')

@section('title', $comic->title)

@section('content')
  <div>
    Title: {{ $comic->title }}
  </div>
  <div>
    Description: {{ $comic->description }}
  </div>
  <div>
    Thumbnail: {{ $comic->thumb }}
  </div>
  <div>
    Price: {{ $comic->price }}
  </div>
  <div>
    Series: {{ $comic->series }}
  </div>
  <div>
    Sale Date: {{ $comic->sale_date }}
  </div>
  <div>
    Type: {{ $comic->type }}
  </div>
  <div>
    Artists: {{ $comic->artists }}
  </div>
  <div>
    Writers: {{ $comic->writers }}
  </div>

  <a href="{{ route("comic.edit", ["id"=>$comic->id]) }}">
    <button>Update Comic</button>
  </a>
@endsection
@extends('layouts.public')

@section('title', 'Home')
  <ul> 
    @foreach ($comics as $element)
      <li>
        <a href="/comic/{{$element->id}}">
          {{ $element->title }}
        </a>
      </li>
    @endforeach
  </ul>

  <a href="{{ route("comic.create") }}">
    <button>Add Comic</button>
  </a>
@section('content')
@endsection
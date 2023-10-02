@extends('layouts.public')

@section('title', 'Home')
  <ul> 
    @foreach ($comics as $element)
      <li>
        <a href="/{{$element->id}}">
          {{ $element->title }}
        </a>
      </li>
    @endforeach
  </ul>
@section('content')
@endsection
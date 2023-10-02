@extends('layouts.public')

@section('title', $comic->title)

@section('content')
  {{ $comic->title }}
@endsection
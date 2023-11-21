@extends('layouts.app')

@section('content')

@foreach ($category->places as $place)
    <a href="/categorie/{{$category->name}}/{{$place->name}}">{{$place->name}}</a>
@endforeach

@endsection
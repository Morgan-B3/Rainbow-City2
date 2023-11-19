@extends('layouts.app')

@section('content')

@foreach ($places as $place)
    <a href="/catégorie/{{$category->name}}/{{$place->name}}">{{$place->name}}</a>
@endforeach

@endsection
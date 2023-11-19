@extends('layouts.app')

@section('content')

    @foreach ($categories as $category)
        <a href="/catégorie/{{$category->name}}">{{$category->name}}</a>
    @endforeach

@endsection
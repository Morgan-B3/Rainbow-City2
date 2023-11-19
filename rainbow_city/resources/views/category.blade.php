@extends('layouts.app')

@section('content')

@foreach ($places as $place)
    {{$place->name}}
@endforeach

@endsection
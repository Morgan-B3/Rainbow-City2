@extends('layouts.app')

@section('content')
    
    <!-- Gallery -->
    <h2>Vous êtes ...</h2>
    <div class="w-75 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 mx-auto"> 
        @foreach($categories as $category)
            @if ($category->sub_category == 'status')
                <a href="/catégorie/{{$category->name}}" class="">
                    <figure class="movie" >
                        <img src="{{asset("images/categories/$category->name.jpg")}}" class="" />
                        <figcaption>
                            <div class="px-5">
                                {{$category->sub_name}}
                            </div>
                        </figcaption>
                    </figure>
                </a>
            @endif
        @endforeach
    </div>

    <h2>Vous préferez ...</h2>
    <div class="w-75 grid grid-cols-3 gap-10 md:grid-cols-2 lg:grid-cols-3 mx-auto">
        @foreach($categories as $category)
            @if ($category->sub_category == 'activity')
                <a href="/catégorie/{{$category->name}}" class="">
                    <figure class="movie" >
                        <img src="{{asset("images/categories/$category->name.jpg")}}" class="" />
                        <figcaption>
                            <div class="px-5">
                                {{ $category->sub_name}}
                            </div>
                        </figcaption>
                    </figure>
                </a>
            @endif
        @endforeach
    </div>

@endsection
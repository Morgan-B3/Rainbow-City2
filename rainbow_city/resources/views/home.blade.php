@extends('layouts.app')

@section('content')
    
    <!-- Gallery -->
    <h2 class="text-5xl text-white mx-auto w-fit my-6">Vous êtes ...</h2>
    <div class="w-75 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 mx-auto"> 
        @foreach($categories as $category)
            @if ($category->sub_category == 'status')
                <a href="/catégorie/{{$category->name}}">
                    <figure class="gallery relative overflow-hidden ">
                        <img src="{{asset("images/categories/$category->name.jpg")}}" class="hover:scale-110 transition ease-in-out duration-300 " />
                        <figcaption class="absolute bottom-0 left-0 right-0 flex flex-col items-center justify-center text-lg text-white transition-all h-full text-center ease-in-out duration-300 hover:text-xl leading-tight hover:leading-tight">
                            <div class="px-5">
                                {{$category->sub_name}}
                            </div>
                        </figcaption>
                    </figure>
                </a>
            @endif
        @endforeach
    </div>

    <h2 class="text-5xl text-white mx-auto w-fit my-6">Vous préferez ...</h2>
    <div class="w-75 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 mx-auto">
        @foreach($categories as $category)
            @if ($category->sub_category == 'activity')
                <a href="/catégorie/{{$category->name}}">
                    <figure class="gallery relative overflow-hidden " >
                        <img src="{{asset("images/categories/$category->name.jpg")}}" class="hover:scale-110 transition ease-in-out duration-300 " />
                        <figcaption class="absolute bottom-0 left-0 right-0 flex flex-col items-center justify-center text-lg text-white transition-all h-full text-center ease-in-out duration-300 hover:text-xl leading-tight hover:leading-tight">
                            <div class="px-5">
                                {{ $category->sub_name}}
                            </div>
                        </figcaption>
                    </figure>
                </a>
            @endif
        @endforeach
    </div>

<style>
h1, h2, h3{
    filter: drop-shadow(0px 2px 2px rgb(0, 0, 0));
}

.gallery:hover img {
    transform: scale(1.1);
}

.gallery figcaption {
    font-size: 2em;
    filter: drop-shadow(0px 5px 2px rgb(0, 0, 0));
    text-shadow: -2px 0 rgba(0, 0, 0, 0.622), 0 2px rgba(0, 0, 0, 0.622), 2px 0 rgba(0, 0, 0, 0.622), 0 -2px rgba(0, 0, 0, 0.622);
}

.gallery:hover figcaption {
    background-color: rgba(39, 36, 35, 0.5);
    font-size: 2.3em;
    backdrop-filter: blur(5px);   
}

</style>

@endsection
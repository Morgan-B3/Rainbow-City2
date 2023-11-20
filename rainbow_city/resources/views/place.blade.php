@extends('layouts.app')

@section('content')

    @foreach ($categories as $category)
        <a href="/catégorie/{{$category->name}}">{{$category->name}}</a>
    @endforeach

    <div class="flex flex-col lieu">
        <div class="row g-0 titre">
            <div class="col-md-6 image">
                <img src="./images/places/" alt="{{$title}}">
            </div>
            <div class="col-md-6">
                <div class="row g-0">
                    <h1>{{$place->name}}<br>{{$place->title}}</h1>
                </div>
                <div class="row g-0 lieutxt">
                    <p>{{$place->description}}</p>
                </div>
                <div class="row g-0 lieutxt2">
                    <div class="col-md-6">
                        <p>Avis : {{$rating}}/5 </p>
                    </div>
                    <div class="col-md-6">
                        <p> <a href="#" class="btn">Ajouter aux favoris</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-fit mx-auto">
            
            <h2 class="w-fit mx-auto">Avis et commentaires</h2>
            
            <div class="flex flex-col gap-4 my-4">
                @foreach($comments as $comment)
                <div class="bg-white rounded-lg p-3 flex items-center">
                    <div class="col-md-1">
                        @foreach ($users as $user) @if ($user->id == $comment->user_id)
                        <img src="/{{$user->image}}" alt="{{$user->image}}" class="rounded-full w-[50px]">
                        @endif @endforeach 
                    </div>
                    
                    <div class="w-full">
                        <div class="flex justify-between mb-2">
                            <h5 class="font-bold w-1/2">@foreach ($users as $user)
                                @if ($user->id == $comment->user_id)
                                    {{$user->name}}
                                @endif
                            @endforeach 
                            </h5>
                            <h5>Note : {{$comment['rating']}}/5</h5>
                            <h5>({{date("d/m/Y",strtotime($comment['date']))}})</h5>
                        </div>
                        <p class="card-text">{{$comment['comment']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
        <div >

            <?php // if (pas de compte) => connectez-vous pour laisser un avis
            // else if (pas de commentaire) => laissez-nous votre avis
                    // else => modifier / supprimer votre avis ?>

            
            <h3 class=" w-fit mx-auto commentaires">Laissez-nous votre avis</h3>
            
            <form method="post" class="bg-white rounded-lg w-[70%] mx-auto flex items-center my-4 p-3">  
                <div class="col-md-1">
                    <img src="/images/icon.png" class="w-[70px] rounded-full mx-auto" alt="lego">
                </div>
                <div class="w-full">
                    <div class="flex justify-between mb-2 items-center">
                        <h5 class="font-bold w-1/2">Super_Syl</h5>
                        <div>
                            <p>Note : <input type="radio" name="avis" id="avis1" required><!-- <label for="avis1"><img src="./images/favoris.png" class="etoile"></label> --><input type="radio" name="avis" id="avis2" required><input type="radio" name="avis" id="avis3" required><input type="radio" name="avis" id="avis4" required><input type="radio" name="avis" id="avis5"required ></p>
                        </div>
                        <h5>({{date("d/m/Y")}})</h5>
                    </div>
                    <textarea placeholder="Votre commentaire" cols="30" rows="2" class="w-full min-h-[45px] max-h-[200px]" required ></textarea>
                </div>
                <div class="col-md-2 comment">
                    <button type="submit" href="#" class="btn">Envoyer</a>
                </div>
            </form>
        </div>
    </div>

@endsection
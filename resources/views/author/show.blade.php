@extends('layouts.app')


@section('content')
    <section class="mt-5 flex items-center justify-center">
        <div class="flex" style="width: 80vw;">
            <div class="px-5 w-5/12 ">
                <img src="/storage/{{$author->image}}" width="500" height="500" alt="">
            </div>
            <div class="w-7/12">
                <h1 class="text-xl py-5">Identité de l'auteur</h1>
                <div>
                    <p class="text-gray-900 text-md font-medium mb-2">Nom: {{$author->name}}</p>
                    <p class="text-gray-500 text-md font-medium mb-2">Nationnalité: {{$author->country}}</p>
                    <p class="text-gray-500 text-md font-medium mb-2">Date de naissance: {{ $author->bornDate }}</p>
                    <p class="text-gray-500 text-md font-medium mb-2">Date de décès: {{ $author->dateOfDeath ?? "En vie"  }}  </p>
                    <p class="text-gray-500 text-md font-medium mb-2">Courant littéraire: {{ $author->courant }}</p>
                </div>
                <div>
                    <h1 class="text-xl py-5">Description de l'auteur</h1>
                    <p class="mb-5">{{$author->description}}</p>
                    <button class=" w-full
                    px-6
                    py-2.5
                    bg-blue-600
                    text-white
                    font-medium
                    text-xs
                    leading-tight
                    uppercase
                    rounded
                    shadow-md
                    hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg
                    transition
                    duration-150
                    ease-in-out">Consulter ses Oeuvres</button>
                </div>
            </div>
           
        </div>
    </section>



@endsection
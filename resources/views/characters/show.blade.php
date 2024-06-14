@extends('layouts.app')

@section('title','Characters')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="card p-5">
            <h1 class="text-center">{{$character->name}}</h1>
            <h3 class="text-center">{{ $character->type->name }}</h3>
            <p class="text-center fs-4">{{ $character->type->description}}</p>
            <figure class="text-center">
                <img src="{{ Vite::asset("public/img/img_characters/$character->url_img")}}" alt="character img">
            </figure>
            <p class="px-5">{{$character->description}}</p>
            <ul class="infos mx-5 p-5">
                <li class="d-flex justify-content-between">
                    <strong>Atk:</strong> 
                    {{$character->attack}}
                </li>
                <li class="d-flex justify-content-between">
                    <strong>Def:</strong>
                    {{$character->defence}}
                </li>
                <li class="d-flex justify-content-between">
                    <strong>Speed:</strong>
                    {{$character->speed}}</li>
                <li class="d-flex justify-content-between">
                    <strong>HP:</strong>
                    {{$character->life}}</li>
                <li class="mt-3">
                    <strong>Weapons:</strong>
                    <ul class="p-0 d-flex">
                        @foreach($character->items as $weapon)
                        <li class="px-2">{{$weapon->name}}</li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <div class="buttons d-flex justify-content-between my-4">
            <a href="{{ route('characters.index') }}" class="btn btn-dark rounded-pill">Go to Characters List</a>
            <div>
                <a href="{{ route('characters.edit', $character) }}" class="btn btn-dark rounded-pill">Edit</a>
                <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Delete
                </button>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Do you really want to delete it?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Dismiss</button>
                        <form action="{{ route('characters.destroy', $character) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
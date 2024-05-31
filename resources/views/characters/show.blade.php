@extends('layouts.app')

@section('title','Characters')

@section('content')
{{-- <div class="container"> --}}
    <div class="bg-dark-subtle">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="text-center">
                <div>
                    <h1>Nome: {{$character->name}}</h1>
                    <p>{{$character->description}}</p>
                </div>
                <div>
                    <ul class="p-0">
                        <li>Atk: {{$character->attack}}</li>
                        <li>Def: {{$character->defence}}</li>
                        <li>Speed: {{$character->speed}}</li>
                        <li>HP: {{$character->life}}</li>
                    </ul>
                    <div class="d-flex justify-content-center gap-5">
                        <a href="{{route('characters.index')}}" class="btn btn-success btn-lg ">List</a>
                        <a href="{{route('characters.edit', $character)}}" class="btn btn-light btn-lg ">Edit</a>
                        <form action="{{route('characters.destroy', $character)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-lg ">Delete</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{-- </div> --}}


@endsection
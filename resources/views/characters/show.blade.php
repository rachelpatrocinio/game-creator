@extends('layouts.app')

@section('title','Characters')

@section('content')
<div class="container">
    <div class="text-center">
        <div>
            <h1>Nome: {{$character->name}}</h1>
            <p>{{$character->description}}</p>
        </div>
        <div>
            <ul>
                <li>Atk: {{$character->attack}}</li>
                <li>Def: {{$character->defence}}</li>
                <li>Speed: {{$character->speed}}</li>
                <li>HP: {{$character->life}}</li>
            </ul>
            <div>
                <a href="{{route('characters.index')}}" class="btn btn-primary">Lista</a>
            </div>
        </div>
    </div>

</div>


@endsection
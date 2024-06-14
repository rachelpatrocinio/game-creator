@extends('layouts.app')

@section('title', 'Characters')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="section-title text-center mb-4">
                <img src="{{Vite::asset('public/img/logo/characters.png')}}" alt="Characters">
                <div class="mt-4">
                    <a href="{{ route('characters.create') }}" class="btn btn-dark">+ Create new Character</a>
                </div>
            </div>
            <div class="cards d-flex flex-wrap p-0 text-center">
                @foreach ($characters as $character)
                <div class="col-3 p-2">
                    <div class="card p-4">
                        <h5 class="text-center my-4">
                            <a href="{{ route('characters.show', $character)}}">{{ $character->name }}</a>
                        </h5>
                        <h6>{{ $character->type->name }}</h6>
                        <img src="{{ Vite::asset("public/img/img_characters/$character->url_img")}}" alt="">
                        <ul class="infos p-4">
                            <li>
                                <strong>Atk:</strong> 
                                {{$character->attack}}
                            </li>
                            <li>
                                <strong>Def:</strong>
                                {{$character->defence}}
                            </li>
                            <li>
                                <strong>Speed:</strong>
                                {{$character->speed}}
                            </li>
                            <li>
                                <strong>HP:</strong>
                                {{$character->life}}
                            <li>
                        </ul>
                        <div class="buttons d-flex justify-content-around">
                            <a href="{{ route('characters.show', $character) }}" class="btn rounded-pill">More</a>
                            <a href="{{ route('characters.edit', $character) }}" class="btn rounded-pill">Edit</a>
                            <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Delete
                            </button>
                        </div>
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
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

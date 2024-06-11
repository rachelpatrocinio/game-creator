@extends('layouts.app')

@section('title','Modify')

@section('content')
<div class="container">

    <h1 class="text-center fs-1">Modifica il personaggio!</h1>

    <form action="{{route('characters.update', $character)}}" method="POST">
        @csrf

        @method('PUT')
    
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name', $character->name)}}">
        </div>
        <div class="mb-3">
            <label for="url_img" class="form-label">URL img</label>
            <input type="text" class="form-control" id="url_img" name="url_img" value="{{old('url_img', $character->url_img)}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description', $character->description)}}">
        </div>
        
        <div class="mb-3">
            <label for="attack" class="form-label">Atk</label>
            <input type="text" class="form-control" id="attack" name="attack" value="{{old('attack', $character->attack)}}">
        </div>

        <div class="mb-3">
            <label for="defence" class="form-label">Def</label>
            <input type="text" class="form-control" id="defence" name="defence" value="{{old('defence', $character->defence)}}">
        </div>
        <div class="mb-3">
            <label for="speed" class="form-label">Speed</label>
            <input type="text" class="form-control" id="speed" name="speed" value="{{old('speed', $character->speed)}}">
        </div>
        <div class="mb-3">
            <label for="life" class="form-label">HP</label>
            <input type="text" class="form-control" id="life" name="life" value="{{old('life', $character->life)}}">
        </div>
        <div class="mb-3">
            <label for="weapons" class="form-label">Weapons:</label>
            <div class="form-check d-flex flex-wrap">
                @foreach($items as $item)
                <div class="col-2">
                    <input @checked(in_array($item->id, old('items',$character->items->pluck('id')->all()))) name="items[]" type="checkbox" value="{{$item->id}}" id="item-{{$item->id}}">
                    <label for="item-{{$item->id}}">{{ $item->name }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{route('characters.index')}}" class="btn btn-primary btn-lg">Go back</a>
            <button type="submit" class="btn btn-warning btn-lg">save</button>
        </div>
    </form>



    <div class="my-4">
        @if ( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

</div>



@endsection
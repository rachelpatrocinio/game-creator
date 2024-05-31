@extends('layouts.app')

@section('title','Create')

@section('content')
<div class="container">
    
    <h1 class="text-center fs-1">Crea il personaggio!</h1>

    <form action="{{route('characters.store')}}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        
        <div class="mb-3">
            <label for="attack" class="form-label">Atk</label>
            <input type="text" class="form-control" id="attack" name="attack">
        </div>

        <div class="mb-3">
            <label for="defence" class="form-label">Def</label>
            <input type="text" class="form-control" id="defence" name="defence">
        </div>

        <div class="mb-3">
            <label for="speed" class="form-label">Speed</label>
            <input type="text" class="form-control" id="speed" name="speed">
        </div>

        <div class="mb-3">
            <label for="life" class="form-label">HP</label>
            <input type="text" class="form-control" id="life" name="life">
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Crea</button>
            <a href="{{route('characters.index')}}" class="btn btn-primary">Go back</a>
        </div>

    
    </form>
</div>


@endsection
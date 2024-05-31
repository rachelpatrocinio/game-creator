@extends('layouts.app')

@section('title','Create')

@section('content')
<div class="bg-dark-subtle">
    <div class="container">
    
        <h1 class="text-center fs-1">Crea il personaggio!</h1>
    
        <form action="{{route('characters.store')}}" method="POST">
            @csrf
        
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
            </div>
            
            <div class="mb-3">
                <label for="attack" class="form-label">Atk</label>
                <input type="text" class="form-control" id="attack" name="attack" value="{{old('attack')}}">
            </div>
    
            <div class="mb-3">
                <label for="defence" class="form-label">Def</label>
                <input type="text" class="form-control" id="defence" name="defence" value="{{old('defence')}}">
            </div>
    
            <div class="mb-3">
                <label for="speed" class="form-label">Speed</label>
                <input type="text" class="form-control" id="speed" name="speed" value="{{old('speed')}}">
            </div>
    
            <div class="mb-3">
                <label for="life" class="form-label">HP</label>
                <input type="text" class="form-control" id="life" name="life" value="{{old('life')}}">
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('characters.index')}}" class="btn btn-primary btn-lg">Go back</a>
                <button type="submit" class="btn btn-success btn-lg">Create</button>
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
</div>



@endsection
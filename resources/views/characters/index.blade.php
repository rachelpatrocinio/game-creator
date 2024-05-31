@extends('layouts.app')

@section('title','Characters')

@section('content')
<div class="bg-body-secondary py-5" style="height: 100vh;">
  <div class="container">
    <h1 class="text-center fs-2 mb-5">CHARACTERS</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col" class="text-black-50">Name</th>
          {{-- <th scope="col">Description</th> --}}
          <th scope="col" class="text-black-50">Atk</th>
          <th scope="col" class="text-black-50">Def</th>
          <th scope="col" class="text-black-50">Speed</th>
          <th scope="col" class="text-black-50">HP</th>
          <th scope="col" class="text-black-50">More</th>
          <th scope="col" class="text-black-50">Edit</th>
          <th scope="col" class="text-black-50">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($characters as $character)
          <tr>
              <th scope="row">
                <a href="{{route('characters.show', $character)}}">{{ $character->name }}</a>
                </th>
              {{-- <td>{{ $character->description }}</td> --}}
              <td>{{ $character->attack }}</td>
              <td>{{ $character->defence }}</td>
              <td>{{ $character->speed }}</td>
              <td>{{ $character->life }}</td>
              <td>
                <a href="{{route('characters.show', $character)}}" class="btn btn-primary">Detail</a>
              </td>
              <td>
                <a href="{{route('characters.edit', $character)}}" class="btn btn-warning">Edit</a>
              </td>
              <td>
                <form action="{{route('characters.destroy', $character)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button>

                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div>
      <a href="{{route('characters.create')}}" class="btn btn-success">Create new Character</a>
    </div>
  </div>
</div>



@endsection
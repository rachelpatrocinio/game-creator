@extends('layouts.app')

@section('title','Characters')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            {{-- <th scope="col">Description</th> --}}
            <th scope="col">Atk</th>
            <th scope="col">Def</th>
            <th scope="col">Speed</th>
            <th scope="col">HP</th>
            <th scope="col">More</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <th scope="row">{{ $character->name }}</th>
                {{-- <td>{{ $character->description }}</td> --}}
                <td>{{ $character->attack }}</td>
                <td>{{ $character->defence }}</td>
                <td>{{ $character->speed }}</td>
                <td>{{ $character->life }}</td>
                <td>
                  <a href="{{route('characters.show', $character)}}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>


@endsection
@extends('layouts.app')

@section('title','Characters')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Attack</th>
            <th scope="col">Defence</th>
            <th scope="col">Speed</th>
            <th scope="col">Life</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <th scope="row">{{ $character->name }}</th>
                <td>{{ $character->description }}</td>
                <td>{{ $character->attack }}</td>
                <td>{{ $character->defence }}</td>
                <td>{{ $character->speed }}</td>
                <td>{{ $character->life }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>


@endsection
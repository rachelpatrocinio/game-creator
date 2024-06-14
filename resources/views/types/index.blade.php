@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="container">
  <table class="table my-5">
    <thead>
      <tr>
        <th class="text-danger" scope="col">#</th>
        <th class="text-danger" scope="col">Name</th>
        <th class="text-danger" scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($types as $type)
      <tr>
        <th scope="row">{{ $type->id }}</th>
        <td>{{ $type->name }}</td>
        <td>{{ $type->description }}</td>
      </tr>
      @endforeach
  </tbody>
  </table>
</div>

@endsection
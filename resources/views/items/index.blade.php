@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th class="text-danger" scope="col">ID</th>
        <th class="text-danger" scope="col">Name</th>
        <th class="text-danger" scope="col">Slug</th>
        <th class="text-danger" scope="col">Type</th>
        <th class="text-danger" scope="col">Category</th>
        <th class="text-danger" scope="col">Weight</th>
        <th class="text-danger" scope="col">Cost</th>
        <th class="text-danger" scope="col">Damage Dice</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->slug }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->category }}</td>
        <td>{{ $item->weight }}</td>
        <td>{{ $item->cost }}</td>
        <td>{{ $item->damage_dice }}</td>
      </tr>
      @endforeach
  </tbody>
  </table>
</div>

@endsection
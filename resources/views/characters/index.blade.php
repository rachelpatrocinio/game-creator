@extends('layouts.app')

@section('title', 'Characters')

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
                                <a href="{{ route('characters.show', $character) }}">{{ $character->name }}</a>
                            </th>
                            {{-- <td>{{ $character->description }}</td> --}}
                            <td>{{ $character->attack }}</td>
                            <td>{{ $character->defence }}</td>
                            <td>{{ $character->speed }}</td>
                            <td>{{ $character->life }}</td>
                            <td>
                                <a href="{{ route('characters.show', $character) }}" class="btn btn-success">Detail</a>
                            </td>
                            <td>
                                <a href="{{ route('characters.edit', $character) }}" class="btn btn-light">Edit</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <a href="{{ route('characters.create') }}" class="btn btn-success">Create new Character</a>
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
        </div>
    </div>
    </div>



@endsection

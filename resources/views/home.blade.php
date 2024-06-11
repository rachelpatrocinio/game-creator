@extends('layouts.app')

@section('title','Welcome')

@section('content')


<section class="hero-banner text-white p-5">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-6 py-5">
        <h1 class="title">Dungeon & Dragons</h1>
        <p>Venture into this legendary fantasy role-playing game and discover why millions of people around the world have stepped into the shoes of mighty heroes to create their own stories.</p>
      </div>
    </div>
  </div>
</section>

<section class="characters my-5">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <a href="{{ route('characters.index')}}">
          <img src="{{Vite::asset('public/img/logo/characters.png')}}" alt="Characters">
        </a>
      </div>
    </div>
  </div>
  <div class="cards d-flex overflow-x-scroll py-4">
    @foreach($characters as $character)
    <div class="col-3 p-3">
      <div class="card px-5">
        <h3 class="text-center my-4">
          <a href="{{ route('characters.show', $character)}}">{{ $character->name }}</a>
        </h3>
        <img src="{{ Vite::asset("public/img/img_characters/$character->url_img")}}" alt="">
        <ul class=" infos p-4">
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
      </div>
    </div>
    @endforeach
  </div>
</section>

<section class="items mb-5">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <img src="{{Vite::asset('public/img/logo/weapons.png')}}" alt="">
      </div>
      <div class="weapons-list d-flex flex-wrap py-5">
        @foreach($items as $item)
        <div class="col-2 text-center">
          <h6>{{ $item->name }}</h6>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


@endsection
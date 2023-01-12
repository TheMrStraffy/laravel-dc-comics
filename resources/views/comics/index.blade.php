@extends('layouts.main')
@section('content')
<h1 class="m-5">COMICS</h1>
<main>


    <div class="container d-flex ">
      <div class="row m-auto justify-content-evenly">
        @foreach ($comics as $comic)

        @include('partials.card')
        @endforeach

      </div>
    </div>

    <div class="container">
        <a  href="{{route('comics.create')}}">
          <button>Create</button>
      </a>
    </div>

      <div class="loadMore d-flex justify-content-center">
        <span>LOAD MORE</span>
        </div>
  </main>




@endsection

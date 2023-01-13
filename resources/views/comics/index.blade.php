@extends('layouts.main')
@section('content')
<h1 class="m-5">COMICS</h1>
@if (session('deleted'))
    <div>

        <h2>
            {{session('deleted')}}
        </h2>
    </div>
@endif
<main>


    <div class="container d-flex ">
      <div class="row m-auto justify-content-evenly">

        @foreach ($comics as $comic)

        @include('partials.card')
        @endforeach

      </div>
    </div>

    <div class="container">
        <div class="btn">
            <a class="" href="{{route('comics.create')}}">
              <button>Create</button>
          </a>
        </div>
    </div>

      <div class="loadMore d-flex justify-content-center">
        <span>{{$comics->links()}}</span>
        </div>
  </main>




@endsection

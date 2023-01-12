@extends('layouts.main');

@section('content')
<div class="container m-auto text-center my-5">

        <div class="my-3">
          <img class="" src="{{$comic['thumb']}}" alt="comic.series">

        </div>
        <div class="allDetails">

            <div class="text row">
                <div class="col">

                    <h3>Title: {{$comic['title']}}</h3>
                    <p>Description : {{$comic['description']}}</p>
                </div>
                <div class="col align-self-center">
                    <p>Price: {{$comic['price']}}</p>
                    <p>Series: {{$comic['series']}}</p>
                    <p>Sale Date: {{$comic['sale_date']}}</p>
                    <p>Type: {{$comic['type']}}</p>
                </div>

            </div>
            <div class="row text-center">
                <div class="col">
                    <ul>
                        <li><h3>Artists:</h3>
                            <ul>
                                @foreach ($comic['artists'] as $artist)
                                    <li>{{$artist}}</li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li><h3>Writers:</h3>
                            <ul>
                                @foreach ($comic['writers'] as $writer)
                                    <li>{{$writer}}</li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="backTo" href="{{route('comics')}}"><button>Back To Comics</button></a>
      </div>


@endsection

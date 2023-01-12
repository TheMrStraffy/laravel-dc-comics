
<div class="d-flex justify-content-center col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
    <a href="{{route('comicDetails', ['id' => $comic['id']]) }}">

        <div class="card-mc">
          <div class="card-box">
            <img class="cardImg" src="{{$comic['thumb']}}" alt="comic.series">

          </div>
          <div class="text">
            {{$comic['title']}}
          </div>
        </div>
    </a>
  </div>




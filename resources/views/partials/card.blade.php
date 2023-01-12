
<div class="d-flex justify-content-center col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">


        <div class="card-mc">
          <div class="card-box">
            <img class="cardImg" src="{{$comic['image']}}" alt="comic.series">

          </div>
          <div class="text">
            {{$comic['title']}}
            <div class="sh-cr-btns d-flex">

                <a href="{{route('comics.show', $comic)}}">
                    <button>Show</button>
                </a>

            </div>
        </div>
    </div>
  </div>




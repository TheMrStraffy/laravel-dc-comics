
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
                <a href="{{route('comics.edit', $comic)}}">
                    <button>Edit</button>
                </a>
                <form onsubmit="return confirm('Sicuro di voler eliminare {{$comic->title}}?')" action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-5" type="submit" title="delete">Delete</button>
                  </form>
            </div>
        </div>
    </div>
  </div>




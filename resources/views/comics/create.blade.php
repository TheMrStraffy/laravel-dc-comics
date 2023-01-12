@extends('layouts.main')

@section('content')
<div class="container">

    <form class="my-5" action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group my-4">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Enter title here">
        </div>
        <div class="form-group my-4">
          <label for="description">Description</label>
          <input name="description" type="text" class="form-control" id="description" placeholder="Enter description here">
        </div>
        <div class="form-group my-4">
          <label for="image">Image</label>
          <input type="text" class="form-control" name="image" id="image" placeholder="Enter image here">
        </div>
        <div class="form-group my-4">
          <label for="price">price</label>
          <input name="price" type="number" name="number" class="form-control" id="price" placeholder="Enter price here">
        </div>
        <div class="form-group my-4">
          <label for="series">series</label>
          <input name="series" type="text" class="form-control" id="series" placeholder="Enter series here">
        </div>
        <div class="form-group my-4">
          <label for="sale_date">Sale Date</label>
          <input name="sale_date" type="text" class="form-control" id="sale_date" placeholder="Enter Sale Date here">
        </div>
        <div class="form-group my-4">
          <label for="type">Type</label>
          <input name="type" type="text" class="form-control" id="type" placeholder="Enter Type here">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <a href="/comics">
        <button>Back To Comics</button>
    </a>
</div>

@endsection

@extends('layouts.main')

@section('content')
<div class="container">

    <form class="my-5" action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group my-4">
          <label for="title">Title</label>
          <input value="{{$comic->title}}" type="text" class="form-control" name="title" id="title" placeholder="Enter title here">
        </div>

        <div class="form-group my-4">
          <label for="description">Description</label>
          <input value="{{$comic->description}}" name="description" type="text" class="form-control" id="description" placeholder="Enter description here">
        </div>

        <div class="form-group my-4">
          <label for="image">Image</label>
          <input value="{{$comic->image}}" type="text" class="form-control" name="image" id="image" placeholder="Enter image here">
        </div>

        <div class="form-group my-4">
          <label for="price">price</label>
          <input value="{{$comic->number}}" name="price" type="number" name="number" class="form-control" id="price" placeholder="Enter price here">
        </div>

        <div class="form-group my-4">
          <label for="series">series</label>
          <input value="{{$comic->series}}" name="series" type="text" class="form-control" id="series" placeholder="Enter series here">
        </div>

        <div class="form-group my-4">
          <label for="sale_date">Sale Date</label>
          <input value="{{$comic->sale_date}}" name="sale_date" type="text" class="form-control" id="sale_date" placeholder="Enter Sale Date here">
        </div>

        <div class="form-group my-4">
          <label for="type">Type</label>
          <input value="{{$comic->type}}" name="type" type="text" class="form-control" id="type" placeholder="Enter Type here">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>

      <form onsubmit="return confirm('Sicuro di voler eliminare {{$comic->title}}?')" action="{{route('comics.destroy', $comic)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger mb-5" type="submit" title="delete">Delete</button>
      </form>

    <a href="/comics">
        <button>Back To Comics</button>
    </a>
</div>

@endsection

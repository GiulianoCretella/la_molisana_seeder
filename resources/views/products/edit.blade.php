@extends('layouts.default')

@section('PageTitle','La Molisana - Nuovo prodotto')

@section('MainContent')
    <h1 class="text-center"> Prodotto da editare</h1>
    <form action="{{route('products.update',$product->id)}}" method="POST">
      @csrf
      @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{$product->title}}">
        </div>
        <div class="mb-3">
          <label for="Description" class="form-label">Description</label>
          <textarea class="form-control" id="description" aria-describedby="description" cols="30" name="description">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Select Type :</label>
          <select class="form-control" name="type" id="type">
            <option value="lunga" {{$product->type == 'lunga' ? 'selected' : ''}}>Lunga</option>
            <option value="corta" {{$product->type == 'corta' ? 'selected' : ''}}>Corta</option>
            <option value="cortissima" {{$product->type == 'cortissima' ? 'selected' : ''}}>Cortissima</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image-url</label>
          <input type="text" class="form-control" id="image" aria-describedby="image" name="image" value="{{$product->image}}">
        </div>
        <div class="mb-3">
          <label for="cooking_time" class="form-label">Cottura</label>
          <input type="text" class="form-control" id="cooking_time" aria-describedby="cooking_time" name="cooking_time" value="{{$product->cooking_time}}" min="1" max="60">
        </div>
        <div class="mb-3">
          <label for="weight" class="form-label">Peso</label>
          <input type="text" class="form-control" id="weight" aria-describedby="weight" name="weight" value="{{$product->weight}}" min="200" max="2000">
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
@endsection
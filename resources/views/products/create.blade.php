@extends('layouts.default')

@section('PageTitle','La Molisana - Nuovo prodotto')

@section('MainContent')
    <h1 class="text-center"> Nuovo Prodotto </h1>
    <form action="{{route('products.store')}}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo">
        </div>
        <div class="mb-3">
          <label for="Description" class="form-label">Description</label>
          <textarea class="form-control" id="description" aria-describedby="description" cols="30" name="description" placeholder="Inserisci descrizione"></textarea>
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Select Type :</label>
          <select class="form-control" name="type" id="type">
            <option value="lunga">Lunga</option>
            <option value="corta">Corta</option>
            <option value="cortissima">Cortissima</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image-url</label>
          <input type="text" class="form-control" id="image" aria-describedby="image" name="image" placeholder="Inserisci url immagine">
        </div>
        <div class="mb-3">
          <label for="cooking_time" class="form-label">Cottura</label>
          <input type="number" class="form-control" id="cooking_time" aria-describedby="cooking_time" name="cooking_time" placeholder="Inserisci tempo di cottura" min="1" max="60">
        </div>
        <div class="mb-3">
          <label for="weight" class="form-label">Peso</label>
          <input type="number" class="form-control" id="weight" aria-describedby="weight" name="weight" placeholder="Inserisci peso in gr" min="200" max="2000">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
@endsection
@extends('layouts.default')

@section('PageTitle','La Molisana - Prodotti')

@section('MainContent')
    <h1 class="text-center"> Prodotti </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cottura</th>
            <th scope="col">Peso</th>
            <th scope="col">Visualizza</th>
            <th scope="col">Modifica</th>
            <th scope="col">Cancella</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($prodotti as $prodotto)
            <tr>
                <td>{{$prodotto->id}}</td>
                <td>{{$prodotto->title}}</td>
                <td>{{$prodotto->type}}</td>
                <td>{{$prodotto->cooking_time}}</td>
                <td>{{$prodotto->weight}}</td>
                <td><a href="{{route('products.show',$prodotto->id)}}" class="btn btn-info">Visualizza</a></td>
                <td><a href="{{route('products.edit',$prodotto->id)}}" class="btn btn-warning">Modifica</a></td>
                <td>
                  <form action="{{route('products.destroy',$prodotto->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                      Cancella
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection
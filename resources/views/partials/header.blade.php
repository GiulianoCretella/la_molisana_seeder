<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/bollino-la-molisana.svg')}}" width="30" height="30" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{route('products.index')}}">Prodotti</a>
            <a class="nav-item nav-link" href="{{route('products.create')}}">Nuovo Prodotto</a>
          </div>
        </div>
      </nav>
</header>
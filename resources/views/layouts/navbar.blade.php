<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">PULSA ONLINE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link active" style="pointer-events: none" aria-current="page" href="#">||</a>
        </li>
        <li>
          <a class="nav-link active" aria-current="page" href="#">Saldo : {{ $dataUsers[0]->saldo }}</a>
        </li> --}}
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Saldo :" style="pointer-events: none">
      </form>
      <a class="btn btn-outline-primary" href="{{ Route('login') }}">Login</a>
    </div>
  </div>
</nav>
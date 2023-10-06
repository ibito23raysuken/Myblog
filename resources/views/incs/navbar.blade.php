<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <i class="fa-solid fa-house-chimney fa-xl" style="color:white"></i>
        <a class="navbar-brand" href="{{ route('home') }}">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('articles') }}">Lire Article</a>
          </li>
        </ul>
        @if (Auth::user() && Auth::user()->role=='ADMIN')
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link active" href="{{ route('articles.admin') }}">ESPACE ADMINISTRATION</a>
                </li>
            </ul>
        @endif

        <ul class="navbar-nav mr-auto">
            @if (Auth::user())
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button  class="btn" type="submit"  >Deconnexion</button>
                </form>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Me connecter</a>
            </li>
            @endif

        </ul>
      </div>

    </div>
  </nav>

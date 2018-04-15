@if(Auth::check())
<div id="navbar-info">
<div class=" mx-auto">
  <div class="row" style="margin: 0 auto">
  <div class="col-md-3">
    <ul>
      <li><img src="{{asset('gallery/henderson1.png')}}" style="width: 200px;"> </li>
      <li style="margin-top: -10px;"><a href="#"></a><small>Okręgowa Stacja Kontroli Pojazdów</small></li>
    </ul>
  </div>
  <div class="col-md-3">
    <ul>
      <li>
          <i class="fas fa-phone fa-2x padd-img"></i>
          <p class="img-text wts"><b>500 064 908</b></br>
            <i>stacjam10@wp.pl</i>
          </p>
      </li>
    </ul>
  </div>
  <div class="col-md-3">
    <ul>
      <li>
        <i class="fas fa-map-marker-alt fa-2x padd-img"></i>
        <p class="img-text"><b>Henderson24 Wyszków</b></br>
          <i>ul. Towarowa 10</i>
        </p>
      </li>
    </ul>
  </div>
  <div class="col-md-3">
    <ul>
      <li>
        <i class="far fa-clock fa-2x padd-img"></i>
        <p class="img-text"><b>07:00 - 18:00/17:00</b></br>
          <i>Poniedziałek - Piątek/Sobota</i>
        </p>
      </li>
    </ul>
  </div>
</div>
</div>
<nav class="navbar navbar-inverse navbar-center navbar-expand-md navbar-light  bg-light" id="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
    <ul class="navbar-nav nav nav-right nav mr-aut">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('diagnostyka')}}">Diagnostyka</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('warsztat')}}">Warsztat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('transport')}}">Transport</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('o_nas')}}">O nas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('faq')}}">FAQ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kontakt
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('kontakt')}}">Napisz do nas</a>
          <a class="dropdown-item" href="{{url('informacje')}}">Informacje</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
  <nav class="navbar navbarscr navbar-inverse navbar-expand-md navbar-light fixed-top bg-light" id="navbar-color">
    <a class="navbar-brand" href="{{url('/admin')}}"> <img src="{{asset('gallery/henderson1.png')}}" width="160" height="auto" class="d-inline-block align-top" alt="Henderson: firma oferująca usługi w zakresie transportu, mechaniki samochodowej i diagnostyki samochodowej."></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between" id="navbarNavDropdown2">
      <ul class="navbar-nav nav nav-right nav mr-aut">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/admin')}}">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('diagnostyka')}}">Diagnostyka</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('warsztat')}}">Warsztat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('transport')}}">Transport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('o_nas')}}">O nas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('faq')}}">FAQ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kontakt
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('kontakt')}}">Napisz do nas</a>
            <a class="dropdown-item" href="{{url('informacje')}}">Informacje</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav nav nav-right mr-aut">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user fa-lg"></i>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('/admin/zarządzaj')}}"><i class="fas fa-wrench"></i>  Zarządzaj</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>  Wyloguj
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
      </ul>
    </div>
  </nav>
@else
<div id="navbar-info">
<div class=" mx-auto">
  <div class="row" style="margin: 0 auto">
  <div class="col-md-3">
    <ul>
      <li><img src="{{asset('gallery/henderson1.png')}}" style="width: 200px;"> </li>
      <li style="margin-top: -10px;"><a href="#"></a><small>Okręgowa Stacja Kontroli Pojazdów</small></li>
    </ul>
  </div>
  <div class="col-md-3">
    <ul>
      <li>
          <i class="fas fa-phone fa-2x padd-img"></i>
          <p class="img-text wts"><b>500 064 908</b></br>
            <i>stacjam10@wp.pl</i>
          </p>
      </li>
    </ul>
  </div>
  <div class="col-md-3">
    <ul>
      <li>
        <i class="fas fa-map-marker-alt fa-2x padd-img"></i>
        <p class="img-text"><b>Henderson24 Wyszków</b></br>
          <i>ul. Towarowa 10</i>
        </p>
      </li>
    </ul>
  </div>
  <div class="col-md-3">
    <ul>
      <li>
        <i class="far fa-clock fa-2x padd-img"></i>
        <p class="img-text"><b>07:00 - 18:00/17:00</b></br>
          <i>Poniedziałek - Piątek/Sobota</i>
        </p>
      </li>
    </ul>
  </div>
</div>
</div>
<nav class="navbar navbar-inverse navbar-center navbar-expand-md navbar-light  bg-light" id="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
    <ul class="navbar-nav nav nav-right nav mr-aut">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('diagnostyka')}}">Diagnostyka</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('warsztat')}}">Warsztat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('transport')}}">Transport</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('o_nas')}}">O nas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kontakt
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('kontakt')}}">Napisz do nas</a>
          <a class="dropdown-item" href="{{url('informacje')}}">Informacje</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
<nav class="navbar navbarscr navbar-inverse navbar-expand-md navbar-light fixed-top bg-light">
  <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('gallery/henderson1.png')}}" width="160" height="auto" class="d-inline-block align-top" alt="Henderson: firma oferująca usługi w zakresie transportu, mechaniki samochodowej i diagnostyki samochodowej."></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse justify-content-between" id="navbarNavDropdown2">
    <ul class="navbar-nav nav nav-right nav mr-aut">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('diagnostyka')}}">Diagnostyka</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('warsztat')}}">Warsztat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('transport')}}">Transport</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('o_nas')}}">O nas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kontakt
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('kontakt')}}">Napisz do nas</a>
          <a class="dropdown-item" href="{{url('informacje')}}">Informacje</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
@endif

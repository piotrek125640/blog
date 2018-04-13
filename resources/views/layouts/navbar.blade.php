@if(Auth::check())
  <nav class="navbar navbar-inverse navbar-expand-lg navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="{{url('/admin')}}"> <img src="{{asset('gallery/henderson.png')}}" width="132" height="56" class="d-inline-block align-top" alt="Henderson: firma oferująca usługi w zakresie transportu, mechaniki samochodowej i diagnostyki samochodowej."></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
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
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id='navbar-position'>
  <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('gallery/henderson.png')}}" width="132" height="56" class="d-inline-block align-top" alt="Henderson: firma oferująca usługi w zakresie transportu, mechaniki samochodowej i diagnostyki samochodowej."></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
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

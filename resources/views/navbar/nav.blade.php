<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Learn Logic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if (Route::has('login'))
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/home') }}">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="dropdown-item" href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log out') }}
                  </a>
              </form>
            </li>
             
          </ul>
        </li>
        
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('demoProduct') }}">Crud-with-modal</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('demoname') }}">Form Live-Validation</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('demo-company') }}">Three-Level Parent-Child Dropdowns</a>
        </li>

        @endif
        @endauth
      </ul>
      @endif
    </div>
  </div>
</nav>












              

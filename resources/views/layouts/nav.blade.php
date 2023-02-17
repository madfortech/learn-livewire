      <nav class="navbar navbar-light navbar-expand-md fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">music app</a>
          <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navcol-1">
            
                <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                  <li class="nav-item">
                    <a class="nav-link" href="#">about</a>
                  </li>
                  @auth
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('user.user.home') }}">home</a>
                    </li>
  
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        {{ Auth::user()->name }} 
                      </a>
                        <div class="dropdown-menu mt-2">
                          <a class="dropdown-item" href="{{route('user.user.home')}}">
                            Profile
                          </a>
                          <a class="dropdown-item" href="#">
                            Login Activity
                          </a>
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="route('logout')"
                              onclick="event.preventDefault();
                              this.closest('form').submit();">
                              {{ __('Log out') }}
                            </a>
                          </form>
                        </div>
                    </li>
                 
                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('login')}}">login</a>
                    </li>
                  @endauth
                @endif
                </ul>
             
            </div>
        </div>
      </nav>
      <!--End Navbar Comment-->

 
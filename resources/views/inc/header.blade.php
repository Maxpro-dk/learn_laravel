<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ route('home') }}">
          <span>
            Edgecut
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.index') }}">Liste des contacts</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.create')}}">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
          
            @guest
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            @endguest
            @auth
              <a href="">
                <span>
                {{ auth()->user()->email }}
                </span>
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <form method="POST" action="{{ route('logout') }}" class="form-inline">
                @csrf
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  Deconnexion
                </button>
              </form>
            @endauth
          
           


          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>
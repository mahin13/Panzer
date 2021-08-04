<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('index')}}">Panzer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('products')}}">Products</a></li>
<li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact</a></li>
          <li class="nav-item">
          <form class="form-inline my-2 my-lg-0" action="{{ route('search')}}" method="get">
       <div class="input-group mb-3">
  <input type="text" class="form-control" name="search" placeholder="Search Product" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2" action="{{ route('search')}}" method="get" ><i class="fa fa-search"></i></button>
</div>
      </form>
          </li>
        </ul>
        <ui class="navbar-nav ml-auto">
          @guest
                            @if (Route::has('login'))
                            <div class="product-item">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li></div>
                            @endif

                            @if (Route::has('register'))
                              <div class="product-item">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li></div>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="product-item d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ui>
      </div>
      
    </div>
  </div>
</nav>

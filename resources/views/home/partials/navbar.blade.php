
  <div class="site-wrap">

    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>PUSTAKA<span class="text-primary">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href="{{ url('/')}}">Home</a></li>
                  <li><a href="{{ route('book')}}">Books</a></li>
                  @guest
                  <li><a href="{{ route('login')}}">Login</a></li>
                  <li><a href="{{ route('register')}}">Register</a></li>
                  @else
                  <li class="has-children">
                    <a href="#">{{ auth()->user()->name}}</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                    Logout
                                    </a>
                        </li>
                    </ul>
                  </li>
                <li><a href="{{ route('products')}}">My History Book</a></li>

                  @endguest

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>

                </ul>





              </nav>
            </div>


          </div>
        </div>
      </div>
    </div>

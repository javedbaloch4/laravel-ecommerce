<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">LaravelShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/cart"><i class="fa fa-shopping-cart"></i> Cart
                        @if (Cart::instance('default')->count() > 0)
                            <strong>
                                ({{ Cart::instance('default')->count() }})
                            </strong>
                        @endif
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ auth()->check() ? auth()->user()->name : 'Account' }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        @if (!auth()->check())
                            <a class="dropdown-item " href="{{  url('user/login') }}">Sign In</a>
                            <a class="dropdown-item" href="{{  url('user/register') }}">Sign Up</a>
                        @else
                            <a class="dropdown-item" href="{{  url('user/profile') }}"><i class="fa fa-user"></i> Profile</a>
                            <hr>
                            <a class="dropdown-item" href="{{  url('user/logout') }}"><i class="fa fa-lock"></i> Logout</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

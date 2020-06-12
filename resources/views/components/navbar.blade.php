<nav class="navbar fixed-top navbar-expand-md navbar-dark navbar-color shadow-sm">
    <div class="container navbar-gambi">
        <a class="navbar-brand" href="{{ url('/')  }}">
            <img src="{{ URL::asset('assets/logo.png') }}" height="60">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav nav-list mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('sobre') }}">Sobre</a>
                </li>
                <li class="nav-item dropdown">
                    {{-- #TODO historia incompativel com ferrametas de acessibilidade  --}}
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    História
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="{{ url('historia/2020') }}">2020</a>
                        <a class="dropdown-item" href="{{ url('historia/2019') }}">2019</a>
                        <a class="dropdown-item" href="{{ url('historia/2018') }}">2018</a>
                        <a class="dropdown-item" href="{{ url('historia/2017') }}">2017</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('apoio') }}">Apoio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@section('navbar')
<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
        @guest

        @else
            @role('admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events') }}">{{ __('Eventos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('schedule.index') }}">{{ __('Agenda') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }} </a>
                    </li>
                @endif
            @endrole
            @role('user')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Registro') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events') }}">{{ __('Eventos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('schedule.index') }}">{{ __('Agenda') }}</a>
                </li>
            @endrole
        @endguest
    </ul>
    <ul class="navbar-nav ml-auto" style="margin-right: 0px; float: right;">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
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
@endsection
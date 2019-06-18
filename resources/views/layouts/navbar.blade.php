@section('navbar')
<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
        @guest

        @else
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('Home') }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('events') ? 'active' : '' }}" href="{{ route('events') }}">{{ __('Agenda') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('schedule.index') ? 'active' : '' }}" href="{{ route('schedule.index') }}">{{ __('Agendamento') }}</a>
            </li>
            @role('admin')
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Usuarios') }} </a>
                    </li>
                @endif
            @endrole
            @role('user')

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
<nav class="navbar navbar-expand-lg bg-color-secundary px-5 " data-bs-theme="dark">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/images/logos/clevr5.png" alt="logotipo clevr" width="90" height="90" class="img-fluid">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center  " id="navbarNavDropdown">
            <!-- Navigation Links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a href="{{ route('courses.index') }}" class="nav-link">
                            {{ __('Courses') }}
                        </a>
                    </li>

                    @auth
                        @if (auth()->user()->is_admin)
                            <li class="nav-item">
                                <a href="{{ route('admin.users') }}" class="nav-link">
                                    {{ __('Admin') }}
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('student.dashboard') }}" class="nav-link">
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                {{ __('Log in') }}
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endif
                    @endauth

                @endif
            </ul>
            <!-- Settings Dropdown -->
            <div class="dropdown">
                @if (Auth::check())
                    <a class="btn btn-outline-dark text-white ronded border dropdown-toggle" href="#"
                        id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                @endif
                <ul class="dropdown-menu">


                    <!-- Profile Link -->
                    <li>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            {{ __('Profile') }}
                        </a>
                    </li>
                    <!-- Authentication -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')" class="dropdown-item"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

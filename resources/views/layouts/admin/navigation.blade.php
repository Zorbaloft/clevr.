<nav class="navbar navbar-expand-lg bg-color-secundary px-5" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-house"></i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav  ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('admin.users') ? 'active' : '' }}"
                        href="{{ route('admin.users') }}"> {{ __('Utilizadores') }} </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.courses') }}"
                        class="nav-link {{ Route::is('admin.courses') ? 'active' : '' }}">
                        {{ __('Cursos') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.enrollments') }}"
                        class="nav-link {{ Route::is('admin.enrollments') ? 'active' : '' }}">
<<<<<<< HEAD
                        {{ __('Inscricoes') }}
=======
                        {{ __('Inscricões') }}
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.reviews') }}" :active="request() - routeIs('admin.reviews')"
                        class="nav-link {{ Route::is('admin.reviews') ? 'active' : '' }}">
                        {{ __('Reviews') }}
                    </a>
                </li>
            </ul>
            <div class="dropdown">
                <a class="btn btn-outline-dark text-white ronded border dropdown-toggle" href="#"
                    id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu me-auto">


                    <!-- Profile Link -->
                    <li>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
<<<<<<< HEAD
                            {{ __('Profile') }}
=======
                            {{ __('Perfil') }}
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                        </a>
                    </li>
                    <!-- Authentication -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')" class="dropdown-item"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
<<<<<<< HEAD
                                {{ __('Log Out') }}
=======
                                {{ __('Sair') }}
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                            </a>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>

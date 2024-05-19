<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/x-icon" href="/images/favicon.png" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.student.navigation')


    <!-- Page Content -->
    <main>
        <div class="container-fluid mt-4">
            <div class="row">
                <nav id="sidebar" class="d-md-block bg-white sidebar col-12 col-md-4 ">
                    <div class="position-sticky">
                        <ul class="nav nav-pills flex-column gap-3">
                            <li class="nav-item">
                                <a class="nav-link fs-5 {{ request()->routeIs('student.dashboard') ? 'active' : '' }}" href="{{ route('student.dashboard') }}"><i class="bi bi-house"></i> {{('Dashboard')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5 {{ request()->routeIs('student.courses.index') ? 'active' : '' }}" href="{{ route('student.courses.index') }}"><i class="bi bi-book"></i> {{('Cursos')}} </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5 {{ request()->routeIs('reviews.index') ? 'active' : '' }}" href="{{route('reviews.index')}}"><i class="bi bi-suit-heart"></i> {{('As minhas Reviews')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5 {{ request()->routeIs('profile.edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}"><i class="bi bi-sliders2-vertical"></i> {{('Perfil')}}</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Content -->
                <div class="tab-content col-12 col-md-8 " id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="card">
                            <div class="w-full m-4">
                                <div class=" bg-white  mx-auto ">
                                    <div class="p-4 ">
                                        {{ $slot }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

</body>

</html>

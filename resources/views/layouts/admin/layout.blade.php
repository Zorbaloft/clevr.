<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="/images/favicon.png" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body >
   
        @include('layouts.admin.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header>
                <div class="bg-white p-4 mb-5">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
          
        </main>
        <footer>
            @include('layouts.footer')
        </footer>
    
</body>

</html>

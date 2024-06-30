<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Language" content="en">
    <meta name="description" content="">

    <link rel="icon" type="image/x-icon" href="/images/favicon.png" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/404.scss', 'resources/js/404.js'])
  
</head>

<body>
    <div class="box">
        <div class="box__ghost">
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>
          
          <div class="box__ghost-container">
            <div class="box__ghost-eyes">
              <div class="box__eye-left"></div>
              <div class="box__eye-right"></div>
            </div>
            <div class="box__ghost-bottom">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
          <div class="box__ghost-shadow"></div>
        </div>
        
        <div class="box__description">
          <div class="box__description-container">
            <div class="box__description-title">Whoops!</div>
            <div class="box__description-text">It seems like we couldn't find the page you were looking for</div>
          </div>
          
          <a href="{{ route('home') }}"  class="box__button">Go back</a>   {{-- ????? --}}
          
        </div>
        
      </div>
</body>

</html>

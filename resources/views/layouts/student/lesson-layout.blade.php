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
    @php
        $widthPercentClass = 'width:' . $percentCourseCompleted . '%';
    @endphp
    <header class="d-flex justify-content-start bg-white border m-2">
        <div class="p-4">
            <a href="{{ route('student.dashboard') }}" class="d-block mb-3">
                <i class="bi bi-arrow-left"></i> Go to Dashboard
            </a>

            <h1 class="text-3xl mb-3">{{ $course->title }}</h1>

            <div class="progress mb-2">
                <div class="progress-bar bg-primary" role="progressbar" style="{{ $widthPercentClass }}"
                    aria-valuenow="{{ $percentCourseCompleted }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="mb-1 text-sm font-medium">
                <span class="font-semibold">{{ $percentCourseCompleted }}%</span> complete
            </div>
        </div>
    </header>
    <div class="d-flex align-items-start">
        <div class="list-group">
            @foreach ($lessons as $lesson)
                <a href="{{ route('student.courses.lessons.show', [$course->slug, $lesson->order]) }}"
                    class="list-group-item  list-group-item-action border ps-5 ">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <x-courses.list-lessons :lesson="$lesson" />
                        </div>
                        <div class="col-2">
                            @if ($lesson['completed'])
                                <i class="bi bi-check fs-5"></i>
                            @endif
                        </div>
                    </div>
                </a>
                
            @endforeach
        </div>
        <div class="card ms-3 w-100">
            <div class="">
                <div class=" bg-white  ">
                    <div class="p-4 ">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</body>

</html>

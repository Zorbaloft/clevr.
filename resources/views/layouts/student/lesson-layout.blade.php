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
        <nav class="nav flex-column nav-pills w-25 me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @foreach ($lessons as $lesson)
                <a href="{{ route('student.courses.lessons.show', [$course->slug, $lesson->id]) }}"
                    class="nav-link text-center border mb-3 bg-white text-decoration-none ">
                    <button id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                        role="tab" aria-controls="v-pills-home" aria-selected="{{ old('lesson') == $lesson->id }}"
                        class="btn">
                        <div class="row align-items-center">
                            <!-- Circle -->
                            <div class="col-2">
                                @if ($lesson['completed'])
                                    <i class="bi bi-check fs-5"></i>
                                @endif
                            </div>
                            <div class="col-10">
                                <x-courses.list-lessons :lesson="$lesson" />
                            </div>
                        </div>
                    </button>
                </a>
            @endforeach
        </nav>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card">
                    <div class="w-full m-4">
                        <div class=" bg-white shadow-lg  mx-auto rounded-xl">
                            <div class="p-4 ">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>

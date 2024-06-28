<div class="row p-5">
    {{-- Course Card --}}
    <div class="col-lg-8">
        <div class="card mb-3">
            <img src="{{ asset($course->image_path) }}" class="img-fluid" alt="Course image thumbnail.">
            <div class="card-body ">
                <x-courses.card-content :course="$course">

                </x-courses.card-content>

            </div>
        </div>
    </div>
    {{-- List of course's lessons --}}
    <div class="col-lg-4">
        <h1 class="h2 fw-bold mb-3 d-flex justify-content-md-between "> {{ __('Conteudo do curso:') }} <p class="card-text"><small
                    class="text-muted">{{ count($lessons) }} Aulas</small></p>
        </h1>
        <div class="list-group">
            @foreach ($lessons as $lesson)
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $lesson->title }}</h5>
                        <small>{{ $lesson->duration }} mins</small>
                    </div>
                
                </a>
            @endforeach
        </div>
    </div>
</div>

{{-- Description of the course --}}
<div class="container mb-5 py-5">
    {!! $course->description !!}
</div>
{{ $slot }}

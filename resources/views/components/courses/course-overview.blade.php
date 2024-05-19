<div class="row p-5">
    {{-- Course Card --}}
    <div class="col-lg-8">
        <div class="container">
            <img src="{{ asset($course->image_path) }}" class="img-fluid" alt="Course image thumbnail.">
            <div class="card-body">
                <x-courses.card-content :course="$course">
                    <div class="d-flex align-items-center mb-3">
                        <p class="">
                            {{ count($lessons) }} Aulas</p>
                    </div>
                    <!-- More divs with similar structure -->
                </x-courses.card-content>
            </div>
        </div>
    </div>
    {{-- List of course's lessons --}}
    <div class="col-lg-4">
        <h1 class="h2 fw-bold "> {{ __('Conteudo do curso') }}</h1>
        @foreach ($lessons as $lesson)
            <div class="">
                <x-courses.list-lessons :lesson="$lesson" />
            </div>
        @endforeach
    </div>
</div>

{{-- Description of the course --}}
<div class="container mb-5 py-5">
    {!! $course->description !!}
</div>
{{ $slot }}

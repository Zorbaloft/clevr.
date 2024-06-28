<x-student.layout>
    <!-- Main Content -->

    {{-- heading --}}
    <div class=" pb-2 mb-3 border-bottom">
        <h1 class=" text-black">
            {{ __('Os meus cursos') }}
        </h1>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3  mt-3">
        @foreach ($data['courses'] as $course)
            <div class="col">
                <div class="card shadow-lg">
                    @if (count($course->lessons) > 0)
                        <a href="{{ route('student.courses.lessons.show', [$course->slug, $course->lessons[0]->id]) }}"
                            class="text-decoration-none text-dark">
                            <img src="{{ asset($course->image_path) }}" alt="Course image thumbnail."
                                class="card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text">{{ $course['percent'] }}%</p>
                            </div>
                        </a>
                        {{-- BUTTONS BELOW COURSE CARD --}}
                        <div class="card-footer">
                            @if ($course['percent'] !== 100)
                                {{-- SEE OVERVIEW --}}
                                <a href="{{ route('student.courses.show', $course->slug) }}"
                                    class="btn btn-outline-primary w-100">
                                    {{ __('Ver Detalhes') }}
                                </a>

                                {{-- RESUME COURSE --}}
                                <a href="{{ route('student.courses.lessons.show', [$course->slug, $course->lessons[0]->id]) }}"
                                    class="btn btn-outline-primary w-100 mt-2">
                                    {{ __('Resumir Curso') }}
                                </a>
                            @else
                                {{-- RATE THIS COURSE --}}
                                <a href="{{ route('student.courses.reviews.create', $course->slug) }}"
                                    class="btn btn-outline-primary w-100">
                                    {{ __('Deixa uma Review ') }}
                                </a>

                                {{-- REPLAY COURSE --}}
                                <a href="{{ route('student.courses.lessons.show', [$course->slug, $course->lessons[0]->id]) }}"
                                    class="btn btn-outline-primary w-100 mt-2">
                                    {{ __('Rever Curso') }}
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-student.layout>

<x-flash-message />
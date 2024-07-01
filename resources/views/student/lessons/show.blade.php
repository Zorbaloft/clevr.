<x-student.lesson-layout :course=$data[0] :lessons="$data[0]['lessons']" :percentCourseCompleted="$data[0]['percentCompleted']" :nbLessonsCompleted="$data[0]['nbLessonsCompleted']" :showCongratulations="$data[0]['showCongratulations']">
    <div class="">
        <h1 class=" fw-bold fs-1">{{ $data[0]['lesson']->title }}</h1>
    </div>
    <div class="d-flex justify-content-center">
        @if ($data[0]['lesson']->video_path)
            <video width="100%" height="auto" controls>
                <source src="{{ asset($data[0]['lesson']->video_path) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif

    </div>
    {!! $data[0]['lesson']->content !!}
    <div class="sticky-bottom border-top py-4 text-center">
        <div class="d-flex justify-content-center align-items-center gap-3">
            @if ($data[0]['lessonCompleted'])
                <form action="{{ route('student.courses.lessons.show', [$data[0]->slug, $data[0]['lesson']->order]) }}">
                    <button type="submit" class="btn btn-outline-primary" name="action" value="mark_incomplete">
                        {{ __('Marcar Incompleto') }}
                    </button>
                </form>
                @php
                    $currentLesson = $data[0]['lesson']->id;

                    if (!is_null($data[0]['lesson']->next_lesson)) {
                        $currentLesson = $data[0]['lesson']->next_lesson;
                    }
                @endphp
                <form action="{{ route('student.courses.lessons.show', [$data[0]->slug, $currentLesson]) }}">
                    <button type="submit" class="btn btn-primary" name="action" value="continue">
                        {{ __('Continuar') }}
                    </button>
                </form>
            @else
                <form
                    action="{{ route('student.courses.lessons.show', [$data[0]->slug, !is_null($data[0]['lesson']->next_lesson) ? $data[0]['lesson']->next_lesson : $data[0]['lesson']->order]) }}">
                    <button type="submit" class="btn btn-primary"
                        value="complete_and_continue, {{ $data[0]['lesson']->id }}"
                        name="action">{{ __('Completar & Continuar') }}</button>
                </form>
            @endif
        </div>
    </div>
</x-student.lesson-layout>
<x-congratulations :show="$data[0]['showCongratulations']" :name="Auth::user()->name" :course="$data[0]['course']" />

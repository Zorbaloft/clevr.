<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Atualizar aula') }}
        </h2>
        <p class="pt-4 fs-3">
            {{ __('Titulo do Curso: ' . $course->title) }}
        </p>
    </x-slot>
    <!-- UPDATE LESSON -->
    <form method="post" action="{{ route('admin.courses.lessons.update', [$course->slug, $lesson->id]) }}"
        class="mt-10 space-y-6 container mx-auto" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label class="form-label" for="title">{{ __('Titulo') }}</label>
            <input id="title" name="title" type="text" class="form-control"
                value="{{ old('title', $lesson->title) }}" required autofocus autocomplete="title">
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <div class="form-group">
            <label for="order" class="form-label">{{ __('Ordem da Aula') }}</label>
            <input id="order" name="order" type="number" class="form-control mt-1" required autofocus
                autocomplete="order" value="{{ old('order', $lesson->order) }}" />
            <x-input-error class="mt-2" :messages="$errors->get('order')" />
        </div>

        <div class="form-group">
            <label for="video" class="form-label">{{ __('Video:') }}</label>
            <input id="video" name="video" type="file" class="form-control mt-1" accept="video/mp4">
            <x-input-error class="mt-2" :messages="$errors->get('video')" />
        </div>

        <div class="form-group">
            <label class="form-label" for="content">{{ __('Conteudo') }}</label>
            <textarea id="content" name="content" rows="10" class="form-control" required autofocus autocomplete="title">{!! $lesson->content !!}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('content')" />
        </div>



        <div class="form-group">
            <label class="form-label" for="courseId">{{ __('ID do curso') }}</label>
            <input id="courseId" name="courseId" type="text" class="form-control"
                value="{{ old('courseId', $lesson->course_id) }}" required autocomplete="courseId">
            <x-input-error class="mt-2" :messages="$errors->get('courseId')" />
        </div>

        <div class="form-group">
            <label class="form-label" for="duration">{{ __('Duração') }}</label>
            <input id="duration" name="duration" type="text" class="form-control"
                value="{{ old('duration', $lesson->duration) }}" required autocomplete="duration">
            <x-input-error class="mt-2" :messages="$errors->get('duration')" />
        </div>

        <div class="form-group">


            <label class="form-label" for="next_lesson">{{ __('Proxima aula') }}</label>
            <input id="next_lesson" name="next_lesson" type="text" class="form-control"
                value="{{ old('next_lesson', $lesson->next_lesson) }}" autocomplete="next_lesson">
            <x-input-error class="mt-2" :messages="$errors->get('next_lesson')" />
        </div>
        <button type="submit" class="btn btn-success my-3">Atualizar aula</button>
    </form>
    <!-- DELETE LESSON -->
    <form method="post" action="{{ route('admin.courses.lessons.destroy', [$course->slug, $lesson->id]) }}"
        class="container mx-auto">
        @csrf
        @method('delete')


        <button class="btn btn-danger mt-2">{{ __('Apagar aula') }}</button>


    </form>

</x-admin.layout>

<x-flash-message />

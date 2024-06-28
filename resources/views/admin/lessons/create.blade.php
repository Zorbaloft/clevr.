<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Criar Aula') }}
        </h2>
        <p class="pt-4">
            {{ __('Titulo do Curso: ' . $course->title) }}
        </p>
    </x-slot>


    <!-- CREATE LESSON -->
    <form method="post" action="{{ route('admin.courses.lessons.store', $course->slug) }}"
        class="container mx-auto " enctype="multipart/form-data">
        @csrf

        <div class="form-group">
<<<<<<< HEAD
            <label for="title" class="form-label">{{ __('Titulo:') }}</label>
=======
            <label for="title" class="form-label">{{ __('Título:') }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <input id="title" name="title" type="text" class="form-control mt-1" required autofocus
                autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div class="form-group">
            <label for="order" class="form-label">{{ __('Ordem da Aula') }}</label>
            <input id="order" name="order" type="number" class="form-control mt-1" autofocus
                autocomplete="order" />
            <x-input-error class="mt-2" :messages="$errors->get('order')" />
        </div>
        <div class="form-group">
            <label for="video" class="form-label">{{ __('Video:') }}</label>
            <input id="video" name="video" type="file" class="form-control mt-1" accept="video/mp4">
            <x-input-error class="mt-2" :messages="$errors->get('video')" />
        </div>

        <div class="form-group">
<<<<<<< HEAD
            <label for="content" class="form-label">{{ __('Conteudo:') }}</label>
=======
            <label for="content" class="form-label">{{ __('Conteúdo:') }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <textarea id="content" name="content" rows="10" class="form-control mt-1"></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('content')" />
        </div>

        <div>
<<<<<<< HEAD
            <label for="courseId" class="form-label">{{ __('Id do Curso:') }} </label>
=======
            <label for="courseId" class="form-label">{{ __('ID do Curso:') }} </label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <input id="courseId" name="courseId" type="text" class="form-control mt-1"
                value="{{ old('courseId', $course->id) }}" autocomplete="courseId" />
            <x-input-error class="mt-2" :messages="$errors->get('courseId')" />
        </div>

        <div class="form-group">
<<<<<<< HEAD
            <label for="duration" class="form-label">{{ __('Duracao da Aula') }}</label>
=======
            <label for="duration" class="form-label">{{ __('Duração da Aula') }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <input id="duration" name="duration" type="text" class="form-control mt-1" required autofocus
                autocomplete="duration" />
            <x-input-error class="mt-2" :messages="$errors->get('duration')" />
        </div>

       

        <div class="form-group">

            <label for="next_lesson" class="form-label">{{ __('Proxima aula') }}</label>
            <input id="next_lesson" name="next_lesson" type="text" class="form-control mt-1" autofocus
                autocomplete="next_lesson" />
            <x-input-error class="mt-2" :messages="$errors->get('next_lesson')" />
        </div>


        <button type="submit" class=" my-3 btn btn-primary">{{ __('Criar') }}</button>

    </form>

</x-admin.layout>
<x-flash-message />
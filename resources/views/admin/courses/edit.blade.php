<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Atualizar Curso') }}
        </h2>
    </x-slot>

    <div class="bg-white">
        <!-- UPDATE COURSE -->
        <form method="post" action="{{ route('admin.courses.update', $course->slug) }}" enctype="multipart/form-data"
            class="space-y-6 container mx-auto">
            @csrf
            @method('patch')

            <div class="form-group">
                <label class="form-label" for="title">{{ __('Titulo') }}</label>
                <input id="title" name="title" type="text" class="form-control"
                    value="{{ old('title', $course->title) }}" required autofocus autocomplete="title">
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            <div class="form-group">
                <label class="form-label" for="description">{{ __('Descrição') }}</label>
                <textarea id="description" name="description" type="text" class="form-control" rows="10">{!! $course->description !!}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div>

            <div class="form-group">
                <label class="form-label" for="excerpt">{{ __('Excerto') }}</label>
                <input id="excerpt" name="excerpt" type="text" class="form-control"
                    value="{{ old('excerpt', $course->excerpt) }}" required autofocus autocomplete="excerpt">
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="imagePath">{{ __('Imagem') }}</label>
                <img src="{{ asset($course->image_path) }}" alt="{{ $course->slug }}" class="w-25 img-fluid my-4">
                <input name="imagePath" type="file" class="form-control"
                    value="{{ old('imagePath', $course->image_path) }}" @error('imagePath') is-invalid @enderror>
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div class="form-group">

            <div class="form-group">
                <label class="form-label" for="excerpt">{{ __('Slug') }}</label>
                <input id="slug" name="slug" type="text" class="form-control"
                    value="{{ old('slug', $course->slug) }}" required autocomplete="slug">
                <x-input-error class="mt-2" :messages="$errors->get('slug')" />
            </div>


            <div class="form-group">
                <label class="form-label" for="price">{{ __('Preço') }}</label>
                <input id="price" name="price" type="text" class="form-control"
                    value="{{ old('price', $course->price) }}" required autocomplete="price">
                <x-input-error class="mt-2" :messages="$errors->get('price')" />
            </div>

            <div class="form-group">
                <label class="form-label" for="level">{{ __('Nível') }}</label>
                <select id="level" name="level" class=" form-select w-25">
                    @foreach ($course_levels as $course_level)
                        <option {{ strtolower($course_level) === strtolower($course->level) ? 'selected' : '' }}
                            value="{{ $course_level }}">{{ $course_level }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('level')" />
            </div>

            <div class="form-group">
                <label class="form-label" for="status">{{ __('Status') }}</label>
                <select id="status" name="status" class=" form-select w-25">
                    @foreach ($course_status as $status)
                        <option {{ strtolower($course_level) === strtolower($course->level) ? 'selected' : '' }}
                            value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>



            <button type="submit" class="btn btn-primary mt-5">Gravar</button>

        </form>
        {{-- DELETE COURSE --}}
        <form method="post" action="{{ route('admin.courses.destroy', $course->slug) }}" class="container mt-2 ">
            @csrf
            @method('delete')


            <button type="submit" class="btn btn-danger">Apagar curso</button>

        </form>

        <!-- DISPLAY LESSONS TO BE UPDATED -->
        <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-3xl  mt-3">
                    Aulas
                </h2>
            </div>
            <!-- ADD LESSON -->
            <div class="text-end">
                <a href="{{ route('admin.courses.lessons.create', $course->slug) }}" class="btn btn-primary ">Add</a>
            </div>

            <div class="table-responsive table-hover">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th class="px-4 py-2">{{ __('ID') }}</th>
                            <th class="px-4 py-2">{{ __('Título') }}</th>
                            <th class="px-4 py-2">{{ __('ID do Curso') }}</th>
                            <th class="px-4 py-2">{{ __('Duração [min]') }}</th>
                            <th class="px-4 py-2">{{ __('Número da Aula') }}</th>
                            <th class="px-4 py-2">{{ __('Próxima aula') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr class="text-center"
                                onclick="window.location='{{ route('admin.courses.lessons.edit', [$course->slug, $lesson->id]) }}';">
                                <td class="px-4 py-2">{{ $lesson->id }}</td>
                                <td class="px-4 py-2">{{ $lesson->title }}</td>
                                <td class="px-4 py-2">{{ $lesson->course_id }}</td>
                                <td class="px-4 py-2">{{ $lesson->duration }}</td>
                                <td class="px-4 py-2">{{ $lesson->order }}</td>
                                <td class="px-4 py-2">{{ $lesson->next_lesson }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-8">
                    {{ $lessons->links() }}
                </div>
            </div>

        </div>
    </div>
</x-admin.layout>

<x-flash-message />

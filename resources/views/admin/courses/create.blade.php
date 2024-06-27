<x-admin.layout>
    <x-slot name="header">
        <h2 class=" text-secondary ">
            {{ __('Criar Curso') }}
        </h2>
    </x-slot>

    <div class="bg-white">


        <!-- CREATE COURSE -->
        <form method="post" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data"
            class=" container mx-auto ">
            @csrf
            <div class="form-group">
                <label class="form-label" for="title">{{ __('Titulo') }}</label>
                <input id="title" name="title" type="text" class="form-control" required autofocus
                    autocomplete="title" />
                <x-input-error class="mt-2" :messages="$errors->get('title')" />

            </div>

            <div class="form-group">
                <label class="form-label" for="description">{{ __('Descricao') }}</label>
                <textarea id="description" name="description" rows="10" class="form-control"></textarea>
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div>

            <div class="form-group">
                <label class="form-label" for="excerpt">{{ __('Excerto') }}</label>
                <input id="excerpt" name="excerpt" type="text" class="form-control" required
                    autocomplete="excerpt" />
                <x-input-error class="mt-2" :messages="$errors->get('excerpt')" />
            </div>
            <div class="form-group">
                <label for="imagePath" class="form-label">{{ __('Caminho da Imagem:') }}</label>
                <input type="file" class="form-control mt-1" name="imagePath"
                    @error('imagePath') is-invalid @enderror>
                <x-input-error class="mt-2" :messages="$errors->get('imagePath')" />
            </div>

            <div class="form-group">
                <label for="slug" class="form-label">{{ __('Slug') }}</label>
                <input id="slug" name="slug" type="text" class="form-control mt-1" required
                    autocomplete="slug" />
                <x-input-error class="mt-2" :messages="$errors->get('slug')" />
            </div>

            <div class="form-group">
                <label for="price" class="form-label">{{ __('Preço') }}</label>
                <input id="price" name="price" type="text" class="form-control mt-1" required
                    autocomplete="price" />
                <x-input-error class="mt-2" :messages="$errors->get('Preço')" />
            </div>

            <div class="form-group">
                <label for="level" class="form-label">{{ __('Nivel') }}</label>
                <select id="level" name="level" class="form-control mt-1">
                    @foreach ($course_levels as $course_level)
                        <option value="{{ $course_level }}">{{ $course_level }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('level')" />
            </div>

            <div class="form-group">
                <label for="status" class="form-label">{{ __('Status') }}</label>
                <select id="status" name="status" class="form-control mt-1">
                    @foreach ($course_status as $status)
                        <option value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>

            <div class="form-group">
                <label for="access" class="form-label">{{ __('Tempo de Acesso') }}</label>
                <input id="access" name="access" type="text" class="form-control mt-1" autocomplete="access" />
                <x-input-error class="mt-2" :messages="$errors->get('access')" />
            </div>
            <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-success my-3">{{ __('Criar') }}</button>
            </div>
        </form>
    </div>
</x-admin.layout>

<x-flash-message />

<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Atualizar Review') }}
        </h2>
    </x-slot>


    <!-- DELETE REVIEW -->
    <form method="post" action="{{ route('admin.reviews.destroy', $review->id) }}" class="container mx-auto">
        @csrf
        @method('delete')

        <div class="flex gap-4 justify-end">
            <button class="btn btn-danger" type="submit">{{ __('Delete') }}</button>
        </div>
    </form>

    <!-- UPDATE REVIEW -->
    <form method="post" action="{{ route('admin.reviews.update', $review->id) }}" class="space-y-6 container mx-auto">
        @csrf
        @method('patch')

        <div>
            <label class="form-label" for="title">{{ __('Titulo') }}</label>
            <input id="title" name="title" type="text" class="form-control"
                value="{{ old('title', $review->title) }}" required autofocus autocomplete="title">
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <div>
            <label class="form-label" for="content">{{ __('Texto') }}</label>
            <input id="content" name="content" type="text" class="form-control"
                value="{{ old('content', $review->content) }}" required autofocus autocomplete="content">
            <x-input-error class="mt-2" :messages="$errors->get('content')" />
        </div>

        <!-- Dropdown search courses -->
        <div class="mt-4">
            <label for="courses">{{ __('Cursos') }}</label>
            <div class="border w-100 mt-1">
                <ul class="h-48 p-1 pb-3 text-sm list-unstyled">
                    @foreach ($courses as $course)
                        <li>
                            <div class="flex items-center ps-2 rounded hover:bg-primary">
                                <input id="{{ $course->slug }}" type="radio" value="{{ $course->id }}"
                                    name="course" class="text-primary"
                                    {{ $review->course()->first()->id === $course->id ? 'checked' : '' }}>
                                <label for="{{ $course->slug }}"
                                    class="w-50 py-2 ms-2 text-sm">{{ $course->title }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('courses')" />
        </div>

        <!-- Dropdown search users -->
        <div class="mt-4">
            <x-input-label for="users" :value="__('Users')" />
            <div class="border w-100 mt-1">
                <ul class="h-48 p-1 pb-3 overflow-y-auto text-sm text-gray-700">
                    @foreach ($users as $user)
                        <li>
                            <div class="flex items-center ps-2 rounded hover:bg-primary">
                                <input id="{{ $user->id }}" type="radio" value="{{ $user->id }}"
                                    name="user"
                                    class="text-primary bg-gray-100 border-gray-300 focus:ring-primary hover:cursor-pointer"
                                    {{ $review->user()->first()->id === $user->id ? 'checked' : '' }}>
                                <label for="{{ $user->id }}"
                                    class="w-50 py-2 ms-2 list-unstyled">{{ $user->name }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('users')" />
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">{{ __('Rating') }}</label>
            <div class="d-flex flex-column" data-bs-toggle="buttons">
                <div class="d-flex flex-row gap-3">
                    <label class="btn btn-outline-primary" onclick="setRating(1)">
                        <input type="radio" name="rating" id="rating1" autocomplete="off"> 🤨
                    </label>
                    <label class="btn btn-outline-primary" onclick="setRating(2)">
                        <input type="radio" name="rating" id="rating2" autocomplete="off"> 🙂
                    </label>
                    <label class="btn btn-outline-primary" onclick="setRating(3)">
                        <input type="radio" name="rating" id="rating3" autocomplete="off"> 😊
                    </label>
                    <label class="btn btn-outline-primary" onclick="setRating(4)">
                        <input type="radio" name="rating" id="rating4" autocomplete="off"> 😚
                    </label>
                    <label class="btn btn-outline-primary" onclick="setRating(5)">
                        <input type="radio" name="rating" id="rating5" autocomplete="off"> 😍
                    </label>
                </div>
                <input id="rating" type="hidden" name="rating" />
            </div>
        </div>

        <script>
            function setRating(value) {
                document.getElementById('rating').value = value;
            }
        </script>

        <div class="flex items-center gap-4 py-8">
            <button class="btn btn-primary" type="submit">{{ __('Atualizar') }}</button>
        </div>
    </form>

</x-admin.layout>

<x-flash-message />

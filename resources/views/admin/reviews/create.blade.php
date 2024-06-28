<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Criar Review') }}
        </h2>
    </x-slot>

    <div class="bg-white">


        <!-- CREATE REVIEW -->
        <form method="post" action="{{ route('admin.reviews.store') }}" class=" container mx-auto mb-5">
            @csrf
            <!-- Title -->
            <div>
<<<<<<< HEAD
                <label class="form-label" for="title">{{ __('Titulo') }}</label>
=======
                <label class="form-label" for="title">{{ __('Título') }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                <input id="title" name="title" type="text" class="form-control" required autofocus
                    autocomplete="title">
                <x-input-error class="mt-2" :messages="$errors->get('title')" />

            </div>
            <!-- Content -->
            <div>
<<<<<<< HEAD
                <label class="form-label" for="content">{{ __('Content') }}</label>
=======
                <label class="form-label" for="content">{{ __('Conteúdo') }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
                <textarea id="content" name="content" type="text" rows="4" class="form-control" required autofocus
                    autocomplete="name"></textarea>
                <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <!-- Dropdown search courses -->
            <div class="mt-4">
                <label for="courses"> {{ __('Cursos') }}</label>
                <div class="border rounded  w-100 mt-1 ">
                    <ul class="h-50 p-1 pb-3  text-sm list-unstyled ">
                        @foreach ($courses as $course)
                            <li>
                                <div class="flex items-center ps-2 rounded ">
                                    <input id="{{ $course->slug }}" type="radio" value="{{ $course->id }}"
                                        name="course" class="text-primary ">
                                    <label for="{{ $course->slug }}"
                                        class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded hover:text-white  hover:cursor-pointer">{{ $course->title }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('courses')" />
            </div>
            <!-- Dropdown search users -->
            <div class="mt-4">
                <label for="users">{{ __('Utilizadores') }}</label>
                <div class="border  rounded  w-100 mt-1 ">
                    <ul class="h-50 p-1 pb-3 text-sm list-unstyled">
                        @foreach ($users as $user)
                            <li>
                                <div class="flex items-center ps-2 rounded hover:bg-primary">
                                    <input id="{{ $user->id }}" type="radio" value="{{ $user->id }}"
                                        name="user" class="text-primary ">
                                    <label for="{{ $user->id }}"
                                        class="w-50 py-2 ms-2 text-sm font-medium rounded">{{ $user->name }}</label>
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
                <button class="btn btn-primary" type="submit">{{ __('Criar') }}</button>
            </div>
        </form>
    </div>
</x-admin.layout>
<x-flash-message />

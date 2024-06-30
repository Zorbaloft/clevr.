<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Criar Utilizador') }}
        </h2>
    </x-slot>
    <div class="bg-white">


        <!-- CREATE user -->
        <form method="post" action="{{ route('admin.users.store') }}" enctype="multipart/form-data"
            class=" container mx-auto ">
            @csrf

            <!-- Name -->
            <div>
                <label class="form-label" for="name"> {{ 'Nome' }}</label>
                <input id="name" class="form-control" type="text" name="name" required autofocus
                    autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label class="form-label" for="email">{{ 'Email' }}</label>
                <input id="email" class="form-control" type="email" name="email" required
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label class="form-label" for="password">{{ 'Password' }}</label>
                <input id="password" class="form-control" type="password" name="password" required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Role -->
            <div class="mt-4">
                <label class="form-label" for="is_admin">{{ 'Role' }}</label>
                <select id="is_admin" name="is_admin" class="form-select">
                    <option selected value="0">{{ __('Student') }}</option>
                    <option value="1">{{ __('Admin') }}</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('is_admin')" />
            </div>

            <!-- Dropdown search course enrollment -->
            <div class="mt-4">
                <label for="enrollments" class="form-label">{{ 'Inscrições' }}</label>
                <div class="border  rounded-lg w-100 mt-1 ">
                    <ul class="h-48 p-1 pb-3 overflow-auto text-gray-700">
                        @foreach ($courses as $course)
                            <li>
                                <div class="d-flex align-items-center ps-2 rounded hover:bg-primary">
                                    <input id="{{ $course->slug }}" type="checkbox" value="{{ $course->id }}"
                                        name="courses[]" class="form-check-input">
                                    <label class="form-check-label ms-2"
                                        for="{{ $course->slug }}">{{ $course->title }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @if ($errors->has('enrollments'))
                    <div class="mt-2 text-danger">{{ $errors->first('enrollments') }}</div>
                @endif
            </div>

            <button class="btn btn-primary my-3">{{ __('Criar utilizador') }}</button>

        </form>
    </div>
</x-admin.layout>

<x-flash-message />

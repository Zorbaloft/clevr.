<section>
    <header>
        <h2 class="font-semibold text-uppercase text-secondary  text-center">
            {{ __('A sua informação de perfil') }}
        </h2>
    </header>


    <form method="post" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label class="form-label" for="Name">{{ __('Nome') }}</label>
            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}"
                required autofocus autocomplete="name">
            <x-input-error class="mt-2" :messages="$errors->get('name')" />

        </div>
        <div class="mb-3">
            <label class="form-label"for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control"
                value="{{ old('email', $user->email) }}" required autocomplete="email">
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="update_password_password">{{ __('Password') }}</label>
            <input id="update_password_password" name="password" type="password" class="form-control"
                value="{{ old('email', $user->password) }}" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <label class="form-label" for="is_admin">{{ __('Role') }}</label>
        <select class="form-select" aria-label="Default select example" id="is_admin" name="is_admin">
            <option {{ $user->is_admin ? '' : 'selected' }} value="0">{{ __('Student') }}</option>
            <option {{ $user->is_admin ? 'selected' : '' }} value="1">{{ __('Admin') }}</option>
            <x-input-error class="mt-2" :messages="$errors->get('is_admin')" />
        </select>

        <div class="mt-4">
            <label for="enrollments" class="form-label">{{ __('inscrições') }}</label>
            <div class="border border-secondary rounded-lg w-100 mt-1 shadow-sm">
                <ul class="p-1 pb-3 list-group overflow-auto text-gray-700">
                    @foreach ($courses as $course)
                        <li class="list-group-item">
                            <div class="d-flex align-items-center ps-2 rounded ">
                                <input id="{{ $course->slug }}" type="checkbox" value="{{ $course->id }}"
                                    {{ $user->courses()->get()->contains($course) ? 'checked' : '' }} name="courses[]"
                                    class="form-check-input me-1">
                                <label for="{{ $course->slug }}" class="form-check-label">{{ $course->title }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            @if ($errors->has('enrollments'))
                <div class="mt-2 text-danger">{{ $errors->first('enrollments') }}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary my-5">Guardar</button>
    </form>
  
</section>

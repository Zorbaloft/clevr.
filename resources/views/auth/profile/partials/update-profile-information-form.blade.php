<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informação do Perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Atualiza a tua informação.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
<<<<<<< HEAD
            <label class="form-label" for="name"> {{ __('Name') }}</label>
=======
            <label class="form-label" for="name"> {{ __('Nome') }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <input id="name" name="name" type="text" class="form-control"
                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />

        </div>

        <div>

            <label class="form-label" for="name"> {{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control"
                value="{{ old('email', $user->email) }}" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />

        </div>
        <button type="submit" class="btn btn-success my-5">Guardar</button>
    </form>
</section>

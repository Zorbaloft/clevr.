<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
<<<<<<< HEAD
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
=======
            {{ __('Atualizar password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Certifique-se de que a sua conta esteja segura usando uma password longa e aleatória.') }}
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-5">
        @csrf
        @method('put')

        <div>
<<<<<<< HEAD
            <label class="form-label" for="update_password_current_password">{{ 'Current Password' }}</label>
=======
            <label class="form-label" for="update_password_current_password">{{ 'Password Atual' }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <input id="update_password_current_password" name="current_password" type="password" class="form-control"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
<<<<<<< HEAD
            <label class="form-label" for="update_password_password">{{ 'New Password' }}</label>
=======
            <label class="form-label" for="update_password_password">{{ 'Password Nova' }}</label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <input id="update_password_password" name="password" type="password" class="form-control"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
<<<<<<< HEAD
            <label class="form-label" for="update_password_password_confirmation">{{ 'Confirm Password' }} </label>
=======
            <label class="form-label" for="update_password_password_confirmation">{{ 'Confirmar Password' }} </label>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>


        <button class="btn btn-primary mt-3">{{ __('Guardar') }}</button>


    </form>
</section>
<x-flash-message/>

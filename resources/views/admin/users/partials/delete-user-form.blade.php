<section class="space-y-6">
    <header>
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Apagar conta') }}
        </h2>
    </header>

    <form method="post" action="{{ route('admin.users.destroy', $user->id) }}">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-primary my-5">{{ __('Apagar Conta') }}</button>
    </form>
</section>

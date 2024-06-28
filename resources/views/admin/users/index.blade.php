<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Utilizadores') }}
        </h2>
    </x-slot>

    <div class="py-5 bg-white">
        <div class="container mx-auto">
            <!-- ADD USER -->
            <div class="flex gap-4 justify-end mb-2">
                <a href="{{ route('admin.users.create') }}" class="btn btn-success">
                    {{ __('Adicionar') }}</a>
            </div>
            <!-- Search input -->
            <x-search-bar action="{{ route('admin.users') }}" method="GET" />
            <div class="table-responsive">
                <!-- Table -->
                <table class=" table table-hover">
                    <thead>
                        <tr class="">
                            <th scope="col" class="px-4 py-2">{{ __('ID') }}</th>
                            <th scope="col" class="px-4 py-2">{{ __('Nome') }}</th>
                            <th scope="col" class="px-4 py-2">{{ __('Email') }}</th>
                            <th scope="col" class="px-4 py-2">{{ __('Cargo') }}</th>
                            <th scope="col" class="px-4 py-2">{{ __('Nº de Cursos') }}</th>
                            <th scope="col" class="px-4 py-2">{{ __('Status') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- User 1 -->
                        @foreach ($users as $user)
                            <tr class="" onclick="window.location='{{ route('admin.users.edit', $user->id) }}';">
                                <td class="border px-4 py-2">{{ $user->id }}</td>
                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                <td class="border px-4 py-2">
                                    {{ $user->is_admin ? 'Admin' : 'Estudante' }}
                                </td>
                                <td class="border px-4 py-2 hover:text-red"><a
                                        href="{{ route('admin.enrollments.show', $user->id) }}"
                                        class="underline hover:text-primary">{{ count($user->courses()->get()) }}</a>
                                </td>
                                @if ($user->isOnline())
                                    <td class="border px-4 py-2">
                                        <div class="px-4 py-2 rounded bg-success text-white font-bold text-center">
                                            {{ __('Online') }}
                                        </div>
                                    </td>
                                @else
                                    <td class="border px-4 py-2">
                                        <div class="bg-danger px-4 py-2 rounded  text-white font-bold text-center">
                                            {{ __('Offline') }}
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-8">
                    {{ $users->links() }}
                </div>
            </div>

        </div>
</x-admin.layout>

<x-flash-message />

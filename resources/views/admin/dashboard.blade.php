<x-admin.layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-uppercase text-secondary ">
                {{ __('Admin Panel') }}
            </h2>
            <a href="{{ route('student.dashboard') }}"
                class="bg-primary hover:bg-secondary px-4 py-2 font-semibold text-xs text-white uppercase rounded-md">
                {{ __('Go to student dashboard') }}
            </a>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover w-75">
            <thead>
                <tr class="bg-gray-200">
                    <th class="col px-4 py-2">{{ __('ID') }}</th>
                    <th class="col px-4 py-2">{{ __('Name') }}</th>
                    <th class="col px-4 py-2">{{ __('Email') }}</th>
                    <th class="col px-4 py-2">{{ __('Role') }}</th>
                    <th class="col px-4 py-2">{{ __('Enrollments') }}</th>
                    <th class="col px-4 py-2">{{ __('Status') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white "  onclick="window.location='{{ route('admin.users.edit', $user->id) }}';">
                        <td class="border px-4 py-2">{{ $user->id }}</td>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">
                            {{ $user->is_admin ? 'Admin' : 'Student' }}
                        </td>
                        <td class="border px-4 py-2 hover:text-red"><a
                                href="{{ route('admin.enrollments.show', $user->id) }}"
                                class="underline hover:text-primary">{{ count($user->courses()->get()) }}</a>
                        </td>
                        @if ($user->isOnline())
                            <td class="border px-4 py-2">
                                <div class="px-4 py-2 rounded-full bg-success text-white font-bold text-center">
                                    {{ __('Online') }}
                                </div>
                            </td>
                        @else
                            <td class="border px-4 py-2">
                                <div class="px-4 py-2 rounded-full bg-danger text-white font-bold text-center">
                                    {{ __('Offline') }}
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>

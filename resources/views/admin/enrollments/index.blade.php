<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Inscrições') }}
        </h2>
    </x-slot>

    <div class="bg-white">
        <div class="container mx-auto pb-8">
            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">{{ __('Utilizador') }}</th>
                            <th class="px-4 py-2">{{ __('Curso') }}</th>
                            <th class="px-4 py-2">{{ __('Completado') }}</th>
                            <th class="px-4 py-2">{{ __('Inscrito a') }}</th>
                            <th class="px-4 py-2">{{ __('Data de expiração') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @foreach ($user->courses()->get() as $course)
                                <tr class=""
                                    onclick="window.location='{{ route('admin.enrollments.show', $user->id) }}';">
                                    <td class="px-4 py-2">[{{ $user->id }}] {{ $user->name }}</td>
                                    <td class="px-4 py-2">[{{ $course->id }}] {{ $course->title }}</td>
                                    <td class="px-4 py-2">{{ $course->pivot->percent }}%</td>
                                    <td class="px-4 py-2">{{ $course->pivot->created_at }}</td>
                                    <td class="px-4 py-2">
                                        @php
                                            $remainingDaysAccess = $course->remainingDaysAccess();
                                        @endphp
                                        <span
                                            class="{{ $remainingDaysAccess <= 10 ? 'text-red-500' : 'text-black' }}">{{ $remainingDaysAccess . __(' Dias restantes') }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.layout>

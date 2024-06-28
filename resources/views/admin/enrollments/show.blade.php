<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary  ">
            <p>{{ __('Inscrições de  ') }}<span class="text-primary">{{ $userName }}</span></p>
        </h2>
    </x-slot>

    <div class="bg-white">
        <div class="container mx-auto pb-8">
            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">{{ __('Curso') }}</th>
                            <th class="px-4 py-2">{{ __('Completado') }}</th>
                            <th class="px-4 py-2">{{ __('Inscrito a') }}</th>
                            <th class="px-4 py-2">{{ __('Data de expiração') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr class="">
                                <td class="px-4 py-2">{{ $course->title }}</td>
                                <td class="px-4 py-2">{{ $course->pivot->percent }}%</td>
                                <td class="px-4 py-2">{{ $course->pivot->created_at }}</td>
                                <td class="px-4 py-2">
                                    @php
                                        $remainingDaysAccess = $course->remainingDaysAccess();
                                    @endphp
                                    <span
                                        class="{{ $remainingDaysAccess <= 10 ? 'text-red-500' : 'text-black' }}">{{ $remainingDaysAccess . __(' days left') }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.layout>

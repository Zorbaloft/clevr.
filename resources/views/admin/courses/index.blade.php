<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="bg-white">
        <div class="container mx-auto">
            <!-- ADD COURSE -->
            <a href="{{ route('admin.courses.create') }}" class="btn btn-primary text-white my-3 rounded-lg">Adicionar curso</a>

            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-gray text-center">
                            <th scope="col">{{ __('ID') }}</th>
                            <th scope="col">{{ __('Title') }}</th>
                            <th scope="col">{{ __('Slug') }}</th>
                            <th scope="col">{{ __('Price') }}</th>
                            <th scope="col">{{ __('Level') }}</th>
                            <th scope="col">{{ __('Status') }}</th>

                            <th scope="col">{{ __('Duration [min]') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr class="text-center"
                                onclick="window.location='{{ route('admin.courses.edit', $course->slug) }}';">
                                <td class="px-4 py-2">{{ $course->id }}</td>
                                <td class="px-4 py-2">{{ $course->title }}</td>
                                <td class="px-4 py-2">{{ $course->slug }}</td>
                                <td class="px-4 py-2">{{ $course->price }}</td>
                                <td class="px-4 py-2">{{ $course->level }}</td>
                                <td class="px-4 py-2">{{ $course->status }}</td>
                                <td class="px-4 py-2">{{ $course->duration }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-8">
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

<x-flash-message />

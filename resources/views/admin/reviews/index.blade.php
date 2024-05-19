<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Reviews') }}
        </h2>
    </x-slot>

    <div class="py-5 bg-white">
        <div class="container mx-auto">
            <!-- ADD REVIEW -->
            <div class="flex gap-4 justify-end mb-2">
                <a href="{{ route('admin.reviews.create') }}"
                    class="btn btn-primary ">
                    {{ __('Adicionar') }}</a>
            </div>
            <!-- Responsive Table -->
            <div class="table-respondive">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">{{ __('ID') }}</th>
                            <th class="px-4 py-2">{{ __('Titulo') }}</th>
                            <th class="px-4 py-2">{{ __('Curso') }}</th>
                            <th class="px-4 py-2">{{ __('Utilizador') }}</th>
                            <th class="px-4 py-2">{{ __('Rating') }}</th>
                            <th class="px-4 py-2">{{ __('Criado a') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $review)
                            <tr class=""
                                onclick="window.location='{{ route('admin.reviews.edit', $review->id) }}';">
                                <td class="border px-4 py-2">{{ $review->id }}</td>
                                <td class="border px-4 py-2">{{ $review->title }}</td>
                                <td class="border px-4 py-2">{{ $review->course()->first()->title }}</td>
                                <td class="border px-4 py-2">{{ $review->user()->first()->name }}</td>
                                <td class="border px-4 py-2">{{ $review->rating }}</td>
                                <td class="border px-4 py-2">{{ $review->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="m-8">
                    {{ $reviews->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

<x-flash-message />

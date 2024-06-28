<x-student.layout>
   
    <x-slot name="header">
        <div class="flex space-x-4">
            <h2 class="fw-semibold t">
                {{ $course->title }}
            </h2>
        </div>
    </x-slot>

    <section class="py-10 bg-white">
        <div class="max-w-6xl mx-auto px-8">
            <div class="shadow-2xl shadow-black overflow-hidden rounded-2xl p-10">
                <div class="flex items-start mb-5">
                    <div class="border-gray-500 space-y-1">
                        <h4 class="text-2xl font-bold text-gray-900">{{ $review->title }}</h4>
                    </div>
                </div>
                <p class="mb-2 text-gray-500 text-xl break-words">{{ $review->content }}</p>
                <div class="space-y-4 mt-8">
                    <div class="flex flex-row gap-3 relative">
                        <p class=" fs-5 select-none pointer-events-none ">
                            @if ($review->rating == 1)
                                🤨 - insatisfeito
                            @endif
                            @if ($review->rating == 2)
                                🙂 - pouco satisfeito
                            @endif
                            @if ($review->rating == 3)
                                😊 - satisfeito
                            @endif
                            @if ($review->rating == 4)
                                😚 - muito satisfeito
                            @endif
                            @if ($review->rating == 5)
                                😍 - perfeito
                            @endif
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

</x-student.layout>

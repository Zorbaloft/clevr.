<x-student.layout>
    <h2>
        {{ __('As minhas Reviews ') }}
    </h2>
    @foreach ($reviews as $review)
        <div class="mx-auto mt-3 px-4 bg-white">
            <div class="p-5 border rounded shadow">
                <h3 class="fw-semibold text-uppercase ">
                    {{ $review->course->title }}
                </h3>
                <div class="flex items-start  my-4">
                    <h5 class="fw-bold">{{ $review->title }}</h5>
                </div>
                <p class="mb-4 text-secondary text-xl break-words">{{ $review->content }}</p>
                <div class="d-flex justify-content-between ">
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
                    <div class="">
                        <a href="{{ route('student.courses.reviews.edit', [$review->course->slug, $review->id]) }}"
                            class=" px-4 py-2  btn btn-primary  ">
                            <i class="bi bi-pencil-fill"></i>
                        </a>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#confirm-deletion">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>


                    <div class="modal fade" id="confirm-deletion" tabindex="-1" aria-labelledby="confirmDeletionLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form method="post"
                                        action="{{ route('student.courses.reviews.destroy', [$course->slug, $review->id]) }}">
                                        @csrf
                                        @method('delete')

                                        <h5 class="text-lg font-medium text-secondary">
                                            {{ __('Tens a certeza que queres apagar a tua review?') }}
                                        </h5>

                                        <div class="mt-5 d-flex justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{ __('Cancel') }}
                                            </button>

                                            <button type="submit" class="btn btn-danger ms-3">
                                                {{ __('Apagar Review') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
</x-student.layout>

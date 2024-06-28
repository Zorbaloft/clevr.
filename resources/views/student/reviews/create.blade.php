<x-student.layout>

    <section class=" bg-white">
        <div class=" mx-auto ">
            <div class=" overflow-hidden ">

                <h2 class="l fw-semibold text-primary">{{ __('Diz-nos o que achas-te:') }}
                </h2>
                <p class="text-3xl font-bold text-black">{{ $course->title }}</p>

                <form action="{{ route('student.courses.reviews.store', $course->slug) }}" method="POST">
                    @csrf

                    <div class="">
                        <!-- Name -->
                        <div>
                            <label for="title" class="form-label">{{ 'Review Titulo' }} </label>
                            <input id="title" name="title" type="text" class="form-control" autofocus
                                autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div>
                            <label for="content" class="form-label">{{ 'Review Texto' }}</label>
                            <textarea id="content" name="content" rows="4" class="form-control"></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">{{ __('Rating') }}</label>
                            <div class="d-flex flex-column" data-bs-toggle="buttons">
                                <div class="d-flex flex-row gap-3">
                                    <label class="btn btn-outline-primary" onclick="setRating(1)">
                                        <input type="radio" name="rating" id="rating1" autocomplete="off"> 🤨
                                    </label>
                                    <label class="btn btn-outline-primary" onclick="setRating(2)">
                                        <input type="radio" name="rating" id="rating2" autocomplete="off"> 🙂
                                    </label>
                                    <label class="btn btn-outline-primary" onclick="setRating(3)">
                                        <input type="radio" name="rating" id="rating3" autocomplete="off"> 😊
                                    </label>
                                    <label class="btn btn-outline-primary" onclick="setRating(4)">
                                        <input type="radio" name="rating" id="rating4" autocomplete="off"> 😚
                                    </label>
                                    <label class="btn btn-outline-primary" onclick="setRating(5)">
                                        <input type="radio" name="rating" id="rating5" autocomplete="off"> 😍
                                    </label>
                                </div>
                                <input id="rating" type="hidden" name="rating" />
                                <x-input-error class="mt-2" :messages="$errors->get('rating')" />
                            </div>
                        </div>
                        
                        <script>
                            function setRating(value) {
                                document.getElementById('rating').value = value;
                            }
                        </script>


                        <div class="pt-8">
                            <button type="submit" class="btn btn-primary py-3 px-6">
                                {{ __('Criar Review') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-student.layout>
<x-flash-message />

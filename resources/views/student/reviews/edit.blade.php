    <x-student.layout>

    <section class=" bg-white">
        <div class=" mx-auto">
            <div class=" overflow-hidden ">
                <div class=" py-5 mt-5">
                    <p class="fw-bold text-black ">{{ $course->title }}</p>
                </div>
                <form action="{{ route('student.courses.reviews.update', [$course->slug, $review->id]) }}" method="POST"
                    class="px-10 py-5 mb-4">
                    @csrf
                    @method('patch')

                   
                        <!-- Name -->
                        <div>
                            <label class="form-label" for="title" > {{('Review Title')}}</label >
                            <input id="title" name="title" type="text" class="form-control"
                                value="{{old('title', $review->title)}}" autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div>
                            <label class="form-label" for="content"  > {{('Review Text')}}</label>
                            <textarea id="content" name="content" rows="4" class="form-control">{{ old('content', $review->content) }}</textarea>
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


                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary py-3 ">
                                {{ __('Update Review') }}
                            <button>
                        </div>
                   
                </form>
            </div>
        </div>
    </section>

</x-student.layout>

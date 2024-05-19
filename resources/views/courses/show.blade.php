<x-layout>
    <div>
        <x-courses.course-overview :course=$course :lessons=$lessons>
            {{-- Call to action to buy the course --}}
            <div class="mt-10 text-center">
                <a href="#"
                    class="btn btn-primary">
                    {{ __('Comprar') }}
                </a>
            </div>
        </x-courses.course-overview>
    </div>
</x-layout>

<x-layout>
    <div>
        <x-courses.course-overview :course=$course :lessons=$lessons>
            {{-- Call to action to buy the course --}}
            <div class="text-center">

            </div>
        </x-courses.course-overview>
    </div>
    <div class="py-5 mb-5 ">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-12 text-center">
                    <span class="fs-4 text-warning ls-md text-uppercase
         fw-semibold">Faz já a tua inscrição!

                    </span>
                    <h1 class="display-4 fw-bold lh-base">E começa com
                        o curso ainda hoje</h1>

                    <p class="lead ">Estamos excitados em ter-te connosco.</p>
                    <a href="{{ route('direct.purchase', $course->slug) }}" class="btn btn-primary">Comprar Agora</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>

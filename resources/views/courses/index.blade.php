<x-layout>
<div class="container-fluid">
    <h2 class="text-center mb-5">{{ __(' Cursos') }}</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center h-75">
        @foreach ($courses as $course)
            <div class="col">
                <x-courses.single-course :course="$course" />
            </div>
        @endforeach
    </div>
</div>
</x-layout>

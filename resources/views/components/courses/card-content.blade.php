<div class="card-body py-5 px-4">
    <h5 class="card-title mb-4 font-weight-bold">
        <a href="{{ route('courses.show', $course->slug) }}">{{ $course->title }}</a>
    </h5>
    <p class="card-text mb-0">{{ $course->excerpt }}
    </p>
    @if (!empty($course->level))
        <span class="badge bg-primary">{{ $course->level }}</span>
    @endif
</div>
<div class="card-footer border-top py-3 bg-white">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            {{ $course->userCount }} <i class="bi bi-person pr-2"></i>

            {{ $course->duration }} min <i class="bi bi-clock pr-2"></i>
        </div>
        <div>
<<<<<<< HEAD
            <span  class="text-decoration-none">Preço: {{ $course->price }} $</span>
=======
            <span  class="text-decoration-none">Preço: {{ $course->price }} €</span>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
        </div>
    </div>
    
</div>

{{ $slot }}

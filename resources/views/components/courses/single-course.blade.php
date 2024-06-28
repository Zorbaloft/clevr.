<div class="card border-light">
    <img src="{{ asset($course->image_path) }}" class="card-img-top" alt="Course image thumbnail.">
    <div>
        <x-courses.card-content :course="$course" />
    </div>

</div>

@if ($show)
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Parabéns ' + @js($name),
                    ' assistis-te ás aulas todas. Não te esqueças de deixar feedback', 'success')
                .then((value) => {
                    if (value.isConfirmed) {
                        @if (isset($course) && is_object($course))
                            window.location.href =
                                '{{ route('student.courses.reviews.create', [$course->slug]) }}';
                        @endif
                    }
                });
        })
    </script>
@endif
@if ($errors->any())
    @php
        $mensagem = '';
        foreach ($errors->all() as $error) {
            $mensagem .= $error . '<br>';
        }
    @endphp
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Error!', "{!! $mensagem !!}", 'error');
        })
    </script>
@endif

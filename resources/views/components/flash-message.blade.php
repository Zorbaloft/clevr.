@if (session()->has('message'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Pronto!', "{{ session('message') }}", 'message', 'success');
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

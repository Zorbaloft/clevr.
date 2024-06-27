<x-student.layout>
    <!-- Main Content -->

    {{-- heading --}}
    <div class=" pb-2 mb-3 border-bottom">
        <h1 class=" text-black">
            {{ __('Bem vindo de volta, ' . auth()->user()->name) }}
        </h1>
    </div>


    <!-- Cards -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{ 'Meus Cursos' }} </h5>
                    <p class="card-text">{{ 'Ve os cursos nos quais estas inscrito.' }} </p>
                    <a href="{{ route('student.courses.index') }}" class="btn btn-primary"> {{ 'Vêr Cursos' }} </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{ 'As minhas reviews' }} </h5>
                    <p class="card-text"> {{ 'Ve as reviews que deixas-te.' }} </p>
                    <a href="{{route('reviews.index')}}" class="btn btn-primary"> {{ ' Vêr Reviews ' }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ 'Perfil' }} </h5>
                <p class="card-text">{{ 'Acede ao teu perfil e altera os teus dados.' }} </p>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary"> {{ 'Vêr Perfil' }}</a>
            </div>
        </div>
    </div>
    </div>

</x-student.layout>
<x-flash-message />

<x-student.layout>
    {{-- heading --}}
    <div class="container-fluid bg-white">
        <div class="">
<<<<<<< HEAD
            <h2 class="fs-1">{{ __('Os meus settings') }}</h2>
=======
            <h2 class="fs-1">{{ __('Definições') }}</h2>
>>>>>>> 0a4dcae14fae8d74d1e1752f9367d63a0594eb1f
        </div>
    </div>
    {{-- main --}}
    <div class="">
        <div class="mx-auto">
            <div class="p-4  bg-white  ">
                <div class="">
                    @include('auth.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white  ">
                <div class="">
                    @include('auth.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white">
                <div class="max-w-xl">
                    @include('auth.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

</x-student.layout>
<x-flash-message />

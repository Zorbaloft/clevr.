<x-student.layout>
    <!-- Main Content -->
    {{-- heading --}}
    <div class="container-fluid bg-white">
        <div class="">
            <h2 class="fs-1">{{ __('Os meus settings') }}</h2>
        </div>
    </div>


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

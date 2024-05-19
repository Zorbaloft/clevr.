<x-admin.layout>
    <x-slot name="header">
        <h2 class="font-semibold text-uppercase text-secondary ">
            {{ __('Update User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto">
            <div class="p-4 bg-white ">
                <div class="">
                    @include('admin.users.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4  bg-white ">
                <div class="">
                    @include('admin.users.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

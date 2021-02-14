<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--                <x-jet-welcome />--}}

                <div class="card text-center">
                    <div class="card-header">
                        <p>{{ $members->name }}</p>
                    </div>
                    <div class="card-body">
                        <p>{{ $members->name }}</p>
                        <p>{{ $members->username }}</p>
                        <p>{{ $members->address }}</p>
                        <p>{{ $members->membership_type }}</p>
                        <p>{{ $members->user_category }}</p>
                        <p>{{ $members->membership_status }}</p>
                        <p>{{ $members->national_id }}</p>
                        <p>{{ $members->city }}</p>
                        <p>{{ $members->qualification }}</p>
                        <p>{{ $members->job }}</p>
                        <p>{{ $members->social_status }}</p>
                        <p>{{ $members->nationality }}</p>
                        <p>{{ $members->birthday }}</p>
                        <p>{{ $members->place_of_birth }}</p>
                        <p>{{ $members->gender }}</p>
                        <p>{{ $members->religion }}</p>
                        <p>{{ $members->photo_id }}</p>
                        <p>{{ $members->national_photo }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

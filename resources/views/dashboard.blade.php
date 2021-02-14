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
                        <p>أهلا بك في لوحة التحكم</p>
                    </div>
                    <div class="card-body col-md-12">
                        <a href="{{ route('members.create') }}" class="btn btn-primary col-md-12 d-block">إضافة عضو جديد</a><br>
                        <a href="{{ route('members.index') }}" class="btn btn-primary col-md-12 d-block">قائمة الأعضاء الحاليين</a><br>
                        <a href="#" class="btn btn-primary col-md-12 d-block">إستخراج التقارير</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

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
                        <p>كل الأعضاء</p>
                    </div>
                        <div class="col-sm-12">

                            @if(session()->get('delete'))
                                <div class="alert alert-danger">
                                    {{ session()->get('delete') }}
                                </div>
                            @endif
                        </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">اسم العضو</th>
                                <th scope="col">نوعية العضو</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                            <tr>
                                <th scope="row">{{ $member->id}}</th>
                                <td>{{ $member->name}}</td>
                                <td>{{ $member->membership_type }}</td>
                                <td>
                                    <form action="{{ route('members.destroy', $member->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">حذف العضو</button>
                                    </form>
                                    <a href="{{ route('members.show', $member->id) }}" class="btn btn-primary">بيانات العضو</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="col-md-6">
                            {{ $members->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

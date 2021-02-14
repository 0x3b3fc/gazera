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
                        <p>إضافة عضو جديد</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif
                                    <form method="post" action="{{ route('members.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">إسم العضو</label>
                                            <input type="text" class="form-control" name="name"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">اللقب</label>
                                            <input type="text" class="form-control" name="username"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">العنوان</label>
                                            <input type="text" class="form-control" name="address"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="membership_type">نوع العضوية</label>
                                            <input type="text" class="form-control" name="membership_type"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="user_category">الفئة</label>
                                            <select name="user_category" class="form-control" id="user_category">
                                                <option value="عادي">عادي</option>
                                                <option value="شباب و رياضة">شباب و رياضة</option>
                                                <option value="شرطة - قضاء - قوات مسلحة">شرطة - قضاء - قوات مسلحة</option>
                                                <option value="شرفي">شرفي</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="membership_status">حالة العضوية</label>
                                            <select name="membership_status" class="form-control" id="membership_status">
                                                <option value="سارية">سارية</option>
                                                <option value="مسقطة">مسقطة</option>
                                                <option value="موقوفة">موقوفة</option>
                                                <option value="متوفي">متوفي</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="national_id">رقم البطاقة</label>
                                            <input type="text" class="form-control" name="national_id"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="city">المدينة</label>
                                            <input type="text" class="form-control" name="city"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="qualification">المؤهل</label>
                                            <input type="text" class="form-control" name="qualification"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="job">المهنة</label>
                                            <input type="text" class="form-control" name="job"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="social_status">الحالة الإجتماعية</label>
                                            <input type="text" class="form-control" name="social_status"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="nationality">الجنسية</label>
                                            <input type="text" class="form-control" name="nationality"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="birthday">تاريخ الميلاد</label>
                                            <input type="text" class="form-control" name="birthday"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="place_of_birth">محل الميلاد</label>
                                            <input type="text" class="form-control" name="place_of_birth"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="gender">النوع</label>
                                            <input type="text" class="form-control" name="gender"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="religion">الديانة</label>
                                            <input type="text" class="form-control" name="religion"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="photo_id">الصورة الشخصية</label>
                                            <input type="file" class="form-control" name="photo_id"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="national_photo">صورة البطاقة</label>
                                            <input type="file" class="form-control" name="national_photo"/>
                                        </div>


                                        <br>
                                        <button type="submit" class="btn btn-primary">إضافة عضو</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

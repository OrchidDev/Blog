<x-admin-layout>
    <x-slot name="title">
        - مدیریت کاربران
    </x-slot>
    <div class="p-5">
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3"><i class="fa-light fa-user-plus"></i> افزودن کاربر جدید </a>
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th style="width: 10px">شناسه</th>
                <th scope="col">نام و نام خانوادگی</th>
                <th scope="col">ایمیل</th>
                <th scope="col">سطح کاربری</th>
                <th scope="col">تاریخ عضویت</th>
                <th scope="col">وضعیت حساب</th>
                <th scope="col">وضعیت کاربر</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $row)
                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->getRole()}}</td>
                        <td>{{$row->getCreateAtShamsi()}}</td>
                        <td class="text-center">تایید شده</td>
                        <td class="text-center">
                            @if(Cache::has('user-is-online-' . $row->id))
                                <span class="text-success"><i class="fa-light fa-circle"></i> آنلاین</span>
                            @else
                                <span class="text-secondary"><i class="fa-light fa-circle"></i> آفلاین</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="" class="me-3 text-dark"><i class="fa-light fa-edit"></i></a>
                            <a href="" class="text-dark"><i class="fa-light fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>

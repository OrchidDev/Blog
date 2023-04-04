<x-admin-layout>
    <x-slot name="title">
        - مدیریت نوشته ها
    </x-slot>
    <div class="p-5">
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3"><i class="fa-light fa-plus"></i> افزودن نوشته </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="width: 10px;">شناسه</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">متن</th>
                    <th scope="col">نویسنده</th>
                    <th scope="col">تاریخ ایجاد</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td style="width: 300px;">Mark</td>
                    <td>Otto</td>
                    <td style="width: 200px;">@mdo</td>
                    <td style="width: 200px;">@mdo</td>
                    <td style="width: 100px;" class="text-center">
                        <a href="#" class="me-3 text-dark"><i class="fa-light fa-edit"></i></a>
                        <a href="#" class="text-dark"><i class="fa-light fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-admin-layout>

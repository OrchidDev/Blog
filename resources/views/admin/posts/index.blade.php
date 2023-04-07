<x-admin-layout>
    <x-slot name="title">
        - مدیریت نوشته ها
    </x-slot>
    <div class="p-5">
        <div class="row">
            <div class="col-md-8">
                <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3"><i class="fa-light fa-plus"></i> افزودن نوشته </a>
            </div>
            <div class="col-md-4">
                <form action="{{ route('posts.index') }}">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-light fa-search"></i></span>
                        <input type="text" class="form-control" name="search" placeholder="جستجوی نوشته ها ..." aria-label="" aria-describedby="basic-addon1">
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="width: 10px;">شناسه</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">نویسنده</th>
                    <th scope="col">تاریخ ایجاد</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td style="width: 300px;">{{$post->title}}</td>
                        <td style="width: 100px;">{{ $post->user->name }}</td>
                        <td style="width: 100px;">{{$post->getCreateAtShamsi()}}</td>
                        <td style="width: 100px;" class="text-center">
                            <a href="{{ route('posts.edit', $post->id) }}" class="me-3 text-dark"><i class="fa-light fa-edit"></i></a>
                            <a class="text-dark" onclick="event.preventDefault(); document.getElementById('trash-{{$post->id}}').submit()"><i class="fa-light fa-trash"></i></a>
                            <form id="trash-{{$post->id}}" action="{{ route('posts.destroy', $post->id) }}" method="POST">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="title">
        - مدیریت نظرات
    </x-slot>
    <div class="p-5">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">شناسه</th>
                <th scope="col">ارسال کننده</th>
                <th scope="col">برای</th>
                <th scope="col">دیدگاه</th>
                <th scope="col">تاریخ</th>
                <th scope="col">تعداد پاسخ ها</th>
                <th scope="col">وضعیت</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <th scope="row" style="width: 10px;">{{ $comment->id }}</th>
                    <td style="width: 150px;">{{ $comment->user->name }}</td>
                    <td>{{ $comment->post->title }}</td>
                    <td>{{ $comment->content }}</td>
                    <td style="width: 160px;">{{ $comment->getCreateAtShamsi() }}</td>
                    <td style="width: 120px;">{{ $comment->replies_count }}</td>
                    <td style="width: 100px;" class="{{ $comment->is_approved ? 'text-success fw-bold' : 'text-danger fw-bold' }}">{{ $comment->getStatus() }}</td>
                    <td style="width: 130px;" class="text-center">
                        @if($comment->is_approved)
                            <a onclick="event.preventDefault(); document.getElementById('update-comment-{{$comment->id}}').submit()" title="رد"><i class="fa-light fa-x"></i></a>
                        @else
                            <a onclick="event.preventDefault(); document.getElementById('update-comment-{{$comment->id}}').submit()" title="تایید"><i class="fa-light fa-check"></i></a>
                        @endif
                        <a class="text-dark" onclick="event.preventDefault(); document.getElementById('trash-{{ $comment->id }}').submit()"><i class="fa-light fa-trash"></i></a>
                        <form action="{{ route('comments.update', $comment->id) }}" method="post" id="update-comment-{{ $comment->id }}">
                            @csrf
                            @method('put')
                        </form>
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="post" id="trash-{{ $comment->id }}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>

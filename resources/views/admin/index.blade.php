<x-admin-layout>
    <x-slot name="title">
        - میزکار
    </x-slot>
    <div class="p-5">
        <div class="row">
            @if(auth()->user()->role === 'admin' || auth()->user()->role === 'author')
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>تعداد نوشته ها</p>
                        <p>{{ $posts_count }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>تعداد نظرات</p>
                        <p>{{ $comments_count }}</p>
                    </div>
                </div>
            </div>
            @endif
            @if(auth()->user()->role === 'admin')
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p> تعداد کاربران </p>
                        <p>{{ $users_count }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>تعداد دسته بندی ها</p>
                        <p>{{ $categories_count }}</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-admin-layout>
